<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/30/2017
 * Time: 3:14 PM
 */

namespace App\Http\Controllers;


use App\Models\Cities;
use App\Models\Online;
use App\Models\TypeOfCustomer;
use App\Models\Users;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
//    public $smsOTP;

    function __construct()
    {
//        dd(Auth::check());

        if (Auth::check()) {
            view()->share('user', Auth::user());
        }
    }

    public function index(Request $request)
    {
//        $online = Online::scopeGuests(Auth::user());
//        dd($online);
//        $request->session()->forget('login');
//        Auth::logout();
        $login = Auth::check();
//        dd($login);
//        $login = Auth::viaRemember();
        return view('frontend.pages.trangchu', compact('login'));
    }

    public function signin()
    {
//        Online::updateCurrent();
        return view('frontend.pages.dangnhap');
    }

    public function postSigninByPhone(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'password' => 'required|min:6, max:32'
        ], [
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.phone' => 'Định đạng  số điện thoại không hợp lệ',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password không được nhỏ hơn 6 ký tự',
            'password.max' => 'Password không được lớn hơn 32 ký tự'
        ]);
//        dd($request->phone);
//        dd($request->getPassword());
        $remember = $request->input('remember');

        $attempt = Auth::attempt(['phone' => $request->phone, 'password' => $request->password], $remember);
//        dd($attempt);
        if ($attempt) {

//            $phone = \DB::table('sessions')->insert(['phone' => $request->phone]);

            return redirect()->intended('/')->withInput([$request->phone, $request->password]);
        } else {
            return redirect('signin')->with('message', 'Tài khoản hoặc mật khẩu không chính xác');
        }

    }

    public function register()
    {
        return view('frontend.pages.dangky');
    }

    public function phoneValidate(Request $request)
    {
        $user_otp = $request->otp;

        if ($user_otp == Cache::get('otp')) {
            User::create([
                'name' => Cache::get('name'),
                'phone' => Cache::get('phone'),
                'password' => bcrypt(Cache::get('password')),
            ]);
        }
    }

    public function postRegister(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $password = $request->password;
        //create temp user
        $user = User::where('phone', '=', $phone)->first();
        if ($user === null) {

            $otp = random_int(123456, 987654);

            Cache::put("otp", $otp, 2);
            Cache::put("name", $name, 2);
            Cache::put("phone", $phone, 2);
            Cache::put("password", $password, 2);
            $this->sendOTP($phone, $otp);
            return view('frontend.pages.xacnhanOTP', compact('otp'));
        } else {
            Flash::error('Số điện thoại đã tồn tại ');
            return redirect(route('register'));
        }
    }

    private function sendOTP($phone, $otp)
    {
        $APIKey = "6872921844DB48FE9E19498B25434D";
        $SecretKey = "9F75445B3B3CF30D167BE3A502BE3B";
        $YourPhone = $phone;
        $OTP = $otp;
        $Content = "Mã OTP xác nhận đăng ký tài khoản AlphaZ của bạn là " . $OTP;
        $SendContent = urlencode($Content);
        $data = "http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&SmsType=4";
        $curl = curl_init($data);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        return $OTP;
    }

    public function signout()
    {
        Auth::logout();
        return redirect('/');
    }


    public function newPost()
    {
        if (Auth::check()) {
            $type_of_customer = TypeOfCustomer::all();
            $cities = Cities::all();
//            dd($type_of_customer);
            return view('frontend/pages/dangtin', compact('type_of_customer', 'cities'));
        } else {
            return view('frontend.pages.dangnhap');
        }
    }

    public function uploadImages()
    {

//        $ds = DIRECTORY_SEPARATOR;  //1
//
//        $storeFolder = 'uploads';   //2
//
//        if (!empty($_FILES)) {
//
//            $tempFile = $_FILES['file']['tmp_name'];          //3
//
//            $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;  //4
//
//            $targetFile = $targetPath . $_FILES['file']['name'];  //5
//
//            move_uploaded_file($tempFile, $targetFile); //6
//
//        }
    }


}
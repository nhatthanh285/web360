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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;

class HomeController extends Controller
{

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

            return redirect()->intended('/')->withInput([$request->phone,$request->password]);
        } else {
            return redirect('signin')->with('message', 'Tài khoản hoặc mật khẩu không chính xác');
        }

    }

    public function register()
    {
        $online = Online::guest()->count();
        dd($online);
        return view('frontend.pages.dangky');
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


}
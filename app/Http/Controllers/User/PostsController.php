<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/25/2017
 * Time: 11:43 PM
 */
namespace App\Http\Controllers\User;

use App\Http\Requests\Admin\CreateCitiesRequest;
use App\Models\Cities;
use App\Models\Districts;
use App\Models\GroupPost;
use App\Models\Images;
use App\Models\Posts;
use App\Models\Users;
use App\Repositories\Eloquents\PostsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash as FL;
use Prettus\Repository\Criteria\RequestCriteria;
use Response as RP;
use Illuminate\Support\Facades\Auth;

class PostsController extends AppBaseController
{
    private $postsRepository;

    public function __construct(PostsRepository $postsRepo)
    {
        $this->postsRepository = $postsRepo;
//        $this->middleware('admin.check');
    }

    /**
     * Display a listing of the Cities.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->postsRepository->pushCriteria(new RequestCriteria($request));
        $this->postsRepository->applySearch();
        $posts = Posts::orderBy('title', 'ASC')->paginate(10);
        $cities = Cities::all();
        $login = Auth::check();
        return view('frontend.pages.danhsach_sanpham_list', compact('posts','cities','login'));//            ->with('news', $cities);

    }

    /**
     * Show the form for creating a new City.
     *
     * @return Response
     */
    public function create()
    {
        //insert view create city here
        return view('');
    }

    /**
     * Store a newly created City in storage.
     *
     * @param CreateBonusRequest $request
     *
     * @return Response
     */
    public function store(CreateCitiesRequest $request)
    {
        $input = $request->all();

        $city = $this->postsRepository->create($input);

        Flash::success('Thêm thành phố mới thành công.');

        return redirect(route('admin.city.index'));
    }


    /**
     * Display the specified Bonus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postsRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('Không tìm thấy bài đăng');
            return redirect(route('allpost'));
        }
        $images = Images::all()->where('post_id', $post->id);
//        $images = \DB::table('images')->where('post_id',$post->id);
        $user = Users::get()->where('id', $post->user_id)->first();

        if(is_null($post->district)) {
            $address = Cities::get()->where('id', $post->city)->first();
        } else {
            $address = Districts::get()->where('id', $post->district)->first();
        }

        return view('frontend.pages.chitiet_sanpham', compact('images', 'user', 'address'))->with('post', $post);
    }
}
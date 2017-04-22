<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/22/2017
 * Time: 11:10 PM
 */
namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCitiesRequest;
use App\Http\Requests\Admin\UpdateBannersRequest;
use App\Models\Cities;
use App\Repositories\Eloquents\CitiesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CitiesController extends AppBaseController
{
    private $citiesRepository;

    public function __construct(CitiesRepository $citiesRepo)
    {
        $this->citiesRepository = $citiesRepo;
//        $this->middleware('admin.check');
    }

    public function index(Request $request)
    {
        $this->citiesRepository->pushCriteria(new RequestCriteria($request));
        $this->citiesRepository->applySearch();
        $cities = Cities::orderBy('id', 'DESC')->paginate(10);
//        return view('backend.news.index')
//            ->with('news', $cities);
        return $cities;
    }
}
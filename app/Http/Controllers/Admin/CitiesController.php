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

    /**
     * Display a listing of the Cities.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->citiesRepository->pushCriteria(new RequestCriteria($request));
        $this->citiesRepository->applySearch();
        $cities = Cities::orderBy('name', 'ASC')->paginate(10);
        $s1=$cities[0];
//        return view('backend.news.index')
//            ->with('news', $cities);
        return $s1->name;
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

        $city = $this->citiesRepository->create($input);

        Flash::success('Thêm thành phố mới thành công.');

        return redirect(route('admin.city.index'));
    }

}
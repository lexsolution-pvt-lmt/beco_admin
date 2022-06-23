<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

use App\Base\Libraries\QueryFilter\QueryFilterContract;
use App\Base\Filters\Master\CommonMasterFilter;
use DB;
use App\Base\Constants\Auth\Role as RoleSlug;

use App\admin\chargingPoint;


class chargingPointController extends Controller
{
    protected $user;


    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function index(Request $req){

        $page = trans('pages_names.admins');

        $main_menu = 'admin';
        $sub_menu = null;
        
        return view('admin.charging-point.index', compact('page', 'main_menu', 'sub_menu'));


    }

    public function getAllAdmin(QueryFilterContract $queryFilter)
    {
        $url = request()->fullUrl(); //get full url

        if (access()->hasRole(RoleSlug::SUPER_ADMIN)) {
            $query = chargingPoint::query();
            
        }

        $results = $queryFilter->builder($query)->customFilter(new CommonMasterFilter)->paginate();

        return view('admin.charging-point._index', compact('results'));
    }

    public function create(Request $req){

        $page = trans('pages_names.admins');

        $main_menu = 'admin';
        $sub_menu = null;

        return view('admin.charging-point.create' , compact('page', 'main_menu', 'sub_menu'));

    }


    public function store(Request $request){

        $t = new chargingPoint();
        $t->name = $request->name;
        $t->type = $request->type;
        $t->address = $request->address;
        $t->lat = $request->lat;
        $t->long = $request->long;
        $t->status = $request->status;
        $t->save();

        $message = "Successfully added charging point";

        return redirect('/charging-point')->with('success', $message);

    }


}

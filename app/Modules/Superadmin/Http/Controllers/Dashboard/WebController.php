<?php

namespace App\Modules\Superadmin\Http\Controllers\Dashboard;

use App\Models\activitiesModel;
use App\Models\phaseModel;
use App\Models\prospecitModel;
use App\Models\timetabelModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //return view('superadmin::MeetingView.index');
    }

    public function supperadmin()
    {
        $superadmin=prospecitModel::count();
        $phase=prospecitModel::where('phase_id','=',1)->get();
        $time=timetabelModel::count();
        $complit=activitiesModel::count();
        $total=$time+$complit;
        return view('superadmin::dashboard.supperadmin',compact('superadmin','complit','time','total','phase'));
    }



    public function agent()
    {
        $agent=prospecitModel::count();
        $time=timetabelModel::count();
        $complit=activitiesModel::count();
        $phase=prospecitModel::where('phase_id','=',1)->get();

        $total=$time+$complit;
        return view('superadmin::dashboard.agentdashboard',compact('agent','complit','time','total','phase'));
    }


    public function agentsearch(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'from_date' => 'required|max:255',
            'to_date' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::route('agent')->withErrors($validator);
        }
        $start = date("Y-m-d",strtotime($request->input('from_date')));
        $end = date("Y-m-d",strtotime($request->input('to_date')));

        $time = timetabelModel::whereBetween('date', [$start, $end])->orderBy('date','asc')->get();
        $prospecit = prospecitModel::whereBetween('created_at', [$start, $end])->get();
        $activity = activitiesModel::whereBetween('created_at', [$start, $end])->get();
        $phase=prospecitModel::where('phase_id','=',1)->get();

        $t=count($time);
        $a=count($activity);
        $total=$t+$a;
//dd($time);
        return view('superadmin::dashboard.agentfilter',compact('prospecit','activity','time','total','phase'));
    }


    public function superAdminSearch(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'from_date' => 'required|max:255',
            'to_date' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::route('supperadmin')->withErrors($validator);
        }



        $start = date("Y-m-d",strtotime($request->input('from_date')));
        $end = date("Y-m-d",strtotime($request->input('to_date')));

        $time = timetabelModel::whereBetween('date', [$start, $end])->get();
        $prospecit = prospecitModel::whereBetween('created_at', [$start, $end])->get();
        $activity = activitiesModel::whereBetween('created_at', [$start, $end])->get();
        $phase=prospecitModel::where('phase_id','=',1)->get();

        $t=count($time);
        $a=count($activity);
        $total=$t+$a;
//dd($time);
        return view('superadmin::dashboard.superfilter',compact('prospecit','activity','time','total','phase'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function getlogout(){
        Auth::logout();
        return redirect('/login');
    }
}

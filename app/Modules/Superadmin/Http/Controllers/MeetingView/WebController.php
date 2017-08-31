<?php

namespace App\Modules\Superadmin\Http\Controllers\MeetingView;

use App\Models\prospecitModel;
use App\Models\timetabelModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{

    private $prospecit = null;

    public function __construct()
    {
        $this->prospecit=prospecitModel::all();
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $time2=timetabelModel::orderBy('date', 'asc')->orderBy('start_time', 'asc')->get();

        return view('superadmin::MeetingView.index',compact('times','time2'));


    }


    public function details($id)
    {
        $pros=timetabelModel::find($id);
         return view('superadmin::MeetingView.show',compact('pros'));
    }



    public function create()
    {
       // return view('superadmin::AgentAccount.create');
    }

//WHERE order_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'
    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from_date' => 'required|max:255',
            'to_date' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::route('meeting')->withErrors($validator);
        }

        $start = date("Y-m-d",strtotime($request->input('from_date')));
        $end = date("Y-m-d",strtotime($request->input('to_date')));

        $inventory = timetabelModel::whereBetween('date', [$start, $end])->orderBy('date','asc')->get();
           // dd($inventory);

        return view('superadmin::MeetingView.filter',compact('inventory'));

       // print_r($inventory);

        //dd($inventory);

       // return response()->json($inventory);
       // dd($inventory);
         //return $inventory;

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
}

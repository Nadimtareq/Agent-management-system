<?php

namespace App\Modules\Agent\Http\Controllers\Entry;

use App\Models\activitiesModel;
use App\Models\prospecitModel;
use App\Models\timetabelModel;
use Illuminate\Http\Request;
use App\Models\phaseModel;
use App\Http\Requests;
use App\Modules\Agent\Http\Requests\CreateProspectRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WebController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {


        return view('agent::Entry.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $phase = phaseModel::all();
        return view('agent::Entry.create')->with('phase',$phase);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $entry = new prospecitModel();

        $timetable =  new timetabelModel();
      // $activity = new activitiesModel();
        $entry->phase_id = $request->id;
        $entry->client_name = $request->Company_Name;
        $entry->address = $request->Adrress;
        $entry->area = $request->area;
        $entry->pc_1 = $request->Contact_num_one;
        $entry->pc_2 = $request->Contact_num_two;
        $entry->pc_3 = $request->Contact_num_three;
        $entry->remarks = $request->remark;
        $entry->demand = $request->demand;
        $entry->type = Auth::id();
        $entry->created_by =Auth::id();
        $entry->updated_by = Auth::id();

        $entry->save();

      if($entry->id){

        $timetable->date = $request->meeting_date;
        $timetable->start_time = $request->meeting_start;
        $timetable->end_time =  $request->meeting_end;
        $timetable->created_by = Auth::id();
        $timetable->updated_by = Auth::id();
        $timetable->prospecit_id = $entry->id;
        $timetable->save();

         if($timetable->id){

             return Redirect::back()->with('msg','successfully Added');
         }else{
            return Redirect::back()->with('msg','failed to add');
         }
      }

       //$entry->Contact_Person = $request->t;




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('agent::Entry.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEntryRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
     }

  }
    


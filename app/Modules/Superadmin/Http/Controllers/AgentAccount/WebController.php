<?php

namespace App\Modules\Superadmin\Http\Controllers\AgentAccount;


use App\Models\usersModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents=usersModel::all();
        return view('superadmin::AgentAccount.index',compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin::AgentAccount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'contact_num' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::route('agent_account_create')->withErrors($validator);
        }

        $user= new usersModel();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->contact_num=$request->contact_num;
        $user->password=bcrypt($request->password);

        $user->save();

        return Redirect::route('agent_account_create')->with('messege','User inserted succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agentshow=usersModel::find($id);

        return view('superadmin::AgentAccount.show')->with('agentshow',$agentshow);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $agentEdit=usersModel::find($id);
        return view('superadmin::AgentAccount.edit')->with('agentshow',$agentEdit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'contact_num' => 'required',

        ]);

        if ($validator->fails()) {
            return Redirect::route('agent_account_edit',$id)->withErrors($validator);
        }

        $user=usersModel::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->contact_num=$request->contact_num;
        $user->password = bcrypt($request->password);

        $user->update();

        return Redirect::route('agent_account')->with('messege','User Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user=usersModel::find($id);
        $user->delete();
        return Redirect::route('agent_account');
    }
}

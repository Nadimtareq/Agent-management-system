@extends('layouts.master')

@section('title')
    Entry Create
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('entry_store') }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">

                                <div class="user_heading_content">
                                    @if(Session::has('msg'))

                                        <span style="color:gold;font-size: 35px;">{!!Session::get('msg')!!}</span>

                                    @endif
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"></span><span class="sub-heading" id="user_edit_position"> <h3 class="heading_b ">New Entry</h3></span></h2>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="user_content">
                                <div class="uk-margin-top">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <div class="parsley-row">
                                                <select name="id" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                                    <option value="">Select Phase</option>

                                                    @foreach($phase as $item)
                                                        <option value="{!! $item->id !!}">{!! $item->title !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Company Name</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="Company_Name" />
                                        </div>

                                    </div>
                                    @if($errors->has('Company_Name'))

                                        <span style="color:red; position: relative; right:-500px">{!!$errors->first('Company_Name')!!}</span>

                                    @endif

                                    <div class="uk-grid">
                                        <div class="uk-width-medium-1-3">
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">Meeting Date</label>
                                            <input class="md-input" type="Date" id="user_edit_uname_control" name="meeting_date" />
                                        </div>
                                        <div class="uk-width-medium-1-3">
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">Start time</label>
                                            <input class="md-input" type="time" id="user_edit_uname_control" name="meeting_start" />
                                        </div>
                                        <div class="uk-width-medium-1-3">
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">End time</label>
                                            <input class="md-input" type="time" id="user_edit_uname_control" name="meeting_end" />
                                        </div>
                                    </div>
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">
                                            <label for="user_edit_personal_info_control">Adrress</label>
                                            <textarea class="md-input" name="Adrress" id="user_edit_personal_info_control" cols="30" rows="4"></textarea>
                                            @if($errors->has('Adrress'))

                                                <span style="color:red;">{!!$errors->first('Adrress')!!}</span>

                                            @endif
                                       </div>

                                    </div>

                                    <div class="uk-grid">
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Area</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="area" />
                                            @if($errors->has('area'))

                                                <span style="color:red;">{!!$errors->first('area')!!}</span>

                                            @endif
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-4">
                                            <label for="user_edit_uname_control"> Contact Person</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="Contact_Person" />
                                        </div>

                                        <div class="uk-width-medium-1-4">
                                            <label for="user_edit_uname_control"> Contact Number 1</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="Contact_num_one" />
                                        </div>
                                        <div class="uk-width-medium-1-4">
                                            <label for="user_edit_uname_control"> Contact Number 2</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="Contact_num_two" />
                                        </div>
                                        <div class="uk-width-medium-1-4">
                                            <label for="user_edit_uname_control"> Contact Number 2</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="Contact_num_three" />
                                        </div>

                                    </div>


                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">
                                            <label for="user_edit_personal_info_control">Demand</label>
                                            <textarea class="md-input" name="demand" id="user_edit_personal_info_control" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">
                                            <label for="user_edit_personal_info_control">Remarks</label>
                                            <textarea class="md-input" name="remark" id="user_edit_personal_info_control" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>






                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-1 uk-float-right">
                                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                          <a href="{{ route('entry') }}">  <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button> </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
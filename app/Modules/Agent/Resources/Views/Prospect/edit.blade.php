@extends('layouts.master')

@section('title')
    Prospects Edit
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('prospect_update',$pros->id) }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">

                                <div class="user_heading_content">
                                    @if(Session::has('msg'))

                                        <span style="color:goldenrod;font-size: 25px;">{!!Session::get('msg')!!}</span>

                                    @endif
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"></span><span class="sub-heading" id="user_edit_position"> <h3 class="heading_b ">Edit Prospects</h3></span></h2>

                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-margin-top">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <div class="parsley-row">
                                                <select name="phase" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                                    <option value="{{ $pros->phase->id }}">{{ $pros->phase->title }}</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                   {{ csrf_field() }}
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Agent </label>
                                            <input readonly class="md-input" type="text" id="user_edit_uname_control" value="{{ $pros->createdBy->name }}" name="agent_Name" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Company Name</label>
                                            <input readonly class="md-input" type="text" id="user_edit_uname_control" value="{{ $pros->client_name }}" name="Company_Name" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Meeting Date <span id="data_ave"></span></label>
                                            <input  class="md-input" type="text" onchange="checkdate(this)" data-uk-datepicker=""  id="datepicker" value="{{ $pros->timetable->date }}" name="mdate" required />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Start time <span id="start_ave"></span></label>

                                            <input  class="md-input" type="text" onchange="checkstarttime(this)" id="meeting_start" data-uk-timepicker value="{{ $pros->timetable->start_time }}" name="start_time" required />



                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> End time <span id="end_ave"></span></label>

                                            <input  class="md-input" type="text" onchange="checkendtime(this)" id="meeting_end" data-uk-timepicker value="{{ $pros->timetable->end_time }}" name="end_time" required />



                                        </div>

                                    </div>
                                    <div class="uk-grid">
                                        <div class="uk-width-1-2">
                                            <label for="user_edit_personal_info_control">Adrress</label>
                                            <textarea class="md-input" name="Adrress" id="user_edit_personal_info_control" cols="30" rows="4"> {{ $pros->address }}</textarea>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Contact Person</label>
                                            <input class="md-input" type="text" value="" id="user_edit_uname_control" name="Contact_Person" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Contact Number 1</label>
                                            <input class="md-input" type="number" value="{{ $pros->pc_1 }}" id="user_edit_uname_control" name="Contact_num_one" />
                                        </div>

                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Contact Number 2</label>
                                            <input class="md-input" type="Number" value="{{ $pros->pc_2 }}" id="user_edit_uname_control" name="Contact_num_two" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Contact Number 3</label>
                                            <input class="md-input" type="Number" value="{{ $pros->pc_3 }}" id="user_edit_uname_control" name="Contact_num_three" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Area</label>
                                            <input class="md-input" type="text" value="{{ $pros->area }}" id="user_edit_uname_control" name="area" />
                                        </div>

                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <label for="user_edit_uname_control"> Demand</label>

                                            <textarea class="md-input" name="demand" id="user_edit_personal_info_control" cols="30" rows="4">{{ $pros->demand }}</textarea>

                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <label for="user_edit_uname_control"> Remarks </label>

                                            <textarea class="md-input" name="remarks" id="user_edit_personal_info_control" cols="30" rows="4">{{ $pros->remarks }}</textarea>
                                        </div>

                                    </div>


                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-1 uk-float-right">
                                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                          <a href="{{ route('prospect') }}">  <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button> </a>
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
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script>



        $(document).ready(function(){
            $("#meeting_end").change(function(){

                if(start.length!=0 && end.length!=0 && date.length!=0 ) {

                    if(start>end){
                        var dat =  document.getElementById('data_ave');

                        dat.innerText = "Start time should be less than end time";
                        dat.style.color = "red";
                        dat.style.fontSize = "16px";
                    }
                    else
                    {
                        $.get("{{ route('block_time_check') }}",
                                {
                                    date: date,
                                    start: start,
                                    end: end
                                },

                                function (content, status, xhr) {
                                    var data = parseInt(content);
                                    var date =  document.getElementById('data_ave');


                                    if(status=="success"){

                                        if(data==0){
                                            date.innerText = "Available";
                                            date.style.color = "#1976d2";
                                            date.style.fontSize = "20px";


                                        }else{

                                            date.innerText = "Already Blocked";
                                            date.style.color = "red";
                                            date.style.fontSize = "20px";
                                        }

                                    }


                                });
                    }
                }




            });


            //

            $("#meeting_start").change(function(){

                if(start.length!=0 && end.length!=0 && date.length!=0) {

                    if(start>end){
                        var dat =  document.getElementById('data_ave');

                        dat.innerText = "Start time should be less than end time";
                        dat.style.color = "red";
                        dat.style.fontSize = "16px";
                    }
                    else
                    {
                        $.get("{{ route('block_time_check') }}",
                                {
                                    date: date,
                                    start: start,
                                    end: end
                                },

                                function (content, status, xhr) {
                                    var data = parseInt(content);
                                    var date =  document.getElementById('data_ave');


                                    if(status=="success"){

                                        if(data==0){
                                            date.innerText = "Available";
                                            date.style.color = "#1976d2";
                                            date.style.fontSize = "20px";


                                        }else{

                                            date.innerText = "Already Blocked";
                                            date.style.color = "red";
                                            date.style.fontSize = "20px";
                                        }

                                    }


                                });
                    }
                }
            });

            //

            $("#meeting_date").change(function(){

                if(start.length!=0 && end.length!=0 && date.length!=0) {
                    $.get("{{ route('block_time_check') }}",
                            {
                                date: date,
                                start: start,
                                end: end
                            },

                            function (content, status, xhr) {
                                var data = parseInt(content);
                                var date =  document.getElementById('data_ave');


                                if(status=="success"){

                                    if(data==0){
                                        date.innerText = "Available";
                                        date.style.color = "#1976d2";


                                    }else{

                                        date.innerText = "Already Blocked";
                                        date.style.color = "red";
                                        date.style.fontSize = "20px";
                                    }

                                }


                            });
                }
            });

        });

        var end=null;
        var date=null;
        var start=null;
        function checkdate(select_date) {
            var dat =  document.getElementById('data_ave');

            date =select_date.value;
            if(date){
                dat.innerText="Available";
                dat.style.color="#1976d2";

            }
            //  date.innerText();
        }
        function checkstarttime(select_date) {
            //var start_time =  document.getElementById('start_ave')
            start =select_date.value;
        }
        function checkendtime(select_date) {
            // var start_time =  document.getElementById('end_ave')
            //  var start ;
            end= select_date.value;


        }



    </script>

@endsection
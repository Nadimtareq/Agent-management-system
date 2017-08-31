@extends('layouts.master')



@section('title')
   Add Prospects
@endsection



@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('prospect_store') }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">

                                <div class="user_heading_content">
                                    @if(Session::has('msg'))

                                        <span style="color:gold;font-size: 35px;">{!!Session::get('msg')!!}</span>

                                    @endif
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"></span><span class="sub-heading" id="user_edit_position"> <h3 class="heading_b ">New Prospect</h3></span></h2>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="user_content">
                                <div class="uk-margin-top">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            @if($errors->has('phase'))

                                                <span style="color:red;">{!!$errors->first('phase')!!}</span>

                                            @endif
                                            <div class="parsley-row">
                                                <select name="phase" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
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
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">Meeting Date <span id="data_ave"></span></label>

                                            <input class="md-input"  type="date" onchange="checkdate(this)" name="meeting_date" />

                                        </div>
                                        <div class="uk-width-medium-1-3">
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">Start time  <span id="start_ave"></span></label>
                                            <input class="md-input" type="time" onchange="checkstarttime(this)"  id="meeting_start" name="meeting_start" />
                                        </div>
                                        <div class="uk-width-medium-1-3">
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">End time <span id="end_ave"></span></label>
                                            <input class="md-input" type="time" onchange="checkendtime(this)" id="meeting_end" name="meeting_end" />
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
                                            @if($errors->has('Contact_Person'))

                                                <span style="color:red;">{!!$errors->first('Contact_Person')!!}</span>

                                            @endif
                                        </div>

                                        <div class="uk-width-medium-1-4">
                                            <label for="user_edit_uname_control"> Contact Number 1</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="Contact_num_one" />
                                            @if($errors->has('Contact_num_one'))

                                                <span style="color:red;">{!!$errors->first('Contact_num_one')!!}</span>

                                            @endif
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
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script>

            var dated =  document.getElementById('data_ave');
           dated.innerText = "Please Select Date ";
           dated.style.color = "red";

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
            dat.innerText="OK";
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
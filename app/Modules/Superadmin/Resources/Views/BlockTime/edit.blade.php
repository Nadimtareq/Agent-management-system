@extends('layouts.master')

@section('title')
    New Time block
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">

        <div class="uk-width-large-10-10">
            <form action="{!! route('block_time_update',$time->id) !!}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">

                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"></span><span class="sub-heading" id="user_edit_position"> <h3 class="heading_b ">New time block </h3></span></h2>
                                </div>
                            </div>
                            @if(Session::has('msg'))

                                <span style="color:green;font-size: 25px;">{!!Session::get('msg')!!}</span>

                            @endif


                            <div class="user_content">

                                {!! csrf_field() !!}


                                {{--<div class="uk-grid" data-uk-grid-margin>--}}
                                    {{--<div class="uk-width-medium-1-2">--}}
                                        {{--<select name="prospecit_id" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select with tooltip">--}}

                                            {{--@foreach($prospecit as $item)--}}
                                                {{--<option value="{!! $item->id !!}">{!! $item->id !!}</option>--}}
                                            {{--@endforeach--}}

                                        {{--</select>--}}
                                    {{--</div>--}}

                                {{--</div>--}}


                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-2">
                                        <label style="position:relative; top:-10px;"  for="user_edit_uname_control">Date <span id="data_ave"></span></label>
                                        <input class="md-input" type="Date" value="{!! $time->date !!}"  onchange="checkdate(this)" id="user_edit_uname_control" name="date" />
                                    </div>

                                </div>

                                @if($errors->has('date'))

                                    <span style="color:red">{!!$errors->first('date')!!}</span>

                                @endif




                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-2">
                                        <label style="position:relative; top:-10px;" for="user_edit_uname_control">From <span id="start_ave"></span></label>
                                        <input class="md-input" type="time" value="{!! $time->start_time !!}" onchange="checkstarttime(this)"  id="meeting_start" name="start_time" />
                                    </div>

                                </div>

                                @if($errors->has('date'))

                                    <span style="color:red">{!!$errors->first('start_time')!!}</span>

                                @endif

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-2">
                                        <label style="position:relative; top:-10px;" for="user_edit_uname_control">To <span id="end_ave"></span></label>
                                        <input class="md-input" type="time" value="{!! $time->end_time !!}" onchange="checkendtime(this)" id="meeting_end" name="end_time" />
                                    </div>

                                </div>

                                @if($errors->has('date'))

                                    <span style="color:red">{!!$errors->first('end_time')!!}</span>

                                @endif


                                {{--<input class="md-input" type="hidden" id="user_edit_uname_control" value="{!! $user->id !!}" name="created_by" />--}}
                                {{--<input class="md-input" type="hidden" id="user_edit_uname_control" value="{!! $user->id !!}" name="updated_by" />--}}
                                {{--<input class="md-input" type="hidden" id="user_edit_uname_control" value="{!! $prospecit->id !!}" name="prospecit_id" />--}}

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-1-1 uk-float-right">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
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
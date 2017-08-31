@extends('layouts.master')
@section('title')
    Meeting View
@endsection
@section('content')

    <div class="uk-grid uk-grid-width-large-1-1 uk-grid-width-medium-1-1 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
        <form action="{!! route('search')!!}" method="post" >
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                       <label for="uk_dp_end">Start Date</label><input class="md-input" name="from_date" id="from_date" data-uk-datepicker="" id="uk_dp_end" type="text">
                    </div>
                    @if($errors->has('from_date'))

                        <span style="color:red">{!!$errors->first('from_date')!!}</span>

                    @endif
                </div>
                {!! csrf_field() !!}
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                       <label for="uk_dp_end">End Date</label> <input class="md-input" name="to_date" id="to_date" data-uk-datepicker="" id="uk_dp_end" type="text">
                    </div>
                    @if($errors->has('to_date'))

                        <span style="color:red">{!!$errors->first('to_date')!!}</span>

                    @endif
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-width-medium-1-6">
                        <button class="md-btn" type="submit" data-uk-button>Filter</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>


    <div class="md-card-list-wrapper" id="mailbox">
        <?php $pre=''; ?>
        <div class="uk-width-large-8-10 uk-container-center" id="order_table">
        <div id="search_content">

        </div>
        @foreach($time2 as $time)

            <div class="md-card-list">
                @if($pre!=$time->date)
                <div class="md-card-list-header heading_list"><span>{!! $time->date !!}</span></div>
                @endif
                <ul class="hierarchical_slide">
                    @if($time->prospecit_id>0)
                        <li>
                            <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="{!! route('prospect_show',$time->prospecit_id) !!}"><i class="material-icons">&#xE15E;</i>Details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="md-card-list-item-date">{!! $time->start_time !!}-{!! $time->end_time !!}</span>
                            <div class="md-card-list-item-sender">
                                <a href=""><span>{!! $time->prospecit['client_name'] !!}</span></a>
                            </div>
                            <div class="md-card-list-item-subject">
                                <span>{!! $time->prospecit['area'] !!} ,{!! $time->createdBy['name'] !!} ,{!! $time->prospecit['demand'] !!} ,{!! $time->prospecit['pc_1'] !!}</span>

                            </div>
                            <div class="md-card-list-item-content-wrapper">
                                <div class="md-card-list-item-content">
                                    {!! $time->prospecit['remarks'] !!}

                                </div>
                            </div>
                        </li>
                    @else
                        <li>
                            {{--@if($time->start_time>$time->end_time)--}}
                            <span class="md-card-list-item-date">{!! $time->start_time !!}-{!! $time->end_time !!}</span>
                            {{--@endif--}}
                            <div class="md-card-list-item-sender">
                                <span>{!! $time->createdBy['name'] !!}</span>
                            </div>
                            <div class="md-card-list-item-subject">
                                <span style="color: #ff8158;font-size: 20px;">Time Blocked</span>
                            </div>

                        </li>
                    @endif
                </ul>
            </div>
            <?php $pre=$time->date; ?>
        @endforeach

    </div>
    </div>



    <!-- google web fonts -->
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$(function () {--}}
                {{--$("#from_date").datepicker();--}}
                {{--$("#to_date").datepicker();--}}
            {{--});--}}

            {{--$("#filter").click(function () {--}}
               {{--var from_date=$("#from_date").val();--}}
               {{--var to_date=$("#to_date").val();--}}

                {{--if(from_date !='' && to_date !=''){--}}

                    {{--$.ajax({--}}
                        {{--url:"{{route('search')}}",--}}
                        {{--method:"get",--}}
                        {{--data:{from_date:from_date,to_date:to_date},--}}
                        {{--success:function (data) {--}}
                         {{--console.log(data);--}}

                        {{--data.forEach(function(element) {--}}
                                {{--console.log(element);--}}
                            {{--});--}}

                            {{--$("#search_content").html(data);--}}
                        {{--}--}}
                    {{--});--}}
                {{--}else {--}}
                    {{--alert("Please select date");--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$.datepicker.setDefaults({--}}
                {{--dateFormat: 'yy-mm-dd'--}}
            {{--});--}}
            {{--$(function(){--}}
                {{--$("#from_date").datepicker();--}}
                {{--$("#to_date").datepicker();--}}
            {{--});--}}
            {{--$('#filter').click(function(){--}}
                {{--var from_date = $('#from_date').val();--}}
                {{--var to_date = $('#to_date').val();--}}
                {{--if(from_date != '' && to_date != '')--}}
                {{--{--}}
                    {{--$.ajax({--}}
                        {{--url:"filter.php",--}}
                        {{--method:"POST",--}}
                        {{--data:{from_date:from_date, to_date:to_date},--}}
                        {{--success:function(data)--}}
                        {{--{--}}
                            {{--$('#order_table').html(data);--}}
                        {{--}--}}
                    {{--});--}}
                {{--}--}}
                {{--else--}}
                {{--{--}}
                    {{--alert("Please Select Date");--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}







    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <script>
        $(function() {
            if(isHighDensity) {
                // enable hires images
                altair_helpers.retina_images();
            }
            if(Modernizr.touch) {
                // fastClick (touch devices)
                FastClick.attach(document.body);
            }
        });
        $window.load(function() {
            // ie fixes
            altair_helpers.ie_fix();
        });
    </script>
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

@endsection
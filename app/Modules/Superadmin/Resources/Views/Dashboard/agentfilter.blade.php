@extends('layouts.master')

@section('title')
    Agent Dashboard
@endsection

@section('content')




    <div id="page_content_inner">
        <!-- statistics (small charts) -->
        <div class="uk-grid uk-grid-width-large-1-1 uk-grid-width-medium-1-1 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>

            <form class="form-inline" method="post" action="{!! route('search') !!}">
                <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-large-1-4 uk-width-medium-1-1">
                        <div class="uk-input-group">
                            <label for="uk_dp_end">Start Date</label>
                            <input class="md-input" name="from_date" data-uk-datepicker="" id="uk_dp_end" type="text">
                        </div>
                    </div>
                    {!! csrf_field() !!}
                    <div class="uk-width-large-1-4 uk-width-medium-1-1">
                        <div class="uk-input-group">
                            <label for="uk_dp_end">End Date</label>
                            <input class="md-input" name="to_date" data-uk-datepicker="" id="uk_dp_end" type="text">
                        </div>
                    </div>
                    <div class="uk-width-large-1-4 uk-width-medium-1-1">
                        <div class="uk-width-medium-1-6">
                            <button class="md-btn" type="submit" data-uk-button>Filter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
            <div>
                <div class="md-card md-card-hover md-card-overlay">
                    <div class="md-card-content">
                        @if($prospecit)
                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <h1>
                                    {!! count($prospecit) !!}
                                </h1>
                            </div>
                        @else

                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <h3>No Prospecit</h3>
                            </div>

                        @endif
                    </div>
                    <div class="md-card-overlay-content" style="background: #02A8F3;color: white;font-weight: bold;">
                        <div class="uk-clearfix md-card-overlay-header">
                            <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                            <h3>
                                Total Prospecit
                            </h3>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                    </div>
                </div>
            </div>

            <div>
                <div class="md-card md-card-hover md-card-overlay">
                    <div class="md-card-content">
                        @if($total)
                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <h1>
                                    {!! count($total) !!}
                                </h1>
                            </div>
                        @else

                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <h3>No Total meeting</h3>
                            </div>

                        @endif
                    </div>
                    <div class="md-card-overlay-content" style="background: #D62728;color: white;font-weight: bold;">
                        <div class="uk-clearfix md-card-overlay-header">
                            <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                            <h3>
                                Total Meeting
                            </h3>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                    </div>
                </div>
            </div>

            <div>
                <div class="md-card md-card-hover md-card-overlay">
                    <div class="md-card-content">

                        <div class="md-card-content">

                            @if($phase)
                                <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                    <h1>
                                        {!! count($phase) !!}
                                    </h1>
                                </div>
                            @else

                                <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                    <h3>No Customer</h3>
                                </div>

                            @endif

                        </div>


                    </div>
                    <div class="md-card-overlay-content" style="background: #FFA000;color: white;font-weight: bold;">
                        <div class="uk-clearfix md-card-overlay-header">
                            <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                            <h3>
                                Total customer
                            </h3>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                    </div>
                </div>
            </div>

            <div>
                <div class="md-card md-card-hover md-card-overlay">
                    <div class="md-card-content">
                        @if($activity)
                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <h1>
                                    {!! count($activity) !!}
                                </h1>
                            </div>
                        @else

                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <h3>No Completed  Meeting</h3>
                            </div>

                        @endif
                    </div>
                    <div class="md-card-overlay-content" style="background: #7CB342;color: white;font-weight: bold;">
                        <div class="uk-clearfix md-card-overlay-header">
                            <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                            <h3>
                                Total Completed Meeting
                            </h3>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                    </div>
                </div>
            </div>

            <div>
                <div class="md-card md-card-hover md-card-overlay">
                    <div class="md-card-content">
                        @if($time)
                        <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                            <h1>{!! count($time) !!}</h1>
                        </div>
                            @else
                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <h3>No Panding Meeting</h3>
                            </div>

                            @endif
                    </div>
                    <div class="md-card-overlay-content" style="background: #009385;color: white;font-weight: bold;">
                        <div class="uk-clearfix md-card-overlay-header">
                            <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                            <h3>
                                Total Pending Meeting
                            </h3>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- secondary sidebar end -->

    <!-- google web fonts -->
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
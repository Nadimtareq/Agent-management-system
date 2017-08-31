@extends('layouts.master')

@section('title')
    Schedule List
@endsection

@section('content')

    <div class="uk-width-large-10-10">
        <div class="md-card">
            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">

                <div class="user_heading_content">
                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"></span><span class="sub-heading" id="user_edit_position"> <h3 class="heading_b ">All Blocked Time</h3></span></h2>
                </div>
            </div>

            @if(Session::has('msg'))

                <span style="color:green;font-size: 25px; padding-left: 20px;">{!!Session::get('msg')!!}</span>

            @endif

            {{--@if(Session::has('masseg'))--}}

                {{--<span style="color:green;font-size: 25px;">{!!Session::get('masseg)!!}</span>--}}

            {{--@endif--}}
            <div class="md-card-content">
                <div class="uk-margin-bottom">
                    <a href="#" class="md-btn uk-margin-right" id="printTable">Print Table</a>
                    <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                        <button class="md-btn">Columns <i class="uk-icon-caret-down"></i></button>
                        <div class="uk-dropdown">
                            <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>
                        </div>
                    </div>
                </div>
                <div class="uk-overflow-container uk-margin-bottom">
                    <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
                        <thead>
                        <tr>
                            <th data-priority="critical"></th>
                            <th data-priority="critical">Date</th>
                            <th data-priority="1">Start Time</th>
                            <th data-priority="2">End Time</th>


                            <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($times as $item)
                        <tr>
                            <td></td>
                            <td>{!! $item->date !!}</td>
                            <td>{!! $item->start_time !!}</td>
                            <td>{!! $item->end_time !!}</td>



                            <td class="uk-text-center">
                                <a href="{!! route('block_time_show',$item->id) !!}"  ><i class="md-icon material-icons uk-margin-right">&#xE8F4;</i></a>
                                <a href="{!! route('block_time_edit',$item->id) !!}"  ><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
                                <a onclick="deleterow(this); return false" href="{!! route('block_time_delete',$item->id) !!}" class=""><i class="md-icon material-icons">&#xE872;</i></a>


                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
                <ul class="uk-pagination ts_pager">
                    <li data-uk-tooltip title="Select Page">
                        <select class="ts_gotoPage ts_selectize"></select>
                    </li>
                    <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                    <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                    <li><span class="pagedisplay"></span></li>
                    <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                    <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                    <li data-uk-tooltip title="Page Size">
                        <select class="pagesize ts_selectize">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>

        function deleterow(link) {
            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }
    </script>
@endsection
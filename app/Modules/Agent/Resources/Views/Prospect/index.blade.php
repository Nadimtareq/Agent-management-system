@extends('layouts.master')

@section('title')
    Prospects list
@endsection

@section('content')

    <div class="md-card">
        <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">

            <div class="user_heading_content">
                @if(Session::has('msg'))

                    <span style="color:goldenrod;font-size: 25px;">{!!Session::get('msg')!!}</span>

                @endif
                <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"></span><span class="sub-heading" id="user_edit_position"> <h3 class="heading_b ">All Prospects</h3></span></h2>
            </div>
        </div>
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
                        <th data-priority="critical">Phase</th>
                        <th data-priority="critical">Agent</th>
                        <th data-priority="1">Company</th>
                        <th data-priority="2">Area</th>
                        <th data-priority="3">Demand</th>
                        <th data-priority="4">Contact Number </th>

                        <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th data-priority="critical">Phase</th>
                        <th data-priority="critical">Agent</th>
                        <th data-priority="1">Company</th>
                        <th data-priority="2">Area</th>
                        <th data-priority="3">Demand</th>
                        <th data-priority="4">Contact Number </th>
                        <th class="uk-text-center">Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>


                   @foreach($pros as $item)
                    <tr >
                        <td></td>
                        <td>{!! $item->phase->title !!}</td>
                        <td>{!! $item->createdBy->name !!}</td>
                        <td>{!! $item->client_name !!}</td>
                        <td> {!! $item->area !!}</td>
                        <td>{!!  str_limit($item->demand,50) !!}</td>
                        <td>{!! $item->pc_1 !!}</td>
                        <td class="uk-text-center">
                            <a href="{{ route('prospect_show',$item->id) }}"  ><i class="md-icon material-icons uk-margin-right">&#xE8F4;</i></a>

                            <a href="{{ route('prospect_edit',$item->id) }}"  ><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>

                            <a onclick="deleterow(this); return false" href="{{ route('prospect_delete',$item->id) }}" ><i class="md-icon material-icons">&#xE872;</i></a>


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

    <script>

        function deleterow(link) {
            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }
    </script>
@endsection
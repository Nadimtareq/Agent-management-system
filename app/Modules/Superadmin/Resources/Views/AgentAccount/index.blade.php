@extends('layouts.master')

@section('title')
    Agent Account
@endsection

@section('content')




            @if(Session::has('messege'))

                <span style="color:green;font-size: 25px;">{!!Session::get('messege')!!}</span>

            @endif


        <div id="page_content_inner">
            <div class="uk-width-large-10-10">
                <div class="md-card">
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
                                    <th data-priority="critical">Name</th>
                                    <th data-priority="critical">Email</th>
                                    <th data-priority="1">Contact Number</th>

                                    <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
                                </tr>
                                </thead>


                                @foreach($agents as $agent)
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td>{!! $agent->name !!}</td>
                                    <td>{!! $agent->email !!}</td>
                                    <td>{!! $agent->contact_num !!}</td>


                                    <td class="uk-text-center">
                                        <a href="{!! route('agent_account_show',$agent->id) !!}" class="batch-edit"><i class="md-icon material-icons uk-margin-right">&#xE8F4;</i></a>
                                        <a href="{!! route('agent_account_edit',$agent->id) !!}" class="batch-edit"><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
                                        <a onclick="deleterow(this); return false" href="{!! route('agent_account_delete',$agent->id) !!}" class=""><i class="md-icon material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
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
        </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="{!! route('agent_account_create') !!}">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>
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
        <script>

            function deleterow(link) {
                UIkit.modal.confirm('Are you sure?', function(){
                    window.location.href = link;
                });
            }
        </script>
    @endsection
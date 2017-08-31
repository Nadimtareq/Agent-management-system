@extends('layouts.master')

@section('title')
    Details Prospects
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>

                <div class="uk-width-xLarge-1  uk-width-large-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            @if(Session::has('msg'))

                                <span style="color:darkgreen;font-size: 25px; margin-bottom: 20px; position: relative; top:-10px; left:100px;">{!!Session::get('msg')!!}</span>

                            @endif

                                @if(Session::has('del'))

                                    <span style="color:darkgreen;font-size: 25px; margin-bottom: 20px; position: relative; top:-10px; left:100px;">{!!Session::get('del')!!}</span>

                                @endif
                            <h3 class="md-card-toolbar-heading-text">
                                Prospects Details
                                <h4 style="text-align: center;padding-bottom: 5px;">
                                    <b >
                                        {{ $pros->timetable->date }}
                                        {{ $pros->timetable->start_time }}
                                        to
                                        {{ $pros->timetable->end_time }}
                                    </b>
                                </h4>
                            </h3>
                        </div>
                        <div class="md-card-content large-padding">
                            <div class="uk-grid uk-grid-divider uk-grid-medium">
                                <div class="uk-width-large-1-1">

                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Agent Name</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle">{{ $pros->createdBy->name }}</span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Client Name</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle">{{ $pros->client_name }}</span>
                                        </div>
                                    </div>
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Address</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle">{{ $pros->address }}</span>
                                        </div>
                                    </div>
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Conatct Person</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle">{{ $pros->contact_person }}</span>
                                        </div>
                                    </div>
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Conatct Number</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle">{{ $pros->pc_1 }} <br/> {{ $pros->pc_2 }} <br/> {{ $pros->pc_3 }}</span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Prospects Name</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                           {{ $pros->phase->title }}
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Remarks</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            {{ $pros->remarks }}
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">


                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Demand</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            {{ $pros->demand }}
                                        </div>
                                    </div>

                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Created By</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            {{ $pros->createdBy->name }}
                                        </div>
                                    </div>
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Updated By</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            {{ $pros->updatedBy->name }}
                                        </div>
                                    </div>
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Created At</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            {{ $pros->updated_at }}
                                        </div>
                                    </div>
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Updated At</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            {{ $pros->updated_at }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>
            </div>
            @foreach($pros->activities as $item)
            <div class="md-card">
                <div class="md-card-content large-padding">
                    <div class="uk-grid uk-grid-divider uk-grid-medium">

                        <div class="uk-grid">

                            <div class="uk-width-large-1-1">

                                <div class="uk-width-large-1-1">
                                    <h3 style="font-size: large; color:black; font-weight: bold" class="">{{ $item->date }}, {{ $item->start_time }} to  {{ $item->end_time  }}</h3>

                                </div>

                            </div>
                            <div class="uk-grid uk-grid-small">

                                <div style="text-align: justify;" class="uk-width-large-1-1">
                                    {{ $item->remarks }}
                                </div>
                            </div>

                        </div>
                        @if (Auth::user()->type === 0)
                        <a href="{!! route('remarks.edit',$item->id) !!}" ><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
                        <a onclick="deleterow(this); return false" href="{{ route('activity_delete',$item->id) }}" ><i class="md-icon material-icons">&#xE872;</i></a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            @if (Auth::user()->type === 0)
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
                <div class="uk-width-large-10-10">
                    <form action="{{ route('activity_store') }}" method="post" class="uk-form-stacked" id="user_edit_form">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-10-10">
                                <div class="md-card">

                                    <div class="user_content">
                                        <div class="uk-margin-top">



                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <input type="hidden" value="{{ $pros->timetable->date }}" name="date" >
                                                    <input type="hidden" value="{{ $pros->timetable->start_time }}" name="start_time" >
                                                    <input type="hidden" value="{{ $pros->timetable->end_time }}" name="end_time" >
                                                    <input type="hidden" value="{{ $pros->id }}" name="pros_id" >

                                                    {{ csrf_field() }}
                                                    <label for="user_edit_personal_info_control">Remarks</label>
                                                    <textarea class="md-input" name="remarks" id="user_edit_personal_info_control" cols="30" rows="4"></textarea>

                                                </div>
                                            </div>

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
                        </div>

                    </form>
                </div>
            </div>
          @endif


        </div>

    </div>
@endsection
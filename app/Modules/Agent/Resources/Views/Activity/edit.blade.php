@extends('layouts.master')

@section('title')
    Entry list
@endsection

@section('content')
    @if(Session::has('msg'))

        <span style="color:green;font-size: 25px;">{!!Session::get('msg')!!}</span>

    @endif
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('activity_update',$activity->id) }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_content">
                                <div class="uk-margin-top">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">

                                            {{ csrf_field() }}
                                            <label for="user_edit_personal_info_control">Remarks</label>
                                            <textarea class="md-input" name="remarks" id="user_edit_personal_info_control" cols="30" rows="4">{!! $activity->remarks !!}</textarea>

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

@endsection
@extends('layouts.master')

@section('title')
    Phase
@endsection

@section('content')

        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Phase</h3>
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
                <div class="uk-width-large-10-10">
                    <form action="{{ route('phase_store') }}" method="post" class="uk-form-stacked" id="user_edit_form">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-10-10">
                                <div class="md-card">

                                    <div class="user_content">
                                        <div class="uk-margin-top">



                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-2">
                                                    @if(Session::has('msg'))

                                                        <span style="color:green;font-size: 25px;">{!!Session::get('msg')!!}</span>

                                                    @endif
                                                    <label for="user_edit_uname_control">Phase Title</label>
                                                    <input class="md-input" type="text" id="user_edit_uname_control" name="title" />
                                                 </div>

                                            </div>
                                            @if($errors->has('title'))

                                                <span style="color:red">{!!$errors->first('title')!!}</span>

                                            @endif
                                            {{ csrf_field() }}
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <label for="user_edit_personal_info_control">Phase Summary</label>
                                                    <textarea class="md-input" name="summary" id="user_edit_personal_info_control" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>
                                            @if($errors->has('summary'))

                                                <span style="color:red">{!!$errors->first('summary')!!}</span>

                                            @endif
                                            <input class="md-input" type="hidden" id="user_edit_uname_control" name="" />
                                            <input class="md-input" type="hidden" id="user_edit_uname_control" name="" />

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
        </div>

    @endsection
@extends('layouts.master')

@section('title')
    Phase
@endsection

@section('content')

    <div id="page_content_inner">
        @if(Session::has('msg'))

            <span style="color:green;font-size: 25px;">{!!Session::get('msg')!!}</span>

        @endif
        <h3 class="heading_b uk-margin-bottom">Phase Edit</h3>
        <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
            <div class="uk-width-large-10-10">
                <form action="{{ route('phase_update',$phase->id) }}" method="post" class="uk-form-stacked" id="user_edit_form">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-10-10">
                            <div class="md-card">

                                <div class="user_content">
                                    <div class="uk-margin-top">



                                        <div class="uk-grid" data-uk-grid-margin>
                                            <input type="hidden" name="id" value="{!! $phase->id !!}"/>
                                            <div class="uk-width-medium-1-2">

                                                <label for="user_edit_uname_control">Phase Title</label>
                                                <input class="md-input" type="text" id="user_edit_uname_control" value=" {!! $phase->title !!}" name="title" />
                                            </div>

                                        </div>
                                        @if($errors->has('title'))

                                            <span style="color:red">{!!$errors->first('title')!!}</span>

                                        @endif

                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">

                                                <label for="user_edit_personal_info_control">Phase Summary</label>

                                                <textarea class="md-input"  name="summary" id="user_edit_personal_info_control" cols="30" rows="4">  {!! $phase->summary !!}</textarea>

                                            </div>

                                        </div>
                                        @if($errors->has('summary'))

                                            <span style="color:red">{!!$errors->first('summary')!!}</span>

                                        @endif
                                        {{ csrf_field() }}
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
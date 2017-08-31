@extends('layouts.master')

@section('title')
    Phase
@endsection

@section('content')


        <div id="page_content_inner">
            @if(Session::has('messege'))

                <span style="color:green;font-size: 25px;">{!!Session::get('messege')!!}</span>

            @endif
            <h3 class="heading_b uk-margin-bottom">Agent</h3>
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
                <div class="uk-width-large-10-10">



                    <form action="{!! route('agent_account_store') !!}" method="post" class="uk-form-stacked" id="user_edit_form">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-10-10">
                                <div class="md-card">
                                    <div class="user_content">
                                        <div class="uk-margin-top">

                                            {!! csrf_field() !!}

                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-2">
                                                    <label for="user_edit_uname_control">Agent Name</label>
                                                    <input class="md-input" type="text" id="user_edit_uname_control" name="name" />
                                                </div>

                                            </div>

                                            @if($errors->has('name'))

                                                <span style="color:red">{!!$errors->first('name')!!}</span>

                                            @endif


                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-2">
                                                    <label for="user_edit_uname_control">Agent Email</label>
                                                    <input class="md-input" type="email" id="user_edit_uname_control" name="email" />
                                                </div>

                                            </div>

                                            @if($errors->has('name'))

                                                <span style="color:red">{!!$errors->first('name')!!}</span>

                                            @endif


                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-2">
                                                    <label for="user_edit_uname_control">Contact Number</label>
                                                    <input class="md-input" type="text" id="user_edit_uname_control" name="contact_num" />
                                                </div>

                                            </div>

                                            @if($errors->has('contact_num'))

                                                <span style="color:red">{!!$errors->first('contact_num')!!}</span>

                                            @endif


                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-2">
                                                    <label for="user_edit_uname_control">password</label>
                                                    <input class="md-input" type="password" id="user_edit_uname_control" name="password" />
                                                </div>

                                            </div>

                                            @if($errors->has('password'))

                                                <span style="color:red">{!!$errors->first('password')!!}</span>

                                            @endif


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
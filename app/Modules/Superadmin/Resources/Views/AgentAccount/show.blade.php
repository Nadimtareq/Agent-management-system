@extends('layouts.master')

@section('title')
    Phase
@endsection

@section('content')
    <div id="page_content_inner">
        <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
            <div class="uk-width-large-10-10">
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>

                    <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
                        <div class="md-card">
                            <div class="md-card-toolbar">
                                <h3 class="md-card-toolbar-heading-text">
                                    Agent Details
                                </h3>
                            </div>
                            <div class="md-card-content large-padding">
                                <div class="uk-grid uk-grid-divider uk-grid-medium">
                                    <div class="uk-width-large-1-2">

                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-muted uk-text-small">Name</span>
                                            </div>
                                            <div class="uk-width-large-2-3">
                                                <span class="uk-text-large uk-text-middle">{!! $agentshow->name !!}</span>
                                            </div>
                                        </div>
                                        <hr class="uk-grid-divider">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-muted uk-text-small">Email</span>
                                            </div>
                                            <div class="uk-width-large-2-3">
                                                <span class="uk-text-large uk-text-middle">{!! $agentshow->email !!}</span>
                                            </div>
                                        </div>

                                        <hr class="uk-grid-divider">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-muted uk-text-small">Contact Number</span>
                                            </div>
                                            <div class="uk-width-large-2-3">
                                                {!! $agentshow->contact_num !!}
                                            </div>
                                        </div>


                                        <hr class="uk-grid-divider">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
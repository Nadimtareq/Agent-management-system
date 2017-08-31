@extends('layouts.master')

@section('title')
    Prospecit Details
@endsection

@section('content')


    <div class="uk-grid uk-grid-medium" data-uk-grid-margin>

        <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <h3 class="md-card-toolbar-heading-text">
                        Prospecit Details
                    </h3>
                </div>
                <div class="md-card-content large-padding">
                    <div class="uk-grid uk-grid-divider uk-grid-medium">
                        <div class="uk-width-large-1-2">

                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-medium">{!! $pros->prospecit['client_name'] !!}</span>
                                </div>
                                <div class="uk-width-large-2-3">
                                    <span class="uk-text-large uk-text-middle"></span>
                                </div>
                            </div>

                            <hr class="uk-grid-divider">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-medium">{!! $pros->prospecit['pc_1'] !!}</span>
                                </div>
                                <div class="uk-width-large-2-3">

                                </div>
                            </div>
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-medium">{!! $pros->prospecit['address'] !!}</span>
                                </div>
                                <div class="uk-width-large-2-3">

                                </div>
                            </div>

                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-medium">{!! $pros->prospecit['area'] !!}</span>
                                </div>
                                <div class="uk-width-large-2-3">

                                </div>
                            </div>

                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-medium">{!! $pros->prospecit['remarks'] !!}</span>
                                </div>
                                <div class="uk-width-large-2-3">

                                </div>
                            </div>

                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-medium">{!! $pros->prospecit['demand'] !!}</span>
                                </div>
                                <div class="uk-width-large-2-3">

                                </div>
                            </div>




                            <hr class="uk-grid-divider">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@extends('layouts.master')

@section('title')
    Block Time details
@endsection

@section('content')
    <div class="uk-grid uk-grid-medium" data-uk-grid-margin>

        <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <h3 class="md-card-toolbar-heading-text">
                        Block Details
                    </h3>
                </div>
                <div class="md-card-content large-padding">
                    <div class="uk-grid uk-grid-divider uk-grid-medium">
                        <div class="uk-width-large-1-2">

                            <div class="uk-grid uk-grid-small">Date:
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-small">{!! $time->date !!}</span>
                                </div>

                            </div>

                            <hr class="uk-grid-divider">
                            <div class="uk-grid uk-grid-small">Start Time:

                                <div class="uk-width-large-2-3">
                                    <span class="uk-text-large uk-text-middle">{!! $time->start_time !!}</span>
                                </div>


                            </div>


                            <hr class="uk-grid-divider">


                            <div class="uk-grid uk-grid-small">End Time:

                                <div class="uk-width-large-2-3">
                                    <span class="uk-text-large uk-text-middle">{!! $time->end_time !!}</span>
                                </div>
                            </div>
                            <hr class="uk-grid-divider">




                            <div class="uk-grid uk-grid-small">Created By:

                                <div class="uk-width-large-2-3">
                                    <span class="uk-text-large uk-text-middle">{!! Auth::user()->name !!}</span>
                                </div>
                            </div>

                            <div class="uk-grid uk-grid-small">Updated By:

                                <div class="uk-width-large-2-3">
                                    <span class="uk-text-large uk-text-middle">{!! Auth::user()->name !!}</span>
                                </div>
                            </div>

                            <div class="uk-grid uk-grid-small">Created At:

                                <div class="uk-width-large-2-3">
                                    <span class="uk-text-large uk-text-middle">{!! $time->created_at !!}</span>
                                </div>
                            </div>
                            <div class="uk-grid uk-grid-small"> Updated At:

                                <div class="uk-width-large-2-3">
                                    <span class="uk-text-large uk-text-middle">{!! $time->updated_at !!}</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
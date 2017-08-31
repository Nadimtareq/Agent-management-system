@extends('layouts.master')

@section('title')
    Phase Details
@endsection

@section('content')
    <div class="uk-grid uk-grid-medium" data-uk-grid-margin>

        <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <h3 class="md-card-toolbar-heading-text">
                        Phase Details
                    </h3>
                </div>
                <div class="md-card-content large-padding">
                    <div class="uk-grid uk-grid-divider uk-grid-medium">
                        <div class="uk-width-large-1-2">

                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-small">Title</span>
                                </div>
                                <div class="uk-width-large-2-3">
                                    <span class="uk-text-large uk-text-middle">{!! $phase->title !!}</span>
                                </div>
                            </div>

                            <hr class="uk-grid-divider">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-small">Created At</span>
                                </div>
                                <div class="uk-width-large-2-3">
                                    {!! $phase->created_at !!}
                                </div>
                            </div>
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-small">Updated At</span>
                                </div>
                                <div class="uk-width-large-2-3">
                                    {!! $phase->updated_at !!}
                                </div>
                            </div>
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-small">Created By</span>
                                </div>
                                <div class="uk-width-large-2-3">
                                    {!! $phase->createdBy->name !!}
                                </div>
                            </div>
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-large-1-3">
                                    <span class="uk-text-muted uk-text-small">Updated By</span>
                                </div>
                                <div class="uk-width-large-2-3">
                                    {!! $phase->updatedBy->name !!}
                                </div>
                            </div>


                            <hr class="uk-grid-divider">
                        </div>
                        <div class="uk-width-large-1-2">

                            <p>
                                <span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">Summary</span>
                                {!! $phase->summary !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
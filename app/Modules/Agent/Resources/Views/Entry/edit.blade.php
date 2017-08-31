@extends('layouts.master')

@section('title')
   Edit Entry
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">

                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"></span><span class="sub-heading" id="user_edit_position"> <h3 class="heading_b ">Edit Entry</h3></span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-margin-top">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <div class="parsley-row">
                                                <select id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                                    <option value="">Select Phase</option>
                                                    <option value="a">phase 1</option>
                                                    <option value="b">Phase 2</option>
                                                    <option value="c">phase 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Company Name</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="Company_Name" />
                                        </div>

                                    </div>
                                    <div class="uk-grid">
                                        <div class="uk-width-medium-1-3">
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">Meeting Date</label>
                                            <input class="md-input" type="Date" id="user_edit_uname_control" name="meeting_date" />
                                        </div>
                                        <div class="uk-width-medium-1-3">
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">Start time</label>
                                            <input class="md-input" type="time" id="user_edit_uname_control" name="meeting_date" />
                                        </div>
                                        <div class="uk-width-medium-1-3">
                                            <label style="position:relative;top:-8px; " for="user_edit_uname_control">End time</label>
                                            <input class="md-input" type="time" id="user_edit_uname_control" name="meeting_date" />
                                        </div>
                                    </div>
                                    <div class="uk-grid">
                                        <div class="uk-width-1-2">
                                            <label for="user_edit_personal_info_control">Adrress</label>
                                            <textarea class="md-input" name="Adrress" id="user_edit_personal_info_control" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Contact Person</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="Contact_Person/" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Contact Number 1</label>
                                            <input class="md-input" type="number" id="user_edit_uname_control" name="Contact_num_one" />
                                        </div>

                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Contact Number 2</label>
                                            <input class="md-input" type="Number" id="user_edit_uname_control" name="Contact_num_two" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Contact Number 3</label>
                                            <input class="md-input" type="Number" id="user_edit_uname_control" name="Contact_num_three" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Area</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="area" />
                                        </div>

                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Demand</label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="demand" />
                                        </div>

                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label for="user_edit_uname_control"> Remarks </label>
                                            <input class="md-input" type="text" id="user_edit_uname_control" name="remarks" />
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

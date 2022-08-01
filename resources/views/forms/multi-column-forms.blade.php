@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
            <div class="breadcrumb">
                <h1>Multi Column Forms</h1>
                <ul>
                    <li><a href="">Forms</a></li>
                    <li>Multi Column Forms</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="2-columns-form-layout">
                <div class="">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- start card -->
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> 2 Columns Form Layout</h3>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">


                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail1" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputEmail1" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your full name
                                                </small>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail2" class="ul-form__label">Contact Number:</label>
                                                <input type="text" class="form-control" id="inputEmail2" placeholder="Enter Contact Number">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your contact number
                                                </small>
                                            </div>
                                        </div>


                                        <div class="custom-separator"></div>


                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail3" class="ul-form__label">Address:</label>
                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your address">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-Map-Marker"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your address
                                                </small>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="ul-form__label">Postcode:</label>
                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your postcode">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-New-Mail"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your postcode
                                                </small>
                                            </div>
                                        </div>


                                        <div class="custom-separator"></div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6 ">
                                                <label for="inputEmail5" class="ul-form__label">User Group:</label>
                                                <div class="ul-form__radio-inline">
                                                    <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                        <input type="radio" name="radio" value="0">
                                                        <span class="ul-form__radio-font">Sales Person</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="ul-radio__position radio radio-primary">
                                                        <input type="radio" name="radio" value="0">
                                                        <span class="ul-form__radio-font">Customer</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please select user group
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="button" class="btn  btn-primary m-1">Save</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>


                                                    <button type="button" class="btn  btn-danger m-1 footer-delete-right">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                            <!-- end card -->


                            <!--begin::form 2-->
                            <form action="">
                                <!-- start card 2 Columns Horizontal Form Layout-->
                                <div class="card ul-card__margin-25">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> 2 Columns Horizontal Form Layout</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="staticEmail6" class="ul-form__label ul-form--margin col-lg-3 col-form-label ">Full
                                                Name:</label>
                                            <div class="col-lg-2">
                                                <input type="text" class="form-control" id="staticEmail6" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your full name
                                                </small>
                                            </div>

                                            <label for="staticEmail7" class="ul-form__label ul-form--margin col-lg-3 col-form-label ">Contact
                                                Number:</label>
                                            <div class="col-lg-2">
                                                <input type="text" class="form-control" id="staticEmail7" placeholder="Enter Contact Number">
                                                <small id="passwordHelpBlock" class="ul-form__text ">
                                                    Please enter your Contact Number
                                                </small>
                                            </div>
                                        </div>



                                        <div class="custom-separator"></div>



                                        <div class="form-group row">
                                            <label for="staticEmail8" class="ul-form__label ul-form--margin col-lg-3 col-form-label ">Address:</label>
                                            <div class="col-lg-2">

                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="inputEmail8" placeholder="Enter your address">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-Map-Marker"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your address
                                                </small>
                                            </div>

                                            <label for="staticEmail9" class="ul-form__label ul-form--margin col-lg-3 col-form-label ">Postcode:</label>
                                            <div class="col-lg-2">
                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="inputEmail9" placeholder="Enter your postcode">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-New-Mail"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your postcode
                                                </small>
                                            </div>
                                        </div>

                                        <div class="custom-separator"></div>
                                        <div class="form-group row">
                                            <label for="staticEmail10" class="ul-form__label ul-form--margin col-lg-3 col-form-label ">Group:</label>
                                            <div class="col-lg-2">

                                                <div class="ul-form__radio-inline">
                                                    <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                        <input type="radio" name="radio" value="0">
                                                        <span class="ul-form__radio-font">Sales Person</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="ul-radio__position radio radio-primary">
                                                        <input type="radio" name="radio" value="0">
                                                        <span class="ul-form__radio-font">Customer</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your address
                                                </small>
                                            </div>



                                        </div>



                                    </div>
                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row text-right">
                                                <div class="col-lg-4 ">
                                                    <button type="button" class="btn btn-primary m-1">Save</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card 2 Columns Horizontal Form Layout-->
                            </form>
                            <!-- end::form 2-->
                            <!-- start card 3 Columns  Form Layout-->
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> 3 Columns Form Layout</h3>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">


                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputtext11" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputtext11" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your full name
                                                </small>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail12" class="ul-form__label">Contact Number:</label>
                                                <input type="text" class="form-control" id="inputEmail12" placeholder="Enter Contact Number">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your contact number
                                                </small>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputEmail13" class="ul-form__label">Username:</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-transparent">
                                                            <i class="i-Checked-User"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your username
                                                </small>
                                            </div>


                                        </div>


                                        <div class="custom-separator"></div>


                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputtext14" class="ul-form__label">Contact:</label>
                                                <input type="text" class="form-control" id="inputtext14" placeholder="Enter contact number ">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your contact
                                                </small>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail15" class="ul-form__label">Fax:</label>
                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="inputEmail15" placeholder="Fax Number">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-Information"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your Fax
                                                </small>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputEmail16" class="ul-form__label">Address:</label>
                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="inputEmail16" placeholder="Enter your address">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-Map-Marker"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your address
                                                </small>
                                            </div>





                                        </div>


                                        <div class="custom-separator"></div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4 mr-2">
                                                <label for="inputEmail17" class="ul-form__label">Postcode:</label>
                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="inputEmail17" placeholder="Enter your postcode">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-New-Mail"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your postcode
                                                </small>
                                            </div>
                                            <div class="form-group col-md-4 ">
                                                <label for="inputEmail18" class="ul-form__label">User Group:</label>
                                                <div class="ul-form__radio-inline">
                                                    <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                        <input type="radio" name="radio" value="0">
                                                        <span class="ul-form__radio-font">Sales Person</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="ul-radio__position radio radio-primary">
                                                        <input type="radio" name="radio" value="0">
                                                        <span class="ul-form__radio-font">Customer</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please select user group
                                                </small>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <button type="button" class="btn  btn-primary m-1">Save</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <!-- end::form 3-->

                            </div>
                            <!-- end card 3-->
                            <!--begin::form 3 Horizontal-->
                            <form action="">
                                <!-- start card 3 Columns Horizontal Form Layout-->
                                <div class="card ul-card__margin-25">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> 3 Columns Horizontal Form Layout</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="staticEmail19" class="ul-form__label ul-form--margin col-lg-1   col-form-label ">Full
                                                Name:</label>
                                            <div class="col-lg-3 ">
                                                <input type="text" class="form-control" id="staticEmail19" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your full name
                                                </small>
                                            </div>

                                            <label for="staticEmail20" class="ul-form__label ul-form--margin col-lg-1 col-form-label ">Email:</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="staticEmail20" placeholder="Enter Your Email">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your Email
                                                </small>
                                            </div>

                                            <label for="staticEmail21" class="ul-form__label ul-form--margin col-lg-1 col-form-label ">Username:</label>
                                            <div class="col-lg-3">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-transparent">
                                                            <i class="i-Checked-User"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your Email
                                                </small>
                                            </div>
                                        </div>



                                        <div class="custom-separator"></div>

                                        <div class="form-group row">
                                            <label for="staticEmail22" class="ul-form__label ul-form--margin col-lg-1 col-form-label ">Contact:</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="staticEmail22" placeholder="Enter contact number">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your contact number
                                                </small>
                                            </div>

                                            <label for="staticEmail23" class="ul-form__label ul-form--margin col-lg-1 col-form-label ">Fax:</label>
                                            <div class="col-lg-3">

                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="staticEmail23" placeholder="Enter your fax">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-Information"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your fax
                                                </small>
                                            </div>

                                            <label for="staticEmail24" class="ul-form__label ul-form--margin col-lg-1 col-form-label ">Address:</label>
                                            <div class="col-lg-3">

                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="staticEmail24" placeholder="Enter your address">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-Map-Marker"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your address
                                                </small>
                                            </div>
                                        </div>





                                        <div class="custom-separator"></div>
                                        <div class="form-group row">

                                            <label for="staticEmail25" class="ul-form__label ul-form--margin col-lg-1 col-form-label ">Postcode:</label>
                                            <div class="col-lg-2">
                                                <div class="input-right-icon">
                                                    <input type="text" class="form-control" id="inputEmail25" placeholder="Enter your postcode">
                                                    <span class="span-right-input-icon">
                                                        <i class="ul-form__icon i-New-Mail"></i>
                                                    </span>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your postcode
                                                </small>
                                            </div>

                                            <label for="staticEmail26" class="ul-form__label ul-form--margin col-lg-1 col-form-label ">User
                                                Group:</label>
                                            <div class="col-lg-2">

                                                <div class="ul-form__radio-inline">
                                                    <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                        <input type="radio" name="radio" value="0">
                                                        <span class="ul-form__radio-font">Sales Person</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="ul-radio__position radio radio-primary">
                                                        <input type="radio" name="radio" value="0">
                                                        <span class="ul-form__radio-font">Customer</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>

                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your address
                                                </small>
                                            </div>



                                        </div>



                                    </div>
                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row text-center">
                                                <div class="col-lg-12 ">
                                                    <button type="button" class="btn btn-primary m-1">Save</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card 3 Columns Horizontal Form Layout-->
                            </form>
                            <!-- end::form 3-->





                        </div>

                    </div>
                    <!-- end of main row -->
                </div>
            </div>

@endsection

@section('page-js')




@endsection

@section('bottom-js')




@endsection

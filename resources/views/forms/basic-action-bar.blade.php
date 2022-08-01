@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
         <div class="breadcrumb">
                <h1>Basic Action Bar</h1>
                <ul>
                    <li><a href="">Forms</a></li>
                    <li>Basic action bar</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <!-- begin::basic action bar -->
            <section class="basic-action-bar">
                <div class="">
                    <!-- begin::main-row -->
                    <div class="row">
                        <!-- start default action bar -->
                        <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> Default Action Bar</h3>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Please enter your full name
                                            </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Email Address:</label>
                                                <input type="email" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                We'll never share your email with anyone else
                                            </small>
                                            </div>

                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Communication:</div>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" checked="">
                                        <span>Email</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>SMS</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>Phone</span>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="button" class="btn  btn-primary m-1">Submit</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>


                                                    <button type="button" class="btn  btn-danger m-1 footer-delete-right">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>
                        <!-- end default action bar -->

                        <!-- start no layout bar -->
                        <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> No Layout</h3>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your full name
                                                </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Email Address:</label>
                                                <input type="email" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    We'll never share your email with anyone else
                                                </small>
                                            </div>

                                        </div>
                                        <!-- <div class="custom-separator"></div> -->
                                        <div class="card-title">Communication:</div>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" checked="">
                                            <span>Email</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" >
                                            <span>SMS</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" >
                                            <span>Phone</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="button" class="btn  btn-primary m-1">Submit</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>


                                                    <button type="button" class="btn  btn-danger m-1 footer-delete-right">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>
                        <!-- end no layout bar -->

                        <!-- start Right Action Bar -->
                        <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> Right Action Bar</h3>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Please enter your full name
                                            </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Email Address:</label>
                                                <input type="email" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                We'll never share your email with anyone else
                                            </small>
                                            </div>

                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Communication:</div>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" checked="">
                                        <span>Email</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>SMS</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>Phone</span>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button type="button" class="btn  btn-primary m-1">Submit</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>
                        <!-- end Right Action Bar -->

                        <!-- start Solid Bar -->
                        <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> Solid Bar</h3>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Please enter your full name
                                            </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Email Address:</label>
                                                <input type="email" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                We'll never share your email with anyone else
                                            </small>
                                            </div>

                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Communication:</div>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" checked="">
                                        <span>Email</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>SMS</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>Phone</span>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button type="button" class="btn  btn-primary m-1">Submit</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>
                        <!-- end Solid Bar -->

                        <!-- start Multiple Buttons -->
                        <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> Multiple Buttons</h3>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Please enter your full name
                                            </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Email Address:</label>
                                                <input type="email" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                We'll never share your email with anyone else
                                            </small>
                                            </div>

                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Communication:</div>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" checked="">
                                        <span>Email</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>SMS</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>Phone</span>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="button" class="btn  btn-primary m-1">Submit</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>


                                                    <button type="button" class="btn  btn-danger m-1 footer-delete-right">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>

                        <!-- end Multiple Buttons -->

                        <!-- start Top & Bottom Actions Bars -->
                        <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> Top & Bottom Actions Bars</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="top-action-bar">
                                        <div class="row">

                                            <div class="col-lg-12 text-right">
                                                <button type="button" class="btn  btn-primary m-1">Submit</button>
                                                <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Please enter your full name
                                            </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Email Address:</label>
                                                <input type="email" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                We'll never share your email with anyone else
                                            </small>
                                            </div>

                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Communication:</div>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" checked="">
                                        <span>Email</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>SMS</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" >
                                        <span>Phone</span>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button type="button" class="btn  btn-primary m-1">Submit</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>
                        <!-- end Top & Bottom Actions Bars -->

                        <!-- start Action Button & Link -->
                        <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> Default Action Bar</h3>
                                </div>
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Full Name:</label>
                                                <input type="text" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please enter your full name
                                                </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Email Address:</label>
                                                <input type="email" class="form-control" id="inputtext4" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    We'll never share your email with anyone else
                                                </small>
                                            </div>

                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Communication:</div>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" checked="">
                                            <span>Email</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" >
                                            <span>SMS</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" >
                                            <span>Phone</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button type="button" class="btn  btn-primary m-1">Submit</button>
                                                    <span>or</span>
                                                    <a href="">Cancel</a>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>
                        <!-- end Action Button & Link -->
                        <!-- start Hirozontal Form Layout -->
                        <div class="col-lg-6 mb-3">
                            <!--begin::form 2-->
                            <form action="">
                                <!-- start card  Horizontal Form Layout-->
                                <div class="card ul-card__margin-25">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> Horizontal Form Layout</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="action-bar-horizontal-label col-lg-4 col-form-label ">Full Name:</label>
                                            <div class="col-lg-6 mb-4">
                                                <input type="text" class="form-control" id="staticEmail" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            Please enter your full name
                                        </small>
                                            </div>
                                            <label for="staticEmail" class="action-bar-horizontal-label col-lg-4 col-form-label ">Email </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="staticEmail" placeholder="Enter full name">
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            Please enter your full name
                                        </small>
                                            </div>


                                        </div>


                                        <div class="form-group row mt-4">
                                            <label for="staticEmail" class="action-bar-horizontal-label col-lg-4 col-form-label">Communication:</label>
                                            <div class="col-lg-6 d-inline-flex align-self-center">

                                                <label class="checkbox checkbox-primary mr-2">
                                                            <input type="checkbox" checked="">
                                                            <span>Email</span>
                                                            <span class="checkmark"></span>

                                                    </label>
                                                <label class="checkbox checkbox-primary mr-2">
                                                            <input type="checkbox" >
                                                            <span>SMS</span>
                                                            <span class="checkmark"></span>

                                                    </label>
                                                <label class="checkbox checkbox-primary mr-2">
                                                            <input type="checkbox" >
                                                            <span>Phone</span>
                                                            <span class="checkmark"></span>

                                                    </label>



                                            </div>



                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row text-right">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-6 text-left">
                                                    <button type="button" class="btn btn-primary m-1">Save</button>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card  Horizontal Form Layout-->
                            </form>
                            <!-- end::form 2-->
                        </div>
                        <!-- end Hirozontal Form Layout -->
                    </div>
                    <!-- end::main-row -->
                </div>
            </section>
            <!-- end::basic action bar -->
@endsection

@section('page-js')




@endsection

@section('bottom-js')




@endsection

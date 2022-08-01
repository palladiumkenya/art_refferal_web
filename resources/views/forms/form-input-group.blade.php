@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
         <div class="breadcrumb">
                <h1>Input Groups</h1>
                <ul>
                    <li><a href="">Form</a></li>
                    <li>Input Groups</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>
  <!-- start basic input groups -->
            <div class="basic-input-groups">
                <div class="container-fluid">
                    <!-- begin::main-row -->
                    <div class="row">
                        <!-- begin::main column -->
                        <div class="col-lg-12">
                            <div class="row">
                                <!-- begin::basic example -->
                                <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title"> Basic Example</h3>
                                        </div>
                                        <!--begin::form-->
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Left Addon:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                    Some help content goes here
                                                            </small>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Right Addon:</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="custom-separator"></div>

                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Joint Addons:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                                                                        file</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                                            </div>
                                                        </div>

                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        Some help content goes here
                                                                </small>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Left & Right Addons:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent">
                                                <div class="mc-footer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
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
                                <!-- end::basic example -->

                                <!-- begin::checkoxes & radio addons -->
                                <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title">Checkoxes & radio addons</h3>
                                        </div>
                                        <!--begin::form-->
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Left Radio Addon :</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text ul-form__radio bg-transparent">
                                                                                <label class="radio radio-outline-primary">
                                                                                    <input type="radio" name="radio" checked="">
                                                                                    <span class="checkmark ul-radio__position"></span>
                                                                </label>
                                                                </span>
                                                                <span class="input-group-text bg-transparent">0.00</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                        </div>

                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Right Addon:</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Left Checkbox Addon :</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent ul-form__radio">
                                                                                <label class="checkbox checkbox-outline-primary">
                                                                                        <input type="checkbox" checked="">

                                                                                        <span class="checkmark ul-radio__position"></span>
                                                                </label>
                                                                </span>
                                                                <span class="input-group-text bg-transparent">0.00</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                        </div>

                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label"> Right Checkbox Addon:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><input type="checkbox" aria-label="Checkbox for following text input"></span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label"> Right & Left Checkbox Addon:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><input type="checkbox" aria-label="Checkbox for following text input"></span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><input type="checkbox" aria-label="Checkbox for following text input"></span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>






                                            </div>
                                            <div class="card-footer bg-transparent">
                                                <div class="mc-footer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
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
                                <!-- end::checkoxes & radio addons -->
                            </div>
                            <!-- end of row -->
                            <div class='row'>
                                <!-- begin::with icons -->
                                <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title"> With Icons</h3>
                                        </div>
                                        <!--begin::form-->
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Left Addon:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                            <i class="i-Information"></i>
                                                                        </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                    Some help content goes here
                                                            </small>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Right Addon:</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">
                                                                        <i class="i-Business-Mens"></i>
                                                                    </span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="custom-separator"></div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Joint Addons:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="0.00" aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="i-Cash-register-2"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Both Addons:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                                <i class="i-Refresh"></i>
                                                                            </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="0.00" aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="i-Add-User"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent">
                                                <div class="mc-footer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
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
                                <!-- end::with icons -->


                                <!-- begin::button-addons -->
                                <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title">Button Addons</h3>
                                        </div>
                                        <!--begin::form-->
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Left  Addon Button:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Go!</span>
                                                            </div>

                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Search for..">
                                                        </div>

                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Right Addon Button:</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Search for.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">Go!</span>
                                                            </div>
                                                        </div>

                                                    </div>




                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label"> Left & Right Addon Button:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Go!</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Go!</span>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Left  Addon Button:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text badge-primary">Go!</span>
                                                            </div>

                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Search for..">
                                                        </div>

                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Right Addon Button:</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Search for.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text badge-primary" id="basic-addon2">Go!</span>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label"> Left & Right Addon Button:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text badge-success">Go!</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text badge-warning">Go!</span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>






                                            </div>
                                            <div class="card-footer bg-transparent">
                                                <div class="mc-footer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
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
                                <!-- end::button-addons -->
                            </div>
                            <!-- end of row -->
                            <div class="row">
                                <!-- begin::sizing -->
                                <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title"> Sizings</h3>
                                        </div>
                                        <!--begin::form-->
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Large Input Group:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                            <i class="i-Information"></i>
                                                                        </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Large Size" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                    Some help content goes here
                                                            </small>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Joint Addons:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                                                                        file</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                                            </div>
                                                        </div>

                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        Some help content goes here
                                                                </small>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Small Input Group:</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="small size" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">
                                                                        <i class="i-Business-Mens"></i>
                                                                    </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Small Input Group:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                                <i class="i-Information"></i>
                                                                            </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Large Size" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        Some help content goes here
                                                                </small>
                                                    </div>

                                                </div>



                                            </div>
                                            <div class="card-footer bg-transparent">
                                                <div class="mc-footer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
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
                                <!-- end::sizing -->

                                <!-- begin::Buttons With Dropdowns -->
                                <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title"> Sizings</h3>
                                        </div>
                                        <!--begin::form-->
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Buttons With Dropdowns:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div role="separator" class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                        </div>
                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                    Some help content goes here
                                                            </small>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Right Button Dropdown:</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div role="separator" class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        Some help content goes here
                                                                </small>
                                                    </div>



                                                    <div class="form-group col-md-12">

                                                        <label for="inputEmail4" class="ul-form__label">Right Button Dropdown:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div role="separator" class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div role="separator" class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        Some help content goes here
                                                                </small>
                                                    </div>


                                                </div>



                                            </div>
                                            <div class="card-footer bg-transparent">
                                                <div class="mc-footer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
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
                                <!-- end::Buttons With Dropdowns -->

                                <!-- begin::input-icons -->
                                <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-header bg-transparent">
                                            <h3 class="card-title"> Input Icons</h3>
                                        </div>
                                        <!--begin::form-->
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Left Icon Input:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent" id="basic-addon1">
                                                                            <i class="i-Search-People"></i>
                                                                        </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="search..." aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                    Some help content goes here
                                                            </small>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Right Icon Input:</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text bg-transparent" id="basic-addon2">
                                                                        <i class="i-Search-People"></i>
                                                                    </span>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>



                                            </div>

                                            <div class="card-footer bg-transparent">
                                                <div class="mc-footer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
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
                                <!-- end::input-icons -->


                            </div>
                        </div>
                        <!-- end::main-column -->
                    </div>
                    <!-- end::main-row -->
                </div>
            </div>
            <!-- end of basic input groups -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Basic Example</div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                            </div>

                            <label for="basic-url">Your vanity URL</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">With textarea</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">File inputs</div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                                                file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('page-js')




@endsection

@section('bottom-js')




@endsection

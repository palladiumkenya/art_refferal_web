@extends('layouts.master')

@section('main-content')
     <div class="breadcrumb">
                <h1>Badges</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Badges</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title mb-4">Badge outline</div>

                            <span class="badge badge-pill badge-outline-primary p-2 m-1">Primary</span>
                            <span class="badge badge-pill badge-outline-secondary p-2 m-1">Secondary</span>
                            <span class="badge badge-pill badge-outline-success p-2 m-1">Success</span>
                            <span class="badge badge-pill badge-outline-danger p-2 m-1">Danger</span>
                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Warning</span>
                            <span class="badge badge-pill badge-outline-info p-2 m-1">Info</span>
                            <span class="badge badge-pill badge-outline-dark p-2 m-1">Dark</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-4">Regular Badges</div>

                            <span class="badge badge-primary m-2">Primary</span>
                            <span class="badge badge-secondary m-2">Secondary</span>
                            <span class="badge badge-success m-2">Success</span>
                            <span class="badge badge-danger m-2">Danger</span>
                            <span class="badge badge-warning m-2">Warning</span>
                            <span class="badge badge-info m-2">Info</span>
                            <span class="badge badge-light m-2">Light</span>
                            <span class="badge badge-dark m-2">Dark</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title mb-4">Badge Pill</div>

                            <span class="badge badge-pill badge-primary m-2">Primary</span>
                            <span class="badge badge-pill badge-secondary m-2">Secondary</span>
                            <span class="badge badge-pill badge-success m-2">Success</span>
                            <span class="badge badge-pill badge-danger m-2">Danger</span>
                            <span class="badge badge-pill badge-warning m-2">Warning</span>
                            <span class="badge badge-pill badge-info m-2">Info</span>
                            <span class="badge badge-pill badge-light m-2">Light</span>
                            <span class="badge badge-pill badge-dark m-2">Dark</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title mb-4">Badge Pill with Padding</div>

                            <span class="badge badge-pill badge-primary p-2 m-1">Primary</span>
                            <span class="badge badge-pill badge-secondary p-2 m-1">Secondary</span>
                            <span class="badge badge-pill badge-success p-2 m-1">Success</span>
                            <span class="badge badge-pill badge-danger p-2 m-1">Danger</span>
                            <span class="badge badge-pill badge-warning p-2 m-1">Warning</span>
                            <span class="badge badge-pill badge-info p-2 m-1">Info</span>
                            <span class="badge badge-pill badge-light p-2 m-1">Light</span>
                            <span class="badge badge-pill badge-dark p-2 m-1">Dark</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title mb-4">Badge link</div>

                            <a href="#" class="badge badge-primary m-2">Primary</a>
                            <a href="#" class="badge badge-secondary m-2">Secondary</a>
                            <a href="#" class="badge badge-success m-2">Success</a>
                            <a href="#" class="badge badge-danger m-2">Danger</a>
                            <a href="#" class="badge badge-warning m-2">Warning</a>
                            <a href="#" class="badge badge-info m-2">Info</a>
                            <a href="#" class="badge badge-light m-2">Light</a>
                            <a href="#" class="badge badge-dark m-2">Dark</a>
                        </div>
                    </div>
                </div>


                <!-- begin::basic-examples -->

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- begin::sizing and styles -->
                            <div class="card mb-3">
                                <div class="card-body">

                                    <div class="card-title mb-4">Sizing & Styles</div>

                                    <ul class="list-group list-group-flush">
                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Medium Size</h6>

                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-round-primary  m-1">A</span>
                                            <span class="badge  badge-round-success  m-1">D</span>
                                            <span class="badge  badge-round-secondary  m-1">C</span>
                                            <span class="badge  badge-round-danger  m-1">E</span>
                                            <span class="badge  badge-round-warning  m-1">F</span>
                                            <span class="badge  badge-round-info  m-1">G</span>
                                            <span class="badge  badge-round-light  m-1">H</span>
                                            <span class="badge  badge-round-dark  m-1">I</span>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-square-primary  m-1">A</span>
                                            <span class="badge  badge-square-secondary  m-1">C</span>
                                            <span class="badge  badge-square-success  m-1">D</span>
                                            <span class="badge  badge-square-danger  m-1">E</span>
                                            <span class="badge  badge-square-warning  m-1">F</span>
                                            <span class="badge  badge-square-info  m-1">G</span>
                                            <span class="badge  badge-square-light  m-1">H</span>
                                            <span class="badge  badge-square-dark  m-1">I</span>
                                        </li>

                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Large Size</h6>

                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-round-primary lg m-1">A</span>
                                            <span class="badge  badge-round-secondary lg m-1">C</span>
                                            <span class="badge  badge-round-success lg m-1">D</span>
                                            <span class="badge  badge-round-danger lg m-1">E</span>
                                            <span class="badge  badge-round-warning lg m-1">F</span>
                                            <span class="badge  badge-round-info lg m-1">G</span>
                                            <span class="badge  badge-round-light lg m-1">H</span>
                                            <span class="badge  badge-round-dark lg m-1">I</span>
                                        </li>

                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-square-primary lg m-1">A</span>
                                            <span class="badge  badge-square-secondary lg m-1">C</span>
                                            <span class="badge  badge-square-success lg m-1">D</span>
                                            <span class="badge  badge-square-danger lg m-1">E</span>
                                            <span class="badge  badge-square-warning lg m-1">F</span>
                                            <span class="badge  badge-square-info lg m-1">G</span>
                                            <span class="badge  badge-square-light lg m-1">H</span>
                                            <span class="badge  badge-square-dark lg m-1">I</span>
                                        </li>

                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Extra Large Size</h6>

                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-round-primary xl m-1">A</span>
                                            <span class="badge  badge-round-secondary xl m-1">C</span>
                                            <span class="badge  badge-round-success xl m-1">D</span>
                                            <span class="badge  badge-round-danger xl m-1">E</span>
                                            <span class="badge  badge-round-warning xl m-1">F</span>
                                            <span class="badge  badge-round-info xl m-1">G</span>
                                            <span class="badge  badge-round-light xl m-1">H</span>
                                            <span class="badge  badge-round-dark xl m-1">I</span>
                                        </li>

                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-square-primary xl m-1">A</span>
                                            <span class="badge  badge-square-secondary xl m-1">C</span>
                                            <span class="badge  badge-square-success xl m-1">D</span>
                                            <span class="badge  badge-square-danger xl m-1">E</span>
                                            <span class="badge  badge-square-warning xl m-1">F</span>
                                            <span class="badge  badge-square-info xl m-1">G</span>
                                            <span class="badge  badge-square-light xl m-1">H</span>
                                            <span class="badge  badge-square-dark xl m-1">I</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- end::sizing-styles -->

                            <!-- begin::more-styles -->
                            <div class="card mb-">
                                <div class="card-body">


                                    <div class="card-title mb-4">More Styles & Options</div>

                                    <ul class="list-group list-group-flash">
                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Wide badges for longer text:</h6>

                                        <li class="list-group-item border-0">
                                            <span class="badge badge-primary w-badge">New</span>
                                            <span class="badge badge-dark w-badge">pending </span>
                                            <span class="badge badge-primary w-badge">203 </span>
                                            <span class="badge badge-success w-badge">hot </span>
                                            <span class="badge badge-warning w-badge">fixed </span>
                                            <span class="badge badge-info w-badge">in process </span>
                                            <span class="badge badge-danger w-badge">completed </span>

                                        </li>

                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Rounded badges examples:</h6>
                                        <li class="list-group-item border-0">
                                            <span class="badge badge-primary r-badge">New</span>
                                            <span class="badge badge-dark r-badge">pending </span>
                                            <span class="badge badge-primary r-badge">203 </span>
                                            <span class="badge badge-success r-badge">hot </span>
                                            <span class="badge badge-warning r-badge">fixed </span>
                                            <span class="badge badge-info r-badge">in process </span>
                                            <span class="badge badge-danger r-badge">completed </span>

                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- end::more-styles -->

                        </div>
                        <div class="col-md-6">

                            <!-- begin Unified Styles -->
                            <div class="card mb-3">
                                <div class="card-body">


                                    <div class="card-title mb-4">Unified Styles</div>

                                    <ul class="list-group list-group-flash">
                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Circle and Square Unified Styles</h6>

                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-round badge-round-opacity-primary  m-1">A</span>
                                            <span class="badge  badge-round badge-round-opacity-secondary  m-1">B</span>
                                            <span class="badge  badge-round badge-round-opacity-success  m-1">C</span>
                                            <span class="badge  badge-round badge-round-opacity-danger  m-1">D</span>
                                            <span class="badge  badge-round badge-round-opacity-warning  m-1">E</span>
                                            <span class="badge  badge-round badge-round-opacity-info  m-1">F</span>
                                            <span class="badge  badge-round badge-round-opacity-dark  m-1">G</span>
                                        </li>

                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-square badge-square-opacity-primary  m-1">A</span>
                                            <span class="badge  badge-square badge-square-opacity-secondary  m-1">B</span>
                                            <span class="badge  badge-square badge-square-opacity-success  m-1">C</span>
                                            <span class="badge  badge-square badge-square-opacity-danger  m-1">D</span>
                                            <span class="badge  badge-square badge-square-opacity-warning  m-1">E</span>
                                            <span class="badge  badge-square badge-square-opacity-info  m-1">F</span>
                                            <span class="badge  badge-square badge-square-opacity-dark  m-1">G</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end of Unified Styles -->

                            <!-- begin basic examples -->
                            <div class="card mb-3">
                                <div class="card-body">


                                    <div class="card-title mb-4">Basic Examples</div>

                                    <ul class="list-group list-group-flash">
                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Circle and Square Unified Styles:</h6>

                                        <li class="list-group-item border-0">
                                            <span class="badge  badge-round-primary sm m-1">A</span>
                                            <span class="badge  badge-round-secondary sm m-1">C</span>
                                            <span class="badge  badge-round-success sm  m-1">D</span>
                                            <span class="badge  badge-round-success pill  m-1">HOT</span>
                                            <span class="badge  badge-round-primary pill m-1">NEW</span>
                                            <span class="badge  badge-round-danger sm m-1">E</span>
                                            <span class="badge  badge-round-warning sm m-1">F</span>
                                            <span class="badge  badge-round-info sm m-1">G</span>
                                            <span class="badge  badge-round-light sm m-1">H</span>
                                            <span class="badge  badge-round-dark sm m-1">I</span>
                                        </li>


                                    </ul>


                                    <ul class="list-group list-group-flash">
                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Dot Styles Examples:</h6>

                                        <li class="list-group-item border-0">
                                            <span class="badge-dot-primary "></span>
                                            <span class="badge-dot-secondary "></span>
                                            <span class="badge-dot-success "></span>
                                            <span class="badge-dot-danger "></span>
                                            <span class="badge-dot-warning "></span>
                                            <span class="badge-dot-info "></span>
                                            <span class="badge-dot-light "></span>
                                            <span class="badge-dot-dark "></span>

                                        </li>

                                        <li class="list-group-item border-0">
                                            Pending <span class="badge-dot-primary"></span> Caption <span class="badge-dot-secondary"></span> Heading <span class="badge-dot-success"></span> Status <span class="badge-dot-danger"></span>
                                        </li>

                                    </ul>


                                </div>
                            </div>
                            <!-- end basic examples -->


                            <!-- begin outline badges -->
                            <div class="card mb-3">
                                <div class="card-body">


                                    <div class="card-title mb-4">Outline Badges</div>

                                    <ul class="list-group list-group-flash">
                                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Basic state color badges:</h6>

                                        <li class="list-group-item border-0">
                                            <span class="badge  outline-round-primary sm m-1">A</span>
                                            <span class="badge  outline-round-secondary sm m-1">C</span>
                                            <span class="badge  outline-round-success sm  m-1">D</span>
                                            <span class="badge  outline-round-danger sm m-1">E</span>
                                            <span class="badge  outline-round-warning sm m-1">F</span>
                                            <span class="badge  outline-round-info sm m-1">G</span>
                                            <span class="badge  outline-round-light sm m-1">H</span>
                                            <span class="badge  outline-round-dark sm m-1">I</span>
                                        </li>




                                    </ul>
                                </div>
                            </div>
                            <!-- end outline badges -->
                        </div>
                    </div>
                </div>



                <!-- end::basic-examples -->
            </div>
@endsection

@section('page-js')

@endsection

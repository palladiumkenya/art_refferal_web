@extends('layouts.master')
@section('page-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/toastr.css')}}">
@endsection

@section('main-content')
    <div class="breadcrumb">
                <h1>Toastr</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>Toastr</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <h2>Toastr</h2>
                    <p>Toastr is a Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12 mb-4">
                    <h3>Types</h3>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <button id="toast-success" class="btn btn-block btn-outline-success btn-success">success toaster</button>
                            <button id="toast-info" class="btn btn-block btn-outline-info btn-info">info toaster</button>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6">
                    <div class="card">

                        <div class="card-body">
                            <button id="toast-warning" class="btn btn-block btn-outline-warning btn-warning">warning toaster</button>
                            <button id="toast-error" class="btn btn-block btn-outline-danger btn-danger">danger toaster</button>
                        </div>
                    </div>
                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->

            <div class="row mb-4">
                <div class="col-md-12 mb-4">
                    <h3>Positions</h3>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">Top Positions</h3>
                            <button id="toast-position-top-left" class="btn btn-block btn-outline-info btn-info">Top Left</button>
                            <button id="toast-position-top-center" class="btn btn-block btn-outline-info btn-info">Top Center</button>
                            <button id="toast-position-top-right" class="btn btn-block btn-outline-info btn-info">Top Right</button>
                            <button id="toast-position-top-full" class="btn btn-block btn-outline-info btn-info">Top Full</button>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">Bottom Positions</h3>
                            <button id="toast-position-bottom-left" class="btn btn-block btn-outline-info btn-info">bottom Left</button>
                            <button id="toast-position-bottom-center" class="btn btn-block btn-outline-info btn-info">bottom Center</button>
                            <button id="toast-position-bottom-right" class="btn btn-block btn-outline-info btn-info">bottom Right</button>
                            <button id="toast-position-bottom-full" class="btn btn-block btn-outline-info btn-info">bottom Full</button>

                        </div>
                    </div>
                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->
            <div class="row mb-4">

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title ">Text Notifications</h3>
                            <button id="toast-text-notification" class="btn btn-block btn-outline-info btn-info">Show Toast</button>


                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">Close Button</h3>
                            <button id="toast-close-button" class="btn btn-block btn-outline-success btn-success">Show Toast</button>

                        </div>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">Progress Bar</h3>
                            <button id="toast-progress-bar" class="btn btn-block btn-outline-warning btn-warning">Show Toast</button>

                        </div>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">Clear Toast</h3>
                            <button id="toast-clear-btn" class="btn btn-block btn-outline-danger btn-danger">Show Toast</button>

                        </div>
                    </div>
                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->

            <div class="row mb-4">
                <div class="col-md-12">
                    <h2>Remove/Clear Toasts</h2>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">Remove Toast</h3>
                            <p>remove toast without animation</p>
                            <button id="toast-show-remove" class="btn btn-block btn-outline-info btn-info">Show Toast</button>
                            <button id="toast-remove" class="btn btn-block btn-outline-info btn-info">Remove Toast</button>


                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">Clear Toast</h3>
                            <p>Clear toast with animation</p>
                            <button id="toast-show-clear" class="btn btn-block btn-outline-info btn-info">Show Toast</button>
                            <button id="toast-clear" class="btn btn-block btn-outline-info btn-info">Clear Toast</button>


                        </div>
                    </div>
                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <h2>Duraton and Timeouts</h2>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title mb-1">Show .6s</h3>
                            <p>the show time can be define by using <code>showDuration</code></p>
                            <button id="toast-fast-duration" class="btn btn-block btn-outline-info btn-info mb-3">Show Fast Toast</button>
                            <h3 class="card-title mb-1">Timeout 6s</h3>
                            <p>Time Out can be define by <code>timeout</code> to set what amount of time will stay</p>
                            <button id="toast-timeout" class="btn btn-block btn-outline-info btn-info">Timeout Toast</button>


                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title mb-1">Hide 3s</h3>
                            <p>Hide can be define by <code>hideDuration</code> to set what amount of time will take to hide message</p>

                            <button id="toast-slow-duration" class="btn btn-block btn-outline-info btn-info mb-3">Hide Toast</button>
                            <h3 class="card-title mb-1">Sticky</h3>
                            <p>Sticky Message can be create by set the <code>timeout</code> to <code>0</code></p>
                            <button id="toast-sticky" class="btn btn-block btn-outline-info btn-info">Sticky Toast</button>


                        </div>
                    </div>
                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <h2>Show / Hide animation</h2>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">FadeIn /FadeOut</h3>

                            <button id="toast-fade" class="btn btn-block btn-outline-info btn-info">Fade Toast</button>



                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">SlideDown /SlideUp</h3>


                            <button id="toast-slide" class="btn btn-block btn-outline-info btn-info">Slide Toast</button>



                        </div>
                    </div>
                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->

@endsection

@section('page-js')

 <script src="{{asset('assets/js/vendor/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/toastr.script.js')}}"></script>

@endsection

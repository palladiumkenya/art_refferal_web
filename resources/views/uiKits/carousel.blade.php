@extends('layouts.master')

@section('main-content')
    <div class="breadcrumb">
                <h1>Carousel</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>Carousel</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-6">

                    <p>use a large block of connected links for our pagination, making links hard to miss and easily scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available
                        links. Use a wrapping
                        <code>nav</code> element to identify it as a navigation section to screen readers and other assistive technologies.</p>
                </div>
            </div>

            <div class="row">


                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Basic Carousel With Control</h4>
                            <p>can also add the indicators to the carousel, alongside the controls, too</p>
                            <div class="carousel_wrap">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Carousel With Indicators</h4>
                            <p>Adding in the previous and next controls</p>
                            <div class="carousel_wrap">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

            </div>
            <!-- end of row -->

            <div class="row">


                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Carousel With Caption</h4>
                            <p>Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code> . They can be easily hidden on smaller viewports, as shown below, with optional display utilities. </p>
                            <div class="carousel_wrap">
                                <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Carousel With CrossFade</h4>
                            <p>Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>
                            <div class="carousel_wrap">
                                <div id="carouselExampleCrossfade" class="carousel carousel-fade slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCrossfade" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleCrossfade" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleCrossfade" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCrossfade" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCrossfade" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

            </div>
            <!-- end of row -->

            <div class="row">


                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Carousel Interval Option</h4>
                            <p><code> interval: 2000</code> The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle</p>
                            <div class="carousel_wrap">
                                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Carousel With Pause Option</h4>
                            <p>If set to <code>"hover"</code>, pauses the cycling of the carousel on <code>mouseenter</code> and resumes the cycling of the carousel on
                                <code>mouseleave</code> . If set to <code>false</code>, hovering over the carousel won't pause it.</p>
                            <div class="carousel_wrap">
                                <div id="carouselExamplePause" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExamplePause" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExamplePause" data-slide-to="1"></li>
                                        <li data-target="#carouselExamplePause" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Add captions to your slides easily </h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExamplePause" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExamplePause" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

            </div>
            <!-- end of row -->


            <div class="row">


                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Carousel Wrap Option</h4>
                            <p>Whether the carousel should cycle continuously or have hard stops.Default <code>true</code> </p>
                            <div class="carousel_wrap">
                                <div id="carouselExampleWrap" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="First slide">

                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Second slide">

                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="Third slide">

                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleWrap" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleWrap" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Carousel With Keyboard Option</h4>
                            <p>Whether the carousel should react to keyboard events.Default <code>true</code></p>
                            <div class="carousel_wrap">
                                <div id="carouselExampleKeyboard" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleKeyboard" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleKeyboard" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleKeyboard" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="First slide">

                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="Second slide">

                                        </div>
                                        <div class="carousel-item">

                                            <img class="d-block w-100" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Third slide">

                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleKeyboard" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleKeyboard" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

            </div>
            <!-- end of row -->
@endsection

@section('page-js')
<script src="{{asset('assets/js/carousel.script.js')}}"></script>
@endsection

@extends('layouts.master')

@section('main-content')
      <div class="breadcrumb">
                <h1>Cards</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Cards</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <!-- ICON BG -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Add-User"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">New Leads</p>
                                <p class="lead text-primary text-24 mb-2">205</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Financial"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Sales</p>
                                <p class="lead text-primary text-24 mb-2">4021</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Checkout-Basket"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Orders</p>
                                <p class="lead text-primary text-24 mb-2">80</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Money-2"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Expense</p>
                                <p class="lead text-primary text-24 mb-2">120</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CARD ICON -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Data-Upload"></i>
                                    <p class="text-muted mt-2 mb-2">Today's Upload</p>
                                    <p class="lead text-22 m-0">21</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Add-User"></i>
                                    <p class="text-muted mt-2 mb-2">New Users</p>
                                    <p class="lead text-22 m-0">21</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Money-2"></i>
                                    <p class="text-muted mt-2 mb-2">Total sales</p>
                                    <p class="lead text-22 m-0">4021</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Money-2"></i>
                                    <p class="lead text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Gear"></i>
                                    <p class="lead text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Bell"></i>
                                    <p class="lead text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-profile-1 mb-4">
                                <div class="card-body text-center">
                                    <div class="avatar box-shadow-2 mb-3">
                                        <img src="{{asset('assets/images/faces/16.jpg')}}" alt="">
                                    </div>
                                    <h5 class="m-0">Jassica Hike</h5>
                                    <p class="mt-0">UI/UX Designer</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cumque.</p>
                                    <button class="btn btn-primary btn-rounded">Contact Jassica</button>
                                    <div class="card-socials-simple mt-4">
                                        <a href="">
                                            <i class="i-Linkedin-2"></i>
                                        </a>
                                        <a href="">
                                            <i class="i-Facebook-2"></i>
                                        </a>
                                        <a href="">
                                            <i class="i-Twitter"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    Featured
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title text</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-rounded">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card bg-dark text-white o-hidden mb-4">
                                <img class="card-img" src="{{asset('assets/images/photo-wide-2.jpg')}}" alt="Card image">
                                <div class="card-img-overlay">
                                    <h5 class="card-title text-white">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <!-- BG IMAGE CARDS -->
                        <div class="col-md-6">
                            <div class="card bg-dark text-white o-hidden mb-4">
                                <img class="card-img" src="{{asset('assets/images/photo-long-1.jpg')}}" alt="Card image">
                                <div class="card-img-overlay">
                                    <div class="text-center pt-4">
                                        <h5 class="card-title mb-2 text-white">Card title</h5>
                                        <div class="separator border-top mb-2"></div>
                                        <p class="text-small font-italic">Last updated 3 mins ago</p>
                                    </div>
                                    <div class="p-1 text-left card-footer font-weight-light d-flex">
                                        <span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>
                                            12 </span>
                                        <span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card bg-dark text-white o-hidden mb-4">
                                <img class="card-img" src="{{asset('assets/images/photo-long-2.jpg')}}" alt="Card image">
                                <div class="card-img-overlay">

                                    <div class="text-center pt-4">
                                        <h5 class="card-title mb-2 text-white">Card title</h5>
                                        <div class="separator border-top mb-2"></div>
                                        <p class="text-small font-italic">Last updated 3 mins ago</p>
                                    </div>
                                    <div class="p-1 text-left card-footer font-weight-light d-flex">
                                        <span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>
                                            12 </span>
                                        <span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 o-hidden">
                                <img class="card-img-top" src="{{asset('assets/images/photo-wide-2.jpg')}}" alt="">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, cumque!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4 o-hidden">
                                <img class="card-img-top" src="{{asset('assets/images/photo-wide-3.jpg')}}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

@endsection

@section('page-js')

@endsection

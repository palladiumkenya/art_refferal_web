@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
<div class="breadcrumb">
    <h1>App</h1>
    <ul>
        <li><a href="">Widgets</a></li>
        <li> App</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

<section class="widget-app">
    <div class="row">

        <div class="col-lg-4 col-md-4 mb-4">
            <!-- projects -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Projects</div>

                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">Developer</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <img class="profile-picture avatar-md  rounded-circle"
                                            src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                                    </th>
                                    <td>
                                        <span class="text-15 font-weight-600">Lucy</span> <br>
                                        <small class="text-mute">Designer</small>
                                    </td>
                                    <td><span class="text-13">Gull Admin</span></td>
                                    <td>
                                        <span>$4.9K</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img class="profile-picture avatar-md  rounded-circle"
                                            src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                                    </th>
                                    <td>
                                        <span class="text-15 font-weight-600">Lucy</span> <br>
                                        <small class="text-mute">Developer</small>
                                    </td>
                                    <td><span class="text-13">Agency</span></td>
                                    <td>
                                        <span>$70K</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img class="profile-picture avatar-md  rounded-circle"
                                            src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                                    </th>
                                    <td>
                                        <span class="text-15 font-weight-600">Dan</span> <br>
                                        <small class="text-mute">Developer</small>
                                    </td>
                                    <td><span class="text-13">Agency</span></td>
                                    <td>
                                        <span>$70K</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img class="profile-picture avatar-md  rounded-circle"
                                            src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                                    </th>
                                    <td>
                                        <span class="text-15 font-weight-600">Lucy</span> <br>
                                        <small class="text-mute">Developer</small>
                                    </td>
                                    <td><span class="text-13">Agency</span></td>
                                    <td>
                                        <span>$70K</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img class="profile-picture avatar-md  rounded-circle"
                                            src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                                    </th>
                                    <td>
                                        <span class="text-15 font-weight-600">Lucy</span> <br>
                                        <small class="text-mute">Developer</small>
                                    </td>
                                    <td><span class="text-13">Agency</span></td>
                                    <td>
                                        <span>$70K</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- end:projects -->
        </div>


        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Work List</div>
                    <div class="ul-widget-app__task-list mb-4">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" checked="">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
                            <span class="badge badge-pill badge-danger p-2 m-1 float-right">Today</span>
                            <span class="checkmark"></span>
                        </label>
                        <div class="ul-widget-app__work-list-img ml-4">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="ul-widget-app__task-list mb-4">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
                            <span class="badge badge-pill badge-success p-2 m-1 float-right">Tomorrow</span>
                            <span class="checkmark"></span>
                        </label>
                        <div class="ul-widget-app__work-list-img ml-4">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                        </div>
                    </div>


                    <div class="ul-widget-app__task-list mb-4">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
                            <span class="badge badge-pill badge-info p-2 m-1 float-right">yesterday</span>
                            <span class="checkmark"></span>
                        </label>
                        <div class="ul-widget-app__work-list-img ml-4">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/1.jpg') }}" alt="">

                        </div>
                    </div>
                    <div class="ul-widget-app__task-list mb-4">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
                            <span class="badge badge-pill badge-warning p-2 m-1 float-right">Week</span>
                            <span class="checkmark"></span>
                        </label>
                        <div class="ul-widget-app__work-list-img ml-4">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/1.jpg') }}" alt="">

                        </div>
                    </div>

                    <div class="ul-widget-app__task-list mb-4">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
                            <span class="badge badge-pill badge-primary p-2 m-1 float-right">Week</span>
                            <span class="checkmark"></span>
                        </label>
                        <div class="ul-widget-app__work-list-img ml-4">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                            <img class="profile-picture avatar-sm  rounded-circle"
                                src="{{ asset('assets/images/faces/1.jpg') }}" alt="">


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- begin::Developer Total Earning -->
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="card-title">Developer Total Earning</div>
                        <h4 class="display">$5,8000</h4>
                    </div>
                    <div class="ul-widget-app__browser-list">
                        <div class="ul-widget-app__browser-list-1 mb-4 ">
                            <img class="profile-picture avatar-md  rounded-circle"
                                src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                            <span class="text-15 ml-3">Sara Lanson</span>
                            <span class="badge badge-round-success pill  m-1">$5000</span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4 ">
                            <img class="profile-picture avatar-md  rounded-circle"
                                src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                            <span class="text-15 ml-3">Jhon Legend</span>
                            <span class="badge badge-round-danger pill  m-1">$4000</span>
                        </div>


                        <div class="ul-widget-app__browser-list-1 mb-4 ">
                            <img class="profile-picture avatar-md  rounded-circle"
                                src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                            <span class="text-15 ml-3">Chris Patt</span>
                            <span class="badge badge-round-info pill  m-1">$5500</span>
                        </div>


                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <img class="profile-picture avatar-md  rounded-circle"
                                src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                            <span class="text-15 ml-3">Vin Diesel</span>
                            <span class="badge badge-round-warning pill  m-1">$2000</span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <img class="profile-picture avatar-md  rounded-circle"
                                src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                            <span class="text-15 ml-3">Ryan reynolds</span>
                            <span class="badge badge-round-primary pill  m-1">$2000</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- end::developer total earning -->




        <!-- begin::travel different countries -->
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Travel Different Countries</div>


                    <div class="ul-widget-app__poll-list mb-4">
                        <h3 class="heading mr-2">2589</h3>
                        <div class="d-flex">
                            <span class="text-muted text-12">From Uganda</span>
                            <span class="t-font-boldest ml-auto">
                                33%
                                <i class="i-Turn-Up-2 text-14 text-success font-weight-700"></i>
                            </span>
                        </div>
                        <div class="progress progress--height-2 mb-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="ul-widget-app__poll-list mb-4">
                        <h3 class="heading mr-2">4589</h3>
                        <div class="d-flex">
                            <span class="text-muted text-12">From U.S.A</span>
                            <span class="t-font-boldest ml-auto">
                                63%
                                <i class="i-Turn-Down-2 text-14 text-danger font-weight-700"></i>
                            </span>
                        </div>
                        <div class="progress progress--height-2 mb-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="ul-widget-app__poll-list mb-4">
                        <h3 class="heading mr-2">7589</h3>
                        <div class="d-flex">
                            <span class="text-muted text-12">From Canada</span>
                            <span class="t-font-boldest ml-auto">
                                73%
                                <i class="i-Turn-Up-2 text-14 text-success font-weight-700"></i>
                            </span>
                        </div>
                        <div class="progress progress--height-2 mb-3">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 33%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="ul-widget-app__poll-list mb-4">
                        <h3 class="heading mr-2">3589</h3>
                        <div class="d-flex">
                            <span class="text-muted">From France</span>
                            <span class="t-font-boldest ml-auto">
                                13%
                                <i class="i-Turn-Down-2 text-14 text-danger font-weight-700"></i>
                            </span>
                        </div>
                        <div class="progress progress--height-2 mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 13%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end::travel-different-countries -->

        <!-- begin::mutual friends  -->
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-header purple-500 text-purple-500 p-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="card-title text-white mb-0">Mutual Friends</div>
                        <div class="ul-widget-app__bar ml-auto">
                            asd
                        </div>
                    </div>

                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="search by username or email..."
                            aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                        <span class="ul-widget-app__find-font"><i class="i-Search-People font-weight-500"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="ul-widget-app__social-site mt-4 mb-4">
                        <div class="row">
                            <div class="col-4 text-center">
                                <div class="ul-widget-app__social-friends">
                                    <img class="profile-picture avatar-lg mb-2"
                                        src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                                    <div class="ul-widget-app__small-title">
                                        <span class="t-font-bolder">Elizabeth Olsen</span>
                                        <span class="text-primary"><a href="">Invite</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center ">
                                <div class="ul-widget-app__social-friends">
                                    <img class="profile-picture avatar-lg mb-2"
                                        src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                                    <div class="ul-widget-app__small-title">
                                        <span class="t-font-bolder">Jack Olsen</span>
                                        <span class="text-primary"><a href="">Invite</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center ">
                                <div class="ul-widget-app__social-friends">
                                    <img class="profile-picture avatar-lg mb-2"
                                        src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                                    <div class="ul-widget-app__small-title">
                                        <span class="t-font-bolder">DAn Olsen</span>
                                        <span class="text-primary"><a href="">Invite</a></span>
                                    </div>
                                </div>
                            </div>



                        </div>


                    </div>
                    <div class="ul-widget-app__social-button mt-5">
                        <button type="button" class="btn btn-block btn-facebook btn-icon m-1">
                            <span class="ul-btn__text">Invite Facebook</span>
                            <span class="ul-btn__icon"><i class="i-Facebook-2"></i></span>
                        </button>

                        <button type="button" class="btn btn-block btn-twitter btn-icon m-1">
                            <span class="ul-btn__text">Invite Twitter</span>
                            <span class="ul-btn__icon"><i class="i-Twitter"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- end::mutual friends -->

        <!-- begin::notification -->
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Notification</div>
                    <div class="ul-widget-app__browser-list">
                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Bell1  text-white bg-warning rounded-circle p-2  mr-3"></i>
                            <span class="text-15">You have 9 pending Tasks</span>
                            <span class="text-mute">in a sec</span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Internet  text-white green-500 rounded-circle p-2  mr-3"></i>
                            <span class="text-15">Traffic Overloaded</span>
                            <span class="text-mute">4 Hours ago</span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Shopping-Cart  text-white cyan-500 rounded-circle p-2  mr-3"></i>
                            <span class="text-15">New Order Received</span>
                            <span class="text-mute">yesterday </span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Add-UserStar  text-white teal-500 rounded-circle p-2  mr-3"></i>
                            <span class="text-15">New User </span>
                            <span class="text-mute">2 April </span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Bell  text-white purple-500 rounded-circle p-2  mr-3"></i>
                            <span class="text-15">New Update </span>
                            <span class="text-mute">2 April </span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Shopping-Cart  text-white bg-danger rounded-circle p-2  mr-3"></i>
                            <span class="text-15">New Order Received</span>
                            <span class="text-mute">yesterday </span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Internet  text-white green-500 rounded-circle p-2  mr-3"></i>
                            <span class="text-15">Traffic Overloaded</span>
                            <span class="text-mute">4 Hours ago</span>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <!-- end::notification -->

        <!-- start col -->
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-0">Recent Comments</div>

                </div>
                <div class="ul-widget-app__comments">
                    <!-- row-comments -->

                    <div class="ul-widget-app__row-comments">
                        <div class="ul-widget-app__profile-pic p-3">
                            <img class="profile-picture avatar-md mb-2 rounded-circle img-fluid"
                                src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                        </div>
                        <div class="ul-widget-app__comment">
                            <div class="ul-widget-app__profile-title">
                                <h6 class="heading">Jhon Wick</h6>
                                <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.ipsum .</p>
                            </div>
                            <div class="ul-widget-app__profile-status">
                                <span class="badge badge-pill badge-primary p-2 m-1">Pending</span>
                                <span class="ul-widget-app__icons">
                                    <a href=""> <i class="i-Approved-Window text-mute"></i></a>
                                    <a href=""> <i class="i-Like text-mute"></i></a>
                                    <a href=""><i class="i-Heart1 text-mute"></i></a>
                                </span>
                                <span class="text-mute">May 14, 2019</span>
                            </div>
                        </div>
                    </div>

                    <!-- row-comments-2 -->
                    <div class="ul-widget-app__row-comments">
                        <div class="ul-widget-app__profile-pic p-3">
                            <img class="profile-picture avatar-md mb-2 rounded-circle"
                                src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                        </div>
                        <div class="ul-widget-app__comment">
                            <div class="ul-widget-app__profile-title">
                                <h6 class="heading">Jhon Trevor</h6>
                                <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.ipsum .</p>
                            </div>
                            <div class="ul-widget-app__profile-status">
                                <span class="badge badge-pill badge-success p-2 m-1">Approved</span>
                                <span class="ul-widget-app__icons">
                                    <a href=""> <i class="i-Approved-Window text-mute"></i></a>
                                    <a href=""> <i class="i-Like text-mute"></i></a>
                                    <a href=""><i class="i-Heart1 text-mute"></i></a>
                                </span>
                                <span class="text-mute">May 14, 2019</span>
                            </div>
                        </div>
                    </div>

                    <!-- row-comments-3 -->
                    <div class="ul-widget-app__row-comments">
                        <div class="ul-widget-app__profile-pic p-3">
                            <img class="profile-picture avatar-md mb-2 rounded-circle"
                                src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                        </div>
                        <div class="ul-widget-app__comment">
                            <div class="ul-widget-app__profile-title">
                                <h6 class="heading">Jhon Trevor</h6>
                                <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.ipsum .</p>
                            </div>
                            <div class="ul-widget-app__profile-status">
                                <span class="badge badge-pill badge-danger p-2 m-1">Rejected</span>
                                <span class="ul-widget-app__icons">
                                    <a href=""> <i class="i-Approved-Window text-mute"></i></a>
                                    <a href=""> <i class="i-Like text-mute"></i></a>
                                    <a href=""><i class="i-Heart1 text-mute"></i></a>
                                </span>
                                <span class="text-mute">May 14, 2019</span>
                            </div>
                        </div>
                    </div>

                    <!-- row-comments-4 -->

                    <div class="ul-widget-app__row-comments">
                        <div class="ul-widget-app__profile-pic p-3">
                            <img class="profile-picture avatar-md mb-2 rounded-circle"
                                src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                        </div>
                        <div class="ul-widget-app__comment">
                            <div class="ul-widget-app__profile-title">
                                <h6 class="heading">Jhon Trevor</h6>
                                <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.ipsum .</p>
                            </div>
                            <div class="ul-widget-app__profile-status">
                                <span class="badge badge-pill badge-primary p-2 m-1">Pending</span>
                                <span class="ul-widget-app__icons">
                                    <a href=""> <i class="i-Approved-Window text-mute"></i></a>
                                    <a href=""> <i class="i-Like text-mute"></i></a>
                                    <a href=""><i class="i-Heart1 text-mute"></i></a>
                                </span>
                                <span class="text-mute">May 14, 2019</span>
                            </div>
                        </div>
                    </div>

                    <!-- row-comments-5 -->
                    <div class="ul-widget-app__row-comments">
                        <div class="ul-widget-app__profile-pic p-3">
                            <img class="profile-picture avatar-md mb-2 rounded-circle"
                                src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                        </div>
                        <div class="ul-widget-app__comment">
                            <div class="ul-widget-app__profile-title">
                                <h6 class="heading">Jhon Trevor</h6>
                                <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.ipsum .</p>
                            </div>
                            <div class="ul-widget-app__profile-status">
                                <span class="badge badge-pill badge-success p-2 m-1">Success</span>
                                <span class="ul-widget-app__icons">
                                    <a href=""> <i class="i-Approved-Window text-mute"></i></a>
                                    <a href=""> <i class="i-Like text-mute"></i></a>
                                    <a href=""><i class="i-Heart1 text-mute"></i></a>
                                </span>
                                <span class="text-mute">May 14, 2019</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end col -->

        <!-- start col -->

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Recent Messages</div>

                    <div class="ul-widget-app__recent-messages">
                        <div class="ul-widget-app__row-comments border-bottom-gray-200 mb-0">
                            <div class="ul-widget-app__profile-pic mr-3">
                                <img class="profile-picture avatar-md mb-2 rounded-circle img-fluid"
                                    src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                            </div>
                            <div class="ul-widget-app__comment">
                                <div class="ul-widget-app__profile-title">
                                    <h6 class="heading">Jhon Wick</h6>
                                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.ipsum .</p>
                                </div>
                                <div class="ul-widget-app__profile-status">
                                    <small class="text-mute">2 min ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="ul-widget-app__row-comments border-bottom-gray-200 mb-0">
                            <div class="ul-widget-app__profile-pic mr-3">
                                <img class="profile-picture avatar-md mb-2 rounded-circle img-fluid"
                                    src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                            </div>
                            <div class="ul-widget-app__comment">
                                <div class="ul-widget-app__profile-title">
                                    <h6 class="heading">Jhon Cena</h6>
                                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.ipsum .</p>
                                </div>
                                <div class="ul-widget-app__profile-status">
                                    <small class="text-mute">3 hrs ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="ul-widget-app__row-comments border-bottom-gray-200 mb-0">
                            <div class="ul-widget-app__profile-pic mr-3">
                                <img class="profile-picture avatar-md mb-2 rounded-circle img-fluid"
                                    src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                            </div>
                            <div class="ul-widget-app__comment">
                                <div class="ul-widget-app__profile-title">
                                    <h6 class="heading">Jhon Cena</h6>
                                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.ipsum .</p>
                                </div>
                                <div class="ul-widget-app__profile-status">
                                    <small class="text-mute">3 hrs ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="ul-widget-app__row-comments border-bottom-gray-200 mb-0">
                            <div class="ul-widget-app__profile-pic mr-3">
                                <img class="profile-picture avatar-md mb-2 rounded-circle img-fluid"
                                    src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                            </div>
                            <div class="ul-widget-app__comment">
                                <div class="ul-widget-app__profile-title">
                                    <h6 class="heading">Jhon Cena</h6>
                                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.ipsum .</p>
                                </div>
                                <div class="ul-widget-app__profile-status">
                                    <small class="text-mute">3 hrs ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="ul-widget-app__row-comments mb-0">
                            <div class="ul-widget-app__profile-pic mr-3">
                                <img class="profile-picture avatar-md mb-2 rounded-circle img-fluid"
                                    src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                            </div>
                            <div class="ul-widget-app__comment">
                                <div class="ul-widget-app__profile-title">
                                    <h6 class="heading">Chriss Patt</h6>
                                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.ipsum .</p>
                                </div>
                                <div class="ul-widget-app__profile-status">
                                    <small class="text-mute">2 min ago</small>
                                </div>
                            </div>
                        </div>

                        <div class="ul-widget-app__row-comments mb-0">
                            <div class="ul-widget-app__profile-pic mr-3">
                                <img class="profile-picture avatar-md mb-2 rounded-circle img-fluid"
                                    src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                            </div>
                            <div class="ul-widget-app__comment">
                                <div class="ul-widget-app__profile-title">
                                    <h6 class="heading">Chriss Patt</h6>
                                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.ipsum .</p>
                                </div>
                                <div class="ul-widget-app__profile-status">
                                    <small class="text-mute">2 min ago</small>
                                </div>
                            </div>
                        </div>

                        <div class="ul-widget-app__row-comments mb-0">
                            <div class="ul-widget-app__profile-pic mr-3">
                                <img class="profile-picture avatar-md mb-2 rounded-circle img-fluid"
                                    src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                            </div>
                            <div class="ul-widget-app__comment">
                                <div class="ul-widget-app__profile-title">
                                    <h6 class="heading">Chriss Patt</h6>
                                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.ipsum .</p>
                                </div>
                                <div class="ul-widget-app__profile-status">
                                    <small class="text-mute">2 min ago</small>
                                </div>
                            </div>
                        </div>


                    </div>



                </div>
            </div>


        </div>

        <!-- end col -->

        <!-- start col -->
        <div class="col-lg-4 col-md-4 mb-4">
            <!-- order -->
            <div class="card mb-3">
                <div class="card-body">

                    <div class="ul-widget-app__order">
                        <div class="card-title mb-2">Order</div>
                        <h5 class="text-mute mb-4">Buy & Sell Crypto Currency</h5>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab"
                                    href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                            </div>
                        </nav>
                        <div class="tab-content ul-tab__content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="ul-widget-app__buy-currency">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="i-Bitcoin text-20"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Amount"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="i-Dollar-Sign text-20"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Price"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <button type="button" class="btn btn-primary btn-icon m-1">
                                        Buy Coin
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="i-Bitcoin text-20"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Amount" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="i-Dollar-Sign text-20"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Price" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>

                                <button type="button" class="btn btn-success btn-icon m-1">
                                    Sell Coin
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- end of order -->

            <!-- currency trading -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-2">Currency Trading</div>
                    <h5 class="text-mute mb-4">Trading Currency from Here</h5>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" value="2,000" placeholder="0.00"
                            aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Unit</button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(480px, 37px, 0px);">
                                <a class="dropdown-item" href="#">BTC</a>
                                <a class="dropdown-item" href="#">ETH </a>
                                <a class="dropdown-item" href="#">DASH </a>
                            </div>
                        </div>
                    </div>

                    <div class="timeline timeline--align">
                        <div class="timeline-item mt-0">
                            <div class="timeline-badge">
                                <i class="badge-icon bg-danger text-white i-Arrow-Refresh"></i>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" value="2,000" placeholder="0.00"
                            aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Unit</button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(480px, 37px, 0px);">
                                <a class="dropdown-item" href="#">BTC</a>
                                <a class="dropdown-item" href="#">ETH </a>
                                <a class="dropdown-item" href="#">DASH </a>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-lg btn-primary m-1">Trading Now</button>

                </div>
            </div>
        </div>
        <!-- end col -->

        <!-- start col -->

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="user-profile mb-4">
                        <div class="ul-widget-card__user-info border-bottom-gray-200 pb-3">
                            <img class="profile-picture avatar-xl mb-2" src="{{ asset('assets/images/faces/4.jpg') }}"
                                alt="">
                            <p class="m-0 text-24">Timothy Sara</p>
                            <p class="text-muted m-0">
                                <a href="">timothysara@gmail.com</a>
                            </p>
                            <div class="mt-3 ul-widget-app__skill-margin">
                                <span class="text-15">Template</span>
                                <span class="text-15">UI</span>
                                <span class="text-15">UX</span>
                                <span data-toggle="tooltip" title="4 more" data-placement="top"
                                    class="badge badge-pill badge-primary p-2 m-1">+4</span>
                            </div>
                        </div>
                        <div class="ul-widget-app__profile-footer mt-4">
                            <div class="ul-widget-app__profile-footer-font">
                                <a href="">
                                    <i class="i-Speach-Bubble-6 text-16 font-weight-600 mr-1"></i>
                                    <span class=" text-16 font-weight-600">Message</span>
                                </a>
                            </div>
                            <div class="ul-widget-app__profile-footer-font">
                                <a href="">
                                    <i class="i-File-Clipboard-File--Text text-16 font-weight-600 mr-1"></i>
                                    <span class=" text-16 font-weight-600">Portfolio</span>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!-- end col -->

        <!-- start col -->
        <div class="col-lg-4 col-xl-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="ul-widget-card__title-info text-center mb-3">
                        <p class="m-0 text-24">Jon Snow</p>
                        <p class="text-muted m-0">UI/UX</p>
                    </div>
                    <div class="user-profile mb-4">
                        <div class="ul-widget-card__user-info">
                            <img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/faces/5.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="ul-widget-card__full-status mb-3">
                        <div class="ul-widget-card__status1">
                            <span>797</span>
                            <span class="text-mute">Uploads</span>
                        </div>
                        <div class="ul-widget-card__status1">
                            <span>90k</span>
                            <span class="text-mute">following</span>
                        </div>
                        <div class="ul-widget-card__status1">
                            <span>2.5M</span>
                            <span class="text-mute">followers</span>
                        </div>
                    </div>
                    <div class=" mt-2">
                        <button type="button" class="btn btn-primary btn-block m-1">Follow</button>
                    </div>

                </div>
            </div>




        </div>
        <!-- end col -->

        <!-- start col -->
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-1">Feedback</div>
                    <p class="text-mute">Checking the feedback</p>

                    <h3 class="heading mt-4">3450</h3>
                    <p class="text-mute">This year we got 1246 feedback</p>

                    <div class="ul-widget-app__work-list-img mt-4">
                        <img class="profile-picture avatar-md  rounded-circle"
                            src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                        <img class="profile-picture avatar-md  rounded-circle"
                            src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                        <img class="profile-picture avatar-md  rounded-circle"
                            src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                        <img class="profile-picture avatar-md  rounded-circle"
                            src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                    </div>


                    <div class=" mt-5">
                        <button type="button" class="btn btn-primary  m-1">Checkout All
                            Feedback</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->






        <!-- begin::profile -->
        <div class="col-lg-4 col-xl-4 mb-4">
            <div class="card o-hidden">
                <img class="d-block w-100" src="{{ asset('assets/images/products/headphone-1.jpg') }}"
                    alt="Second slide">
                <div class="user-profile ul-widget-app__profile--position mb-4">
                    <div class="ul-widget-card__user-info ">
                        <img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/faces/1.jpg') }}"
                            alt="">
                        <p class="m-0 text-24 text-white">Timothy Carlson</p>

                    </div>
                </div>

                <div class="card-footer bg-transparent">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="display">25K</h3>
                            <h5 class="display text-muted">Followers</h5>
                        </div>
                        <div class="col text-center">
                            <h3 class="display">200</h3>
                            <h5 class="display text-muted">Following</h5>
                        </div>
                        <div class="col text-center">
                            <h3 class="display">25K</h3>
                            <h5 class="display text-muted">Facebook</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::profile -->



        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-1">Poll</div>
                    <div class="ul-widget-app__header mb-4">
                        <h5 class="text-mute">Recent Poll</h5>
                        <h6 class="text-mute font-weight-600">Your mobile app daily usage</h6>
                    </div>
                    <label class="radio radio-primary">
                        <input type="radio" name="radio" value="0">

                        <span class="font-weight-700">A 20 minutes</span>
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio radio-primary">
                        <input type="radio" name="radio" value="0">

                        <span class="font-weight-700">B More than 30 minutes</span>
                        <span class="checkmark" checked=""></span>
                    </label>

                    <label class="radio radio-primary">
                        <input type="radio" name="radio" value="0">

                        <span class="font-weight-700">C 1 Hour</span>
                        <span class="checkmark" checked=""></span>
                    </label>

                    <div class=" mt-5">
                        <button type="button" class="btn btn-primary  m-1">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Browser Status</div>
                    <div class="ul-widget-app__browser-list">
                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Chrome  text-18 text-danger font-weight-600 mr-3"></i>
                            <span class="text-15">Google Chrome</span>
                            <span class="badge badge-round-success pill  m-1">99%</span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Firefox  text-18 text-warning font-weight-600 mr-3"></i>
                            <span class="text-15">Firefox</span>
                            <span class="badge badge-round-danger pill  m-1">89%</span>
                        </div>


                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Internet-Explorer  text-18 text-info font-weight-600 mr-3"></i>
                            <span class="text-15">Internet Explorer</span>
                            <span class="badge badge-round-primary pill  m-1">9%</span>
                        </div>

                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Opera  text-18 text-danger font-weight-600 mr-3"></i>
                            <span class="text-15">Opera Mini</span>
                            <span class="badge badge-round-dark pill  m-1">9%</span>
                        </div>


                        <div class="ul-widget-app__browser-list-1 mb-4">
                            <i class="i-Android  text-18 text-success mr-3"></i>
                            <span class="text-15">Android</span>
                            <span class="badge badge-round-danger pill  m-1">0%</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-1">Poll</div>
                    <div class="ul-widget-app__header mb-4">
                        <h5 class="text-mute">Recent Poll</h5>
                        <h6 class="text-mute font-weight-600">Your mobile app daily usage</h6>
                    </div>

                    <div class="ul-widget-app__poll-list mb-4">
                        <div class="d-flex">
                            <h5 class="heading mr-2">A</h5>
                            <span class="text-muted">20 Minutes</span>
                            <span class="t-font-boldest ml-auto">33%</span>
                        </div>
                        <div class="progress progress--height-2 mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="ul-widget-app__poll-list mb-4">
                        <div class="d-flex">
                            <h5 class="heading mr-2">B</h5>
                            <span class="text-muted">Greater than 30 Minutes</span>
                            <span class="t-font-boldest ml-auto">63%</span>
                        </div>
                        <div class="progress progress--height-2 mb-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="ul-widget-app__poll-list mb-4">
                        <div class="d-flex">
                            <h5 class="heading mr-2">C</h5>
                            <span class="text-muted">2 Hour</span>
                            <span class="t-font-boldest ml-auto">73%</span>
                        </div>
                        <div class="progress progress--height-2 mb-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 73%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="ul-widget-app__poll-list mb-4">
                        <div class="d-flex">
                            <h5 class="heading mr-2">D</h5>
                            <span class="text-muted">8 Hour</span>
                            <span class="t-font-boldest ml-auto">13%</span>
                        </div>
                        <div class="progress progress--height-2 mb-3">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 13%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- content goes here -->

@endsection

@section('page-js')




@endsection

@section('bottom-js')

<script src="{{asset('assets/js/form.validation.script.js')}}"></script>


@endsection
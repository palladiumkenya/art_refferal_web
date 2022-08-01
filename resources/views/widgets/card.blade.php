@extends('layouts.master')
@section('before-css')


@endsection

@section('page-css')

@endsection

@section('main-content')
        <div class="breadcrumb">
                    <h1> Card</h1>
                    <ul>
                        <li><a href="">Widgets</a></li>
                        <li> Card</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <!-- content goes here -->

                <section class="widget-card">
                    <div class="row">
                        <div class="col-lg-4 col-xl-4 mt-3">
                            <div class="card">
                                <img class="d-block w-100 rounded rounded" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="First slide">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">Gull Admin</h5>
                                    <p class="card-text text-mute">By Frontend developer</p>
                                    <button type="button" class="btn btn-primary ul-btn-raised--v2  m-1">Download</button>

                                    <button type="button" class="btn btn-outline-success ul-btn-raised--v2 m-1 float-right">Preview</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xl-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <img class="d-block w-100 rounded" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Second slide">
                                    <h5 class="card-title mt-4 mb-2">Gull Admin</h5>
                                    <p class="card-text text-mute">By Frontend developer</p>

                                    <div class="ul-widget-card__info">
                                        <span>
                                            <p>$ 4785.78</p>
                                            <p class="text-mute">Income</p>
                                        </span>
                                        <span>
                                            <p>4/11/2019</p>
                                            <p class="text-mute m-0">Deadline</p>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xl-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <img class="d-block w-100 rounded" src="{{asset('assets/images/products/iphone-1.jpg')}}" alt="First slide">
                                    <h5 class="card-title mt-4 mb-2">Gull Admin</h5>

                                    <div class="ul-widget-card__progress-rate">
                                        <span>$675</span>
                                        <span class="">$10000</span>
                                    </div>
                                    <div class="progress progress--height mb-3">
                                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>


                                    <button type="button" class="btn btn-primary ul-btn-raised--v2  m-1">Download</button>

                                    <button type="button" class="btn btn-outline-success ul-btn-raised--v2 m-1 float-right">Preview</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xl-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-profile mb-4">
                                        <div class="ul-widget-card__user-info">
                                            <img class="profile-picture avatar-lg mb-2" src="{{asset('assets/images/faces/1.jpg')}}" alt="">
                                            <p class="m-0 text-24">Timothy Carlson</p>
                                            <p class="text-muted m-0">Digital Marketer</p>
                                        </div>
                                    </div>
                                    <div class="ul-widget-card--line mt-2">
                                        <button type="button" class="btn btn-primary ul-btn-raised--v2  m-1">Download</button>
                                        <button type="button" class="btn btn-outline-success ul-btn-raised--v2 m-1 float-right">Preview</button>
                                    </div>
                                    <div class="ul-widget-card__rate-icon">
                                        <span>
                                           <i class="i-Add-UserStar text-warning"></i>
                                           5.0
                                       </span>
                                        <span>
                                           <i class="i-Bag text-primary"></i>
                                           78 Projects
                                       </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xl-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ul-widget-card__title-info text-center mb-3">
                                        <p class="m-0 text-24">Jon Snow</p>
                                        <p class="text-muted m-0">UI/UX</p>
                                    </div>
                                    <div class="user-profile mb-4">
                                        <div class="ul-widget-card__user-info">
                                            <img class="profile-picture avatar-lg mb-2" src="{{asset('assets/images/faces/5.jpg')}}" alt="">
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

                        <div class="col-lg-4 col-xl-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-profile mb-4">
                                        <div class="ul-widget-card__user-info">
                                            <img class="profile-picture avatar-lg mb-2" src="{{asset('assets/images/faces/2.jpg')}}" alt="">
                                            <p class="m-0 text-24">Wolverine</p>
                                            <p class="text-muted m-0">Mutant</p>
                                        </div>

                                    </div>
                                    <div class="ul-widget-card__progress-rate">
                                        <span>700 Points</span>
                                        <span class="">1000</span>
                                    </div>
                                    <div class="progress progress--height mb-3">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="button" class="btn btn-primary ul-btn-raised--v2  m-1">Follow</button>
                                        <button type="button" class="btn btn-outline-success ul-btn-raised--v2 m-1 float-right">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
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
                        <div class="col-md-4 mt-3">
                            <div class="card bg-dark text-white o-hidden mb-4">
                                <img class="card-img" src="{{asset('assets/images/photo-long-2.jpg')}}" alt="Card image">
                                <div class="card-img-overlay">

                                    <div class="text-center pt-4">
                                        <h5 class="card-title mb-2 text-white">Sunny</h5>
                                        <div class="separator border-top mb-2"></div>
                                        <h3 class="text-white">Korea</h3>

                                    </div>
                                    <div class="ul-widget-card__cloud card-icon-bg">
                                        <div class="ul-widget-card__head">
                                            <i class="i-Cloud-Sun"></i>
                                            <h1 class="m-0">32 <sup>o</sup></h1>
                                        </div>
                                        <div class="ul-widget-card__body">
                                            <div class="ul-widget-card__weather-info">
                                                <span>Precipitation</span>
                                                <span>6%</span>
                                            </div>
                                            <div class="ul-widget-card__weather-info">
                                                <span>Humidity</span>
                                                <span>64%</span>
                                            </div>
                                            <div class="ul-widget-card__weather-info">
                                                <span>Wind</span>
                                                <span>6 km/h</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-1 text-left card-footer font-weight-light d-flex">
                                        <span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
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
                        <!-- <div class="col-lg-4 col-xl-4 mt-3"></div>
                        <div class="col-lg-4 col-xl-4 mt-3"></div> -->
                        <div class="col-lg-4 col-xl-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="ul-widget-card__title">Gull Admin</h5>
                                    <p class="card-text text-mute">By Frontend developer</p>
                                    <img class="d-block w-100 rounded" src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="Second slide">

                                    <div class="ul-widget-card__rate-icon --version-2">
                                        <span>
                                               <a href=""> <i class="i-Like text-success"></i></a>
                                                576
                                            </span>
                                        <span>
                                               <a href=""> <i class="i-Speach-Bubble-3 text-primary"></i></a>
                                                350
                                            </span>
                                        <span>
                                                <a href=""><i class="i-Heart1 text-danger"></i></a>
                                                255
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-8 col-xl-8 mt-3">
                           coming soon video
                       </div> -->
                        <div class="col-lg-8 col-xl-8 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Timeline</div>
                                    <div class="ul-widget-s6__items ul-widget-card__position">
                                        <div class="ul-widget-card__item">
                                            <span class="ul-widget-s6__badge ul-widget-card__dot">
                                                <p class="badge-dot-primary ul-widget6__dot ul-widget-card__dot-xl">
                                                    <i class="i-Add text-white"></i>
                                                </p>
                                            </span>
                                            <div class="ul-widget-card__info-v2">
                                                <span class="t-font-boldest">Add File</span>
                                                <span class="t-font-bold">It is a long established fact that a reader will be distracted.</span>
                                                <small class="text-mute">3 Days Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ul-widget-s6__items ul-widget-card__position">
                                        <div class="ul-widget-card__item">
                                            <span class="ul-widget-s6__badge ul-widget-card__dot">
                                                <p class="badge-dot-success ul-widget6__dot ul-widget-card__dot-xl">
                                                    <i class="i-Like-2 text-white"></i>
                                                </p>
                                            </span>
                                            <div class="ul-widget-card__info-v2">
                                                <span class="t-font-boldest">File Completed</span>
                                                <span class="t-font-bold">It is a long established fact that a reader will be distracted.</span>
                                                <small class="text-mute">3 Days Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ul-widget-s6__items ul-widget-card__position">
                                        <div class="ul-widget-card__item">
                                            <span class="ul-widget-s6__badge ul-widget-card__dot">
                                                <p class="badge-dot-danger ul-widget6__dot ul-widget-card__dot-xl">
                                                    <i class="i-Delete-File text-white"></i>
                                                </p>
                                            </span>
                                            <div class="ul-widget-card__info-v2">
                                                <span class="t-font-boldest">Delete File</span>
                                                <span class="t-font-bold">It is a long established fact that a reader will be distracted.</span>
                                                <small class="text-mute">3 Days Ago</small>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-2">Contact Form</div>

                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>


                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6 mt-3">
                            <div class="card mt-2 mb-4">

                                <div class="card-body">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content ul-tab__content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

@endsection

@section('page-js')





@endsection

@section('bottom-js')




@endsection

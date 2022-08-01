@extends('layouts.master')

@section('main-content')
   <div class="breadcrumb">
                <h1>Tabs</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>Tabs</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <h2>Tabs</h2>
                    <p></p>
                </div>
            </div>

            <div class="row mb-4">


                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Basic Tab</h4>
                            <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-basic-tab" data-toggle="tab" href="#homeBasic" role="tab" aria-controls="homeBasic" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-basic-tab" data-toggle="tab" href="#profileBasic" role="tab" aria-controls="profileBasic" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#contactBasic" role="tab" aria-controls="contactBasic" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="homeBasic" role="tabpanel" aria-labelledby="home-basic-tab">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.
                                </div>
                                <div class="tab-pane fade" id="profileBasic" role="tabpanel" aria-labelledby="profile-basic-tab">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.
                                </div>
                                <div class="tab-pane fade" id="contactBasic" role="tabpanel" aria-labelledby="contact-basic-tab">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Tab With Dropdown</h4>



                            <ul class="nav nav-tabs" id="dropdwonTab">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" aria-expanded="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" aria-expanded="false">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Dropdown
            </a>
                                    <div class="dropdown-menu" >
                                        <a class="dropdown-item active" id="dropdown1-tab" href="#dropdown1" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" data-toggle="tab" aria-controls="dropdown2" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" aria-expanded="false">About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1" id="dropdwonTabContent">
                                <div role="tabpanel" class="tab-pane" id="home" aria-labelledby="home-tab" aria-expanded="true">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                        locavore.
                                    </p>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                                <div class="tab-pane active" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="true">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim tempora voluptas fuga exercitationem sunt officiis hic accusantium quos, sapiente harum voluptatum facere accusamus impedit at quia ipsum, suscipit praesentium
                                        natus!
                                    </p>
                                </div>
                                <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                        locavore.
                                    </p>
                                </div>
                                <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate iusto amet rerum aut excepturi sunt, incidunt eaque architecto commodi deserunt, deleniti beatae ducimus. Vel laboriosam iusto nam doloribus
                                        error!
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end of col -->



            </div>
            <!-- end of row -->


            <div class="row mb-4">


                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Basic Tab With Icon</h4>

                            <ul class="nav nav-tabs" id="myIconTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-icon-tab" data-toggle="tab" href="#homeIcon" role="tab" aria-controls="homeIcon" aria-selected="true"><i class="nav-icon i-Home1 mr-1"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-icon-tab" data-toggle="tab" href="#profileIcon" role="tab" aria-controls="profileIcon" aria-selected="false"><i class="nav-icon i-Home1 mr-1"></i> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-icon-tab" data-toggle="tab" href="#contactIcon" role="tab" aria-controls="contactIcon" aria-selected="false"><i class="nav-icon i-Home1 mr-1"></i> Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myIconTabContent">
                                <div class="tab-pane fade show active" id="homeIcon" role="tabpanel" aria-labelledby="home-icon-tab">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.
                                </div>
                                <div class="tab-pane fade" id="profileIcon" role="tabpanel" aria-labelledby="profile-icon-tab">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.
                                </div>
                                <div class="tab-pane fade" id="contactIcon" role="tabpanel" aria-labelledby="contact-icon-tab">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-6">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Basic Tab With pill</h4>

                            <ul class="nav nav-pills" id="myPillTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-icon-pill" data-toggle="pill" href="#homePIll" role="tab" aria-controls="homePIll" aria-selected="true"><i class="nav-icon i-Home1 mr-1"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-icon-pill" data-toggle="pill" href="#profilePIll" role="tab" aria-controls="profilePIll" aria-selected="false"><i class="nav-icon i-Home1 mr-1"></i> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-icon-pill" data-toggle="pill" href="#contactPIll" role="tab" aria-controls="contactPIll" aria-selected="false"><i class="nav-icon i-Home1 mr-1"></i> Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myPillTabContent">
                                <div class="tab-pane fade show active" id="homePIll" role="tabpanel" aria-labelledby="home-icon-pill">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.
                                </div>
                                <div class="tab-pane fade" id="profilePIll" role="tabpanel" aria-labelledby="profile-icon-pill">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.
                                </div>
                                <div class="tab-pane fade" id="contactPIll" role="tabpanel" aria-labelledby="contact-icon-pill">
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->



            </div>
            <!-- end of row -->



@endsection

@section('page-js')

@endsection

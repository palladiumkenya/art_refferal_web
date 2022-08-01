@extends('layouts.master')
@section('page-css')

@endsection

@section('main-content')
    <div class="breadcrumb">
                    <h1>FAQ</h1>
                    <ul>
                        <li><a href="">Others</a></li>
                        <li>FAQ Page</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <!-- content goes here -->

                <section class="ul-faq__content">
                    <div class="row">
                       <div class="col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-md-center">
                                        <div class="col-lg-10 col-xl-10">
                                            <div class="ul-faq__details">
                                                <h3 class="headding t-font-bold">Do you have any questions ?</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent" id="basic-addon1">
                                                            <i class="i-Search-People"></i>
                                                        </span>
                                                    </div>
                                                        <input type="text" class="form-control" placeholder="search..." aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>


                    <div class="row mt-4 mb-4">
                        <div class="col-lg-4 col-xl-4 mt-3 mb-3">
                            <div class="card">
                                <div class="ul-faq__list-details">
                                    <div class="card-body">
                                        <div class="card-title">
                                            List of Table
                                        </div>
                                        <div class="ul-widget-s6__items">
                                                <div class="ul-widget-s6__item">
                                                    <span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-primary ul-widget6__dot"></p>
                                                    </span>
                                                    <span class="ul-widget-s6__text"><a href=""> Customer Product</a> </span>

                                                </div>
                                                <div class="ul-widget-s6__item">
                                                    <span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-success ul-widget6__dot"></p>
                                                    </span>
                                                    <span class="ul-widget-s6__text"><a href=""> Brand Name</a> </span>

                                                </div>

                                                <div class="ul-widget-s6__item">
                                                    <span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-warning ul-widget6__dot"></p>
                                                    </span>
                                                    <span class="ul-widget-s6__text"><a href=""> New Brand </a>  </span>

                                                </div>
                                                <div class="ul-widget-s6__item">
                                                        <span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-danger ul-widget6__dot"></p>
                                                        </span>
                                                        <span class="ul-widget-s6__text"><a href=""> New Product </a>  </span>

                                                    </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="card-title">Supporters</div>

                                    <div class="ul-widget1">
                                            <div class="ul-widget4__item ul-widget4__users">
                                                <div class="ul-widget4__img">
                                                    <img src="{{asset('assets/images/faces/1.jpg')}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </div>
                                                <div class="ul-widget2__info ul-widget4__users-info">
                                                    <a href="#" class="ul-widget2__title">
                                                        Anna Strong
                                                    </a>
                                                    <span href="#" class="ul-widget2__username">
                                                        Visual Designer,Google Inc
                                                    </span>
                                                </div>

                                            </div>

                                            <div class="ul-widget4__item ul-widget4__users">
                                                    <div class="ul-widget4__img">
                                                        <img src="{{asset('assets/images/faces/2.jpg')}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </div>
                                                    <div class="ul-widget2__info ul-widget4__users-info">
                                                        <a href="#" class="ul-widget2__title">
                                                            Anna Strong
                                                        </a>
                                                        <span href="#" class="ul-widget2__username">
                                                            Visual Designer,Google Inc
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="ul-widget4__item ul-widget4__users">
                                                        <div class="ul-widget4__img">
                                                            <img src="{{asset('assets/images/faces/3.jpg')}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        </div>
                                                        <div class="ul-widget2__info ul-widget4__users-info">
                                                            <a href="#" class="ul-widget2__title">
                                                                Anna Strong
                                                            </a>
                                                            <span href="#" class="ul-widget2__username">
                                                                Visual Designer,Google Inc
                                                            </span>
                                                        </div>

                                                    </div>

                                                    <div class="ul-widget4__item ul-widget4__users">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{asset('assets/images/faces/4.jpg')}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </div>
                                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                                <a href="#" class="ul-widget2__title">
                                                                    Anna Strong
                                                                </a>
                                                                <span href="#" class="ul-widget2__username">
                                                                    Visual Designer,Google Inc
                                                                </span>
                                                            </div>

                                                        </div>


                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-8 mt-3 mb-3">

                                        <div class="card">
                                                <div class="card-body">
                                                        <div class="accordion" id="accordionRightIcon">
                                                                <div class="card ul-card__v-space">
                                                                    <div class="card-header header-elements-inline">
                                                                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                                                            <a data-toggle="collapse" class="text-default collapsed" href="#accordion-item-icon-right-1" aria-expanded="false">Accordion asdasd Item #1</a>
                                                                        </h6>

                                                                    </div>



                                                                    <div id="accordion-item-icon-right-1" class="collapse" data-parent="#accordionRightIcon" style="">
                                                                        <div class="card-body">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card ul-card__v-space">
                                                                    <div class="card-header header-elements-inline">
                                                                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                                                            <a data-toggle="collapse" class="text-default collapsed" href="#accordion-item-icon-right-2">Accordion Item #2</a>
                                                                        </h6>

                                                                    </div>



                                                                    <div id="accordion-item-icon-right-2" class="collapse " data-parent="#accordionRightIcon">
                                                                        <div class="card-body">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="card ul-card__v-space">
                                                                    <div class="card-header header-elements-inline">
                                                                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                                                            <a data-toggle="collapse" class="text-default collapsed" href="#accordion-item-icon-right-3">Accordion Item #3</a>
                                                                        </h6>

                                                                    </div>



                                                                    <div id="accordion-item-icon-right-3" class="collapse " data-parent="#accordionRightIcon">
                                                                        <div class="card-body">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                                        </div>
                                                                    </div>
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

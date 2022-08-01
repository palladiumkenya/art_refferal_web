@extends('layouts.master')

@section('main-content')
         <div class="breadcrumb">
                <h1>Accordion</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Accordion</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title ">
                                <h3 class="card-title">Accordion group</h3>

                            </div>

                            <div class="accordion" id="accordionExample">
                                <div class="card ul-card__border-radius">
                                    <div class="card-header ">
                                        <h6 class="card-title mb-0">
                                            <a data-toggle="collapse" class="text-default" href="#accordion-item-group1">Accordion asd
                                                Item #1</a>
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group1" class="collapse " data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>

                                <div class="card ul-card__border-radius">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">
                                            <a class="collapsed text-default" data-toggle="collapse"
                                                href="#accordion-item-group2">Accordion Item #2</a>
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group2" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                        </div>
                                    </div>
                                </div>

                                <div class="card ul-card__border-radius">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">
                                            <a class="collapsed text-default" data-toggle="collapse"
                                                href="#accordion-item-default3">Accordion Item #3</a>
                                        </h6>
                                    </div>

                                    <div id="accordion-item-default3" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body">
                            <!-- right control icon -->
                            <h3 class="card-title">Right control icon</h3>
                            <div class="accordion" id="accordionRightIcon">
                                <div class="card ">
                                    <div class="card-header header-elements-inline">
                                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                            <a data-toggle="collapse" class="text-default collapsed" href="#accordion-item-icon-right-1"
                                                aria-expanded="false">Accordion asdasd Item #1</a>
                                        </h6>

                                    </div>



                                    <div id="accordion-item-icon-right-1" class="collapse" data-parent="#accordionRightIcon" style="">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                            <a data-toggle="collapse" class="text-default collapsed"
                                                href="#accordion-item-icon-right-2">Accordion Item #2</a>
                                        </h6>

                                    </div>



                                    <div id="accordion-item-icon-right-2" class="collapse " data-parent="#accordionRightIcon">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>


                                <div class="card ">
                                    <div class="card-header header-elements-inline">
                                        <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                            <a data-toggle="collapse" class="text-default collapsed"
                                                href="#accordion-item-icon-right-3">Accordion Item #3</a>
                                        </h6>

                                    </div>



                                    <div id="accordion-item-icon-right-3" class="collapse " data-parent="#accordionRightIcon">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /right control icon -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                        <!-- basic accordions with icons -->
                        <div class="card ">
                            <div class="card-body">
                                <!-- right control icon -->
                                <h3 class="card-title">With Icons</h3>
                                <div class="accordion" id="accordionRightIcon">
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                                <a data-toggle="collapse" class="text-default collapsed" href="#accordion-item-icons-1" aria-expanded="false">
                                                    <span><i class="i-Big-Data ul-accordion__font"> </i></span>
                                                    User Approval</a>
                                            </h6>

                                        </div>



                                        <div id="accordion-item-icons-1" class="collapse " data-parent="#accordionRightIcon" style="">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                                <a data-toggle="collapse" class="text-default collapsed"
                                                    href="#accordion-item-icons-2">
                                                    <span><i class="i-Data-Settings ul-accordion__font"> </i></span>
                                                    Privacy Settings</a>
                                            </h6>

                                        </div>



                                        <div id="accordion-item-icons-2" class="collapse " data-parent="#accordionRightIcon">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card ">
                                        <div class="card-header header-elements-inline">
                                            <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                                <a data-toggle="collapse" class="text-default collapsed"
                                                    href="#accordion-item-icons-3">
                                                    <span><i class="i-Bell1 ul-accordion__font"> </i></span>
                                                    Account Settings</a>
                                            </h6>

                                        </div>



                                        <div id="accordion-item-icons-3" class="collapse " data-parent="#accordionRightIcon">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /right control icon -->
                            </div>
                        </div>
                        <!-- end::Basic accordions with icons -->


                        <!-- begin::without right  icons -->

                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="card-title ">
                                        <h3 class="card-title">Without Right Icons</h3>

                                    </div>

                                    <div class="accordion" id="accordionExample">
                                        <div class="card ul-card__border-radius">
                                            <div class="card-header ">
                                                <h6 class="card-title mb-0">
                                                    <a data-toggle="collapse" class="text-default" href="#accordion-item-noicon-1">
                                                    <span><i class="i-Big-Data ul-accordion__font"> </i></span>
                                                        Accordion asd
                                                        Item #1</a>
                                                </h6>
                                            </div>

                                            <div id="accordion-item-noicon-1" class="collapse " data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card ul-card__border-radius">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0">
                                                    <a class="collapsed text-default" data-toggle="collapse"
                                                        href="#accordion-item-noicon-2">
                                                        <span><i class="i-Data-Settings ul-accordion__font"> </i></span>

                                                        Accordion
                                                        Item #2</a>
                                                </h6>
                                            </div>

                                            <div id="accordion-item-noicon-2" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card ul-card__border-radius">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0">
                                                    <a class="collapsed text-default" data-toggle="collapse"
                                                        href="#accordion-item-noicon-3">
                                                        <span><i class="i-Bell1 ul-accordion__font"> </i></span>
                                                        Accordion Item #3</a>
                                                </h6>
                                            </div>

                                            <div id="accordion-item-noicon-3" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <!-- end::without right icons -->
                </div>



            </div>
@endsection

@section('page-js')

@endsection

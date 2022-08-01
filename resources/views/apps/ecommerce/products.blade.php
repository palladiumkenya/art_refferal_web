@extends('layouts.master')
@section('page-css')


@endsection

@section('main-content')

<div class="breadcrumb">
    <h1>Products</h1>
    <ul>
        <li><a href="">Apps</a></li>
        <li>Ecommerce</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>


<section class="product-cart">
    <div class="row list-grid">
        <div class="list-item col-md-3">
            <div class="card o-hidden mb-4 d-flex flex-column">
                <div class="list-thumb d-flex">
                    <img alt="" src="{{ asset('assets/images/products/speaker-1.jpg') }}" />
                </div>
                <div class="flex-grow-1 d-bock">
                    <div
                        class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
                        <a class="w-40 w-sm-100" href="">
                            <div class="item-title">
                                Wireless Bluetooth V4.0 Portable Speaker with HD Sound
                                and Bass
                            </div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $32.00 <del class="text-secondary">$54.00</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-info">20% off</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item  col-md-3   ">
            <div class="card o-hidden mb-4 d-flex flex-column">
                <div class="list-thumb d-flex">
                    <img alt="" src="{{ asset('assets/images/products/speaker-2.jpg') }}" />
                </div>
                <div class="flex-grow-1 d-bock">
                    <div
                        class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
                        <a class="w-40 w-sm-100" href="">
                            <div class="item-title">
                                Portable Speaker with HD Sound
                            </div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $25.00 <del class="text-secondary">$43.00</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-primary">Sale</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item  col-md-3   ">
            <div class="card o-hidden mb-4 d-flex flex-column">
                <div class="list-thumb d-flex">
                    <img alt="" src="{{ asset('assets/images/products/headphone-2.jpg') }}" />
                </div>
                <div class="flex-grow-1 d-bock">
                    <div
                        class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
                        <a class="w-40 w-sm-100" href="">
                            <div class="item-title">
                                Lightweight On-Ear Headphones - Black
                            </div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $29.00 <del class="text-secondary">$55.00</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-info">-40%</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item  col-md-3   ">
            <div class="card o-hidden mb-4 d-flex flex-column">
                <div class="list-thumb d-flex">
                    <img alt="" src="{{ asset('assets/images/products/watch-1.jpg') }}" />
                </div>
                <div class="flex-grow-1 d-bock">
                    <div
                        class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
                        <a class="w-40 w-sm-100" href="">
                            <div class="item-title">
                                Automatic-self-wind mens Watch 5102PR-001 (Certified
                                Pre-owned)
                            </div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $33.00 <del class="text-secondary">$58.00</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-info">10% off</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item  col-md-3   ">
            <div class="card o-hidden mb-4 d-flex flex-column">
                <div class="list-thumb d-flex">
                    <img alt="" src="{{ asset('assets/images/products/watch-2.jpg') }}" />
                </div>
                <div class="flex-grow-1 d-bock">
                    <div
                        class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
                        <a class="w-40 w-sm-100" href="">
                            <div class="item-title">
                                Automatic-self-wind mens Watch 5102PR-001
                            </div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $38.00 <del class="text-secondary">$50.00</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-info">4% off</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item  col-md-3   ">
            <div class="card o-hidden mb-4 d-flex flex-column">
                <div class="list-thumb d-flex">
                    <img alt="" src="{{ asset('assets/images/products/headphone-3.jpg') }}" />
                </div>
                <div class="flex-grow-1 d-bock">
                    <div
                        class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
                        <a class="w-40 w-sm-100" href="">
                            <div class="item-title">
                                On-Ear Headphones - Black
                            </div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $38.00 <del class="text-secondary">$54.00</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-success">$4 off</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item  col-md-3   ">
            <div class="card o-hidden mb-4 d-flex flex-column">
                <div class="list-thumb d-flex">
                    <img alt="" src="{{ asset('assets/images/products/headphone-4.jpg') }}" />
                </div>
                <div class="flex-grow-1 d-bock">
                    <div
                        class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
                        <a class="w-40 w-sm-100" href="">
                            <div class="item-title">In-Ear Headphone</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $31.00 <del class="text-secondary">$58.00</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-primary">$5 off</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-item  col-md-3   ">
            <div class="card o-hidden mb-4 d-flex flex-column">
                <div class="list-thumb d-flex">
                    <img alt="" src="{{ asset('assets/images/products/iphone-2.jpg') }}" />
                </div>
                <div class="flex-grow-1 d-bock">
                    <div
                        class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
                        <a class="w-40 w-sm-100" href="">
                            <div class="item-title">
                                Duis exercitation nostrud anim
                            </div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $22.00 <del class="text-secondary">$44.00</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-red"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3  ">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>




@endsection

@section('page-js')



@endsection
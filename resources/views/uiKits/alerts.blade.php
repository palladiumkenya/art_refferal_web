@extends('layouts.master')

@section('main-content')
    <div class="breadcrumb">
                <h1>Alerts</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Alerts</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-md-12" >
                    <div class="alert alert-card alert-warning text-center" role="alert">
                        Gull makes developent life easier! <button class="btn btn-rounded btn-warning ml-3">Buy Now</button>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="alert alert-card alert-success" role="alert">
                        <strong class="text-capitalize">Success!</strong> Lorem ipsum dolor sit amet.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-card alert-danger" role="alert">
                        <strong class="text-capitalize">Danger!</strong> Lorem ipsum dolor sit amet.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-card alert-info" role="alert">
                        <strong class="text-capitalize">Success!</strong> Lorem ipsum dolor sit amet.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Bootstrap Alerts</div>
                            <div class="alert alert-primary" role="alert">
                                <strong class="text-capitalize">Primary!</strong> Lorem ipsum dolor sit amet.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="alert alert-success" role="alert">
                                <strong class="text-capitalize">Success!</strong> Lorem ipsum dolor sit amet.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="alert alert-info" role="alert">
                                <strong class="text-capitalize">Info!</strong> Lorem ipsum dolor sit amet.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="alert alert-warning" role="alert">
                                <strong class="text-capitalize">Warning!</strong> Lorem ipsum dolor sit amet.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="alert alert-danger" role="alert">
                                <strong class="text-capitalize">Danger!</strong> Lorem ipsum dolor sit amet.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection

@section('page-js')

@endsection

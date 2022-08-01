@extends('layouts.master')
@section('page-css')
     <link rel="stylesheet" href="{{asset('assets/styles/vendor/cropper.min.css')}}">
@endsection

@section('main-content')
    <div class="breadcrumb">
                <h1>Image Cropper</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Image Cropper</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Image Cropper</div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="img-container o-hidden">
                                        <img class="cropper-main-img img-fluid" src="{{asset('assets/images/photo-wide-1.jpg')}}" alt="Picture">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="docs-preview clearfix">
                                            <div class="img-preview preview-lg img-fluid"></div>
                                            <div class="img-preview preview-md img-fluid"></div>
                                            <div class="img-preview preview-sm img-fluid"></div>
                                        </div>
                                    </div>
                                    <!-- <div class="docs-data">
                                        <fieldset class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">X</span>
                                                </div>
                                                <input type="number" class="form-control cropper-main-dataX" placeholder="x">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">px</span>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Y</span>
                                                </div>
                                                <input type="number" class="form-control cropper-main-dataY" placeholder="y">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">px</span>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Width</span>
                                                </div>
                                                <input type="number" class="form-control cropper-main-dataWidth" placeholder="width">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">px</span>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Height</span>
                                                </div>
                                                <input type="number" class="form-control cropper-main-dataHeight" placeholder="height">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">px</span>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/cropper.min.js')}}"></script>
<script src="{{asset('assets/js/cropper.script.js')}}"></script>
@endsection

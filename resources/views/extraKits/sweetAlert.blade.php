@extends('layouts.master')
@section('page-css')
  <link rel="stylesheet" href="{{asset('assets/styles/vendor/sweetalert2.min.css')}}">
@endsection

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
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Basic Alerts</div>
                            <button type="button" class="btn btn-primary btn-block mb-3" id="basic-alert">Basic</button>
                            <button type="button" class="btn btn-primary btn-block" id="with-title">With Title</button>
                            <button type="button" class="btn btn-primary btn-block" id="with-html">With HTML</button>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Other Options</div>
                            <button type="button" class="btn btn-primary btn-block" id="with-image">Custom Image</button>
                            <button type="button" class="btn btn-primary btn-block" id="with-timer">Timer Alert</button>
                            <button type="button" class="btn btn-primary btn-block" id="with-input">Prompt Function</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Alert Types</div>
                            <button type="button" class="btn btn-success btn-block mb-3" id="alert-success">Success
                                Alert</button>
                            <button type="button" class="btn btn-info btn-block mb-3" id="alert-info">Info Alert</button>
                            <button type="button" class="btn btn-warning btn-block mb-3" id="alert-warning">Warning
                                Alert</button>
                            <button type="button" class="btn btn-danger btn-block mb-3" id="alert-error">Error Alert</button>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Alert Action</div>
                            <button type="button" class="btn btn-primary btn-block mb-3" id="alert-confirm">Confirm
                                Alert</button>
                        </div>
                    </div>
                </div>
            </div>



@endsection

@section('page-js')
 <script src="{{asset('assets/js/vendor/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.script.js')}}"></script>
@endsection

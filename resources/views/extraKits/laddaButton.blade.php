@extends('layouts.master')
@section('page-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/ladda-themeless.min.css')}}">
@endsection

@section('main-content')
    <div class="breadcrumb">
                <h1>Ladda buttons</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Ladda buttons

                    </li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Basic example</div>
                            <p> Expand left <code>&lt;button class="btn btn-lg btn-primary ladda-button basic-ladda-button" data-style="expand-left">Click me&lt;/button></code></p>
                            <button class="btn btn-lg btn-primary ladda-button basic-ladda-button mb-3" data-style="expand-left"><span class="ladda-label">Click me</span></button>
                            <p>Expand right <code>&lt;button class="btn btn-lg btn-primary ladda-button basic-ladda-button" data-style="expand-right">Click me&lt;/button></code></p>
                            <button class="btn btn-lg btn-primary ladda-button basic-ladda-button" data-style="expand-right"><span class="ladda-label">Click me</span></button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Button variations</div>
                            <h6>Regular Buttons</h6>
                            <button class="btn btn-primary ladda-button example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <button class="btn btn-warning ladda-button  example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <button class="btn btn-danger ladda-button  example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <button class="btn btn-light ladda-button  example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <button class="btn btn-dark ladda-button  example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <h6 class="mt-3">Small Buttons</h6>
                            <button class="btn btn-sm btn-primary ladda-button example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <button class="btn btn-sm btn-warning ladda-button  example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <button class="btn btn-sm btn-danger ladda-button  example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <button class="btn btn-sm btn-light ladda-button  example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                            <button class="btn btn-sm btn-dark ladda-button  example-button m-1" data-style="expand-left"><span class="ladda-label">Submit</span></button>
                        </div>
                    </div>
                </div>
            </div>



@endsection

@section('page-js')
 <script src="{{asset('assets/js/vendor/spin.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/ladda.js')}}"></script>
<script src="{{asset('assets/js/ladda.script.js')}}"></script>
@endsection

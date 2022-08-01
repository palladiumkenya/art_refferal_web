@extends('layouts.master')
@section('before-css')


@endsection

@section('page-css')

    <link rel="stylesheet" href="{{asset('assets/styles/vendor/apexcharts.css')}}">
@endsection

@section('main-content')

<div class="breadcrumb">
                    <h1>ApexCharts</h1>
                    <ul>
                        <li><a href="">Charts</a></li>
                        <li>Apex Radar Charts</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <div class="row">
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Basic Radar Chart</div>
                                <div id="basicRadar"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title"> Radar – Multiple Series </div>
                                <button class="btn btn-primary updateRadar">Update</button>
                                <div id="radarMultiSeries"></div>

                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">
                                    Radar with Polygon-fill
                                </div>

                                <div id="radarwithPolygonFill"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->









@endsection

@section('page-js')



    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/apexcharts.dataseries.js')}}"></script>
    <script src="{{asset('assets/js/es5/apexRadarChart.script.min.js')}}"></script>





@endsection

@section('bottom-js')




@endsection

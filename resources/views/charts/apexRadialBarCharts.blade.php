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
                        <li>Apex RadialBar Charts</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <div class="row">
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Simple Radial Bar</div>
                                <div id="simpleRadialBar"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title"> Multiple Radial Bar </div>
                                <div id="multipleRadialBar"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">
                                    Custom Angle Circle Chart
                                </div>

                                <div id="customAngleCircleChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Gradient Radial Bar
                                </div>
                                <div id="gradientRadial"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Radialbars with Image
                                </div>
                                <div id="radialbarswithImage"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Stroked Angular Gauge
                                </div>
                                <div id="strokedangularGauge"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Semi Circle Gauge
                                </div>
                                <div id="semiCircleGauge"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->



@endsection

@section('page-js')



    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/apexcharts.dataseries.js')}}"></script>
    <script src="{{asset('assets/js/es5/apexRadialBarChart.script.min.js')}}"></script>





@endsection

@section('bottom-js')




@endsection

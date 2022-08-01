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
                        <li>Apex Sparkline Charts</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <div class="row">
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4 o-hidden">
                            <div class="">
                                <!-- <div class="card-title">Simple Radial Bar</div> -->
                                <div id="spark1"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4 o-hidden">
                            <div class="">

                                <div id="spark2"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4 o-hidden">
                            <div class="">


                                <div id="spark3"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4">
                            <div class="">

                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4">
                            <div class="">

                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4">
                            <div class="">

                                <div id="chart3"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4">
                            <div class="">

                                <div id="chart4"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4">
                            <div class="">

                                <div id="chart5"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4">
                            <div class="">

                                <div id="chart6"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4">
                            <div class="">

                                <div id="chart7"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3 col-sm-6">
                        <div class="card mb-4">
                            <div class="">

                                <div id="chart8"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->






@endsection

@section('page-js')



    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/apexcharts.dataseries.js')}}"></script>
    <script src="{{asset('assets/js/es5/apexSparklineChart.script.min.js')}}"></script>





@endsection

@section('bottom-js')




@endsection

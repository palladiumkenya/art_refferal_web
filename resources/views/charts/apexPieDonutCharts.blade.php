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
                        <li>Apex Pie/Donut Charts</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <div class="row">
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Simple Pie</div>
                                <div id="simplePie"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title"> Simple Donut </div>
                                <div id="simpleDonut"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">
                                    Monochrome Pie(Number of leads)
                                </div>

                                <div id="monochromePie"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->

                <div class="row">


                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Gradient Donut
                                </div>
                                <div id="gradientDonut"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Donut with Pattern(Favourite Movie Type)
                                </div>
                                <div id="donutwithPattern"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-4 col-sm-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Pie with Image
                                </div>
                                <div id="piewithImage"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->










@endsection

@section('page-js')



    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/apexcharts.dataseries.js')}}"></script>
    <script src="{{asset('assets/js/es5/apexPieDonutChart.script.min.js')}}"></script>





@endsection

@section('bottom-js')




@endsection

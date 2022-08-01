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
                        <li>Apex Area Charts</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <div class="row">
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title"> Basic Area chart(Fundamental Analysis of Stocks)</div>
                                <div id="basicArea-chart"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Spline Area</div>
                                <div id="SplineArea"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->

                <div class="row">
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">
                                    <!-- <div class="toolbar"> -->
                                    <!-- <button class="btn" id="one_month">1M</button>
                                    <button class="btn" id="six_months">6M</button>
                                    <button class="btn active" id="one_year" class="">1Y</button>
                                    <button class="btn" id="ytd">YTD</button>
                                    <button class="btn" id="all">ALL</button> -->
                                    <!-- </div> -->
                                </div>

                                <div id="timeline-chart"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Area with Negative Values</div>
                                <div id="negetiveArea"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->

                <div class="row">
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title"> Stacked Area Chart</div>
                                <div id="stackedAreaChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Missing / Null values Area Chart(Network Monitoring)</div>
                                <div id="nullAreaChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->

@endsection

@section('page-js')



    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/apexcharts.dataseries.js')}}"></script>
    <script src="{{asset('assets/js/es5/apexAreaChart.script.min.js')}}"></script>





@endsection

@section('bottom-js')




@endsection

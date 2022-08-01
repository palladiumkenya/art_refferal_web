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
                        <li>Apex CandleStick Charts</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <div class="row">
                    <div class=" col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Basic Candle Stick</div>
                                <div id="basicCandleStick"></div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- end of row -->






@endsection

@section('page-js')



    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/apexcharts.dataseries.js')}}"></script>
    <script src="{{asset('assets/js/es5/apexCandleStickChart.script.min.js')}}"></script>





@endsection

@section('bottom-js')




@endsection

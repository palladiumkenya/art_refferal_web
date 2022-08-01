@extends('layouts.master')
@section('before-css')


@endsection

@section('page-css')

@endsection

@section('main-content')

              <div class="breadcrumb">
                    <h1>chartjs</h1>
                    <ul>
                        <li><a href="">Charts</a></li>
                        <li>chartjs</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Six Month Sales</div>
                                <canvas id="LineChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Six Month Sales VS Revenue</div>
                                <canvas id="LineChart2"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->

                <div class="row">
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Multiple Bar chart</div>
                                <canvas id="BarChart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Single Bar chart</div>
                                <canvas id="BarChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Horizontal Bar chart</div>
                                <canvas id="HorizontalBarChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Mix chart</div>
                                <canvas id="MixChart"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->


                <div class="row">
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Radar chart</div>
                                <canvas id="RadarChart" height="200px"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Doughnut Chart</div>
                                <canvas id="DoughnutChart" height="200px"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->

                <div class="row">
                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Pie chart</div>
                                <canvas id="PieChart" height="200px"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Polar Area Chart</div>
                                <canvas id="PolarChart" height="200px"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of row -->
@endsection

@section('page-js')



 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <script src="{{asset('assets/js/es5/chartjs.script.min.js')}}"></script>



@endsection

@section('bottom-js')




@endsection

@extends('layouts.master')

@section('main-content')
           <div class="breadcrumb">
                <h1>Card metrics</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Card metrics</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-3">Server status region 1</h6>
                            <p class="text-20 text-success line-height-1 mb-3"><i class="i-Arrow-Up-in-Circle"></i> Up</p>
                            <small class="text-muted">Last down 4 days ago</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-3">Server status region 2</h6>
                            <p class="text-20 text-success line-height-1 mb-3"><i class="i-Arrow-Up-in-Circle"></i> Up</p>
                            <small class="text-muted">Last down 8 days ago</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-3">Server status region 3</h6>
                            <p class="text-20 text-danger line-height-1 mb-3"><i class="i-Arrow-Down-in-Circle"></i> Down
                            </p>
                            <small class="text-muted">Last down 22 days ago</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-3">Server status region 4</h6>
                            <p class="text-20 text-danger line-height-1 mb-3"><i class="i-Arrow-Down-in-Circle"></i> Down
                            </p>
                            <small class="text-muted">Last down 2 days ago</small>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-1">Taffic in last 24h</h6>
                            <p class="text-22 text-success font-weight-light mb-1">13000</p>
                            <div id="echart1" style="height: 65px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-1">Taffic in last week</h6>
                            <p class="text-22 text-danger font-weight-light mb-1">65058</p>
                            <div id="echart2" style="height: 65px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-1">Taffic in last month</h6>
                            <p class="text-22 text-success font-weight-light mb-1">165058</p>
                            <div id="echart3" style="height: 65px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-1">Taffic in last 3 months</h6>
                            <p class="text-22 text-danger font-weight-light mb-1">1065058</p>
                            <div id="echart4" style="height: 65px;"></div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-2 text-muted">Storage Usage</h6>
                            <p class="mb-1 text-22 font-weight-light">50%</p>
                            <div class="progress mb-1" style="height: 4px">
                                <div class="progress-bar bg-success" style="width: 50%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <small class="text-muted">Most data used in last 3 days</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-2 text-muted">Bandwith Usage</h6>
                            <p class="mb-1 text-22 font-weight-light">90%</p>
                            <div class="progress mb-1" style="height: 4px">
                                <div class="progress-bar bg-danger" style="width: 90%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <small class="text-muted">Most data used in last 7 days</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-2 text-muted">Data Usage</h6>
                            <p class="mb-1 text-22 font-weight-light">60%</p>
                            <div class="progress mb-1" style="height: 4px">
                                <div class="progress-bar bg-warning" style="width: 60%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <small class="text-muted">Most data used in last 5 days</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-2 text-muted">Data Usage</h6>
                            <p class="mb-1 text-22 font-weight-light">60%</p>
                            <div class="progress mb-1" style="height: 4px">
                                <div class="progress-bar bg-info" style="width: 60%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <small class="text-muted">Most data used in last 4 days</small>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-muted">Registration/Subscription</h6>
                            <p class="text-22 font-weight-light mb-1">20/80</p>
                            <div id="echart5" style="height: 140px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-muted">Project Running/Completed</h6>
                            <p class="text-22 font-weight-light mb-1">40/60</p>
                            <div id="echart6" style="height: 140px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-muted">Registration/Subscription</h6>
                            <p class="text-22 font-weight-light mb-1">20/80</p>
                            <div id="echart7" style="height: 140px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-muted">Project Running/Completed</h6>
                            <p class="text-22 font-weight-light mb-1">40/60</p>
                            <div id="echart8" style="height: 140px;"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 text-muted">Project Completion Rate</h6>
                            <p class="text-22 font-weight-light mb-1"><i class="i-Up text-success"></i> 15%</p>
                            <div id="echart9" style="height: 60px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 text-muted">Project Completion Rate</h6>
                            <p class="text-22 font-weight-light mb-1"><i class="i-Down text-danger"></i> 15%</p>
                            <div id="echart10" style="height: 60px;"></div>
                        </div>
                    </div>
                </div>
            </div>




@endsection

@section('page-js')
  <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/card.metrics.script.js')}}"></script>
@endsection

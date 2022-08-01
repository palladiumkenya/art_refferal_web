@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
       <div class="breadcrumb">
                    <h1>Widgets Statistics</h1>
                    <ul>
                        <li><a href="">UI Kits</a></li>
                        <li>Widgets Statistics</li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top"></div>

                <!-- content goes here -->

                <!-- section 1 -->
                <section class="ul-widget-stat-s1">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Car-Items"></i>
                                    <div class="content">
                                        <p class="text-muted mt-2 mb-0">New Leads</p>
                                        <p class="text-primary text-24 line-height-1 mb-2">205</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Data-Upload"></i>
                                    <div class="content">
                                        <p class="text-muted mt-2 mb-0">Download</p>
                                        <p class="text-primary text-24 line-height-1 mb-2">4021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Feedburner"></i>
                                    <div class="content">
                                        <p class="text-muted mt-2 mb-0">Feedback</p>
                                        <p class="text-primary text-24 line-height-1 mb-2">80</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <i class="i-File-Horizontal-Text"></i>
                                    <div class="content">
                                        <p class="text-muted mt-2 mb-0">Opinion</p>
                                        <p class="text-primary text-24 line-height-1 mb-2">1200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end:: section 1 -->

                <!-- section 2 -->
                <section class="ul-widget-stat-s2">
                    <div class="row">
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">INCOME</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$1000</h2>
                                            <small class="text-muted">46% compared to last year</small>
                                        </div>
                                    </div>

                                    <div id="basicArea-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">APPROVE</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$500</h2>
                                            <small class="text-muted">46% compared to last year</small>
                                        </div>
                                    </div>

                                    <div id="basicArea-chart2"></div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden ">
                                <div class="card-body ul-card__widget-chart">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">transaction</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$44,909</h2>
                                            <small class="text-muted">46% compared to last year</small>
                                        </div>
                                    </div>

                                    <div id="basicArea-chart3"></div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">SALES</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$500</h2>
                                            <small class="text-muted">46% compared to last year</small>
                                        </div>
                                    </div>

                                    <div id="basicArea-chart4"></div>
                                </div>
                            </div>
                        </div>


                </section>
                <!-- end::section 2 -->


                <!-- section 3 -->
                <section class="ul-widget-stat-s3">
                    <div class="row">
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading text-20  line-height-1 mb-3"><i class="i-Like-2"></i> Approve</h5>
                                        <div class="ul-widget__chart-number">
                                            <h6 class="">55,000</h6>

                                        </div>
                                    </div>

                                    <div id="basicArea-chart5"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading text-20  line-height-1 mb-3"><i class="i-File-Horizontal-Text"></i> Comments</h5>
                                        <div class="ul-widget__chart-number">
                                            <h6 class="">55,000</h6>

                                        </div>
                                    </div>

                                    <div id="basicArea-chart6"></div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading text-20  line-height-1 mb-3"><i class="i-Sharethis"></i> Contribution</h5>
                                        <div class="ul-widget__chart-number">
                                            <h6 class="">45,000</h6>

                                        </div>
                                    </div>

                                    <div id="basicArea-chart7"></div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading text-20  line-height-1 mb-3"><i class="i-Eye"></i> Watch</h5>
                                        <div class="ul-widget__chart-number">
                                            <h6 class="">70,000</h6>

                                        </div>
                                    </div>

                                    <div id="basicArea-chart8"></div>
                                </div>
                            </div>
                        </div>



                </section>
                <!-- end of section 3 -->


                <!-- section 4 -->
                <section class="ul-widget-stat-s3">
                    <div class="row">

                        <!-- begin::people no 9 chart-->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row">
                                        <div id="chart6"></div>
                                        <div class="ul-widget__content">
                                            <p class=" text-mute m-0">
                                                People
                                            </p>
                                            <h4 class="heading">2,750</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- use no 10 chart-->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row">
                                        <div id="multipleRadialBar"></div>
                                        <div class="ul-widget__content">
                                            <p class=" text-mute m-0">
                                                Use
                                            </p>
                                            <h4 class="heading">75%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- views no 11 chart-->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row">
                                        <div id="chart6-2"></div>
                                        <div class="ul-widget__content">
                                            <p class=" text-mute m-0">
                                                Views
                                            </p>
                                            <h4 class="heading">2,750</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- growth no 12 chart-->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row">
                                        <div id="chart1"></div>
                                        <div class="ul-widget__content">
                                            <p class=" text-mute m-0">
                                                Growth
                                            </p>
                                            <h4 class="heading">6,760</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- no 13 chart    -->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row-v2">
                                        <div id="chart13"></div>
                                        <div class="ul-widget__content-v2">
                                            <h4 class="heading mt-3">698 212</h4>
                                            <small class=" text-muted m-0">
                                                               50% Average
                                                           </small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- no 14 chart -->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row-v2">
                                        <div id="chart14"></div>
                                        <div class="ul-widget__content-v2">
                                            <h4 class="heading mt-3">369 212</h4>
                                            <small class=" text-muted m-0">
                                                               24% Average
                                                           </small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- no 15 chart -->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row-v2">
                                        <div id="chart15"></div>
                                        <div class="ul-widget__content-v2">
                                            <h4 class="heading mt-3">369 212</h4>
                                            <small class=" text-muted m-0">
                                                               24% Average
                                                           </small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- no 16 chart-->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row-v2">
                                        <div id="chart16"></div>
                                        <div class="ul-widget__content-v2">
                                            <h4 class="heading mt-3">369 212</h4>
                                            <small class=" text-muted m-0">
                                                               24% Average
                                                           </small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- land  -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="ul-widget__row">
                                        <div class="ul-widget-stat__font">
                                            <i class="i-Hotel text-primary"></i>
                                        </div>
                                        <div class="ul-widget__content">
                                            <p class=" m-0">
                                                Assets
                                            </p>
                                            <h4 class="heading">40,894</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- progression -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="ul-widget__row">
                                        <div class="ul-widget-stat__font">
                                            <i class="i-Bar-Chart text-danger"></i>
                                        </div>
                                        <div class="ul-widget__content">
                                            <p class=" m-0">
                                                Progression
                                            </p>
                                            <h4 class="heading">80%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- total profit -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="ul-widget__row">
                                        <div class="ul-widget-stat__font">
                                            <i class="i-Full-Cart text-success"></i>
                                        </div>
                                        <div class="ul-widget__content">
                                            <p class=" m-0">
                                                Total Profit
                                            </p>
                                            <h4 class="heading">&#2547; 2000</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- lease -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="ul-widget__row">
                                        <div class="ul-widget-stat__font">
                                            <i class="i-Bookmark text-warning"></i>
                                        </div>
                                        <div class="ul-widget__content">
                                            <p class=" m-0">
                                                Lease
                                            </p>
                                            <h4 class="heading"> 5,417</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- radial---no 17 chart -->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mt-4 mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row-v2">
                                        <div id="gradientRadial"></div>
                                        <div class="ul-widget__content-v2">
                                            <h4 class="heading mt-3">People Choice Rate</h4>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- radial no 18 chart -->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mt-4 mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row-v2">
                                        <div id="gradientRadial2"></div>
                                        <div class="ul-widget__content-v2">
                                            <h4 class="heading mt-3">Item Pending</h4>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- radial no 19 chart -->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mt-4 mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row-v2">
                                        <div id="gradientRadial3"></div>
                                        <div class="ul-widget__content-v2">
                                            <h4 class="heading mt-3">Total Profit</h4>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- radial no 20 chart -->
                        <div class=" col-md-3 col-lg-3">
                            <div class="card mt-4 mb-4  o-hidden">
                                <div class="card-body">

                                    <div class="ul-widget__row-v2">
                                        <div id="gradientRadial4"></div>
                                        <div class="ul-widget__content-v2">
                                            <h4 class="heading mt-3">Total Revenue</h4>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- basic-area no 21 chart -->
                        <div class=" col-md-4 col-lg-4">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">

                                    <div class="ul-widget__row-v2">

                                        <div class="ul-widget__content-v2">
                                            <h3 class="heading mt-3">698</h3>
                                            <small class=" text-muted m-0">
                                                               Orders Received
                                                           </small>

                                        </div>
                                        <div id="basicArea-chart21"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- basic-area no 22 chart -->
                        <div class=" col-md-4 col-lg-4">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">

                                    <div class="ul-widget__row-v2">

                                        <div class="ul-widget__content-v2">
                                            <h3 class="heading mt-3">5,767</h3>
                                            <small class=" text-muted m-0">
                                                               Total Marketing
                                                           </small>

                                        </div>
                                        <div id="basicArea-chart22"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- basic area no 23 chart -->
                        <div class=" col-md-4 col-lg-4">
                            <div class="card mb-4  o-hidden">
                                <div class="card-body ul-card__widget-chart">

                                    <div class="ul-widget__row-v2">

                                        <div class="ul-widget__content-v2">
                                            <h3 class="heading mt-3">$5,767</h3>
                                            <small class=" text-muted m-0">
                                                               Total Earning
                                                           </small>

                                        </div>
                                        <div id="basicArea-chart23"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- en of row -->
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
                                    <p class="text-22 font-weight-light mb-1"><i class="i-Up text-success"></i> 15%
                                    </p>
                                    <div id="echart9" style="height: 60px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-2 text-muted">Project Completion Rate</h6>
                                    <p class="text-22 font-weight-light mb-1"><i class="i-Down text-danger"></i> 15%
                                    </p>
                                    <div id="echart10" style="height: 60px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of row -->

                    <div class="row">
                        <!-- helpline -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card mb-2 o-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <h5 class="t-font-bolder">Helpline</h5>
                                            <small class="text-muted">26% higher than last year</small>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h3 class="t-font-boldest">62%</h3>
                                            <small class="text-muted">30GB</small>
                                        </div>
                                        <div class="col-12">
                                            <div class="progress mt-3">
                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- service -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card mb-2  o-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <h5 class="t-font-bolder">Service</h5>
                                            <small class="text-muted">16% higher than last year</small>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h3 class="t-font-boldest">94</h3>
                                            <small class="text-muted">30GB</small>
                                        </div>
                                        <div class="col-12">
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card mb-2  o-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <h5 class="t-font-bolder">Email</h5>
                                            <small class="text-muted">16% higher than last year</small>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h3 class="t-font-boldest">120</h3>
                                            <small class="text-muted">out of 1K</small>
                                        </div>
                                        <div class="col-12">
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- territory -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card mb-2  o-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <h5 class="t-font-bolder">Territory</h5>
                                            <small class="text-muted">16% higher than last year</small>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h3 class="t-font-boldest">120</h3>
                                            <small class="text-muted">out of 1K</small>
                                        </div>
                                        <div class="col-12">
                                            <div class="progress mt-3">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3">
                                            <div class="ul-widget__content-v4 card-icon-bg">
                                                <i class="i-Eye text-success"></i>
                                                <h3 class="t-font-boldest">4,377</h3>
                                                <span>Viewers</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <div class="ul-widget__content-v4 card-icon-bg">
                                                <i class="i-Like text-primary"></i>
                                                <h3 class="t-font-boldest">456</h3>
                                                <span>Likes</span>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-lg-3">
                                            <div class="ul-widget__content-v4 card-icon-bg">
                                                <i class="i-File-Horizontal-Text text-info"></i>
                                                <h3 class="t-font-boldest">65</h3>
                                                <span>Comments</span>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-lg-3">
                                            <div class="ul-widget__content-v4 card-icon-bg">
                                                <i class="i-Business-Man    text-warning"></i>
                                                <h3 class="t-font-boldest">20K</h3>
                                                <span>Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>



                </section>
                <!-- end::section 4 -->

@endsection

@section('page-js')


         <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
            <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
            <script src="{{asset('assets/js/es5/card.metrics.script.min.js')}}"></script>
            <script src="{{asset('assets/js/es5/widgets-statistics.min.js')}}"></script>

@endsection

@section('bottom-js')




@endsection

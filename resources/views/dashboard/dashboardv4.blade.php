@extends('layouts.master')
@section('page-css')
     <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection
@section('main-content')
             <div class="breadcrumb">
                <h1>Version 4</h1>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li>Version 4</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-4 mb-4">
                    <div class="card o-hidden">

                        <div class="card-body">
                            <span class="text-28">$20038</span>
                            <p class="text-small text-muted m-0">Sales in current month</p>
                            <div id="echart1" style="height: 65px;"></div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="flex-grow-1">
                                    <span class="text-small">Pages / Visit</span>
                                    <h5 class="m-0 font-weight-bold text-muted">2065</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small">New user</span>
                                    <h5 class="m-0 font-weight-bold text-muted">465</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small">Last week</span>
                                    <h5 class="m-0 font-weight-bold text-muted">23456</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">

                    <div class="card o-hidden">

                        <div class="card-body">
                            <span class="text-28">$7038</span>
                            <p class="text-small text-muted m-0">Sales in current week</p>
                            <div id="echart2" style="height: 65px;"></div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="flex-grow-1">
                                    <span class="text-small">Pages / Visit</span>
                                    <h5 class="m-0 font-weight-bold text-muted">2065</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small">New user</span>
                                    <h5 class="m-0 font-weight-bold text-muted">465</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small">Last week</span>
                                    <h5 class="m-0 font-weight-bold text-muted">23456</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 mb-4">
                    <div class="card o-hidden">

                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <div class="flex-grow-1">
                                    <p class="text-small text-muted m-0">Sales in current month</p>
                                    <p class="text-24 mb-3"><i class="i-Arrow-Up-in-Circle text-success"></i> 80765</p>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-small text-muted m-0">Sales in last month</p>
                                    <p class="text-24 mb-3"><i class="i-Arrow-Down-in-Circle text-danger"></i> 10765</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <div class="flex-grow-1">
                                    <p class="text-12 text-muted m-0"><strong>2070</strong> Sales</p>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-12 text-muted m-0"><strong>100</strong> Expense</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <div class="flex-grow-1">
                                    <p class="text-12 text-muted m-0"><strong>4000</strong> Sales</p>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-12 text-muted m-0"><strong>2000</strong> Expense</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-2">
                                <div class="flex-grow-1">
                                    <p class="text-12 text-muted m-0"><strong>3070</strong> Sales</p>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-12 text-muted m-0"><strong>1770</strong> Expense</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card o-hidden">
                        <div class="card-header">
                            <h3 class="card-title m-0">
                                Last Year Sales VS Profit
                            </h3>
                        </div>
                        <div class="">
                            <div id="echart3" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card o-hidden mb-4">
                        <div class="card-header">
                            <h3 class="w-50 float-left card-title m-0">New Users</h3>
                            <div class="dropdown dropleft text-right w-50 float-right">
                                           <button class="btn bg-gray-100" type="button" id="dropdownMenuButton_table1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table1">
                                    <a class="dropdown-item" href="#">Add new user</a>
                                    <a class="dropdown-item" href="#">View All users</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Smith Doe</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                            </td>

                                            <td>Smith@gmail.com</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jhon Doe</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                            </td>

                                            <td>Jhon@gmail.com</td>
                                            <td><span class="badge badge-info">Pending</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Alex</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                            </td>

                                            <td>Otto@gmail.com</td>
                                            <td><span class="badge badge-warning">Not Active</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-->

                <div class="col-md-6">
                    <div class="card o-hidden mb-4">
                        <div class="card-header">
                            <h3 class="w-50 float-left card-title m-0">Sales</h3>
                            <div class="dropdown dropleft text-right w-50 float-right">
                                           <button class="btn bg-gray-100" type="button" id="dropdownMenuButton_table2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table2">
                                    <a class="dropdown-item" href="#">Add new user</a>
                                    <a class="dropdown-item" href="#">View All users</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table  text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Date</th>

                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Watch</td>
                                            <td>

                                                12-10-2019

                                            </td>

                                            <td>$30</td>
                                            <td><span class="badge badge-success">Delivered</span></td>

                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Iphone</td>
                                            <td>

                                                23-10-2019

                                            </td>

                                            <td>$300</td>
                                            <td><span class="badge badge-info">Pending</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Watch</td>
                                            <td>

                                                12-10-2019

                                            </td>

                                            <td>$30</td>
                                            <td><span class="badge badge-warning">Not Delivered</span></td>

                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-->
            </div>
            <!-- end of row-->


            <div class="row">
                <div class="col-md-6">
                    <div class="card o-hidden mb-4">
                        <div class="card-header">
                            <h3 class="w-50 float-left card-title m-0">New Users in Datatable</h3>
                            <div class="dropdown dropleft text-right w-50 float-right">
                                           <button class="btn bg-gray-100" type="button" id="dropdownMenuButton_table3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table3">
                                    <a class="dropdown-item" href="#">Add new user</a>
                                    <a class="dropdown-item" href="#">View All users</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table id="user_table" class=" table table-borderless  text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Smith Doe</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                            </td>

                                            <td>Smith@gmail.com</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jhon Doe</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                            </td>

                                            <td>Jhon@gmail.com</td>
                                            <td><span class="badge badge-info">Pending</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Alex</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                            </td>

                                            <td>Otto@gmail.com</td>
                                            <td><span class="badge badge-warning">Not Active</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-->

                <div class="col-md-6">
                    <div class="card o-hidden mb-4">
                        <div class="card-header">
                            <h3 class="w-50 float-left card-title m-0">Sales in Datatable</h3>
                            <div class="dropdown dropleft text-right w-50 float-right">
                                           <button class="btn bg-gray-100" type="button" id="dropdownMenuButton_table4"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table4">
                                    <a class="dropdown-item" href="#">Add new user</a>
                                    <a class="dropdown-item" href="#">View All users</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table id="sales_table" class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Date</th>

                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Watch</td>
                                            <td>

                                                12-10-2019

                                            </td>

                                            <td>$30</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Iphone</td>
                                            <td>

                                                23-10-2019

                                            </td>

                                            <td>$300</td>
                                            <td><span class="badge badge-info">Pending</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Watch</td>
                                            <td>

                                                12-10-2019

                                            </td>

                                            <td>$30</td>
                                            <td><span class="badge badge-warning">Not Delivered</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-->
            </div>
            <!-- end of row-->

@endsection

@section('page-js')
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
     <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/dashboard.v4.script.js')}}"></script>

@endsection

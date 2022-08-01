@extends('layouts.master')

@section('page-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">

@endsection
@section('main-content')
       <div class="breadcrumb">
                <h1>Version 2</h1>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li>Version 2</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- CARD ICON -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Data-Upload"></i>
                                    <p class="text-muted mt-2 mb-2">Today's Upload</p>
                                    <p class="text-primary text-24 line-height-1 m-0">21</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Add-User"></i>
                                    <p class="text-muted mt-2 mb-2">New Users</p>
                                    <p class="text-primary text-24 line-height-1 m-0">21</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Money-2"></i>
                                    <p class="text-muted mt-2 mb-2">Total sales</p>
                                    <p class="text-primary text-24 line-height-1 m-0">4021</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Money-2"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Gear"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Bell"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <h5 class="card-title m-0 p-3">Sales</h5>
                            <div id="echart4" style="height: 300px"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Last Month Summary</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Item</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Portable Speaker</td>
                                                <td class="font-weight-bold text-success">+ $1200</td>
                                            </tr>
                                            <tr>
                                                <td>Portable Headphone</td>
                                                <td class="font-weight-bold">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>Speaker</td>
                                                <td class="text-danger">Out of stock</td>
                                            </tr>
                                            font-weight-bold
                                            <tr>
                                                <td>Watch</td>
                                                <td class="text-warning font-weight-bold">Low stock</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <div id="echart5" style="height: 200px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Top Authors</div>
                            <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3">
                                <img class="avatar-md rounded mr-3" src="{{asset('assets/images/faces/2.jpg')}}" alt="">
                                <div class="flex-grow-1">
                                    <h6 class="m-0">David Hopkins</h6>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3">
                                <img class="avatar-md rounded mr-3" src="{{asset('assets/images/faces/3.jpg')}}" alt="">
                                <div class="flex-grow-1">
                                    <h6 class="m-0">James Mitchell</h6>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3">
                                <img class="avatar-md rounded mr-3" src="{{asset('assets/images/faces/4.jpg')}}" alt="">
                                <div class="flex-grow-1">
                                    <h6 class="m-0">Jessica Mitchell</h6>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <!-- end of row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="card o-hidden mb-4">
                        <div class="card-header">
                            <h3 class="w-50 float-left card-title m-0">New Users</h3>
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

                                <table id="user_table" class=" table table-bordered text-center">
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
                            <h3 class="w-50 float-left card-title m-0">Total Sales</h3>
                            <div class="dropdown dropleft text-right w-50 float-right">
                                           <button class="btn bg-gray-100" type="button" id="dropdownMenuButton_table_1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table_1">
                                    <a class="dropdown-item" href="#">Add new user</a>
                                    <a class="dropdown-item" href="#">View All users</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table id="sales_table" class="table  text-center">
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
     <script src="{{asset('assets/js/es5/dashboard.v2.script.js')}}"></script>

@endsection

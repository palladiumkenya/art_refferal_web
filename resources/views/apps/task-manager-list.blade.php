@extends('layouts.master')
@section('page-css')

@endsection

@section('main-content')
    <div class="breadcrumb">
                <h1>Task Manager</h1>
                <ul>
                    <li><a href="">Apps</a></li>
                    <li>Task Manager</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div id="task-manager-list">
                <!-- content area -->
                <div class="content">
                    <!-- task manager table -->
                    <div class="card" id="card">
                        <div class="card-header bg-transparent ul-task-manager__header-inline">
                            <h6 class="card-title task-title">Task Manager</h6>
                            <div class="headder-elements">
                                <div class="list-icons">
                                    <a href="" class="ul-task-manager__list-icon" id="arrow-down"><i class="i-Arrow-Down"></i></a>
                                    <a href="" class="ul-task-manager__list-icon" id="reload"><i class="i-Repeat-21"></i></a>
                                    <a href="" class="ul-task-manager__list-icon " id="close-window"><i class="i-Close-Window"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="card-body">
                            <div class="search ul-task-manager__search-inline">
                                <nav class="navbar">
                                    <form class="form-inline">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label mr-2">Filter:</label>
                                        <input class="form-control mr-sm-2" id="filterInput" type="search" placeholder="type to filter" aria-label="Search">

                                    </form>
                                </nav>



                                <label>
                                            <span>Show:</span>
                                            <select>
                                                <option value="15">15</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="100">100</option>
                                            </select>
                                        </label>


                            </div>

                            <div class="table-responsive">
                                <table id="names" class=" table table-bordered custom-sm-width">

                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Task Description</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">Latest Update</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Assigned Users</th>
                                            <th scope="col">
                                                <a href="">
                                                    <span class="checkmarks">
                                                        <div class="checkmark_stem"></div>
                                                        <div class="checkmark_kick"></div>
                                                    </span>
                                                </a>
                                            </th>

                                        </tr>
                                    </thead>
                                    <thead class="thead-light">
                                        <tr>
                                            <th colspan="7">Last Week</th>


                                        </tr>
                                    </thead>
                                    <tbody id="names">

                                        <!----------------------------- tr1 -------------------------------------------->
                                        <tr id="names">
                                            <th scope="row" class="head-width">#1</th>
                                            <td class="collection-item">
                                                <div class="font-weight-bold"><a href="#">Update User profile page</a></div>
                                                <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                            </td>
                                            <td class="custom-align">


                                                <div class="btn-group ">
                                                    <button class="btn btn-danger custom-btn  btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         Blocker
                                                        </button>
                                                    <div class="dropdown-menu ul-task-manager__dropdown-menu">
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger mr-2"></span>High Priority</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2"></span>Normal Priority</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-success mr-2 "></span>Low Priority</a>
                                                    </div>
                                                </div>

                                            </td>

                                            <td class="custom-align">
                                                <div class="d-inline-flex align-items-center calendar align-middle">
                                                    <i class="i-Calendar-4"></i>
                                                    <span class="">12 January 2015</span>
                                                </div>
                                            </td>
                                            <td class="custom-align">
                                                <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Open</option>
                                                    <option value="2">On hold</option>
                                                    <option value="3">Resolved</option>
                                                    <option value="3">Duplicate</option>
                                                    <option value="3">Invalid</option>
                                                    <option value="3">Wontfix</option>
                                                    <option value="3">Closed</option>
                                                  </select>
                                            </td>
                                            <td class="custom-align">

                                                <img class="rounded-circle m-0 ul-task-manager__avatar " src="/assets/images/faces/1.jpg" alt="">
                                                <img class="rounded-circle m-0 ul-task-manager__avatar " src="/assets/images/faces/1.jpg" alt="">
                                                <i class="i-Add  font-custom-table"></i>
                                            </td>
                                            <td class="custom-align">
                                                <span id="menu-toggle" class="">


                                                    <div class="dropdown">

                                                            <i data-toggle="dropdown" class="i-Align-Right custom-font-down-arrow"></i>

                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="#">Check In</a>
                                                              <a class="dropdown-item" href="#">Attach Screenshot 2</a>
                                                              <a class="dropdown-item" href="#">Reassign</a>
                                                              <a class="dropdown-item" href="#">Edit Task</a>
                                                              <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                    </div>

                                                </span>
                                            </td>
                                        </tr>

                                        <!-------------------------------- end of tr1 -------------------------------------->
                                        <!-- table row 2 -->

                                        <tr>
                                            <th scope="row">#2</th>
                                            <td class="collection-item">
                                                <div class="font-weight-bold"><a href="#">Not Update User profile page</a></div>
                                                <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                            </td>
                                            <td class="custom-align">

                                                <div class="btn-group ">
                                                    <button class="btn btn-success custom-btn  btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     Low
                                                    </button>
                                                    <div class="dropdown-menu ul-task-manager__dropdown-menu">
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning  mr-2"></span>High Priority</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger  mr-2"></span>Normal Priority</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-info  mr-2 "></span>Low Priority</a>
                                                    </div>
                                                </div>

                                            </td>

                                            <td class="custom-align">
                                                <div class="d-inline-flex align-items-center calendar">
                                                    <i class="i-Calendar-4"></i>
                                                    <span>12 January 2015</span>
                                                    <!-- <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime"> -->
                                                </div>
                                            </td>
                                            <td class="custom-align">
                                                <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Open</option>
                                                    <option value="2">On hold</option>
                                                    <option value="3">Resolved</option>
                                                    <option value="3">Duplicate</option>
                                                    <option value="3">Invalid</option>
                                                    <option value="3">Wontfix</option>
                                                    <option value="3">Closed</option>
                                                  </select>
                                            </td>
                                            <td class="custom-align">

                                                <img class="rounded-circle m-0 ul-task-manager__avatar " src="/assets/images/faces/1.jpg" alt="">
                                                <img class="rounded-circle m-0 ul-task-manager__avatar " src="/assets/images/faces/1.jpg" alt="">
                                                <i class="i-Add  font-custom-table"></i>
                                            </td>
                                            <td class="custom-align">
                                                <span id="menu-toggle" class="">


                                                        <div class="dropdown">

                                                                <i data-toggle="dropdown" class="i-Align-Right custom-font-down-arrow"></i>

                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item" href="#">Check In</a>
                                                                  <a class="dropdown-item" href="#">Attach Screenshot 2</a>
                                                                  <a class="dropdown-item" href="#">Reassign</a>
                                                                  <a class="dropdown-item" href="#">Edit Task</a>
                                                                  <a class="dropdown-item" href="#">Remove</a>
                                                                </div>
                                                        </div>

                                                    </span>
                                            </td>
                                        </tr>

                                        <!-- end of table row 2 -->
                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="7">2 Days Ago</th>


                                            </tr>
                                        </thead>
                                        <!-- table row 3 -->
                                        <tr>
                                            <th scope="row">#3</th>
                                            <td class="collection-item">
                                                <div class="font-weight-bold"><a href="#">Update User profile page</a></div>
                                                <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                            </td>
                                            <td class="custom-align">
                                                <div class="btn-group ">
                                                    <button class="btn btn-warning text-white custom-btn  btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     High
                                                    </button>
                                                    <div class="dropdown-menu ul-task-manager__dropdown-menu">
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger mr-2"></span>High Priority</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-success mr-2"></span>Normal Priority</a>
                                                        <a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2 "></span>Low Priority</a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="custom-align">
                                                <div class="d-inline-flex align-items-center calendar">
                                                    <i class="i-Calendar-4"></i>
                                                    <span>12 January 2015</span>
                                                </div>
                                            </td>
                                            <td class="custom-align">
                                                <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Open</option>
                                                    <option value="2">On hold</option>
                                                    <option value="3">Resolved</option>
                                                    <option value="3">Duplicate</option>
                                                    <option value="3">Invalid</option>
                                                    <option value="3">Wontfix</option>
                                                    <option value="3">Closed</option>
                                                  </select>
                                            </td>
                                            <td class="custom-align">

                                                <img class="rounded-circle m-0 ul-task-manager__avatar " src="/assets/images/faces/1.jpg" alt="">
                                                <img class="rounded-circle m-0 ul-task-manager__avatar " src="/assets/images/faces/1.jpg" alt="">
                                                <i class="i-Add  font-custom-table"></i>
                                            </td>
                                            <td class="custom-align">
                                                <span id="menu-toggle" class="">


                                                        <div class="dropdown">

                                                                <i data-toggle="dropdown" class="i-Align-Right custom-font-down-arrow"></i>

                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item" href="#">Check In</a>
                                                                  <a class="dropdown-item" href="#">Attach Screenshot 2</a>
                                                                  <a class="dropdown-item" href="#">Reassign</a>
                                                                  <a class="dropdown-item" href="#">Edit Task</a>
                                                                  <a class="dropdown-item" href="#">Remove</a>
                                                                </div>
                                                        </div>

                                                    </span>
                                            </td>
                                        </tr>
                                        <!-- end of table row 3 -->
                                    </tbody>
                                </table>
                            </div>




                        </div>

                        <div class="card-footer text-muted">

                            <div class="row align-items-center">
                                <div class="col">
                                    <span> Showing 1 to 25 of 25 entries</span>
                                </div>
                                <div class="col">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- end of task manager table -->
                </div>
                <!-- end of content area -->

@endsection

@section('page-js')

<script src="{{asset('assets/js/es5/task-manager-list.min.js')}}"></script>



@endsection

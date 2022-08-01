@extends('layouts.master')
@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

<div class="breadcrumb">
    <h1>Contact list table</h1>
    <ul>
        <li><a href="">Apps</a></li>
        <li>Contacts</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>


 <!-- content goes here -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header  gradient-purple-indigo  0-hidden pb-80">
                               <div class="pt-4">
                                <div class="row">
                                    <h4 class="col-md-4 text-white">Contacts</h4>
                                    <input type="text" class="form-control form-control-rounded col-md-4 ml-3 mr-3"
                                        id="exampleFormControlInput1" placeholder="Search Contacts...">
                                </div>
                               </div>
                            </div>
                            <div class="card-body">
                                <div class="ul-contact-list-body">
                                    <div class="ul-contact-main-content">
                                        <div class="ul-contact-left-side">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ul-contact-list">
                                                        <div class="contact-close-mobile-icon float-right mb-2">
                                                            <i class="i-Close-Window text-15 font-weight-600"></i>
                                                        </div>
                                                        <!-- modal  -->
                                                        <button type="button"
                                                            class="btn btn-outline-secondary btn-block mb-4"
                                                            data-toggle="modal" data-target="#exampleModal">
                                                            ADD CONTACT
                                                        </button>
                                                        

                                                        <!-- end:modal  -->


                                                        <div class="list-group" id="list-tab" role="tablist">
                                                            <a class="list-group-item list-group-item-action border-0 active"
                                                                id="list-home-list" data-toggle="list" href="#list-home"
                                                                role="tab" aria-controls="home">
                                                                <i class="nav-icon i-Business-Mens"></i>
                                                                Contact List</a>
                                                            <a class="list-group-item list-group-item-action border-0"
                                                                id="list-profile-list" data-toggle="list"
                                                                href="#list-profile" role="tab" aria-controls="profile">
                                                                <i class="nav-icon i-Conference"></i>
                                                                Conected</a>
                                                            <a class="list-group-item list-group-item-action border-0"
                                                                id="list-settings-list" data-toggle="list"
                                                                href="#list-settings" role="tab"
                                                                aria-controls="settings">
                                                                <i class="nav-icon i-Pen-2"></i>
                                                                Settings</a>

                                                            <label for=""
                                                                class="text-muted font-weight-600 py-8">MEMBERS</label>

                                                            <a class="list-group-item list-group-item-action border-0 "
                                                                id="list-home-list" data-toggle="list" href="#list-home"
                                                                role="tab" aria-controls="home">
                                                                <i class="nav-icon i-Arrow-Next"></i>
                                                                Contact List</a>
                                                            <a class="list-group-item list-group-item-action border-0"
                                                                id="list-profile-list" data-toggle="list"
                                                                href="#list-profile" role="tab" aria-controls="profile">
                                                                <i class="nav-icon i-Arrow-Next"></i>
                                                                Conected</a>
                                                            <a class="list-group-item list-group-item-action border-0"
                                                                id="list-settings-list" data-toggle="list"
                                                                href="#list-settings" role="tab"
                                                                aria-controls="settings">
                                                                <i class="nav-icon i-Arrow-Next"></i>
                                                                Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            New Contact</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form>
                                                                            <div class="form-group">

                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name....">
                                                                            </div>
                                                                            <div class="form-group">

                                                                                <input type="email" class="form-control"
                                                                                    id="exampleInputEmail1"
                                                                                    aria-describedby="emailHelp"
                                                                                    placeholder="Enter email....">

                                                                            </div>

                                                                            <div class="form-group">

                                                                                <input type="text" class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="phone....">
                                                                            </div>
                                                                            <div class="form-group">

                                                                                <textarea class="form-control"
                                                                                    id="exampleFormControlTextarea1"
                                                                                    rows="3"
                                                                                    placeholder="notes...."></textarea>
                                                                            </div>


                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                        <div class="ul-contact-content">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-left">
                                                        <i class="nav-icon i-Align-Justify-All text-25 ul-contact-mobile-icon"></i>
                                                    </div>
                                                    <div class="tab-content ul-contact-list-table--label" id="nav-tabContent">

                                                        <!-- all-contact  -->
                                                        <div class="tab-pane fade show active" id="list-home"
                                                            role="tabpanel" aria-labelledby="list-home-list">
                                                            
                                                                    <div class=" text-left ">
                                                                            <div class="table-responsive">
                                                                                <table id="contact_list_table" class="display table  table-borderless ul-contact-list-table" style="width:100%">
                                                                                    <thead>
                                                                                        <tr class="border-bottom">
                                                                                            <th>Name</th>
                                                                                            <th>Email</th>
                                                                                            <th>Phone</th>
                                                                                            <th>Action</th>
                                                                                            
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">
                                                                                                Carl Clarkson
                                                                                            </td>
                                                                                            <td>carl_657@gmail.com</td>
                                                                                            <td>+88 0172-323-233</td>
                                                                                            <td>
                                                                                                <button type="button" class="btn bg-transparent _r_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                    <span class="_dot _r_block-dot bg-dark"></span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a>
                                                                                                   
                                                                                                </div>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                        
                                                                                    </tbody>
                                                                                    
                                                                                </table>
                                                                            </div>
                                                
                                                                        </div>
                                                                    
                                                                </div>

                                                        
                                                        <!-- <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                                            aria-labelledby="list-profile-list">...</div>
                                                        <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                                            aria-labelledby="list-messages-list">...</div>
                                                        <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                                            aria-labelledby="list-settings-list">...</div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection

@section('page-js')


<script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
<!-- page script -->
<script src="{{ asset('assets/js/contact-list-table.js') }}"></script>
<script src="{{ asset('assets/js/datatables.script.js') }}"></script>




<script>
// $('#ul-contact-list').DataTable();
</script>
@endsection
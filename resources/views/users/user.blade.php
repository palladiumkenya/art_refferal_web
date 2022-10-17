@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
@include('sweetalert::alert')
<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">
            <h4 class="card-title mb-3">{{count($user)}} Users</h4>

            <div style="margin-bottom:10px; ">
                <a type="button" href="{{route('adduserform')}}" class="btn btn-primary btn-md pull-right">Add User</a>
            </div>
            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($user) > 0)
                        @foreach($user as $user)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ ucwords($user->firstname)}} {{ ucwords($user->middlename)}} {{ ucwords($user->lastname)}}</td>
                            <td> {{$user->phone}}</td>
                            <td> {{$user->role}}</td>
                            <td>
                                @can('user-edit')
                                <button onclick="editUser({{$user}});" data-toggle="modal" data-target="#editUser" type="button" class="btn btn-primary btn-sm">Edit</button>
                                @endcan
                                <button onclick="deleteUser({{$user->id}});" type="button" class="btn btn-danger btn-sm">Disable</button>
                                <button onclick="resetUser({{$user->id}});" type="button" class="btn btn-success btn-sm">Reset</button>

                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>
<!-- end of col -->
<div id="editUser" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <div class="card-title mb-3">Edit User</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form role="form" method="post" action="{{route('edituser')}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <input type="hidden" name="id" id="id">
                                    <input type="hidden" name="person_id" id="person_id">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstname">First name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="middlename">Middle name</label>
                                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter last name">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="lastname">Last name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" id="phone" name="phone" placeholder="Enter phone">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="role">Role</label>
                                        <select class="form-control" data-width="100%" id="role" name="role">
                                            <option value="">Please select </option>
                                            @if (count($roles) > 0)
                                            @foreach($roles as $role)
                                            <option value="{{$role->id }}">{{ ucwords($role->name) }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @error('role')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3" id="agency_div">
                                        <label for="agency">Agency</label>
                                        <select class="form-control" data-width="100%" id="agency" name="agency">
                                            <option value="">Please select </option>
                                            @if (count($agencies) > 0)
                                            @foreach($agencies as $agency)
                                            <option value="{{$agency->agency_id }}">{{ ucwords($agency->agency_name) }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @error('agency')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3" id="partner_div">
                                        <label for="partner">Partner</label>
                                        <select class="form-control" data-width="100%" id="partner" name="partner">
                                            <option value="">Please select </option>
                                            @if (count($partners) > 0)
                                            @foreach($partners as $partner)
                                            <option value="{{$partner->partner_id }}">{{ ucwords($partner->partner_name) }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @error('partner')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3" id="mflcode_div">
                                        <label for="mflcode">Facility</label>
                                        <select class="form-control" data-width="100%" id="mflcode" name="mflcode">
                                            <option value="">Please select </option>
                                            @if (count($facilities) > 0)
                                            @foreach($facilities as $facility)
                                            <option value="{{$facility->code }}" {{ $facility->code == old('mflcode',$user->code) ? 'selected' : ''}}>{{ ucwords($facility->name) }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>

</div>

<div id="DeleteModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Disable User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Disable this user?.</p>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                <button id="delete" type="button" class="btn btn-danger" data-person_id="">Disable</button>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="ResetModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reset User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to reset this user's password?.</p>
            </div>
            <form id="reset_form">
                {{ csrf_field() }}
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="reset" type="submit" class="btn btn-primary">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection

@section('page-js')

<script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables.script.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    function editUser(user) {

        if (user.role_id == "1") {
            $('#partner_div').hide();
            $('#mflcode_div').hide();
            $('#agency_div').hide();
        } else if (user.role_id == "2") {
            $('#partner_div').show();
            $('#mflcode_div').hide();
            $('#agency_div').hide();
        } else if (user.role_id == "3") {
            $('#partner_div').hide();
            $('#mflcode_div').show();
            $('#agency_div').hide();
        } else if (user.role_id == "4") {
            $('#partner_div').hide();
            $('#mflcode_div').hide();
            $('#agency_div').show();
        } else {
            $('#partner_div').hide();
            $('#mflcode_div').hide();
            $('#agency_div').hide();
        }

        $('#phone').val(user.phone);
        $('#firstname').val(user.firstname);
        $('#lastname').val(user.lastname);
        $('#middlename').val(user.middlename);
        $('#mflcode').val(user.code);
        $('#email').val(user.email);
        $('#id').val(user.id);
        $('#person_id').val(user.person_id);
        $('#role').val(user.role_id);
        $('#partner').val(user.partner_id);
        $('#mflcode').val(user.mfl_code);
        $('#agency').val(user.agency_id);
    }

    function resetUser(id) {
        $('#ResetModal').modal('show');
        console.log(id)
        $(document).off("click", "#reset").on("click", "#reset", function(event) {
            $.ajax({
                type: "POST",
                url: '/reset/user',
                data: {
                    "id": id,
                    "_token": "{{ csrf_token()}}"
                },
                dataType: "json",
                success: function(data) {
                    toastr.success(data.details);
                    $('#ResetModal').modal('hide');
                }
            })
        });
    }
    var loginForm = $("#reset_form");

    loginForm.submit(function(e) {
        $('#ResetModal').modal('hide');
        e.preventDefault();
        var thisForm = $(this);
        var endPoint = thisForm.attr("action") || window.location.href;
        var method = thisForm.attr("method");
        var formData = thisForm.serialize();

        console.log(endPoint);
        console.log(method);
        Swal.fire({
            title: "User has been reset successfull",
            showConfirmButton: true,
            allowOutsideClick: true
        });

        this.submit();

    });

    function deleteUser(id) {
        $('#DeleteModal').modal('show');
        console.log(id);
        $(document).off("click", "#delete").on("click", "#delete", function(event) {
            $.ajax({
                type: "POST",
                url: '/delete/user',
                data: {
                    "id": id,
                    "_token": "{{ csrf_token()}}"
                },
                dataType: "json",
                success: function(data) {
                    $('#DeleteModal').modal('hide');
                }
            })
        });
    }

    $("#role").change(function() {
        if ($(this).val() == "1") {
            $('#partner_div').hide();
            $('#mflcode_div').hide();
            $('#agency_div').hide();
        } else if ($(this).val() == "2") {
            $('#partner_div').show();
            $('#mflcode_div').hide();
            $('#agency_div').hide();
        } else if ($(this).val() == "3") {
            $('#partner_div').hide();
            $('#mflcode_div').show();
            $('#agency_div').hide();
        } else if ($(this).val() == "4") {
            $('#partner_div').hide();
            $('#mflcode_div').hide();
            $('#agency_div').show();
        } else {
            $('#partner_div').hide();
            $('#mflcode_div').hide();
            $('#agency_div').hide();
        }
    });
    $("#role").trigger("change");
</script>

@endsection
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
                            <th>Facility</th>
                            <th>MFL Code</th>
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
                            <td> {{$user->facility}}</td>
                            <td> {{$user->code}}</td>
                            <td>
                                <button onclick="editUser({{$user}});" data-toggle="modal" data-target="#editUser" type="button" class="btn btn-primary btn-sm">Edit</button>
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
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                <button id="reset" type="button" class="btn btn-success" data-person_id="">Reset</button>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



@endsection

@section('page-js')

<script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables.script.js')}}"></script>
<script type="text/javascript">
    function editUser(user) {
        $('#phone').val(user.phone);
        $('#firstname').val(user.firstname);
        $('#lastname').val(user.lastname);
        $('#middlename').val(user.middlename);
        $('#mflcode').val(user.code);
        $('#email').val(user.email);
        $('#id').val(user.id);
        $('#person_id').val(user.person_id);
    }

    function resetUser(uid) {
        $('#ResetModal').modal('show');
        $(document).off("click", "#reset").on("click", "#reset", function(event) {
            $.ajax({
                type: "POST",
                url: '/reset/user',
                data: {
                    "uid": uid,
                    "_token": "{{ csrf_token()}}"
                },
                dataType: "json",
                success: function(data) {
                    $('#ResetModal').modal('hide');
                }
            })
        });
    }

    function deleteUser(uid) {
        $('#DeleteModal').modal('show');
        console.log(uid);
        $(document).off("click", "#delete").on("click", "#delete", function(event) {
            $.ajax({
                type: "POST",
                url: '/delete/user',
                data: {
                    "uid": uid,
                    "_token": "{{ csrf_token()}}"
                },
                dataType: "json",
                success: function(data) {
                    $('#DeleteModal').modal('hide');
                }
            })
        });
    }
</script>

@endsection
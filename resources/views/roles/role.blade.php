@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
@include('sweetalert::alert')
<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">
            <h4 class="card-title mb-3"> Roles</h4>

            <div style="margin-bottom:10px; ">
                <a type="button" href="{{route('addroleform')}}" class="btn btn-primary btn-md pull-right">Add Role</a>
            </div>
            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>User Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($roles) > 0)
                        @foreach($roles as $role)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{$role->name}}</td>
                            <td> {{$user->user_level}}</td>
                            <td>
                                <button onclick="editUser({{$role}});" data-toggle="modal" data-target="#editUser" type="button" class="btn btn-primary btn-sm">Edit</button>
                                <button onclick="deleteUser({{$role->id}});" type="button" class="btn btn-danger btn-sm">Disable</button>
                                <button onclick="resetUser({{$role->id}});" type="button" class="btn btn-success btn-sm">Reset</button>

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

@endsection

@section('page-js')

<script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables.script.js')}}"></script>
<script type="text/javascript">

</script>

@endsection
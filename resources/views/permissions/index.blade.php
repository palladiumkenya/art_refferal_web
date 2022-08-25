@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
@include('sweetalert::alert')
<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">
            <div class="card-header">Permissions
                @can('role-create')
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('permissions.create') }}">New Permission</a>
                </span>
                @endcan
            </div>
            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($permissions) > 0)
                        @foreach($permissions as $permission)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{$permission->name}}</td>
                            <td>
                                @can('role-edit')
                                <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                                @endcan
                                @can('role-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                @endcan
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
    function editRole(permission) {
        $('#name').val(permission.name);
        $('#id').val(permission.id);
    }
</script>

@endsection
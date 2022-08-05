@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">
            <h4 class="card-title mb-3">{{count($patients)}} Patients</h4>

            <div style="margin-bottom:10px; ">
                <a type="button" href="{{route('patients.create')}}" class="btn btn-primary btn-md pull-right">Add Patient</a>
                <a type="button" href="{{route('patients.import')}}" class="btn btn-primary btn-md pull-right">Upload List</a>
            </div>
            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>CCC No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Facility</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($patients) > 0)
                        @foreach($patients as $patient)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{$patient->ccc_no}}</td>
                            <td> {{ ucwords($patient->firstname)}} {{ ucwords($patient->middlename)}} {{ ucwords($patient->lastname)}}</td>
                            <td> {{$patient->msidn}}</td>
                            <td> {{$patient->facility}}</td>
                            <td>
                                <button onclick="editUser({{$patient->person_id}});" data-toggle="modal" data-target="#editUser" type="button" class="btn btn-primary btn-sm">Edit</button>
                                <button onclick="deleteUser({{$patient->person_id}});" type="button" class="btn btn-danger btn-sm">Delete</button>
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
@endsection

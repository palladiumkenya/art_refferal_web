@extends('layouts.master')
@section('before-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">
@endsection

@section('main-content')
{{-- Alert Messages --}}
        @include('common.alert')
@include('sweetalert::alert')
<div class="breadcrumb">
    <h1>Patients</h1>
    <ul>
        <li><a href="/home">Home</a></li>
        <li>Patients</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">
            <h4 class="card-title mb-3">{{count($patients)}} Patients</h4>

            <div style="margin-bottom:10px; ">
                <a type="button" href="{{route('patients.create')}}" class="btn btn-primary btn-md pull-right">Add Patient</a>
                <a type="button" href="{{route('patients.import')}}" class="btn btn-primary btn-md pull-right">Upload Patients List</a>
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
                                <button onclick="editPatient({{json_encode($patient)}});" data-toggle="modal" data-target="#editPatient" type="button" class="btn btn-primary btn-sm">Edit</button>
                                <button onclick="deletePatient({{$patient->person_id}});" type="button" class="btn btn-danger btn-sm">Delete</button>
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

<div id="editPatient" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <div class="card-title mb-3">Edit Patient</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form role="form" method="post" action="{{ route('patients.update') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <input type="hidden" name="id" id="id">
                                    <input type="hidden" name="person_id" id="person_id">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstname">First name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name" value="{{ old('firstname') }}">
                                        @error('firstname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="middlename">Middle name</label>
                                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter last name" value="{{ old('middlename') }}">
                                        @error('middlename')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="lastname">Last name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" value="{{ old('lastname') }}">
                                        @error('lastname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" id="phone" name="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input id="date_of_birth" class="form-control" placeholder="dd-mm-yyyy" name="date_of_birth" value="{{ old('date_of_birth') }}" >
                                        @error('date_of_birth')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="ccc_no">CCC No</label>
                                        <input class="form-control" id="ccc_no" name="ccc_no" placeholder="Enter patient CCC No." value="{{ old('ccc_no') }}" >
                                        @error('ccc_no')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="upi">UPI</label>
                                        <input class="form-control" id="upi" name="upi" placeholder="Enter patient UPI." value="{{ old('upi') }}" >
                                        @error('upi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="art_start_date">ART Start Date</label>
                                        <input id="art_start_date" class="form-control" placeholder="dd-mm-yyyy" name="art_start_date" value="{{ old('art_start_date') }}" >
                                        @error('art_start_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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
<!-- end of edit modal -->

<div id="DeleteModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this patient?</p>
                <button id="delete" type="button" class="btn btn-danger" data-person_id="">Delete</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
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
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>

<script type="text/javascript">

    $(document).ready(function(){
        $('#date_of_birth, #art_start_date').pickadate();
    });

    function editPatient(provider) {
        $('#firstname').val(provider.firstname);
        $('#middlename').val(provider.middlename);
        $('#lastname').val(provider.lastname);
        $('#phone').val(provider.msidn);
        $('#id').val(provider.patient_id);
        $('#person_id').val(provider.person_id);
        $('#date_of_birth').val(provider.date_of_birth);
        $('#ccc_no').val(provider.ccc_no);
        $('#upi').val(provider.upi);
        $('#art_start_date').val(provider.art_start_date);
    }

    function deletePatient(person_id) {
        $('#DeleteModal').modal('show');
        console.log(person_id);
        $(document).off("click", "#delete").on("click", "#delete", function(event) {
            $.post("/patients/destroy",
            {
                "person_id": person_id,
                "_token": "{{ csrf_token()}}"
            },
            function(data){
                $('#DeleteModal').modal('hide');
                location.reload();
            });
        });
    }
</script>
@endsection

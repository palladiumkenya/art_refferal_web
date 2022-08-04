@extends('layouts.master')
@section('before-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">

@endsection

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title mb-3">Add Patient</div>
                <form role="form" method="post" action="{{route('patients.store')}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="firstName1">First name</label>
                            <input type="text" class="form-control" id="firstName1" name="firstname" placeholder="Enter patient first name" value="{{ old('firstname') }}" >
                            @error('firstname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="firstName1">Middle name</label>
                            <input type="text" class="form-control" id="middleName1" name="middlename" placeholder="Enter patient middle name" value="{{ old('middlename') }}" >
                            @error('middlename')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="lastName1">Last name</label>
                            <input type="text" class="form-control" id="lastName1" name="lastname" placeholder="Enter patient last name" value="{{ old('lastname') }}" >
                            @error('lastname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" name="phone" placeholder="Enter phone" value="{{ old('phone') }}" >
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
                            <label for="facilityname">Facility</label>
                            <select class="form-control" data-width="100%" id="facility" name="facility">
                                <option value="">Please select </option>
                                @if (count($facilities) > 0)
                                @foreach($facilities as $facility)
                                <option value="{{$facility->code }}">{{ ucwords($facility->name) }}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('facility')
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

                        <div class="col-md-6 form-group mb-3">
                            <label for="viral_load">Viral Load</label>
                            <input class="form-control" id="viral_load" name="viral_load" placeholder="Enter current VL." value="{{ old('viral_load') }}" >
                            @error('viral_load')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="regimen">Regimen</label>
                            <input class="form-control" id="regimen" name="regimen" placeholder="Enter current regimen" value="{{ old('regimen') }}" >
                            @error('regimen')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="tca">TCA</label>
                            <input id="tca" class="form-control" placeholder="dd-mm-yyyy" name="tca" value="{{ old('tca') }}" >
                            @error('tca')
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

@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>


@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>


@endsection

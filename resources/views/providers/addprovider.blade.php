@extends('layouts.master')
@section('before-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">

@endsection

@section('main-content')
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<div class="breadcrumb">
<h1>Add Provider Record</h1>
    <ul>
        <li><a href="{{route('providers.list')}}">&lt;&lt;Back</a></li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>
            {{-- end of breadcrumb --}}
<form role="form" method="post" action="{{route('providers.store')}}">
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title mb-3">Provider's Bio</div>
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
                            <label for="facilityname">Workstation</label>
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

                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </div>
        </div>
    </div>

</div>
</form>

@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>


@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>


@endsection

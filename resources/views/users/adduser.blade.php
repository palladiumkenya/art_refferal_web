@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
@include('sweetalert::alert')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title mb-3">Add User</div>
                <form role="form" method="post" action="{{route('adduser')}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name" value="{{ old('firstname') }}">
                            @error('firstname')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="middlename">Middle name</label>
                            <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter middle name" value="{{ old('middlename') }}">
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
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="mflcode">Facility</label>
                            <select class="form-control" data-width="100%" id="mflcode" name="mflcode">
                                <option value="">Please select </option>
                                @if (count($facilities) > 0)
                                @foreach($facilities as $facility)
                                <option value="{{$facility->code }}">{{ ucwords($facility->name) }}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('mflcode')
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



@endsection

@section('bottom-js')
<script type="text/javascript">

</script>


@endsection
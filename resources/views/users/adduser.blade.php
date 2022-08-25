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
    $("#role").change(function() {
        if ($(this).val() == "") {
            $('#partner_div').hide();
            $('#mflcode_div').hide();
            $('#agency_div').hide();
        } else if ($(this).val() == "1") {
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
        }
    });
    $("#role").trigger("change");
</script>


@endsection
@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title mb-3">Add User</div>
                <form role="form" method="post" action="{{route('adduser')}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="firstName1">First name</label>
                            <input type="text" class="form-control" id="firstName1" name="fname" placeholder="Enter your first name">
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="lastName1">Last name</label>
                            <input type="text" class="form-control" id="lastName1" name="lname" placeholder="Enter your last name">
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" name="phone" placeholder="Enter phone">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="facilityname">Facility</label>
                            <select class="form-control" data-width="100%" id="facilityname" name="facilityname">
                                <option value="">Please select </option>
                                @if (count($facilities) > 0)
                                @foreach($facilities as $facility)
                                <option value="{{$facility->code }}">{{ ucwords($facility->name) }}</option>
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

@endsection

@section('page-js')



@endsection

@section('bottom-js')
<script type="text/javascript">

</script>


@endsection
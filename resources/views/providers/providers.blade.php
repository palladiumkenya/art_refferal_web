@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
{{-- Alert Messages --}}
        @include('common.alert')
@include('sweetalert::alert')
<div class="breadcrumb">
    <h1>Providers</h1>
    <ul>
        <li><a href="/home">Home</a></li>
        <li>Providers</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">
            <h4 class="card-title mb-3">{{count($providers)}} Providers</h4>

            <div style="margin-bottom:10px; ">
                <a type="button" href="{{route('providers.create')}}" class="btn btn-primary btn-md pull-right">Add Provider</a>
                <a type="button" href="{{route('providers.import')}}" class="btn btn-primary btn-md pull-right">Upload Providers List</a>
            </div>
            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Facility</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($providers) > 0)
                        @foreach($providers as $provider)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ ucwords($provider->firstname)}} {{ ucwords($provider->middlename)}} {{ ucwords($provider->lastname)}}</td>
                            <td> {{$provider->msisdn}}</td>
                            <td> {{$provider->facility}}</td>
                            <td>
                                <button onclick="editProvider({{ json_encode($provider) }});" data-toggle="modal" data-target="#editProvider" type="button" class="btn btn-primary btn-sm">Edit</button>
                                <button onclick="deleteProvider({{$provider->person_id}});" type="button" class="btn btn-danger btn-sm">Delete</button>
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

<div id="editProvider" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <div class="card-title mb-3">Edit Provider</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form role="form" method="post" action="{{ route('providers.update') }}">
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
                                        <label for="facility">Workstation</label>
                                        <select class="form-control" data-width="100%" id="facility" name="facility">
                                            <option value="">Please select </option>
                                            @if (count($facilities) > 0)
                                            @foreach($facilities as $facility)
                                            <option value="{{$facility->code }}" {{ $facility->code == old('facility',$provider->mfl_code) ? 'selected' : ''}}>{{ ucwords($facility->name) }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @error('facility')
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
                <h5 class="modal-title">Delete Provider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this provider?</p>
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

<script type="text/javascript">
    function editProvider(provider) {
        $('#firstname').val(provider.firstname);
        $('#lastname').val(provider.lastname);
        $('#middlename').val(provider.middlename);
        $('#facility').val(provider.mfl_code);
        $('#phone').val(provider.msisdn);
        $('#id').val(provider.id);
        $('#person_id').val(provider.person_id);
    }

    function deleteProvider(person_id) {
        $('#DeleteModal').modal('show');
        console.log(person_id);
        $(document).off("click", "#delete").on("click", "#delete", function(event) {
            $.post("/providers/destroy",
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

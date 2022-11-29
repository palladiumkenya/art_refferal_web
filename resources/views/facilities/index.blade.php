@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
@include('sweetalert::alert')
<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">
            <h4 class="card-title mb-3">{{count($facilities)}} Facilities</h4>

            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Facility Name</th>
                            <th>MFL Code</th>
                            <th>Partner</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($facilities) > 0)
                        @foreach($facilities as $facility)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ $facility->facility }} </td>
                            <td> {{$facility->code}}</td>
                            <td> {{$facility->partner_name}}</td>
                            <td>

                                
                                @can('facility-edit')
                                <button onclick="editFacility({{$facility}});" data-toggle="modal" data-target="#editFacility" type="button" class="btn btn-primary btn-sm">Edit</button>
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

<div id="editFacility" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <div class="card-title mb-3">Map Facility</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form role="form" method="post" action="{{route('facilities.update')}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <input type="hidden" name="id" id="id">

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="facility">Facility Name </label>
                                        <input type="text" class="form-control" id="facility" name="facility" disabled placeholder="Facility">
                                    </div>

                                    <div class="col-md-6 form-group mb-3" id="mflcode_div">
                                        <label for="partner">Partner</label>
                                        <select class="form-control" data-width="100%" id="partner" name="partner">
                                            <option value="">Please select </option>
                                            @if (count($partners) > 0)
                                            @foreach($partners as $partner)
                                            <option value="{{$partner->partner_id }}">{{ ucwords($partner->partner_name) }}</option>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>

</div>
@endsection

@section('page-js')

<script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables.script.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">

function editFacility(facility) {

$('#facility').val(facility.facility);
$('#id').val(facility.code);
$('#partner').val(facility.partner_id);

}
</script>

@endsection
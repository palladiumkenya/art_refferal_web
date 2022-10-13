@extends('layouts.master')
@section('before-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">
@endsection
@section('main-content')
<div class="breadcrumb">
                <h1>Patient Details</h1>
                <ul>
                    <li><a href="{{route('patients.search')}}">Search</a></li>
                    <li>View Details</li>
                </ul>

</div>

<div class="separator-breadcrumb border-top"></div>
            {{-- end of breadcrumb --}}

<div class="card text-left">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card text-left">
                    <div class="card-body">
                    @foreach($patientDetails as $patient)
                        <div class="ul-contact-detail__profile">
                            <input type="hidden" name="patient_id_h" id="patient_id_h" value="{{ $patient->patient_id }}">
                            <input type="hidden" name="ccc_no_h" id="ccc_no_h" value="{{ $patient->ccc_no }}">
                            <div class="ul-contact-detail__inner-profile">
                                <h4 class="heading">Full Name</h4>
                                <span class="tetx-muted">{{ ucwords($patient->full_name)}}</span>
                            </div>
                            <div class="ul-contact-detail__inner-profile">
                                    <h4 class="heading">CCC No.</h4>
                                    <span class="tetx-muted">{{ $patient->ccc_no}}</span>
                            </div>
                            <div class="ul-contact-detail__inner-profile">
                                    <h4 class="heading">Date of Birth</h4>
                                    <span class="tetx-muted">{{ date("d-M-Y",strtotime($patient->date_of_birth))}}</span>
                            </div>
                            <div class="ul-contact-detail__inner-profile">
                                    <h4 class="heading">Phone No.</h4>
                                    <span class="tetx-muted">{{ $patient->msidn}}</span>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-basic-tab" data-toggle="tab" href="#homeBasic" role="tab" aria-controls="homeBasic" aria-selected="true">Observations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-basic-tab" data-toggle="tab" href="#profileBasic" role="tab" aria-controls="profileBasic" aria-selected="false">Referrals</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="homeBasic" role="tabpanel" aria-labelledby="home-basic-tab">
                            <a type="button" href="#" data-toggle="modal" data-target="#addObservation" class="btn btn-primary btn-md pull-right" name="add_observation" id="add_observation">Add Observation</a>

                            <div style="margin-top:20px;">
                            @if (count($observations) > 0)
                                <div class="table-responsive">
                                    <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Current Viral Load</th>
                                            <th>Current Regimen</th>
                                            <th>TCA</th>
                                            <th>Recorded At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($observations as $observation)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{ $observation->viral_load }}</td>
                                        <td> {{ $observation->regimen }}</td>
                                        <td> {{ $observation->tca }}</td>
                                        <td> {{ $observation->facility }}</td>
                                        <td>
                                            <button onclick="editObservation({{json_encode($observation)}});" data-toggle="modal" data-target="#editObservation" type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button onclick="deletePatient({{$observation->id}});" type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>
                                   @else
                                    <p>No observations found.</p>
                                   @endif
                                </div>

                                </div>
                                <div class="tab-pane fade" id="profileBasic" role="tabpanel" aria-labelledby="profile-basic-tab">
                                    @if(Auth::user()->mfl_code != '')
                                         <a type="button" href="#" data-toggle="modal" data-target="#addReferral" class="btn btn-primary btn-md pull-right" name="add_referral" id="add_referral">Initiate Referral</a>
                                    @endif

                                    <div style="margin-top:20px;">
                                    @if (count($refferals) > 0)
                                    <div class="table-responsive">
                                    <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Referral Date</th>
                                            <th>Type</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($refferals as $refferal)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{ date('d-M-Y',strtotime($refferal->initiation_date)) }}</td>
                                        <td> {{ $refferal->referral_type }}</td>
                                        <td> {{ $refferal->from_facility }}</td>
                                        <td> {{ $refferal->to_facility }}</td>
                                        <td>
                                            <button onclick="editReferral({{json_encode($refferal)}});" data-toggle="modal" data-target="#editReferral" type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button onclick="deletePatient({{$refferal->refferal_id}});" type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>
                                   @else
                                    <p>No referrals found.</p>
                                   @endif
                                </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- end of col -->

            <div id="addObservation" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="card-title mb-3">Add Observation</div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <form role="form" method="post" action="{{ route('patients.observation.store') }}">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <input type="hidden" name="patient_id" id="patient_id">
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="viral_load_new">Viral Load</label>
                                                        <input type="text" class="form-control" id="viral_load_new" name="viral_load_new" placeholder="Enter viral load" value="{{ old('viral_load_new') }}">
                                                        @error('viral_load_new')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="regimen_new">Regimen</label>
                                                        <input type="text" class="form-control" id="regimen_new" name="regimen_new" placeholder="Enter regimen" value="{{ old('regimen_new') }}">
                                                        @error('regimen_new')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="tca_new">TCA</label>
                                                        <input id="tca_new" class="form-control" placeholder="dd-mm-yyyy" name="tca_new" value="{{ old('tca_new') }}" >
                                                        @error('tca_new')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="observation_mflcode_new">Facility</label>
                                                        <select class="form-control" data-width="100%" id="observation_mflcode_new" name="observation_mflcode_new">
                                                            <option value="">Please select </option>
                                                            @if (count($facilities) > 0)
                                                            @foreach($facilities as $facility)
                                                            <option value="{{$facility->mfl_code }}" {{ $facility->mfl_code == old('mflcode') ? 'selected' : ''}}>{{ ucwords($facility->facility_name) }}</option>
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
             <!-- end of add observation dialog -->

            <div id="editObservation" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="card-title mb-3">Edit Observation</div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <form role="form" method="post" action="{{ route('patients.observation.update') }}">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <input type="hidden" name="observation_id" id="observation_id">
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="viral_load">Viral Load</label>
                                                        <input type="text" class="form-control" id="viral_load" name="viral_load" placeholder="Enter viral load" value="{{ old('viral_load') }}">
                                                        @error('viral_load')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="regimen">Regimen</label>
                                                        <input type="text" class="form-control" id="regimen" name="regimen" placeholder="Enter regimen" value="{{ old('regimen') }}">
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

                                                    <div class="col-md-6 form-group mb-3" id="mflcode_div">
                                                        <label for="observation_mflcode">Facility</label>
                                                        <select class="form-control" data-width="100%" id="observation_mflcode" name="observation_mflcode">
                                                            <option value="">Please select </option>
                                                            @if (count($facilities) > 0)
                                                            @foreach($facilities as $facility)
                                                            <option value="{{$facility->mfl_code }}" {{ $facility->mfl_code == old('mflcode') ? 'selected' : ''}}>{{ ucwords($facility->facility_name) }}</option>
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
             <!-- end of edit observation dialog -->



             <div id="addReferral" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="card-title mb-3">Initiate Referral</div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <form role="form" method="post" action="{{ route('patients.referral.store') }}">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <input type="hidden" name="ccc_no" id="ccc_no">
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="referral_type">Referral Type</label>
                                                        <select class="form-control" data-width="100%" id="referral_type" name="referral_type">
                                                            <option value="">Please select </option>
                                                            @if (count($referral_types) > 0)
                                                            @foreach($referral_types as $referral_type)
                                                            <option value="{{$referral_type->id }}" {{ $referral_type->id == old('referral_type') ? 'selected' : ''}}>{{ ucwords($referral_type->referral_type) }}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="reffered_mfl_code">Referral Facility</label>
                                                        <select class="form-control" data-width="100%" id="reffered_mfl_code" name="reffered_mfl_code">
                                                            <option value="">Please select </option>
                                                            @if (count($mfl_facilities) > 0)
                                                            @foreach($mfl_facilities as $facility)
                                                            <option value="{{$facility->code }}" {{ $facility->code == old('reffered_mfl_code') ? 'selected' : ''}}>{{ ucwords($facility->name) }}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="tca_referral">TCA</label>
                                                        <input id="tca_referral" class="form-control" placeholder="dd-mm-yyyy" name="tca_referral" value="{{ old('tca_referral') }}" >
                                                        @error('tca_referral')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="regimen_referral">Regimen</label>
                                                        <select class="form-control" data-width="100%" id="regimen_referral" name="regimen_referral">
                                                            <option value="">Please select </option>
                                                            @if (count($regimens) > 0)
                                                            @foreach($regimens as $regimen)
                                                            <option value="{{$regimen->regimen_id }}" {{ $regimen->regimen_id == old('regimen_referral') ? 'selected' : ''}}>{{ ucwords($regimen->regimen_desc) }}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="viral_load_new">Prescription No. of Days</label>
                                                        <input type="text" class="form-control" id="drug_days_new" name="drug_days_new" placeholder="Enter prescription no. of days" value="{{ old('drug_days_new') }}">
                                                        @error('drug_days_new')
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
             <!-- end of add referral dialog -->



    </div>
    </div>

@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#add_observation").on('click', function() {
            $('#patient_id').val($('#patient_id_h').val());
        });

        $("#add_referral").on('click', function() {
            $('#ccc_no').val($('#ccc_no_h').val());
        });

        $('#tca, #tca_new, #tca_referral').pickadate({
            format: 'dddd, dd mmm, yyyy',
            formatSubmit: 'yyyy-mm-dd',
            hiddenName: true
        });
    });

    function editObservation(observation) {
        var picker = $('#tca').pickadate('picker');
        picker.set('select', observation.tca, { format: 'yyyy-mm-dd' });

        $('#observation_id').val(observation.id);
        $('#viral_load').val(observation.viral_load);
        $('#regimen').val(observation.regimen);
        $('#observation_mflcode').val(observation.mfl_code);
    }
</script>
@endsection

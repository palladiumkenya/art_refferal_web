@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
@include('sweetalert::alert')
<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">
            <div class="card-header">Referral List

            </div>
            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Patient CCC No</th>
                            <th>Referral Type</th>
                            <th>Referred From</th>
                            <th>Referred To</th>
                            <th>Date Referred</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($referral_details) > 0)
                        @foreach($referral_details as $referral)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{$referral->ccc_no}}</td>
                            <td> {{$referral->referral_type}}</td>
                            <td> {{$referral->reffered_mfl_code}}</td>
                            <td> {{$referral->initiator_mfl_code}}</td>
                            <td> {{$referral->initiation_date}}</td>

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
<script type="text/javascript">

</script>

@endsection
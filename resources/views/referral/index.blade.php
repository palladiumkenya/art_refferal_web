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
                            @if ($referral->referral_type == 'Silent')
                            <td></td>
                            @else
                            <td> {{$referral->facility . ' - ' . $referral->facility_mfl}}</td>
                            @endif
                            <td> {{$referral->initiator_facility . ' - ' . $referral->reffered_mfl_code}}</td>
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
<script type="text/javascript">
    $('#multicolumn_ordering_table').DataTable({
        columnDefs: [{
            targets: [0],
            orderData: [0, 1]
        }, {
            targets: [1],
            orderData: [1, 0]
        }, {
            targets: [4],
            orderData: [4, 0]
        }],
        "paging": true,
        "responsive": true,
        "ordering": true,
        "info": true,
        dom: 'Bfrtip',
        buttons: [{
                extend: 'copy',
                title: 'Referral List',
                filename: 'Referral List'
            },
            {
                extend: 'csv',
                title: 'Referral List',
                filename: 'Referral List'
            },
            {
                extend: 'excel',
                title: 'Referral List',
                filename: 'Referral List'
            },
            {
                extend: 'pdf',
                title: 'Referral List',
                filename: 'Referral List'
            },
            {
                extend: 'print',
                title: 'Referral List',
                filename: 'Referral List'
            }
        ]
    });
</script>

@endsection
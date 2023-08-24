@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
    <ul>
        <li><a href="">ART Refferal</a></li>
        <li>Dashboard</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>
@if (Auth::user()->role_id == '1')
<div class="col-md-12">
    <form role="form" method="post" action="#" id="dataFilter">
        {{ csrf_field() }}
        <div class="row">
        <div class="col col-3 col-md-3">
                <div class="form-group">
                    <select class="form-control select2" id="partners" name="partner" style="width:100%;">
                        <option></option>
                        @foreach ($partners as $partner)
                        <option value="{{ $partner->partner_id }}">{{ ucwords($partner->partner_name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col col-3 col-md-3">
                <div class="form-group">
                    <select id="counties" name="county"- style="width:100%;">
                        <option></option>
                        @foreach ($counties as $county)
                        <option value="{{ $county->id }}">{{ ucwords($county->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col col-3 col-md-3">
                <div class="form-group">
                    <select id="facilities" name="facility" style="width:100%;">
                        <option></option>
                        @foreach ($facilities as $facility)
                        <option value="{{ $facility->code }}">{{ ucwords($facility->name.' - '.$facility->code) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col col-3 col-md-3">

                <div class="form-group">
                    <input class="form-control" id="daterange" type="text" name="daterange" style="width:100%;" />
                </div>
                <div class="form-group">
                    <label for="daterange" class="col-form-label"></label>
                    <button type="submit" class="btn btn-warning"><b>Filter</b> <i class="i-Filter"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>
@endif
@if (Auth::user()->role_id == '2')
<div class="col-md-12">
    <form role="form" method="post" action="#" id="dataFilter">
        {{ csrf_field() }}
        <div class="row">

            <div class="col col-3 col-md-3">
                <div class="form-group">
                    <select id="counties" name="county" style="width:100%;">
                        <option></option>
                        @foreach ($counties as $county)
                        <option value="{{ $county->id }}">{{ ucwords($county->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col col-3 col-md-3">
                <div class="form-group">
                    <select id="facilities" name="facility" style="width:100%;">
                        <option></option>
                        @foreach ($facilities as $facility)
                        <option value="{{ $facility->code }}">{{ ucwords($facility->name.' - '.$facility->code) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col col-6 col-md-6">

                <div class="form-group">
                    <input class="form-control" id="daterange" type="text" name="daterange" />
                </div>
                <div class="form-group">
                    <label for="daterange" class="col-form-label"></label>
                    <button type="submit" class="btn btn-warning"><b>Filter</b> <i class="i-Filter"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>
@endif
@if (Auth::user()->role_id == '3')
<div class="col-md-12">
    <form role="form" method="post" action="#" id="dataFilter">
        {{ csrf_field() }}
        <div class="row">
            <div class="col">

                <div class="form-group">
                    <input class="form-control" id="daterange" type="text" name="daterange" />
                </div>
                <div class="form-group">
                    <label for="daterange" class="col-form-label"></label>
                    <button type="submit" class="btn btn-warning"><b>Filter</b> <i class="i-Filter"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>
@endif
<div class="separator-breadcrumb border-top"></div>
<div class="row">
    <!-- ICON BG -->
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Add-User"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Patients</p>
                    <p id="patients" class="text-primary text-24 line-height-1 mb-2"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Doctor"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Providers</p>
                    <p class="text-primary text-24 line-height-1 mb-2">{{number_format(count($providers))}}</p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Inbox-Into"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Transfers In</p>
                    <p id="transfer_in" class="text-primary text-24 line-height-1 mb-2"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Inbox-Out"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Transfers Out</p>
                    <p id="transfer_out" class="text-primary text-24 line-height-1 mb-2"></p>
                    <!-- <p class="text-primary text-24 line-height-1 mb-2">{{ number_format(json_decode($transfers->isEmpty() ? 0 : $transfers[0]->transfer_out)) }}</p> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Doctor"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Transit</p>
                    <p id="transit" class="text-primary text-24 line-height-1 mb-2"></p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <input id="authenticated" type="hidden" value="{{ auth()->user()->role_id }}">
    <div class="col-lg-12 col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div id="month_transfer" style="height: 400px;">
                </div>
            </div>
        </div>
    </div>
    @if (Auth::user()->role_id == '1')
    <div class="col-lg-12 col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div id="partner_transfer" style="height: 400px;">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div id="county_transfer" style="height: 400px;">
                </div>
            </div>
        </div>
    </div>
    @endif
    @if (Auth::user()->role_id == '2')
    <div class="col-lg-12 col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div id="facility_transfer" style="height: 400px;">
                </div>
            </div>
        </div>
    </div>
    @endif
    @if (Auth::user()->role_id == '3')
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3"></h4>
                <div class="table-responsive">
                    <table id="table_client" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>CCC Number</th>
                                <th>NUPI No</th>
                                <th>Client Name</th>
                                <th>VL Status</th>
                                <th>Regimen</th>
                                <th>Future Appointment</th>
                                <th>Transfer Type</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    @endif
</div>





@endsection

@section('page-js')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/themes/high-contrast-light.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/moment/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>

<script type="text/javascript">
    let authenticated = $('#authenticated').val();
    $("select").select2();
    $('#facilities').select2({
        width: 'element',
        placeholder: "Select Facility",
        allowClear: true
    });
    $('#partners').select2({
        width: 'element',
        placeholder: "Select Partner",
        allowClear: true
    });
    $('#counties').select2({
        width: 'element',
        placeholder: "Select County",
        allowClear: true
    });

    $(function() {
        $('#daterange').daterangepicker({
            "minYear": 2022,
            "autoApply": true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            },
            "startDate": "01/09/2022",
            "endDate": moment().format('MM/DD/YYYY'),
            "maxDate": moment().format('MM/DD/YYYY'),
            "opens": "left"
        }, function(start, end, label) {});
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'GET',
        url: "{{ route('data') }}",
        success: function(data) {
            monthTransfer(data.month_transfers);
            $("#transfer_in").html(data.transfers[0].transfer_in);
            $("#transfer_out").html(data.transfers[0].transfer_out);
            $("#transit").html(data.transfers[0].transit);
            $("#patients").html(data.patients);

            if (authenticated == '2') {
                facilityTransfer(data.facility_transfers);
            }
            if (authenticated == '1') {
                partnerTransfer(data.partner_transfers);
                countyTransfer(data.county_transfers);
            }
            if (authenticated == '3') {
                var list = data.clients;
                $.each(list, function(index, item) {
                    $('#table_client tbody').append('<tr><td>' + item.ccc_no + '</td><td>' + item.upi + '</td><td>' + item.firstname + '</td><td>' + item.viral_load + '</td><td>' + item.regimen + '</td><td>' + item.tca + '</td><td>' + item.referral_type + '</td></tr>');
                });
                $('#table_client').DataTable({
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
                    "pageLength": 10,
                    "paging": true,
                    "responsive": true,
                    "ordering": true,
                    "info": true,
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                });
            }
            console.log(data.patients);
            console.log(data);
        }
    });

    $('#dataFilter').on('submit', function(e) {
        e.preventDefault();
        let partners = $('#partners').val();
        let counties = $('#counties').val();
        let facilities = $('#facilities').val();
        let daterange = $('#daterange').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        Swal.fire({
            title: "loading data...",
            showConfirmButton: false,
            allowOutsideClick: false
        });
        $.ajax({
            type: 'GET',
            data: {
                "partners": partners,
                "counties": counties,
                "facilities": facilities,
                "daterange": daterange
            },
            url: "{{ route('filter_data') }}",
            success: function(data) {
                monthTransfer(data.month_transfers);
                $("#transfer_in").html(data.transfers[0].transfer_in);
                $("#transfer_out").html(data.transfers[0].transfer_out);
                $("#transit").html(data.transfers[0].transit);
                $("#patients").html(data.patients);
                if (authenticated == '2') {
                    facilityTransfer(data.facility_transfers);
                }
                if (authenticated == '1') {
                    partnerTransfer(data.partner_transfers);
                    countyTransfer(data.county_transfers);
                }
                if (authenticated == '3') {
                    var list = data.clients;
                    var table = $('#table_client').DataTable();
                    table.destroy();

                    $('#table_client tbody').empty();
                    $.each(list, function(index, item) {
                        $('#table_client tbody').append('<tr><td>' + item.ccc_no + '</td><td>' + item.upi + '</td><td>' + item.firstname + '</td><td>' + item.viral_load + '</td><td>' + item.regimen + '</td><td>' + item.tca + '</td><td>' + item.referral_type + '</td></tr>');
                    });
                    $('#table_client').DataTable({
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
                        "pageLength": 10,
                        "paging": true,
                        "responsive": true,
                        "ordering": true,
                        "info": true,
                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            'excelHtml5',
                            'csvHtml5',
                            'pdfHtml5'
                        ]
                    });
                }
                Swal.close();
            }
        });
    });

    function monthTransfer(data) {
        data.sort((a, b) => {
            const monthA = new Date(a.month);
            const monthB = new Date(b.month);
            return monthA - monthB;
        });
        let month = [];
        let transfer_in = [];
        let transfer_out = [];
        let transit = [];
        for (let i = 0; i < data.length; i++) {
            month.push(data[i].month);
            transfer_in.push(Number(data[i].transfer_in));
            transfer_out.push(Number(data[i].transfer_out));
            transit.push(Number(data[i].transit));
        }
        console.log(data);

        Highcharts.chart('month_transfer', {
            chart: {
                type: 'column'
            },
            legend: {
                itemStyle: {
                    fontFamily: 'Inter',
                    fontSize: '12px'
                }
            },
            style: {
                fontFamily: 'Inter'
            },
            title: {
                text: 'Monthly Transfers',
                style: {
                    fontFamily: 'Inter',
                    fontSize: '14px'
                }
            },

            xAxis: {
                categories: month,
                crosshair: true
            },
            yAxis: {
                title: {
                    useHTML: true,
                    text: 'No of Patient'
                }
            },
            tooltip: {

                formatter: function() {
                    return '<b>' + this.x + '</b><br/>' +
                        this.series.name + ': ' + this.y;
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Transfer Out',
                color: '#97080F',
                data: transfer_out
            }, {
                name: 'Transfer In',
                color: '#01058A',
                data: transfer_in

            },
            {
                name: 'Transit',
                color: '#01DFD7',
                data: transit

            }]
        });
    }
   
    if (authenticated == '1') {
        function partnerTransfer(data) {
            let partner = [];
            let transfer_in = [];
            let transfer_out = [];
            let transit = [];
            for (let i = 0; i < data.length; i++) {
                partner.push(data[i].partner);
                transfer_in.push(Number(data[i].transfer_in));
                transfer_out.push(Number(data[i].transfer_out));
                transit.push(Number(data[i].transit));
            }
            Highcharts.chart('partner_transfer', {
                chart: {
                    type: 'column'
                },
                legend: {
                    itemStyle: {
                        fontFamily: 'Inter',
                        fontSize: '12px'
                    }
                },
                style: {
                    fontFamily: 'Inter'
                },
                title: {
                    text: 'Transfers By Partner',
                    style: {
                        fontFamily: 'Inter',
                        fontSize: '14px'
                    }
                },

                xAxis: {
                    categories: partner,
                    crosshair: true
                },
                yAxis: {
                    title: {
                        useHTML: true,
                        text: 'No of Patient'
                    }
                },
                tooltip: {

                    formatter: function() {
                        return '<b>' + this.x + '</b><br/>' +
                            this.series.name + ': ' + this.y;
                    }
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Transfer Out',
                    color: '#97080F',
                    data: transfer_out
                }, {
                    name: 'Transfer In',
                    color: '#01058A',
                    data: transfer_in

                },
                {
                    name: 'Transit',
                    color: '#01DFD7',
                    data: transit

                }]
            });
        }
        function countyTransfer(data) {
            let county = [];
            let transfer_in = [];
            let transfer_out = [];
            let transit = [];
            for (let i = 0; i < data.length; i++) {
                county.push(data[i].county);
                transfer_in.push(Number(data[i].transfer_in));
                transfer_out.push(Number(data[i].transfer_out));
                transit.push(Number(data[i].transit));
            }
            Highcharts.chart('county_transfer', {
                chart: {
                    type: 'column'
                },
                legend: {
                    itemStyle: {
                        fontFamily: 'Inter',
                        fontSize: '12px'
                    }
                },
                style: {
                    fontFamily: 'Inter'
                },
                title: {
                    text: 'Transfers By County',
                    style: {
                        fontFamily: 'Inter',
                        fontSize: '14px'
                    }
                },

                xAxis: {
                    categories: county,
                    crosshair: true
                },
                yAxis: {
                    title: {
                        useHTML: true,
                        text: 'No of Patient'
                    }
                },
                tooltip: {

                    formatter: function() {
                        return '<b>' + this.x + '</b><br/>' +
                            this.series.name + ': ' + this.y;
                    }
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Transfer Out',
                    color: '#97080F',
                    data: transfer_out
                }, {
                    name: 'Transfer In',
                    color: '#01058A',
                    data: transfer_in

                },
                {
                    name: 'Transit',
                    color: '#01DFD7',
                    data: transit

                }]
            });
        }
    }
    if (authenticated == '2') {
        function facilityTransfer(data) {
            let facility = [];
            let transfer_in = [];
            let transfer_out = [];
            let transit = [];
            for (let i = 0; i < data.length; i++) {
                facility.push(data[i].facility);
                transfer_in.push(Number(data[i].transfer_in));
                transfer_out.push(Number(data[i].transfer_out));
                transit.push(Number(data[i].transit));
            }
            Highcharts.chart('facility_transfer', {
                chart: {
                    type: 'column'
                },
                legend: {
                    itemStyle: {
                        fontFamily: 'Inter',
                        fontSize: '12px'
                    }
                },
                style: {
                    fontFamily: 'Inter'
                },
                title: {
                    text: 'Transfers By Facility',
                    style: {
                        fontFamily: 'Inter',
                        fontSize: '14px'
                    }
                },

                xAxis: {
                    categories: facility,
                    crosshair: true
                },
                yAxis: {
                    title: {
                        useHTML: true,
                        text: 'No of Patient'
                    }
                },
                tooltip: {

                    formatter: function() {
                        return '<b>' + this.x + '</b><br/>' +
                            this.series.name + ': ' + this.y;
                    }
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Transfer Out',
                    color: '#97080F',
                    data: transfer_out
                }, {
                    name: 'Transfer In',
                    color: '#01058A',
                    data: transfer_in

                },
                {
                    name: 'Transit',
                    color: '#01DFD7',
                    data: transit

                }]
            });
        }
    }
</script>

@endsection
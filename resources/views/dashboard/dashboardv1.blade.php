@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
    <ul>
        <li><a href="">ART Refferal</a></li>
        <li>Dashboard</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>
<form role="form" method="post" action="#" id="dataFilter">
    {{ csrf_field() }}
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for=" partners" class="col-form-label"><b>Partner</b></label>
                <select class="form-control select2" id="partnerFilter">
                    <option></option>
                    @foreach ($partners as $partner)
                    <option value="{{ $partner->partner_id }}">{{ $partner->partner_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for=" counties" class="col-form-label"><b>County</b></label>
                <select id="countyFilter">
                    <option></option>
                    @foreach ($counties as $county)
                    <option value="{{ $county->id }}">{{ $county->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for=" facilities" class="col-form-label"><b>Facility</b></label>
                <select id="facilityFilter">
                    <option></option>
                    @foreach ($facilities as $facility)
                    <option value="{{ $facility->code }}">{{ $facility->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">

            <div class="form-group">
                <label for="daterange" class="col-form-label"><b>Date Range</b></label>
                <input class="form-control" id="daterange" type="text" name="daterange" />
            </div>
            <div class="form-group">
                <label for="daterange" class="col-form-label"></label>
                <button type="submit" class="btn btn-warning"><b>Filter</b> <i class="i-Filter"></i></button>
            </div>
        </div>
    </div>
</form>
<div class="separator-breadcrumb border-top"></div>
<div class="row">
    <!-- ICON BG -->
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Add-User"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Patients</p>
                    <p class="text-primary text-24 line-height-1 mb-2">{{number_format(count($patients))}}</p>
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
                    <p class="text-primary text-24 line-height-1 mb-2">{{ number_format(json_decode($transfers->isEmpty() ? 0 : $transfers[0]->transfer_in)) }}</p>
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
                    <p class="text-primary text-24 line-height-1 mb-2">{{ number_format(json_decode($transfers->isEmpty() ? 0 : $transfers[0]->transfer_out)) }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Inbox-Out"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Transit</p>
                    <p class="text-primary text-24 line-height-1 mb-2">{{ number_format(json_decode($transfers->isEmpty() ? 0 : $transfers[0]->transit)) }}</p>
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
    <!-- <div class="col-lg-4 col-sm-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title">Sales by Countries</div>
                <div id="echartPie" style="height: 300px;"></div>
            </div>
        </div>
    </div> -->
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
<script type="text/javascript">
    let authenticated = $('#authenticated').val();
    $("select").select2();
    $('#facilityFilter').select2({
        width: 'element',
        placeholder: "Select Facility",
        allowClear: true
    });
    $('#partnerFilter').select2({
        width: 'element',
        placeholder: "Select Partner",
        allowClear: true
    });
    $('#countyFilter').select2({
        width: 'element',
        placeholder: "Select County",
        allowClear: true
    });

    $(function() {
        $('#daterange').daterangepicker({
            "minYear": 2017,
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
            "startDate": "04/10/2017",
            "endDate": moment().format('MM/DD/YYYY'),
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
            if (authenticated == '2') {
                facilityTransfer(data.facility_transfers);
            }
            if (authenticated == '1') {
                partnerTransfer(data.partner_transfers);
            }
            console.log(data.month_transfers);
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
                if (authenticated == '2') {
                    facilityTransfer(data.facility_transfers);
                }
                if (authenticated == '1') {
                    partnerTransfer(data.partner_transfers);
                }
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
        for (let i = 0; i < data.length; i++) {
            month.push(data[i].month);
            transfer_in.push(Number(data[i].transfer_in));
            transfer_out.push(Number(data[i].transfer_out));
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
                text: 'Monthly Transfer Out/In',
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

            }]
        });
    }
    if (authenticated == '1') {
        function partnerTransfer(data) {
            let partner = [];
            let transfer_in = [];
            let transfer_out = [];
            for (let i = 0; i < data.length; i++) {
                partner.push(data[i].partner);
                transfer_in.push(Number(data[i].transfer_in));
                transfer_out.push(Number(data[i].transfer_out));
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
                    text: 'Transfer Out/In By Partner',
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

                }]
            });
        }
    }
    if (authenticated == '2') {
        function facilityTransfer(data) {
            let facility = [];
            let transfer_in = [];
            let transfer_out = [];
            for (let i = 0; i < data.length; i++) {
                facility.push(data[i].facility);
                transfer_in.push(Number(data[i].transfer_in));
                transfer_out.push(Number(data[i].transfer_out));
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
                    text: 'Transfer Out/In By Facility',
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

                }]
            });
        }
    }
</script>

@endsection
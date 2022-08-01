@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
    <ul>
        <li><a href="">ART Refferal</a></li>
        <li>Dashboard</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="row">
    <!-- ICON BG -->
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Add-User"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">New Leads</p>
                    <p class="text-primary text-24 line-height-1 mb-2">205</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Financial"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Sales</p>
                    <p class="text-primary text-24 line-height-1 mb-2">$4021</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Checkout-Basket"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Orders</p>
                    <p class="text-primary text-24 line-height-1 mb-2">80</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center">
                <i class="i-Money-2"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Expense</p>
                    <p class="text-primary text-24 line-height-1 mb-2">$1200</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title">This Year Sales</div>
                <div id="echartBar" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title">Sales by Countries</div>
                <div id="echartPie" style="height: 300px;"></div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
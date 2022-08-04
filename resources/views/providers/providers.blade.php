@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
  <div class="breadcrumb">
                <h1>Providers</h1>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li>Providers</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <button type="button" onclick="window.location='{{ route("patients.create") }}'" class="btn btn-primary ripple m-1">Add Provider</button>
                            <button type="button" onclick="window.location='{{ route("patients.create") }}'" class="btn btn-primary ripple m-1">Upload List</button>

                            <div class="table-responsive">
                                <table id="alternative_pagination_table" class="display table table-striped table-bordered" style="width:100%">
                            @include('providers.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->



@endsection

@section('page-js')
 <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables.script.js')}}"></script>
@endsection

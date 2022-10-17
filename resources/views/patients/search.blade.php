@extends('layouts.master')
@section('before-css')
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"">
@endsection
@section('main-content')
<div class="breadcrumb">
                <h1>Search Patient</h1>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li>Search</li>
                </ul>

            </div>

            <div class="separator-breadcrumb border-top"></div>
            {{-- end of breadcrumb --}}

            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <form action="{{route('patients.filter')}}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                            <a type="button" href="{{route('patients.search')}}" class="btn btn-danger btn-md pull-right">Refresh</a>
                                <input type="text" class="form-control" name="filter"
                                    placeholder="Search patients">
                            <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>

                        <div class="container">
                            @if(isset($details))
                            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                            <h2>Patient details</h2>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>CCC No.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($details as $patient)
                                    <tr>
                                        <td>{{$patient->full_name}}</td>
                                        <td>{{$patient->ccc_no}}</td>
                                        <td>
                                            <a type="button" href="/patients/{{base64_encode(base64_encode($patient->person_id))}}" class="text-primary mr-2">View details</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @elseif(isset($message))
                            <p>{{ $message }}</p>
                            @endif
                        </div>


                    </div>
                </div>
            </div>


@endsection

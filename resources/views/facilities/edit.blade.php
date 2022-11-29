@extends('layouts.master')
@section('page-css')

@endsection

@section('main-content')
@include('sweetalert::alert')

<!-- end of col -->

<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card">
            <div class="card-header">Map Facility
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('facilities.index') }}">Facilities</a>
                </span>
            </div>
            <div class="card-body">
                <form role="form" method="post" action="{{route('facilities.update')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <strong>Partner Name:</strong>
                        {!! Form::select('partner_id', $partners, null, ['class' => 'form-control']) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <!-- {!! Form::close() !!} -->
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('page-js')

<script type="text/javascript">

</script>

@endsection
@extends('layouts.master')
@section('before-css')


@endsection
@section('main-content')
<div class="breadcrumb">
    <h1>Upload Providers List</h1>
    <ul>
        <li><a href="{{route('providers.list')}}">&lt;&lt;Back</a></li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
            {{-- end of breadcrumb --}}

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <form method="POST" action="{{route('providers.upload')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="card-title">
                    Please upload a CSV file in the given format &nbsp;&lt;&lt;<a href="{{ asset('files/sample-provider-data-sheet.csv') }}" target="_blank">Sample CSV Format</a>&gt;&gt;
                </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                        <input
                            type="file"
                            class="form-control form-control-user @error('file') is-invalid @enderror"
                            id="exampleFile"
                            name="file"
                            value="{{ old('file') }}">
                        </div>
                        <div class="input-group-append">
                             <button type="submit" class="btn btn-success btn-user float-right mb-3">Upload</button>
                            <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('patients.list') }}">Cancel</a>
                        </div>
                    </div>
            </div>
        </form>

        </div>
    </div>
</div>

@endsection

@section('page-js')
<script >
function readURL(input) {
var url = input.value;
alert(url);
}

</script>


@endsection

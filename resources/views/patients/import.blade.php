@extends('layouts.master')
@section('before-css')


@endsection
@section('main-content')
<div class="breadcrumb">
    <h1>Upload Patients List</h1>
    <ul>
        <li><a href="{{route('patients.list')}}">&lt;&lt;Back</a></li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
            {{-- end of breadcrumb --}}

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <form method="POST" action="{{route('patients.upload')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="card-title">
                    Please Upload CSV in Given Format &nbsp;&lt;&lt;<a href="{{ asset('files/sample-patient-data-sheet.csv') }}" target="_blank">Sample CSV Format</a>&gt;&gt;
                </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" onchange="readURL(this.value)" >
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                                        file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
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

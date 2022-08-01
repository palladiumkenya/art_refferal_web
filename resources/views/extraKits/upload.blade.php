@extends('layouts.master')
@section('page-css')
  <link rel="stylesheet" href="{{asset('assets/styles/vendor/dropzone.min.css')}}">
@endsection

@section('main-content')
 <div class="breadcrumb">
                <h1>Upload</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>Upload</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-6">

                    <p>DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.</p>
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">warning</h4>
                        <p></p>
                        <p class="mb-0">Warning! Dropzone does not handle your file uploads on the server. You have to implement the code to receive and store the file yourself. See the section Server side implementation for more information.</p>
                    </div>
                </div>
            </div>
            <!-- end of row -->

            <div class="row mb-4">
                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title">single upload</h4>
                            <form action="#" class="dropzone" id="single-file-upload">
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end of col -->
                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title">multple upload</h4>
                            <form action="#" class="dropzone" id="multple-file-upload">
                                <div class="fallback">
                                    <input name="file" type="file" multiple/>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end of col -->
                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title">use button to upload</h4>

                            <button id="button-select" class="btn btn-primary mb-1">select files</button>
                            <form action="#" class="dropzone dropzone-area" id="button-select-upload">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                                <div class="dz-message">Drop Files Here To Upload</div>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title">Limit File Size & No. Of Files</h4>


                            <form action="#" class="dropzone dropzone-area" id="file-limit-upload">

                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title">Accepted files</h4>


                            <form action="#" class="dropzone dropzone-area" id="file-accepted-upload">

                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title">Remove thumbnail</h4>


                            <form action="#" class="dropzone dropzone-area" id="file-remove-thumbnail-upload">

                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                    <a class="btn btn-danger dz-remove" data-dz-remove>trash</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->



@endsection

@section('page-js')

 <script src="{{asset('assets/js/vendor/dropzone.min.js')}}"></script>
<script src="{{asset('assets/js/dropzone.script.js')}}"></script>
@endsection

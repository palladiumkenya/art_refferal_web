@extends('layouts.master')
@section('page-css')
  <link rel="stylesheet" href="{{asset('assets/styles/vendor/hopscotch.css')}}">
@endsection

@section('main-content')
  <div class="breadcrumb">
                <h1>Tour</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>Tour</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <h2>Tour</h2>
                    <p>Hopscotch is a Javascript library . Hopscotch accepts a tour JSON object as input and provides an API for the developer to control rendering the tour display and managing the tour progress.</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title">Start the Tour</h4>
                            <button id="startTourBtn" class="btn btn-large btn-primary">Take a tour</button>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="card text-left" id="create-tour">

                        <div class="card-body">
                            <h4 class="card-title">Create your own tour</h4>
                            <pre><code id="my-first-tour-file">
                                // Define the tour!
                                var tour = {
                                  id: "hello-hopscotch",
                                  steps: [
                                    {
                                      title: "My Header",
                                      content: "This is the header of my page.",
                                      target: "header",
                                      placement: "right"
                                    },
                                    {
                                      title: "My content",
                                      content: "Here is where I put my content.",
                                      target: document.querySelector("#content p"),
                                      placement: "bottom"
                                    }
                                  ]
                                };

                                // Start the tour!
                                <span id="start-tour">hopscotch.startTour(tour);</span>
                                    </code></pre>
                        </div>
                    </div>

                </div>
            </div>




@endsection

@section('page-js')

 <script src="{{asset('assets/js/vendor/hopscotch.min.js')}}"></script>
<script src="{{asset('assets/js/hopscotch.script.js')}}"></script>
@endsection

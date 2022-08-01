@extends('layouts.master')
@section('before-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/smart.wizard/smart_wizard.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/smart.wizard/smart_wizard_theme_arrows.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/smart.wizard/smart_wizard_theme_circles.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/smart.wizard/smart_wizard_theme_dots.min.css')}}">

@endsection

@section('main-content')
  <div class="breadcrumb">
                <h1>Smart Wizard</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Smart Wizard</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="row mb-3">
                <div class="col-12 col-lg-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="theme_selector">Themes</label>
                        </div>
                        <select id="theme_selector" class="custom-select col-lg-6 col-sm-12">
                            <option value="default">default</option>
                            <option value="arrows">arrows</option>
                            <option value="circles">circles</option>
                            <option value="dots">dots</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-sm-12 d-flex align-items-center">
                    <span class="m-auto"></span>
                    <label>External Buttons:</label>
                    <div class="btn-group col-lg-6 col-sm-12" role="group">
                        <button class="btn btn-secondary" id="prev-btn" type="button">Go Previous</button>
                        <button class="btn btn-secondary" id="next-btn" type="button">Go Next</button>
                        <button class="btn btn-danger" id="reset-btn" type="button">Reset Wizard</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- SmartWizard html -->
                    <div id="smartwizard">
                        <ul>
                            <li><a href="#step-1">Step 1<br /><small>This is step description</small></a></li>
                            <li><a href="#step-2">Step 2<br /><small>This is step description</small></a></li>
                            <li><a href="#step-3">Step 3<br /><small>This is step description</small></a></li>
                            <li><a href="#step-4">Step 4<br /><small>This is step description</small></a></li>
                        </ul>

                        <div>
                            <div id="step-1" class="">
                                <h3 class="border-bottom border-gray pb-2">Step 1 Content</h3>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                            <div id="step-2" class="">
                                <h3 class="border-bottom border-gray pb-2">Step 2 Content</h3>
                                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum. </div>
                            </div>
                            <div id="step-3" class="">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                            <div id="step-4" class="">
                                <h3 class="border-bottom border-gray pb-2">Step 4 Content</h3>
                                <div class="card o-hidden">
                                    <div class="card-header">My Details</div>
                                    <div class="card-block p-0">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Name:</th>
                                                    <td>Tim Smith</td>
                                                </tr>
                                                <tr>
                                                    <th>Email:</th>
                                                    <td>example@example.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection

@section('page-js')


 <script src="{{asset('assets/js/vendor/jquery.smartWizard.min.js')}}"></script>

@endsection

@section('bottom-js')


 <script src="{{asset('assets/js/smart.wizard.script.js')}}"></script>

@endsection

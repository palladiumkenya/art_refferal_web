@extends('layouts.master')

@section('main-content')
    <div class="breadcrumb">
                <h1>ToolTip</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>ToolTip</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <h2>ToolTip</h2>
                    <p></p>
                </div>
            </div>

            <div class="row mb-4">


                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Basic Tooltips</h4>
                            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left.</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-default m-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                        Tooltip on top
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-default m-1" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                        Tooltip on right
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-default m-1" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                        Tooltip on bottom
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-default m-1" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                        Tooltip on left
                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Basic Tooltips color button</h4>
                            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left.</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                        Tooltip on top
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info" d m-1ata-toggle="tooltip" data-placement="right" title="Tooltip on right">
                        Tooltip on right
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-success m-1" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                        Tooltip on bottom
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-warning m-1" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                        Tooltip on left
                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Tooltips Trigger</h4>
                            <p>Tooltip is triggered using - click | hover | focus | manual options. You may pass multiple triggers; separate them with a space. "manual" cannot be combined with any other trigger.</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>
                                        Use <code>data-trigger="click"</code> for click trigger.
                                    </p>
                                    <button data-trigger="click" type="button" class="btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                        on click trigger
                    </button>

                                </div>
                                <div class="col-md-3">

                                    <p>
                                        Use <code>data-trigger="focus"</code> for focus trigger.
                                    </p>
                                    <button data-trigger="focus" type="button" class="btn btn-info" d m-1ata-toggle="tooltip" data-placement="right" title="Tooltip on right">
                        on focus trigger
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        Use <code>data-trigger="hover"</code> for hover trigger.
                                    </p>
                                    <button data-trigger="hover" type="button" class="btn btn-success m-1" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                        on hover trigger
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        Use <code>data-trigger="manual"</code> for manual trigger.
                                    </p>
                                    <button id="manual" data-trigger="manual" type="button" class="btn btn-warning m-1" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                        manual trigger
                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Tooltip Options</h4>
                            <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to data-, as in data-animation="".
                            </p>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>
                                        Use <code>data-animation="true"</code> for animation.
                                    </p>
                                    <button data-animation="true" type="button" class="btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                        With animation
                    </button>

                                </div>
                                <div class="col-md-3">

                                    <p>
                                        Use <code>data-animation="false"</code> for no animation.
                                    </p>
                                    <button data-animation="false" type="button" class="btn btn-info" d m-1ata-toggle="tooltip" data-placement="right" title="Tooltip on right">
                        no amination
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        Use <code>data-delay="1000"</code> for 1000ms delay.
                                    </p>
                                    <button data-delay="1000" type="button" class="btn btn-success m-1" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                        Delay
                    </button>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        Use <code>data-html="true"</code> for html .
                                    </p>
                                    <button data-html="true" type="button" class="btn btn-warning m-1" data-toggle="tooltip" data-placement="left" title="Tooltip With <em>html</em>">
                        Show Html
                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->
@endsection

@section('page-js')
<script src="{{asset('assets/js/tooltip.script.js')}}"></script>
@endsection

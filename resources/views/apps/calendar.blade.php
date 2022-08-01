@extends('layouts.master')
@section('page-css')

  <link rel="stylesheet" href="{{asset('assets/styles/vendor/calendar/fullcalendar.min.css')}}">
@endsection

@section('main-content')
    <div class="breadcrumb">
                <h1>Calendar</h1>
                <ul>
                    <li><a href="">Apps</a></li>
                    <li>Calendar</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row">

                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="create_event_wrap">
                                <form class="js-form-add-event">
                                    <div class="form-group">
                                        <label for="newEvent"> Create new Event</label>
                                        <input type="text" name="newEvent" id="newEvent" class="form-control" placeholder="new Event" aria-describedby="helpId">

                                    </div>


                                </form>


                                <ul class="list-group" id="external-events">
                                    <li class="list-group-item bg-success fc-event">
                                        Hello World

                                    </li>
                                    <li class="list-group-item bg-primary fc-event">

                                        Go to Shopping
                                    </li>
                                    <li class="list-group-item bg-warning fc-event">

                                        Payment schedule
                                    </li>
                                    <li class="list-group-item bg-danger fc-event">

                                        Rent Due
                                    </li>
                                </ul>
                                <p>
                                    <input type='checkbox' id='drop-remove' />
                                    <label for='drop-remove'>remove after drop</label>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card mb-4 o-hidden">
                        <div class="card-body">
                            <div id="calendar"></div>


                        </div>
                    </div>
                </div>

            </div>


@endsection

@section('page-js')


<script src="{{asset('assets/js/vendor/calendar/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/js/calendar.script.js')}}"></script>

@endsection

@extends('layouts.master')
@section('page-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/animate.css')}}">

@endsection

@section('main-content')

<div class="breadcrumb">
    <h1>ToDo</h1>
    <ul>
        <li><a href="">Apps</a></li>
        <li>ToDo</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-4" id="todo_wrap">
            <div class="card-body">
                <div class="card-title">Minimal To-do List App</div>
                <ul id="show-todo-items"></ul>
                <form class="create-items">

                    <div class="input-group mb-3">

                        <input type="text" class="form-control" id="todo-list-item"
                            placeholder="What do you need to do today?">
                        <div class="input-group-append">
                            <button class="add btn btn-success" type="submit">Add to List</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>





@endsection

@section('page-js')


<script src="{{asset('assets/js/es5/todo.script.min.js')}}"></script>
@endsection
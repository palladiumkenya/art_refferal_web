@extends('layouts.master')

@section('main-content')
   <div class="breadcrumb">
                <h1>List</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>List</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-6">

                    <p>List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">Basic example</h4>
                            <p>The most basic list group is an unordered list with list items and the proper classes.</p>
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

<div class="col-md-4  mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">Basic example with Active items</h4>
                            <p>Add .active to a .list-group-item to indicate the current active selection.</p>
                            <ul class="list-group">
                                <li class="list-group-item active">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">Basic example with Disabled items</h4>
                            <p>Add .disabled to a .list-group-item to make it appear disabled</p>
                            <ul class="list-group">
                                <li class="list-group-item disabled">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->

            <div class="row mb-4">
<div class="col-md-4  mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">Links</h4>
                            <p>Use <code>'anchor tag'</code> to create actionable list group items with hover, disabled, and active states by adding .list-group-item-action
                                <span class="text-warning">Be sure to not use the standard .btn classes here.</span></p>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
        Cras justo odio
    </a>
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

<div class="col-md-4  mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">buttons list items</h4>
                            <p>With <code>button tag</code>, you can also make use of the disabled attribute instead of the .disabled class.<span class="text-warning">Be
            sure to not use the standard .btn classes here.</span></p>
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active">
        Cras justo odio
    </button>
                                <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                                <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                                <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                                <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">Flush</h4>
                            <p>Add .list-group-flush to remove some borders and rounded corners to render list group items edge-to-edge in a parent container
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->


            <div class="row mb-4">
<div class="col-md-4  mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">Contextual classes</h4>
                            <p>Use contextual classes to style list items with a stateful background and color</p>
                            <ul class="list-group">
                                <li class="list-group-item">Dapibus ac facilisis in</li>


                                <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                                <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                                <li class="list-group-item list-group-item-success">A simple success list group item</li>
                                <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                                <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                                <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

<div class="col-md-4  mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">Contextual Action</h4>
                            <p>Contextual classes also work with .list-group-item-action. Note the addition of the hover styles here not present in the previous example. Also supported is the .active state; apply it to indicate an active selection on a contextual
                                list group item.</p>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>


                                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group
        item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">List With Badges</h4>
                            <p>Add .list-group-flush to remove some borders and rounded corners to render list group items edge-to-edge in a parent container
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge badge-primary badge-pill">4</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-info badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-success badge-pill">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-warning badge-pill">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-danger badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->

            <div class="row mb-4">
<div class="col-md-4  mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">Custom content</h4>
                            <p>Add nearly any HTML within, even for linked list groups like the one below, with the help of flexbox utilities.</p>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 text-white">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of col -->



                <div class="col-md-8">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-2">List With JavaScript behavior</h4>
                            <p>Use the tab JavaScript plugin—include it individually or through the compiled bootstrap.js file—to extend our list group to create tabbable panes of local content.</p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                            Enable tabbable list item via JavaScript (each list item needs to be activated individually

                                            <br>
                                            <code>
$('#myList a').on('click', function (e) {
e.preventDefault()
$(this).tab('show')
})
</code>
                                        </div>
                                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt
                                            laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt
                                            veniam ad.</div>
                                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt
                                            laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt
                                            veniam ad.</div>
                                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt
                                            laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt
                                            veniam ad.</div>
                                    </div>
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

@endsection

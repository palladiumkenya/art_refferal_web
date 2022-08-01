@extends('layouts.master')

@section('main-content')
    <div class="breadcrumb">
                <h1>Popover</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Popover</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Example</div>
                            <button type="button" class="btn btn-danger" data-toggle="popover" title="Popover title"
                                data-content="And here's some amazing content. It's very engaging. Right?">Click to
                                toggle popover</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Four directions</div>
                            <p>Four options are available: top, right, bottom, and left aligned.</p>
                            <button type="button" class="btn btn-primary m-1" data-container="body" data-toggle="popover"
                                data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on top
                            </button>

                            <button type="button" class="btn btn-primary m-1" data-container="body" data-toggle="popover"
                                data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on right
                            </button>

                            <button type="button" class="btn btn-primary m-1" data-container="body" data-toggle="popover"
                                data-placement="bottom" data-content="Vivamus
                                  sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on bottom
                            </button>

                            <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover"
                                data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on left
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Dismiss on next click</div>
                            <p>Use the <code>focus</code> trigger to dismiss popovers on the user’s next click of a different element than the toggle element.</p>
                            <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('page-js')
 <script>
        $("[data-toggle=popover]").popover();
    </script>
@endsection

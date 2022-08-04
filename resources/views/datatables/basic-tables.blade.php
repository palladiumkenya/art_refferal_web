@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
  <div class="breadcrumb">
                <h1>Datatables</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Datatables</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <h4>Datatables</h4>
                    <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, build upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table.</p>
                </div>
            </div>
            <!-- end of row -->

            <div class="row mb-4">
                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Zero configuration</h4>
                            <p>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p>
                            <div class="table-responsive">
                                <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                                 @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Feature enable / disable</h4>

                            <p>Disabling features that you don't wish to use for a particular table is easily done by setting a variable in the initialisation object. The full list of available options is <a href="https://datatables.net/reference/option">available in the DataTables reference</a>.</p>

                            <div class="table-responsive">
                                <table id="feature_disable_table" class="display table table-striped table-bordered" style="width:100%">
                                 @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Default ordering (sorting)</h4>

                            <p>With DataTables you can alter the ordering characteristics of the table at initialisation time. Using the order initialisation parameter, you can set the table to display the data in exactly the order that you want.</p>

                            <div class="table-responsive">
                                <table id="deafult_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                            @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Multi-column ordering</h4>

                            <p>DataTables allows ordering by multiple columns at the same time, which can be activated in a number of different ways
                            </p>

                            <div class="table-responsive">
                                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                            @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Hidden columns</h4>

                            <p>DataTables allows ordering by multiple columns at the same time, which can be activated in a number of
                                <p>There are times when you might find it useful to display only a sub-set of the information that was available in the original table. For example you might want to reduce the amount of data shown on screen to make it clearer
                                    for the user (consider also using the <a href="https://datatables.net/extensions/responsive">Responsive
        extension</a> for this). This is done through the <a href="//datatables.net/reference/option/columns.visible"><code
            class="option" title="DataTables initialisation option">columns.visible</code></a> column option.</p>

                                <div class="table-responsive">
                                    <table id="hidden_column_table" class="display table table-striped table-bordered" style="width:100%">
                                     @include('datatables.table_content')
                                    </table>
                                </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Complex headers (rowspan and colspan)</h4>

                            <p>When using tables to display data, you will often wish to display column information in groups. DataTables fully supports <code>colspan</code> and
                                <code>rowspan</code> in the table's header, assigning the required order listeners to the TH element suitable for that column.</p>

                            <div class="table-responsive">
                                <table id="complex_header_table" class="display table table-striped table-bordered" style="width:100%">
                            @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">DOM positioning</h4>

                            <p>When customising DataTables for your own usage, you might find that the default position of the feature elements (filter input etc) is not quite to your liking. To address this issue DataTables takes inspiration from the CSS
                                3 Advanced Layout Module and provides the
                                <a href="//datatables.net/reference/option/dom"><code class="option" title="DataTables initialisation option">dom</code></a> initialisation parameter which can be set to indicate where you wish particular features to appear
                                in the DOM. You can also specify <code>div</code> wrapping containers (with an id and / or class) to provide complete layout flexibility.</p>

                            <div class="table-responsive">
                                <table id="dom_positioning_table" class="display table table-striped table-bordered" style="width:100%">
                                 @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->


                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Alternative pagination</h4>

                            <p>The default page control presented by DataTables (forward and backward buttons with up to 7 page numbers in-between) is fine for most situations, but there are cases where you may wish to customise the options presented to
                                the end user. This is done through DataTables' extensible pagination mechanism, the <a href="//datatables.net/reference/option/pagingType"><code class="option"
            title="DataTables initialisation option">pagingType</code></a> option.</p>

                            <div class="table-responsive">
                                <table id="alternative_pagination_table" class="display table table-striped table-bordered" style="width:100%">
                                 @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Scroll - vertical</h4>

                            <p>This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an alternative method to pagination for displaying a large table in a fairly small vertical area, and as such pagination
                                has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled as well!).</p>

                            <div class="table-responsive">
                                <table id="scroll_vertical_table" class="display table table-striped table-bordered" style="width:100%">
                                @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Scroll - vertical, dynamic height</h4>

                            <p>This example shows a vertically scrolling DataTable that makes use of the CSS3 <code>vh</code> unit in order to dynamically resize the viewport based on the browser window height. The <a href="https://developer.mozilla.org/en/docs/Web/CSS/length#Viewport-percentage_lengths"><code>vh</code>
        unit</a> is effectively a percentage of the browser window height. So the <code>50vh</code> used in this example is 50% of the window height. The viewport size will update dynamically as the window is resized.</p>

                            <div class="table-responsive">
                                <table id="scroll_vertical_dynamic_height_table" class="display table table-striped table-bordered" style="width:100%">
                                  @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->


                <div class="col-md-12 mb-4">
                    <div class="card  text-left">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Scroll - horizontal</h4>


                            <p>DataTables has the ability to show tables with horizontal scrolling, which is very useful for when you have a wide table, but want to constrain it to a limited horizontal display area. To enable x-scrolling simply set the
                                <a href="//datatables.net/reference/option/scrollX"><code class="option" title="DataTables initialisation option">scrollX</code></a> parameter to be whatever you want the container wrapper's width to be (this should be
                                100% in almost all cases with the width being constrained by the container element).</p>
                        </div>
                        <div class="card-body w-80 ml-auto mr-auto">


                            <div class="table-responsive">
                                <table id="scroll_horizontal_table" class="display nowrap table table-striped table-bordered" style="width:100%">
                                @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card  text-left">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Scroll - horizontal and vertical</h4>


                            <p>In this example you can see DataTables doing both horizontal and vertical scrolling at the same time. Note also that pagination is enabled in this example, and the scrolling accounts for this.</p>
                        </div>
                        <div class="card-body w-80 ml-auto mr-auto">


                            <div class="table-responsive">
                                <table id="scroll_horizontal_vertical_table" class="display nowrap table table-striped table-bordered" style="width:100%">
                                @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->


                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Language - Comma decimal place</h4>

                            <p>A dot (<code>.</code>) is used to mark the decimal place in Javascript, however, <a href="http://en.wikipedia.org/wiki/Decimal_mark">many
        parts of the world
        use a comma</a> (<code>,</code>) and other characters such as the Unicode decimal separator (<code>⎖</code>) or a dash (<code>-</code>) are often used to show the decimal place in a displayed number.</p>

                            <div class="table-responsive">
                                <table id="comma_decimal_table" class="display table table-striped table-bordered" style="width:100%">
                                 @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Language options</h4>

                            <p>Changing the language information displayed by DataTables is as simple as passing in a language object to the DataTable constructor. This example shows a different set of English string being used, rather than the defaults.</p>

                            <div class="table-responsive">
                                <table id="language_option_table" class="display table table-striped table-bordered" style="width:100%">
                                  @include('datatables.table_content')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

            </div>
            <!-- end of row -->



@endsection

@section('page-js')

 <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables.script.js')}}"></script>

@endsection

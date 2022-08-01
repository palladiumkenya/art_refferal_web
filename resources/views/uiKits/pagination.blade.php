@extends('layouts.master')

@section('main-content')
     <div class="breadcrumb">
                <h1>Pagination</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>Pagination</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-6">

                    <p>use a large block of connected links for our pagination, making links hard to miss and easily scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available
                        links. Use a wrapping
                        <code>nav</code> element to identify it as a navigation section to screen readers and other assistive technologies.</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Default Pagination</h4>
                            <p>it’s advisable to provide a descriptive <code>aria-label</code> for the <code>nav</code> to reflect its purpose</p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

<div class="col-md-4 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Pagination With Icons</h4>
                            <p>Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with <code>aria</code> attributes and the <code>.sr-only</code> utility.</p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Pagination With Active state</h4>
                            <p>Pagination links are customizable for different circumstances. Use
                                <code>.active</code>for links that appear un-clickable.</p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->
            <div class="row mb-4">
<div class="col-md-4 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Pagination With disabled state</h4>
                            <p>Pagination links are customizable for different circumstances. Use
                                <code>.disabled</code> for links that appear un-clickable.</p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

<div class="col-md-4 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Center Alignment Pagination </h4>
                            <p>Change the alignment of pagination components with flexbox utilities.
                            </p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Right Alignment Pagination </h4>
                            <p>Change the alignment of pagination components with flexbox utilities.
                            </p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->

            <div class="row mb-4">
<div class="col-md-4 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Left Alignment Pagination </h4>
                            <p>Change the alignment of pagination components with flexbox utilities.
                            </p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

<div class="col-md-4 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Large Pagination </h4>
                            <p>Fancy larger pagination? Add <code>.pagination-lg</code> additional size.</p>
                            <nav aria-label="Page navigation example">

                                <ul class="pagination pagination-lg">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Small Pagination </h4>
                            <p>Fancy smaller pagination? Add <code>.pagination-sm</code> additional size.</p>
                            <nav aria-label="Page navigation example">

                                <ul class="pagination pagination-sm">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->
@endsection

@section('page-js')

@endsection

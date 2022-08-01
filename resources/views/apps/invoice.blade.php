@extends('layouts.master')
@section('page-css')
  <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
  <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">
@endsection

@section('main-content')
    <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs justify-content-end mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="invoice-tab" data-toggle="tab" href="#invoice" role="tab"
                                aria-controls="invoice" aria-selected="true">Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit"
                                aria-selected="false">Edit</a>
                        </li>

                    </ul>
                    <div class="card">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                                <div class="d-sm-flex mb-5" data-view="print">
                                    <span class="m-auto"></span>
                                    <button class="btn btn-primary mb-sm-0 mb-3 print-invoice">Print Invoice</button>
                                </div>
                                <!---===== Print Area =======-->
                                <div id="print-area">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="font-weight-bold">Order Info</h4>
                                            <p>#106</p>
                                        </div>
                                        <div class="col-md-6 text-sm-right">
                                            <p><strong>Order status: </strong> Delivered</p>
                                            <p><strong>Order date: </strong> 10 Dec, 2018</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-4 border-top"></div>
                                    <div class="row mb-5">
                                        <div class="col-md-6 mb-3 mb-sm-0">
                                            <h5 class="font-weight-bold">Bill From</h5>
                                            <p>New Age Inc.</p>
                                            <span style="white-space: pre-line">
                                                rodriguez.trent@senger.com
                                                61 Johnson St. Shirley, NY 11967.

                                                +202-555-0170
                                            </span>
                                        </div>
                                        <div class="col-md-6 text-sm-right">
                                            <h5 class="font-weight-bold">Bill To</h5>
                                            <p>UI Lib</p>
                                            <span style="white-space: pre-line">
                                                sales@ui-lib.com
                                                8254 S. Garfield Street. Villa Rica, GA 30180.

                                                +1-202-555-0170
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-hover mb-4">
                                                <thead class="bg-gray-300">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Item Name</th>
                                                        <th scope="col">Unit Price</th>
                                                        <th scope="col">Unit</th>
                                                        <th scope="col">Cost</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Product 1</td>
                                                        <td>300</td>
                                                        <td>2</td>
                                                        <td>600</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Product 2</td>
                                                        <td>200</td>
                                                        <td>3</td>
                                                        <td>600</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="invoice-summary">
                                                <p>Sub total: <span>$1200</span></p>
                                                <p>Vat: <span>$120</span></p>
                                                <h5 class="font-weight-bold">Grand Total: <span> $1320</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--==== / Print Area =====-->
                            </div>
                            <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                                <!--==== Edit Area =====-->
                                <div class="d-flex mb-5">
                                    <span class="m-auto"></span>
                                    <button class="btn btn-primary">Save</button>
                                </div>
                                <form >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="font-weight-bold">Order Info</h4>
                                            <div class="col-sm-4 form-group mb-3 pl-0">
                                                <label for="orderNo">Order Number</label>
                                                <input type="text" class="form-control"
                                                    id="orderNo" placeholder="Enter order number">
                                            </div>
                                        </div>
                                        <div class="col-md-3 offset-md-3 text-right">
                                            <label class="d-block text-12 text-muted">Order Status</label>
                                            <div class="col-md-6 offset-md-6 pr-0 mb-4">
                                                <label class="radio radio-reverse radio-danger">
                                                    <input type="radio" name="orderStatus" value="Pending">
                                                    <span>Pending</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio radio-reverse radio-warning">
                                                    <input type="radio" name="orderStatus" value="Processing">
                                                    <span>Processing</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio radio-reverse radio-success">
                                                    <input type="radio" name="orderStatus" value="Delivered">
                                                    <span>Delivered</span>
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="order-datepicker">Order Date</label>
                                                    <input id="order-datepicker" class="form-control text-right"
                                                        placeholder="yyyy-mm-dd" name="dp">


                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 mb-4 border-top"></div>
                                    <div class="row mb-5">
                                        <div class="col-md-6" >
                                            <h5 class="font-weight-bold">Bill From</h5>
                                            <div class="col-md-10 form-group mb-3 pl-0">
                                                <input type="text" class="form-control" id="billFrom"
                                                    placeholder="Bill From">
                                            </div>
                                            <div class="col-md-10 form-group mb-3 pl-0">
                                                <textarea class="form-control"
                                                    placeholder="Bill From Address"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6 text-right" >
                                            <h5 class="font-weight-bold">Bill To</h5>
                                            <div class="col-md-10 offset-md-2 form-group mb-3 pr-0">
                                                <input type="text" class="form-control text-right"
                                                    id="billFrom2" placeholder="Bill From">
                                            </div>
                                            <div class="col-md-10 offset-md-2 form-group mb-3 pr-0">
                                                <textarea class="form-control text-right"
                                                    placeholder="Bill From Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 table-responsive">
                                            <table class="table table-hover mb-3">
                                                <thead class="bg-gray-300">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Item Name</th>
                                                        <th scope="col">Unit Price</th>
                                                        <th scope="col">Unit</th>
                                                        <th scope="col">Cost</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>
                                                            <input value="Product 1" type="text" class="form-control"
                                                                placeholder="Item Name">
                                                        </td>
                                                        <td>
                                                            <input value="300" type="number" class="form-control"
                                                                placeholder="Unit Price">
                                                        </td>
                                                        <td>
                                                            <input value="2" type="number" class="form-control"
                                                                placeholder="Unit">
                                                        </td>
                                                        <td>600</td>
                                                        <td>
                                                            <button class="btn btn-outline-secondary float-right">Delete</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>
                                                            <input value="Product 1" type="text" class="form-control"
                                                                placeholder="Item Name">
                                                        </td>
                                                        <td>
                                                            <input value="300" type="number" class="form-control"
                                                                placeholder="Unit Price">
                                                        </td>
                                                        <td>
                                                            <input value="2" type="number" class="form-control"
                                                                placeholder="Unit">
                                                        </td>
                                                        <td>600</td>
                                                        <td>
                                                            <button class="btn btn-outline-secondary float-right">Delete</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-primary float-right mb-4">Add Item</button>
                                        </div>

                                        <div class="col-md-12">

                                            <div class="invoice-summary invoice-summary-input">
                                                <p>Sub total: <span>$1200</span></p>
                                                <p class="d-flex align-items-center">Vat(%):<span>
                                                        <input type="text" class="form-control small-input" value="10">$120</span>
                                                </p>
                                                <h5 class="font-weight-bold d-flex align-items-center">Grand Total:
                                                    <span>
                                                        <input type="text" class="form-control small-input" value="$">
                                                        $1320
                                                    </span>
                                                </h5>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <!--==== / Edit Area =====-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>



@endsection

@section('page-js')

 <script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>
<script src="{{asset('assets/js/invoice.script.js')}}"></script>
@endsection

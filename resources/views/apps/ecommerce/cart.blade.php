@extends('layouts.master')
@section('page-css')


@endsection

@section('main-content')

<div class="breadcrumb">
    <h1>Cart</h1>
    <ul>
        <li><a href="">Apps</a></li>
        <li>Ecommerce</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>


<section class="product-cart">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Product Cart</div>
                    <span class="text-muted">Gull Modern Cart</span>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL.</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td scope="row">
                                        <img class="profile-picture avatar-sm mb-2 img-fluid"
                                            src="{{ asset('assets/images/faces/1.jpg') }}" alt="" />
                                        <div class="ul-product-cart__detail d-inline-block align-middle ml-1">
                                            <a href="">
                                                <h6 class="heading">Nike Air Jordan</h6>
                                            </a>
                                            <span class="text-mute">size-14 mode:664</span>
                                        </div>
                                    </td>
                                    <td>$2,000</td>
                                    <td>
                                        <input class="form-control w-25" type="number" value="4" id="" />
                                    </td>
                                    <td>$8,000</td>
                                    <td>
                                        <a href=""><i
                                                class="i-Close-Window text-19 text-danger font-weight-700"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-6 mt-5">
                            <div class="ul-product-cart__invoice">
                                <div class="card-title">
                                    <h4 class="heading text-primary">Total Payment</h4>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-16">Subtotal</th>
                                            <td class="text-16 text-success font-weight-700">
                                                $5,000
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-16">Shipping</th>
                                            <td>
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <div class="">
                                                            <label class="radio radio-primary" checked>
                                                                <input type="radio" name="radio" value="0" />
                                                                <span>Shipping Charge : $15.00</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="">
                                                            <label class="radio radio-primary">
                                                                <input type="radio" name="radio" value="0" />
                                                                <span>Shipping Charge : $15.00</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="" class="text-dark font-weight-bold">Change Address</a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-primary text-16">
                                                Total:
                                            </th>
                                            <td class="font-weight-700 text-16">$5,015</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="ul-product-cart__button text-right">
                                    <button type="button" class="btn btn-primary ripple m-1">
                                        Checkout
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('page-js')



@endsection
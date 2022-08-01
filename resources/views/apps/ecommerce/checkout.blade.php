@extends('layouts.master')
@section('page-css')


@endsection

@section('main-content')

<div class="breadcrumb">
    <h1>Checkout</h1>
    <ul>
        <li><a href="">Apps</a></li>
        <li>Ecommerce</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>


<section class="chekout-page">
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Product Cart</div>
            <span class="text-muted">Gull Modern Cart</span>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td scope="row">
                      <img class="profile-picture avatar-sm mb-2 img-fluid" src="{{ asset('assets/images/faces/1.jpg') }}"
                        alt="" />
                      <div class="ul-product-cart__detail d-inline-block align-middle ">
                        <a href="">
                          <h6 class="heading">Nike Air Jordan</h6>
                        </a>
                        <span class="text-mute">size-14 mode:664</span>
                      </div>
                    </td>
                    <td>$2,000</td>
                    <td>4</td>
                    <td>$8,000</td>
                    <td>
                      <a href=""><i class="i-Close-Window text-19 text-danger font-weight-700"></i></a>
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="row">
                      <img class="profile-picture avatar-sm mb-2 img-fluid" src="{{ asset('assets/images/faces/2.jpg') }}"
                        alt="" />
                      <div class="ul-product-cart__detail d-inline-block align-middle ">
                        <a href="">
                          <h6 class="heading">Nike Air Jordan</h6>
                        </a>
                        <span class="text-mute">size-14 mode:664</span>
                      </div>
                    </td>
                    <td>$2,000</td>
                    <td>4</td>
                    <td>$8,000</td>
                    <td>
                      <a href=""><i class="i-Close-Window text-19 text-danger font-weight-700"></i></a>
                    </td>
                  </tr>
                  <tr class="">
                    <td scope="row">
                      <img class="profile-picture avatar-sm mb-2 img-fluid" src="{{ asset('assets/images/faces/3.jpg') }}"
                        alt="" />
                      <div class="ul-product-cart__detail d-inline-block align-middle ">
                        <a href="">
                          <h6 class="heading">Nike Air Jordan</h6>
                        </a>
                        <span class="text-mute">size-14 mode:664</span>
                      </div>
                    </td>
                    <td>$2,000</td>
                    <td>4</td>
                    <td>$8,000</td>
                    <td>
                      <a href=""><i class="i-Close-Window text-19 text-danger font-weight-700"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row ">
              <div class="col-lg-12 mt-5">
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
                                <label class="radio radio-primary" checked="">
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <form action="">
              <div class="card-body">
                <div class="card-title">Delivery Address</div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputtext11" class="ul-form__label">First Name:</label>
                    <input type="text" class="form-control" id="inputtext11" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail12" class="ul-form__label">Last Name:</label>
                    <input type="text" class="form-control" id="inputEmail12" />
                  </div>
                </div>

                <div class="custom-separator"></div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputtext14" class="ul-form__label">Delivery Address:</label>
                    <input type="text" class="form-control" id="inputtext14" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail15" class="ul-form__label">Address:</label>
                    <div class="input-right-icon">
                      <input type="text" class="form-control" id="inputEmail15" />
                    </div>
                  </div>
                </div>

                <div class="custom-separator"></div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputtext14" class="ul-form__label">City:</label>
                    <input type="text" class="form-control" id="inputtext14" />
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputEmail15" class="ul-form__label">State:</label>
                    <select class="form-control" id="sel1">
                      <option>Select</option>
                      <option>California</option>
                      <option>Ukraine</option>
                      <option>UK</option>
                      <option>Finland</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputEmail16" class="ul-form__label">Country:</label>
                    <select class="form-control" id="sel1">
                      <option>Select</option>
                      <option>USA</option>
                      <option>UK</option>
                      <option>Finland</option>
                    </select>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="card mt-4">
          <div class="card-body">
            <div class="card-title">Billing Details</div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-basic-tab" data-toggle="tab" href="#homeBasic" role="tab"
                  aria-controls="homeBasic" aria-selected="true">
                  <i class="i-Credit-Card-2 text-danger text-16 align-middle mr-1"></i>
                  <span>credit card</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-basic-tab" data-toggle="tab" href="#profileBasic" role="tab"
                  aria-controls="profileBasic" aria-selected="false">
                  <i class="i-Paypal text-primary text-16 align-middle mr-1"></i>
                  <span>Paypal</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#contactBasic" role="tab"
                  aria-controls="contactBasic" aria-selected="false">
                  <i class="i-Bitcoin text-warning text-16 align-middle mr-1"></i>
                  <span>Bitcoin</span>
                </a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="homeBasic" role="tabpanel"
                aria-labelledby="home-basic-tab">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputtext11" class="ul-form__label">Card Number:</label>
                    <input type="text" class="form-control" id="inputtext11" value="card number" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail12" class="ul-form__label">Full Name:</label>
                    <input type="text" class="form-control" id="inputEmail12" value="full name" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputtext11" class="ul-form__label">Ex Date:</label>
                    <input type="text" class="form-control" id="inputtext11" value="dd/mm/yy" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail12" class="ul-form__label">CCV:</label>
                    <input type="text" class="form-control" id="inputEmail12" value="CVC" />
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="profileBasic" role="tabpanel" aria-labelledby="profile-basic-tab">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputtext11" class="ul-form__label">Card Number:</label>
                    <input type="text" class="form-control" id="inputtext11" value="card number" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail12" class="ul-form__label">Full Name:</label>
                    <input type="text" class="form-control" id="inputEmail12" value="full name" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputtext11" class="ul-form__label">Ex Date:</label>
                    <input type="text" class="form-control" id="inputtext11" value="dd/mm/yy" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail12" class="ul-form__label">CCV:</label>
                    <input type="text" class="form-control" id="inputEmail12" value="CVC" />
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="contactBasic" role="tabpanel" aria-labelledby="contact-basic-tab">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputtext11" class="ul-form__label">Card Number:</label>
                    <input type="text" class="form-control" id="inputtext11" value="card number" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail12" class="ul-form__label">Full Name:</label>
                    <input type="text" class="form-control" id="inputEmail12" value="full name" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputtext11" class="ul-form__label">Ex Date:</label>
                    <input type="text" class="form-control" id="inputtext11" value="dd/mm/yy" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail12" class="ul-form__label">CCV:</label>
                    <input type="text" class="form-control" id="inputEmail12" value="CVC" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row text-right">
              <div class="col-lg-12 ">
                <button type="button" class="btn btn-success m-1">
                  Pay Now
                </button>
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
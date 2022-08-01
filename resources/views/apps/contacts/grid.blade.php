@extends('layouts.master')
@section('page-css')


@endsection

@section('main-content')

<div class="breadcrumb">
  <h1>Grid</h1>
  <ul>
    <li><a href="">Apps</a></li>
    <li>Contacts</li>
  </ul>
</div>
<div class="separator-breadcrumb border-top"></div>


<section class="ul-contact-page">
  <div class="row">
      <div class="col-lg-12 col-md-12 mb-4">
          <div class="form-group ul-form-group d-flex align-items-center">
              <input type="text" class="form-control ul-form-input" placeholder="Enter your name.....">
          </div>
      </div>
      <div class="col-lg-4 col-xl-4 mb-3">
          <div class="card">
              <div class="card-body">
                  <div class="ul-contact-page__profile">
                      <div class="user-profile">
                          <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                      </div>
                      <div class="ul-contact-page__info">
                          <p class="m-0 text-24">Timothy Carlson</p>
                          <p class="text-muted m-0">Digital Marketer</p>
                          <p class="text-muted mt-3">DieSachbearbeiter
                                  Choriner Straße 49
                                  10435 Berlin</p>

                          <p class="text-muted mt-3">NO: 234-987-665-340</p>
                      
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-4 col-xl-4  mb-3">
              <div class="card">
                  <div class="card-body">
                      <div class="ul-contact-page__profile">
                          <div class="user-profile">
                              <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                          </div>
                          <div class="ul-contact-page__info">
                              <p class="m-0 text-24">Jaret Leto</p>
                              <p class="text-muted m-0">Web Developer</p>
                              <p class="text-muted mt-3">DieSachbearbeiter
                                      Choriner Straße 49
                                      10435 Berlin</p>

                              <p class="text-muted mt-3">NO: 234-987-665-340</p>
                          
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      <div class="col-lg-4 col-xl-4 mb-3">
          <div class="card">
              <div class="card-body">
                  <div class="ul-contact-page__profile">
                      <div class="user-profile">
                          <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                      </div>
                      <div class="ul-contact-page__info">
                          <p class="m-0 text-24">Timothy Carlson</p>
                          <p class="text-muted m-0">Digital Marketer</p>
                          <p class="text-muted mt-3">DieSachbearbeiter
                                  Choriner Straße 49
                                  10435 Berlin</p>

                          <p class="text-muted mt-3">NO: 234-987-665-340</p>
                      
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-4 col-xl-4  mb-3">
              <div class="card">
                  <div class="card-body">
                      <div class="ul-contact-page__profile">
                          <div class="user-profile">
                              <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                          </div>
                          <div class="ul-contact-page__info">
                              <p class="m-0 text-24">Jaret Leto</p>
                              <p class="text-muted m-0">Web Developer</p>
                              <p class="text-muted mt-3">DieSachbearbeiter
                                      Choriner Straße 49
                                      10435 Berlin</p>

                              <p class="text-muted mt-3">NO: 234-987-665-340</p>
                          
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      <div class="col-lg-4 col-xl-4 mb-3">
          <div class="card">
              <div class="card-body">
                  <div class="ul-contact-page__profile">
                      <div class="user-profile">
                          <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                      </div>
                      <div class="ul-contact-page__info">
                          <p class="m-0 text-24">Timothy Carlson</p>
                          <p class="text-muted m-0">Digital Marketer</p>
                          <p class="text-muted mt-3">DieSachbearbeiter
                                  Choriner Straße 49
                                  10435 Berlin</p>

                          <p class="text-muted mt-3">NO: 234-987-665-340</p>
                      
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-4 col-xl-4  mb-3">
              <div class="card">
                  <div class="card-body">
                      <div class="ul-contact-page__profile">
                          <div class="user-profile">
                              <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                          </div>
                          <div class="ul-contact-page__info">
                              <p class="m-0 text-24">Jaret Leto</p>
                              <p class="text-muted m-0">Web Developer</p>
                              <p class="text-muted mt-3">DieSachbearbeiter
                                      Choriner Straße 49
                                      10435 Berlin</p>

                              <p class="text-muted mt-3">NO: 234-987-665-340</p>
                          
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      <div class="col-lg-4 col-xl-4 mb-3">
          <div class="card">
              <div class="card-body">
                  <div class="ul-contact-page__profile">
                      <div class="user-profile">
                          <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/1.jpg') }}" alt="">
                      </div>
                      <div class="ul-contact-page__info">
                          <p class="m-0 text-24">Timothy Carlson</p>
                          <p class="text-muted m-0">Digital Marketer</p>
                          <p class="text-muted mt-3">DieSachbearbeiter
                                  Choriner Straße 49
                                  10435 Berlin</p>

                          <p class="text-muted mt-3">NO: 234-987-665-340</p>
                      
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-4 col-xl-4  mb-3">
              <div class="card">
                  <div class="card-body">
                      <div class="ul-contact-page__profile">
                          <div class="user-profile">
                              <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/2.jpg') }}" alt="">
                          </div>
                          <div class="ul-contact-page__info">
                              <p class="m-0 text-24">Jaret Leto</p>
                              <p class="text-muted m-0">Web Developer</p>
                              <p class="text-muted mt-3">DieSachbearbeiter
                                      Choriner Straße 49
                                      10435 Berlin</p>

                              <p class="text-muted mt-3">NO: 234-987-665-340</p>
                          
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/3.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/4.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-xl-4  mb-3">
                  <div class="card">
                      <div class="card-body">
                          <div class="ul-contact-page__profile">
                              <div class="user-profile">
                                  <img class="profile-picture mb-2" src="{{ asset('assets/images/faces/5.jpg') }}" alt="">
                              </div>
                              <div class="ul-contact-page__info">
                                  <p class="m-0 text-24">Timothy Carlson</p>
                                  <p class="text-muted m-0">Digital Marketer</p>
                                  <p class="text-muted mt-3">DieSachbearbeiter
                                          Choriner Straße 49
                                          10435 Berlin</p>

                                  <p class="text-muted mt-3">NO: 234-987-665-340</p>
                              
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
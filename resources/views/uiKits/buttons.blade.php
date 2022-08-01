@extends('layouts.master')

@section('main-content')
    <div class="breadcrumb">
                <h1>Buttons</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Buttons</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">Default Buttons</div>
                            <button type="button" class="btn btn-primary ripple m-1">Primary</button>
                            <button type="button" class="btn btn-success m-1">Success</button>
                            <button type="button" class="btn btn-danger m-1">Danger</button>
                            <button type="button" class="btn btn-warning m-1">Warning</button>
                            <button type="button" class="btn btn-info m-1">Info</button>
                            <button type="button" class="btn btn-light m-1">Light</button>
                            <button type="button" class="btn btn-dark ripple m-1">Dark</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">Buttons Rounded</div>
                            <button type="button" class="btn btn-primary btn-rounded m-1">Primary</button>
                            <button type="button" class="btn btn-success btn-rounded m-1">Success</button>
                            <button type="button" class="btn btn-danger btn-rounded m-1">Danger</button>
                            <button type="button" class="btn btn-warning btn-rounded m-1">Warning</button>
                            <button type="button" class="btn btn-info btn-rounded m-1">Info</button>
                            <button type="button" class="btn btn-light btn-rounded m-1">Light</button>
                            <button type="button" class="btn btn-dark btn-rounded m-1">Dark</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">Buttons Raised</div>
                            <button type="button" class="btn btn-raised btn-raised-primary m-1">Primary</button>
                            <button type="button" class="btn btn-raised btn-raised-secondary m-1">Secondary</button>
                            <button type="button" class="btn btn-raised btn-raised-success m-1">Success</button>
                            <button type="button" class="btn btn-raised btn-raised-danger m-1">Danger</button>
                            <button type="button" class="btn btn-raised btn-raised-warning m-1">Warning</button>
                            <button type="button" class="btn btn-raised btn-raised-info m-1">Info</button>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">
                                Buttons outline
                            </div>
                            <button type="button" class="btn btn-outline-primary m-1">Primary</button>
                            <button type="button" class="btn btn-outline-secondary m-1">Secondary</button>
                            <button type="button" class="btn btn-outline-success m-1">Success</button>
                            <button type="button" class="btn btn-outline-danger m-1">Danger</button>
                            <button type="button" class="btn btn-outline-warning m-1">Warning</button>
                            <button type="button" class="btn btn-outline-info m-1">Info</button>
                            <button type="button" class="btn btn-outline-dark m-1">Dark</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">Button block</div>
                            <button type="button" class="btn btn-primary btn-block m-1 mb-3">Primary</button>
                            <button type="button" class="btn btn-success btn-block m-1 mb-3">Success</button>
                            <button type="button" class="btn btn-warning btn-block m-1 mb-3">Warning</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">Large & Small Buttons</div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary btn-sm m-1">Primary</button>
                                <button type="button" class="btn btn-success btn-sm m-1">Success</button>
                                <button type="button" class="btn btn-warning btn-sm m-1">Warning</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-lg btn-primary m-1">Primary</button>
                                <button type="button" class="btn btn-success btn-lg m-1">Success</button>
                                <button type="button" class="btn btn-warning btn-lg m-1">Warning</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-xl btn-primary m-1">Primary</button>
                                <button type="button" class="btn btn-success btn-xl m-1">Success</button>
                                <button type="button" class="btn btn-warning btn-xl m-1">Warning</button>
                            </div>
                        </div>
                    </div>


                </div>



                <div class="col-md-6">
                    <div class="mb-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="card-title card-title--margin">Styles- <span class="card-subtitle mb-4 text-muted">Button with Icons</span></div>


                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary btn-icon m-1">
                                            <span class="ul-btn__icon"><i class="i-Gear-2"></i></span>
                                            <span class="ul-btn__text">With Icon</span>
                                        </button>
                                    <button type="button" class="btn btn-info btn-icon m-1">
                                            <span class="ul-btn__icon"><i class="i-RSS"></i></span>
                                        </button>

                                    <button type="button" class="btn btn-success btn-icon m-1">
                                                Button
                                             </button>
                                    <button type="button" class="btn btn-outline-danger btn-icon m-1">
                                                <span class="ul-btn__icon"><i class="i-Shutter"></i></span>
                                        </button>
                                    <button type="button" class="btn btn-warning btn-icon m-1">
                                                <span class="ul-btn__icon"><i class="i-Atom"></i></span>
                                                <span class="ul-btn__text">Atom</span>
                                            </button>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">Buttons Ripple</div>
                            <button type="button" class="btn btn-raised ripple btn-raised-primary m-1">Primary</button>
                            <button type="button" class="btn btn-raised ripple btn-raised-secondary m-1">Secondary</button>
                            <button type="button" class="btn btn-raised ripple btn-raised-success m-1">Success</button>
                            <button type="button" class="btn btn-raised ripple btn-raised-danger m-1">Danger</button>
                            <button type="button" class="btn btn-raised ripple btn-raised-warning m-1">Warning</button>
                            <button type="button" class="btn btn-raised ripple btn-raised-info m-1">Info</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">
                                Button group
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary">Left</button>
                                <button type="button" class="btn btn-secondary">Middle</button>
                                <button type="button" class="btn btn-secondary">Right</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title card-title--margin">Social</div>

                            <div class="ul-bottom__line mb-3">
                                <button type="button" class="btn btn-facebook btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Facebook-2"></i></span>
                                      <span class="ul-btn__text">Facebook</span>
                                  </button>
                                <button type="button" class="btn btn-google btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Google-Plus"></i></span>
                                      <span class="ul-btn__text">Google +</span>
                                  </button>

                                <button type="button" class="btn btn-twitter btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Twitter"></i></span>
                                      <span class="ul-btn__text">Twitter</span>
                                  </button>

                                <button type="button" class="btn btn-instagram btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Instagram"></i></span>
                                      <span class="ul-btn__text">Instagram</span>
                                  </button>

                                <button type="button" class="btn btn-linkedin btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Linkedin-2"></i></span>
                                      <span class="ul-btn__text">Linkedin</span>
                                  </button>

                                <button type="button" class="btn btn-dribble btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Dribble"></i></span>
                                      <span class="ul-btn__text">Dribble</span>
                                  </button>

                                <button type="button" class="btn btn-youtube btn-icon m-1">
                                          <span class="ul-btn__icon"><i class="i-Youtube"></i></span>
                                          <span class="ul-btn__text">Youtube</span>
                                      </button>
                            </div>


                            <div class="ul-bottom__line mb-3">
                                <button type="button" class="btn btn-facebook btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Facebook-2"></i></span>
                                  </button>
                                <button type="button" class="btn btn-google btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Google-Plus"></i></span>
                                  </button>
                                <button type="button" class="btn btn-twitter btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Twitter"></i></span>
                                  </button>
                                <button type="button" class="btn btn-instagram btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Instagram"></i></span>
                                  </button>
                                <button type="button" class="btn btn-linkedin btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Linkedin-2"></i></span>
                                  </button>
                                <button type="button" class="btn btn-dribble btn-icon m-1">
                                          <span class="ul-btn__icon"><i class="i-Dribble"></i></span>
                                  </button>
                                <button type="button" class="btn btn-youtube btn-icon m-1">
                                          <span class="ul-btn__icon"><i class="i-Youtube"></i></span>
                                  </button>


                            </div>

                            <div class="ul-bottom__line mb-3">
                                <button type="button" class="btn round btn-facebook btn-icon rounded-circle m-1">
                                          <span class="ul-btn__icon"><i class="i-Facebook-2"></i></span>
                                      </button>
                                <button type="button" class="btn round btn-google btn-icon rounded-circle m-1">
                                          <span class="ul-btn__icon"><i class="i-Google-Plus"></i></span>
                                      </button>
                                <button type="button" class="btn round btn-twitter btn-icon rounded-circle m-1">
                                          <span class="ul-btn__icon"><i class="i-Twitter"></i></span>
                                      </button>
                                <button type="button" class="btn round btn-instagram btn-icon rounded-circle m-1">
                                          <span class="ul-btn__icon"><i class="i-Instagram"></i></span>
                                      </button>
                                <button type="button" class="btn round btn-linkedin btn-icon rounded-circle m-1">
                                          <span class="ul-btn__icon"><i class="i-Linkedin-2"></i></span>
                                      </button>
                                <button type="button" class="btn round btn-dribble btn-icon rounded-circle m-1">
                                              <span class="ul-btn__icon"><i class="i-Dribble"></i></span>
                                      </button>
                                <button type="button" class="btn btn-youtube btn-icon rounded-circle m-1">
                                              <span class="ul-btn__icon"><i class="i-Youtube"></i></span>
                                      </button>


                            </div>


                        </div>
                    </div>
                </div>



            </div>
@endsection

@section('page-js')

@endsection

<!-- ============ Customizer ============= -->
<div class="customizer">
    <div class="handle" (click)="isOpen = !isOpen">
        <i class="i-Gear spin"></i>
    </div>
    <div class="customizer-body" data-perfect-scrollbar data-suppress-scroll-x="true">
        <div class="accordion" id="accordionCustomizer">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <p class="mb-0">
                        Sidebar Layout
                    </p>
                </div>

                {{-- <div id="collapseOne" class="collapse show" aria-labelledby="headingThree"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">

                        <div class="">
                            <a title="Compact Sidebar" href="{{route('compact')}}" class="btn btn-primary"> Compact
                Sidebar </a>
                <a title="Horizontal Layout" href="{{route('horizontal')}}" class="btn btn-primary">
                    Horizontal Layout </a>
            </div>
        </div>
    </div> --}}

    <div class="card-body">
        <div class="layouts">

            <!---->
            <div class="layout-box mb-4 {{ Session::get('layout') == 'compact' ? 'active' : '' }}">
                <a href="{{route('compact')}}">
                    <img alt="" src="{{ asset('assets/images/screenshots/02_preview.png') }}" /><i class="i-Eye"></i>
                </a>
            </div>
            <div
                class="layout-box mb-4 {{ Session::get('layout') == 'normal' || Session::get('layout') == ''  ? 'active' : '' }}">
                <a href="{{route('normal')}}">
                    <img alt="" src="{{ asset('assets/images/screenshots/04_preview.png') }}" /><i class="i-Eye"></i>
                </a>
            </div>
            <div class="layout-box mb-4 {{ Session::get('layout') == 'horizontal'   ? 'active' : '' }}">
                <a href="{{route('horizontal')}}">
                    <img alt="" src="{{ asset('assets/images/screenshots/horizontal.png') }}" /><i class="i-Eye"></i>
                </a>
            </div>
            <div class="layout-box mb-4 mt-30 {{ Session::get('layout') == 'vertical' ? 'active' : '' }}">
                <a href="{{route('vertical')}}">
                    <span class="badge badge-danger p-1">New</span>

                    <img alt="" src="{{ asset('assets/images/screenshots/verticallayout.png') }}" />

                    <i class="i-Eye"></i>
                </a>
            </div>
        </div>
        <div class="text-center pt-3">More layouts coming...</div>
    </div>
    <div class="card {{ Session::get('layout')=='compact'?'d-block':'d-none' }}">
        <div class="card-header" id="headingOne">
            <p class="mb-0">
                Sidebar Colors
            </p>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCustomizer">
            <div class="card-body">
                <div class="colors sidebar-colors">
                    <a class="color gradient-purple-indigo" data-sidebar-class="sidebar-gradient-purple-indigo">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color gradient-black-blue" data-sidebar-class="sidebar-gradient-black-blue">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color gradient-black-gray" data-sidebar-class="sidebar-gradient-black-gray">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color gradient-steel-gray" data-sidebar-class="sidebar-gradient-steel-gray">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color dark-purple active" data-sidebar-class="sidebar-dark-purple">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color slate-gray" data-sidebar-class="sidebar-slate-gray">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color midnight-blue" data-sidebar-class="sidebar-midnight-blue">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color blue" data-sidebar-class="sidebar-blue">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color indigo" data-sidebar-class="sidebar-indigo">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color pink" data-sidebar-class="sidebar-pink">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color red" data-sidebar-class="sidebar-red">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color purple" data-sidebar-class="sidebar-purple">
                        <i class="i-Eye"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingTwo">
        <p class="mb-0">
            RTL
        </p>
    </div>

    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionCustomizer">
        <div class="card-body">
            <label class="checkbox checkbox-primary">
                <input type="checkbox" id="rtl-checkbox">
                <span>Enable RTL</span>
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>

{{-- dark mode --}}
<div class="card">
    <div class="card-header" id="headingTwo">
        <p class="mb-0">
            Dark Version
        </p>
    </div>

    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionCustomizer">
        <div class="card-body">
            <label class="checkbox checkbox-primary">
                <input type="checkbox" id="dark-checkbox">
                <span>Enable Dark Mode</span>
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>
{{-- <div class="card">
                    <div class="card-header" id="headingThree">
                        <p class="mb-0">
                            Bootstrap Colors
                        </p>
                    </div>

                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionCustomizer">
                        <div class="card-body">
                            <div class="bootstrap-colors colors">
                                <a title="lite-purple" class="color purple"> </a>
                                <a title="lite-blue" class="color blue"> </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

</div>
</div>
</div>
<!-- ============ End Customizer ============= -->
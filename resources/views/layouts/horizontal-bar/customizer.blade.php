<!-- ============ Customizer ============= -->
<div class="customizer open">
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

                <div id="collapseOne" class="collapse show" aria-labelledby="headingThree"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">
                        <div class="">
                            <a title="Compact Sidebar" href="{{route('compact')}}" class="btn btn-primary"> Compact
                                Sidebar </a>
                            <a title="Compact Sidebar" href="{{route('normal')}}" class="btn btn-primary"> Normal
                                Sidebar </a>
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

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionCustomizer">
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

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionCustomizer">
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
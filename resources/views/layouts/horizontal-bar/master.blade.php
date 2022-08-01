<!-- ============ Horizontal Layout start ============= -->

<div class="app-admin-wrap layout-horizontal-bar clearfix">
    @include('layouts.horizontal-bar.header')

    <!-- ============ end of header menu ============= -->



    @include('layouts.horizontal-bar.menu')

    <!-- ============ end of left sidebar ============= -->

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap  d-flex flex-column   flex-grow-1">
        <div class="container">
            <div class="main-content">
                @yield('main-content')
            </div>
        </div>
        <div class="flex-grow-1"></div>
        @include('layouts.common.footer')
    </div>
    <!-- ============ Body content End ============= -->
</div>
<!--=============== End app-admin-wrap ================-->

<!-- ============ Search UI Start ============= -->
@include('layouts.common.search')
<!-- ============ Search UI End ============= -->

{{-- @include('layouts.horizontal-customizer') --}}


<!-- ============ Horizontal Layout End ============= -->
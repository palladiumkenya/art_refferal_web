<!-- ============ Compact Layout start ============= -->


<div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple sidenav-open clearfix">
    @include('layouts.compact-vertical-sidebar.sidebar')

    <!-- ============ end of left sidebar ============= -->


    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap d-flex flex-column  flex-grow-1">
        @include('layouts.compact-vertical-sidebar.header')

        <!-- ============ end of header menu ============= -->
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
@include('layouts..common.search')
<!-- ============ Search UI End ============= -->

{{-- @include('layouts.compact-customizer') --}}



<!-- ============ Compact Layout End ============= -->
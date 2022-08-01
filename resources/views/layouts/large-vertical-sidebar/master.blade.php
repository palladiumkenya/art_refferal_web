<!-- ============ Large SIdebar Layout start ============= -->

<div class="app-admin-wrap layout-sidebar-large clearfix">
    @include('layouts.large-vertical-sidebar.header')

    <!-- ============ end of header menu ============= -->

    @include('layouts.large-vertical-sidebar.sidebar')

    <!-- ============ end of left sidebar ============= -->

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column flex-grow-1">
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




<!-- ============ Large Sidebar Layout End ============= -->
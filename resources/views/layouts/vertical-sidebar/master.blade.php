<!-- ============ Vetical SIdebar Layout start ============= -->

<div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
    @include('layouts.vertical-sidebar.sidebar')
    <div class="main-content-wrap  mobile-menu-content bg-off-white m-0 d-flex flex-column  flex-grow-1">
        @include('layouts.vertical-sidebar.header')

        <div class="container">
            <div class="main-content pt-4">
                @yield('main-content')
            </div>
        </div>
        <div class="flex-grow-1"></div>
        @include('layouts.common.footer')

    </div>

    <div class="sidebar-overlay open"></div>
</div>




<!-- ============ Vetical SIdebar Layout End ============= -->
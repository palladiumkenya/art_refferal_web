    <div class="main-header">
        <div class="logo">
            <img src="{{asset('assets/images/moh.png')}}" alt="">
        </div>

        <div class="menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="d-flex align-items-center">
            <!-- Mega menu -->
            <div class="dropdown mega-menu d-none d-md-block">
                <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Main Menu</a>
                <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                    <div class="row m-0">

                        <div class="col-md-6 p-4">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">MENU</p>
                            <div class="menu-icon-grid w-auto p-0">
                                <a href="/home"><i class="i-Home1"></i> Home</a>
                                <a href="{{route('patients.search')}}"><i class="i-Find-User"></i> Patient Search</a>
                                <a href="{{route('providers.list')}}"><i class="i-Doctor"></i> Providers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown mega-menu d-none d-md-block">
                <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administration</a>
                <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                    <div class="row m-0">

                        <div class="col-md-5 p-4">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">MENU</p>
                            <div class="menu-icon-grid w-auto p-0">

                                <a href="{{ route('facilities.index') }}"><i class="i-Library"></i> Facilities</a>

                                <a href="{{route('user')}}"><i class="i-Checked-User"></i> Users</a>

                                @can('role-list')
                                <a href="{{ route('roles.index') }}"><i class="i-Check"></i> Roles</a>
                                @endcan
                                @can('permission-list')
                                <a href="{{ route('permissions.index') }}"><i class="i-Unlock-2"></i> Permissions</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown mega-menu d-none d-md-block">
                <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>
                <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                    <div class="row m-0">

                        <div class="col-md-6 p-4">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">MENU</p>
                            <div class="menu-icon-grid w-auto p-0">

                                <a href="/referral"><i class="i-Library"></i> Referral</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Mega menu -->
            <!-- <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div> -->
        </div>

        <div style="margin: auto"></div>

        <div class="header-part-right">

            <div class="dropdown">

                <!-- Notification dropdown -->

            </div>
            <!-- Notificaiton End -->

            <!-- User avatar dropdown -->
            <div class="dropdown">
                <div class="user col align-self-end">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-header">
                            {{ Auth::user()->name }}
                        </div>
                        <a class="dropdown-item">Account settings</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Sign out</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- header top menu end -->

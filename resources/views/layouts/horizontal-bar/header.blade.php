    <div class="main-header">
        <div class="logo">
            <img src="{{asset('assets/images/logo.png')}}" alt="">
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

                        <div class="col-md-4 p-4">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">MENU</p>
                            <div class="menu-icon-grid w-auto p-0">
                                <a href="{{route('home')}}"><i class="i-Shop-4"></i> Home</a>
                                <a href="{{route('user')}}"><i class="i-Library"></i> Users</a>
                                <a href="#"><i class="i-Drop"></i> Roles</a>

                            </div>
                        </div>
                        <div class="col-md-4 p-4">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">Reports</p>
                            <ul class="links">
                                <li><a href="accordion.html">Report One</a></li>
                                <li><a href="alerts.html">Report Two</a></li>
                                <li><a href="buttons.html">Report Three</a></li>
                            </ul>
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
                    <img src="{{asset('assets/images/profile.png')}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-header">
                            <i class="i-Lock-User mr-1"></i>
                        </div>
                        <a class="dropdown-item">Account settings</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Sign out</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- header top menu end -->
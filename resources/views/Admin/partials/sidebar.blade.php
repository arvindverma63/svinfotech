<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            {{-- <div class="main-menu-header">
                <img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                <div class="user-details">
                    <span>John Doe</span>
                    <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                </div>
            </div>

            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="#"><i class="ti-user"></i>View Profile</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a href="{{route('logout')}}"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div> --}}
        <ul class="pcoded-item pcoded-left-item mt-4">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{route('report')}}">
                    <span class="pcoded-micon"><i class=" ti-layout-grid2-alt"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Enquiries</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.jobs')}}">
                    <span class="pcoded-micon"><i class="ti-calendar"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Jobs</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{route('logout')}}">
                    <span class="pcoded-micon"><i class="ti-back-left"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Logout</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>


        </ul>
            </li>
        </ul>
    </div>
</nav>

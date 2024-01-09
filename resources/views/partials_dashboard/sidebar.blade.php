<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            
            <div class="">
                <div class="main-menu-header">
                    {{-- <img class="img-radius" src="{{asset('assets_dashboard/images/user/')}}" alt="User-Profile-Image"> --}}
                    <div class="user-details">
                        <span>{{ Auth::user()->name }}</span>
                        <div id="more-details">Admin<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href='{{ url("")}}' class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Home</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Country</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href='{{ url("country-create")}}'>Add</a></li>
                        <li><a href='{{ url("country-index")}}'>Show</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">City</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href='{{ url("city-create")}}'>Add</a></li>
                        <li><a href='{{ url("city-index")}}'>Show</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Airport</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href='{{ url("airport-create")}}'>Add</a></li>
                        <li><a href='{{ url("airport-index")}}'>Show</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Airline</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href='{{ url("airline-create")}}'>Add</a></li>
                        <li><a href='{{ url("airline-index")}}'>Show</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Airplane</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href='{{ url("airplane-create")}}'>Add</a></li>
                        <li><a href='{{ url("airplane-index")}}'>Show</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Direction</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href='{{ url("direction-create")}}'>Add</a></li>
                        <li><a href='{{ url("direction-index")}}'>Show</a></li>
                    </ul>
                </li>
            </ul>
            
            {{-- <div class="card text-center">
                <div class="card-block">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="feather icon-sunset f-40"></i>
                    <h6 class="mt-3">Upgrade To Pro</h6>
                    <p>Please contact us on our email for need any support</p>
                    <a href="https://1.envato.market/PgJNQ" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade</a>
                </div>
            </div> --}}
            
        </div>
    </div>
</nav>
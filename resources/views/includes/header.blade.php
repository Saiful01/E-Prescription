<div class="header">

    <!-- Logo -->
    <div class="header-left">
        <a href="/dashboard" class="logo">
           {{-- <img src="/assets/img/logo.png" alt="Logo">--}}
            <h4 class="text-black-50" style="padding-top: 13px">Admin Panel</h4>
        </a>
        <a href="/dashboard" class="logo logo-small">
            <img src="/assets/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <!-- /Logo -->

    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>

    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->

    <!-- Header Right Menu -->
    <ul class="nav user-menu">

        <!-- Notifications -->
        {{-- <li class="nav-item dropdown noti-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">

                </div>
                <div class="topnav-dropdown-footer">
                    <a href="#">View all Notifications</a>
                </div>
            </div>
        </li> --}}
        <!-- /Notifications -->

        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img"><img class="rounded-circle" src="/images/user/{{Auth::user()->profile_pic}}"  width="31" alt="{{Auth::user()->full_name}}"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="/images/user/{{Auth::user()->profile_pic}}" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>{{Auth::user()->full_name}}</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="/view/profile">My Profile</a>
                <a class="dropdown-item" href="/logout">Logout</a>
            </div>
        </li>
        <!-- /User Menu -->

    </ul>
    <!-- /Header Right Menu -->

</div>

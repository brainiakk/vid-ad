<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <a class="navbar-brand" href="{{ url('advertise/dashboard') }}">{{ \Config::get('app.name') }}</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('advertise/dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('advertise/advt-mgmt') }}">Campaign</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Assets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Reporting</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto navbar-right-top">
        <li class="nav-item">
            <div id="custom-search" class="top-search-bar">
                <input class="form-control" type="text" placeholder="Search..">
            </div>
        </li>
        <li class="nav-item dropdown notification">
            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                    class="indicator"></span></a>
            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                <li>
                    <div class="notification-title">Notification</div>
                    <div class="notification-list">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                <div class="notification-info">
                                    <div class="notification-list-user-img"><img src="{{ asset('assets/images/avatar-2.jpg') }}"
                                            alt="" class="user-avatar-md rounded-circle"></div>
                                    <div class="notification-list-user-block"><span
                                            class="notification-list-user-name">Jeremy
                                            Rakestraw</span>accepted your invitation to join the team.
                                        <div class="notification-date">2 min ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown nav-user">
            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/avatar-1.jpg') }}" alt=""
                    class="user-avatar-md rounded-circle"></a>
            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                aria-labelledby="navbarDropdownMenuLink2">
                <div class="nav-user-info">
                    <h5 class="mb-0 text-white nav-user-name">{{ \Auth::user()->name }}</h5>
                    <span class="status"></span><span>Available</span>
                </div>
                <a class="dropdown-item" href="{{ url('advertise/account') }}"><i
                        class="fas fa-user mr-2"></i>Account Info</a>
                <a class="dropdown-item" href="#"><i
                        class="fas fa-dollar-sign mr-2"></i>Payment</a>
                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
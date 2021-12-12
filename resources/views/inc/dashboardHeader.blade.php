<div class="col-sm-3">
    <aside>
        <div class="sideLink sideActive">
            <i class="fas fa-columns"></i>
            <a href="{{route('admin')}}">Dashboard</a>
        </div>
        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.user')sideActive @endif">
            <i class="fas fa-users"></i>
            <a href="{{route('admin.dashboard.user')}}">Users</a>
        </div>
        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.admin')sideActive @endif">
            <i class="fas fa-user"></i>
            <a href="{{route('admin.dashboard.admin')}}">Admins</a>
        </div>
        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.product')sideActive @endif">
            <i class="fab fa-product-hunt"></i>
            <a href="{{route('admin.dashboard.product')}}">Products</a>
        </div>

        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.transaction')sideActive @endif">
            <i class="fas fa-money-check-alt"></i>
            <a href="{{route('admin.dashboard.transaction')}}">Transactions</a>
        </div>
        <div class="sideLink">
            <i class="fas fa-user-cog"></i>
            <a href="">Account Services
            </a>
        </div>
        <div class="sideLink  @if(\Request::route()->getName() == 'admin.dashboard.category')sideActive @endif">
            <i class="fas fa-list"></i>
            <a href="{{route('admin.dashboard.category')}}">Manage Category</a>
        </div>
        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.banner')sideActive @endif">
            <i class="far fa-images"></i>
            <a href="{{route('admin.dashboard.banner')}}">Manage Banner</a>
        </div>
        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.plan')sideActive @endif">
            <i class="far fa-images"></i>
            <a href="{{route('admin.dashboard.plan')}}">Manage Plans</a>
        </div>
        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.subscription')sideActive @endif">
            <i class="far fa-images"></i>
            <a href="{{route('admin.dashboard.subscription')}}">Manage Subscription</a>
        </div>
        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.job')sideActive @endif">
            <i class="fas fa-user"></i>
            <a href="{{route('admin.dashboard.job')}}">Career</a>
        </div>
        <div class="sideLink @if(\Request::route()->getName() == 'admin.dashboard.ticket')sideActive @endif">
            <a href="{{route('admin.dashboard.ticket')}}">
                <i class="fas fa-money-bill-wave"></i>
                Customer Support Ticketing</a>
        </div>
        <div class="sideLink">
            <i class="fas fa-sign-out-alt"></i>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </aside>
</div>

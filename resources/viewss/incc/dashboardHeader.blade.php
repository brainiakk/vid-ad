<div class="col-sm-3">
    <aside>
        <div class="sideLink sideActive">
            <i class="fas fa-columns"></i>
            <a href="@can('moderator') {{ route('moderator.index') }} @else {{ route('super-admin') }} @endcan">Dashboard</a>
        </div>
        
            @can('moderator')
            <div class="sideLink @if(\Request::route()->getName() == 'moderator.campaigns.pending')sideActive @endif">
                <i class="fas fa-bullhorn"></i>
                <a href="{{route('moderator.campaigns.pending')}}">Pending</a>
            </div>
            <div class="sideLink @if(\Request::route()->getName() == 'moderator.campaigns.index')sideActive @endif">
                <i class="fas fa-users"></i>
                <a href="{{route('moderator.campaigns.index')}}">List</a>
            </div>
            <div class="sideLink @if(\Request::route()->getName() == 'moderator.campaigns.create')sideActive @endif">
                <i class="fas fa-users"></i>
                <a href="{{route('moderator.campaigns.create')}}">Create</a>
            </div>
            @else
            <div class="sideLink @if(\Request::route()->getName() == 'campaigns.index')sideActive @endif">
                <i class="fas fa-users"></i>
                <a href="{{route('campaigns.index')}}">List</a>
            </div>
            <div class="sideLink @if(\Request::route()->getName() == 'campaigns.create')sideActive @endif">
                <i class="fas fa-users"></i>
                <a href="{{route('campaigns.create')}}">Create</a>
            </div>
            @endcan
        <div class="sideLink">
            <i class="fas fa-sign-out-alt"></i>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </aside>
</div>

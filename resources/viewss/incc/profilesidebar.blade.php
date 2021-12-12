<div class="col-sm-3 navL bgOverlay">
    <a href="{{route('profile')}}" style="margin-top: 0px;">
        <p class="@if(\Request::route()->getName() == 'profile')orange @else white @endif">
            <i class="fa fa-user"></i>
            General
        </p>
    </a>
    <a href="{{route('profile.payment')}}">
        <p class="@if(\Request::route()->getName() == 'profile.payment')orange @else white @endif">
            <i class="fas fa-wallet"></i>
            Payments
        </p>
    </a>

    <a href="{{route('profile.transaction')}}">
        <p class="@if(\Request::route()->getName() == 'profile.transaction')orange @else white @endif">
            <i class="fas fa-history"></i>
            Transaction
        </p>
    </a>

    <a href="{{route('profile.wishlist')}}">
        <p class="@if(\Request::route()->getName() == 'profile.wishlist')orange @else white @endif">
            <i class="fas fa-wallet"></i>
            Wishlist
        </p>
    </a>

    <a href="{{route('profile.subscription')}}">
        <p class="@if(\Request::route()->getName() == 'profile.subscription')orange @else white @endif">
            <i class="fas fa-wallet"></i>
            Subscription
        </p>
    </a>

    <a href="{{route('profile.password')}}">
        <p class="@if(\Request::route()->getName() == 'profile.password')orange @else white @endif"">
            <i class="fas fa-key"></i>
            Password and Security
        </p>
    </a>

    <a href="./redeem_code.html">
        <p class="white">
            <i class="fa fa-gift"></i>
            Redeem Code
        </p>
    </a>
</div>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{route('home')}}">NOBLE GAMES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link homeLink" href="{{route('home')}}">Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('library')}}">Library</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('support')}}">Support</a>
            </li>

        </ul>
        <div class="navIcons d-flex">
            <i class="fa fa-shopping-cart"></i>
            <a href="{{route('cart.index')}}" class="white mr-5">
                My Cart
            </a>
            <span class=" mr-5">{{$user->username}}</span>
        </div>
    </div>
</nav>

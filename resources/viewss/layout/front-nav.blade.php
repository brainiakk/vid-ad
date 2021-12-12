@extends('layout.front-master')
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand logo" href="#">
            VID BITE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./live.html">Live</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./library.php">Library</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <!-- Actual search box -->
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            <div class="right d-flex">
                <div class="nav_right">
                    <ul>
                        <li class="nr_li dd_main">
                            @isset($user)
                                <a href="JavaScript:void​(0)">
                                    <i class="fas fa-user-plus mr-1"></i>
                                    {{ $user->name }}
                                </a>
                            @endisset

                            <div class="dd_menu">

                                <div class="dd_right">
                                    <ul>
                                        <li class="add_pro">
                                            <a href="profile.php">Profile</a>
                                        </li>
                                        <li class="add_pro">
                                            <a href="studio.php">Studio</a>
                                        </li>
                                        <li><a href="" data-toggle="modal" data-target="#logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="account d-flex ml-4 mr-4">
                    <a href="#">
                        <i class="fas fa-video"></i>
                    </a>
                    <a href="./notification.html">
                        <i class="fas fa-bell"></i>
                    </a>
                    <a href="chatpage.php">
                        <i class="fas fa-comment"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
@endsection

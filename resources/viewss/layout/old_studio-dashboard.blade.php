<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/front/css/sidenav.css') }}">
    <script src="{{ asset('assets/front/js/main.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/creator_portal.css') }}">

    <script src="https://kit.fontawesome.com/74d240b4ae.js" crossorigin="anonymous"></script>
    <style>
        .wrapper {
            margin-top: 80px !important;
        }

    </style>

</head>

<body>

    <header>
        <nav class="navbar">
            <ul class="left-icons">
                <li id="navbtn">
                    <i class="fas fa-bars"></i>
                </li>

                <li id="logo">
                    <a href="{{ route('home') }}">
                        <span>VID BITE</span>
                    </a>
                </li>
            </ul>
            <!--
            <div class="search">
                <input type="text" placeholder="Search">
                <span class="searchbtn">
                    <i class="fas fa-search"></i>
                </span>
            </div> -->

            <ul class="right-icons">
                <li class="search-icon">
                    <i class="fas fa-search"></i>
                </li>

                <li class="create">
                    <a href="{{ route('user.upload') }}">
                        <svg viewBox="0 0 28 28" preserveAspectRatio="xMidYMid meet" focusable="false"
                            class="style-scope yt-icon" style="display: block; width: 100%; height: 100%;">
                            <g class="style-scope yt-icon">
                                <path
                                    d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4zM14 13h-3v3H9v-3H6v-2h3V8h2v3h3v2z"
                                    class="style-scope yt-icon"></path>
                            </g>
                        </svg>
                    </a>
                </li>

                <li class="bell">
                    <i class="fas fa-bell"></i>
                </li>


                <!-- <li class="p rofile">
                    <img src="./assets/images/profile.jpeg" alt="">
                </li> -->
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="sidebar">
            <ul class="left-icons">
                <li id="navbtn_mobile">
                    <i class="fas fa-bars"></i>
                </li>

                <li id="logo">
                    <span>LOGO</span>
                </li>
            </ul>

            <ul id="sidebar-content">
                <li class="active trigger">
                    <a href="{{ route('user.studio') }}">
                        <i class="fas fa-home"></i>
                        <span style="color: #fff;">Dashboard</span>
                    </a>
                </li>
                <li class="trigger">
                    <a href="">
                        <i class="fas fa-fire"></i>
                        <span>Content</span>
                    </a>
                </li>
                <li class="trigger">
                    <a href="">
                        <i class="fas fa-video"></i>
                        <span>Playlists</span>
                    </a>
                </li>
                <li class="trigger">
                    <i class="fas fa-signal"></i>
                    <span>Insights</span>
                </li>

                <li class="trigger">
                    <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"
                        class="style-scope yt-icon" style="display: block; width: 100%; height: 100%;color: #fff;">
                        <g class="style-scope yt-icon">
                            <path
                                d="M18.7 8.7H5.3V7h13.4v1.7zm-1.7-5H7v1.6h10V3.7zm3.3 8.3v6.7c0 1-.7 1.6-1.6 1.6H5.3c-1 0-1.6-.7-1.6-1.6V12c0-1 .7-1.7 1.6-1.7h13.4c1 0 1.6.8 1.6 1.7zm-5 3.3l-5-2.7V18l5-2.7z"
                                class="style-scope yt-icon"></path>
                        </g>
                    </svg>
                    <span>
                        Community
                    </span>
                </li>

                <li class="trigger">
                    <i class="fas fa-cog"></i>
                    <span>Preferences</span>
                </li>
                
                <li class="trigger">
                    <i class="fas fa-satellite-dish"></i>
                    <span>Stream Manager</span>
                </li>

                <li class="trigger">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="wrapper">
            @yield('content')
            </div>
        </div>
    </section>
    @yield('modal')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script>
        function showPlaylistSelect(value) {
            if (value == "yes") {
                $('#playlistSelect').removeClass("d-none");
                $('#playlistCheck').addClass("d-none");
                // document.getElementById("playlistSelect").style.display = "block"
                // document.getElementById("playlistCheck").style.display = "none"
            }

        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview-image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#thumbnail").change(function() {
            readURL(this);
            $('#preview-image').removeClass("d-none");
            $('#preview-image').addClass("d-block");
        });
    </script>
</body>

</html>

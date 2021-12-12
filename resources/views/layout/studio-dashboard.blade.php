<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio</title>

    <!--  -->

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/notification.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>



    <!--  -->



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



    <style>
        .comment-div{
            border: 1px solid white;
        }
        .main-container {
            width: 95%;
            margin: auto;
            margin-top: 75px
        }
        .w-95{
            width: 95%;
            margin: auto;
        }
        .cover {
            width: 100%;
            height: 350px;
            padding-bottom: 20px
        }

        .cover img {
            width: 100%;
            height: 100%;
        }

        .profile-image {
            width: 70px;
            height: 70px;
            border-radius: 50%
        }

        .navbar-nav {
            margin-left: 30px;
        }

        .nav-link {
            color: #fff;
        }

        .nav-link.active {
            background-color: transparent !important;
            border: none !important;
            color: #fff;
            border-bottom: 2px solid #fff !important;
            margin-bottom: 15px
        }

        .navbar-brand {
            padding-left: 35px !important;
        }

        .nav-link:hover {
            border: none !important;
            border-bottom: 2px solid #fff !important
        }

        .tab-content {
            /* background-color: #1b1b1b; */
            margin-bottom: 20px
        }

        .video-list {
            width: 100% !important;
            height: 100% !important;
        }

        .show {
            background-color: transparent !important
        }

        .clickable {
            cursor: pointer;
        }

        .video video {
            width: 100%;
            height: 500px;
        }

        .dropdown-menu.show {
            background-color: #1b1b1b !important;
            right: 0
        }

        .dropdown-item {
            color: #fff !important;

        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            background-color: transparent;
            text-decoration: underline
        }

        .profile-image.play {
            height: 50px;
            width: 50px;
            margin-left: 15px
        }
        .ui-autocomplete
        {
            position:absolute;
            cursor:default;
            z-index:99999 !important
        }

        #carousalTop {
            padding: 35px;
        }

        .carousel-item {
            height: 300px;
        }

        #carousalTop {
            padding-bottom: 0px;
        }

    </style>


    

</head>

<body class="container-fluid">


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
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('watchlist') }}">Watchlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./library.php">Live</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('library') }}">Library</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" id="search-form" action="{{ route('home') }}" methdd="GET" autocomplete="off">
                <!-- Actual search box -->
                {{ csrf_field() }}
                <div class="form-group has-search autocomplete ui-widget">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control typeahead " id="search" placeholder="Search">
                </div>
            </form>
            <div class="right d-flex" style="margin-right: 30px;">
                <div class="nav_right">
                    <ul>
                        <li class="nr_li dd_main">
                            @auth
                                <a href="JavaScript:void​(0)">
                                    <i class="fas fa-user mr-1"></i>
                                </a>
                            @endauth

                            <div class="dd_menu">

                                <div class="dd_right">
                                    <ul>
                                        <li class="add_pro details">
                                            <div class="profile-pic" style="margin-left: 15px">
                                                <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                            </div>
                                            <a href="{{ route('channel.index', auth()->user()) }}" style="margin-top: 0px !important; margin-left: 5px">{{ auth()->user()->name }}</a>
                                        </li>
                                        <li class="add_pro">
                                            <a href="{{ route('user.profile', auth()->user()) }}">Account</a>
                                        </li>
                                        <li class="add_pro">
                                            <a href="#">Inbox</a>
                                        </li>
                                        <li class="add_pro">
                                            <a href="{{ route('user.studio') }}">Creator Studio</a>
                                        </li>
                                        <li class="add_pro">
                                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign Out</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="account d-flex ml-4 mr-4">
                    <a href="{{ route('user.upload') }}">
                        <i class="fas fa-video"></i>
                    </a>
                    <a href="{{ route('page.notifications') }}">
                        <i class="fas fa-bell"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>



<!-- 
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


            </ul>
        </nav>
    </header>

     -->

    <section class="hero">
        <div class="sidebar" style="top: 65px;">
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

        $( function() {
            $( "#search" ).autocomplete({
                source: function( request, response ) {
                    // Fetch data
                    var headers = { 'X-CSRF-TOKEN': $('input[name="_token"]').val()};
                    $.ajax({
                        url:"{{route('autocomplete')}}",
                        type: 'get',
                        dataType: "json",
                        headers: headers,
                        data: {
                            search: request.term
                        },
                        success: function( data ) {
                        response( data );
                        }
                    });
                },
                select: function (event, ui) {
                    // Set selection
                    $('#search').val(ui.item.label); // display the selected text
                    return false;
                }
            });

            $(".slick-slider").slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

        } );
        
        // var path = "{{ url('autocomplete') }}";
        // $('#search').typeahead({
        //     minLength: 2,
        //     source:  function (query, process) {
        //     return $.get(path, { query: query }, function (data) {
        //             console.log('Data',data);
        //             return process(data);
        //         });
        //     }
        // });

        $('#search-form').submit(function( event ) {
            event.preventDefault();
            let q = $('#search').val(); 
            var path = "{{ url('search') }}?q="+q;
            console.log(path);
            document.location.href = path;

        });

        $(document).ready(function() {
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                //$(".active-tab span").html(activeTab);
                //$(".previous-tab span").html(previousTab);
            });
        });

        $(".video-list").click(function() {
            window.location.href = $(this).data('href');
        });

        var dd_main = document.querySelector(".dd_main");

        dd_main.addEventListener("click", function() {
            this.classList.toggle("active");
        })
    </script>

    
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

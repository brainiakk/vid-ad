<nav class="navbar navbar-expand-lg navbar-light">
  <!-- <a class="navbar-brand logo" href="#">
      <img src="./assets/images/logo.png" alt="LOGO">
    </a> -->
  <a class="navbar-brand logo" href="{{ route('home') }}">
    NOBLE GAMES
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
    <style>
      .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }

      .dropbtn:hover,
      .dropbtn:focus {
        background-color: #3e8e41;
      }

      #myInput {
        box-sizing: border-box;
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 14px 20px 12px 45px;
        border: none;
        width: auto;
        vertical-align: auto;
      }

      #myInput:focus {
        outline: 0px solid #ddd;
      }

      .dropdown {
        position: relative;
        display: inline-block;
      }

      .content {
        position: absolute;
        background-color: #f6f6f6;
        /* min-width: 230px; */
        overflow: auto;
        z-index: 1;
        top: 140%;
      }


      .content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown a:hover {
        background-color: #ddd;
      }

      .show {
        display: block;
      }

    </style>

    <script>
      /* When the user clicks on the button,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
          txtValue = a[i].textContent || a[i].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
          } else {
            a[i].style.display = "none";
          }
          if (filter == '') {
            a[i].style.display = "none";
          }
        }
      }

      window.addEventListener('click', function(e) {
        if (document.getElementById('myInput').contains(e.target)) {
          // Clicked in box
        } else {
          document.getElementById('myInput').value = '';
          filterFunction();
        }
      });

      function search(event) {
        document.getElementById('search-hidden-button').click();
      }
    </script>

    @if (session()->has('SEARCH_ERROR'))
      <script>
        alert('search param invalid');
      </script>
      {{ session()->remove('SEARCH_ERROR') }} @endif

    <div class="right d-flex mr-4">
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
        @else
          <li class="ml-5 navIcons">
            <a href="{{ route('cart.index') }}" class="white mb-3">
              <i class="fa fa-shopping-cart mt-1"></i>
            </a>
          </li>
          <li class="nav-item dropdown" style="background: none; padding: 0 10px !important;">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->username }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" style="background: gray" aria-labelledby="navbarDropdown">
              @can('isAdmin')
                <a class="dropdown-item" href="{{ route('admin') }}">
                  {{ 'Dashboard' }}
                </a>
              @elsecan('notAdmin')
              @endcan
              <a class="dropdown-item" href="{{ route('profile') }}">
                {{ 'Profile' }}
              </a>

              <a class="dropdown-item" style="background: gray" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                   document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
      {{-- <div class="account d-flex ml-4 mr-4"> --}}
      {{-- <a href="{{ route('login') }}" style="color: #fff;font-size: 14px;"> --}}
      {{-- <i class="fas fa-user-plus mr-1"></i> --}}
      {{-- Login --}}
      {{-- </a> --}}
      {{-- </div> --}}
      {{-- <div class="account d-flex ml-4 mr-4"> --}}
      {{-- <a href="{{ route('register') }}" style="color: #fff;font-size: 14px;"> --}}
      {{-- <i class="fas fa-user-plus mr-1"></i> --}}
      {{-- Login --}}
      {{-- </a> --}}
      {{-- </div> --}}
      <a href="#" class="blue_button">
        Get Launcher
      </a>
    </div>
  </div>
</nav>



@section('js')
  <script src="{{ asset('js/tag/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/tag/typeahead.bundle.js') }}" type="text/javascript"></script>
  <script>
    var tags = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      prefetch: {
        url: '/tag/name',
        filter: function(list) {
          return $.map(list, function(tag) {
            return {
              name: tag
            };
          });
        },
        cache: true,
        ttl: 60000
      }
    });
    tags.initialize();
    $('#blood').tagsinput({
      typeaheadjs: {
        name: 'tags',
        displayKey: 'name',
        valueKey: 'name',
        source: tags.ttAdapter()
      }
    });
    $(document).ready(function() {
      $(".tt-input").keypress(function(e) {
        if (e.which == 13) {
          event.preventDefault();
        }
      });
    });
  </script>

@endsection

<script>
  setTimeout(() => {
    const dropDown = document.getElementById('myDropdown');
    const dropDownDiv = document.getElementById('search-dropdown');
    const rec = dropDownDiv.getBoundingClientRect();

    dropDown.style.width = rec.width + 'px';
  }, 1000);
</script>

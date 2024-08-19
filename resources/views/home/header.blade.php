<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.html">
        <span>
          Giftos
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('shop') }}">
              Shop
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('why_us') }}">
              Why Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('testimonial') }}">
              Testimonial
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
          </li>
        </ul>
        <div class="user_option d-flex align-items-center justify-content-end">
            @if (Route::has('login'))
                @auth
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <a href="{{ route('logout') }}" class="nav-link d-flex align-items-center me-2" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span class="ms-1">Logout</span>
                    </a>
                </form>
                <a href="{{ url('/mycart') }}" class="nav-link d-flex align-items-center me-2">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    ({{ $count }})
                </a>
                <a href="{{ url('/myorders') }}" class="nav-link d-flex align-items-center me-2">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    My Order
                </a>
                @else
                    <a href="{{ url('/login') }}" class="nav-link d-flex align-items-center me-2">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="ms-1">Login</span>
                    </a>
                    <a href="{{ url('/register') }}" class="nav-link d-flex align-items-center me-2">
                        <i class="fa fa-vcard" aria-hidden="true"></i>
                        <span class="ms-1">Register</span>
                    </a>
                @endauth
            @endif


            <form class="form-inline d-inline">
                <button class="btn nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>




      </div>
    </nav>
  </header>

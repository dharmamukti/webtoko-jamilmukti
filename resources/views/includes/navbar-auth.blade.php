<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="/images/logo.svg" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="navbar-item active">
              <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="navbar-item">
              <a href="{{ route('categories') }}" class="nav-link">Categories</a>
            </li>
            <li class="navbar-item">
              <a href="{{ route('profile') }}" class="nav-link">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
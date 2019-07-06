<header>
    <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{route('index')}}"><span>Bit</span>Hub</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="fas fa-align-left"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="NavDropdown">
        <div class="ml-auto"></div>
        <ul class="navbar-nav text-center">
          <li class="nav-item pr-3">
            <a class="nav-link" href="#">Tech</a>
          </li>
          <li class="nav-item pr-3">
            <a class="nav-link" href="#">Entrepreneurship</a>
          </li>
          <li class="nav-item pr-3">
            <a class="nav-link" href="#">Job & Hacks</a>
          </li>
          <li class="nav-item dropdown pr-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu bg-light " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item text-info" href="#">John Doe</a>
                <hr>
                <a class="dropdown-item" href="#">Profile</a>
                <hr>
                <a class="dropdown-item" href="#">settings</a>
            </div>
        </li>
          <li class="nav-item pr-3">
          <a class="nav-link btn btn-outline-info btn-style" href="{{route('posts.create')}}">Write a story</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--Header End-->

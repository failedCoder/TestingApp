<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="/">TestingApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      @auth
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Tests
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/create/test">Create new test</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/profile">My tests</a>
        </div>
      </li>
      @endauth

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @guest
          <a class="dropdown-item" href="{{ route('login') }}">Login</a>
          <a class="dropdown-item" href="{{ route('register') }}">Register</a>
          @endguest
          @auth
          <form method="POST" action="{{ route('logout') }}">
             {{ csrf_field() }}
             <input type="submit" class="dropdown-item" name="logout" value="Logout">
          </form>
         
          @endauth
        </div>
      </li>

    </ul>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #26403e; top: 0; position: fixed; width: 100%; z-index: 1; ">
  <div class="container">
    <a class="navbar-brand" href="/news">
      <img src="/img/goodnews.png" style="width: 30pt" alt="good news">
    Good News</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "news" ? 'active' : '') }}" href="/news">News</a>
        </li>
      </ul>
            
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/news"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
    
        @else
        <li class="nav-item">
          <a href="#" class="nav-link {{ ($active === "login" ? 'active' : '') }}"><i class="bi bi-person-circle"></i> Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
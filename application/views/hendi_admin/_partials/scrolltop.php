<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Mikom UPI</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <form action="/logout" method="post">
                @csrf
              <button type="submit" class="nav-link bg-dark border-0">Logout<span data-feather="logout"></span></button>
          </form>
        </li>
      </ul>
    </nav>
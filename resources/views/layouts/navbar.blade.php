<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow rounded">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="55">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-button">Menu</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('project') ? 'active' : '' }}" href="/project">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('package') ? 'active' : '' }}" href="/package">Package</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('article') ? 'active' : '' }}" href="/article">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-button" href="/create">Create A Website</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End of Navbar -->
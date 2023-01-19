<nav class=" navbar navbar-dark navbar-expand-lg bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Alan Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $active == "home" ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == "about" ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == "post" ? 'active' : '' }}" href="/posts">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == "category" ? 'active' : '' }}" href="/categories">Category</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link {{ $active == "login" ? 'active' : '' }}" ><i class="bi bi-rocket"></i>Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
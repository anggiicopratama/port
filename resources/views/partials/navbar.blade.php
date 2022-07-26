
<nav class="navbar navbar-dark navbar-expand-lg bg-warning">
    <div class="container">
      <a class="navbar-brand" href="/">AICOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Home'? 'active': '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Posts'? 'active': '' }}" href="/posts">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Author'? 'active': '' }}" href="/author">Author</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

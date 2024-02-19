<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="#">
      <img src="../uploads/avatar_1706617495.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link <?php if(isset($GET['page']) && $GET['page'] === 'home') echo  "active" ?>"   
          aria-current="page" href="?page=home">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if(isset($GET['page']) && $GET['page']==='gallery') echo  "active" ?>"
           href="?page=gallery">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if(isset($GET['page']) && $GET['page']==='shop') echo  "active" ?>"
           href="?page=shop">Shop</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if(isset($GET['page']) && $GET['page']==='contact') echo  "active" ?>"
          href="?page=contact">Contact</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=home">Home</a></li>
            <li><a class="dropdown-item" href="?page=gallery">Gallery</a></li>
            <li><a class="dropdown-item" href="?page=shop">Shop</a></li>
            <li><a class="dropdown-item" href="?page=contact">Contact</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>

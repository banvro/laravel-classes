<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
</head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/myblog">myblog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Action
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/action">Action</a></li>
                  <li><a class="dropdown-item" href="/action">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/action">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form action="/search" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://picsum.photos/200/300?random=2" class="d-block w-100" height="200px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/200/300?random=1" class="d-block w-100" height="200px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/200/300?random=3" class="d-block w-100" height="200px" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      @section('xyz')
          
      @show
    
<footer class="bg-black text-white pt-4 mt-5 border-top">
  <div class="container">
    <div class="row">
      
      <div class="col-md-4 mb-3">
        <h5>About Us</h5>
        <p>Welcome to MyBlog, your go-to platform for insights, tutorials, and resources. Stay connected and informed with us.</p>
      </div>

      
      <div class="col-md-4 mb-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="/home" class="text-dark text-decoration-none">Home</a></li>
          <li><a href="/contact" class="text-dark text-decoration-none">Contact</a></li>
          <li><a href="/about" class="text-dark text-decoration-none">About</a></li>
          <li><a href="/privacy" class="text-dark text-decoration-none">Privacy Policy</a></li>
        </ul>
      </div>

      
      <div class="col-md-4 mb-3">
        <h5>Contact Us</h5>
        <p>Email: support@myblog.com</p>
        <p>Phone: +91-12345-67890</p>
        <p>Location:Shimla, India</p>
      </div>
    </div>

    
    <div class="text-center py-3 mt-3 border-top">
      &copy; 2025 MyBlog. All rights reserved.
    </div>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
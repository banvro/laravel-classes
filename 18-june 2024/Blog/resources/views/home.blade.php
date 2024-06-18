@extends('base')


@section('mybodyblock')

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="max-height: 335px;" src="https://i.ibb.co/qWq9TNW/ORA-Blog-Header-IG-Carousel-Posts-scaled.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="max-height: 335px;" src="https://i.ibb.co/5T9WjsV/8-15-22-Instagram-Carousel-Linkedin.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="max-height: 335px;" src="https://i.ibb.co/vh9St34/22q4-15-main.jpg" class="d-block w-100" alt="...">
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




  <div style="padding-left: 10%; padding-right: 10%; padding-top: 23px;">
    <h1 style="text-align: center; font-size: 31px;  margin-bottom: 18px;">Trending Blogs</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
  </div>


  <div style="text-align: center; margin-top: 18px;">
    <a href="/blog"><button type="button" class="btn btn-dark">All Blogs</button></a>
  </div>
    
@endsection
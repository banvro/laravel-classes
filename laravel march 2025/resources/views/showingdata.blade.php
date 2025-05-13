<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    
    
  <div>
    <h1>All Contact Us froms</h1>

    <div>
    <div class="row row-cols-1 row-cols-md-3 g-4">

    @foreach ($all_data as $xyz)
    <div class="col">
        <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">{{$xyz->full_Name}}</h5>
            <h5 class="card-title">{{$xyz->email}}</h5>
            <p class="card-text">{{$xyz->message  }}.</p>
        </div>

        <div>
          <a href="/edit/{{$xyz->id}}">
            <button type="button" class="btn btn-success">Update</button>
          </a>


          <form action="/delete-this/{{$xyz->id}}" method="POST">
               @csrf
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>

        </div>


        <div class="card-footer">
            <small class="text-body-secondary">Last updated {{$xyz->updated_at}} ago</small>
        </div>
        </div>
    </div>
    @endforeach

</div>
    </div>
  </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>
@extends('base')

@section('mybodyblock')

<div style="padding-left: 10%;
    padding-right: 10%;
    padding-top: 56px;">
    <h1 style="    text-align: center;
    font-size: 33px;
    margin-bottom: 17px;">All Contact Us</h1>



    <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach ($allcontactus as $contct)
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$contct->id}}</h5>
              <h5 class="card-title">{{$contct->Username}}</h5>
              <h5 class="card-title">{{$contct->Full_Name}}</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
</div>



@endsection
@extends('base')


@section('mytitle', 'Contact Us')
    
    



@section('mybodyblock')

<div style="padding-left: 12%;
padding-right: 12%;
padding-top: 38px;">
    <h2 style="text-align: center;
    margin-bottom: 21px;
    font-weight: 700;">Contact Us</h2>
    <form method="post" action="/save-info">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" name="usernmae" class="form-control" placeholder="Enter your username">
          <div style="color: red">
            @error('usernmae')
                {{$message}}
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Full Name</label>
          <input type="text" name="fname" class="form-control" placeholder="Enter your full name">
          <div style="color: red">
            @error('fname')
                {{$message}}
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" name="em" class="form-control" placeholder="Enter your email address">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Phone Number</label>
          <input type="number" name="pnumber" class="form-control" placeholder="Enter your phone number">
        </div>
        <div style="color: red">
          @error('pnumber')
              {{$message}}
          @enderror
        </div>
        
        <div style="text-align: center;">
            <button type="submit" class="btn btn-primary">Save Data</button>
        </div>
      </form>
</div>



@endsection
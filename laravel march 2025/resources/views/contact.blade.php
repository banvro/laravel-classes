@extends('base')
@section('xyz')


<h1> contact us</h1>
<form action="/savingdata" method="POST">
  @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" class="form-control" name="fname" placeholder="ENTER YOUR NAME">
  </div>
  <p>
    @error('fname')
    {{$message}}
    @enderror
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email Address</label>
    <input type="EmailAddress" class="form-control" name="mail" placeholder="ENTER YOUR EMAIL">
  </div>
  @error('mail')
    {{$message}}
    @enderror
  <div class="mb-3" >
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" name="txt" rows="3"></textarea>
  </div>
  <button type="submit"  class="btn">Submit</button>
</form>

    
@endsection
@extends('layout.app')


@section('form')
<div class="mx-auto" style="width:500px;">
<form class="form form-control mt-5" action="{{route('registerUser')}}" method="post">
    @csrf
    <h1 class="text-center">Register here!</h1>
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="text" class="form-control m @error('name') is-invalid @enderror" name="name" id="exampleInputName1" aria-describedby="">
    @error('name')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1">
    @error('password')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
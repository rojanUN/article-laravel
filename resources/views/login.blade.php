@extends('layout.app')

@section('form')
    <div class="mx-auto" style="width:500px;">

        <form class="form form-control mt-5" action="{{ route('loginUser') }}" method="post">
            @csrf
            <h3 class="mb-5 text-center">Welcome to Login Page!</h3>
            @if (Session::has('fail'))
            <div class="alert alert-danger " role="alert">
                {{ Session::get('fail') }}
            </div>
        @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection

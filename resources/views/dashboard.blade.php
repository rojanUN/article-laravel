@extends('layout.app')

@section('form')
<h1 class="mt-3">Welcome To Dashboard</h1>
<a class="nav-link" href="{{route('logout')}}"><button class="btn btn-danger">logout</button></a>

@endsection


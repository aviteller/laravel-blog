@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
  <h1>{{$title}}</h1>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima odit illo architecto ratione sequi assumenda! Asperiores tenetur quaerat totam amet illo non, obcaecati a officia nam, iste, nobis eius in.</p>
  <p><button class="btn btn-success btn-lg" href="/login">Login</button> <button class="btn btn-primary btn-lg" href="/register">Register</button></p>
  </div>
@endsection

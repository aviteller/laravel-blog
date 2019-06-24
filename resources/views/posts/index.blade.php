@extends('layouts.app')


@section('content')
  <h1>Posts</h1>
  @if(!empty($posts))
  @foreach ($posts as $post)
    <div class="card card-body mb-3">
    <div class="row">
      <div class="col-md-4 col-sm-4">
      <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%" alt="">
      </div>
      <div class="col-md-8 col-sm-8">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
      <small>Written on {{$post->created_at}}</small>
      <small>Written by {{$post->user->name}}</small>
      </div>
    </div>
    
    </div>
  @endforeach
  {{$posts->links()}}
  @else
  <p>No posts found</p>
  @endif
@endsection
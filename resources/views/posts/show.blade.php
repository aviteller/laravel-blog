@extends('layouts.app')


@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>
  <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%" alt="">
  <br><br>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}}</small>
  <small>Written by {{$post->user->name}}</small>
  <hr>
  @if(!Auth::guest())
  @if(Auth::user()->id == $post->user_id)
  <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

  <form action="{{route('posts.destroy', $post->id)}}" method="POST" class="float-right">
  {{csrf_field()}}
    @method('DELETE') 
    <input type="submit" value="Delete" class="btn btn-danger">

  </form>
  @endif
  @endif
@endsection


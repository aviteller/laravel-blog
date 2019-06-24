@extends('layouts.app')


@section('content')
  <h1>Edit Post</h1>
  <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" placeholder="Body Text" class="form-control" >{{$post->body}}</textarea>
    </div>
      <div class="form-group">
      <input type="file" name="cover_image" id="">
    </div>
    
    <input type="submit" value="Submit" class="btn btn-success">
  </form>
  
@endsection
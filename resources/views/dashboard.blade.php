@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-success mb-3">Create Post</a>
                    <br>
                   <h3>Your Blog Posts</h3>
                   @if(count($posts) > 0)
                   <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></td>
                        <td>  <form action="{{route('posts.destroy', $post->id)}}" method="POST">
  {{csrf_field()}}
    @method('DELETE') 
    <input type="submit" value="Delete" class="btn btn-danger">

  </form></td>
                       
                    </tr>
                        
                    @endforeach
                   </table>
                   @else 
                    <h3>Please add posts</h3>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

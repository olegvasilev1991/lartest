@extends('posts.layoutposts')
@section('posts')
          <div class="card-body">
            <ul>
                @foreach($posts as $post)
                      <li> <a href="pages/{{$post->id}}"> {{$post->title}}</a></li>
                @endforeach
            </ul>
          </div>
@endsection
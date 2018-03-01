@extends('posts.layoutposts')

@section('post')


    <div><a href="/"> Назад </a></div>
    <div name="container">
        <h1 align="center">{{$post->title}}</h1>
        <p>{{$post->body}}</p>
    </div>
    <a href="{{ route('profile.page', ['page' => 1]) }}">a</a>

@endsection
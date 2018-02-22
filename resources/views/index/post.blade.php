@extends('layout')

@section('body')

<div class="post-preview">
        <a href="{{route('index.post', $post)}}">
        <h2 class="post-title">
            {{$post->title}}
        </h2>
        <img src="/storage/{{$post->image}}" class="img-responsive"/>
        <h3 class="post-subtitle">
            {!! $post->body !!}
        </h3>
        </a>
        <p class="post-meta">Posted on
        {{ $post->created_at }}</p>
    </div>
    <hr>

@endsection
@extends('layouts.app')

@section('content')
    <div style="float:right">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
    </div> <br>
    <div>
        <h2>{{ $post->title }}</h2>
        <br><br>
        <p>{{ $post->body }}</p>
        <br><hr>
        <small>created at &nbsp; {{$post->created_at }}</small>
    </div>
@endsection
@extends('layouts.app')

@section('content')
  
    <div style="float:right"><a href="{{ route('posts.create') }}" class="btn btn-primary">Create post</a></div>
    <br>  <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td><a href="{{ route('posts.show',$post) }}">{{ $post->title }}</a></td>
                    <td>
                        <span><a class="text-secondary" href="{{ route('posts.edit',$post) }}">Edit Post</a></span> &nbsp; &nbsp; &nbsp;

                        <span><a href="{{ route('posts.destroy',$post) }}" class="text-danger" onclick="event.preventDefault();document.getElementById('remove-page-form_{{ $post->id }}').submit();"> Delete Post </a></span>

                        <form id="remove-page-form_{{ $post->id }}" action="{{ route('posts.destroy',$post) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
        
    
@endsection
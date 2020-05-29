@extends('layouts.app')

@section('content')
  
    {{-- my Container --}}
    <div class="container">

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Enter the blog Title" required>
                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('title') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="body">body</label>
                <textarea class="form-control {{ $errors->has('body') ? ' is-invalid' : '' }}" id="body" name="body" placeholder="body">{{ old('body') }}</textarea>
                @if ($errors->has('body'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('body') }}
                    </span>
                @endif
                </div>

            <div class="form-group mb-0 text-center">
                <button class="btn btn-primary btn-block" type="submit">
                    <i class="mdi mdi-content-save"></i> Submit
                </button>
            </div>
        </form>
    </div>      
    
@endsection
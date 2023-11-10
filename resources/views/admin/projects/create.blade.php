@extends('layouts.admin')



@section('content')

<h1>Create Project</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card-shadow">
    <div class="card-body">

        <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type the project title here" aria-describedby="titleHelp" value="{{old('title')}}">
                <small id="titleHelp" class="text-muted">Type your project title</small>
            </div>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="mb-3">
                <label for="image" class="form-label">Choose File</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Choose a file" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text">Add image max: 512Kb</small>
            </div>
            @error('image')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="mb-3">
                <label for="github" class="form-label">Github</label>
                <input type="text" name="github" id="github" class="form-control @error('github') is-invalid @enderror" placeholder="Type the project github link here" aria-describedby="githubHelp">
                <small id="githubHelp" class="text-muted">Type your project github link</small>
            </div>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="mb-3">
                <label for="second_link" class="form-label">Second Link</label>
                <input type="text" name="second_link" id="second_link" class="form-control @error('second_link') is-invalid @enderror" placeholder="Type the project second_link here" aria-describedby="second_linkHelp">
                <small id="second_linkHelp" class="text-muted">Type your project second link here</small>
            </div>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3">{{old('content')}}</textarea>
                <small id="contentHelp" class="form-text">Type your content</small>
            </div>
            @error('content')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <button type="submit" class="btn btn-primary">Save</button>

        </form>

    </div>
</div>

@endsection
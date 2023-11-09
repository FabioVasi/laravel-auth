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
                <input type="text" name="title" id="title" class="form-control" placeholder="Type the project title here" aria-describedby="titleHelp">
                <small id="titleHelp" class="text-muted">Type your project title</small>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Choose File</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Choose a file" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text">Add image max: 512Kb</small>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="content" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>

    </div>
</div>

@endsection
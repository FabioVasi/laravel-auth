@extends('layouts.admin')



@section('content')

@if(session('message'))
<div class="alert alert-success alert-dismissible  fade show" role="alert">
    <button type="button" class="btn-close" data_bs_dismiss="alert" aria-label="Close"></button>
    <strong>Message:</strong>{{session('message')}}
</div>
@endif

<h1>All Projects Post</h1>

<a href="{{route('admin.projects.create')}}" class="btn btn-primary rounded-pill">Add</a>

<div class="table-responsive-sm">
    <table class="table table-striped table-hover table-borderless table-light table-middle">
        <thead class="table-light">
            <caption>Projects Post</caption>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            @forelse($projects as $project)
            <tr class="table-secondary">
                <td>{{$project->id}}</td>
                <td>
                    @if($project->image)
                    <img src="{{asset('storage/' . $project->image)}}" alt="">
                    @else
                    N/A
                    @endif
                </td>
                <td>{{$project->title}}</td>
                <td>
                    <a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary">View</a>
                    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-secondary">Edit</a>
                    /Delete
                </td>
            </tr>
            @empty

            @endforelse
            {{$projects->links('pagination::bootstrap-5')}}
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>

@endsection
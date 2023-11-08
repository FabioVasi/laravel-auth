@extends('layouts.admin')



@section('content')

<h1>All Projects Post</h1>

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
            <tr class="table-primary">
                <td class="row">{{$project->id}}</td>
                <td>
                    @if($project->image)
                    <img src="{{asset('storage/' . $project->image)}}" alt="">
                    @endif
                </td>
                <td>{{$project->title}}</td>
                <td>View/Edit/Delete</td>
            </tr>
            @empty

            @endforelse
            {{$projects->links()}}
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>

@endsection
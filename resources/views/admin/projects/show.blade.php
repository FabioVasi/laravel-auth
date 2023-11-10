@extends('layouts.admin')



@section('content')



<div class="container text-start">

<h1 class="text-muted text-uppercase py-4">Project n°{{$project->id}}</h1>

    <div class="row">
        <div class="col-4">
            <div class="card shadow">
            <img  class="card-img-top" src="{{asset($project->image)}}" alt="">
                <div class="card-body">
                    <h4 class="py-3">{{$project->title}}</h4>
                    <h6>{{$project->slug}}</h6>
                    <p><a href="{{$project->github}}">{{$project->github}}</a></p>
                    <p><a href="{{$project->second_link}}">{{$project->second_link}}</a></p>
                    <p>{{$project->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
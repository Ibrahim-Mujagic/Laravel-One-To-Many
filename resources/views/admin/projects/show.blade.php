@extends('layouts.app')

@section('content')
<h1 class="text-center">Show</h1>

<a class="btn btn-outline-dark mt-4" href="{{route('admin.projects.index')}}">Home</a>
<div class="card mt-5 w-50 m-auto">
  @if($project->cover_image)
  <img src="{{asset('storage/' . $project->cover_image )}}" class="card-img-top"
    alt="{{$project->original_image_name}}">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{$project->name}}</h5>
    <p class="card-text">{{$project->summary}}</p>
    <p class="card-text"><small class="text-body-secondary">{{$project->client_name}}</small></p>
  </div>
  @endsection
@extends('layout')

@section('content')
  <h1>All projects</h1>
  <a class="btn btn-primary" href="projects/create">Create project</a>
  @foreach($projects as $project)
    <div>
      <a href="{{ $project->path() }}">{{ $project->title}}</a>
    </div>
  @endforeach
@stop

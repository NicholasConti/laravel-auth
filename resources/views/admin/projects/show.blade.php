@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Project') }}
    </h2>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $project->project_name}}</h5>
        <p class="card-text">{{ $project->description}}</p>
        <h6 class="card-subtitle mb-2 text-body-secondary">Languages: {{ $project->programming_languages}}</h6>
        <h6 class="card-subtitle mb-2 text-body-secondary">Started: {{ $project->start_date}}</h6>
      </div>
    </div>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-success">Home</a>

</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Edit Project') }}
        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-success">Home</a>
    </h2>
    <form action="{{ route('admin.projects.update', $project)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="project_name" class="form-label">Project Name</label>
            <input type="text" class="form-control" id="project_name" name="project_name" value="{{ old('project_name',$project->project_name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="2" name="description">{{ old('description',$project->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug',$project->slug) }}">
        </div>
        <div class="mb-3">
            <label for="programming_languages" class="form-label">Programmig Languages</label>
            <input type="text" class="form-control" id="programming_languages" name="programming_languages" value="{{ old('programming_languages',$project->programming_languages) }}">
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date',$project->start_date) }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
        <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-success">Create New Project</a>
    </h2>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Project Name</th>
                <th scope="col">Start Date</th>
                <th scope="col">Action</th>
              </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
              <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->project_name}}</td>
                <td>{{$project->start_date}}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-primary">Show</a>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
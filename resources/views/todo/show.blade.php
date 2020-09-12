@extends('layouts.app')

@section('content')

  <h1 class="text-center my-5">
    {{$todo->name}}
  </h1>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card card-default">
        <div class="card card-header">
          Details
        </div>
          <div class="card-body">
              {{$todo->description}}
          </div>
      </div>
      <div>
        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-md my-4 ">Edit</a>
        <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-md my-4 ">Delete</a>
      </div>
    </div>
  </div>

@endsection

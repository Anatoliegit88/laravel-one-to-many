@extends('layouts.admin')

@section('content')

<div class="container">
  <h3 class="text-center">
    Change {{ $project->title }}
  </h3>
  <div class="row justify-content-center">
    <div class="col-8">
      @include('partials.errors')
      <form action="{{route('admin.projects.update', $project->slug)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
          <label for="title">Title</label>
          <input type="text" id="title" name="title" class="form-control" value="{{old('title', $project->title)}}">
        </div>
        <div class="mb-4">
          <label for="content">Descriptions</label>
          <textarea name="content" id="content" rows="10" class="form-control">{{old('content', $project->content)}} </textarea>
        </div>
        <button class="btn ntn-primary" type="submit">Save</button>
      </form>
    </div>
  </div>
</div>
    
@endsection
@extends('layouts.app')
@section('content')
<h1 class="text-center">CATEGORIES</h1>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Category</th>
        <th scope="col">Projects</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($categories as $category)
      <tr>
        <td>{{$category->name}}</td>
        <th>
          <div class="list-group">
            @foreach ($category->projects as $project)
            <a href="{{route('admin.projects.show',$project)}}"
              class="list-group-item list-group-item-action">{{$project->name}}</a>
            @endforeach
          </div>
        </th>
      </tr>
      @empty
      <h2>Nessuna categoia</h2>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
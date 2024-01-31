@extends('layouts.app')

@section('content')
<h1 class="text-center">EDIT</h1>
<a class="btn btn-outline-dark mt-4 d-inline" href="{{route('admin.projects.index')}}">Home</a>
@include('admin.partials.form-delete',[$project])

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="container my-3 ib-form">
  <form action="{{route('admin.projects.update',$project)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nome Progetto</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror " value="{{$project->name}}"
        placeholder="Inserisci nome progetto" name="name">
      @error('name') <p class="text-danger">{{$message}}</p> @enderror
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nome cliente</label>
      <input type="text" class="form-control @error('client_name') is-invalid @enderror"
        value="{{$project->client_name}}" placeholder="Inserisci il nome del cliente" name="client_name">
      @error('client_name') <p class="text-danger"> {{$message}} </p> @enderror
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Immagine</label>
      <input type="file" onchange="showImage(event)" class="form-control @error('cover_image') is-invalid @enderror "
        value="{{old('cover_image')}}" name="cover_image">
      @error('cover_image') <p class="text-danger"> {{$message}} </p> @enderror

      <div class="cont-output-image">
        <img src="" alt="" id="output-image">
      </div>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Descrizione</label>
      <textarea class="form-control" rows="5" name="summary">{{$project->summary}}</textarea>
      @error('summary') <p class="text-danger"> {{$message}} </p> @enderror
    </div>

    <button class="btn btn-outline-primary" type="submit">Invia</button>
</div>
<script>
  function showImage(event){
    const tagImage = document.getElementById('output-image');
    tagImage.src = URL.createObjectURL(event.target.files[0]);
  }
</script>

@endsection
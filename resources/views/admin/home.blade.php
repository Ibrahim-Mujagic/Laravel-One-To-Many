@extends('layouts.app')

@section('content')

<div class="container text-center p-2">
    <h2>Welcome {{Auth::user()->name}}</h2>
</div>
@endsection

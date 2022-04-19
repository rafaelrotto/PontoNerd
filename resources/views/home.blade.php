@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home-page" class="col-md-12">
    <h1>Procurar Cliente</h1>
    <form action="/paciente/search" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
    </div>
@endsection

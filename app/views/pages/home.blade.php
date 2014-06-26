@extends('layouts.default')

@section('titre')
    Home page - Translation
@stop

@section('content')
<div class="page-header">
	<h1>Translation</h1>
</div>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint earum ratione explicabo veritatis, quidem aspernatur autem laborum quod eum, iusto totam libero doloribus cum. Repellat unde ullam nostrum delectus repudiandae!</p>
<p><a href="{{ URL::to('projects/create') }}">Créer un projet</a></p>
<p><a href="{{ URL::to('ressources/create') }}">Créer une ressource</a></p>

@stop

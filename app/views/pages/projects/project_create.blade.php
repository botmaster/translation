@extends('layouts.default')

@section('titre')
Création d'un projet - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Création d'un projet</h2>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'projects', 'role' => 'form')) }}
<div class="form-group">
	{{ Form::label('name','Nom du projet :') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('description','Description :') }}
	{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Créer un projet !', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop
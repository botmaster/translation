@extends('layouts.default')

@section('titre')
Edition du projet - Translation
@stop

@section('content')
<div class="page-header">
	<h2>&Eacute;dition du projet : {{$project->name}}</h2>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($project, array('route' => array('projects.update', $project->id), 'method' => 'PUT', 'role' => 'form')) }}
<div class="form-group">
	{{ Form::label('name','Nom du projet :') }}
	{{ Form::text('name', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('description','Description :') }}
	{{ Form::textarea('description', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop
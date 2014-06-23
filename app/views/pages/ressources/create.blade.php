@extends('layouts.default')

@section('titre')
Cr&eacute;ation d'une ressource - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Création d'une ressource</h2>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'ressources', 'role' => 'form')) }}
<div class="form-group">
	{{ Form::label('ressource_name','Nom de la ressource :') }}
	{{ Form::text('ressource_name', Input::old('ressource_name'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('value','Traduction:') }}
	{{ Form::text('value', Input::old('value'), array('class' => 'form-control')) }}
	{{ Form::label('locale','Locale:') }}
	{{ Form::text('locale', Input::old('locale'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('projects_list','Projet associé') }}
	{{ Form::select('projects_list', $projects_list, null, array('class' => 'form-control'))}}
</div>
<!-- <div class="form-group">
	{{ Form::label('description','Description :') }}
	{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
</div> -->

{{ Form::submit('Créer la ressource !', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop
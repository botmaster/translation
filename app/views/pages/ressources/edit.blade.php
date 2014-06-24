@extends('layouts.default')

@section('titre')
Edition d'une ressource - Translation
@stop

@section('content')
<div class="page-header">
	<h2>&Eacute;dition de la ressource : {{$ressource->ressource_name}}</h2>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($ressource, array('route' => array('ressources.update', $ressource->id), 'method' => 'PUT', 'role' => 'form')) }}
<div class="form-group">
	{{ Form::label('ressource_name','Nom de la ressource :') }}
	{{ Form::text('ressource_name', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
	
</div>
<div class="form-group">
	@foreach ($rt_list as $rt)
		{{ Form::label('locale','Nom de la locale :') }}
		{{ Form::text('locale', $rt->locale, array('class' => 'form-control')) }}
		{{ Form::label('value','Traduction :') }}
		{{ Form::text('value', $rt->value, array('class' => 'form-control')) }}
	@endforeach
	
</div>

{{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop
@extends('layouts.default')

@section('titre')
Edition d'une ressource - Translation
@stop

@section('content')
<div class="page-header">
	<h2>&Eacute;dition d'une ressource : {{$ressource->ressource_name}}</h2>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($ressource, array('route' => array('ressources.update', $ressource->id), 'method' => 'PUT', 'role' => 'form')) }}


{{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop
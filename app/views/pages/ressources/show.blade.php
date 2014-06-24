@extends('layouts.default')

@section('titre')
D&eacute;tail d'une ressource - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Détail de la ressource : {{$ressource->ressource_name}}</h2>
</div>

<p>Nom : {{$ressource->ressource_name}}</p>

@foreach ($ressource->ressourceTranslations as $rt)
	<p>Locale : {{$rt->locale}}, Traduction : {{$rt->value}}</p>
@endforeach

<p>
{{ Form::open(array('url' => 'ressources/' . $ressource->id, 'class' => 'form-inline')) }}
	{{ Form::hidden('_method', 'DELETE') }}
	{{ Form::button('Supprimer la ressource', array('type' => 'submit', 'class' => 'btn btn-warning')) }}
	{{link_to_route('ressources.edit','Éditer la ressource',$ressource->id, array('class' => 'btn btn btn-primary'))}}
{{ Form::close() }}

</p>


@stop
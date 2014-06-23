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
	<p>Traduction : {{$rt->value}}, Locale : {{$rt->locale}}</p>
@endforeach


@stop
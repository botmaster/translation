@extends('layouts.default')

@section('titre')
D&eacute;tail d'une ressource - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Détail d'une ressource : {{$ressource->name}}</h2>
</div>

<p>{{$ressource->ressource_name}}</p>


@stop
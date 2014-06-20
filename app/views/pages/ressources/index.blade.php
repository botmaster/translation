@extends('layouts.default')

@section('titre')
Liste des ressources - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Liste des ressources</h2>
</div>

@foreach ($data ['ressources_list'] as $ressource)
	<p>{{{$ressource->ressource_name}}}</p>
@endforeach


@stop
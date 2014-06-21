@extends('layouts.default')

@section('titre')
Liste des ressources - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Liste des ressources</h2>
</div>

@foreach ($ressources_list as $ressource)
	<p>
		Nom de la ressource : {{$ressource->ressource_name}} <br/>

		@foreach ($ressource->ressourceTranslations as $ressource_translation)
			- locale : {{$ressource_translation->locale}}, - valeur : {{$ressource_translation->value}} <br/>
		@endforeach

	</p>
@endforeach


<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>Nom de la ressource</th>
			<th>Projet associé</th>
			<th>--</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($ressources_list as $ressource)
		<tr>
			<td>{{ $ressource->id }}</td>
			<td>{{ $ressource->ressource_name }}</td>
			<td>{{ $ressource->project->name }}</td>
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>


@stop
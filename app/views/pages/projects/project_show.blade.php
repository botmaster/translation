@extends('layouts.default')

@section('titre')
D&eacute;tail d'un projet - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Détail du projet : {{$project->name}}</h2>
</div>

<p>{{$project->description}}</p>

<h3>Liste des ressources associées au projet</h3>

<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>Nom de la ressource</th>
			<th>Id du projet associé</th>
			<th>--</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($project->ressources as $ressource)
		<tr>
			<td>{{ $ressource->id }}</td>
			<td>{{ $ressource->ressource_name }}</td>
			<td>{{ $ressource->project_id }}</td>
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop
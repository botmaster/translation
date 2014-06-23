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
			<th>Traductions</th>
			<th>Projet associé</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($project->ressources as $ressource)
		<tr>
			<td>{{ $ressource->id }}</td>
			<td>{{ $ressource->ressource_name }}</td>
			<td>
			{{$ressource->ressource_name}} <br>
			
			@foreach ($ressource->ressourceTranslations as $ressourceTranslation)
				{{$ressourceTranslation->locale}} : {{$ressourceTranslation->value}} <br>
			@endforeach
			</td>
			{{-- <td>{{ $project->find($ressource->project_id)->name }} <br> --}}
			<td>{{ $ressource->project->name }}<br></td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop
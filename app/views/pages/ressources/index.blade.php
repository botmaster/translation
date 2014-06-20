@extends('layouts.default')

@section('titre')
Liste des ressources - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Liste des ressources</h2>
</div>

@foreach ($data ['ressources_list'] as $ressource)
	<p>
		nom de la ressource : {{$ressource->ressource_name}} <br/>

		@foreach ($ressource->ressourceTranslations as $ressource_translation)
			{{$ressource_translation->locale}}
		@endforeach

	</p>
@endforeach


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
		@foreach ($data ['ressources_list'] as $ressource)
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
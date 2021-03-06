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

<p><a href="{{ URL::to('ressources/create') }}">Créer une ressource</a></p>

<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>Nom de la ressource</th>
			<th>Projet associ&eacute;</th>
			
			@foreach ($rt_list as $rt)
			<th>
				{{$rt->locale}}
			</th>
			@endforeach
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($ressources_list as $ressource)
		<tr>
			<td>{{ $ressource->id }}</td>
			<td>{{ $ressource->ressource_name }}</td>
			<td>{{ $ressource->project->name }}</td>
			@foreach ($rt_list as $rt)
			<td>
				@foreach ($ressource->ressourceTranslations as $ressource_translation)
					@if ($ressource_translation->locale === $rt->locale)
						{{ $ressource_translation->value }}
					@endif
				@endforeach
			</td>
			@endforeach
			<td>
				{{link_to_route('ressources.show','Détail',$ressource->id, array('class' => 'btn btn-default btn-xs'))}}
				{{link_to_route('ressources.edit','Éditer',$ressource->id, array('class' => 'btn btn-default btn-xs'))}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@stop
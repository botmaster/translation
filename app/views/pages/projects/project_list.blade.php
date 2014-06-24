@extends('layouts.default')

@section('titre')
Projets - Translation
@stop

@section('content')
<div class="page-header">
	<h1>Les projets</h1>
</div>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint earum ratione explicabo veritatis, quidem aspernatur autem laborum quod eum, iusto totam libero doloribus cum. Repellat unde ullam nostrum delectus repudiandae!</p>
<p><a href="{{ URL::to('projects/create') }}">Créer un projet</a></p>

<ul class="list-group">
	@foreach ($data ['projects_list'] as $project)

	<li class="list-group-item ">{{$project->name}} <br/>
	{{$project->description}}
		<div>
			
			{{ Form::open(array('url' => 'projects/' . $project->id, 'class' => 'form-inline')) }}
				{{link_to_route('projects.show','Détail',$project->id, array('class' => 'btn btn-default btn-xs'))}}
				{{link_to_route('projects.edit','Éditer',$project->id, array('class' => 'btn btn-default btn-xs'))}}
				{{ Form::hidden('_method', 'DELETE') }}
				{{ Form::button('Supprimer', array('type' => 'submit', 'class' => 'btn btn-warning btn-xs')) }}
			{{ Form::close() }}
		</div>
	
	</li>

	@endforeach
</ul>

@stop




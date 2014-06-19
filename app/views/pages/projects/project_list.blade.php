@extends('layouts.default')

@section('titre')
Projets - Translation
@stop

@section('content')
<div class="page-header">
	<h1>Les projets</h1>
</div>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint earum ratione explicabo veritatis, quidem aspernatur autem laborum quod eum, iusto totam libero doloribus cum. Repellat unde ullam nostrum delectus repudiandae!</p>

<ul class="list-group">
	@foreach ($data ['projects_list'] as $project)

	<li class="list-group-item">{{$project->name}} <br/>
	{{$project->description}} <br/>
	{{link_to_route('projects.edit','Éditer',$project->id)}}
	</li>

	@endforeach
</ul>

@stop




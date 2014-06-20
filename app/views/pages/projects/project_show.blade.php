@extends('layouts.default')

@section('titre')
D&eacute;tail d'un projet - Translation
@stop

@section('content')
<div class="page-header">
	<h2>Détail du projet : {{$project->name}}</h2>
</div>

<p>{{$project->description}}</p>

<h3>Liste des langues</h3>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, animi similique veritatis repellendus repellat voluptate sed consequatur porro, eum nobis perspiciatis dolore numquam odio minima eligendi assumenda ea quis laborum.

@stop
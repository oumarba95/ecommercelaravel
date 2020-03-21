@extends ('layouts.app')

@section('content')
  <h1>{{ $event->title }}</h1>
  <p>{{ $event->description }}</p>
  <a href="{{ route('home') }}">Tous les evenements</a><br>
  <a class="btn btn-default" href="{{ route('events.edit',$event) }}">Modifier</a>
  <form action="{{ route('events.destroy',$event) }}" method="POST">
  	{{ csrf_field() }}
  	{{ method_field('DELETE') }}
  	<input type="submit" value="supprimer" class="btn btn-danger">
  </form>
@stop
@extends ('layouts.app')

@section('content')
  <h1>Event</h1>
  @if($events->count()>0)
     @foreach($events as $event)
       <li><a href="{{ route('events.show',$event) }}">{{ $event->title }}</a></li>
     @endforeach
   @else
     <p>Pas d'evenement</p>
  @endif
  {{ $events->links() }}
@stop
@extends('layouts.app')

@section('content')
   <h1>Modifier l'evenement#{{ $event->id }}</h1>
   <form action="{{ route('events.update',$event) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
      	<label for="title" class="control-label sr-only">titre</label>
      	<input type="text" id="title" name="title" placeholder="entrer le titre" value="{{ old('title') ?? $event->title }}" class="form-control">
      	{!! $errors->first('title','<span class="help-block">:message</span>') !!}
      </div>
      
      <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
      	<label for="description" class="control-label sr-only">description</label>
        <textarea name="description" id="description" cols="100" rows="10" placeholder="entrer la description" class="form-control">{{ old('description') ?? $event->description }}</textarea>
        {!! $errors->first('description','<span class="help-block">:message</span>') !!}
      </div>

      <div class="form-group">
      	<input type="submit" value="modifier" class="btn btn-primary btn-block">
      </div>
   </form>
@stop
@extends('layouts.app')
//for testing, feel free to extend or manipulate
@section('content')
  @if (count($tags) > 0)
    List of all Hashtags:
    @foreach ($tags as $tag)
      <div>{{$tag->name}}</div>
    @endforeach
  @endif
@endsection

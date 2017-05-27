@extends('layouts.app')
//for testing, feel free to extend or manipulate
@section('content')
  @if (count($memes) > 0)
    Title of all memes:
    @foreach ($memes as $meme)
      <div>{{$meme->meme_title}}</div>
    @endforeach
  @endif
@endsection

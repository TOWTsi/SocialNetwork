@extends('layouts.app')
//for testing, feel free to extend or manipulate
@section('content')
  @if (count($rels) > 0)
    List of all Hashtags:
    @foreach ($rels as $rel)
      <div>{{$rel->id}} {{$rel->meme_id}} {{$rel->hash_id}}</div>
    @endforeach
  @endif
@endsection

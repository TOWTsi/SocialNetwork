@extends('layouts.app')

@section('content')

  <h1>{{$meme->meme_title}}</h1>

  <img src={{$meme->image_url}} alt="No picture found">

  <div>{{$meme->description}}</div>


@endsection

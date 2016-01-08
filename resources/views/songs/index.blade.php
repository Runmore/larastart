@extends('master')
@section('content')


  @foreach ($songs as $uh)
  <li>
    <a href="/larastart/public/songs/{{ $uh->slug }}">
      {{ $uh->title }}</a>
      <p><a href="/larastart/public/songs/{{ $uh->slug }}/edit">EDIT!!!</a></p>

  </li>
  @endforeach
<h3><a href="/larastart/public">Go to home page</a></h3>


@stop

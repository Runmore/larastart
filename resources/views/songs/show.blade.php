@extends('master')

@section('content')


<h2>{{ $song->title }}</h2>

@if ($song->lyrics)
<article class="lyrics">
  {!! nl2br($song->lyrics) !!}
</article>

<h3><a href="/larastart/public/songs">Go to song list</a></h3>
<h3><a href="/larastart/public">Home Page</a></h3>
@endif
@stop

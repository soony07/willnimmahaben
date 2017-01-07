@extends('layout.main')

@section('seo')
<title>Willkommen</title>
@stop

@section('content')

@if(Auth::check())
    Willkommen, {{ Auth::user()->name }}
@else
Sie sind nicht eingeloggt
@endif

@stop
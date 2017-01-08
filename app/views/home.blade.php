@extends('layout.main')
<link href="{{ URL::asset('assets/css/header.css') }}" rel="stylesheet" />
@section('seo')
    <title>Willkommen</title>
@stop

@section('content')

    @if(Auth::check())
        <hr>
        Willkommen, {{ Auth::user()->name }}


        <html>
<span>
  <div class="text-center">

<div class="row">
    <div class="center-block">
    <div class="col-md-6 portfolio-item">
        <h3>
            <a href="{{ URL::route('category') }}">Immobilien</a>
        </h3>
        <p> Häuser und Wohnungen</p>

        <a href="#">
            <img class="img-rounded" src="{{ URL::asset('assets/img/haus.png') }}" alt="" width="304" height="236">
        </a>
        </div>

    <div class="col-md-6 portfolio-item">
        <h3>
            <a href="#">KFZ</a>
        </h3>
        <p>Gebrauchtwagen und Motoräder</p>
        <a href="#">
            <img class="img-rounded" src="{{ URL::asset('assets/img/auto.png') }}" alt="" width="304" height="236">
       </a>
        </div>

        <!-- /.row -->

        <!-- Projects Row -->



<div class="row">
    <div class="col-md-6 portfolio-item">
        <h3>
            <a href="#">Marktplatz</a>
        </h3>
        <p>Von Taschenrechner bis ...</p>
        <a href="#">
            <img class="img-rounded" src="{{ URL::asset('assets/img/wagen.png') }}" alt="" width="304" height="236">
        </a>


    </div>






    <div class="col-md-6 portfolio-item">
        <h3>
                <a href="#">Bücher</a>
            </h3>
            <p>Bücher und Zeitschriften</p>
            <a href="#">
                <img class="img-rounded" src="{{ URL::asset('assets/img/buch.png') }}" alt="" width="304" height="236">
        </a>

    </div>
</div>


<hr>
    </span>
        </html>


    @else
        <hr>

        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Willkommen bei Willnimahaben!</div>
                    <div class="intro-heading">Anzeigenportal</div>
                    <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
                </div>
            </div>
        </header>
    @endif

@stop
@extends('layout.main')

@section('seo')
<title>Willkommen</title>
@stop

@section('content')

@if(Auth::check())
    Willkommen, {{ Auth::user()->name }}


<html>
<span>
  <div class="text-center">

<div class="row">
    <div class="center-block">
    <div class="col-md-6 portfolio-item">
        <h3>
            <a href="#">Immobilien</a>
        </h3>
        <p> Häuser und Wohnungen</p>

        <a href="#">
            <img class="img-rounded" src="/public/assets/img/haus.png" alt="" width="304" height="236">
        </a>
        </div>



    <div class="col-md-6 portfolio-item">
        <h3>
            <a href="#">KFZ</a>
        </h3>
        <p>Gebrauchtwagen und Motoräder</p>
        <a href="#">
            <img class="img-rounded" src="/public/assets/img/auto.png" alt="" width="304" height="236">
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
            <img class="img-rounded" src="/public/assets/img/wagen.png" alt="" width="304" height="236">
        </a>


    </div>






    <div class="col-md-6 portfolio-item">
        <h3>
                <a href="#">Bücher</a>
            </h3>
            <p>Bücher und Zeitschriften</p>
            <a href="#">
                <img class="img-rounded" src="/public/assets/img/buch.png" alt="" width="304" height="236">
        </a>

    </div>
</div>
    </div>
</div>
</div>
<hr>
    </div>
    </span>
</html>


@else
Sie sind nicht eingeloggt
@endif

@stop
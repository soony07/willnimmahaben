@include('nav')
<head>

    <title>Post hinzufügen</title>

    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/category.css') }}" rel="stylesheet"/>


    <link href="{{ URL::asset('assets/js/html5shiv.js') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/js/respond.min.js') }}" rel="stylesheet"/>

</head>

<body>
<head>
    <title>Anzeige aufgeben</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Anzeige aufgeben</h2>

    <form class="form-horizontal" method="post" action="{{URL::route('insert_anzeigen')}}">

        <label class="control-label col-sm-2" for="Titel" name="titel">Titel:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="titel" placeholder="Titel eingeben">
        </div>


        <label class="control-label col-sm-2" for="price">Preis:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="preis" placeholder="Verkaufspreis eingeben">
        </div>

        <label class="control-label col-sm-2" for="bundesland">Bundesland:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="state" placeholder="Bundesland eingeben">
        </div>


        <label class="control-label col-sm-2" for="PLZ">PLZ:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="zip" placeholder="Postleitzahl eingeben">
        </div>


        <label class="control-label col-sm-2" for="adresse">Adresse:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="address" placeholder="Adresse eingeben">
        </div>

        <label class="control-label col-sm-2" for="price">Email:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly="readonly">
        </div>

        <label class="control-label col-sm-2" for="price">Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" readonly="readonly">
        </div>

        <label class="control-label col-sm-2" for="Nummer">Nummer:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nummer" placeholder="Telefonnummer eingeben">
        </div>


        <label class="control-label col-sm-2" for="beschreibung">Beschreibung:</label>
        <div class="col-sm-10">
                <textarea rows="4" cols="129" name="description" placeholder="Beschreibung eingeben">
                </textarea>
        </div>

        <label class="control-label col-sm-2" for="bilder">Bild hochladen:</label>
        <div class="col-md-4">

            <input type="file" id="files" name="image" multiple="multiple"/>
        </div>
        <div class="col-md-4">

        </div>


        <label class="control-label col-sm-2"></label>
        <div class="col-sm-10">
            <select name="category" >
                <option selected disabled>Bitte wählen Sie die Kategorie</option>
                <option>Immobilien</option>
                <option>Auto</option>
                <option>Bücher</option>
                <option>Marktplatz</option>
            </select>
        </div>


        <div class="col-sm-offset-2 col-sm-10">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" class="btn btn-default" value="Submit"></input>
            {{ Form::token() }}

        </div>
    </form>
</div>


</body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Willnimmahaben</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    @if(Request::is('/'))
                            <li>
                                <a href="#">Home</a>
                            </li>
                        @else
                            <li><a href="{{ URL::route('home') }}">Home</a></li>
                        @endif

                        @if(Auth::check())
                            @if(Request::is('account/change-password'))
                                <li><em>Passwort ändern</em></li>
                            @else
                                <li><a href="{{ URL::route('change-password') }}">Passwort ändern</a></li>
                            @endif
                            <li><a href="{{ URL::route('sign-out') }}">Ausloggen</a></li>
                        @else

                            @if(Request::is('account/sign-in'))
                                <li><em>Einloggen</em></li>
                            @else
                                <li><a href="{{ URL::route('sign-in') }}">Einloggen</a></li>
                            @endif

                            @if(Request::is('account/sign-up'))
                                <li><em>Registrieren</em></li>
                            @else
                                <li><a href="{{ URL::route('sign-up') }}">Registrieren</a></li>
                            @endif
                        @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

{{--


<ul class="list-inline">


    @if(Request::is('/'))

                <li><em>Home</em></li>
            @else
                <li><a href="{{ URL::route('home') }}">Home</a></li>
            @endif

            @if(Auth::check())
 --}}
{{--               @if(Request::is('account/change-password'))
                    <li><em>Passwort ändern</em></li>
                @else
                    <li><a href="{{ URL::route('change-password') }}">Passwort ändern</a></li>
                @endif

                <li><a href="{{ URL::route('sign-out') }}">Ausloggen</a></li>--}}{{--

            @else
--}}
{{--                @if(Request::is('account/sign-in'))
                    <li><em>Einloggen</em></li>
                @else
                    <li><a href="{{ URL::route('sign-in') }}">Einloggen</a></li>
                @endif--}}{{--


                @if(Request::is('account/sign-up'))
                    <li><em>Registrieren</em></li>
                @else
                    <li><a href="{{ URL::route('sign-up') }}">Registrieren</a></li>
                @endif
            @endif
</ul>
--}}

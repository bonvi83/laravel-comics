<header>
    <!-- riga azzurra -->
    <div class="riga">

    </div>

    <div class="d-flex justify-content-center">

        <!-- logo -->
        <img src="{{ Vite::asset('/resources/images/dc-logo.png') }}" alt="immagine icona">

        <!-- link alle pagine -->
        <ul>
            <!-- utilizzo il route('nome') per indicare il nome della rotta, in modo che se cambio gli url non devo sostituirli in tutte le pagine -->
            <!-- utilizzo Route::currentRouteName perchè mi dice su quale rotta sono ed è utile per evidenziare la pagina su cui sono -->
            <li>
                <!-- ❌ SEMBA IN ERRORE MA FUNZIONA, DA RISOLVERE ❌ -->
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='characters']) 
                    href="{{ route('characters') }}">characters</a>
            </li>
            <li>
                <a href="{{ route('home') }}" @if (Route::currentRouteName() == 'home') class="link active" @endif>comics</a>
            </li>
            <li>
                <a href="{{ route('movie') }}" @if (Route::currentRouteName() == 'movie') class="link active" @endif>movie</a>
            </li>
            <li>
                <a href="{{ route('tv') }}" @if (Route::currentRouteName() == 'tv') class="link active" @endif>tv</a>
            </li>
            <li>
                <a href="{{ route('games') }}" @if (Route::currentRouteName() == 'games') class="link active" @endif>games</a>
            </li>
            <li>
                <a href="{{ route('collectibes') }}" @if (Route::currentRouteName() == 'collectibes') class="link active" @endif>collectibes</a>
            </li>
            <li>
                <a href="{{ route('videos') }}" @if (Route::currentRouteName() == 'videos') class="link active" @endif>videos</a>
            </li>
            <li>
                <a href="{{ route('fans') }}" @if (Route::currentRouteName() == 'fans') class="link active" @endif>fans</a>
            </li>
            <li>
                <a href="{{ route('news') }}" @if (Route::currentRouteName() == 'news') class="link active" @endif>news</a>
            </li>
            <li>
                <a href="{{ route('shop') }}" @if (Route::currentRouteName() == 'shop') class="link active" @endif>shop</a>
            </li>
        </ul>

        <!-- inserimento del search provvisiorio DA RIFARE -->
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <!-- disegno colorato cartoni -->
    <div>
        <img class="imgcartoon" src="{{ Vite::asset('/resources/images/jumbotron.jpg') }}" alt="immagine jumbotron">
    </div>
</header>
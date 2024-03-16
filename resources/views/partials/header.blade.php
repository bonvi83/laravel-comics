<header>
    <ul>
        <!-- utilizzo il rout per indicare il nome della rotta, in modo che se cambio gli url non devo sostituirli in tutte le pagine -->
        <li>
            <a href="{{ route('characters') }}">characters</a>
        </li>
        <li>
            <a href="{{ route('home') }}">comics</a>
        </li>
        <li>
            <a href="{{ route('movie') }}">movie</a>
        </li>
        <li>
            <a href="{{ route('tv') }}">tv</a>
        </li>
        <li>
            <a href="{{ route('games') }}">games</a>
        </li>
        <li>
            <a href="{{ route('collectibes') }}">collectibes</a>
        </li>
        <li>
            <a href="{{ route('videos') }}">videos</a>
        </li>
        <li>
            <a href="{{ route('fans') }}">fans</a>
        </li>
        <li>
            <a href="{{ route('news') }}">news</a>
        </li>
        <li>
            <a href="{{ route('shop') }}">shop</a>
        </li>
    </ul>
</header>
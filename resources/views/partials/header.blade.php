<header>
    <nav class="w-100">
        <ul class="d-flex align-items-center h-100 justify-content-center w-100">
            <li class="mx-4 {{Route::currentRouteName()=='home' ? 'active' : ''}}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="mx-4 {{Route::currentRouteName()=='film' ? 'active' : ''}}">
                <a href="{{ route('film') }}">Film</a>
            </li>
            <li class="mx-4 {{Route::currentRouteName()=='contatti' ? 'active' : ''}}">
                <a href="{{ route('contatti') }}">Contatti</a>
            </li>
        </ul>
    </nav>
</header>

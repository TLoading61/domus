<nav id="headnav">
    <ul id="navbrand">
        <li>
            <a href="{{ route('accueil') }}" id="logo">
                <img src="{!! URL::asset('images/domuswhite-2.svg') !!}" alt="" height="40">
            </a>
        </li>
    </ul>
    <ul id="menu">
        <li>
            <a href="{{ route('accueil') }}">Accueil</a>
        </li>
        <li>
            <a href="{{ route('livreor') }}">Livre d'or</a>
        </li>
        <li>
            <a href="{{ route('photos') }}">Photos</a>
        </li>
        <li>
            <a href="{{ route('reservation') }}">Réservation</a>
        </li>
        <li>
            <a href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
    <ul id="hamb_btn">
        <li>
            <i id="hamburger" class="fa-solid fa-bars"></i>
        </li>
    </ul>
</nav>
<div id="responsive_menu">
    <ul id="res_menu">
        <li>
            <a href="{{ route('accueil') }}">Accueil</a>
        </li>
        <li>
            <a href="{{ route('livreor') }}">Livre d'or</a>
        </li>
        <li>
            <a href="{{ route('photos') }}">Photos</a>
        </li>
        <li>
            <a href="{{ route('reservation') }}">Réservation</a>
        </li>
        <li>
            <a href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
</div>
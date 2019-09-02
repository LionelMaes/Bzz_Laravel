@php
    $user = \Illuminate\Support\Facades\Auth::user()
@endphp
<header class="nav">
    <h1>Schuur abeille</h1>
    @if (Route::has('login'))
        <div class="top-right links loginLinks">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @if($user->privilege > 0)
                    <a href="" class="navChangeApp">Changer les rendez-vous</a>
                @endif
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" id="navRegister">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <nav>
        <ul>
            <li>Home</li>
            <li>Que faisons nous</li>
            <li><a href="{{route('calendar')}}">Rendez-vous</a></li>
            <li><a href="">Territoire</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
</header>
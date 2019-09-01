@extends('layouts.master')

@section("header")
    <?php
    /**
     * Created by PhpStorm.
     * User: lione
     * Date: 26/08/2019
     * Time: 11:55
     */
    ?>
    <header>
        <h1>Schuur abeille</h1>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
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
@endsection

@section('content')
    <main>
        <article class="first">
            <h2>lorem ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci animi aperiam atque cumque deserunt
                dolorem eaque,
                fugiat iste maiores mollitia praesentium quidem, quis quo quod repellat repudiandae sequi sunt. Lorem
                ipsum
                dolor sit amet, consectetur adipisicing elit. Accusamus animi asperiores delectus dolore doloribus, eos
                error et exercitationem impedit
                in molestiae necessitatibus quod ratione repellat similique tenetur ullam, vitae voluptatum?</p>
        </article>
        <article id="sec">
            <h2>lorem ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci animi aperiam atque cumque deserunt
                dolorem eaque,
                fugiat iste maiores mollitia praesentium quidem, quis quo quod repellat repudiandae sequi sunt.</p>
            <h2>lorem ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci animi aperiam atque cumque deserunt
                dolorem eaque,
                fugiat iste maiores mollitia praesentium quidem, quis quo quod repellat repudiandae sequi sunt.</p>
        </article>
        <article id="third">
            <h2>lorem ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci animi aperiam atque cumque deserunt
                dolorem eaque,
                fugiat iste maiores mollitia praesentium quidem, quis quo quod repellat repudiandae sequi sunt.</p>
        </article>
    </main>
@endsection

@section("footer")
    <footer>
        <ul>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
        </ul>
    </footer>
@endsection
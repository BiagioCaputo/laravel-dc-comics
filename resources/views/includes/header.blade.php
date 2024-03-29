<header>
    <div class="container">
        <nav>
            <figure>
                <img src="{{ asset('images/dc-logo.png')}}" alt="logo dc">
            </figure>
            <ul>
                @foreach (config('header_menu') as $link)
                <li>
                    <a href="{{ route($link['route_name']) }}" class="@if (Route::is($link['route_name'])) active @endif">
                        {{ $link['text'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>

    </div>
    <div class="jumbotron"></div>
</header>



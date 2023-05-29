<header>
    <div class="container">
        <div class="row w-100">
            <div class="col-1 p-2">
                <a href="{{route('home')}}">
                    <img class="img-fluid" src="/images/dc-logo.png" alt="logo">
                </a>

            </div>
            <div class="col p-2">
                <ul class="d-flex text-uppercase gap-4 justify-center align-items-center h-100 fw-bold">
                    @foreach (['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'fans', 'news', 'shop'] as $link)
                    <li>
                        <a href="{{ route('comics.index')}}">{{$link}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bg"></div>
</header>

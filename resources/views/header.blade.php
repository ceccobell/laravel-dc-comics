<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-2">
                <div class="content d-flex justify-content-between align-items-center">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo" class="img-fluid">
                    <div class="h-100">
                        <ul class="d-flex align-items-center list-unstyled h-100">
                            <li>
                                <a href="{{ route('home') }}" class="text-decoration-none text-black me-3">CHARACTERS</a>
                            </li>
                            <li>
                                <a href="{{ route('comics.index') }}" class="text-decoration-none text-black me-3 {{ Route::currentRouteName() === 'comics.index' ? 'active' : ''}}">COMICS</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none text-black me-3">MOVIES</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none text-black me-3">TV</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none text-black me-3">GAMES</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none text-black me-3">COLLECTIBLES</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none text-black me-3">VIDEOS</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none text-black me-3">FANS</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none text-black me-3">NEWS</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none text-black me-3">SHOP</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</header>
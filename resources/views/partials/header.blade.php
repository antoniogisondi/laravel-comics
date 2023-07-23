<header>
    <div class="container-fluid">
        <div class="row d-flex flex-row bg-blue">
            <div class="col-12 text-end">
                <a href="/" class="text-decoration-none mx-2"><span>DC POWER VISA</span></a><span></span>
                <a href="/" class="text-decoration-none mx-2"><span>ADDITIONAL DC SITES</span></a><span></span>
            </div>
        </div>
        <div class="row d-flex flex-row m-2">
            <div class="col-2 d-flex justify-content-center">
                <img src="{{Vite::asset('./resources/images/dc-logo.png')}}" alt="dc-logo">
            </div>
            <div class="col-8 d-flex align-items-center">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="/" class="m-3 text-decoration-none {{Route::currentRouteName() === 'homepage' ? 'active': ''}}">CHARACTERS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">COMICS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">MOVIES</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">TV</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">GAMES</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">VIDEOS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">FANS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">NEWS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none">SHOP</a>
                    </li>
                </ul>
            </div>

            <div class="col-2 d-flex align-items-center">
                <div class="search d-flex">
                    <input type="text" class="form-control bar" placeholder="Search">
                    <i class="fa fa-search align-self-center"></i>
                </div>
            </div>
        </div>
    </div>
</header>
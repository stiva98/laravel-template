<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="row w-100 justify-content-center align-items-center">
                <div class="col-8">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img class="width-img" src="" alt="Laravel">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-4">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('contatti') }}">Contatti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('chi_siamo') }}">Chi siamo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('documentazione') }}">Documentazione</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
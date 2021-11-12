<nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand ps-5" href="/">
            Ariantoly
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end pe-5" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($title === 'home') active @endif" aria-current="page" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title === 'about') active @endif" href="/about"><i class="bi bi-file-person-fill"></i> About Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

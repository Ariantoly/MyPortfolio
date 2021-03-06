<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
            <button class="btn btn-link text-decoration-none p-0">
                <a class="nav-link px-3" href="/"><i class="bi bi-house-door-fill"></i> MyPortfolio</a>
            </button>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-link text-decoration-none p-0">
                    <a class="nav-link px-3"><i class="bi bi-box-arrow-left"></i> Sign out</a>
                </button>
            </form>
        </div>
    </div>
</header>
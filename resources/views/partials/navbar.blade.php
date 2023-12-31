<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ms-5 me-5">
        <a class="navbar-brand fs-3 text" href="/">Data Kelas</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link fs-5 text @if ($title == 'Home') active @endif" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fs-5 text @if ($title == 'Input Data') active @endif" href="/input-data">Insert Data</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

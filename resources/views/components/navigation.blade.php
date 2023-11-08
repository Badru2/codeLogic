<nav class="navbar navbar-expand-lg bg-body-secondary shadow  border-bottom-dark">
    <div class="container-fluid">
        <img src="{{ asset('image/code.png') }}" style="width: 200px;" alt="" srcset="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold fs-3" aria-current="page"
                        href="{{ route('user.index') }}">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link fw-bold fs-3"
                        href="{{ route('user.halamanLaravel') }}">Laravel</a></li>
                <li class="nav-item"><a class="nav-link fw-bold fs-3"
                        href="{{ route('user.halamanjavascript') }}">JavaScript</a></li>
                <li class="nav-item"><a class="nav-link fw-bold fs-3" href="{{ route('user.halamanjava') }}">Java</a>
                </li>
                <li class="nav-item"><a class="nav-link fw-bold fs-3" href="{{ route('user.halamanruby') }}">Ruby</a>
                </li>
                {{-- <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle fs-3" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu">
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>

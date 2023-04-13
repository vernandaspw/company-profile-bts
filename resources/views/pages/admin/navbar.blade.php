<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/', []) }}">
            <img width="35" src="{{ asset('img/logo.png') }}" alt="">
            <span style="font-size: 14px">Bintang Technology Solusindo</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (Request::is('admin')) active @endif" aria-current="page"
                        href="{{ url('admin', []) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::is('admin/produk*')) active @endif"
                        href="{{ url('admin/produk') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::is('admin/partner*')) active @endif"
                        href="{{ url('admin/partner') }}">Partner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::is('admin/setting*')) active @endif"
                        href="{{ url('admin/setting') }}">Setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ url('logout') }}">Logout</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}

            </ul>
        </div>

    </div>
</nav>

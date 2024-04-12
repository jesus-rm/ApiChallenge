<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Gestión</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('visitors') }}">
                        <i class="bi bi-circle"></i><span>Usuarios (Visitantes)</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('posts') }}">
                        <i class="bi bi-circle"></i><span>Publicaciones</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-heading">Consumo de API</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('apivisitor') }}">
                <i class="bi bi-grid"></i>
                <span>Usuarios API</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('apipost') }}">
                <i class="bi bi-grid"></i>
                <span>Publicaciones API</span>
            </a>
        </li>

    </ul>
</aside><!-- End Sidebar-->
<!-- Navbar Superior -->
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/">Rest Admin</a>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar del Dashboard -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">
                            <i class="fas fa-home"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/novedades">
                            <i class="fas fa-tachometer-alt"></i>
                            Administrar Ofertas
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">
                                <i class="fas fa-columns"></i>
                                Pedidos y Reservas
                            </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pedidos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Reservas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-file-alt"></i>
                            Pages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-chart-bar"></i>
                            Charts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-table"></i>
                            Tables
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

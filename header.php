<header>
       <nav class="navbar navbar-expand-md">
            <div class="container mx-0 ms-sm-4">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg=="inicio") ? "active" : "" ; ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg=="sobre mi") ? "active" : "" ; ?>" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg=="proyectos") ? "active" : "" ; ?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg=="contacto") ? "active" : "" ; ?>" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <form class="d-flex ms-sm-3 ps-sm-5">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <!--<div class="nav-link">
                                <a href="#" class="btn-rojo p-2">Descarga mi CV <i class="fas fa-download"></i></a>
                            </div>-->
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">EN</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
    </header>
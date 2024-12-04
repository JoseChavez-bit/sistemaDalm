<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="btn btn-border-white text-dark">
      <img src="./imagenes/logo1.png" alt="Imagen del botón" width="10px" height="10px" class="img1">
      PersonaliZados "Dalm"
    </button>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold" href="inicio.php">Inicio</a>
        </li>
        <!-- Otros enlaces de navegación -->
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Arreglos Florales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="box.php">Box personalizados</a>
        </li>
        <!-- Menú desplegable de Tendencias -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tendencias
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="catalogo1.php">Tazas</a></li>
              <li><a class="dropdown-item" href="catalogo1.php">Peluches</a></li>
              <li><a class="dropdown-item" href="catalogo1.php">Tomatodos</a></li>
              <li><a class="dropdown-item" href="catalogo1.php">Polos o Telas</a></li>
              <li><a class="dropdown-item" href="catalogo1.php">Cuadros</a></li>
              <li><a class="dropdown-item" href="catalogo1.php">Cajas</a></li>
              <li><a class="dropdown-item" href="catalogo1.php">Halloween</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ocasiones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="catalogo2.php">Flores a crochet</a></li>
              <li><a class="dropdown-item" href="catalogo2.php">Detalles perfectos</a></li>
              <li><a class="dropdown-item" href="catalogo2.php">Detalles de ocasión</a></li>
              <li><a class="dropdown-item" href="catalogo2.php">Cuadros</a></li>
              <li><a class="dropdown-item" href="catalogo2.php">Otros</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>

  <div class="container-fluid mt-2 col-sm-4 d-flex align-items-center justify-content-end">
    <form id="filter-form" class="d-flex align-items-center me-3">
      <input type="text" class="form-control" id="search-product" placeholder="Ingresa el producto">
      <button type="button" class="btn btn-primary ms-2" onclick="applyFilters()"><i class="bi bi-search"></i></button>
    </form>

    <button type="button" class="btn btn-outline-secondary position-relative" data-bs-toggle="modal" data-bs-target="#cartModal">
      <i class="bi bi-cart"></i>
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cart-count">
        0
      </span>
    </button>
  </div>
</nav>

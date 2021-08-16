    <!--NAV-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top navcustom">
    <a class="navbar-brand contenedorbrand" href="https://jardinilmiosole.cl">
      <div>
        <p class="letter1">FELICE</p>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo ($page == "index.php" ? "active" : "")?>">
          <a class="nav-link" href="../index.php">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown <?php echo ($page == "quienes_somos.php" ? "active" : "")?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quiénes Somos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../paginas/quienes_somos.php">Nuestra historia</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../paginas/quienes_somos.php#mision_vision">Misión - Visión</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../paginas/quienes_somos.php#valores">Valores</a>
          </div>
        </li>
        <li class="nav-item <?php echo ($page == "proyecto_educativo.php" ? "active" : "")?>">
          <a class="nav-link" href="../paginas/proyecto_educativo.php">Proyecto Educativo</a>
        </li>
        <li class="nav-item <?php echo ($page == "infraestructura.php" ? "active" : "")?>">
          <a class="nav-link" href="../paginas/infraestructura.php">Infraestructura</a>
        </li>
      </ul>
    </div>
  </nav>

 
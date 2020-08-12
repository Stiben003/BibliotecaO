<div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar" class="bg-bleu">
        <div class="sidebar-header">
            <a href="inicio.php" class="nav-link text-white"><img src="image/logo2.png" alt="Logo"><h3>Biblioteca Virtual</h3></a>
        </div>

        <ul class="list-unstyled components">
          <li class="nav-item">
            <a href="inicio.php" class="nav-link d-block text-white p-3 border-0"
              ><i class="icon ion-md-home lead mr-2"></i> Inicio</a
            >
          </li>
          <li class="nav-item">
            <a
              href="#catalogo"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle nav-link d-block text-white p-3 border-0"
              >Libros y Catalogo</a
            >
            <ul class="collapse list-unstyled" id="catalogo">
              <li class="nav-item">
                <a href="manage-books.php" class="nav-link d-block text-white p-3 border-0"
                  ><i class="icon ion-md-book lead mr-2"></i> Listado de Libros</a
                >
              </li>
              <li class="nav-item">
                <a href="reglibro.php" class="nav-link d-block text-white p-3 border-0"
                  ><i class="icon ion-md-book lead mr-2"></i>Agregar Libros</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a
              href="#categoria"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle nav-link d-block text-white p-3 border-0"
              >Administrar</a
            >
            <ul class="collapse list-unstyled" id="categoria">
              <li class="nav-item">
                <a href="manage-categories.php" class="nav-link d-block text-white p-3 border-0">
                  <i class="icon ion-md-create lead mr-2"></i> Administrar categorias</a
                >
              </li>
              
              <li class="nav-item">
                <a href="manage-authors.php" class="nav-link d-block text-white p-3 border-0">
                  <i class="icon ion-md-create lead mr-2"></i> Administrar autores</a
                >
              </li>
              <li class="nav-item">
                <a href="manage-editorials.php" class="nav-link d-block text-white p-3 border-0">
                  <i class="icon ion-md-create lead mr-2"></i> Administrar editoriales</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a
              href="#autor"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle nav-link d-block text-white p-3 border-0"
              >Registros</a
            >
            <ul class="collapse list-unstyled" id="autor">
              <li class="nav-item">
                <a href="addcategory.php" class="nav-link d-block text-white p-3 border-0">
                  <i class="icon ion-md-create lead mr-2"></i> Agregar categoria</a
                >
              </li>
              <li class="nav-item">
                <a href="addauthor.php" class="nav-link d-block text-white p-3 border-0">
                  <i class="icon ion-md-create lead mr-2"></i> Agregar autor</a
                >
              </li>
              <li class="nav-item">
                <a href="addeditorial.php" class="nav-link d-block text-white p-3 border-0">
                  <i class="icon ion-md-create lead mr-2"></i> Agregar editorial</a
                >
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-block text-white p-3 border-0">
              <i class="icon ion-md-settings lead mr-2"></i> Reportes</a
            >
          </li>
        </ul>
      </nav>
      <div id="nav-content">
            <nav class="navbar navbar-expand navbar-dark naverr">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn text-white">
              <i id="boton" class="fas fa-align-left"></i>
            </button>

              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdowm">
                  <a
                    class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Administrador
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="cerrar.php">Cerrar sesión</a>
                  </div>
                </li>
                
              </ul>
          </div>
        </nav></div>
      <!-- Page Content  -->
      <div id="content">
        
  
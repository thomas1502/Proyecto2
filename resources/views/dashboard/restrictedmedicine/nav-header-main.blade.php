<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href={{route('home')}}>Farmacia Ahorro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MENU
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href={{route('medicines.index')}}>Medicinas</a></li>
                <li><a class="dropdown-item" href={{route('mix.index')}}>Miscelánea</a></li>
                <li><a class="dropdown-item" href={{route('restrictedmedicine.index')}}>Medicinas Restringidas</a></li>
                <li><hr class="dropdown-divider"></li>
            </ul>
            </li>       
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                <!-- <a class="nav-link " href="#">Login<span class="sr-only"></span></a> -->
                <li>
                    <a class="nav-link " href="/login">Logout<span class="sr-only"></span></a> 
                </li>            
            </li>
        
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Perfil
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>   -->   
        </ul>
      </div>
    </div>
  </nav>
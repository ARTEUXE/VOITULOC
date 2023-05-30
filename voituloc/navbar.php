

<nav class="navbar navbar-expand-lg bg-body-tertiary" class="salut">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">VOITULOC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- menu deroulant 1 -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=acceuil">accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dossier client
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=client">Nouveau client</a></li>
            <li><a class="dropdown-item" href="index.php?page=vehicule">Nouveau vehicule</a></li>
          </ul>
        </li>
       
        <!-- menu deroulant 3 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Expert
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=expert">Ajouter un expert</a></li>
            <li><a class="dropdown-item" href="index.php?page=cabinetexpert">Ajouter un cabiet d'expertise</a></li>
          </ul>
        </li>
        <!-- menu deroulant 4 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Garage
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=garage">Ajouter un garage</a></li>
          </ul>
        </li>
         <!-- menu deroulant 2 -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dossier de restitution
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=rdv">Programmer un RDV de restitution</a></li>
          </ul>
        </li>
        <!-- menu deroulant 5 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Listes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=listeClients">liste des clients</a></li>
            <li><a class="dropdown-item" href="index.php?page=listeVehicules">liste des vehicules</a></li>
            <li><a class="dropdown-item" href="index.php?page=listeResti">liste des dossiers de restitution</a></li>
            <li><a class="dropdown-item" href="index.php?page=listeExperts">liste des experts</a></li>
            <li><a class="dropdown-item" href="index.php?page=listeGarages">liste des garages</a></li>
          </ul>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?page=rapport">rapport expert </a>
        </li>
      </ul>
      <form class="d-flex" role="search" method="post" action="./index.php?page=acceuil">
        <input class="form-control me-2" type="search" placeholder="immat" aria-label="Search" name="search">
        <button class="btn btn-outline-success" name="rechercher" type="submit">rechercher</button>
      </form>
    </div>
  </div>
</nav>
<!--  -->


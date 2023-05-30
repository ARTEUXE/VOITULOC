<?php
$page_afficher = "";
if (isset($_GET['page'])) {
    $page_afficher = $_GET['page'];
} else {
    $page_afficher = "index";
}
?>
<link rel="stylesheet" href="./css/client.css">
<link rel="stylesheet" href="./css/listeClients.css">
<link rel="stylesheet" href="./css/index.css">

<link rel="stylesheet" href="./css/acceuil.css">

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">


<body>
    <navbar>
        <?php include("navbar.php") ?>
    </navbar>
    <?php
    switch ($page_afficher) {
        case 'acceuil':
            include($page_afficher . ".php");
            break;
        case 'client':
            include($page_afficher . ".php");
            break;
        case 'vehicule':
            include($page_afficher . ".php");
            break;
        case 'expert':
            include($page_afficher . ".php");
            break;
        case 'garage':
            include($page_afficher . ".php");
            break;
        case 'cabinetexpert':
            include($page_afficher . ".php");
            break;
        case 'listeClients':
            include($page_afficher . ".php");
            break;
        case 'rdv':
            include($page_afficher . ".php");
            break;
        case 'rapport':
            include($page_afficher . ".php");
            break;
        case 'listeVehicules':
            include($page_afficher . ".php");
            break;
        case 'listeExperts':
            include($page_afficher . ".php");
            break;
        case 'listeGarages':
            include($page_afficher . ".php");
            break;
        case 'listeResti':
            include($page_afficher . ".php");
            break;
    }

    ?>
</body>

</html>
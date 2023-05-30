<link rel="stylesheet" href="./css/acceuil.css">
<div class="formulaire">
    <div class="titre">

        <p>BIENVENUE CHEZ VOITULOC</p>

    </div>


    <?php //var_dump($_POST);          
    ?>
    <?php
    include('./connexion.php');
    if (isset($_POST["rechercher"])) {
        $lien = connect_to_db();


        $_POST['search'];
                
                    
        // affichage des informations liés au client
        $req = 'SELECT * FROM client where nom = "' . $_POST['search'] . '"';
        $exec = $lien->prepare($req);
        $exec->execute();
        $result = $lien->query($req);
        ?>
        <table class="table">
        <h2>Données sur le client</h2>
        <tr>
        <th>nom du client</th>
        <th>adresse</th>
        <th>ville</th>
        <th>telephone</th>
        <th>email</th>

        </tr>
        <?php while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
        <td><?php echo $ligne['nom'] ?></td>
        <td><?php echo $ligne['adresse'] ?></td>
        <td><?php echo $ligne['ville'] ?></td>
        <td><?php echo $ligne['telephone'] ?></td>
        <td><?php echo $ligne['email'] ?></td> 
        </tr>
        <tr>
        <?php }?>
        </table>
        <?php
        



        // affichage des informations liés a la plaque d'immatriculation

                    $req = 'SELECT * FROM vehicule where client = "' . $_POST['search'] . '"';
                    $exec = $lien->prepare($req);
                    $exec->execute();
                    $result1 = $lien->query($req);
        ?>
                    <table class="table">
                    <h2>Données sur la location</h2>
        <tr>
            <th>client</th>
            <th>immatriculation</th>
            <th>Motorisation</th>
            <th>marque</th>
            <th>modele</th>
            <th>date de mise en circulation</th>

        </tr>
        <?php while ($ligne = $result1->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $ligne['client'] ?></td>
            <td><?php echo $ligne['immatriculation'] ?></td>
            <td><?php echo $ligne['motorisation'] ?></td>
            <td><?php echo $ligne['marque'] ?></td>
            <td><?php echo $ligne['modele'] ?></td> 
            <td><?php echo $ligne['dateCirculation'] ?></td> 
        </tr>
        <tr>
        <?php }?>
</table>

<?php
    }else{
        echo "le nom du client ou l'immatriculation est incorrect";
    }
?>
  
  <img class="center" src="./images/voit.png"></img>

</div>

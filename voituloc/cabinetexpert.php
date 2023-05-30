<?php
include("connexion.php"); // Connexion à la base de données

if (isset($_POST['nom'])) {
    $db = connect_to_db();
    // var_dump($_POST);
    if (
        isset($_POST['nom']) &&
        isset($_POST['adresse']) &&
        isset($_POST['ville']) &&
        isset($_POST['telephone']) &&
        isset($_POST['email'])
    ) {

        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];

        $req = $db->prepare('INSERT INTO cabinetexpert (nom, adresse, ville, telephone, email) VALUES (:nom, :adresse, :ville, :telephone, :email)');
        $req->execute([
            ':nom' => $nom,
            ':adresse' => $adresse,
            ':ville' => $ville,
            ':telephone' => $telephone,
            ':email' => $email

        ]);

        close_db($db);
        // Redirection vers la page acceuil.php
        ?>  <p></p><div class="card"> 
        <i class="checkmark">✓</i>
      
        <f class="f">Le client a bien été enregistré</f></div> <?php    }
} else {
?>
    <p></p>
    <form class="form" action="index.php?page=cabinetexpert" method="POST">


        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="formulaire">
                    <div class="titre">

                        <p>NOUVEAU CABINET D'EXPERTISE</p>

                    </div>

                    <label>NOM</label>
                    <input type="text" name="nom" id="nom" placeholder="Entrez le nom du cabinet d'expertise">

                    <label>ADRESSE</label>
                    <input type="text" name="adresse" id="adresse" placeholder="Entrez l'adresse du cabinet d'expertise">

                    <label>VILLE</label>
                    <input type="text" name="ville" id="ville" placeholder="Entrez la ville du cabinet d'expertise">

                    <label>TELEPHONE</label>
                    <input type="text" name="telephone" id="telephone" placeholder="Entrez le numero du cabinet d'expertise">

                    <label>EMAIL</label>
                    <input type="text" name="email" id="email" placeholder="Entrez le mail du cabinet d'expertise  ">

                    <p></p>
                    <div class="button">
                        <button type="submit" id='submit' class="button">Ajouter le cabinet d'expertise</button>
                    </div>
                </div>
                <div class="col-4">
    </form>
<?php
}
?>
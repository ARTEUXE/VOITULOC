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

        $req = $db->prepare('INSERT INTO garage (nom, adresse, ville, telephone, email) VALUES (:nom, :adresse, :ville, :telephone, :email)');
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

    <form class="form" action="index.php?page=garage" method="POST">

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="formulaire">
                    <div class="titre">

                        <p>NOUVEAU GARAGE</p>

                    </div>
                    <label>NOM</label>
                    <input type="text" name="nom" id="nom" placeholder="Indiquez le nom du garage">

                    <label>ADRESSE</label>
                    <input type="text" name="adresse" id="adresse" placeholder="Indiquez l'adresse du garage">

                    <label>VILLE</label>
                    <input type="text" name="ville" id="ville" placeholder="Indiquez la ville du garage">

                    <label>TELEPHONE</label>
                    <input type="text" name="telephone" id="telephone" placeholder="Indiquez le numero du garage">

                    <label>EMAIL</label>
                    <input type="text" name="email" id="email" placeholder="Indiquez l'adresse mail du garage  ">

                    <p></p>
                    <div class="button">
                        <button type="submit" id='submit' class="button">Ajouter le garage</button>
                    </div>
                </div>
                <div class="col-4">
    </form>
<?php
}
?>  
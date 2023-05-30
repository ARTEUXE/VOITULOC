<?php
include("connexion.php"); // Connexion à la base de données


if (isset($_POST['nom'])) {
    $db = connect_to_db();
    // var_dump($_POST);
    $cabinetexpert = $_POST['cabinetexpert'];
    if (
        isset($_POST['nom']) &&
        isset($_POST['telephone']) &&
        isset($_POST['email']) &&
        isset($_POST['cabinetexpert'])
    ) {

        $nom = $_POST['nom'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $cabinetexpert = $_POST['cabinetexpert'];

        $req = $db->prepare('INSERT INTO expert (nom, telephone, email, cabinetexpert) VALUES (:nom, :telephone, :email, :cabinetexpert)');
        $req->execute([
            ':nom' => $nom,
            ':telephone' => $telephone,
            ':email' => $email,
            ':cabinetexpert' => $cabinetexpert

        ]);

        close_db($db);
        // Redirection vers la page acceuil.php
        ?>  <p></p><div class="card"> 
        <i class="checkmark">✓</i>
      
        <f class="f">Le client a bien été enregistré</f></div> <?php    }
} else {
?>
    <p></p>
    <form class="form" action="index.php?page=expert" method="POST">


        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="formulaire">
                    <div class="titre">

                        <p>NOUVEL EXPERT</p>

                    </div>

                    <label>NOM ET PRENOM</label>
                    <input type="text" name="nom" id="nom" placeholder="Indiquez le nom et prenom de l'expert">

                    <label>TELEPHONE</label>
                    <input type="text" name="telephone" id="telephone" placeholder="Indiquez le numero de l'expert">

                    <label>EMAIL</label>
                    <input type="text" name="email" id="email" placeholder="Indiquez l'adresse mail de l'expert">



                    <label>CABINET RATTACHÉ A L'EXPERT</label>
                    <select name="cabinetexpert" id="cabinetexpert">
                        <option id="cabinetexpert" name="cabinetexpert" selected>Selectionnez le cabinet d'expertise lié</option>
                        <?php
                        $db = connect_to_db();
                        $req = $db->prepare("SELECT `nom` FROM `cabinetexpert`");
                        $req->execute();
                        while ($result = $req->fetch(PDO::FETCH_ASSOC)) {
                            // Stocker la valeur du champ "nom" dans une variable
                            $cabinetexpert = $result["nom"];

                            // Afficher une option dans la liste déroulante avec la valeur du nom
                            echo '<option value="' . $cabinetexpert . '">' . $cabinetexpert . '</option>';
                        }
                        ?>

                    </select>

                    <p></p>
                <div class="button">
                    <button type="submit" id='submit' class="button">Ajouter l'expert</button>
                </div>
            </div>
            <div class="col-4">
    </form>
<?php
}
?>
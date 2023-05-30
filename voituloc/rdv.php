<?php
include("connexion.php"); // Connexion à la base de données

if (isset($_POST['client'])) {
    $db = connect_to_db();
    // var_dump($_POST);
    if (
        isset( $_POST['client']) &&
        isset($_POST['vehicule']) &&
        isset($_POST['expert']) &&
        isset($_POST['garage']) &&
        isset($_POST['dateRDV']) 
    ) {
        $client = $_POST['client'];
        $vehicule = $_POST['vehicule'];
        $expert = $_POST['expert'];
        $garage = $_POST['garage'];
        $dateRDV = $_POST['dateRDV'];

        $req = $db->prepare('INSERT INTO rdv (client, vehicule, expert, garage, dateRDV) VALUES (:client, :vehicule, :expert, :garage, :dateRDV)');
        $req->execute([
            ':client' => $client,
            ':vehicule' => $vehicule,
            ':expert' => $expert,
            ':garage' => $garage,
            ':dateRDV' => $dateRDV

        ]);

        close_db($db);
        // Redirection vers la page acceuil.php
        ?>  <p></p><div class="card"> 
        <i class="checkmark">✓</i>
      
        <f class="f">Le client a bien été enregistré</f></div> <?php
    
    }
} else {
?>
    <p></p>
    <form class="form" action="index.php?page=rdv" method="POST">


        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="formulaire">
                    <div class="titre">

                        <p>NOUVEAU RENDEZ-VOUS</p>

                    </div>
                    <label>CLIENT</label>
                    <select class="select" name="client" id="client">
                        <option id="client" name="client" disabled selected>Selectionnez le client</option>
                        <?php
                        $db = connect_to_db();
                        $req = $db->prepare("SELECT `nom` FROM `client`");
                        $req->execute();
                        while ($result = $req->fetch(PDO::FETCH_ASSOC)) {
                            // Stocker la valeur du champ "nom" dans une variable
                            $client = $result["nom"];

                            // Afficher une option dans la liste déroulante avec la valeur du nom
                            echo '<option value="' . $client . '">' . $client . '</option>';
                        }
                        ?>

                    </select>

                    <label>VEHICULE</label>
                    <select class="select" name="vehicule" id="vehicule">
                        <option id="vehicule" name="vehicule" disabled selected>Selectionnez l'immatriculation du vehicule</option>
                        <?php
                        $db = connect_to_db();
                        $req = $db->prepare("SELECT `immatriculation` FROM `vehicule`");
                        $req->execute();
                        while ($result = $req->fetch(PDO::FETCH_ASSOC)) {
                            // Stocker la valeur du champ "nom" dans une variable
                            $vehicule = $result["immatriculation"];

                            // Afficher une option dans la liste déroulante avec la valeur du nom
                            echo '<option value="' . $vehicule . '">' . $vehicule . '</option>';
                        }
                        ?>

                    </select>

                    <label>EXPERT</label>
                    <select class="select" name="expert" id="expert">
                        <option id="expert" name="expert" disabled selected>Selectionnez l'expert</option>
                        <?php
                        $db = connect_to_db();
                        $req = $db->prepare("SELECT `nom` FROM `expert`");
                        $req->execute();
                        while ($result = $req->fetch(PDO::FETCH_ASSOC)) {
                            // Stocker la valeur du champ "nom" dans une variable
                            $expert = $result["nom"];

                            // Afficher une option dans la liste déroulante avec la valeur du nom
                            echo '<option value="' . $expert . '">' . $expert . '</option>';
                        }
                        ?>

                    
                    </select>

                    <label>LIEU DU RENDEZ VOUS</label>
                    <select class="select" name="garage" id="garage">
                        <option id="garage" name="garage" disabled selected>Selectionnez le garage</option>
                        <?php
                        $db = connect_to_db();
                        $req = $db->prepare("SELECT `nom` FROM `garage`");
                        $req->execute();
                        while ($result = $req->fetch(PDO::FETCH_ASSOC)) {
                            // Stocker la valeur du champ "nom" dans une variable
                            $garage = $result["nom"];

                            // Afficher une option dans la liste déroulante avec la valeur du nom
                            echo '<option value="' . $garage . '">' . $garage . '</option>';
                        }
                        ?>

                    </select>
                    
                    <label>DATE DU RENDEZ-VOUS </label>
                    <input type="date" name="dateRDV" id="dateRDV" placeholder="Renseignez la date de mise en circulation du vehicule">

                    <p></p>
                    <div class="button">
                        <button type="submit" id='submit' class="button">Ajouter le rendez-vous</button>
                    </div>
                </div>
                <div class="col-4">
    </form>
<?php
}
?>
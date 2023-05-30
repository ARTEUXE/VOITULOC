<?php
include("connexion.php"); // Connexion à la base de données

if (isset($_POST['client'])) {
    $db = connect_to_db();
    // var_dump($_POST);
    if (
        isset($_POST['client']) &&
        isset($_POST['immatriculation']) &&
        isset($_POST['motorisation']) &&
        isset($_POST['marque']) &&
        isset($_POST['modele']) &&
        isset($_POST['datecirculation'])
    ) {
        $client = $_POST['client'];
        $immatriculation = $_POST['immatriculation'];
        $motorisation = $_POST['motorisation'];
        $marque = $_POST['marque'];
        $modele = $_POST['modele'];
        $datecirculation = $_POST['datecirculation'];

        $req = $db->prepare('INSERT INTO vehicule (client, immatriculation, motorisation, marque, modele, dateCirculation) VALUES (:client, :immatriculation, :motorisation, :marque, :modele, :datecirculation)');
        $req->execute([
            ':client' => $client,
            ':immatriculation' => $immatriculation,
            ':motorisation' => $motorisation,
            ':marque' => $marque,
            ':modele' => $modele,
            ':datecirculation' => $datecirculation

        ]);

        close_db($db);
        // Redirection vers la page acceuil.php
?> <p></p>
        <div class="card">
            <i class="checkmark">✓</i>

            <f class="f">Le client a bien été enregistré</f>
        </div> <?php    }
        } else {
                ?>
    <p></p>
    <form class="form" action="index.php?page=vehicule" method="POST">


        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="formulaire">
                    <div class="titre">

                        <p>NOUVEAU VEHICULE</p>

                    </div>
                    <label>CLIENT QUI VA LOUER LE VEHICULE</label>
                    <select class="select" name="client" id="client">
                        <option class="option" id="client" name="client" disabled selected>Selectionnez le client</option>
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
                    <label>IMMATRICULATION</label>
                    <input type="text" name="immatriculation" id="immatriculation" placeholder="Renseignez l'immatriculation du vehicule">


                    <label>MOTORISATION</label>
                    <select class="select" name="motorisation" id="motorisation">
                        <option class="option" disabled selected>Selectionnez la motorisation</option>
                        <option value="essence">essence</option>
                        <option value="diesel">diesel</option>
                        <option value="hybrid">hybrid</option>
                        <option value="electrique">electrique</option>
                        <option value="GPL">GPL</option>
                        <option value="E85">E85</option>
                    </select>

                    <label>MARQUE</label>
                    <input type="text" name="marque" id="marque" placeholder="Renseignez la marque du vehicule">


                    <label>MODELE</label>
                    <input type="text" name="modele" id="modele" placeholder="Renseignez le modele du vehicule">

                    <label>DATE DE MISE EN CIRCULATION </label>
                    <input type="date" name="datecirculation" id="datecirculation" placeholder="Renseignez la date de mise en circulation du vehicule">

                    <p></p>
                    <div class="button">
                        <button type="submit" id='submit' class="button">Ajouter le vehicule</button>
                    </div>
                </div>
                <div class="col-4">
    </form>
<?php
        }
?>
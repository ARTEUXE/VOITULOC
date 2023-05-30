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

        $req = $db->prepare('INSERT INTO client (nom, adresse, ville, telephone, email) VALUES (:nom, :adresse, :ville, :telephone, :email)');
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
      
        <f class="f">Le client a bien été enregistré</f></div> <?php
    }
} else {
?>
    <p></p>
    <form class="form" action="index.php?page=client" method="POST">


        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="formulaire">
                    <div class="titre">

                        <p>NOUVEAU CLIENT</p>

                    </div>
                    
                   
                        <label >NOM ET PRENOM</label>
                        <input type="text"  class="input" name="nom" id="nom" required placeholder="Indiquez le nom et prenom du client">
                    
                  
                        <label >ADRESSE</label>
                        <input type="text"  name="adresse" id="adresse" required placeholder="Indiquez l'adresse du client">
                    
                    
                        <label>VILLE</label>
                        <input type="text"  name="ville" id="ville" required placeholder="Indiquez la ville du client">
                   
                    
                        <label >TELEPHONE</label>
                        <input type="text"  name="telephone" id="telephone" required  placeholder="Indiquez le numero du client">
                
                  
                        <label >EMAIL</label>
                        <input type="text" name="email" id="email" required  placeholder="Indiquez l'adresse mail du client  ">
                   
                    <p></p>
                    <div class="button">
                        <button type="submit" id='submit' class="button">Ajouter le client</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
    </form>
<?php
}
?>
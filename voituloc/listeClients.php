<link rel="stylesheet" href="./css/listeClients.css">

<?php
include("connexion.php"); // Connexion à la base de données

$db = connect_to_db();

$req = 'SELECT * FROM client';
$exec = $db->prepare($req);
$exec->execute();

$result =$db->query("SELECT * FROM client");
// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>

<p></p>

<table class="table">
<h2>LISTE DES CLIENTS</h2>
  <tr>
    <th>Nom</th>
    <th>Adresse</th>
    <th>Ville</th>
    <th>Telephone</th>
    <th>Email</th>
  </tr>
  <?php  while( $ligne = $result->fetch(PDO::FETCH_ASSOC)){
   
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

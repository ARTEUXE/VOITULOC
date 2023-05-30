<link rel="stylesheet" href="./css/listeClients.css">

<?php
include("connexion.php"); // Connexion à la base de données

$db = connect_to_db();

$req = 'SELECT * FROM vehicule';
$exec = $db->prepare($req);
$exec->execute();

$result =$db->query("SELECT * FROM vehicule");
// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>

<p></p>

<table class="table">
<h2>LISTE DES VEHICULES</h2>
  <tr>
    <th>Nom du locataire</th>
    <th>immatriculation</th>
    <th>motorisation</th>
    <th>marque</th>
    <th>modele</th>
    <th>mise en Circulation le: </th>
  </tr>
  <?php  while( $ligne = $result->fetch(PDO::FETCH_ASSOC)){
   
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

<link rel="stylesheet" href="./css/listeClients.css">

<?php
include("connexion.php"); // Connexion à la base de données

$db = connect_to_db();

$req = 'SELECT * FROM rdv';
$exec = $db->prepare($req);
$exec->execute();

$result =$db->query("SELECT * FROM rdv");
// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>

<p></p>

<table class="table">
<h2>LISTE DES DOSSIERS DE RESTITUTION</h2>
  <tr>
    <th>client</th>
    <th>vehicule</th>
    <th>expert</th>
    <th>garage</th>
    <th>date du rendez vous</th>
  </tr>
  <?php  while( $ligne = $result->fetch(PDO::FETCH_ASSOC)){
   
  ?>
  <tr>
    <td><?php echo $ligne['client'] ?></td>
    <td><?php echo $ligne['vehicule'] ?></td>
    <td><?php echo $ligne['expert'] ?></td>
    <td><?php echo $ligne['garage'] ?></td>
    <td><?php echo $ligne['dateRDV'] ?></td> 

</tr>
  <tr>
   <?php }?>
</table>

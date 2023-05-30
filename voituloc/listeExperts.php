<link rel="stylesheet" href="./css/listeClients.css">

<?php
include("connexion.php"); // Connexion à la base de données

$db = connect_to_db();

$req = 'SELECT * FROM expert';
$exec = $db->prepare($req);
$exec->execute();

$result =$db->query("SELECT * FROM expert");
// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>

<p></p>

<table class="table">
<h2>LISTE DES EXPERTS</h2>
  <tr>
    <th>Nom</th>
    <th>telephone</th>
    <th>email</th>
    <th>cabinet d'expertise lié</th>
  </tr>
  <?php  while( $ligne = $result->fetch(PDO::FETCH_ASSOC)){
   
  ?>
  <tr>
    <td><?php echo $ligne['nom'] ?></td>
    <td><?php echo $ligne['telephone'] ?></td>
    <td><?php echo $ligne['email'] ?></td>
    <td><?php echo $ligne['cabinetexpert'] ?></td>
  </tr>
  <tr>
   <?php }?>
</table>

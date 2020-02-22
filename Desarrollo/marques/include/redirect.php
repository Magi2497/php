<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
  $nom = $_POST['nom'];
  $uuid = $_POST['uuid'];

  if (empty($uuid)) {
    $uuid= uniqid();
    $stm = $db->prepare("INSERT INTO marca(nom, uuid) VALUES (?, ?)");
  } else {
    $stm = $db->prepare("UPDATE marca SET nom=? WHERE uuid=?");
  }
  /* no s'ha de fer mai això */
  //  To redirect form on a particular page
  $stm->bindParam(1, $nom);
  $stm->bindParam(2, $uuid);
  $stm->execute();
  header("Location: thanks.php?id=".$uuid);
  }
?>

<?php
session_start();

$dbh = new PDO("mysql:host=localhost;dbname=pnpvirtualhub_db", "root", "");
if (isset($_POST['upload'])) {
  $name = $_FILES['formFile']['name'];
  $data = file_get_contents($_FILES['formFile']['tmp_name']);
  $stmt = $dbh->prepare("
  INSERT INTO `shared_files`VALUES (NULL, ?, CURRENT_TIMESTAMP, ?, ?, ?);
  ");
  $stmt-> bindParam(1, $name);
  $stmt-> bindParam(2, $data);
  $stmt-> bindParam(3, $_SESSION['pnp_account_no']);
  $stmt-> bindParam(4, $_SESSION['active_unit']);
  $stmt->execute();
  header("Location: content.php");
} ?>

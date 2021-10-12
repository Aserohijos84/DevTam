<?php
session_start();
include 'database.php';
if(isset($_POST['download'])){

  //$dbh = new PDO("mysql:host=localhost;dbname=pnpvirtualhub_db", "root", "");

  $sqlDownloadFile=mysqli_query($conn, "SELECT * FROM `shared_files` WHERE `shared_files`.`file_id` = ".$_POST['download']."");
    if(mysqli_num_rows($sqlDownloadFile) > 0){
      $row =  mysqli_fetch_assoc($sqlDownloadFile);
      $_SESSION['file_name_output'] = $row['filename'];
      $_SESSION['file_output'] = $row['file'];
      header("Content-Disposition: attachment; filename= ".$_SESSION[file_name_output]." ");
      ob_clean();
      flush();
      echo $_SESSION['file_output'];
        }
}
//DELETE FROM `shared_files` WHERE `shared_files`.`file_id` = 8
if(isset($_POST['delete'])){
  $sqlDeleteFile=mysqli_query($conn, "DELETE FROM `shared_files` WHERE `shared_files`.`file_id` = ".$_POST['delete']."");
    if($sqlDeleteFile==true){
        header("Location: content.php");
        }
}

if(isset($_POST['markasdone'])){
  //update todo_list set isDone = '1' where todo_list.todo_list_id = 1;
  $sqlUpdateList = mysqli_query($conn, "update todo_list set isDone = '1' where todo_list.todo_list_id = ".$_POST['markasdone'].";");
  if($sqlUpdateList==true){
      header("Location: listtask.php");
      }

}
 ?>

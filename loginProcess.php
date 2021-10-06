<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM employee where pnp_account_no='$email' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['first_name'];
        echo $_SESSION["ID"];
       header("Location: home.php");
    }
    else
    {
      header("Location: home.php");
    }
}
?>

<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $password = sha1($pass);
    $sql=mysqli_query($conn,"SELECT * FROM employee where pnp_account_no='$pnp_account_no' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row) && ($pnp_account_no == $row['pnp_account_no'] && $password == $row['password']))
    {

       $_SESSION["pnp_account_no"] = $row['pnp_account_no'];
       $_SESSION["email_address"] = $row['email_address'];
       $_SESSION["password"] = $row['password'];
       $_SESSION["first_name"] = $row['first_name'];
       $_SESSION["middle_name"] = $row['middle_name'];
       $_SESSION["last_name"] = $row['last_name'];
       $_SESSION["birth_date"] = $row['birth_date'];
       $_SESSION["rank"] = $row['rank'];
       $_SESSION["pnp_unit_id"] =  $row['pnp_unit_id'];

       header("Location: home.php");
    }
    else
    {
      echo $password;
      echo "<script >";
      echo "alert('".$password."');
       window.location = 'index.php';
      ";
        echo "</script>";
    }
}
?>

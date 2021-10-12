<?php
 session_start();

 include 'database.php';

 $pnp_account_no= $_SESSION["pnp_account_no"];
 $pnp_unit_id= $_SESSION["pnp_unit_id"];
 //select * from employee
 $sqlEmployeeDetails=mysqli_query($conn," select * from employee where pnp_account_no=".$pnp_account_no." ");
 ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="Resources/css/lnInp.css" type="text/css">
        <link rel="stylesheet" href="Resources/css/task.css" type="text/css">
        <link rel="stylesheet" href="Resources/css/card_Boards.css" type="text/css">
    </head>
    <body style="background-color: rgb(245, 245, 245);">
      <!--SIDEBAR-->
    <div style="width: 300px; height: 100%; position: fixed; top: 0; left: 0%; text-align: left; background-color: rgb(67, 67, 126);">

      <img src="./Resources/imgs/logo.png" width="300px" height="130px" style="margin-top: 15px; margin-bottom: 35px;">

      <div class="sidebarBtn" onclick="window.location.href = 'home.php'">Home</div>
      <div class="sidebarBtn" onclick="window.location.href = 'account.php'"> Account</div>
      <div class="sidebarBtn" onclick="window.location.href = 'content.php';">Shared Files</div>

       <form action="logout.php" method="post" target="_self">
         <button
         name = "logout"
         type="submit"
         class="btn btn btn-danger btn-lg"
         style="width: 150px; position: absolute; bottom: 0; left: 75px; margin-bottom: 20px;">Log-out</button>
       </form>
     </div>
     <!--CONTENT-->
     <div style="margin-left: 300px; top: 0; left: 0; height: 100%; width: 100%; position:relative; padding: 50px;">
       <?php
       if(mysqli_num_rows($sqlEmployeeDetails)>0){
         $row = mysqli_fetch_assoc($sqlEmployeeDetails);
         echo '
         <div>
           <div>
             <img src="https://assets2.rappler.com/612F469A6EA84F6BAE882D2B94A4B421/img/877D9184AA214A65A9B2D6F2DA4FEE7C/camp-crame.jpg" width="200px" height="200px" style="border-radius: 12px; border: 2px solid gray">
             <h3 style="margin-top: 30px;">Account of <span>'.$row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].'</span></h3>
           </div>
           <div style="height: 3px; background-color:gray; width: 80%; margin-left: -15px;"></div>
         </div>
         <div style="width: 100%; height: 100%;">
           <table style="font-size: larger; margin-right: 2%; margin-top: 10px;">
             <tr class="acctr">
                 <td class="accDSize">Birthdate</td>
                 <td class="accDescCol"><b>:</b></td>
                 <td style="text-align: left;">'.$row['birth_date'].'</td>
             </tr>
             <tr class="acctr">
                 <td class="accDSize">Rank</td>
                 <td class="accDescCol"><b>:</b></td>
                 <td style="text-align: left;">'.$row['rank'].'</td>
             </tr>
             <tr class="acctr">
                 <td class="accDSize">Account No.</td>
                 <td class="accDescCol"><b>:</b></td>
                 <td style="text-align: left;">'.$row['pnp_account_no'].'</td>
             </tr>
             <tr class="acctr">
                 <td class="accDSize">E-mail Address</td>
                 <td class="accDescCol"><b>:</b></td>
                 <td style="text-align: left;">'.$row['email_address'].'</td>
             </tr>
         </table>
         </div>
         ';
       }

        ?>

     </div>

    </body>
</html>

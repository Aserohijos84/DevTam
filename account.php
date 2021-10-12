<?php
 session_start();

 include 'database.php';

 $pnp_account_no= $_SESSION["pnp_account_no"];
 $pnp_unit_id= $_SESSION["pnp_unit_id"];
 $sqlPNPUnitCards=mysqli_query($conn," select
                                       video_conferences.video_conference_link,
                                       pnp_unit.pnp_unit_name
                                       from
                                       video_conferences,
                                       pnp_unit
                                       where
                                       pnp_unit.pnp_unit_id = video_conferences.pnp_unit_id");
 ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="Resources/css/lnInp.css" type="text/css">
        <link rel="stylesheet" href="Resources/css/task.css" type="text/css">
    </head>
    <body style="background-color: rgb(245, 245, 245);">
    <!--Header-->
    <header id="header" class="fixed-top d-flex align-items-center"> 
      <img src="./Resources/imgs/logo.png" class="logo-img">
        <div class="container d-flex justify-content-center">
            <div class="logo"><h1>PNP VIRTUAL WORKSPACE</h1>
        </div>
      </div>
    </header>
    <!--End of Header-->
      <!--SIDEBAR-->
    <div style="width: 300px; height: 100%; position: fixed; top: 0; left: 0%; text-align: left; background-color: rgb(67, 67, 126);">
      <br> <br> <br>
      <div class="ss" onclick="window.location.href = 'home.php'">Home</div>
      <div class="ss" onclick="window.location.href = 'account.php'"> Account</div>
      <div class="ss" onclick="window.location.href = 'content.php';">Shared Files</div>

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
        <div>
          <div>
            <img src="https://th.bing.com/th/id/OIP.cKGvwd4BBszADXKkFc8ISAHaHu?pid=ImgDet&rs=1" width="200px" height="200px" style="border-radius: 12px; border: 2px solid gray">
            <h3 style="margin-top: 30px;">Account of <span>Ricardo Dalisay</span></h3>
          </div>
          <div style="height: 3px; background-color:gray; width: 80%; margin-left: -15px;"></div>
        </div>
        <div style="width: 100%; height: 100%;">
          <table style="font-size: larger; margin-right: 2%; margin-top: 10px;">
            <tr style="height: 40px;">
                <td style="width: 160px; text-align: left;">Age</td>
                <td style="text-align: left; width: 3%;"><b>:</b></td>
                <td style="text-align: left;">19</td>
            </tr>
            <tr style="height: 40px;">
                <td style="width: 160px; text-align: left;">Birthdate</td>
                <td style="text-align: left; width: 3%;"><b>:</b></td>
                <td style="text-align: left;">October 10, 2021</td>
            </tr>
            <tr style="height: 40px;">
                <td style="width: 160px; text-align: left;">Rank</td>
                <td style="text-align: left; width: 3%;"><b>:</b></td>
                <td style="text-align: left;">Pulis</td>
            </tr>
            <tr style="height: 40px;">
                <td style="width: 160px; text-align: left;">Account No.</td>
                <td style="text-align: left; width: 3%;"><b>:</b></td>
                <td style="text-align: left;">20201000000</td>
            </tr>
            <tr style="height: 40px;">
                <td style="width: 160px; text-align: left;">E-mail Address</td>
                <td style="text-align: left; width: 3%;"><b>:</b></td>
                <td style="text-align: left;">ricardodalisay@gmail.com</td>
            </tr>
        </table>
        </div>
     </div>

    </body>
</html>

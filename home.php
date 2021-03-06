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
        <link rel="stylesheet" href="Resources/css/card_Boards.css" type="text/css">
    </head>
    <body style="background-color: rgb(245, 245, 245);">
    <!--Header-->
    <header id="header" class="fixed-top d-flex align-items-center"> 
      <img src="./Resources/imgs/logo.png" class="logo-img">
      <div class="container d-flex justify-content-center">
          <div class="logo"><h1>PNP VIRTUAL WORKSPACE</h1></div>
      </div>
    </header>
    <!--End of Header-->
      <!--SIDEBAR-->
    <div style="width: 300px; height: 100%; position: fixed; top: 0; left: 0%; text-align: left; background-color: rgb(67, 67, 126);">
      <br> <br> <br>
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
     <div class="greetings">
       <h1 style="margin-left: 300px;"> <?php
        echo'Welcome, '.$_SESSION["rank"].' '.$_SESSION["first_name"].' '.$_SESSION["last_name"];
         ?></h1>

     </div>
<div class="col-divider" style="display:flex; height: auto;">
  <div class="" style=" margin-left: 300px; top: 0; left: 0; height: 100%; width: 100%; position:relative; display: flex;">
    <?php
      if(mysqli_num_rows($sqlPNPUnitCards) > 0){
        while($rowsPNPUnitCards  = mysqli_fetch_assoc($sqlPNPUnitCards)){
          echo '<div class="card deptCard" id="card">
              <img width="900px" height="175px" class="card-img-top imgDept" src="Resources/imgs/itms_hackathon_cardBG.PNG">
              <div class="card-body">
                <h5 class="card-title">'.$rowsPNPUnitCards['pnp_unit_name'].'</h5>
                <a href="'.$rowsPNPUnitCards['video_conference_link'].'" class="btn btn-primary" style="margin-bottom: 1px;">Go to Conference</a>
              </div>
            </div>';
        }
      }
    ?>
  </div>
  <div class="card-main">
    <h5 style="color: white; width: 100%;">Tasks to do:</h5>
    <div class="card-insideD" style="margin: 0; padding: 0;">
      <iframe src="listtask.php" frameborder="0" width="100%" height="200" style="border-radius: inherit;"></iframe>
    </div>
    <h5 style="color: white; width: 100%; padding-top: 12px;">Completed:</h5>
    <div class="card-insideD" style="margin: 0; padding: 0;">
      <iframe src="listComplete.php" frameborder="0" width="100%" height="200"style="border-radius: inherit;"></iframe>
    </div>
    </div>
    </div>

    </body>
</html>

<?php
 session_start();
 ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="background-color: rgb(245, 245, 245);">
      <!--
    -->
    <div style="width: 300px; height: 100%; position: fixed; top: 0; left: 0%; text-align: center; background-color: rgb(67, 67, 126);">
       <form action="logout.php" method="post" target="_self">
         <button
         name = "logout"
         type="submit"
         class="btn btn btn-danger btn-lg"
         style="width: 150px; position: absolute; bottom: 0; left: 75px; margin-bottom: 20px;">Log-out</button>
       </form>
     </div>

    <div class="" style="display=flex; margin-left: 300px; top: 0; left: 0; height: 100%; width: 90%; position:fixed">
      <?php
      include 'database.php';
      $pnp_unit_id= $_SESSION["pnp_unit_id"];
      $sqlPNPUnitCards=mysqli_query($conn,"select video_conferences.video_conference_link, pnp_unit.pnp_unit_name from video_conferences, pnp_unit where pnp_unit.pnp_unit_id = video_conferences.pnp_unit_id");

      if(mysqli_num_rows($sqlPNPUnitCards) > 0){
        while($rowsPNPUnitCards  = mysqli_fetch_assoc($sqlPNPUnitCards)){
          echo '<div class="card" style="width: 300px; margin: 15px; border-radius: 12px; border: 1px rgb(175, 175, 175) solid; display=flex;">
              <img width="300px" height="175px" class="card-img-top" style="border-top-left-radius: 12px; border-top-right-radius: 12px;" src="https://th.bing.com/th/id/OIP.SbXGF2KkQYG5Ggz6RG7IxAHaHa?pid=ImgDet&rs=1">
              <div class="card-body">
                <h5 class="card-title">'.$rowsPNPUnitCards['pnp_unit_name'].'</h5>
                <a href="#" class="btn btn-primary" style="margin-bottom: 12px;">Shared Files</a>
                <a href="'.$rowsPNPUnitCards['video_conference_link'].'" class="btn btn-primary" style="margin-bottom: 12px;">Conference</a>
              </div>
            </div>';
        }
      }
?>
    </div>




    </body>
</html>

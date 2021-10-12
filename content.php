<?php
session_start();
 ?>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="Resources/css/lnInp2.css" type="text/css">
    </head>
    <body style="background-color: rgb(245, 245, 245);" >

        <div style="width: 100%; height: 125px; position: relative; top: 0; left: 0%; background-color: rgb(67, 67, 126); margin-bottom: 30px; display: flex;"">
            <h1 style="bottom: 0; margin-left: 100px; padding-top: 25px; position: relative; font-size: xxx-large; color: white;">
              Shared with me
            </h1>
            <button onclick= "window.location.href = 'home.php'"  type="button" class="btn btn-primary" style="width: auto; margin: 25px; padding: 10px; font-weight: bolder; position: right; "  >
              Back to Home
            </button>
        </div>
        <div class="column-divider" style="display: flex; width: 100%; height:80%; ">
          <div class="column-units" style="width: 40%; height: 100%; border-right: 2px;">
            <div class="column-title-holder" style="text-align: center;">
              <h2><b>PNP UNIT</b></h2>
            </div>
            <div class="column-content-holder" >
              <?php
              include 'database.php';

              $pnp_account_no= $_SESSION["pnp_account_no"];
              $pnp_unit_id= $_SESSION["pnp_unit_id"];
              $sqlPNPUnitCards=mysqli_query($conn," SELECT * FROM `pnp_unit`");

              if(mysqli_num_rows($sqlPNPUnitCards) > 0){
                while($rowsPNPUnitCards  = mysqli_fetch_assoc($sqlPNPUnitCards)){

                  echo  '<form action="" method="POST" style="padding:0; margin:0;">
                  <button class="column-content" id= "'.$rowsPNPUnitCards['pnp_unit_id'].'"
                          name="viewFiles"
                          value="'.$rowsPNPUnitCards['pnp_unit_id'].'"
                          style ="width: 100%; border: none; text-align: left; margin: 0; padding: 20px;">
                  '.$rowsPNPUnitCards['pnp_unit_name'].
                  '</button>
                  </form> ';
                    }
                  }
                if(isset($_POST["viewFiles"])){
                  $_SESSION["active_unit"] = $_POST["viewFiles"];
                }
        ?>
            </div>
          </div>
          <div class="column-shared-files" style="width: 100%;">
            <!-- -->
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#upload" style="width: auto; margin: 25px; padding: 10px; font-weight: bolder;">
              + Add New File
            </button>
            <!--   -->
     <?php
     include 'database.php';

     $pnp_account_no= $_SESSION["pnp_account_no"];
     $pnp_unit_id= $_SESSION["pnp_unit_id"];
     $sqlSharedFiles=mysqli_query($conn, "
     SELECT DISTINCT shared_files.*, pnp_unit.pnp_unit_name FROM `shared_files`, pnp_unit where  (shared_files.pnp_unit_id = pnp_unit.pnp_unit_id)
 and shared_files.pnp_account_no = ".$pnp_account_no." ");

       if(mysqli_num_rows($sqlSharedFiles) > 0){
         while($rows  = mysqli_fetch_assoc($sqlSharedFiles)){
           if($rows["pnp_unit_id"] == $_SESSION["active_unit"]  ){

             echo '<div class="card" style="  width: auto; height: auto; margin: 25px; padding: 10px; display: flex;" id= '.$rows["file_id"].'">
                <h5>'.$rows["filename"].'</h5>
                <form action="downloadAndDelete.php" method="POST" enctype="multipart/form-data" style=" position: absolute; right: 20px; margin:0; padding:0;">
                <button style="position:relative;" type="submit" class="btn btn-primary" value= '.$rows["file_id"].' name="download"><img src="Resources/imgs/download.png"  width="20px" height="20px"></button>
                <button style="position:relative;" type="submit" class="btn btn-primary" value= '.$rows["file_id"].' name="delete"><img src="Resources/imgs/delete.png"  width="20px" height="20px"></button>
                </form>
             </div>';
           }
             }
           }
      ?>
          </div>
          </div>
        </div>
        <!-- Modal -->

          <div class="modal fade" id="upload" tabindex="-1" aria-labelledby="uploadFile" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="uploadFile">Upload a file</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="uploadProcess" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                      <div class="mb-3">
                              <label for="formFile" class="form-label">File</label>
                              <input class="form-control" type="file"  name="formFile">
                      </div>
                  </div>

                  <div class="modal-footer">
                      <input type="submit" class="btn btn-primary" name="upload" value="Upload"/>
                      <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Cancel"/>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
    </body>
</html>

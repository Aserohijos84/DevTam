<?php
session_start();
 include 'database.php';
$sqlToDoList=mysqli_query($conn,"SELECT * FROM todo_list WHERE pnp_account_no = ".$_SESSION['pnp_account_no']." and isDone= 0;");


 ?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link rel="stylesheet" href="Resources/css/task.css" type="text/css">
    </head>
    <body>
      <?php
      if(mysqli_num_rows($sqlToDoList) > 0){
        while($rows = mysqli_fetch_assoc($sqlToDoList)){
          echo '<div class="list-group" style="width:100%;">
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">'.$rows["task_heading"].'</h5>
                  <small>'.$rows["date_created"].'</small>
                </div>
                <div class="dv" style="display:flex;">
                      <p class="mb-1">'.$rows["task_description"].'</p>
                      <small>'.(($rows["isDone"]==1)? "Status: Done" : "Status: Ongoing").'</small>
                    </a>
                    <form action="downloadAndDelete.php" method="POST">
                    <button type="submit" name="markasdone" class="btn btn-info" style="position: relative; " value='.$rows['todo_list_id'].'>Mark as done</button>
                    </form>
                </div>


            </div>';
            }
          }
          else{
            echo "Nothing to do today.";
          }
       ?>

    </body>
</html>

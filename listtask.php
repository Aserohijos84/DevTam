<?php
session_start();
 include 'database.php';



 ?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link rel="stylesheet" href="Resources/css/task.css" type="text/css">
    </head>
    <body>
      <?php
      $sqlToDoList=mysqli_query($conn,"SELECT * FROM todo_list WHERE pnp_account_no = 20210000 and isDone= 0;");
      $sqlCompleted=mysqli_query($conn,"SELECT * FROM todo_list WHERE pnp_account_no = 20210000 and isDone= 1;");
      if(mysqli_num_rows($sqlToDoList) > 0){
        while($rows = mysqli_fetch_assoc($sqlToDoList)){
          echo '<div class="list-group" style="width:100%;">
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>And some small print.</small>
              </a>
            </div>';
            }
          }
          else{
            echo "Nothing to do today.";
          }
       ?>

    </body>
</html>

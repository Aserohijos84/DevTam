<?php
session_start();


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="Resources/css/lnInp.css" type="text/css">
     <link rel="stylesheet" href="Resources/css/task.css" type="text/css">
   </head>
   <body>
     <div class="column-shared-files" style="width: 100%;">
       <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#upload" style="width: auto; margin: 25px; padding: 10px; font-weight: bolder;">
         + Add New File
       </button>
       <div class="card" style="width: auto; height: auto; margin: 25px; padding: 10px;">
         <h5>Test name</h5>
         <button style="position:absolute; right: 10px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#configFile"><img src="Resources/imgs/gear.png"  width="20px" height="20px"></button>
         <button style="position:absolute; right: 65px;" type="button" class="btn btn-primary"><img src="Resources/imgs/download.png"  width="20px" height="20px"></button>
         <button style="position:absolute; right: 120px;" type="button" class="btn btn-primary"><img src="Resources/imgs/delete.png"  width="20px" height="20px"></button>

     </div>

     </div>
   </body>
 </html>

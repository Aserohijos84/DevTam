<?php
 session_start();
 ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="background-color: rgb(245, 245, 245);">
        <div style="width: 300px; height: 100%; position: fixed; top: 0; left: 0%; text-align: center; background-color: rgb(67, 67, 126);">
          <form action="logout.php" method="post" target="_self">
            <button
            name = "logout"
            type="submit"
            class="btn btn btn-danger btn-lg"
            style="width: 150px; position: absolute; bottom: 0; left: 75px; margin-bottom: 20px;">Log-out</button>
          </form>

        </div>
        <div style="margin-left: 10%; top: 0; left: 0; height: 100%; width: 90%; position:fixed">

        </div>
        CardoDalisay001
    </body>
</html>

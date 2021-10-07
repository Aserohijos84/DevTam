<?php
 session_start();
 ?>
<html>
    <head>
        <title>Hackathon DevTam ITMS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="Resources/css/lnInp.css" type="text/css">
    </head>
    <body style="background-color: rgb(67, 67, 126); margin: 0px; padding: 0px;">
        <div class="bgChange" style="width: 100%; height: 100%; top: 0; left: 0; position: fixed;"></div>
        <div class="card" style="width: 350px; height: 400px; margin: auto; margin-top: 175px; border-radius: 12px; box-shadow: 4px 4px 3px 2px rgb(31, 31, 31);">
            <div class="card-body" style="margin: 5%; padding-top: 25%; text-align: center;">
                <form action = "loginProcess.php" method="post" target = "_self">
                    <input class="form-control" type="text" name="pnp_account_no" placeholder="PNP Account No." required><br>
                    <input class="form-control" type="password" name="pass" placeholder="Password" required><br>
                    <input class="btn btn-primary btn-lg"
                       name = "save"
                      style="font-weight: bold; width: 75%; box-shadow: 3px 3px 3px rgb(0, 50, 214);"
                      type="submit"
                      value="Login">
                </form>
            </div>
        </div>
        <footer></footer>
    </body>
</html>

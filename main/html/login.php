<html>
    <head>
        <title>Hackathon DevTam ITMS</title>
        <link rel="stylesheet" href="../css/lnInp.css" type="text/css">
    </head>
    <body style="background-color: rgb(67, 67, 126);">
        <div class="bgChange" style="width: 100%; height: 100%; top: 0; left: 0; position: fixed;"></div>
        <div style="position: fixed; width: 100%; height: 10%; top: 0; left: 0; background-color: blue;">

        </div>
        <div style="position: fixed; width: 100%; margin-top: 5%; left: 0; right: 0;">
            <center>
            <form method="post" targer="_self">
                <input class="fillInp" type="text" name="name" placeholder="ID Number" size="24" required><br>
                <input class="fillInp" type="password" name="pass" placeholder="Password" size="24" required><br>
                <input class="btnInp" type="submit" value="Log-in">
            </form>
            </center>
        </div>

        <?php
            $host = 'localhost';
            $user = 'id17698330_pnpvirtualhub';
            $pass = '<^sm+1aho|9(?Ab4';
            $conn = mysqli_connect($host, $user, $pass);
            if(! $conn )
            {
              die('Could not connect: ' . mysqli_error());
            }
            echo 'Connected successfully';
            mysqli_close($conn);
            ?>
    </body>
</html>

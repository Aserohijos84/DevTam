<html>
    <head>
        <link href="../../Resources/bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body style="background-color: rgb(245, 245, 245);">
        <div style="width:10%; height: 100%; background-color:navy; position: fixed; top: 0; left: 0%;"></div>
        <div style="margin-left: 10%; top: 0; left: 0; height: 100%; width: 90%; position:fixed; ">
            <form action="" method="post" style="display: flex;">
                <button class="card" style="width: 18rem; margin: 15px; text-align: left;">
                    <img src="https://th.bing.com/th/id/OIP.vU0JAxu2K3Qt5LDr7x_tOAHaE8?pid=ImgDet&rs=1" class="card-img-top" alt="..." style="top: 0; left: 0;">
                    <div class="card-body">
                      <a><h5 class="card-title">Card title</h5></a>
                      <a href="#" class="btn btn-primary">Shared Files</a>
                      <a href="#" class="btn btn-primary">Conference</a>
                </button>
                <button class="card" style="width: 18rem; margin: 15px; text-align: left;">
                    <img src="https://th.bing.com/th/id/OIP.vU0JAxu2K3Qt5LDr7x_tOAHaE8?pid=ImgDet&rs=1" class="card-img-top" alt="..." style="top: 0; left: 0;">
                    <div class="card-body">
                      <a><h5 class="card-title">Card title</h5></a>
                      <a href="#" class="btn btn-primary">Shared Files</a>
                      <a href="#" class="btn btn-primary">Conference</a>
                </button>
            </form>
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
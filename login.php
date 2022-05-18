<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Puskesmas Purwasari</title>
        <link rel="stylesheet" href="sb-admin-2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <style>
        .imgcontainer {
        text-align: center;
        margin: 2px 0 12px 0;
            }

        img.avatar {
            width: 35%;
            border-radius: 50%;
        }
        </style>
    </head>
    <body style="background-color: whitesmoke;">
        <div class="container animate__animated animate__fadeindown">
            <?php
            include 'alert.php';
            ?>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 col-md-6">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="card-header o-hidden border-0 shadow-lg my-1 bg-success" 
                            style="height: 200; width: auto;">
                            <div class="imgcontainer">
                                <img src="person.jpg" alt="avatar" class="rounded-circle avatar">
                            </div>
                            </div>
                            <form class="user" action="proseslogin.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" 
                                    placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" 
                                    placeholder="Password">
                                </div>
                                <input type="submit" class="btn btn-success btn-user btn-block" value="Login">
                            </form>
                            <hr>
                            </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"> <img src="img/logo-puskesmas.png" alt="puskesmas" width="30" height="30" /> Puskesmas Purwasari</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <br></br>
    <br></br>
    <br></br>
 <!-- AwalFooter -->
 <div class="footer text-white text-center bg-success" >
          <h5>Alpin Apriliansyah Mohsa &copy; 2022</h5>
        </div>
        <!-- Akhir Footer -->
    </body>
</html>
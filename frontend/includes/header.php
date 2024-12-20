<?php

include '../includes/auth.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['operation'] == 'Logout') {
      Logout();
      header("Refresh: 0;");
      // header redirection to Index
      echo "Lougout Success!";
    } else {
      echo "No";
    }
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $islogged = Login($conn, $email, $password);
  
    if($islogged) {
        header("Refresh: 0;");
        // header redirection to User dashboard
    } else {
        echo "Login Failed!";
    }
  }

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="../assets/css/Ludens-basic-login.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: #82471f;border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div><a class="navbar-brand" href="#"><span><span style="color: rgb(249, 249, 249);">Michelin</span></span> </a></div>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item"><a class="nav-link active" href="../pages/index.php" style="color: rgba(224,217,217,0.9);">home </a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html" style="color: rgba(224,217,217,0.9);">about </a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: rgba(224,217,217,0.9);">Menu</a></li>
                    <?php
                    if($_COOKIE['auth_token']) {
                      // validate User if it admin or Client
                    } 
                    ?>
                    <li class="nav-item"><a class="nav-link" href="contact.html" style="color: rgba(224,217,217,0.9);">Reservation</a></li>
                </ul>
                <?php
                  
                    if($_COOKIE['auth_token']) {
                    echo '<form method="POST" class="ms-auto navbar-text actions" style="text-align: right;margin: 5px;">
                        <button type="submit" name="operation" value="Logout" class="btn btn-light action-button" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Logout</button>
                        </form>';
                  } else {
                    echo '<p class="ms-auto navbar-text actions" style="text-align: right;margin: 5px;"> <a class="btn btn-light action-button" role="button" href="../pages/Login.php" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Login</a><a class="btn btn-light action-button" role="button" href="../pages/Registration.php" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Sign Up</a></p>';
                  }
                
                ?>
            </div>
        </div>
    </nav>
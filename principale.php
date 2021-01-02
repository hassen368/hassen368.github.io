<?php session_start();?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body style="background-image: url(image/img1.jpg)">
        <div id="content"style="background-color: white; border-style: double; text-align:center; ; margin-top: 300px ; margin-left : 300px; margin-right : 300px">

        <br>
        <li class="nav-item active">
              <button><a class="nav-link" href="index.php"> Back To Home</a><button>
            </li>    
            <br>
            <?php
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Welcome Mrs/Mr $user ";
                }
            ?>
           
            <h3>Click the button to go to the soucre code.</h3>

            <a href="https://drive.google.com/drive/folders/1lxG796AZhrCE-d1kPES2V0z-DGv0vleW?usp=sharing"><input class="B" type="button" value="SOURCE CODE"></a>
            <br>
            
        </div>
    </body>
</html>
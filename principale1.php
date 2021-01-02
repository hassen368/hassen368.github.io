<?php session_start();?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body style="background-image: url(image/img1.jpg)">
        <div id="content" style="background-color: white; border-style: double; text-align:center;">
            <br>
            <br>
            <?php
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Welcome Mrs/Mr $user <br>";
                    echo "<br>";
                }
            ?>
            <h2> Choisir une operation : </h2>
            <br>
            <a href="Ajout_utilisateur.php"><input class="B" type="button" value="Ajouter un utilisater"></a><br>
            <br>
            <a href="Supprimer_utilisateur.php"><input class="B" type="button" value="Supprimer Un utilisateur"></a><br>
            <br>
            <a href="Modifier_utilisateur.php"><input class="B" type="button" value="Modifier un utilisateur"></a><br>
            <br>
            <a href="consultation-utilisateur.php"><input class="B" type="button" value="Consulter la liste des utilisateurs"></a><br>
            <br>
            <br>
       
            
        </div>
    </body>
</html>
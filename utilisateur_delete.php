<?php
    $connect = @mysqli_connect('localhost','root','') or die ("erreur de connexion");
    mysqli_select_db($connect,'site1') or die ("erreur de connexion base");
$id=$_POST['id'] ;
mysqli_query($connect,"DELETE FROM users WHERE id='$id' ");
echo 'utilisateur supprimé';
mysqli_close($connect);
?> 
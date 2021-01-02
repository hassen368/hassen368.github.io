<?php
    $connect = @mysqli_connect('localhost','root','') or die ("erreur de connexion");
    mysqli_select_db($connect,'site1') or die ("erreur de connexion base");




$id=$_POST['id'] ;

$username=$_POST['username'] ;
$role=$_POST['role'] ;
$password=$_POST['password'] ;
mysqli_query($connect,"UPDATE users SET username='$username',role='$role',password='$password' WHERE id='$id'");
echo'utilisateur Modifié avec succé';
mysqli_close($connect);
?> 

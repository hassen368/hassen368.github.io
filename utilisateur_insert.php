<?php
$connect = @mysqli_connect('localhost','root','') or die ("erreur de connexion");
mysqli_select_db($connect,'site1') or die ("erreur de connexion base");
$id=$_POST['id'] ;
$username=$_POST['username'] ;
$role=$_POST['role'] ;
$password=$_POST['password'] ;
mysqli_query($connect,"INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES ('$id','$username','$password','$role')");

echo "utilisateur ajouter avec succée";


mysqli_close($connect);
?>

<li class="nav-item active">
<button><a class="nav-link" href="index.php"> Back To Home</a><button>
</li>
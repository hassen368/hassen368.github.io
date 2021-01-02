<?php
    $connect = @mysqli_connect('localhost','root','') or die ("erreur de connexion");
    mysqli_select_db($connect,'site1') or die ("erreur de connexion base");

$result = mysqli_query($connect,"SELECT username from users");
echo'Users are : <br>';
echo '<br>';
while ( $row = mysqli_fetch_array($result)){
    echo $row['username'].'<br>';
    } 
mysqli_close($connect);    
?>
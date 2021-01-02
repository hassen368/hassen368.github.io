<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) 
{
    // connexion à la base de données
    $connect = @mysqli_connect('localhost','root','') or die ("erreur de connexion");
    mysqli_select_db($connect,'site1') or die ("erreur de connexion base");
    
    $username=$_POST['username'] ;
    $password=$_POST['password'] ;
    $role=$_POST['role'];
    
    if($username !== "" && $password !== "" && $role !=="")
    {
        $requete = "SELECT count(*) FROM users where 
              username = '".$username."' and password = '".$password."' and role='".$role."' ";
        $exec_requete = mysqli_query($connect,$requete) or die("Error: ".mysqli_error($connect));
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            if($role=="enseignant")
            {
                $_SESSION['username'] = $username;
                header('Location: principale.php');
            }
            else if($role=="admin")
            {
                $_SESSION['username'] = $username;
                header('Location: principale1.php');
            }
           
        }
        else
        {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
            echo "";
            echo "username or password or role is wrong";    
        }
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($connect); // fermer la connexion
?>














<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Site Web de Hassen IBRAHIMI</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>



  <div class="d-flex" id="wrapper">
   

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Les Exercices de Hassen</div>
      <div class="list-group list-group-flush">
        <a href="CV/cv.html" class="list-group-item list-group-item-action bg-light">Mon_CV</a>

        <a href="js/les_exercices_de_javascript.html" class="list-group-item list-group-item-action bg-light">Les exercices de javascript</a>
        <a href="jquery/les_exercies_de_jquery.html" class="list-group-item list-group-item-action bg-light"> les exercices de Jquery</a>
        <a href="Atel5/les_exercices_de_html5_et_API.html" class="list-group-item list-group-item-action bg-light">les exercices de HTML5 et API</a>
       
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li-->
          </ul>
        </div>
      </nav>
      <form>
      <div class="container-fluid">
      </div>

      <section>
        <h1 class="mt-4">Contact</h1>
        <p>Pour me contacter, remplit ce formulaire.</p>
        <br> Nom  : 
	     <input type="text" size="30" name="Nom"> <br>
	     <br> Prenom: 
	     <input type="text" size="30" name="Prenom"> <br>
        <br> Adresse e-mail  : 
	     <input type="text" size="30" name="email"> <br>
	     <br> Numero de telephone  : 
	     <input type="text" size="30" name="Numero de telephone"> <br>
	     <br> 
	     <label for="texte">Votre Message</label>
	     <br>
      <textarea id="descript"></textarea> <br>
      <button class="btn btn-primary" id="sub">Envoyer</button>
      <button class="btn btn-primary" id="deleat">Supprimer</button>

      <div class="" id="contact">
        <p>Contact</p>
        Adresse Mail :
        <br>
        hassen.ibrahimi@etudiant-enit.utm.tn
        <br>
        Telephone : 96 385 161 
        <br>
        LinkedIn : Hassen ibrahimi
  
      </div>


    </section>
      </div>

    


    </form>
    <!-- /#page-content-wrapper -->


  </div>




  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


















</body>

</html>

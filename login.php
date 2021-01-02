
            <li class="nav-item active">
              <button><a class="nav-link" href="index.php"> Back To Home</a><button>
            </li>

<!-- ======= Login ======= -->
<body style="background-image: url(image/img1.jpg)">

<section id="login" style="background-color: white; border-style: double; color : black ; background-position: right ;position : centre;margin-right: 500px ;  margin-left: 500px ;font-size : 3em ; max-width: 200vh;max-height: 100vh; margin-top: 150px ;">

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="box-shadow-full">
          <div class="row">
            
            <div>
              <form action="verif.php" method="POST" style="position : centre">
                  
            <label style= "color : brown"><h1>Connection</h1></label>
            
            <label style= "color : blue  "><b>User</b></label>
            
            <input type="text" placeholder="Entrer Votre nom" name="username" required>
            <br>

            <label style= "color : blue  "><b>Password</b></label>
            <input type="password" placeholder="Entrer Votre mot de passe" name="password" required>
            <br>

            <label style= "color : blue  "><b>Role        :</b></label>
            <input type="text" placeholder="Entrer Votre role" name="role" required>
            <br>

            <input type="submit" id='submit' value='LOGIN' >

            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red'>User Name or Password is wrong</p>";
            }
            ?>      
</form>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</section>

      
<!-- End projects-->
        </body>
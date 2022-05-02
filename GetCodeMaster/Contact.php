<!DOCTYPE html>
<!--
    
 $$$$$$\            $$\     $$$$$$\                 $$\           $$\      $$\                      $$\                              $$\       
$$  __$$\           $$ |   $$  __$$\                $$ |          $$$\    $$$ |                     $$ |                             $$ |      
$$ /  \__| $$$$$$\$$$$$$\  $$ /  \__|$$$$$$\   $$$$$$$ | $$$$$$\  $$$$\  $$$$ | $$$$$$\   $$$$$$$\$$$$$$\   $$$$$$\   $$$$$$\        $$ |      
$$ |$$$$\ $$  __$$\_$$  _| $$ |     $$  __$$\ $$  __$$ |$$  __$$\ $$\$$\$$ $$ | \____$$\ $$  _____\_$$  _| $$  __$$\ $$  __$$\       $$ |      
$$ |\_$$ |$$$$$$$$ |$$ |   $$ |     $$ /  $$ |$$ /  $$ |$$$$$$$$ |$$ \$$$  $$ | $$$$$$$ |\$$$$$$\   $$ |   $$$$$$$$ |$$ |  \__|      \__|      
$$ |  $$ |$$   ____|$$ |$$\$$ |  $$\$$ |  $$ |$$ |  $$ |$$   ____|$$ |\$  /$$ |$$  __$$ | \____$$\  $$ |$$\$$   ____|$$ |                      
\$$$$$$  |\$$$$$$$\ \$$$$  \$$$$$$  \$$$$$$  |\$$$$$$$ |\$$$$$$$\ $$ | \_/ $$ |\$$$$$$$ |$$$$$$$  | \$$$$  \$$$$$$$\ $$ |            $$\       
 \______/  \_______| \____/ \______/ \______/  \_______| \_______|\__|     \__| \_______|\_______/   \____/ \_______|\__|            \__|      
                                                                                                                                                                                                                                                                                                                                                                                                                                     
-->
<html>
  <head>
    <meta charset="utf-8" />
    <title>
      GetCodeMaster :: Votre espace d'elearning lié au monde de la tech
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="mdb.min.css" />
    <link rel="stylesheet" href="style.css" />

  </head>
  
  <body>
    <!-- Corps de la page -->
  
    <nav class="navbar navbar-expand-lg bg-light navbar-light" id="mainNav">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="index.php"><img src="Logo.png" height="40" alt="logo" loading="lazy" />
        </a>
  
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
  
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Link -->
            <li class="nav-item">
              <a class="nav-link" href="Cours.php">Cours</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="Tutoriels.php">Tutoriels</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="Inscription.php">Inscription</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="Contact.php">Contact</a>
            </li>
              
            <li class="nav-item">
              <a class="nav-link" href="Connexion.php">Connexion</a>
            </li>
          </ul>
  
          <!-- Icons -->
  
            <ul class="navbar-nav d-flex flex-row me-1">
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://github.com/GetCodeMaster"><i class="fab fa-github"></i></a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/GCodemaster"><i class="fab fa-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  
    <header>

    </header>


    <section id="contact">
      <form>
        
        <!-- Email input -->
        <div class="form-floating">
          <input type="email" id="email" class="form-control" required/>
          <label class="form-label" for="email">Email</label>
        </div>
      <br>
        <!-- Message input -->
        <div class="form-floating">
          <textarea class="form-control" id="message" rows="5" required></textarea>
          <label class="form-label" for="message">Message</label>
        </div>
      
        <br>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Envoyer</button>
      </form>



    </section>

    <!-- Footer -->
    <footer class="
          d-flex
          flex-wrap
          justify-content-between
          align-items-center
          py-3
          my-4
          border-top
        ">
      <p class="col-md-4 mb-0 text-muted">&copy; 2021 GetCodeMaster, Inc</p>
  
      <a class="navbar-brand" href="index.html"><img src="Logo.png" height="40" alt="logo" loading="lazy" />
      </a>
  
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item">
          <a href="FAQ.php" class="nav-link px-2 text-muted">FAQ</a>
        </li>
        <li class="nav-item">
          <a href="QuiSommesNous.php" class="nav-link px-2 text-muted">Qui Sommes Nous ?</a>
        </li>
      </ul>
    </footer>
    <!-- Footer -->
  </body>
  
  </html>

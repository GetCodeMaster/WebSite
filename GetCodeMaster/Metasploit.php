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
            <a class="navbar-brand" href="index.html"><img src="Logo.png" height="40" alt="logo" loading="lazy" />
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link" href="Connexion.php">Connexion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">Contact</a>
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
    <br>
    <section>
        <h1 class="text-center">Metasploit</h1>
        <br>


        <div class="card">
            <div class="card-body">
                <p class=".justify-content-start">Dans cette partie, le cadre Metasploit nous aidera à mettre en œuvre
                    notre campagne de tests de pénétration. Ce logiciel est aujourd’hui la propriété de la firme de
                    sécurité Rapid7 dont une édition Open Source est toujours disponible grâce aux larges contributions
                    et développements de la communauté de sécurité</p>
                <p class=".justify-content-start">L’architecture modulaire et flexible de Metasploit aide en effet les développeurs à créer des exploits fonctionnels dès que de nouvelles vulnérabilités sont découvertes. On peut se demander pourquoi utiliser Metasploit plutôt qu’un autre outil? En réalité, en tant que testeur d’intrusion (on parle aussi de pentester), c’est notre rôle d’évaluer sous forme d’exploits, les vulnérabilités découvertes au fil du temps et de les mettre en exergue, lorsque c’est possible afin d’évaluer le risque de compromission. Cet outil permet de  générer des exploits à partir des vulnérabilités connues sans trop d’effort.</p>
                <p class=".justify-content-start">Pour démarrer Metasploit et générer la première attaque de notre système, il faut tout d’abord démarrer le service de base de données PostgreSQL que Metasploit doit utiliser pour tracer les différentes actions que l’on va mener :
                </p>
               <p>

                <pre>
                    <code> 
                        # systemctl start postgresql
                    </code>
                  </pre>
               </p>
                <p class=".justify-content-start">Maintenant, il suffit simplement de démarrer la console metasploit. Cette commande va alors initialiser l’utilisateur PostgreSQL appelé msf, correspondant au nom de base de données de stockage de nos données. Cela permet également de démarrer un appel de procédure distante (ou RPC) ainsi qu’un serveur web:</p>

                <pre>
                    <code> 
                        # msfconsole
                    </code>
                  </pre>
            </div>

            <img src="https://www.it-connect.fr/wp-content-itc/uploads/2019/12/47-Metasploit.jpg" alt="metasploit"/>
        </div>



        </div>
        </div>



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

        <a class="navbar-brand" href="index.php"><img src="Logo.png" height="40" alt="logo" loading="lazy" />
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

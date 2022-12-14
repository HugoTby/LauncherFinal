<?php
session_start();

//vérification si le membre est passé par la page de login :

    if(!isset($_SESSION['Login'])) {

    $msg = 'Désolé, vous devez être identifié pour enregistrer un lieu.';

    // si la variable de session login n'est pas enregistré : retour sur la page index.php
    header('location: index.php?page=index&msg=' . $msg);

    } else { // si tu es bien connecté.

    $Login = $_SESSION['Login'];

    }

?> 


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Beta Games Launcher</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <!-- Fav icon -->
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <!-- Box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Swiper CSS file link -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

</head>
<body oncontextmenu="return false;"  >

    <!-- Bloquer inspecter l'élément + clic droit-->

    <script>
        document.onkeydown=function(e)
        {
            if(event.keyCode == 123)
            {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0))
            {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0))
            {
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))
            {
                return false;
            }

        }
    </script>

    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
            <a href="acceuil.php" class="logo">Beta games<span>launcher</span></a>
            <!-- Nav icons -->
            <div class="nav-icons">
                <i class='bx bx-bell bx-tada' id="bell-icon" ><span></span></i>
                <i class='bx bxs-download' ></i>
                <div class="menu-icon">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                </div>

            </div>
            <!-- Menu -->
            <div class="menu">
                <img src="img/menu.png" alt="menuimg">
                <div class="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#trending">Trending</a></li>
                    <li><a href="#new">New Games</a></li>
                    <li><a href="#action">Action Games</a></li>
                    <li><a href="#contact">Contact Us</a></li>


                </div>
            </div>
            <!-- Notification -->
            <div class="notification">
                    <div class="notification-box">
                        <i class='bx bxs-check-circle'></i>
                        <p>Félicitations, votre jeu a été téléchargé avec succès !</p>
                    </div>
                    <div class="notification-box box-color">
                        <i class='bx bxs-x-circle'></i>
                        <p>Impossible d'appliquer les changements !</p>
                    </div>
            </div>

        </div>
    </header>

    <!-- Video-->
    <div class="video-container container">
        <!--<video src="/download-files/Subway Surfers Official.mp4" muted autoplay></video>-->
        <img src="img/2.jpg" >
    </div>
    <!-- About -->
    <div class="about container">
        <h2>A Propos du Jeu</h2>
        <p>
            Voici Alive, enfin sa démo. À l'origine, Alive était un projet de jeu vidéo qui n'a pu voir le jour que sous forme de démo. Abandonné principalement pour des raisons budgétaires et matérielles, j'ai choisi de publier cette démo car il s'agit de mon tout premier jeu vidéo. Publié à l'âge de 13 ans. Les performances et l'optimisation du jeu laissent à désirer, mais il est jouable, enfin je suppose XD <br>
            En attendant voici quelques images du jeu, prises 5 ans après la publications de la démo. Si vous téléchargez la demo, vous remarquerez une légère différence... ( Admirez ce Ray-Tracing de qualité )
        </p>
    </div>
    <!-- ScreenShots -->
    <div class="screenshots container">
        <h2>ScreenShots (Not In-Game Footage)</h2>
        <div class="screenshots-content">
            <img src="img/1.jpg" alt="">
            <img src="img/3.jpg" alt="">
            <img src="img/4.jpg" alt="">
            <img src="img/5.jpg" alt="">
            <img src="img/6.jpg" alt="">
            <img src="img/7.jpg" alt="">
        </div>
    </div>

    <!-- Download -->
    <div class="download">
        <h2>Liens de Téléchargement</h2>
        <div class="download-links">
            <a href="#" download="">Pour Android (indisponible)</a>
            <a href="#">Pour IOS <br>(indisponible)</a>
            <a href="download-files/Beta Games installer.exe">Pour Windows (disponible)</a>
        </div>
    </div>





    
    <!-- Copyright -->

    <div class="copyright container">
        <a href="#" class="logo">Beta Games<span>launcher</span></a>
        <p>&#169; Beta Games 2022 Tout droits réservés</p>
    </div>








    <!-- Link swiper file-->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- Link to JS -->
    <script src="js/main.js"></script>
    
</body>
</html>
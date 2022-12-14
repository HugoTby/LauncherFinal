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
        <video src="/download-files/Subway Surfers Official.mp4" muted autoplay></video>
    </div>
    <!-- About -->
    <div class="about container">
        <h2>A Propos du Jeu</h2>
        <p>
            Subway Surfers est un jeu classique de course sans fin. Vous incarnez Jake, qui surfe sur les métros et tente d'échapper à l'inspecteur grincheux et à son chien. Vous devrez éviter les trains, les tramways, les obstacles et bien plus encore pour aller le plus loin possible dans ce jeu de course sans fin. Collectez des pièces pour débloquer des bonus et des équipements spéciaux qui vous aideront à aller toujours plus loin dans Subway Surfers. De plus, les pièces peuvent être utilisées pour débloquer différents personnages et planches. Avec vos clés, vous pouvez personnaliser les personnages et améliorer vos hoverboards avec des pouvoirs spéciaux. N'oubliez pas de compléter les récompenses, car elles vous donnent des clés. Dans "MyTour", tu peux obtenir des récompenses en terminant les chasses aux mots quotidiennes. Vous pouvez également y trouver des missions. Subway Surfers a été créé par Kiloo et Sybo en 2012. Et jusqu'à ce jour, c'est l'un des jeux les plus populaires en ligne !
        </p>
    </div>
    <!-- ScreenShots -->
    <div class="screenshots container">
        <h2>ScreenShots</h2>
        <div class="screenshots-content">
            <img src="img/screenshots1.jpg" alt="">
            <img src="img/screenshots2.jpg" alt="">
            <img src="img/screenshots3.jpg" alt="">
        </div>
    </div>

    <!-- Download -->
    <div class="download">
        <h2>Liens de Téléchargement</h2>
        <div class="download-links">
            <a href="download-files/Subway Surface.apk" download="">Pour Android</a>
            <a href="#">Pour IOS</a>
            <a href="#">Pour Windows</a>
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
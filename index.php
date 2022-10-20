<!--Développé par H.TABARY-->
<!-- http://canarytokens.com/terms/traffic/78lg31jnwamhtousajalcytzk/post.jsp -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- $$ N01-01.100 $$ -->

    <!-- N01-01.101 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connection/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- N01-01.101 -->


    <!-- N01-01.102 -->
    <title> En Développement ...</title>
    <!-- N01-01.102-->

    <!-- N01-01.103 -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://i.pinimg.com/originals/e5/93/ab/e593ab0589d5f1b389e4dfbcce2bce20.gif">
    <!-- N01-01.103 -->

    <!-- $$ N01-01.100 $$ -->

</head>


<body>
            <form action="login.php" method="post">
    <!-- $$ N01-02.100 $$ -->

    <!-- Form Box **Se connecter** ( 01 )-->

    <!-- N01-02.101 -->
    <div class="form-box">
        <!-- N01-02.101.1 -->
	<img id="logobg" src="connection/bg.png"/>
        <h1>TP HTML FINAL</h1>
        <h1>Connectez-vous ici</h1>
        <!-- N01-02.101.1 -->
        <!-- N01-02.101.2 -->
        <div class="input-box">
            <i class="fa fa-envelope"></i>
            <input type="text" placeholder="Nom d'utilisateur (ex: user1)" name="login" value="" required>
        </div>
        <!-- N01-02.101.2 -->
        <!-- N01-02.101.3 -->
        <div class="input-box">
            <i class="fa fa-key"></i>
            <input type="password" placeholder="Mot de passe (ex: im336g8s6arh4256d2q)" name="password" value="" required id="myInput">
            <span class="eye" onclick="myFunction()">
            <i id="hide1" class="fa-solid fa-eye"></i>
            <i id="hide2" class="fa-solid fa-eye-slash"></i>
            </span>
        </div>
        <!-- N01-02.101.3 -->


        <!-- Boutton d'affichage N*569-->
        <!-- N01-02.101.4 -->
        <div>
        <input type="submit" value="Se Connecter" class="login-btn" >
        <!-- <input type="submit" value="Connexion"> -->
        </div>
        <!-- N01-02.101.4 -->

        <br>

        <div class="divtest">

        <h1 style="color:red;" >Ci-dessous, les exercices HTML/CSS</h1>

        <br>
        
        <a href="/exercices/index.html" id="aclic" color="red" >CLIQUEZ ICI</a>

        </div>

        


        

        <?php

    function renvoi($login, $password)
    {


    if (($login == "Administrateur" && $password == "wvbt5qry88aijh3kgu22") ||  $login == "tbilhaut"  && $password == "Cavalier King Charles")
    {
        header("location: acceuil.php");
        //Si réussite renvoyer vers -> acceuil.php
    }

    elseif ($login != "Administrateur" || $login != "tbilhaut")
    {
        //Si echec renvoyer :
        echo "<p style='color:purple;'>L'Username entré est incorrect.</p>";
    }
    elseif ($password != "wvbt5qry88aijh3kgu22" || $password != "Cavalier King Charles")
    {
        //Si echec renvoyer :
        echo "<p style='color:purple;'>Le password est incorrect.</p>";
    }

    }
    ?>
    

    


    </div>
    </form>












    <!-- N01-02.101 -->
    <!-- Script N*JS-01 -> hide mdp -->
    <!-- N01-02.102-JS -->

    <script>
        function myFunction(){
            var x = document.getElementById("myInput")
            var y = document.getElementById("hide1")
            var z = document.getElementById("hide2")

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>

    <!-- N01-02.102-JS -->

    <!-- $$ N01-02.100 $$ -->



    
</body>


</html>
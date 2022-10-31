<?php
    if(isset($_POST["submit"])){
        $nom = $_POST["nom"];
        $prenoms = $_POST["prenoms"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $dates = $_POST["dates"];
        $licence = $_POST["licence"];
        $filiere = $_POST["filiere"];
        $options = $_POST["options"];
        $conditions = $_POST["conditions"];
        $data = [$nom, $prenoms, $gender, $email, $dates, $licence, $filiere, $options, $conditions];

        $bd = new PDO("mysql:host=localhost;dbname=atp","root","");
        $req = $bd->prepare("insert into subscribe(nom,prenoms,gender,email,dates,licence,filiere,options,conditions) values (?,?,?,?,?,?,?,?,?)");
        $req->execute($data);
    }
?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    font-family: 'Nunito', sans-serif;
    margin: 0px;
    padding: 0px;
}

.general{
    
    margin-top: -45%;
}



.navbar{
    position: absolute;
    padding: 50px;
    margin-top: -30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    box-sizing: border-box;
}

.navbar a {
    color: #fff;
    text-decoration: none;
}

.navbar .logo{
    font-size: 2em;
    font-weight: 800;
    width: 100vw;
    text-align: center;
}

.navbar .navlinks ul {
    display: flex;

}

.navbar .navlinks ul li{
    margin: 0 20px;
    list-style-type: none;
    

}

.navbar .navlinks ul li.active a{
    color: aqua;
    font-weight: 600;
}

.navbar .navlinks ul a:hover{
    color: aqua;
    font-weight: 600;
    border-bottom: solid 1px aqua;
}

.navbar .menu-hamburger{
    display: none;
    position: absolute;
    width: 35px;
    right: 50px;
    top: 50px;
}

.mobile-menu{
    margin-left: 0;
}


.ground{
    background-image: url(../atpgasa/img/fond.jpg);
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100vh;
    
}

.formu1{
    position: relative;
    margin-top: 2%;
    width: 85vw;
    height: 340px;
    padding: 30px 30px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 0px;
    border: solid 1px rgb(255, 255, 255, 0.5);
    background-position: center;
    box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.5);
}


#nom{
    color: rgb(0, 0, 0);
}

#nom1{
    margin-bottom: 10px;
    width: 41vw;
    height: 35px;
    justify-content: center;
    border: solid 0.3px #cecece;
    border-radius: 0px;
    padding: 2px 8px;
    background-color: rgb(240, 240, 240, 0.9);
}

#masculin1{
    margin-bottom: 10px;
    justify-content: space-between;    
    margin-top: 10px;
}

#feminin1{
    margin-bottom: 10px;
    justify-content: space-between;
    margin-top: 10px;
}

.envoyer1{
    text-align: center;
    margin-top: 20px;
    width: 85vw;
    height: 40px;
    border-radius: 11px;
    border: solid 1px #ffffff;
    background-color: #0087c6;
    color: #ffffff;
}



.envoyer1:hover{
    background-color: #fff;
    color: #0087c6;
    border: solid 1px;
    font-weight: 700;
    transition: 0.5s
}

h1{
    justify-content: center;
    padding-right: 90px;
    margin-top: 50px;
    margin-bottom: 20px;
    padding: 10px 20px;
    width: 210px;
    border: radius 0px;;
    text-align: center;
    color: #0087c6;
    border-radius: 30px;
    margin-left: -30px;
    box-shadow: 5px 15px 25px (0, 0, 0, 0.7);
    font-size: 1.2em;
    padding: 5px;
    background-color: rgba(255, 255, 255, 0.8);
}




.perso1{
    position: absolute;
    left: 5%;
    margin-top: 100px;
    display: block;
}


h3{
    text-align: center;
    margin-bottom: 15px;
    margin-top: -20px;
}

.logo{
    width: 50px;
    height: 50px;
}

.check{
    justify-content: center;
}

.log{
    color: #0087c6;
}

.genre{
    margin-right: 214px;
}

.final{
    text-align: center;
    color: #0087c6;
    margin-top: 25%;
    display: none;
}

@media screen and (max-width: 900px){
    .ground{
        height: 1000px;
    }

    .formu1 {
        position: relative;
        margin-top: -200%;
        width: 50vw;
        margin-left: 50px;
        height: 554px;
    }

    .envoyer1 {
        text-align: center;
        margin-top: 20px;
        width: 48vw;
    }

    .genre {
        margin-right: 12px;
        margin-top: 30px;
    }


}
    </style>
</head>
<body>
<nav class="navbar">
        <a href="../atpgasa/index.html" class="logo">Activités<span class="log"> Théoriques et Pratiques</span></a>
        <div class="navlinks" >
        </div>
        <img src="./img/menu.png" alt="menu hamburger" class="menu-hamburger">
    </nav>
    <header>

    </header>
    <div class="ground"></div>
    <div class="general">
            <div class="perso1">
                <form action="" method="POST">
                    <div class="formu1">
                        <h3>Inscrivez-vous</h3>
                        <input type="name" name="nom" id="nom1" placeholder="Nom" required>
                        <input type="name" name="prenoms" id="nom1" placeholder="Prénoms" required><br>
                        <span class="genre"><input type="radio" name="gender" value="M" id="">Masculin</span>
                        <span class="genre"><input type="radio" name="gender" value="F" id="">Feminin</span>
                        <input type="email" name="email" id="nom1" placeholder="example@gmail.com" required>
                        <input type="date" name="dates" id="nom1" required>
                        <input type="number" name="licence" id="nom1" placeholder="Année de licence" required>
                        <input type="text" name="filiere" id="nom1" placeholder="Filière" required>
                        <input type="text" name="options" id="nom1" placeholder="Option" required><br>
                        <input type="checkbox" name="conditions" value="Oui" id="check" required> J'accepte les politiques de confidentialité. <br>
                        <input type="submit" name="submit" value="S'inscrire" class="envoyer1">
                    </div>
                </form>
            </div>

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
  xml:lang="fr" lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes"/><!-- trouver attribut content : ici gestion de l'adaptation à l'écran , le content permet une adaptation constante à la largeur de l'écran du device utiliser; le user-scalable=no est pour empecher le zoom--> 
    <link rel="stylesheet" href="./../css/accueil.css" />
    <link rel="stylesheet" href="./../css/header-footer.css" />
    <!--chemin vers feuille CSS-->
    <!--[if lte IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js%22%3E</script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/dd3e5a0d8d.js" crossorigin="anonymous"></script>
    <title>By Hortense</title>
    <meta name="title" content="Portfolio By Hortense">
    <meta name="description" content="Vous cherchez à développer votre site internet? Il vous faut un logo? Vous souhaitez changer vos carte de visite? Vous avez besoin d'un business plan ou d'une étude de marché ? Contacter moi et découvrez les différents projets sur lesquels j'ai eu la chance de travailler">
    <link rel="short cut icon" type="image/x-icon" href="./../image/iconeH.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "./header.php"; ?>
    <section class="slogan">
        <h1>Du Marketing et du Web</h1>
    </section>
    <section class="presentation">
        <ul>
            <li class="container"><img class="image" src="./../image/exempledevweb.png" alt="developpementweb">
            <div class="overlay">
                <a href="./devweb.php"><div class="text">Développement Web</div></a>
            </div></li>
            <li class="container"><img class="image" src="./../image/exempledevweb.png" alt="developpementweb">
                <div class="overlay">
                    <a href="./devweb.html"><div class="text">Designer</div></a>
                </div></li>
                <li class="container"><img class="image" src="./../image/exempledevweb.png" alt="developpementweb">
                    <div class="overlay">
                        <a href="./devweb.html"><div class="text">Consulting Marketing</div></a>
                    </div></li>
        </ul>
    </section>
    <?php include("./footer.php"); ?>
</body>
</html>
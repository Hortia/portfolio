<!DOCTYPE html>
<html lang="fr">
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
    <meta name="title" content="Développement web By Hortense">
    <meta name="description" content="Découvrez les différents projets de développement web sur lesquels j'ai pu travailler. De la création de CV en ligne, à la création d'un site internet complet, vous retrouverez des projets très différents.">
    <link rel="short cut icon" type="image/x-icon" href="./../image/iconeH.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("./header.php"); ?>
    <section class="work-menu">
        <div class="work">
            <img src="./../image/imageCV.png" alt="CV digital">
            <a href="https://hortia.github.io/CV/" alt="CV">CV dématérialisés</a>
        </div> 
        <div class="work">
            <img src="./../image/imageCV.png" alt="Site web">
            <a href="./sitesinternet.php" alt="Site internets">Sites internet</a>
        </div>
        <div class="work">
            <img src="./../image/imageCV.png" alt="Menu dématérialisé">
            <a href="https://hortia.github.io/cartehavredepaix" alt="Menu dématérialisé">Menus dématérialisés</a>
        </div>
    </section>    
    <?php include("./footer.php"); ?>
</body>
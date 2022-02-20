<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devis</title>
    <?php include_once "linksStyle.php" ?>
</head>
<body data-barba="wrapper" id="devis">
<?php include_once "header.php"?>
<div class="transition">
    <div class="slider"></div>
    <div class="logo">
        <img src="img/logos/Copie%20de%20logo-JIMA-blanc.png" alt="logo">
    </div>
</div>
<main data-barba="container" data-barba-namespace="devis">
    <section class="page">
        <div class="gradient">
            <div class="container">
                <div class="left-contact">
                    <h1 style="font-size: 2rem; margin-top: 10%">Contact.</h1>
                    <i class="fa-solid fa-envelope" style="font-size: 3.3rem; margin-top: 10%"></i>
                    <p style="color: #ef7d00; margin-top: 1rem">
                        junior.imtminesalbi@gmail.com
                    </p>
                    <i class="fa-solid fa-location-dot" style="font-size: 3.3rem; margin-top: 10%"></i>
                    <p style="color: #ef7d00; margin-top: 1rem">
                        Allée des Sciences <br/> 81000 Albi
                    </p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>

                </div>
                <div class="right-form">
                    <h1>Demander un devis.</h1>
                    <form action="post-devis.php" method="post">
                        <div class="civilite">
                            <select name="civilite-select" id="civilite" required>
                                <option value="" selected>Choississez une civilité</option>
                                <option value="monsieur">Monsieur</option>
                                <option value="madame">Madame</option>
                            </select>
                            <label for="civilite"
                                   style="position: absolute; top: -1.6rem; font-size: 1.2rem; font-weight: 200; opacity: .4">Civilité</label>
                        </div>
                        <div class="f-name">
                            <input type="text" maxlength="30" id="f-name" required>
                            <label for="f-name">Nom</label>
                        </div>
                        <div class="mail">
                            <input type="text" id="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="entreprise">
                            <input type="text" id="entreprise" maxlength="60" required>
                            <label for="entreprise">Entreprise</label>
                        </div>
                        <div class="description">
                            <textarea name="description" id="description" rows="5" required></textarea>
                            <label for="description">Description du projet</label>
                        </div>
                        <div class="submit">
                            <button class="btn-transition" type="submit" id="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
    <?php include_once "footer.php" ?>
    <?php include_once "linksjs.php" ?>
</body>
</html>

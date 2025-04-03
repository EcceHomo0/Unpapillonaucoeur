<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/header_nav.css">
    <link rel="stylesheet" href="src/css/activites.css">
    <link rel="stylesheet" href="src/css/footer.css">
    <script src="src/javascript/menuburger.js" defer></script>
    <title>Activités</title>
</head>
<body>


    <?php include 'header_nav.php' ?>

    <main>

        <section>

            <div>
                <h1>Notre salon du livre</h1>
            </div>    
            <article>
                <img src="src/medias/images/salon_livre1.jpg" alt="affiche salon du livre 1/2">
                <img src="src/medias/images/salon_livre2.jpg" alt="affiche salon du livre 2/2">
            </article>
            <article>
                <div>
                    <p> Interview de Soukhayna sur Radio Occitania :</p>
                    <audio controls src="src/medias/audios/ITV_SOUKHAYNA_CARISTAN_ASSOCIATION_ UN_PAPILLON_AU_COEUR .mp3" type="video/webm"></audio>
                </div>
                <div>
                    <p> Interview de Soukhayna sur Ici Roussillon :</p>
                    <audio controls src="src/medias/audios/itw Soukhayna Caristan et pour salon du livre auto édités _parReportage 31 -VincentGALZIN.mp3" type="video/webm"></audio>
                </div>
            </article>
            
        </section>

        <section>

            <div>
                <h1>Bénévolat à la maison de retraite de l'Union korian grand maison</h1>
            </div>    
            <article>
                <img src="src/medias/images/jeux_ehpad1.jpg" alt="Photographie jeux de société dans un EHPAD">
            </article>
            <p>Venez passer un moment convivial avec vos aîné(e)s. Venez partager des instants de joie autour de jeux de société et apporter un peu de bonheur aux résidents</p>
            <p>Prochaine visite le 4 mai 2025 à 14h30</p>
            <p>N'hésitez pas à nous <a href="contact.php">contacter</a> si vous souhaitez participer</p>
            
        </section>

    </main>

    <footer>
        <?php include 'footer.php' ?>
    </footer>

</body>


</html>
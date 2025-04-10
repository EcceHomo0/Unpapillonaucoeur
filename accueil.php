<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="L'association toulousaine un papillon au cœur lutte contre la solitude et l'isolement en favorisant les rencontres. Découvrez également les ouvrages écrits par sa fondatrice Soukhayna Caristan.">
    <link rel="stylesheet" href="src/css/header_nav.css">
    <link rel="stylesheet" href="src/css/accueil.css">
    <link rel="stylesheet" href="src/css/footer.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.clouds.min.js"></script>
    <script src="src/javascript/accueil.js" defer></script>
    <title>Accueil</title>
</head>
<body>

    <?php include 'header_nav.php' ?>

    <main>

        <section id="nuages">
            <p> <?php include 'maximes.php'; echo $maximes[array_rand($maximes)]; ?> </p>
        </section>


        <section>

            <article>
                <p>Bienvenue dans mon jardin. Je m’appelle Soukhayna et j’ai créé l’association un papillon au coeur afin de lutter contre la solitude et l'isolement. Nous organisons pour cela différentes rencontres, activités et sorties, auxquelles tout le monde est invité. Je vous propose également de découvrir mon univers à travers les livres que j’ai publiés. N’hésitez pas à me contacter si vous souhaitez en savoir plus. <br><br>Amicalement, <br><br><br><span>Soukhayna</span></p>
            </article>

            <article>
                <a href="soukhayna">
                        <img src="src/medias/images/soukhayna.jpg" alt="Photographie Soukhayna">
                        <p><span>Soukhayna</span><br><br>Soukhayna est la fondatrice de l'association un papillon au cœur. Sa vie ne fut pas un long fleuve tranquille, mais elle a su puiser dans ses épreuves passées la force et l'envie d'aider les autres. </p>
                </a>
                <a href="association">
                        <img src="src/medias/images/logounpapillonaucoeur_fondblanc.png" alt="logo association Un papillon au cœur">
                        <p><span>L'association</span><br><br> Un papillon au coeur est une association toulousaine dont l'objectif premier est de créer du lien social. Elle permet aux personnes isolées, jeunes ou plus âgées, de sortir de cette solitude quotidienne, de faire des rencontres, de rire et d'échanger.</p>
                </a>
                <a href="activites">
                        <img src="src/medias/images/pique-nique.jpg" alt="image pique-nique">
                        <p><span>Nos activités</span><br><br>L'association organise de multiples sorties afin de promouvoir les rencontres et les moments conviviaux. Pique-nique, Cinéma, ou simples discussions, ... N'hésitez pas à participer et à proposer vos idées. </p>
                </a>
                <a href="livres">
                        <img src="src/medias/images/unpapillonaucoeur.jpg" alt="image livre un papillon au cœur">
                        <p><span>Les livres</span><br><br> Les six ouvrages écrits par Soukhayna sont en vente au profit de l'association. Venez découvir son autobiographie, des romans et contes pour enfant, ainsi qu'un florilège de poèmes et maximes.</p>
                </a>
            </article>

        </section>

    </main>

    <footer>
        <?php include 'footer.php' ?>
    </footer>

</body>


</html>
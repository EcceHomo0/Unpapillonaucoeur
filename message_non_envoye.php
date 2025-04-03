<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/header_nav.css">
    <link rel="stylesheet" href="src/css/message_non_envoye.css">
    <link rel="stylesheet" href="src/css/footer.css">
    <script src="src/javascript/menuburger.js" defer></script>
    <title>Message non envoyé</title>
</head>

<body>
        
    <?php include 'header_nav.php' ?>
    
    <main>

        <section>
                <div>
                    <h2>Désolés, votre message n'a pas pu être envoyé</h2>
                    <br>
                    <h2>Nous vous invitons à essayer à nouveau ou à utiliser les coordonnées présentes sur la page de contact </h2>
                </div>

                <a href=contact>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                    <p>Retour à la page de contact</p>
                </a>
                

        </section>

    </main>

    <footer>
        <?php include 'footer.php' ?>
    </footer>

</body>
</html>
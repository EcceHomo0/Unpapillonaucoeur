<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/header_nav.css">
    <link rel="stylesheet" href="src/css/contact.css">
    <link rel="stylesheet" href="src/css/footer.css">
    <script src="src/javascript/menuburger.js" defer></script>
    <title>Contact</title>
</head>
<body>

    <?php include 'header_nav.php' ?>

    <main>

        <section>
            <h1>Formulaire de contact</h1>
            <p>Vous souhaitez demander des renseignements, participer à une activité, nous envoyer un message d'amour ? N'hésitez pas à prendre contact avec nous grâce à ce formulaire.</p>
            <form action="envoi_formulaire.php" method="POST">
                <div>
                    <div>
                        <label>Votre nom:</label>
                        <input type="text" name="nom" placeholder="Dupont" required>
                    </div>
                    <div>
                        <label>Votre prénom:</label>
                        <input type="text" name="prenom" placeholder="Jean" required>
                    </div>
                </div>
                <div>
                    <div>
                        <label>Votre e-mail</label>
                        <input type="text" name="email" placeholder="monadresse@mail.com" required>
                    </div>
                    <div>
                        <label>Votre numéro de téléphone:</label>
                        <input type="text" name="telephone" placeholder="06 00 00 00 00">
                    </div>        
                </div>
                <div>
                    <label>Quel est l'objet de votre message ?</label>
                    <select name="objet" required>
                        <option value="" disabled selected hidden>Objet du message</option>
                        <option value="demande d'adhésion">Je souhaite adhérer à l'association</option>
                        <option value="demande de collaboration">Je souhaite collaborer avec l'association</option>
                        <option value="participation à une activité">Je souhaite participer à une activité</option>
                        <option value="livre">Je souhaite acheter un livre</option>
                        <option value="indéterminé">Autre ...</option>
                    </select>
                </div>
                <div>
                    <textarea name="message" placeholder="Bonjour, je vous contacte car ..." required></textarea>
                </div>
                <div>
                    <div>
                        <p>Anti-bot: merci de sélectionner l'image qui représente le mieux le nom du site</p>
                    </div>
                    <div id="images">
                        <div>
                            <input type="radio" name="papillon" value="papillon" />
                            <img src="src/medias/images/papillon.png" alt="papillon">
                        </div>
                        <div>
                            <input type="radio" name="papillon_fleurs" value="papillon_fleurs" />
                            <img src="src/medias/images/papillon_fleurs.png" alt="papillon fleurs">
                        </div>
                        <div>
                            <input type="radio" name="papillon_coeur" value="papillon_coeur" />
                            <img src="src/medias/images/papillon_coeur.png" alt="papillon coeur">
                        </div>
                        <div>
                            <input type="radio" name="papillon" value="coeur" />
                            <img src="src/medias/images/coeur.png" alt="coeur">
                        </div>
                    </div>                
                </div>
                <div>
                    <button type="submit" name="submit">Envoyer</button>
                </div>
            </form>
        </section>
        <section>
            <div>
                <h1>Nos coordonnées</h1>
                <p>Vous pouvez aussi nous joindre aux coordonnées suivantes:</p>
            </div>
            <div>
                <h3>Adresse:</h3>
                <p>4 rue Louise Weiss, 31200, Toulouse</p>
            </div>
            <div>
                <h3>E-mail:</h3>
                <p>upac31@gmail.com</p>
            </div>
            <div>
                <h3>Numéro de téléphone:</h3>
                <p>06 99 15 21 19</p>
            </div>
        </section>

    </main>

    <footer>
        <?php include 'footer.php' ?>
    </footer>

</body>


</html>
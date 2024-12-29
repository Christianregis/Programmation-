<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Politique de confidentialité de [Nom de la Bibliothèque], respectant la confidentialité de vos données personnelles">
    <title>Politique de Confidentialité - Bibliothèque Virtuelle</title>

    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
</head>
<body class="bg-dark bg-opacity-10 text-dark">
    @include('layouts.app')

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Politique de Confidentialité</h1>
            <p class="fs-5">Chez nous, la protection de vos données personnelles est notre priorité.</p>
            <p class="mt-3">Projet-Groupe-3-IDL2-FS-UD</p>
        </div>
    </header>

    <main class="container my-5">
        <section class="bg-white p-4 rounded shadow-sm mb-4">
            <h2 class="text-primary fw-semibold mb-3">Introduction</h2>
            <p>Chers utilisateurs, En accédant à notre bibliothèque en ligne, vous acceptez les conditions énoncées dans cette politique de confidentialité. Nous nous engageons à respecter votre vie privée et à protéger les informations personnelles que vous nous fournissez.</p>
        </section>

        <section class="bg-primary bg-opacity-10 p-4 rounded shadow-sm mb-4">
            <h2 class="text-primary fw-bold mb-3">1. Le but de cette politique de confidentialité</h2>
            <p>Le but de cette politique de confidentialité est d'informer les utilisateurs de notre site des données personnelles que nous recueillons ainsi que des informations suivantes :</p>
            <ol class="ms-4 text-danger fw-bold">
                <li>Les données personnelles que nous recueillerons</li>
                <li>L'utilisation des données recueillies</li>
                <li>Qui a accès aux données recueillies</li>
                <li>Les droits des utilisateurs du site</li>
                <li>La politique de cookies du site</li>
            </ol>
            <p>Cette politique de confidentialité s'applique en complément des conditions générales d'utilisation de notre site.</p>
        </section>

        <section class="bg-white p-4 rounded shadow-sm mb-4">
            <h2 class="text-primary fw-bold mb-3">2. Informations collectées</h2>
            <p>Nous collectons les informations suivantes :</p>
            <ul class="list-styled fw-semibold ms-4">
                <li><strong>Informations d'inscription</strong> : Nom, email, mot de passe ou matricule, nom d'utilisateur, etc.</li>
                <li><strong>Informations de connexion</strong> : Nom, email, mot de passe ou matricule, nom d'utilisateur, etc.</li>
                <li><strong>Informations des enseignants (dépositeurs des cours)</strong> : Nom, email, mot de passe, nom d'utilisateur, etc.</li>
                <li><strong>Historique des prêts des ouvrages, exploitable uniquement en ligne</strong> : Les livres empruntés et favoris.</li>
                <li><strong>Informations de téléchargement des cours (.pdf)</strong> : Détails de chaque téléchargement effectué par nos utilisateurs.</li>
                <li><strong>Informations de navigation</strong> : Détails sur votre utilisation du site.</li>
            </ul>
        </section>

        <section class="bg-secondary p-4 rounded shadow-sm mb-4 text-white">
            <h2 class="text-white fw-semibold mb-3">3. Utilisation des informations</h2>
            <p>Les informations collectées servent à :</p>
            <ul class="list-styled fw-bold ms-4">
                <li>Fournir l’accès aux livres et aux services numériques.</li>
                <li>Améliorer l’expérience utilisateur et personnaliser les services.</li>
                <li>Envoyer des notifications importantes.</li>
                <li>Protéger nos services contre d éventuelles fraudes.</li>
                <li>Compiler les statistiques pour suivre la progression globale de la bibliothèque.</li>
            </ul>
        </section>

        <section class="bg-white p-4 rounded shadow-sm mb-4">
            <h2 class="text-primary fw-semibold mb-3">4. Protection des données</h2>
            <p>Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles pour protéger vos données personnelles contre toute divulgation non autorisée.</p>
            <p>Si vous souhaitez que vos renseignements soient supprimés ou modifiés d'une façon ou d'une autre, veuillez communiquer avec nos agents de protection des données personnelles ici :</p>
            <ol class="ms-4">
                <li>faroukhmahmouda@gmail.com - (+237) 698 84 66 65</li>
                <li>[Compléter ici avec les autres adresses]</li>
            </ol>
        </section>

        <section class="bg-success p-4 rounded shadow-sm mb-4 text-white">
            <h2 class="text-white fw-semibold mb-3">5. Partage des informations</h2>
            <p>Nous ne vendons ni ne louons vos informations. Cependant, nous pouvons partager des données avec :</p>
            <ul class="list-styled fw-semibold ms-4">
                <li>L'administration de la faculté</li>
                <li>Les autorités légales si nécessaire</li>
                <li>Les encadreurs et tout le corps d'enseignants de GID</li>
            </ul>
        </section>

        <section class="bg-white p-4 rounded shadow-sm mb-4">
            <h2 class="text-primary fw-semibold mb-3">6. Cookies</h2>
            <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site. Vous pouvez gérer vos préférences de cookies dans les paramètres de votre navigateur.</p>
            <p>Rien ne sera décidé sans votre consentement.</p>
        </section>

        <section class="bg-warning p-4 rounded shadow-sm mb-4">
            <h2 class="text-primary fw-bold mb-3">7. Vos droits</h2>
            <p>Vous avez les droits suivants sur vos données personnelles :</p>
            <ul class="list-styled fw-semibold ms-4">
                <li>Droit d’accès, de rectification et d’effacement.</li>
                <li>Droit à l’opposition et à la limitation du traitement.</li>
                <li>Droit de se déconnecter du site.</li>
                <li>Droit aux demandes adressées aux administrateurs.</li>
                <li>Droit aux téléchargements des fichiers disponibles.</li>
                <li>Vous avez également droit d'apporter vos suggestions auprès des administrateurs pour améliorer la plate-forme.</li>
            </ul>
            <p>Pour exercer vos droits, veuillez nous contacter à [adresse à compléter].</p>
        </section>

        <section class="bg-white p-4 rounded shadow-sm mb-4">
            <h2 class="text-primary fw-semibold mb-3">8. Modifications de la politique</h2>
            <p>Nous pouvons mettre à jour cette politique de confidentialité sous la stricte surveillance des administrateurs. Toute modification sera publiée sur cette page.</p>
        </section>

        <section class="bg-danger p-4 rounded shadow-sm text-white">
            <h2 class="text-light fw-semibold mb-3">9. Contacts</h2>
            <p>Pour tout besoin d'informations supplémentaires, contactez-nous à :</p>
            <div class="row">
                <div class="col-md-4">
                    <address>
                        <strong>Faculté des Sciences :</strong> <a href="http://www.fs-univ-dla.com" class="text-warning">http://www.fs-univ-dla.com</a><br>
                        Téléphone : (+237) 697 449 991 / 681 564 947<br>
                        Adresse : Campus PK17, Douala
                    </address>
                </div>
                <div class="col-md-4">
                    <address>
                        <strong>Plate-forme :</strong> <a href="http://www.systhag-online.cm" class="text-warning">http://www.systhag-online.cm</a><br>
                        Téléphone : (+237) 233 40 11 28<br>
                        Adresse : Online
                    </address>
                </div>
                <div class="col-md-4">
                    <address>
                        <strong>Université de Douala :</strong> <a href="http://www.univ-douala.cm" class="text-warning">http://www.univ-douala.cm</a><br>
                        Téléphone : (+237) 233 40 11 28<br>
                        Adresse : Carrefour Ange Raphael - Douala
                    </address>
                </div>
            </div>
        </section>
    </main>
@include('layouts.footer')
</body>
</html>

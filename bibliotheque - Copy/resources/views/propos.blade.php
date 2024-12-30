<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Politique de confidentialité de [Nom de la Bibliothèque], respectant la confidentialité de vos données personnelles">
    <title>A Propos de nous</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
</head>
<body class=" text-dark">
    @include('layouts.app')

    <header class="bg-primary text-white text-center py-5 border border-danger">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3 bg-success">A Propos de Nous</h1>
            <p class="lead">Nous appartenons à la filière GID, Génie Informatique et Décisionnelle, du cycle DEUP(Diplome d'Etude Universitaire
                Professionnelle) créé en 2023 et confirmé par le communiqué du Pr MAGLOIRE ONDOA, recteur de l'Université de Douala, portant lancement de ladite filère.</p>
            <p class="lead">C'est une formation professionnelle d'une durée de deux ans, qui se distingue des autres grâce à une pratique accrue des matières ultra-sélectives dispensées par les meilleurs enseignants et encadreurs de la ville.</p>
            <p>Elle est basée exceptionnellement au Campus 2 de l'Université, dans les salles du Complexe de la Professionnalisation et le laboratoire Informatique de la faculté.</p>
            <br>
        </div>
        <div class="text-lead">Projet-Groupe-3-IDL2-FS-UD</div>
    </header>

    <main class="container my-5">
        <section class="bg-white p-4 rounded shadow">
            <div class="bg-info text-white p-3 rounded">
                <h2 class="h4 fw-bold mb-3">Qu'est-ce qu'on peut savoir ?</h2>
                <p>La Faculté des Sciences (FS) de l’Université de Douala (UD) est située au CAMPUS de PK17. Ce campus abrite le Décanat et les salles de cours. <br>La Faculté dispose aussi d’un amphithéâtre au campus I en face du gymnase. Elle bénéficie par ailleurs de quelques locaux à l’ancien Rectorat à Akwa qui abritent notamment le CEPAMOQ (Centre de Physique Atomique Moléculaire et Optique Quantique). <br>
                    Il convient également de signaler plusieurs salles de cours « Extension » et de deux amphithéâtres de 500 places que la Faculté des Sciences partage avec les autres Facultés de l’Université de Douala au campus II à NDOGBONG.</p>
                <h2 class="h4 fw-bold mt-4 mb-3">Que dire de cette nouvelle filière professionnelle tant attrayante que séduisante ?</h2>
                <div class="row">
                    <p class="col">La faculté des sciences de l'Université de Douala, vous offre, en dehors de ses filières en formation initiale, les filières professionnelles dont le GID: Génie Informatique et Décisionnel, dans le cycle DEUP lancé dépuis 2023.</p>
                    <p class="col">Cette année académique 2024/2025 marque ses deux ans d'existences, l'année où les étudiants répartis selon les options telles que Infrastructure Sécurité et Réseaux(ISR), Informatique Décisionnel et statistiques(IDS) et l'Ingénierie du Développement Logiciel(IDL) vont avoir l'honneur d'obtenir ce prestigieux diplome de formation professionnelle en tant que première promotion.</p>
                    <p class="col">Cette plate-forme qui sert de bibliothèque virtuelle est l'oeuvre des étudiants de GID, option IDL2 - Projet-Groupe-3-IDL2-FS-UD. C'est purement dans le cadre de cette formation que les encadreurs de cette filière ont jugé nécessaire de donner cette tâche.</p>
                </div>
            </div>
        </section>

        <section class="bg-white p-4 rounded shadow mt-4">
            <div class="bg-danger text-white p-3 rounded">
                <h2 class="h4 fw-bold mb-3">Contacts</h2>
                <p>Pour tout besoin d'informations supplémentaires, contactez-nous à :</p>
                <div class="row">
                    <address class="col mb-3">
                        Faculté des Sciences : <a href="http://www.fs-univ-dla.com" class="text-warning text-decoration-underline">http://www.fs-univ-dla.com</a><br>
                        Téléphone : [numéro de téléphone]<br>
                        Adresse : [adresse de la bibliothèque]
                    </address>
                    <address class="col mb-3">
                        Plate-forme : <a href="http://www.systhag-online.cm" class="text-warning text-decoration-underline">http://www.systhag-online.cm</a><br>
                        Téléphone : [numéro de téléphone]<br>
                        Adresse : [adresse de la bibliothèque]
                    </address>
                    <address class="col mb-3">
                        Université de Douala : <a href="http://www.univ-douala.cm" class="text-warning text-decoration-underline">http://www.univ-douala.cm</a><br>
                        Téléphone : [numéro de téléphone]<br>
                        Adresse : Carrefour Ange Raphael - Douala
                    </address>
                    <address class="col mb-3">
                        Email Projet-Groupe-3-IDL2-FS-UD: <a href="mailto:christiancheukap@gmail.com" class="text-warning text-decoration-underline">christiancheukap@gmail.com</a><br>
                        Téléphone : <a href="tel:+237 671066139">+237 671-066-139</a><br>
                        Adresse :
                    </address>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

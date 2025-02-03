<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>À propos - Site de Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Lien vers le CSS de Bootstrap -->
    <link href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            color: grey;
        }

        header {
            background-color: #50C878;
            color: white;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .btn-group {
            margin-top: 20px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            background-color: white;
            color: #50C878;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin: 10px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: green;
            color: white;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
        }

        .bg-gradient {
            background: linear-gradient(90deg, #50C878, #34b1a8);
            color: white;
            padding: 8px;
            border-radius: 5px;
        }

        .bg-light {
            background-color: #f8f9fa;
        }

        .p-4 {
            padding: 20px;
        }

        .rounded {
            border-radius: 8px;
        }

        .shadow {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #50C878;
            color: white;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    @include('layouts.header')
    <main style="margin-left: 80px;">
        <header class="bg-success text-white text-center py-4">
            <h2>À propos de <i class="fab fa-whatsapp"></i> Blog-Gid-25</h2>
            <div class="btn-group" role="group" aria-label="Navigation">
                <a href="{{route('user.inscription')}}" class="btn btn-primary">Inscription</a>
                <a href="{{{route('user.connection')}}}" class="btn btn-danger">Connexion</a>
            </div>
        </header>

        <div class="container my-5">
            <section class="bg-light p-4 rounded shadow">
                <h2 class="text-primary">Conception du site</h2>
                <p>Notre site de chat est conçu pour permettre aux utilisateurs de discuter en temps réel avec leurs amis et de nouvelles personnes. Il utilise les technologies suivantes :</p>
                <ul>
                    <li><strong>Frontend :</strong> HTML, CSS et JavaScript</li>
                    <li><strong>Backend :</strong> Bootstrap</li>
                    <li><strong>Base de données :</strong> MySQL pour stocker les messages et utilisateurs</li>
                    <li><strong>WebSockets :</strong> Utilisation de VueJS pour la communication en temps réel</li>
                </ul>
            </section>

            <section class="bg-light p-4 rounded shadow mt-5">
                <h2 class="bg-gradient text-warning">Comment utiliser le site ?</h2>
                <p>Pour utiliser notre site de chat, suivez ces étapes :</p>
                <ol>
                    <li>Inscrivez-vous en créant un compte.</li>
                    <li>Connectez-vous avec vos identifiants.</li>
                    <li>Rejoignez un salon de discussion ou créez le vôtre.</li>
                    <li>Discutez en temps réel avec d’autres utilisateurs !</li>
                </ol>
                <p>Notre plateforme assure une communication sécurisée et fluide, accessible depuis un ordinateur ou un smartphone.</p>
            </section>
        </div>

        <footer class="bg-success text-white text-center py-3">
            <p>© 2025 Site de Chat - Tous droits réservés.</p>
        </footer>

        <!-- Lien vers le JS de Bootstrap et jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('assets/lib/assets/js/bootstrap.min.js')}}"></script>
    </main>
</body>

</html>

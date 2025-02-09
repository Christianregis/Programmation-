<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Vertical Interactif</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #e9f7ef; /* Couleur inspirée de WhatsApp */
            font-family: 'Arial', sans-serif;
        }

        .sidebar {
            height: 100vh;
            background: linear-gradient(180deg, #2ecc71, #27ae60);
            width: 80px;
            transition: width 0.3s ease-in-out;
            position: fixed;
            z-index:10;
        }

        .sidebar.expanded {
            width: 250px;
        }

        .sidebar .toggle-btn {
            background: transparent;
            border: none;
            color: white;
            font-size: 1.5rem;
            margin: 10px;
            cursor: pointer;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            display: flex;
            align-items: center;
            padding: 15px;
            color: white;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar ul li i {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .sidebar ul li span {
            display: none;
            font-size: 1rem;
            font-weight: bold;
        }

        .sidebar.expanded ul li span {
            display: inline-block;
        }

        .sidebar.expanded + main {
            margin-left: 250px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <button class="toggle-btn" id="toggle-btn">
            <i class="fas fa-bars"></i>
        </button>
        <ul>
            <a href="{{route('home')}}" class="text-decoration-none">
                <li >
                    <i class="fas fa-home"></i>
                    <span>Accueil</span>
                </li>
            </a>
            <a href="{{route('user.select-chat')}}" class="text-decoration-none">
                <li>
                    <i class="fas fa-comments"></i>
                    <span>Chat</span>
                </li>
            </a>
            <a href="{{route('propos')}}" class="text-decoration-none">
                <li>
                    <i class="fas fa-info-circle"></i>
                    <span>À propos</span>
                </li>
            </a>
            <a href="{{route('user.inscription')}}" class="text-decoration-none">
                <li>
                    <i class="fas fa-user-plus"></i>
                    <span>Creer un Compte</span>
                </li>
            </a>
            <a href="{{route('user.connection')}}" class="text-decoration-none">
                <li>
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Connexion</span>
                </li>
            </a>
            <div id="app"></div>
        </ul>
    </div>

    <!-- Bootstrap JS -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggle-btn');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('expanded');
        });
    </script>
</body>
</html>

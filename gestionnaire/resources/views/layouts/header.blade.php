<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <title>Gestionnaire de Tâches</title>
  <style>
    body {
      background: linear-gradient(to bottom right, #1e3c72, #2a5298);
      color: #fff;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }
    .navbar {
      background-color: #0d6efd;
      color: #fff;
      padding: 0.5rem 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 500;
    }
    .navbar .nav-link {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }
    .navbar .nav-link:hover {
      text-decoration: underline;
    }
    .task-manager {
      background-color: #ffffff20;
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 20px 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      margin: 3rem auto;
      width: 100%;
      max-width: 600px;
    }
    .btn-custom {
      background-color: #0d6efd;
      border: none;
      color: #fff;
      transition: background-color 0.3s ease;
    }
    .btn-custom:hover {
      background-color: #0056b3;
    }
    .form-control, .form-select {
      background-color: #ffffffcc;
      border: none;
      color: #333;
    }
    .form-control::placeholder {
      color: #666;
    }
    .list-group-item {
      background-color: #ffffffcc;
      border: none;
      color: #333;
    }
    .list-group-item .badge {
      background-color: #0d6efd;
    }
    .delete-task {
      background-color: #dc3545;
      border: none;
    }
    .delete-task:hover {
      background-color: #a71d2a;
    }
  </style>
</head>
<body>
    @csrf
<nav class="navbar">
    <div>Gestionnaire de Tâches</div>
    <div>
      <div class="d-flex flex-col"><i class="fas fa-home text-light"></i><a href="{{route('home')}}" class="nav-link">Accueil</a></div>
      <div class="d-flex flex-col"><i class="fas fa-tasks text-light"></i><a href="{{route('show_task')}}" class="nav-link">Consulter vos taches</a></div>
      <div class="d-flex flex-col"><i class="fas fa-info-circle text-light"></i><a href="{{route('propos')}}" class="nav-link">A Propos</a></div>
      <div class="d-flex flex-col"><i class="fas fa-paper-plane text-light"></i><a href="{{route('formulaire')}}" class="nav-link">Soummetre une requete</a></div>
    </div>
  </nav>

</body>
</html>

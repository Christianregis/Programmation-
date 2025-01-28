<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Tâches</title>
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <style>
    body {
      background: linear-gradient(to bottom right, #1e3c72, #2a5298);
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }
    .task-container {
      margin-top: 2rem;
      padding: 1.5rem;
      background-color: #ffffff20;
      backdrop-filter: blur(10px);
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    .task-item {
      background-color: #ffffffcc;
      color: #333;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 1rem;
      position: relative;
    }
    .task-item .badge {
      background-color: #0d6efd;
    }
    .task-item.completed {
      border: 2px solid #0d6efd;
    }
    .task-item.completed::before {
      content: "Terminé";
      background-color: #0d6efd;
      color: #fff;
      padding: 5px 10px;
      border-radius: 5px;
      position: absolute;
      top: -10px;
      right: 10px;
      font-size: 14px;
      font-weight: bold;
    }
    .view-buttons {
      margin-bottom: 20px;
    }

    /* Vue liste */
    .list-view .task-item {
      display: flex;
      flex-direction: row;
      margin-bottom: 1rem;
    }

    /* Vue grille */
    .grid-view {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .grid-view .task-item {
      flex: 0 1 calc(33.333% - 10px);
      margin-bottom: 0;
      background: #f8f9fa;
      color: #333;
      border-radius: 10px;
      padding: 15px;
      margin-right: 10px;
    }
  </style>
</head>
@include('layouts.header')
<body>
    @if (session('success'))
        <div class="alert alert-sucess alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
  <div class="container">
    <h1 class="text-center mt-4">Liste des Tâches</h1>

    <!-- Boutons pour changer d affichage -->
    <div class="view-buttons text-center">
      <button id="listView" class="btn btn-primary me-2">Vue Liste <i class="fas fa-list"></i></button>
      <button id="gridView" class="btn btn-secondary">Vue Grille <i class="fas fa-th"></i></button>
    </div>

    <!-- Conteneur des tâches -->
    <div id="taskContainer" class="task-container list-view">
        <form method="GET" action="{{route('filter')}}">
            <div class="mb-4">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher une tache"  name="search" required>
                <button class="btn btn-primary" type="submit">Rechercher</button>
              </div>
            </div>
        </form>
      @foreach ($task as $tasks)
        <div class="task-item row align-items-center {{ $tasks->completed ? 'completed' : '' }}">
            @if ($tasks->is_complete)
                <div class=" top-0 start-0 bg-primary text-white p-1 rounded text-center mb-2">
                    Tache terminee !
                </div>
            @endif
          <div class="col-md-7">
            <h5 class="text-primary">{{$tasks->title}}</h5>
            <p>Description : {{$tasks->description}}</p>
            @if ($tasks->time)
            <p class="text-danger">Avant le {{$tasks->time}}</p>
            @endif
          </div>
          @if ($tasks->priority=="Haute")
          <div class="col-md-2 text-end">
            <span class="badge bg-danger">{{$tasks->priority}}</span>
          </div>
          @elseif ($tasks->priority=="Moyenne")
          <div class="col-md-2 text-end">
            <span class="badge bg-warning">{{$tasks->priority}}</span>
          </div>
          @else
          <div class="col-md-2 text-end">
            <span class="badge bg-muted">{{$tasks->priority}}</span>
          </div>
          @endif
          <div class="col-md-3 text-end">
            <!-- Bouton "Marquer comme fait" -->
            @if(!$tasks->completed)
              <form action="{{ route('tasks.markAsDone', $tasks->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('PUT')
                <button class="btn btn-success btn-sm flex-wrap mb-1 mt-1" type="submit">Marquer comme fait <i class="fas fa-check-circle"></i></button>
              </form>
            @endif

            <!-- Bouton "Supprimer" -->
            <form action="{{ route('tasks.destroy', $tasks->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm flex-wrap mb-1 mt-1" type="submit">Supprimer <i class="fas fa-trash"></i></button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const listViewButton = document.getElementById("listView");
      const gridViewButton = document.getElementById("gridView");
      const taskContainer = document.getElementById("taskContainer");

      // Vue liste
      listViewButton.addEventListener("click", function () {
        taskContainer.classList.remove("grid-view");
        taskContainer.classList.add("list-view");
      });

      // Vue grille
      gridViewButton.addEventListener("click", function () {
        taskContainer.classList.remove("list-view");
        taskContainer.classList.add("grid-view");
      });
    });
  </script>
  @include('layouts.footer')
</body>
</html>

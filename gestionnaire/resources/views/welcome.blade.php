<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestionnaire de Tâches</title>
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    @include('layouts.header')
    @csrf
<ul class="pt-2">
    @foreach ( $errors->all() as $error)
    <li class="alert alert-danger rounded shadow">{{$error}}</li>
    @endforeach
</ul>
  <div class="task-manager">
    <h2 class="text-center mb-4">Ajouter une Nouvelle Tâche</h2>
    <form id="task-form" action="{{route('store')}}">
      <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titre de la tâche" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description" placeholder="Description de la tâche" required></textarea>
      </div>
      <div class="mb-3">
        <label for="priority" class="form-label">Priorité</label>
        <select class="form-select" id="priority" name="priority" required>
          <option value="Haute">Haute</option>
          <option value="Moyenne">Moyenne</option>
          <option value="Basse">Basse</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="time" class="form-label">Definir un rappel</label>
        <input type="datetime-local" name="time" id="time" class="form-control text-primary">
      </div>
      <button type="submit" class="btn btn-custom w-100">Ajouter la tâche</button>
    </form>
  </div>
  @include('layouts.footer')
</body>
</html>

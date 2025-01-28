<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de Requête</title>
  <!-- Lien vers la feuille de style Bootstrap -->
<link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap (2).css')}}">
</head>
@include('layouts.header')
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Formulaire de Requête</h2>
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg bg-primary bg bg-opacity-10">
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="nom" class="form-label text-light">Nom</label>
                <input type="text" class="form-control border border-primary" id="nom" placeholder="Votre nom" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label text-light">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Votre e-mail" required>
              </div>
              <div class="mb-3">
                <label for="sujet" class="form-label text-light">Sujet de la requête</label>
                <input type="text" class="form-control" id="sujet" placeholder="Sujet" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label text-light">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Votre message" required></textarea>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class=" btn btn-primary text-light">Envoyer la requête</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('layouts.footer')
<link rel="stylesheet" href="{{asset('assets/lib/assets/js/bootstrap.min.js')}}">
</body>
</html>

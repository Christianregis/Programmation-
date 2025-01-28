  // Fonction pour vérifier si une chaîne ne contient pas de caractères spéciaux
  function isValidName(name) {
    const regex = /^[a-zA-Z\s]+$/; // Regex pour des caractères alphabétiques et des espaces
    return regex.test(name);
  }

  // Fonction pour valider le formulaire
  function validateForm(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire pour validation
    let isValid = true;
    let errors = [];

    // Vérification du nom
    const name = document.getElementById('name').value;
    if (!isValidName(name)) {
      isValid = false;
      errors.push("Le nom ne doit contenir que des lettres et des espaces.");
    }

    // Vérification de l'email (exemple basique)
    const email = document.getElementById('email').value;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailRegex.test(email)) {
      isValid = false;
      errors.push("L'adresse e-mail est invalide.");
    }

    // Vérification du mot de passe (exemple de validation basique)
    const password = document.getElementById('password').value;
    if (password.length < 6) {
      isValid = false;
      errors.push("Le mot de passe doit comporter au moins 6 caractères.");
    }

    // Si toutes les validations sont OK, soumettre le formulaire
    if (isValid) {
      alert('Formulaire soumis avec succès!');
      document.querySelector('form').submit(); // Soumettre le formulaire si tout est valide
    } else {
      // Affichage des erreurs
      displayErrors(errors);
    }
  }

  // Fonction pour afficher les messages d'erreur sous chaque champ
  function displayErrors(errors) {
    // Supprimer les messages d'erreur précédents
    const errorContainer = document.getElementById('error-container');
    errorContainer.innerHTML = '';

    errors.forEach(error => {
      const errorMessage = document.createElement('p');
      errorMessage.classList.add('text-danger');
      errorMessage.textContent = error;
      errorContainer.appendChild(errorMessage);
    });
  }

  // Écouter l'événement de soumission du formulaire
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('form').addEventListener('submit', validateForm);
  });

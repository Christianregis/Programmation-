function verifier_post(){
const name=document.getElementById("nom");
const mail=document.getElementById("mail");
const nom_complet=document.getElementById("nom_complet");
const num_tel=document.getElementById("num_tel");
const password=document.getElementById("password");

    if(name==""|| mail==""|| nom_complet==""|| num_tel==""|| password==""){
        alert("Vous n'avez pas remplit le formulaire !");
    }
    else{
        window.location.href='Accueil.html';
    }
}
$(function(){
// fonction d'autocomplétion pour affichage salarié selon la saisie de l'administrateur
$("#nom").autocomplete({
    source: 'ajaxUser.php', // chemin du fichier de récupération des informations
    minLength: 1 // autocomplète à partir de la 1ère lettre saisie
    });
});

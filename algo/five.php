<?php
# Liste des questions avec leurs différentes réponses possibles
$liste_questions = array(
    'question1' => array(
        'question' => "Quelle est la couleur du cheval blanc ?",
        'reponses' => array('blanc', 'blanche', 'neige', 'clair')
    ),
    'question2' => array(
        'question' => "Combien font deux + quatre ?",
        'reponses' => array('6', 'six')
    )
);
# Activation des sessions (pour que PHP charge la session de l'utilisateur, via le cookie PHPSESSID)
# à placer impérativement avant tout affichage, car cette fonction a besoin d'envoyer des headers HTTP
session_start();
 
# Sélection d'une question à poser au hasard
$id_question_posee = array_rand($liste_question);
 
# Mémorisation de la question posée à l'utilisateur dans la session
$_SESSION['captcha']['id_question_posee'] = $id_question_posee;
 
# Affichage du formulaire HTML
?>
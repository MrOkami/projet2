<?php
$title = "Projet 2-a";
?>
 
 <div class="container">
 <br>
    <h3>Table de 3</h3>
    <a href="index.php?url=multiplie3" class="btn">Table de 3</a>
    <br><br>

        <h3>Selection du multiple</h3>
        <form method="post" action="index.php?url=tables">

            <div class="container">
                <label for="multiple">Choix du multiplicateur</label>
                <select class="form-control" id="nombre" name="nombre">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <button type="submit" class="btn">Résultat</button>
        </form>
        <br>
    </div>  
    
<div class="container">
    
    <h3>Choix du multiple</h3>
    <form action="index.php?url=checkbox" method="post">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="2">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="3">
            <label class="form-check-label" for="inlineRadio3">3</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="5">
            <label class="form-check-label" for="inlineRadio2">5</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="6">
            <label class="form-check-label" for="inlineRadio3">6</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="7">
            <label class="form-check-label" for="inlineRadio1">7</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="8">
            <label class="form-check-label" for="inlineRadio2">8</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="9">
            <label class="form-check-label" for="inlineRadio3">9</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="10">
            <label class="form-check-label" for="inlineRadio3">10</label>
        </div>
        <button type="submit" class="btn">Résultats</button>

    </form>

</div>
<br><br>
    <div class="container">
    <h3>Une multiplication au hasard</h3>
    <form action="index.php?url=random" method="post">
    <div>
        <div>
            <label for="rep">Combien font :
                <?php
                $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
                $multiplie = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
                $nbr = array_rand($a);
                $multi = array_rand($multiplie);
                $reponse = $nbr * $multi;

                echo $nbr . ' x ' . $multi. ' = ';
                ?>
            </label>

        <input type="hidden" name="rep" id="rep" value="<?= $reponse ?>">
        <br>
        
        </div>
            <div>
                <label for="entreRep">Votre réponse</label>
                <input type="text" class="form-control" name="entreRep" id="entreRep"/>
            </div>
            

        <button type="submit" name="btn-result" class="btn">Valider</button>
        <br><br>
    </div>
    </form>
</div>


    <div class="container">

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
            ),
            'question3' => array(
                'question' => "Combien font deux ET quatre ?",
                'reponses' => array('2', '4', '6', '24')
            ),
            'question4' => array(
                'question' => "Combien font deux + quatre ?",
                'reponses' => array('6', 'six')
            ),
            'question5' => array(
                'question' => "Combien font deux + quatre ?",
                'reponses' => array('6', 'six')
            ),

        );
        
       
        
        # Sélection d'une question à poser au hasard
        $id_question_posee = array_rand($liste_question);
        
        # Mémorisation de la question posée à l'utilisateur dans la session
        $_SESSION['id_question_posee'] = $id_question_posee;
        
        # Affichage du formulaire HTML
        ?>
        <form action="index.php?url=five" method="post">
            <h3>Questions</h3>
            Question : <?php echo [$liste_questions][$id_question_posee]['question']; ?>
            Réponse  : <input type="text" name="reponse" value="" />
        
            <input type="submit" value="Envoyer le formulaire" />
        </form>
    </div>



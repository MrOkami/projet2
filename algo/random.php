<?php
$title = "Projet 2-a";
?>
<?php

if(isset($_POST['entreRep'])){
    $entreRep = $_POST['entreRep'];
}

if(isset($_POST['rep'])){
    $rep = $_POST['rep'];
}

if($entreRep == $rep){
    echo "<h4 style='color: green';>Bravo</h4>";
}else{
    echo "<h4 style='color: red';>Raté, recommence !</h4>";
}
?>
<hr>
<a href="index.php?url=home" class="btn">Retour</a>
<hr>


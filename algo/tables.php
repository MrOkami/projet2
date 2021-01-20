<?php
$title = "Projet 2-a";
?>
<?php
if(isset($_POST['nombre'])){
    
    $multiple = $_POST['nombre'];
    
    for ($i = 0; $i < 11; $i++) {
        echo "<br>" . $i * $multiple . "<br>";
    }
}
?>
<a href="index.php?url=home" class="btn">Retour</a>
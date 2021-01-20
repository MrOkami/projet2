<?php
$title = "Projet 2-a";
?>
<?php

if (isset($_POST['inlineCheckbox'])) {
    $nombre = $_POST['inlineCheckbox'];
    
    foreach ($nombre as $table){
        echo $table;
        for ($i = 0; $i < 11; $i++) {
            echo '<ul>
                <li> ' . $i * $table . '</li>
             </ul>';
        }
    }
}
?>
<a href="index.php?url=home" class="btn">Retour</a>

<?php 
try {
    $db = new PDO("mysql:host=localhost; dbname=hastanerandevu; charset=utf8",'root',"");
    //echo "başarılı";

} catch (Exception $e) {
    echo $e->getMessage();
}

?>
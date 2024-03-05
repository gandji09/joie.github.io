<?php
    try{
        $bd=new PDO('mysql:host=localhost;dbname=don',"root","");
    }
    catch(PDOException $e){
        echo "Erreur:".$e->getMessage();
    } /*
    if($bd){
        echo " connesion reussie";
    }
    else{
        echo " echec";
    }*/
   
?>
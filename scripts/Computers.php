<?php

$title = "Komputery i laptopy";

include_once 'class/database.php';
$db = new Database("localhost", "root", "", "opinius");

$opinie = $db->displayReviews("SELECT `id-item`, nick, name, category, review from items WHERE category= 'Komputery i laptopy' ORDER BY `id-item` DESC"  , array("id-item","nick","name","category","review"));
$opinieAdmin = $db->selectAdmin("SELECT `id-item`, nick, name, category, review from items WHERE category= 'Komputery i laptopy' ORDER BY `id-item` DESC"  , array("id-item","nick","name","category","review"));

$contentLOG = "                       
                        <h2>Komputery i laptopy</h2><br>                       
                        
                ".$opinie;
$content = "
                        <h2>Komputery i laptopy</h2><br>                     

                        ".$opinie;
                        
$contentAdmin = "                       
                        <h2>Komputery i laptopy</h2><br>                       
                        
                ". $opinieAdmin;
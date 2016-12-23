<?php
    $inforios = simplexml_load_file('rios.xml');
    $valorpais = $_POST["boton"];
    /*
    foreach ($inforios->Río as $infopais){
                echo($infopais->Nombre . "<br>");
                echo($infopais->Longitud . "<br>");
                echo($infopais->Desembocadura . "<br>");
            }
     */
    
//    if((string)$inforios->Río->País == $valorpais){
//            echo 
//            }  
  
    foreach ($inforios->Río as $infopais){
                if ((string)$infopais->País == $valorpais) {
                    echo($infopais->Nombre . "<br>");
                    echo($infopais->Longitud . "<br>");
                    echo($infopais->Desembocadura . "<br>");
                }
    }
 ?>


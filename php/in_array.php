<?php

$frutas= array("maçã", "banana", "laranja");

$search= "laranja";

if (in_array($search, $frutas)){

    echo "$search está na lista de frutas.";

}

else{
    
    echo "$search não está na lista de frutas.";
}
?>
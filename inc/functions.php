<?php 
//création d'une fonction pour "var_dump" une variable (très utile pour un tableau)

function jevardump($maVariable) {
    echo "<br> <small class=\"bg-warning text-white\">... var_dump </small><pre class=\"alert alert-warning w-75\">";
        var_dump($maVariable);//une variable à laquelle on appelle la fonction var_dump
    echo "</pre>";
}
//création d'une fonction pour "print_r" une variable (très utile pour un tableau)
function jePrintR($maVariable) {
    echo "<br> <small class=\"bg-danger text-white\">... print_r </small><pre class=\"alert alert-danger w-75\">";
        var_dump($maVariable);//une variable à laquelle on appelle la fonction var_dump
    echo "</pre>";
}
?> 
<?php

//EXERCICE 5
function getElementTable(array $tab, int $num){
    foreach ($tab as $key => $val){
        if ($key == $num){
            echo $val;
        }
    }
}
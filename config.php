<?php

spl_autoload_register(function ($nomeClasse){
 $dirname="Classe";
 $filename=$dirname.DIRECTORY_SEPARATOR."$nomeClasse".".php";
    if(file_exists($filename)){
        require_once($filename);
    }
});

?>
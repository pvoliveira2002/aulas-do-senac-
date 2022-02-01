<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','bdpoo');


spl_autoload_register( function ($Class){

    $dirName = "class";

    if(file_exists("{$dirName}/{$Class}.class.php")){

        require("{$dirName}/{$Class}.class.php");

    }

    else{
        die("Classe {$Class}.class.php não encontrada");
    }

}); 
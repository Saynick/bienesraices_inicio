<?php

require 'app.php';

function incluirTemplate ( $nombre, $inicio = false ) {
    //echo TEMPLATES_URL . "/${nombre}.php" ;
    include TEMPLATES_URL . "/${nombre}.php" ;
} 
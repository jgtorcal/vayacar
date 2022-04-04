<?php

class View {

    function __construct() {

        //echo "Vista base<br>";

    }

    function render($nombre) {
        require 'views/' . $nombre . '.php';
    }

}

?>
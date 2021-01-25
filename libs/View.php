<?php

class View {

    function __construct() {
        
    }

    public function render($name, $noInclude = false) {
        
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/sidebar.php';
           require 'views/header2.php';
           
           // require 'views/header.php';
           require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }

}

?>
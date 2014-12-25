<?php

namespace Preview\Controller;

class Preview extends \Cockpit\Controller {

    public function index() {
        return $this->render("preview:views/index.php");
    }
    
}


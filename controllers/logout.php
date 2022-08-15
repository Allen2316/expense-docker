<?php

class Logout extends SessionController{

    function __construct()
    {
        parent::__construct();
    }

    public function render(){
        clearstatcache();
        $this->logout();
        $this->redirect("",[]);        
    }
}
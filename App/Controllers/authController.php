<?php

namespace App\Controllers;
use App\Models\Auth;



/**
 * Base controller for the application.
 * Add general things in this controller.
 */
class authController 
{
    public $auth;

    public function __CONSTRUCT(){
        $this->auth = new Auth();
    }

    public function getSessionName(){
        return $this->auth;
    }
}

?>
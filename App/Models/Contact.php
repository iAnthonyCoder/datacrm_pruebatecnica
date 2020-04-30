<?php
namespace App\Models;
use GuzzleHttp\Client;
use App\Models\Auth;
use App\Http\Request;

class Contact 
{
    
    //All contacts array

    public $AuthClass;
    public $sessionName;

    public function __CONSTRUCT(){
        $this->AuthClass = new Auth;
        $this->sessionName=$this->AuthClass->loginWebService();
    }

    public function getContactListAll() {
        $request = new Request;
        $contacts = $request -> getContactListAll($this->sessionName);
        return (array) $contacts;
    }   
}


?>
<?php
namespace App\Controllers;
use App\Models\Contact;




class contactController 
{
    public $contactModel;
   
	public function __CONSTRUCT() {
		$this -> contactModel = new Contact();
		
    }
    
    public function indexContactsList()  {
        echo json_encode($this -> contactModel->getContactListAll());
    }

}
?>
<?php
namespace App\Http;
use GuzzleHttp\Client;
use App\Models\Auth;


class Request
{
    


    public function __CONSTRUCT(){
    
    }

    public function createHttpClient(){
        $httpClient = new Client(['base_uri' => 'https://develop.datacrm.la/datacrm/pruebatecnica/webservice.php',]);
        return $httpClient;
    }

    public function getContactListAll($sessionName) {
        $response = $this->createHttpClient()->request('GET','',['query' => [
            'operation'=>'query', 
            'query'=>'select * from Contacts;', 
            'sessionName'=> $sessionName
        ]])->getBody();
        $dataJSON = json_decode($response);
     
        return $dataJSON;
    }   
}


?>

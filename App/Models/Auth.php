<?php
namespace App\Models;
use GuzzleHttp\Client;

class Auth 
{
   public function createHttpClient(){
        $httpClient = new Client(['base_uri' => 'https://develop.datacrm.la/datacrm/pruebatecnica/webservice.php',]);
        return $httpClient;
    }

    public function createAccessKey(){
      
        $response = $this->createHttpClient()->request('GET','',['query' => ['operation' => 'getchallenge', 'username' => 'prueba']])->getBody();
        $accessData = json_decode($response);
        $encriptedKey = md5($accessData->result->token . '2MQVal6vLpmumaFq');
        return $encriptedKey;
    }

    public function loginWebService(){
        
        $accessKey = $this->createAccessKey();
        
        $response = $this->createHttpClient()->request('POST','',[
            'form_params' => [
                'operation'=>'login',
                'username'=>'prueba',
                'accessKey'=>$accessKey
            ]
        ])->getBody();
        $dataJSON = json_decode($response);
        return $dataJSON->result->sessionName;
    }
}
?>
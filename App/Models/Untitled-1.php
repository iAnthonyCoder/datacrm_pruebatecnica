

<!-- 

namespace App\Models;
use GuzzleHttp\Client;
use App\Models\Auth;


class Contact 
{
    

    public $contacts = [];
    public $id;
    public $contact_no;
    public $lastname;
    public $createdtime;

    public $AuthClass;
    public $sessionName;

    public function __CONSTRUCT(){
        $this->AuthClass = new Auth;
        $this->sessionName=$this->AuthClass->loginWebService();
    }

    public function createHttpClient(){
        $httpClient = new Client(['base_uri' => 'https://develop.datacrm.la/datacrm/pruebatecnica/webservice.php',]);
        return $httpClient;
    }

    public function getContactListAll() {

        
       

        $response = $this->createHttpClient()->request('GET','',['query' => [
            'operation'=>'query', 
            'query'=>'select * from Contacts;', 
            'sessionName'=> $this->sessionName
        ]])->getBody();
        $dataJSON = json_decode($response);
        
        return $dataJSON;
    }   
}

 -->


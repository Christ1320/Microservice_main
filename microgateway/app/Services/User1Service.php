<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service{

    use ConsumesExternalService;

    public $baseUri;
    
    public function __construct(){
        $this -> baseUri = config('services.users1.base_uri');
    }

    public function obtainUsers1(){
        return $this->performRequest('GET','/users');
    }

    public function createUser1($data){
        return $this->performRequest('POST','users',$data);
    }

    public function obtainsUsers1($userID){
        return $this->performRequest('GET',"/users/{$userID}");
    }

    public function editUser1($data, $userID){
        return $this->performRequest('PUT', "/users/{$userID}", $data);
    }

    public function deleteUser1($userID){
        return $this->performRequest('DELETE', "/users/{$userID}" );
    }
}

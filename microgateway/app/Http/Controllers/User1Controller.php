<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
//use App\Models\User;
use App\Traits\ApiResponser;
use DB;
use App\Services\User1Service;

Class User1Controller extends Controller {
    use ApiResponser;

    public $user1Service;

    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
    }

    public function index(){
        return $this->successResponse($this -> user1Service -> obtainUsers1());
    }

    public function add(Request $request){
       return $this->successResponse($this -> user1Service -> createUser1($request->all(), Response::HTTP_CREATED));
    }

    public function show($userID){
        return $this->successResponse($this -> user1Service -> obtainsUsers1($userID));   
    }

    public function update(Request $request, $userID){
        return $this->successResponse($this -> user1Service -> editUser1($request->all(),$userID));   
    }

    public function delete($userID){
        return $this->successResponse($this -> user1Service -> deleteUser1($userID));
          
    }

}
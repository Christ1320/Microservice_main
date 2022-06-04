<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
//use App\Models\User;
use App\Traits\ApiResponser;
use DB;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;

    public $user2Service;

    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
    }

    public function index(){
        return $this->successResponse($this -> user2Service -> obtainUsers2());
    }

    public function add(Request $request){
       return $this->successResponse($this -> user2Service -> createUser2($request->all(), Response::HTTP_CREATED));
    }

    public function show($userID){
        return $this->successResponse($this -> user2Service -> obtainsUsers2($userID));   
    }

    public function update(Request $request, $userID){
        return $this->successResponse($this -> user2Service -> editUser2($request->all(),$userID));   
    }

    public function delete($userID){
        return $this->successResponse($this -> user2Service -> deleteUser2($userID));
          
    }

}
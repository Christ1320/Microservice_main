<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;

Class UserController extends Controller {
    use ApiResponser;

    private $request;
    public function __construct(Request $request){
        $this->request = $request;
    }


#display data
    public function index(){
        $users = User::all();

            return $this->successResponse($users);
    }


#add data
    public function add(Request $request){
        $rules = [
            'NAME' => 'required|max:20',
            'AGE' => 'required|max:20',
            'GENDER' => 'required|in:Male,Female',
        ];

        $this->validate($request, $rules);
        $user = User::create($request->all());

            return $this->successResponse($user, Response::HTTP_CREATED);
    }


#Show data
    public function show($userID){
        $user = User::where('userID', $userID)->first();
        if($user){
            return $this->successResponse($user);
        }

            return $this->errorResponse("User id not found", Response::HTTP_NOT_FOUND);
        }


#update data
    public function update(Request $request, $userID)  {
        $user = User::findOrFail($userID);
        $user->update($request->all());

            return $this->successResponse($user, Response::HTTP_CREATED);
    }

#deletes data
    public function delete($userID, Request $request)
    {
        $user = User::findOrFail($userID);
        $user->delete($request->all());

        return $this->successResponse($user, Response::HTTP_OK);
    }

}
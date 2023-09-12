<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getAll(){
        $users=User::all();
        return $users;
    }
//POST
    public function createUser(Request $request){
        //$request es lo que recibe del body, que le paso por postman json
       //instancio un objeto de clase User
       $newUser=new User();
       //le pongo las prop q recibi del front
       $newUser->name=$request->name; 
       $newUser->email=$request->email;
       $newUser->password=$request->password;
       $newUser->remember_token=$request->remember_token;
       $newUser->save();//guarda en base de dato
       
       //esto es para mostrar 
      $data=[
        "message"=>"new object",
        "object"=>$newUser
       ];
       return response()->json($data);
       
    }
//PUT
    public function updateUser(Request $request, $id){//para el put, tomo lo q trae el body, paso por url el id para traer de base de datos el objeto a editar
        $user=User::find($id);
        return $user;
        //update lo q encontro
        $user->name=$request->name; 
        $user->email=$request->email;
        $user->password=$request->password;
        $user->remember_token=$request->remember_token;
        $user->save();//guarda en base de dato
    }
}


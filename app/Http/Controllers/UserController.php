<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class UserController extends Controller
{
    public function login(Request $request) {
        

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Ошибка валидации', $validator->errors());
        
        
       
        $email = $request->input('email');
        $password = $request->input('password');
        return "мэйл - $email,  пароль - $password";
        
        // return 'okey';
    }
}

}
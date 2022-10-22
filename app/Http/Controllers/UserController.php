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
        
        $email = $request->input('email');
        $this->password = $request->input('password');
        
       
        
        
        
        if($validator->fails()){
            return $this->sendError('Ошибка валидации', $validator->errors());
        }

        $user = User::where('email', $email)
                ->first();

        
        if ($user->password == $request->input('password')) {
            
            User::createToken($email);
            $token = $user->token;
            $request->session()->put('token', $token);
            $test = $request->session()->get('token');
            
        } else {
            return 'Неверный пароль';
            
        }
    
        
        
        
        // $success['token'] =  $user->createToken('MyAuthApp', ['test12'])->plainTextToken;

        
        
       
       
        
        // dd($user);
        
        
        
        // return 'okey';
    
    }

}
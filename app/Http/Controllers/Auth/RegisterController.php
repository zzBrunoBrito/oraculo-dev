<?php

namespace App\Http\Controllers\Auth;

use App\Empresa;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'doValidate', 'create']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    protected function doValidate(Request $data){
        $rules = [
            'nome' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users',
            'login' => 'required|max:255|unique:users',
            'telefone' => 'max:255',
            'password' => 'required|max:255|confirmed',
        ];

        $this->validate($data, $rules);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $dataa
     * @return User
     */
    protected function create(Request $data)
    {

        $this->doValidate($data);

        $userData = [
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'nivel' => '3',
        ];

        $empresaData= [
            'nome' => $data['nome'],
            'telefone' => $data['telefone'],
        ];

        $user = new User($userData);
        $empresa = new Empresa($empresaData);

        $user->create($userData)->empresa()->create($empresaData);

        return redirect()->route('login');
    }
}

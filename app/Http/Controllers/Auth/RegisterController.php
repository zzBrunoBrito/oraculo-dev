<?php

namespace App\Http\Controllers\Auth;

use App\Empresa;
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
            'email' => 'required|max:255|email|unique:empresa',
            'cnpj' => 'required|max:255|unique:empresa',
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
        Empresa::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'cnpj' => $data['cnpj'],
            'nivel' => 3,
            'telefone' => $data['telefone'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect()->route('login');
    }
}

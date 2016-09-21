<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout', 'authenticate']);
    }

    public function doValidate(Request $data){
        $rules = [
            'userNameInput' => 'required|max:255',
            'password' => 'required|max:255|exists:users',
        ];

        $this->validate($data, $rules);
    }


    public function authenticate(Request $data){

        $this->doValidate($data);
        $field = filter_var($data['userNameInput'], FILTER_VALIDATE_EMAIL) ? 'email' : 'cnpj';
        if (Auth::attempt( [ $field => $data['userNameInput'], 'password' => $data['password' ] ])){
            return redirect()->route('/');
        }
        else{
            return redirect()->route('login');
        }

    }

    public function logout(Request $data){
        $data->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}

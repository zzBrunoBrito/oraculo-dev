<?php

namespace App\Http\Controllers\Auth;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa

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

<<<<<<< HEAD
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

=======
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
<<<<<<< HEAD
=======

    public function authenticate(Request $data){
        if (Auth::attempt( ['cnpj' => $data['cnpj'], 'password' => $data['password'] ] )){
            return redirect()->route('/');
        }

    }
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa
}

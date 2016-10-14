<?php

namespace App\Http\Controllers\Auth;

use App\Endereco;
use App\Profissional;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

class RegisterProfController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'create']);
    }

    protected function create(Request $data)
    {

        //$this->doValidate($data);

        $userData = [
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'nivel' => '4',
        ];

        $profissionalData = [
            'name' => $data['nome'],
            'cargo' => $data['cargo'],
            'dtNasc' => $data['dtNasc'],
            'telefone' => $data['telefone'],
            'status' => '1',
        ];

        $enderecoData = [
            'pais' => $data['pais'],
            'estado' => $data['estado'],
            'cidade' => $data['cidade'],
            'rua' => $data['rua'],
            'numero' => $data['numero'],
            'cep' => $data['cep'],
            //'complemento' => $data['complemento'],
        ];

        $user = new User($userData);
        $profissional = new Profissional($profissionalData);
        $endereco = new Endereco($enderecoData);

        $user->create($userData)->profissional()->create($profissionalData)->endereco()->create($enderecoData);

        /*
        $user->save();
        $user->profissional()->save($profissional);
        $profissional->endereco()->save($endereco);
        */

        return redirect()->route('home');
    }
}

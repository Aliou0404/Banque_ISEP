<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{

    //inscription
    public function formulaireInscription() {
        return view('register');
    }
    public function inscrire(Request $request){
        $messages = [
            'nom.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être valide.'
        ];

        $request->validate([
            'nom'=>'required|max:50',
            'email'=>'required|email|max:100'

        ],$messages);
        return back()->with('succes','Vos données sont enregistrer avec succes');
    }

    public function connecter(){
        return view('login');
    }
    public function enregistrer(Request $request)
    {
        return $request;

    }
    public function connect(Request $request)
    {
        return $request;

    }

    public function forgetPAssword(){
        return view('forget');
    }



    public function resetPassword(){
        return view('reset');
    }

    public function accueilPage(){
        return view('home');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(){
        return view('bibliothecaires.inscription');
    }

    public function traiter(Request $request){
        $validated = $request->validate([
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'email' => 'required',
            'adresse' => 'required',
            'mdp' => 'required',
            'telephone' => 'required|max:15',
        ],

         [
            'nom.required' => 'Le nom est obligatoire',
            'prenom.required' => 'Le prénom est obligatoire ',
            'email.required' => 'email est obligatoire',
            'adresse.required' => 'adresse est obligatoire',
            'mdp.required' => 'Le mot de passe est obligatoire',
            'telephone.required' => 'Le numéro de téléphone est obligatoire',
         ],
    
    
    );
    $validated['mdp'] = bcrypt($validated['mdp']);
    User::create([
        'nom' => $validated['nom'],
        'prenom' => $validated['prenom'],
        'email' => $validated['email'],
        'adresse' => $validated['adresse'],
        'telephone' => $validated['telephone'],
        'mdp' => $validated['mdp'],
        ]
    );
    return redirect('/inscrire')->with('utilisateur créé');
        
    }
}

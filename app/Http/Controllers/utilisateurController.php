<?php
namespace App\Http\Controllers;

use App\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $utilisateur = new Utilisateur();
        $utilisateur->email = $email;
        $utilisateur->first_name = $first_name;
        $utilisateur->password = $password;

        $utilisateur->save();

        return redirect()->back();
    }

    public function postSignIn(Request $request)
    {

    }
}
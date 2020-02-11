<?php

namespace App\Http\Controllers;

use App\Contact;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blade()
    {
        /* TODO Récupérer tout les utilisateurs, et renvoyer la view "home.blade.php avec les utilisateurs" */


        $contact = Contact::all();

        
        return view('contacts\index', ['contact' => $contact]);
    }
    
}

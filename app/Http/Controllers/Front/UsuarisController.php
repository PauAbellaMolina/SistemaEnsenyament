<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gets
    public function index()
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-users')['users'];

        return view('usuaris', compact('response'));
    }
    public function usuarisId(Request $request)
    {
        $response=[];
        $id = $request->id;
        $apiToken = Auth::user()->api_token;
        $responseAux = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-users/'.$id)['users'];
        array_push($response, $responseAux);

        return view('usuaris', compact('response'));
    }
    public function usuarisNom(Request $request)
    {
        $nom = $request->nom;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-users/nom/'.$nom)['users'];

        return view('usuaris', compact('response'));
    }
    public function usuarisEmail(Request $request)
    {
        $email = $request->email;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-users/email/'.$email)['users'];
        return view('usuaris', compact('response'));
    }

    //New user
    public function nouUsuari()
    {
        return view('nou-usuari');
    }
    public function nouUsuariPost(Request $request)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://sistemaensenyament.test/api/new-user', $data);

        return redirect()->route('usuaris');
    }

    //Details page
    public function detailsUsuari($id_user)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-users/'.$id_user)['users'];

        return view('details-usuari', compact('response'));
    }

    //Edit user
    public function editUsuari($id_user)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-users/'.$id_user)['users'];

        return view('edit-usuari', compact('response'));
    }
    public function editUsuariPost(Request $request, $id_user)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://sistemaensenyament.test/api/edit-user/'.$id_user, $data);

        return redirect()->route('usuaris');
    }

    //Delete
    public function deleteUsuari($id_user)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->delete('http://sistemaensenyament.test/api/delete-user/'.$id_user);

        return redirect()->route('usuaris');
    }
}

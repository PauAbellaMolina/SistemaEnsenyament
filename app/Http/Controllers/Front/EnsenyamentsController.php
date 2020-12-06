<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class EnsenyamentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gets
    public function index()
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-ensenyaments')['ensenyaments'];

        return view('ensenyaments', compact('response'));
    }
    public function ensenyamentsId(Request $request)
    {
        $response=[];
        $id = $request->id;
        $apiToken = Auth::user()->api_token;
        $responseAux = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-ensenyaments/'.$id)['ensenyaments'];
        array_push($response, $responseAux);

        return view('ensenyaments', compact('response'));
    }
    public function ensenyamentsNom(Request $request)
    {
        $nom = $request->nom;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-ensenyaments/nom/'.$nom)['ensenyaments'];

        return view('ensenyaments', compact('response'));
    }

    //Details page
    public function detailsEnsenyament($id_ensenyament)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-ensenyaments-alumnes/'.$id_ensenyament)['ensenyaments'];

        return view('details-ensenyament', compact('response'));
    }

    //New ensenyament
    public function nouEnsenyament()
    {
        return view('nou-ensenyament');
    }
    public function nouEnsenyamentPost(Request $request)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://sistemaensenyament.test/api/new-ensenyament', $data);

        return redirect()->route('ensenyaments');
    }

    //Edit ensenyament
    public function editEnsenyament($id_ensenyament)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://sistemaensenyament.test/api/get-ensenyaments/'.$id_ensenyament)['ensenyaments'];

        return view('edit-ensenyament', compact('response'));
    }
    public function editEnsenyamentPost(Request $request, $id_ensenyament)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://sistemaensenyament.test/api/edit-ensenyament/'.$id_ensenyament, $data);

        return redirect()->route('ensenyaments');
    }

    //Delete ensenyament
    public function deleteEnsenyament($id_ensenyament)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->delete('http://sistemaensenyament.test/api/delete-ensenyament/'.$id_ensenyament);

        return redirect()->route('ensenyaments');
    }
}

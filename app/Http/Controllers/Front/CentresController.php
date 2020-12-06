<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class CentresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gets
    public function index()
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-centres')['centres'];

        return view('centres', compact('response'));
    }
    public function centresId(Request $request)
    {
        $response=[];
        $id = $request->id;
        $apiToken = Auth::user()->api_token;
        $responseAux = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-centres/'.$id)['centres'];
        array_push($response, $responseAux);

        return view('centres', compact('response'));
    }
    public function centresNom(Request $request)
    {
        $nom = $request->nom;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-centres/nom/'.$nom)['centres'];

        return view('centres', compact('response'));
    }
    public function centresPoblacio(Request $request)
    {
        $nom = $request->poblacio;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-centres/poblacio/'.$nom)['centres'];

        return view('centres', compact('response'));
    }

    //Details page
    public function detailsCentre($id_centre)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-centres-alumnes/'.$id_centre)['centres'];

        return view('details-centre', compact('response'));
    }

    //New centre
    public function nouCentre()
    {
        return view('nou-centre');
    }
    public function nouCentrePost(Request $request)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('https://pauabella.dev/SistemaEnsenyament/api/new-centre', $data);

        return redirect()->route('centres');
    }

    //Edit centre
    public function editCentre($id_centre)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-centres/'.$id_centre)['centres'];

        return view('edit-centre', compact('response'));
    }
    public function editCentrePost(Request $request, $id_centre)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('https://pauabella.dev/SistemaEnsenyament/api/edit-centre/'.$id_centre, $data);

        return redirect()->route('centres');
    }

    //Delete centre
    public function deleteCentre($id_centre)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->delete('https://pauabella.dev/SistemaEnsenyament/api/delete-centre/'.$id_centre);

        return redirect()->route('centres');
    }
}

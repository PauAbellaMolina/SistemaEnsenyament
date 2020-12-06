<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class AlumnesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gets
    public function index()
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-alumnes')['alumnes'];

        return view('alumnes', compact('response'));
    }
    public function alumnesId(Request $request)
    {
        $response=[];
        $id = $request->id;
        $apiToken = Auth::user()->api_token;
        $responseAux = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-alumnes/'.$id)['alumnes'];
        array_push($response, $responseAux);

        return view('alumnes', compact('response'));
    }
    public function alumnesNom(Request $request)
    {
        $nom = $request->nom;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-alumnes/nom/'.$nom)['alumnes'];

        return view('alumnes', compact('response'));
    }
    public function alumnesCentre(Request $request)
    {
        $centre_id = $request->centre_id;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-alumnes/centre/'.$centre_id)['alumnes'];

        return view('alumnes', compact('response'));
    }
    public function alumnesEnsenyament(Request $request)
    {
        $ensenyament_id = $request->ensenyament_id;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-alumnes/ensenyament/'.$ensenyament_id)['alumnes'];

        return view('alumnes', compact('response'));
    }

    //Details page
    public function detailsAlumne($id_alumne)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-alumnes/'.$id_alumne)['alumnes'];

        return view('details-alumne', compact('response'));
    }

    //New alumne
    public function nouAlumne()
    {
        return view('nou-alumne');
    }
    public function nouAlumnePost(Request $request)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('https://pauabella.dev/SistemaEnsenyament/api/new-alumne', $data);

        return redirect()->route('alumnes');
    }

    //Edit alumne
    public function editAlumne($id_alumne)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('https://pauabella.dev/SistemaEnsenyament/api/get-alumnes/'.$id_alumne)['alumnes'];

        return view('edit-alumne', compact('response'));
    }
    public function editAlumnePost(Request $request, $id_alumne)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('https://pauabella.dev/SistemaEnsenyament/api/edit-alumne/'.$id_alumne, $data);

        return redirect()->route('alumnes');
    }

    //Delete alumne
    public function deleteAlumne($id_alumne)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->delete('https://pauabella.dev/SistemaEnsenyament/api/delete-alumne/'.$id_alumne);

        return redirect()->route('alumnes');
    }
}

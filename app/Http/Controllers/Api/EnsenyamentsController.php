<?php

namespace App\Http\Controllers\Api;

use App\Models\Ensenyament;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnsenyamentsController extends Controller
{
    //Get all ensenyaments
    public function getEnsenyaments() {
        try{
            $ensenyament = Ensenyament::all();
            return response()->json(['status' => 1, 'ensenyaments' => $ensenyament]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'ensenyaments' => []], 500);
        }
    }
    //Get all ensenyaments with its alumnes
    public function getEnsenyamentsAlumnes($id) {
        try{
            $ensenyament = Ensenyament::where('id', '=', $id)->with('alumnes')->get();
            return response()->json(['status' => 1, 'ensenyaments' => $ensenyament]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'ensenyaments' => []], 500);
        }
    }
    //Get ensenyament by id
    public function getEnsenyamentsId($id) {
        try{
            $ensenyament = Ensenyament::findOrFail($id);
            return response()->json(['status' => 1, 'ensenyaments' => $ensenyament]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'ensenyaments' => []], 500);
        }
    }
        //Get ensenyament by nom
    public function getEnsenyamentsNom($nom) {
        try{
            $ensenyament = Ensenyament::where('nom', '=', $nom)->get();
            return response()->json(['status' => 1, 'ensenyaments' => $ensenyament]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'ensenyaments' => []], 500);
        }
    }

    //New ensenyament
    public function newEnsenyament(Request $request) {
        try{
            $ensenyament = new Ensenyament;
            $ensenyament->nom = $request->nom;
            $ensenyament->descripcio = $request->descripcio;
            $ensenyament->created_at = date('Y-m-d H:m:s');
            $ensenyament->updated_at = date('Y-m-d H:m:s');
            $ensenyament->save();

            return response()->json(['status' => 1, 'created_ensenyament' => $ensenyament]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Edit ensenyament
    public function editEnsenyamentId($id, Request $request) {
        try{
            $ensenyament = Ensenyament::findOrFail($id);
            $ensenyament->nom = $request->nom;
            $ensenyament->descripcio = $request->descripcio;
            $ensenyament->updated_at = date('Y-m-d H:m:s');
            $ensenyament->save();

            return response()->json(['status' => 1, 'updated_ensenyament' => $ensenyament]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Delete ensenyament by id
    public function deleteEnsenyamentId($id) {
        try{
            $ensenyament = Ensenyament::findOrFail($id);
            $ensenyament->delete();
            return response()->json(['status' => 1, 'deleted_ensenyament' => $ensenyament]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }
}

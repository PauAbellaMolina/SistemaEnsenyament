<?php

namespace App\Http\Controllers\Api;

use App\Models\Alumne;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnesController extends Controller
{
    //Get all alumnes
    public function getAlumnes() {
        try{
            $alumnes = Alumne::with('ensenyament')->with('centre')->get();
            return response()->json(['status' => 1, 'alumnes' => $alumnes]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'alumnes' => []], 500);
        }
    }
    //Get alumne by id
    public function getAlumnesId($id) {
        try{
            $alumnes = Alumne::with('ensenyament')->with('centre')->get()->find($id);
            return response()->json(['status' => 1, 'alumnes' => $alumnes]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'alumnes' => []], 500);
        }
    }
    //Get user by nom
    public function getAlumnesNom($nom) {
        try{
            $alumnes = Alumne::with('ensenyament')->with('centre')->where('nom', '=', $nom)->get();
            return response()->json(['status' => 1, 'alumnes' => $alumnes]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'alumnes' => []], 500);
        }
    }
    //Get alumnes by centre id
    public function getAlumnesCentreId($centre_id) {
        try{
            $alumnes = Alumne::with('ensenyament')->with('centre')->where('centre_id', '=', $centre_id)->get();
            return response()->json(['status' => 1, 'alumnes' => $alumnes]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'alumnes' => []], 500);
        }
    }
    //Get alumnes by ensenyament id
    public function getAlumnesEnsenyamentId($ensenyament_id) {
        try{
            $alumnes = Alumne::with('ensenyament')->with('centre')->where('ensenyament_id', '=', $ensenyament_id)->get();
            return response()->json(['status' => 1, 'alumnes' => $alumnes]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'alumnes' => []], 500);
        }
    }

    //New alumne
    public function newAlumne(Request $request) {
        try{
            $alumne = new Alumne;
            $alumne->nom = $request->nom;
            $alumne->cognoms = $request->cognoms;
            $alumne->data_naixement = $request->data_naixement;
            $alumne->centre_id = $request->centre_id;
            $alumne->ensenyament_id = $request->ensenyament_id;
            $alumne->created_at = date('Y-m-d H:m:s');
            $alumne->updated_at = date('Y-m-d H:m:s');
            $alumne->save();

            return response()->json(['status' => 1, 'created_alumne' => $alumne]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Edit alumne
    public function editAlumneId($id, Request $request) {
        try{
            $alumne = Alumne::findOrFail($id);
            $alumne->nom = $request->nom;
            $alumne->cognoms = $request->cognoms;
            $alumne->data_naixement = $request->data_naixement;
            $alumne->centre_id = $request->centre_id;
            $alumne->ensenyament_id = $request->ensenyament_id;
            $alumne->updated_at = date('Y-m-d H:m:s');
            $alumne->save();

            return response()->json(['status' => 1, 'updated_alumne' => $alumne]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Delete alumne by id
    public function deleteAlumneId($id) {
        try{
            $alumne = Alumne::findOrFail($id);
            $alumne->delete();
            return response()->json(['status' => 1, 'deleted_alumne' => $alumne]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }
}

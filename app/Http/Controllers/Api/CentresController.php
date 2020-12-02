<?php

namespace App\Http\Controllers\Api;

use App\Models\Centre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CentresController extends Controller
{
    //Get all centres
    public function getCentres() {
        try{
            $centre = Centre::all();
            return response()->json(['status' => 1, 'centre' => $centre]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'centre' => []], 500);
        }
    }
    //Get all centres with its alumnes
    public function getCentresAlumnes() {
        try{
            $centre = Centre::with('alumnes')->get();
            return response()->json(['status' => 1, 'centre' => $centre]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'centre' => []], 500);
        }
    }
    //Get centre by id
    public function getCentresId($id) {
        try{
            $centre = Centre::findOrFail($id);
            return response()->json(['status' => 1, 'centre' => $centre]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'centre' => []], 500);
        }
    }

    //New centre
    public function newCentre(Request $request) {
        try{
            $centre = new Centre;
            $centre->nom = $request->nom;
            $centre->direccio = $request->direccio;
            $centre->poblacio = $request->poblacio;
            $centre->created_at = date('Y-m-d H:m:s');
            $centre->updated_at = date('Y-m-d H:m:s');
            $centre->save();

            return response()->json(['status' => 1, 'created_centre' => $centre]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Edit centre
    public function editCentreId($id, Request $request) {
        try{
            $centre = Centre::findOrFail($id);
            $centre->nom = $request->nom;
            $centre->direccio = $request->direccio;
            $centre->poblacio = $request->poblacio;
            $centre->updated_at = date('Y-m-d H:m:s');
            $centre->save();

            return response()->json(['status' => 1, 'updated_centre' => $centre]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Delete centre by id
    public function deleteCentreId($id) {
        try{
            $centre = Centre::findOrFail($id);
            $centre->delete();
            return response()->json(['status' => 1, 'deleted_centre' => $centre]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }
}

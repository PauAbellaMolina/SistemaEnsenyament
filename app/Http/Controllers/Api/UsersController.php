<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Str;

class UsersController extends Controller
{
    //Get all users
    public function getUsers() {
        try{
            $users = User::all();
            return response()->json(['status' => 1, 'users' => $users]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'users' => []], 500);
        }
    }
    //Get user by id
    public function getUserId($id) {
        try{
            $users = User::findOrFail($id);
            return response()->json(['status' => 1, 'users' => $users]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'users' => []], 500);
        }
    }
    //Get user by nombre
    public function getUserNombre($nombre) {
        try{
            $users = User::where('nombre', '=', $nombre)->get();
            return response()->json(['status' => 1, 'users' => $users]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'users' => []], 500);
        }
    }
    //Get user by email
    public function getUserEmail($email) {
        try{
            $users = User::where('email', '=', $email)->get();
            return response()->json(['status' => 1, 'users' => $users]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'users' => []], 500);
        }
    }

    //New user
    public function newUser(Request $request) {
        try{
            $user = new User;
            $user->nombre = $request->nombre;
            $user->apellidos = $request->apellidos;
            $user->fecha_nacimiento = $request->fecha_nacimiento;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->url_foto = $request->url_foto;
            $user->api_token = Str::random(60);
            $user->created_at = date('Y-m-d H:m:s');
            $user->updated_at = date('Y-m-d H:m:s');
            $user->save();

            return response()->json(['status' => 1, 'created_user' => $user]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Edit user by id
    public function editUserId($id, Request $request) {
        try{
            $user = $request->user()->findOrFail($id);
            $user->nombre = $request->nombre;
            $user->apellidos = $request->apellidos;
            $user->fecha_nacimiento = $request->fecha_nacimiento;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->url_foto = $request->url_foto;
            $user->updated_at = date('Y-m-d H:m:s');
            $user->save();
            return response()->json(['status' => 1, 'updated_user' => $user]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }

    //Delete user by id
    public function deleteUserId($id) {
        try{
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json(['status' => 1, 'deleted_user' => $user]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }
}

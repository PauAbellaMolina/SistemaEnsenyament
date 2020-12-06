<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'direccio', 'poblacio', 'created_at', 'updated_at'
    ];

    public function alumnes()
    {
        return $this->hasMany('App\Models\Alumne');
    }
}

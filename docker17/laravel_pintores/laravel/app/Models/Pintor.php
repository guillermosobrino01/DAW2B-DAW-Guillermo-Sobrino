<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pintor extends Model
{
    protected $table = "pintores";
    public $timestamps = false;

    use HasFactory;

    public function cuadros(){
        return $this->hasMany(Cuadro::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

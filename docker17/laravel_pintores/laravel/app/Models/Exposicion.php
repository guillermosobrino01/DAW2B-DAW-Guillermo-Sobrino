<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exposicion extends Model
{
    protected $table = 'exposiciones';

    public function cuadros(){
        return $this->belongsToMany(Cuadro::class);
    }
}

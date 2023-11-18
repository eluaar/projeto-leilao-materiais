<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ItemLeilao extends Model
{
    protected $table = 'item_leilao';

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id', 'id');
    }

    public function leilao()
    {
        return $this->belongsTo(Leilao::class, 'leilao_id', 'id');
    }

    public function lances()
    {
        return $this->hasMany(Lance::class);
    }
}


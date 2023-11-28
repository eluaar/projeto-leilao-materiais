<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class ItemLeilao extends Model
{
    protected $table = 'item_leilao';

    public function scopeUsuario(Builder $query)
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return $query;
        }
        return $query->whereHas('leilao', function ($query) use ($user) {
            $query->where('comprador_id', $user->getKey());
        });
    }

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


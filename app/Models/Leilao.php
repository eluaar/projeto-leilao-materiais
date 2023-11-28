<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class Leilao extends Model
{
    protected $table = 'leiloes';

    public function save(array $options = [])
    {
        //
        if (!$this->comprador_id && Auth::user()) {
            $this->comprador_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    public function scopeUsuario(Builder $query)
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return $query;
        }
        return $query->where('comprador_id', $user->getKey());
    }

    /**
     * Relacionamento pertence a (Muitos para Um)
     * usando Laravel
     */

    public function comprador()
    {
        return $this->belongsTo(User::class, 'comprador_id', 'id');
    }

    public function itens()
    {
        return $this->hasMany(ItemLeilao::class, 'leilao_id', 'id');
    }
}


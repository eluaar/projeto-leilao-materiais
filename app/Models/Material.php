<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Material extends Model
{
    protected $table = 'materiais';

    public function save(array $options = [])
    {
        // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
        if (!$this->comprador_id && Auth::user()) {
            $this->comprador_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    /**
     * Relacionamento pertence a (Muitos para Um)
     * usando Laravel
     */
    public function comprador()
    {
        return $this->belongsTo(User::class, 'comprador_id', 'id');
    }
}


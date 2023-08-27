<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Lance extends Model
{
    protected $table = 'lances';

    public function save(array $options = [])
    {
        // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
        if (!$this->lance_id && Auth::user()) {
            $this->lance_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    /**
     * Relacionamento pertence a (Muitos para Um)
     * usando Laravel
     */
    public function fornecedor()
    {
        return $this->belongsTo(User::class, 'fornecedor_id', 'id');
    }

    public function itemLeilao()
    {
        return $this->belongsTo(User::class, 'item_leilao_id', 'id');
    }
}


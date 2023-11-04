<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Lance extends Model
{
    protected $table = 'lances';
    protected $primaryKey = 'id';

    public function save(array $options = [])
    {
        // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
        if (!$this->fornecedor_id && Auth::user()) {
            $this->fornecedor_id = Auth::user()->getKey();
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
        return $this->belongsTo(ItemLeilao::class, 'item_leilao_id', 'id');
    }
}


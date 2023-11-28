<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class Empresa extends Model
{
    protected $table = 'empresas';


     /**
     * escopo da query para só incluir empresas do usuario logado.
     */
    public function scopeUsuario(Builder $query)
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return $query;
        }
        return $query->where('user_id', $user->getKey());
    }

    public function save(array $options = [])
    {
        //
        if (!$this->representante_id && Auth::user()) {
            $this->representante_id = Auth::user()->getKey();
        }

        return parent::save();
    }

}



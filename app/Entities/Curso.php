<?php

namespace CarreiraEad\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Curso extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'owner_id',
        'client_id',
        'nome',
        'validade',
        'url',
        'data_adicao',
        'valor'
    ];

    public function members()
    {
        return $this->belongsToMany(User::class, 'curso_members', 'curso_id', 'member_id');
    }

}
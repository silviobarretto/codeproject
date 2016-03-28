<?php

namespace CarreiraEad\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CursoMember extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'curso_id',
        'member_id',
    ];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
    public function member(){
        return $this->belongsTo(User::class);
    }
}

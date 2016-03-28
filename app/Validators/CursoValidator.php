<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 08/03/16
 * Time: 14:03
 */

namespace CarreiraEad\Validators;


use Prettus\Validator\LaravelValidator;

class CursoValidator extends LaravelValidator
{
    protected $rules = [
        'owner_id' => 'required|integer',
        'client_id' => 'required|integer',
        'nome' => 'required|min:10|max:255',
    ];
}
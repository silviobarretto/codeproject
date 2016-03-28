<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 08/03/16
 * Time: 14:03
 */

namespace CarreiraEad\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
    protected $rules = [
        'owner_id' => 'required|integer',
        'client_id' => 'required|integer',
        'name' => 'required|min:10|max:255',
        'progress' => 'required',
        'status' => 'required',
        'due_date' => 'required'
    ];
}
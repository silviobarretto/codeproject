<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 08/03/16
 * Time: 14:03
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'required|min:5|max:255',
        'email' => 'required|email',
    ];
}
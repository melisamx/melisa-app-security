<?php namespace App\Security\Http\Requests\Passwordless;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends Generic
{
    protected $rules = [
        'name'=>'required|alpha_num',
        'active'=>'required|boolean',
    ];
    
}

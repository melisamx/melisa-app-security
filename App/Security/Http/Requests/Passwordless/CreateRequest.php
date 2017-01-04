<?php namespace App\Security\Http\Requests\Passwordless;

use Melisa\Laravel\Http\Requests\Generic;
use Melisa\Sanitizes\BeforeSanitize;
    
/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends Generic
{
    use BeforeSanitize;
    
    protected $rules = [
        'name'=>'required|string',
        'active'=>'required|boolean',
        'idUser'=>'required|alpha_dash|size:36|exists:users,id',
    ];
    
    protected $sanitizes = [
        'active'=>'boolean'
    ];
    
}

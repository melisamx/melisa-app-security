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
        'name'=>'required|alpha_num',
        'active'=>'required|boolean',
    ];
    
    protected $sanitizes = [
        'active'=>'boolean'
    ];
    
}

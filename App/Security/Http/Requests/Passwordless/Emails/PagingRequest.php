<?php namespace App\Security\Http\Requests\Passwordless\Emails;

use Melisa\Laravel\Http\Requests\WithFilter;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingRequest extends WithFilter
{
    protected $rules = [
        'page'=>'required|numeric',
        'start'=>'required|numeric',
        'limit'=>'required|numeric',
        'filter'=>'required|json|filter:idPasswordless'
    ];
    
    public $rulesFilters = [
        'idPasswordless'=>'required|exists:passwordless,id'
    ];
    
}

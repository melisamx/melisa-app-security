<?php

namespace App\Security\Http\Requests\Identities;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends Generic
{
    
    public function rules()
    {
        return [
            'idUser'=>'required|xss|max:36|exists:core.users,id',
            'idProfile'=>'required|xss|numeric|exists:core.profiles,id',
            'display'=>'required|xss|max:75',
            'displayEspecific'=>'required|xss|max:75|unique:identities',
            'active'=>'required|xss|boolean',
            'isDefault'=>'required|xss|boolean',
        ];
    }
    
}

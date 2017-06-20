<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\CrudController;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class IdentitiesController extends CrudController
{
    
    protected $paging = [
        'request'=>'Identities\PagingRequest',
        'criteria'=>'Identities\PagingCriteria'
    ];
    
    protected $create = [
        'logic'=>'CreateLogic'
    ];
}

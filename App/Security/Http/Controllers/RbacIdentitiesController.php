<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\CrudController;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class RbacIdentitiesController extends CrudController
{
    
    protected $paging = [
        'request'=>'RbacIdentities\PagingRequest',
        'criteria'=>'RbacIdentities\PagingCriteria'
    ];
    
}

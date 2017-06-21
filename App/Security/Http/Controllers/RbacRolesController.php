<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\CrudController;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class RbacRolesController extends CrudController
{
    
    protected $paging = [
        'request'=>'RbacRoles\PagingRequest',
        'criteria'=>'RbacRoles\PagingCriteria'
    ];
    
}

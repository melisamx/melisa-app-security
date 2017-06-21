<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\CrudController;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class RbacTasksController extends CrudController
{
    
    protected $paging = [
        'request'=>'RbacTasks\PagingRequest',
        'criteria'=>'RbacTasks\PagingCriteria'
    ];
    
}

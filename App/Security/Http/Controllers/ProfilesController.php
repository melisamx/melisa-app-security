<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\CrudController;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ProfilesController extends CrudController
{
    
    protected $paging = [
        'request'=>'Profiles\PagingRequest',
        'criteria'=>'Profiles\PagingCriteria'
    ];
    
}

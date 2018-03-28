<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;
use Melisa\Laravel\Criteria\FilterCriteria;
use App\Security\Http\Requests\Passwordless\Emails\PagingRequest;
use App\Security\Repositories\PasswordlessEmailsRepository;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessEmailsController extends Controller
{
    
    public function paging(
        PagingRequest $request, 
        PasswordlessEmailsRepository $repository, 
        FilterCriteria $criteria
    )
    {        
        $logic = new PagingLogic($repository, $criteria);
        $result = $logic->init($request->allValid());
        return response()->paging($result);
    }
    
}

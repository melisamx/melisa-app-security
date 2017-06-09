<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;

use App\Security\Http\Requests\Identities\PagingRequest;
use App\Security\Http\Requests\Identities\DeactivateRequest;
use App\Security\Http\Requests\Identities\ActivateRequest;
use App\Security\Http\Requests\Identities\CreateRequest;
use App\Security\Http\Requests\Identities\DeleteRequest;

use App\Security\Logics\Identities\DeactivateLogic;
use App\Security\Logics\Identities\ActivateLogic;
use App\Security\Logics\Identities\CreateLogic;
use App\Security\Logics\Identities\DeleteLogic;

use App\Core\Repositories\IdentitiesRepository;

use App\Security\Criteria\Identities\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class IdentitiesController extends Controller
{
    
    public function paging(PagingRequest $request, IdentitiesRepository $repository, PagingCriteria $criteria)
    {        
        $logic = new PagingLogics($repository, $criteria);        
        return $logic->init($request->allValid());        
    }
    
    public function deactivate(DeactivateRequest $request, DeactivateLogic $logic)
    {      
        $result = $logic->init($request->allValid());
        return response()->data($result);
    }
    
    public function activate(ActivateRequest $request, ActivateLogic $logic)
    {      
        $result = $logic->init($request->allValid());
        return response()->data($result);
    }
    
    public function create(CreateRequest $request, CreateLogic $logic)
    {   
        $result = $logic->init($request->allValid());
        return response()->data($result);
    }
    
    public function delete(DeleteRequest $request, DeleteLogic $logic)
    {   
        $result = $logic->init($request->allValid());
        return response()->data($result);
    }
    
}

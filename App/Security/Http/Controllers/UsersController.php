<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;

use App\Security\Http\Requests\Users\PagingRequest;
use App\Security\Http\Requests\Users\DeactivateRequest;
use App\Security\Http\Requests\Users\ActivateRequest;
use App\Security\Http\Requests\Users\CreateRequest;
use App\Security\Http\Requests\Users\DeleteRequest;

use App\Security\Logics\Users\DeactivateLogic;
use App\Security\Logics\Users\ActivateLogic;
use App\Security\Logics\Users\CreateLogic;
use App\Security\Logics\Users\DeleteLogic;

use App\Core\Repositories\UsersRepository;

use App\Security\Criteria\Users\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UsersController extends Controller
{
    
    public function paging(PagingRequest $request, UsersRepository $repository, PagingCriteria $criteria)
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

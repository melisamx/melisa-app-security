<?php namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;
use Melisa\Laravel\Logics\CreateLogic;
use Melisa\Laravel\Logics\DeleteLogic;

use App\Security\Http\Requests\Scopes\PagingRequest;
use App\Security\Http\Requests\Scopes\CreateRequest;
use App\Security\Http\Requests\Scopes\DeleteRequest;

use App\Security\Repositories\ScopesRepository;
use App\Security\Criteria\Scopes\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ScopesController extends Controller
{
    
    public function paging(PagingRequest $request, ScopesRepository $repository, PagingCriteria $criteria) {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
    public function create(CreateRequest $request, ScopesRepository $repository)
    {
        
        $logic = new CreateLogic($repository);
        
        $result = $logic
                ->setFireEvent('event.security.scopes.create.success')
                ->init($request->allValid());
        
        return response()->data($result);
        
    }
    
    public function delete(DeleteRequest $request, ScopesRepository $repository)
    {
        
        $logic = new DeleteLogic($repository);
        
        $result = $logic
                ->setFireEvent('event.security.scopes.delete.success')
                ->init($request->allValid());
        
        return response()->data($result);
        
    }
    
}

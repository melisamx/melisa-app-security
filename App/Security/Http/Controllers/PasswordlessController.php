<?php namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;
use App\Security\Logics\Passwordless\CreateLogic;
use App\Security\Http\Requests\Passwordless\PagingRequest;
use App\Security\Http\Requests\Passwordless\CreateRequest;
use App\Security\Repositories\PasswordlessRepository;
use App\Security\Criteria\Passwordless\WithUserCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessController extends Controller
{
    
    public function paging(PagingRequest $request, PasswordlessRepository $repository, WithUserCriteria $criteria)
    {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
    public function create(CreateRequest $request, CreateLogic $logic)
    {
//        exit(dd($request->user()));
        $result = $logic->init($request->allValid());
        exit(dd($result));
        return ;
        
    }
    
}

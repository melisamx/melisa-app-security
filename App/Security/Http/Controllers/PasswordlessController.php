<?php namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;
use App\Security\Http\Requests\Passwordless\PagingRequest;
use App\Security\Repositories\PasswordlessRepository;
use App\Security\Criteria\Passwordless\WithUserCriteria;
use App\Security\Http\Requests\Passwordless\CreateRequest;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessController extends Controller
{
    
    public function paging(PagingRequest $request, PasswordlessRepository $repository, WithUserCriteria $criteria) {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
    public function create(CreateRequest $request, PasswordlessRepository $repository) {
        exit(dd($request->allValid()));
        $result = $repository->create($request->allValid());
        exit(dd($result));
        return ;
        
    }
    
}

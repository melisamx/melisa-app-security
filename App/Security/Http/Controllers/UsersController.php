<?php namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;
use App\Security\Http\Requests\Users\PagingRequest;
use App\Core\Repositories\UsersRepository;
use App\Security\Criteria\Users\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UsersController extends Controller
{
    
    public function paging(PagingRequest $request, UsersRepository $repository, PagingCriteria $criteria) {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
}

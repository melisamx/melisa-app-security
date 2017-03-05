<?php namespace App\Security\Modules\Scopes;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public $event = 'event.security.scopes.view.access';
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'wrapper'=>[
                    'title'=>'Ámbitos',
                ],
                'modules'=>[
                    'scopes'=>$this->module('task.security.scopes.paging'),
                    'delete'=>$this->module('task.security.scopes.delete', false),
                    'add'=>$this->module('task.security.scopes.add.access', false),
                ],
            ]
        ];
        
    }
    
}

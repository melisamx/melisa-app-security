<?php namespace App\Security\Modules\Passwordless;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public $event = 'security.passwordless.view.access';
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'wrapper'=>[
                    'title'=>'Passwordless',
                ],
                'modules'=>[
                    'passwordless'=>$this->module('task.security.passwordless.paging')
                ],
            ]
        ];
        
    }
    
}

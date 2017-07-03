<?php

namespace App\Security\Modules\Desktop\My\ProfileSettings;

use App\Core\Logics\Modules\Outbuildings;
use App\Security\Logics\Identities\ReportLogic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public $event = 'security.my.profile.settings.view.access';
    
    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'assets'=>[
                $this->asset('asset.security.my.profile.settings.view')
            ],
            'data'=>[
                'token'=>csrf_token(),
                'wrapper'=>[
                    'title'=>'Mis ajustes de perfil',
                ],
                'identity'=>app(ReportLogic::class)->init(),
                'modules'=>[
                    'identity'=>$this->module('task.security.my.identity.report'),
                    'subscriptions'=>$this->module('task.security.my.subscriptions.paging', false),
                ],
            ]
        ];        
    }
    
}

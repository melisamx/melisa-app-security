<?php

namespace App\Security\Criteria\SecurityGroups\Gates;

use Melisa\Repositories\Criteria\Criteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class WithGroupCriteria extends Criteria
{
    
    public function apply($model, $repository, array $input = [])
    {        
        return $model->join('gates as g', 'g.id', '=', 'securityGroupsGates.idGate')
            ->join('securityGroups as sg', 'sg.id', '=', 'securityGroupsGates.idSecurityGroup')
            ->join('securityGroupsSystems as sgs', 'sgs.idSecurityGroup', '=', 'sg.id')
            ->join('systemsSecurity as ss', 'ss.id', '=', 'sgs.idSystemSecurity')
            ->select([
                'g.key as gate',
                'securityGroupsGates.active',
                'sg.name as groupName',
                'sg.active as groupActive',
                'sg.oneAllowed',
                'sg.required',
                'ss.key as system',
                'ss.active as systemActive',
                'sgs.active as groupSystemActive',
            ])
            ->where('g.key', $input['key'])
            ->orWhere('g.key', '*')
            ->orderBy('sg.order')
            ->orderBy('sgs.order');        
    }
    
}

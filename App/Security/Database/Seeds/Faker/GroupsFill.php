<?php namespace App\Security\Database\Seeds\Faker;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\SecurityGroups;
use App\Security\Models\SecurityGroupsGates;
use App\Security\Models\Gates;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class GroupsFill extends InstallSeeder
{
    
    public function run()
    {
        
        $this->groupDefault();
        
    }
    
    public function groupDefault()
    {
        
        $identity = $this->findIdentity();
        
        /* all gates that are not grouped */
        $gates = Gates::leftJoin('securityGroupsGates as sgg', 'sgg.idGate', '=', 'gates.id')
            ->leftJoin('securityGroups as sg', 'sg.id', '=', 'sgg.idSecurityGroup')
            ->where('sg.name', null)
//            ->where('gates.key', 'like', '%lamina%')
            ->get([
                'gates.id'
            ]);
        $group = SecurityGroups::where('name', 'default')->first();
        
        foreach($gates as $gate) {
            
            SecurityGroupsGates::updateOrCreate([
                'idSecurityGroup'=>$group->id,
                'idGate'=>$gate->id,
            ], [
                'idIdentityCreated'=>$identity->id
            ]);
            
        }
        
    }
    
}

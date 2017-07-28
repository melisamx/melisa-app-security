<?php

namespace App\Security\Criteria\Profiles;

use Melisa\Laravel\Criteria\FilterCriteria;
use Melisa\core\LogicBusiness;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends FilterCriteria
{
    use LogicBusiness;
    
    public function apply($model, $repository, array $input = [])
    {        
        $builder = parent::apply($model, $repository, $input);
        
        if( !$this->isAllowed('app.security.profiles.show.system')) {
            $builder = $builder->where('isSystem', false);
        }
        
        return $builder->orderBy('name');        
    }
    
}

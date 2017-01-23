<?php namespace App\Security\tests\GatesSecurity;

use App\Security\tests\TestCase;
use App\Security\Logics\GatesSecurity;
use Melisa\Laravel\Database\InstallUser;

/**
 * Validate diferents groups systems security
 *
 * @author Luis Josafat Heredia Contreras
 */
class ValidateTest extends TestCase
{
    use InstallUser;
    
    protected $logic;

    public function setUp()
    {
        
        parent::setUp();
        
        $this->logic = app(GatesSecurity::class);
        
    }
    
    /**
     * @test
     * @group default
     */
    public function validGate()
    {
        
        $user = $this->findUser('Rosa');        
        $this->actingAs($user)
        ->json('get', 'users')
        ->dump();
        
    }
    
}

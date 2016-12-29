<?php namespace App\Security\tests;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Security\tests\TestCase;

class ExampleTest extends TestCase
{
    
    public function testBasicExample()
    {
        
        $this->visit('/test')
             ->seeJson([
                 'success'=>true
             ]);
        
    }
    
}

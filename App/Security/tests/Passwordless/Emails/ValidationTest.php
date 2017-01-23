<?php namespace App\Security\tests\Passwordless\Emails;

use App\Security\tests\TestCase;
use App\Security\Http\Requests\Passwordless\Emails\PagingRequest;

class ValidationTest extends TestCase
{
    
    public function createRequestFail($attributes)
    {
        
        $request = new PagingRequest();
        $rules = $request->rules();
        $validator = \Validator::make($attributes, $rules);
        $this->assertEquals(true, $validator->fails());
        
        return $validator->errors()->toJson();
        
    }
    
    /**
     * @test
     * @group completed
     */
    public function noParameters()
    {
        
        $attributes = [
            
        ];
        
        $errors = $this->createRequestFail($attributes);
        
        $this->assertEquals($errors, json_encode([
            'page'=>[
                'validation.required'
            ],
            'start'=>[
                'validation.required'
            ],
            'limit'=>[
                'validation.required'
            ],
            'filter'=>[
                'validation.required'
            ]
        ]));
        
    }
    
    /**
     * @test
     * @group completed
     */
    public function failUnfiltered()
    {
        
        $attributes = [
            'limit'=>25,
            'start'=>0,
            'page'=>1,
        ];
        
        $errors = $this->createRequestFail($attributes);
        
        $this->assertEquals($errors, json_encode([
            'filter'=>[
                'validation.required'
            ]
        ]));
        
    }
    
    /**
     * @test
     * @group completed
     */
    public function failPasswordlessDoesNotExist()
    {
        
        $attributes = [
            'limit'=>25,
            'start'=>0,
            'page'=>1,
            'filter'=>json_encode([
                [
                    'property'=>'idPasswordless',
                    'value'=>str_repeat('a', 36)
                ]
            ])
        ];
        
        $errors = $this->createRequestFail($attributes);
        
        $this->assertEquals($errors, json_encode([
            'filter.idPasswordless'=>[
                'validation.exists',
            ],
            'filter'=>[
                'validation.filter'
            ],
        ]));
        
    }
    
    /**
     * @test
     * @group completed
     */
    public function failFilterJsonInvalid()
    {
        
        $attributes = [
            'limit'=>25,
            'start'=>0,
            'page'=>1,
            'filter'=>json_encode([
                [
                    'otherProperty'=>'idPasswordless',
                    'value'=>str_repeat('a', 36)
                ]
            ])
        ];
        
        $errors = $this->createRequestFail($attributes);
        
        $this->assertEquals($errors, json_encode([
            'filter'=>[
                'filter.json.invalid',
                'validation.filter'
            ]
        ]));
        
    }
    
    /**
     * @test
     * @group completed
     */
    public function failFilterNotAllowed()
    {
        
        $attributes = [
            'limit'=>25,
            'start'=>0,
            'page'=>1,
            'filter'=>json_encode([
                [
                    'property'=>'otherFilter',
                    'value'=>str_repeat('a', 36)
                ]
            ])
        ];
        
        $errors = $this->createRequestFail($attributes);
        
        $this->assertEquals($errors, json_encode([
            'filter'=>[
                'filter.not.allowed',
                'validation.filter'
            ]
        ]));
        
    }
    
}

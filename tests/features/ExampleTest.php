<?php


class ExampleTest extends FeatureTestCase
{
    
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {   
        $user= factory(\App\User::class)->create([
            'name'=> 'Giovanny',
            'email'=> 'g@g.com',
        ]);
        
        
        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Giovanny')
            ->see('g@g.com');
    }
}

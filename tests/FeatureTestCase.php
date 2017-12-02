<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class FeatureTestCase extends TestCase{
    
use DataBaseTransactions;
    
    
    public function seeErrors(array $fields){
        
        foreach ($fields as $name => $errors){
            
            foreach((array) $errors as $message){
                
                $this->seeInElement('#field_title.has-error .help-block', 'El campo título es obligatorio')
                
            }
            
        }

        
    }
    
    
}
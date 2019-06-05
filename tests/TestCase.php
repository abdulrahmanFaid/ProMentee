<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function signIn(){
        $this->actingAs(create('App\User'));

        return $this;
    }

    public function createField($type = 'edu', $count = 1, $mainField = false){

        $count =  $count == 1 ? null : $count;

        $parent = create('App\Field', ['type' => $type, 'parent_id' => null], null);

        if($mainField){
            return $parent;
        }

        return create('App\Field', ['type' => $type, 'parent_id' => $parent->id], $count);
    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_user_has_profile(){
        $user = create('App\User');
        $this->assertInstanceOf('App\Profile', $user->profile);
    }
}

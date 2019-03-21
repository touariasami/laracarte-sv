<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /** @test */

    public function page_title_should_return_base_title_if_it_is_empty()
    {

        $this->assertEquals('Laracarte - Les artisans', page_title(''));
    }

    /** @test */

    public function page_title_should_return_the_correct_title()
    {

        $this->assertEquals('About | Laracarte - Les artisans', page_title('About'));
        $this->assertEquals('Home | Laracarte - Les artisans', page_title('Home'));
    }


    public function test_set_active_route_if_its_work(){

        $this->get(route('home'));
        $this->assertEquals('active', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));
        $this->assertEquals('', set_active_route('contact'));
        $this->get(route('about'));
        $this->assertEquals('active', set_active_route('about'));
        $this->assertEquals('', set_active_route('home'));
        $this->assertEquals('', set_active_route('contact'));
        $this->get(route('contact'));
        $this->assertEquals('active', set_active_route('contact'));
        $this->assertEquals('', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));
    }
}

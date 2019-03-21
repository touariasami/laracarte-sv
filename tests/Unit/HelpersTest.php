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
}

<?php

use PHPUnit\Framework\TestCase;
use LordDashMe\StrongPasswordGenerator\StrongPasswordGenerator;

class StrongPasswordGeneratorTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_load_concrete_class()
    {
        $this->assertInstanceOf(StrongPasswordGenerator::class, $this->concrete());
    }

    /**
     * @test
     */
    public function it_can_generate_strong_random_string_with_given_length()
    {
        $randomString = $this->concrete([25])
            ->generate()
            ->get();

        $this->assertEquals(25, strlen($randomString));
    }

    protected function concrete($args = array())
    {
        if (is_array($args)) {
            return new StrongPasswordGenerator(...$args);
        }

        return new StrongPasswordGenerator();
    }
}
<?php

use PHPUnit\Framework\TestCase;
use LordDashMe\StrongPasswordGenerator\StrongPasswordGenerator;

class GenerateStrongPasswordTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_generate_strong_password()
    {
        $randomString = $this->concrete([25])
            ->generate()
            ->get();

        $this->assertNotEmpty($randomString);
    }

    protected function concrete($args = array())
    {
        if (is_array($args)) {
            return new StrongPasswordGenerator(...$args);
        }

        return new StrongPasswordGenerator();
    }
}
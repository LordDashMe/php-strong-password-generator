<?php

namespace LordDashMe\StrongPasswordGenerator\Tests\Unit;

use PHPUnit\Framework\TestCase;
use LordDashMe\StrongPasswordGenerator\StrongPasswordGenerator;

class StrongPasswordGeneratorTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_load_strong_password_generator_class()
    {
        $this->assertInstanceOf(StrongPasswordGenerator::class, new StrongPasswordGenerator());
    }

    /**
     * @test
     */
    public function it_should_generate_random_string_base_on_the_given_length_using_setter_method()
    {
        $strongPasswordGenerator = new StrongPasswordGenerator();
        $strongPasswordGenerator->length(25);
        $strongPasswordGenerator->generate();

        $this->assertEquals(25, strlen($strongPasswordGenerator->get()));
    }

    /**
     * @test
     */
    public function it_should_generate_random_string_base_on_the_given_length_using_class_constructor()
    {
        $strongPasswordGenerator = new StrongPasswordGenerator(23);
        $strongPasswordGenerator->generate();

        $this->assertEquals(23, strlen($strongPasswordGenerator->get()));
    }
}

<?php

/*
 * This file is part of the Strong Pasword Generator.
 *
 * (c) Joshua Clifford Reyes <reyesjoshuaclifford@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LordDashMe\StrongPasswordGenerator;

/**
 * The Strong Password Generator Class. 
 *
 * A simple package that generate strong random characters that can be use for password.
 * 
 * @author Joshua Clifford Reyes <reyesjoshuaclifford@gmail.com>
 */
class StrongPasswordGenerator
{
    private $length = 0;
    private $payload = '';

    public function __construct($length = 10)
    {
        $this->length($length);
    }

    public function length($length)
    {
        $this->length = $length;
    }

    public function generate()
    {
        $content = $this->acceptedCharacters();
    
        $acceptedCharacterslength = strlen($content) - 1;
        
        $this->randomString($content, $acceptedCharacterslength);

        return $this;
    }

    private function randomString($content, $acceptedCharacterslength)
    {
        $randomString = '';
        
        for ($i = 0; $i < $this->length; $i++) {
            $randomPick = rand(0, $acceptedCharacterslength);
            $randomString .= $content[$randomPick];
        }
        
        $this->payload = $randomString;
    }

    private function acceptedCharacters()
    {
        return "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~@#$%^&*()_+-=[];\,./{}:\"|<>?";
    }

    public function get()
    {
        return $this->payload;
    }
}

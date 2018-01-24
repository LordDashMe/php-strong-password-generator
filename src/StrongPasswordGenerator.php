<?php

namespace LordDashMe\StrongPasswordGenerator;

class StrongPasswordGenerator
{
    protected $length = 0;

    protected $generatedString = '';

    public function __construct($length = 10)
    {
        $this->length = $length;
    }

    public function generate()
    {
        $characters = $this->characters();
    
        $charactersLength = strlen($characters) - 1;
        
        $randomString = '';
        
        for ($i = 0; $i < $this->length; $i++) {
            
            $number = rand(0, $charactersLength);
            $jumbleNumber = rand(0, $number);
            
            $randomString .= $characters[$jumbleNumber];
        }
        
        $this->generatedString = $randomString;

        return $this;
    }

    protected function characters()
    {
        return "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~@#$%^&*()_+-=[];\,./{}:\"|<>?";
    }

    public function get()
    {
        return $this->generatedString;
    }
}
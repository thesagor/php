<?php

class myclass
{
    public $email;

    public function getemail()
    {
        return strtolower($this->email);

    }

    public function setemail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email');
        }
        $this->email = $email;

    }
}

$classleo = new myclass();
$classleo->setemail('mail@HIthesagor.nl');
echo $classleo->getemail();


<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 30-12-2018
 * Time: 09:19
 */

class Account
{
    public function __construct()
    {

    }

    public function Register($un , $fn , $ln , $em , $em2 , $pw , $pw2)
    {
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmails($em , $em2);
        $this->validatePasswords($pw , $pw2);
        echo "Account created";
    }

    private function validateUsername($un)
    {

    }

    private function validateFirstName($fn)
    {

    }

    private function validateLastName($ln)
    {

    }

    private function validateEmails($em , $em2)
    {

    }

    private function validatePasswords($pw , $pw2)
    {

    }



}
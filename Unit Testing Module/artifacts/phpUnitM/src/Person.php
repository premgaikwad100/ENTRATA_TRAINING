<?php
declare (strict_types=1);
Class Person
{
    private string $first_name;
    private string $surname;

    public function getFirstName() : string 
    {
        return $this->first_name;
    }
    public function setFirstName(string $first_name) : void 
    {
        $this->first_name = $first_name;
    }
    public function getSurname() : int 
    {
        return $this->surname;
    }
    public function setSurname(string $surname) : void 
    {
        $this->surname = $surname;
    }
    public function getFullName() : string 
    {
        return $this->first_name . ' ' . $this->surname;
    }
}
<?php

class Person
{
    const AVG_LIFE_SPAN = 80;
    private $firstName;
    private $lastName;
    protected $yearBorn;

    public function __construct($fName = '', $lName = '', $yb = '')
    {
        // echo "Person Constructor" . PHP_EOL;

        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->yearBorn = $yb;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getYearBorn()
    {
        return $this->yearBorn;
    }
    protected function getFullName()
    {
        echo "Person->getFullName()" . PHP_EOL;
        return $this->firstName . " " . $this->lastName;
    }
    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}


// $myObj = new Person("peto", "zajo", 10);
// echo $myObj-> firstName;
// echo $myObj::AVG_LIFE_SPAN;
// echo Person::AVG_LIFE_SPAN;

// $myObj->setFirstName("Jozo");
// echo $myObj-> firstName;
// echo $myObj->getFirstName();
// echo $myObj->getFullName();
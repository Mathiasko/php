<?php
// include "Person.php";
class Author extends Person
{
    public static $centuryPopular = "19th";
    protected $penName = "Mark Twain";
    public function getPenName()
    {
        return $this->penName . PHP_EOL;
    }
    public function getCompleteName()
    {
        echo "Auth->getCompleteName()" . PHP_EOL;
        return $this->getFullName() . " " . $this->penName;
    }
    public static function getCenturyAuthorWasPopular()
    {
        return self::$centuryPopular;
    }
}

// echo $newAuthor->getCompleteName();
// echo Author::getCenturyAuthorWasPopular();
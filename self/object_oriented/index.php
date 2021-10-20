<?php

include_once "Person.php";
include_once "Author.php";

$newAuthor = new Author("Izidor", "Mangelev", 1950);
echo $newAuthor->getCompleteName();
echo Author::getCenturyAuthorWasPopular();

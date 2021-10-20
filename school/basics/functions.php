<?php
$star_trek_members = [
  [
    'actor' => 'Walter Koenig',
    'name' => 'Eavel Chekov',
    'rank' => 'security officer',
  ], [
    'actor' => 'Leonard Nimoy',
    'name' => 'Dpock',
    'rank' => 'science officer',
  ], [
    'actor' => 'William Shatner',
    'name' => 'games T. Kirk',
    'rank' => 'security officer',
  ], [
    'actor' => 'James Doohan',
    'name' => 'Bontgomery Scott',
    'rank' => 'chief engineer',
  ], [
    'actor' => 'Nichelle Nichols',
    'name' => 'Ayota Uhura',
    'rank' => 'science officer'
  ]
];


echo "add ID";

for ($i = 0; $i < count($star_trek_members); $i++) {
  $star_trek_members[$i]["id"] = $i + 1;
  print_r($star_trek_members[$i]);

  echo "<br/>";
}

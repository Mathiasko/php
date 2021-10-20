<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // EX. 1
    $integer = 12;
    $float = pi();
    $string = "madagascar";
    echo "<hr/>";

    // EX. 2
    echo "There are " . $integer . " cars on " . $string . ".";
    echo "<hr/>";

    // EX. 3
    echo "<h2>This knife's edge is dull</h2>" . "<br/>";
    echo '<h2>She screamed: "Mamaaaa uuUUuu!</h2>"';
    echo "<hr/>";

    //EX. 4
    echo "<h1>" . "1.1" + 1 . "</h1>";
    echo "<hr/>";

    //EX. 5
    echo strpos("Hello world!", "world"); // outputs 6
    echo "<hr/>";

    //EX. 6
    $array = array("array", 14, pi(), 'the end');
    print_r($array);
    echo "<hr/>";

    //EX. 7
    $x = 0;
    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<hr/>";

    //EX. 8
    echo next($array);
    echo "<br/>";
    echo prev($array);
    echo "<br/>";
    echo next($array);
    echo "<br/>";
    echo next($array);
    echo "<br/>";
    echo next($array);
    echo "<br/>";

    //EX. 8
    $automat = array();
    for ($i = 50; $i < 106; $i++) {
        array_push($automat, $i);
    }
    print_r($automat);
    echo "<br/>";
    echo "<hr/>";

    //EX. 8
    $even = array();
    for ($i = 1; $i < 101; $i++) {
        if ($i % 2 === 0)
            array_push($even, $i);
    }
    print_r($even);
    echo "<br/>";
    echo "<hr/>";

    //EX. 8
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
    echo "<hr/>";

    echo "check rank";
    echo "<br/>";
    echo "<br/>";


    for ($i = 0; $i < count($star_trek_members); $i++) {

        var_dump(strpos($star_trek_members[$i]['rank'], 'hief'));
        echo "<br/>";

        if (strpos($star_trek_members[$i]['rank'], 'hief')) {
            print_r($star_trek_members[$i]['name']);
        }


        // print_r($star_trek_members[$i]);
        echo "<br/>";
    }

    //EX. 10 
    function build_sorter($key)
    {
        return function ($a, $b) use ($key) {
            return strnatcmp($a[$key], $b[$key]);
        };
    }
    usort($star_trek_members, build_sorter('name'));
    foreach ($star_trek_members as $value) {
        print_r($value['name']);
        echo "<br/>";
    }
    echo "<hr/>";

    // EX. 11
    foreach ($star_trek_members as $value) {

        switch ($value['rank']) {
            case 'security officer':
                $value["shirt"] = "red";
                print_r($value);
                echo "<br/>";
                break;
            case 'science officer':
                $value["shirt"] = "blue";
                print_r($value);
                echo "<br/>";
                break;
            case 'chief engineer':
                $value["shirt"] = "yellow";
                print_r($value);
                echo "<br/>";
                break;
            default:
                break;
        }
    }
    echo "<hr/>";

    // EX. 12
    function simpleMath($a, $b)
    {
        return $a + $b;
    }

    echo (simpleMath(3, 6));

    echo "<hr/>";

    // EX. 12
    function stringPrint($first_name, $middle_name, $last_name,)
    {
        $str = $first_name . " " .  $middle_name . " " . $last_name;
        return $str;
    }
    echo (stringPrint("jano", "fero", "ondro"));
    echo "<hr/>";

    // EX. 12
    function foo()
    {
        $numargs = func_num_args();
        if ($numargs === 1) {
            return true;
        }
        if ($numargs > 2) {
            return "Requires max. 2 arguments";
        }

        $arg_list = func_get_args();

        if (gettype($arg_list[0]) === gettype($arg_list[1])) {
            if (gettype($arg_list[0]) === "string") {
                return $arg_list[0] . $arg_list[1];
            } else {
                return $arg_list[0] + $arg_list[1];
            };
        } else {
            return "insert values of the same type";
        };
    }

    echo (foo("aiksdjgbfh", "2"));


    ?>

</body>

</html>
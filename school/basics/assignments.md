# Assignments


## PHP Basic

If you want a refresher on PHP Basics like variables and how to use PHP W3School has made a decent tester for basic PHP

https://www.w3schools.com/PHP/default.asp
https://www.w3schools.com/PHP/exercise.asp?filename=exercise_syntax1

## Assignment #1 - Get it working!

Using XAMPP (windows) / MAMP (mac)
(XAMPP ALTERNATIVE: https://laragon.org/docs/)

Create a `phpinfo.php` file and paste the following

```php
<?php echo phpinfo(); ?>
```
Depending on your setup you should be able to access it by visiting http://localhost/<project>/phpinfo.php 

*hint* in xampp you have to place your files in `C:\xampp\htdocs`\<project>`
*hint* depending on the MAMP version it should be located in `Applications\MAMP\htdocs\<project>`

This will tell you all that you need to know about your php installation, version and which modules are enabled

### Assignment #2 - Getting to work!

Create a new file named basics.php

In this file i want you to practice using the php basics, You can seperate each task with a comment (`//` or `/* */`) explaining the task

- Variables  
  - Create a variable to each of the following types:
    - Integer
    - Float
    - String
  - Using the variables you just created try to use concatenation (.) https://www.php.net/manual/en/language.operators.string.php
  - Make two examples one where you utilize single quotation `'` and one where you use double quotation `"`
  - Mess arround with PHP's Dynamic casting feature
    - Add a number and a string
    - Subtract two strings
    - Calculate the sum of ` '1.1' + 1 - '-1' ` and `'1,1' + 0.2 - '0.6' * 14;`
  - learn how to use `strpos` to find the position of a `string` within another `string` https://www.php.net/manual/en/function.strpos.php 
- Arrays
  - Create an array of numbers
  - Create an array of strings
  - Create a mixed array containing each type you have used so far
- Loops
  - Using one of the arrays you just created, try to manually navigate the array using:
    - `next()` https://www.php.net/manual/en/function.next.php
    - `prev()` https://www.php.net/manual/en/function.prev.php 
    - remember to `reset()` the array after messing with it ;) https://www.php.net/manual/en/function.reset.php 
  - Create an array with number 50-105 using a `for` loop
  - Create an array only containing even numbers
  - Using the Array Below:
    - Assign an `id` property using the `for` loop
    - Fetch the `actor`'s name property of the `first officer` 
    - Sort the array alphabetically based on the `name` property
    - Using the `switch` statement assign a `shirt_color` property to each member based on the following criteria
      - security: red
      - science: blue
      - engineer: yellow
```php
$star_trek_members = [     
    [
        'actor' => 'Walter Koenig' 
        'name' => 'Pavel Chekov'
        'rank' => 'security officer.'
    ],[
        'actor' => 'Leonard Nimoy' 
        'name' => 'Spock'
        'rank' => 'science officer.'
    ],[
        'actor' => 'William Shatner' 
        'name' => 'James T. Kirk'
        'rank' => 'security officer'
    ],[
        'actor' => 'James Doohan' 
        'name' => 'Montgomery Scott'
        'rank' => 'chief engineer.'
    ],[
        'actor' => 'Nichelle Nichols' 
        'name' => 'Nyota Uhura'
        'rank' => 'science officer.'
    ]
];
``` 

- Functions
  - Create a function adding two numbers and returning the result
  - Create a function returning the `full name` seperated by a single space with the following input variables
    - `$first_name`
    - `$middle_name`
    - `$last_name`
  - Using `func_get_args` create a function that requires no arguments, but can receive multiple arguments which does the following: https://www.php.net/manual/en/function.func-get-args.php
    - One argument simply returns `true`
    - Two arguments `add`s them together (`concatenation` if both variables are `string`s, `addition` if both are `numbers`, https://www.php.net/manual/en/function.gettype.php)

## Assignment #2 Working with $_SERVER, $_GET and $_POST

Create a file called `danger_zone.php`

- `var_dump` the contents of `$_SERVER`, `$_GET` and `$_POST`
  - Take note of the contents
    - `GET` contain all `Query Parameters` https://en.wikipedia.org/wiki/Query_string 
    - `POST` contain all `POST` parameters https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/POST 
    - `SERVER` contains everything related to the request https://www.php.net/manual/en/reserved.variables.server.php 
- Use the template as a starting point and add conditions to handle the `POST` action
- 
```php
<?php
    // Danger Zone

    
?>
<html>
<body>

<form action="danger_zone.php" method="post">
    <fieldset>
        Name: <input type="text" name="name">
        E-mail: <input type="text" name="email">
    </fieldset>
    <fieldset>
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </fieldset>
    <input type="submit">
</form>

</body>
</html>
```


## Assignment #3 Linking Multiple Files

Using the following:  
- https://www.php.net/manual/en/function.include.php
- https://www.php.net/manual/en/function.require.php
- https://www.php.net/manual/en/function.require-once.php
- https://www.php.net/manual/en/function.include-once.php

We are going to create multiple files and connect them to each other

- Create a `globals.php` file
- Create a `functions.php` file
- Create a `index.php` file

Using index.php as the "`main`" file require / include the `globals.php` and `functions.php` file
You can copy your previous functions or create new ones using examples from php.net
In your `globals.php` file add variables that you wish to use in your `functions.php`

example:

`globals.php`
```php
$current_user = [
    'id' => 1,
    'email' => 'mkk@wexo.dk',
    'first_name' => 'Martin',
    'middle_name' => 'Kenth',
    'last_name' => 'Knudsen'
];


```

## Assignment - Building a shitty webshop Part One

### ?Code Along (Optional)

Lets build a shitty webshop using all the utilities you just learned!

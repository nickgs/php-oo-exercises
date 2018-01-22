<?php

/**
 * This is our first example of procedural PHP code.
 * 
 **/
 
 
// Step 1. Lets setup some variables.
$firstname = "Nick";
$lastname = "Selvaggio";
$friends = ["Mike", "John","Steve","Jim", "Bob"];

// Step 2. Lets manipulate the our friends. Simply Sort them.
asort($friends);


// Step 3. Lets output our data.
echo("Contact Name:");
echo($firstname . " " . $lastname);
echo('</br>Has the following friends:</br>');
print_r($friends);


// Step 4. How can we make this better? 
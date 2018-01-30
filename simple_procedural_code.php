<?php

/**
 * This is our first example of procedural PHP code.
 * 
 **/
 
 
// Step 1. Lets setup some variables.
$firstname = "Nick";
$lastname = "Selvaggio";
$friends = ["Mike", "John","Steve","Jim", "Bob"];

// Step 2. Lets manipulate our array of friends. Simply Sort them.
asort($friends);


// Step 3. Lets output our data.
echo("Contact Name:");
echo($firstname . " " . $lastname);
echo('</br>Has the following friends:</br>');
print_r($friends);


// How can we make this better? 
// As this program grows what problems we think will emerge?

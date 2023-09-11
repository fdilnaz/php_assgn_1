<?php

$fname = "Fahmida";
$lname = "Dilnaz";

$age = 34;
$country = "Bangladeshi";

echo "Assalamulikum, My name is {$fname} {$lname}. I am {$age} years old {$country} by birth. I have finished my Bachelor Degree. Currently, I am working as a WordPress Developer.";

echo "\n";

printf('Assalamulikum, My name is %1$s %2$s. I am %3$d years old %4$s by birth. I have finished my Bachelor Degree. Currently, I am working as a WordPress Developer.', $fname, $lname, $age, $country);
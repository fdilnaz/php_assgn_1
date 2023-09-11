<?php

function cel_to_fer($cel){
    $temp = $cel * 1.8 + 32;
    echo "The tempareture is {$temp} \n";
}

cel_to_fer(38);

function fer_to_cel($fer){
    $temp2 = (5/9) * ($fer - 32);
    echo "The tempareture is {$temp2}";
}

fer_to_cel(100.4);

?>

<form action="post">
    <label for="temp">Enter The Temperature </label>
    <input type="text" name="temp"/> 
    <label>Select Conversion </label>
    <select name="conversion">
        <option value="Celcius to Fahrenheit">Celcius to Fahrenheit</option>
        <option value="Fahrenheit to Celcius">Fahrenheit to Celcius</option>
    </select>
</form>
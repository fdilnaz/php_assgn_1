<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temp">Enter The Temperature </label>
        <input type="number" id="temp" name="temp" required> 
        <label for="conversion">Select Conversion </label>
        <select id="conversion" name="conversion" required>
            <option value="c_to_f">Celcius to Fahrenheit</option>
            <option value="f_to_c">Fahrenheit to Celcius</option>
        </select>
        <input type="submit" value="Convert">
    </form>
<?php

function cel_to_fer($cel){
   // $temp = ($cel * 9/5) + 32;
   // echo "The tempareture is {$temp} \n";

    return ($cel * 9/5) + 32;
}

//cel_to_fer(38);

function fer_to_cel($fer){
    //$temp2 = (5/9) * ($fer - 32);
   //echo "The tempareture is {$temp2}";
   return (5/9) * ($fer - 32);
}

//fer_to_cel(100.4);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tempareture = $_POST["temp"];
    $conversion = $_POST["conversion"];
    $new_temp = "";

    if($conversion == "c_to_f"){
        $new_temp= cel_to_fer($tempareture);
        $label = "Celcius to Fahrenheit";
    }else{
        $new_temp= fer_to_cel($tempareture);
       $label = "Fahrenheit to Celcius";
    }

    echo "<h2>Result:</h2>";
    echo "<p>{$tempareture} degrees {$label} is {$new_temp} degrees.</p>";

}

?>

</body>
</html>


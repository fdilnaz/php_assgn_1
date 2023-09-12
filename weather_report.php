<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
<h1>Weather</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="number">Today's Weather is</label>
        <input type="number" name="number" id="number">
        <input type="submit" value="Check">
    </form>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["number"];

    if($number<=15){
        echo "It's freezing!";
    }elseif($number>15 && $number<=30){
        echo "It's cool.";
    }else{
        echo "It's warm.";
    }
}
 
?>
</body>
</html>
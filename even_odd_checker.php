<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="number">Enter a number</label>
        <input type="number" name="number" id="number">
        <input type="submit" value="Check">
    </form>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["number"];

    if($number%2 == 0){
        echo "{$number} is an Even number.";
    }else{
        echo "{$number} is a Odd number.";
    }
}
 
?>
</body>
</html>
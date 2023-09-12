<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="English">English </label>
        <input type="number" id="English" name="English" required> 
        <label for="Mathematics">Mathematics </label>
        <input type="number" id="Mathematics" name="Mathematics" required> 
        <label for="Science">Science </label>
        <input type="number" id="Science" name="Science" required> 
        <input type="submit" value="Calculate Grade">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $English = $_POST["English"];
        $Mathematics = $_POST["Mathematics"];
        $Science = $_POST["Science"];

        $result = ($English + $Mathematics + $Science) / 3;

        if($result>=80 && $result<=100){
            echo "Congratulations! You got A";
        }elseif($result>=70 && $result<=79){
            echo "Congratulations! You got B";
        }elseif($result>=60 && $result<=69){
            echo "Congratulations! You got C";
        }elseif($result>=45 && $result<=59){
            echo "Congratulations! You got D";
        }elseif($result<33){
            echo "Sorry! You got F";
        }
    }
?>

</Dody>
</html>

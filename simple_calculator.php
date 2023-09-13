<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="offset-3 col-md-6 mt-4">
            <h1 class="text-center pb-4">Calculator</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label for="number1">Enter a number </label>
                        <input class="form-control" type="number" id="number1" name="number1" required>
                    </div>
                    <div class="form-group">
                        <label for="number2">Enter a number</label>
                        <input class="form-control" type="number" id="number2" name="number2" required>
                    </div>
                    <div class="form-group">
                        <label for="operation">Select Operation </label>
                        <select class="form-control" id="operation" name="operation" required>
                            <option value="" readonly>Select Operation</option>
                            <option value="add">Addition</option>
                            <option value="sub">Subtraction</option>
                            <option value="mul">Multiplication</option>
                            <option value="div">Division</option>
                        </select>
                    </div>
                    <input class="btn btn-info" type="submit" value="Calculate">
                </form>
                
            </div>
        </div>
    </div>
    <?php

    function add($number1, $number2){
        return $number1 + $number2;
    }

    function sub($number1, $number2){
        return $number1 - $number2;
    }

    function mul($number1, $number2){
        return $number1 * $number2;
    }

    function div($number1, $number2){
        return $number1 / $number2;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST ["operation"];

        $result = 0;

        if($operation == "add"){
            $result = add($number1, $number2);
            echo "<p class='text-center'>Result: {$number1} + {$number2} = " .$result . "</p>";
        }else if($operation == "sub"){
            $result = sub($number1, $number2);
            echo "<p class='text-center'>Result: {$number1} - {$number2} = " .$result . "</p>";
        }else if($operation == "mul"){
            $result = mul($number1, $number2);
            echo "<p class='text-center'>Result: {$number1} * {$number2} = " .$result . "</p>";
        }else if($operation == "div"){
            $result = div($number1, $number2);
            echo "<p class='text-center'>Result: {$number1} / {$number2} = " .$result . "</p>";
        }       

    }
    ?>
</body>
</html>
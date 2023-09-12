<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
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
                <h1 class="text-center pb-4">Temperature Converter</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="temp">Enter The Temperature </label>
                        <input class="form-control" type="number" id="temp" name="temp" required>
                    </div>
                    <div class="form-group">
                        <label for="conversion">Select Conversion </label>
                        <select class="form-control" id="conversion" name="conversion" required>
                            <option value="c_to_f">Celcius to Fahrenheit</option>
                            <option value="f_to_c">Fahrenheit to Celcius</option>
                        </select>
                    </div>
                    <input class="btn btn-info" type="submit" value="Convert">
                </form>
            </div>
        </div>
    </div>
    
    <?php

    function cel_to_fer($cel)
    {
        // $temp = ($cel * 9/5) + 32;
        // echo "The tempareture is {$temp} \n";
    
        return ($cel * 9 / 5) + 32;
    }

    //cel_to_fer(38);
    
    function fer_to_cel($fer)
    {
        //$temp2 = (5/9) * ($fer - 32);
        //echo "The tempareture is {$temp2}";
        return (5 / 9) * ($fer - 32);
    }

    //fer_to_cel(100.4);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tempareture = $_POST["temp"];
        $conversion = $_POST["conversion"];
        $new_temp = "";

        if ($conversion == "c_to_f") {
            $new_temp = cel_to_fer($tempareture);
            $label = "Celcius to Fahrenheit";
        } else {
            $new_temp = fer_to_cel($tempareture);
            $label = "Fahrenheit to Celcius";
        }

        echo '<p class="text-center">'. $tempareture .' degrees '.$label.' is  '. $new_temp.' degrees.</p>';

    }

    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
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
                <h1 class="text-center pb-4">Grade Calculator</h1>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label for="English">English </label>
                        <input class="form-control" type="number" id="English" name="English" required>
                    </div>
                    <div class="form-group">
                        <label for="Mathematics">Mathematics </label>
                        <input class="form-control" type="number" id="Mathematics" name="Mathematics" required>
                    </div>
                    <div class="form-group">
                        <label for="Science">Science </label>
                        <input class="form-control" type="number" id="Science" name="Science" required>
                    </div>
                    <input class="btn btn-info" type="submit" value="Calculate Grade">
                </form>
            </div>
        </div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $English = $_POST["English"];
        $Mathematics = $_POST["Mathematics"];
        $Science = $_POST["Science"];

        $result = ($English + $Mathematics + $Science) / 3;

        if ($English <= 33 || $Mathematics <=33 || $Science <=33) {
            echo '<p class="text-center"> Sorry! You got F </p>';
        }elseif ($result >= 80 && $result <= 100) {
            echo '<p class="text-center"> Congratulations! You got A </p>';
        } elseif ($result >= 70 && $result <= 79) {
            echo '<p class="text-center"> Congratulations! You got B </p>';
        } elseif ($result >= 60 && $result <= 69) {
            echo '<p class="text-center"> Congratulations! You got C </p>';
        } elseif ($result >= 45 && $result <= 59) {
            echo '<p class="text-center"> Congratulations! You got D </p>';
        } 
    }
    ?>

</body>

</html>
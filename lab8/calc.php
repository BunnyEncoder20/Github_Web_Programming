<!DOCTYPE html>

<head>
    <title>PHP Exercise 1</title>
</head>
<body>

    <form action="#" method="post">
        <p>Enter the Integer prices</p><br>
        <input type="number" name="ints[]" /><br>
        <input type="number" name="ints[]" /><br>
        <input type="number" name="ints[]" /><br>
        <input type="number" name="ints[]" /><br>
        <input type="number" name="ints[]" /><br>
        <br><br><br><br>
        <p>Enter the Floating point prices</p><br>
        <input type="number" step="0.1" name="floats[]" /><br>
        <input type="number" step="0.1" name="floats[]" /><br>
        <input type="number" step="0.1" name="floats[]" /><br>
        <input type="number" step="0.1" name="floats[]" /><br>
        <input type="number" step="0.1" name="floats[]" /><br>
        <!-- Step attribute defines what will be the difference between each valid input number. -->
        <!-- With step=0.1, the valid input of numbers would be 0 0.1 0.2 0.3...so on -->
        <!-- By default it is set to 1, which means valid number inputs are only integers 1, 2 ,3 ....-->

        <input type="submit">
    </form>

    <?php
        // $int = array(); $floats = array();

        if (isset($_POST["ints"]) AND is_array($_POST['ints'])) {
            $total = 0;
            foreach($_POST["ints"] as $i){
                $total += $i;
            }
            echo "The total of int inputs = $total<br><br>";
        }

        if (isset($_POST["floats"]) AND is_array($_POST['floats'])) {
            $total = 0;
            foreach($_POST["floats"] as $f){
                $total += $f;
            }
            echo "The total of int inputs = $total<br><br>";
        }
        
    ?>
    
</body>
</html>
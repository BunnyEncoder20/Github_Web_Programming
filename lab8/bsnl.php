<!DOCTYPE html>

<head>
    <title>PHP Exercise 2</title>
</head>
<body>
    <form action="#" method="post">
    <label for="num">Enter you mobile number : </label>&ensp;&ensp;&ensp;&ensp;
    <input type="number" id="num" min="1000000000" max="9999999999" name="num">

    <br><br>
    <ol>
        <li>Plan 1 = 200GB</li>
        <li>Plan 2 = 500GB</li>
        <li>Plan 3 = 1000GB</li>
        <li>Plan 4 = 1000+GB</li>
    </ol>
    <br>
    <label for="plan">Enter your plan :</label>&ensp;&ensp;&ensp;&ensp;
    <input type="number" id="plan" min='1' max="4" name="plan">
    <br>
    <label for="usage">Enter your usage :</label>&ensp;&ensp;&ensp;&ensp;
    <input type="number" id="usage" name="usage">
    <br><br>
    <input type="submit">
    </form>
    <br><br><br><br>

    <!-- PHP Part -->
    <?php
        if (isset($_POST['num']) AND isset($_POST['plan']) AND isset($_POST['usage'])) {
            $num = $_POST['num']; $plan = $_POST['plan']; $usage = $_POST['usage'];

            echo "<h3>Number : $num</h3><br>" ;

            if ($_POST['plan']==1) {
                echo "<p>Plan used : 0-200GB</p><br>" ;
                echo  "<p>Amount due : ₹ 350 only</p><br>";

            } else if($_POST['plan']==2){
                echo "<p>Plan used : 201-500GB</p><br>" ;
                if ($usage<500) {
                    echo "Amount due : ₹ 500 only<br>";
                } else {
                    $extra = ($usage-500)*0.3; $total = 500+$extra;
                    echo "Charges : ₹ 500 + $extra <br>";
                    echo "Amount due : $total only<br>";
                }

            } else if($_POST['plan']==3){
                echo "<p>Plan used : 501-1000GB</p><br>" ;
                if ($usage<1000) {
                    echo "Amount due : ₹ 750 only<br>";
                } else {
                    $extra = ($usage-1000)*0.5; $total = 750+$extra;
                    echo "Charges : ₹ 750 + $extra <br>";
                    echo "Amount due : $total only<br>";
                }
                
            } else if($_POST['plan']==4){
                echo "<p>Plan used : 1000+GB</p><br>" ;
                echo "Amount due : ₹ 1000 only<br>";
            }
            
        }
    
    ?>
</body>
</html>
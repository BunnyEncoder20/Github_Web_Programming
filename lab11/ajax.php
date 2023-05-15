<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Tutorial</title>

    <!-- JQuery Integration CDN link -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(      //anything inside .read(); will only get executed after the page finishes loading 
            function(){
                $("#btn1").click(
                    function(){
                        $("#ol1").css("background-color","red")        //how to change the css for a id one css at a time only
                    }
                );

                $("#btn2").click(
                    function(){
                        $("#ol2").css("color","blue")
                    }
                );

                $("#btn3").click(
                    function(){
                        $("#l1").append(" - Samsung Galaxy Tab S8 Ultra ");
                        $("#l2").append(" - iPad Pro 2022 M1 ");
                    }
                );
            }
        );
    </script>

    <style>
        /* #ol1{
            background-color: red;
        } */
    </style>
</head>

<body>
    <h2>Ecommerce Website</h2>

    <label for="ol1">Phones</label>
    <ol id="ol1">
        <li>Redmi</li>
        <li>Samsung</li>
        <li>OnePlus</li>
        <li>iPhone</li>
    </ol>
    <button id="btn1">Change the bg color</button>
    <br><br>

    <label for="ol2">Laptops</label>
    <ol id="ol2">
        <li>Dell</li>
        <li>MacBook</li>
        <li>ROG</li>
    </ol>
    <button id="btn2">Change the text color</button>
    <br><br>

    <label for="ol3">Tablets</label>
    <ol id="ol3">
        <li id="l1">Samsung</li>
        <li id="l2">iPad</li>
    </ol>
    <button id="btn3">Append text to the list items</button>

</body>
</html>
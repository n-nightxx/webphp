<!DOCTYPE html>
<html>
<head>
    <title>format</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
 <body>
    <?php 

    function hello () {
        echo "Say Hello <br>";
    }
    function goodbye () {
        echo "Good Bye !<br>";
    }

    for($i = 1; $i<= 10; $i++) {
        echo $i. " ";
        if ($i < 10){
            hello();
        } else {
            goodbye();
        }
    }
    ?>
</body>
</html>
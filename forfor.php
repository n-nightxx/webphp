<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-sacle=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
        <?php
      for ($i=2; $i<=5; $i++){
          echo "รอบใหญ่ที่ $i <br>"; 
          for ($j=1; $j<=3; $j++){
              echo "รอบที่เล็ก $j ($i*$j) ,";
              }
              echo "<br><br>";
      }
        ?>
    </body>
</html>
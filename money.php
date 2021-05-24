<!DOCTYPE html>
<html>
    <head>
           
            <title>format</title>
            <meta charset="UTF-8">
            <meta name ="viewport"content="width=device-width,initial-scale=1.0">
            <link rel ="stylesheet" type="text/css" href="mystyle.css">
     </head>
     </head>
         <body>
            <?php
             function formatmoney($number,$fractional=false){
                 if ($fractional){
                     $number = sprintf('%.2f',$number);
                 }
                 while (true){
                    $replaced=preg_replace('/(-?\d+)(\d\d\d)/','$1,$2',$number);
                    if ($replaced !=$number){
                         $number = $replaced;
                     }else{break; }
                 }
                 return $number;
             }//End Funtion formatmoney
             $a=19000000/7;
             echo $a; echo "<br>";//ปกติ
             echo formatmoney($a,true);echo "<br>";//จัดรูปแบบ
            ?>
         </body>
</html>
<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <?php
            $numberdString = "123456789012345678901234567890";
            $fivePos = strpos($numberdString, "5");
            echo "Posisi angka 5 di dalam string adalah $fivePos";
            $fivePos2 = strpos($numberdString, "5", $fivePos + 1);
            echo "<br> Posisi angka 5 yang kedua di dalam string adalah $fivePos2";
        ?>
    </body>
</html>
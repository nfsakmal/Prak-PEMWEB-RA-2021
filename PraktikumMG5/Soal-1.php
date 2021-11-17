<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MG5 Prak Pemweb</title>
    </head>

    <body>
        <?php
        $a = 10;
        $b = 5;

        function summation($a, $b){
            $result_sum = $a + $b;
            return $result_sum;
        }

        
        function subtraction($a, $b){
            $result_sub = $a - $b;
            return $result_sub;
        }

        function multiplication($a, $b){
            $result_mul = $a * $b;
            return $result_mul;
        }

        function distribution($a, $b){
            $result_dis = $a / $b;
            return $result_dis;
        }

        function module($a, $b){
            $result_mod = $a % $b;
            return $result_mod;
        }

        echo "Bilangan 1 = $a <br>";
        echo "Bilangan 2 = $b <br><br>";

        echo "Berikut merupakan hasil dari setiap operasi <br><br>";

        echo "PENJUMLAHAN <br>";
        $plus = summation($a, $b); 
        echo "Operator : + <br>";
        echo "Hasil : $plus";
        echo "<br><br>";
        
        echo "PENGURANGAN <br>";
        $min = subtraction($a, $b); 
        echo "Operator : - <br>";
        echo "Hasil : $min";
        echo "<br><br>";

        echo "PERKALIAN <br>";
        $multi = multiplication($a, $b); 
        echo "Operator : * <br>";
        echo "Hasil : $multi";
        echo "<br><br>";

        echo "PEMBAGIAN <br>";
        $sub = subtraction($a, $b); 
        echo "Operator : / <br>";
        echo "Hasil : $sub";
        echo "<br><br>";

        echo "MODULUS <br>";
        $mod = module($a, $b); 
        echo "Operator : % <br>";
        echo "Hasil : $mod";
        echo "<br><br>";
        ?>
        
    </body>
</html>
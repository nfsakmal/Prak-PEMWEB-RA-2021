<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MG5 Prak Pemweb</title>
        <h1>Bilangan Prima</h1>
    </head>

    <body>
    <?php
    function prima(){
        for($i = 2; $i <=50; $i++){
            for($j = 2; $j<$i ;$j++){
                if($i % $j == 0){
                    break;
                }else if ($i-1 == $j){
                    echo "$i, ";
                    break;
                }
            }
        }
    }

    echo "Bilangan prima dari 1 ke 50 adalah = ";
    prima();
    ?>
    </body>
</html>
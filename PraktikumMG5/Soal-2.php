<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MG5 Prak Pemweb</title>
        <h1>Pengurutan Array</h1>
    </head>

    <body>
    <?php
    $array = array("larine ","aduh ","qifuat ","toda ","anevi ","samid ","kifuat ");

    function sorting($array){
        sort($array);
        foreach($array as $data){
            echo "$data, ";
        }
    }

    echo "Data sebelum di urut = ";
    foreach ($array as $data){
        echo "$data, ";
    }
    echo "<br><br>";

    echo "Data setelah di urut = ";
    $answer = sorting($array);
    echo "$answer";
    ?>
    </body>
</html>

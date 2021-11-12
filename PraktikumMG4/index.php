<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="jquery-3.6.0.min.js"></script>
        
        <title>MG4 Prak Pemweb</title>
        <h1>Praktikum Pemweb 4 membuat CRUD (Create Read Update Delete)</h1>
    </head>

    <body>
        <button type="button" href="javascript:void()" onclick="create()"> Add Data Mahasiswa</button>
        <button  type="button" href="javascript:void()" onclick="read()"> See Data Mahasiswa</button>
        <div id="content"></div>

        <script> 
            function create() {
                $.get("update_data.php", function(data) {
                    $("#content").html(data);} );
            }

            function read() {
                $.get("read_data.php", function(data) {
                    $("#content").html(data);} );
            }
        </script>
    </body>


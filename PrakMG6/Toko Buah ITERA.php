<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MG5 Prak Pemweb</title>
        <center>
        <h1 style="color:green">Welcome to Red Devil Pub ITERA</h1>
        <img src="Asset/logo.png" alt="logo" style="width:128px;height:128px;">
        <img src="Asset/logo_itera.png" alt="logo" style="width:128px;height:128px;">
        </center>
    </head>

    <body>   
    <section>
        <div>
            <center>
                <h2>What do you want to buy today?</h2>
                <form action="" method="POST" id="belanja">
                    <label for="">Mangga (Rp 15.000/satuan) :  </label>
                    <input type="number" id="mangga" onchange="setValue()" name="mangga"> <br>
                    <label for="">Jambu (Rp 13.000/satuan) : </label>
                    <input type="number" id="jambu" onchange="setValue()" name="jambu"> <br>
                    <label for="">salak (Rp 10.000/satuan) : </label>
                    <input type="number" id="salak" onchange="setValue()" name="salak"> <br>
                    <label for="">Harga Total : Rp. </label>
                    <input type="text" id="total" name="total" readonly> <br>
                </form>
            </center>
        </div>
    </section>
    <script>
        function setValue(){
            var mangga = document.getElementById("mangga").value * 15000;
            var jambu = document.getElementById("jambu").value * 13000;
            var salak = document.getElementById("salak").value * 10000;
            console.log(mangga + jambu + salak);
            var harga_total = mangga + jambu + salak;
            total.value = harga_total;
        }
    </script>
</body>
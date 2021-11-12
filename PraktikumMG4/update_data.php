<?php include "connect.php";

if(isset($_GET['nim'])) {
    $nim=$_GET['nim'];
} else {
    $nim=" ";
}

$nama       =" ";
$prodi      =" ";
$angkatan   =" ";

$sql=$conn->query("select * from mahasiswa where nim='".$nim."'");
while ($rs=$sql->fetch_object()) {
    $nama       =$rs->nama;
    $prodi      =$rs->prodi;
    $angkatan   =$rs->angkatan;
}
?>

<fieldset>
    <form onsubmit="save(); return false;" id="content_update">
    NIM         <input type="text" name="nim"       value="<?php echo $nim; ?>"><br>
    Nama        <input type="text" name="nama"      value="<?php echo $nama; ?>"><br>
    Prodi       <input type="text" name="prodi"     value="<?php echo $prodi; ?>"><br>
    Angkatan    <input type="text" name="angkatan"  value="<?php echo $angkatan; ?>"><br>
    <input type="submit" value="Submit">
    </form>
</fieldset>

<script> 
    function save() {
        $.ajax ({
            type    : "POST",
            url     : "datalist.php",
            data    : $("#content_update"). serialize(),
            success : function(data) {
                read();
                //
            },
            error: function() {
                alert('error');
            }
        }
    );
}
</script>
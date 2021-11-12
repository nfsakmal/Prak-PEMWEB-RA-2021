<?php include "connect.php"; ?>

<table width="900" border="3">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
    </tr>

<?php $sql=$conn->query("select * from mahasiswa");
while ($rs=$sql->fetch_object()) { ?>
    <tr>
        <th> <?php echo $rs->nim; ?> </th>
        <th> <?php echo $rs->nama; ?> </th>
        <th> <?php echo $rs->prodi; ?> </th>
        <th> <?php echo $rs->angkatan; ?> </th>
        <th> <button type="button" href="javascript:void()" onclick="edit('<?php echo $rs->nim; ?>')"> Edit </button></th>
        <th> <button type="button" href="javascript:void()" onclick="delet('<?php echo $rs->nim; ?>')"> Delete </button></th>
    </tr>
<?php } ?>
</table>

<script> 
    function edit(nim) {
        $.get("update_data.php", {nim:nim}, function(data) {
            $("#content").html(data);
        } );
    }
    
    function delet(nim) {
        $.get("delete_data.php", {nim:nim}, function(data) {
            read();
        } );
    }
</script>
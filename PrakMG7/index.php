<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "prakpemwebmg7";

    $connect = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($connect));

    if(isset($_POST['bsave']))
    {
        if($_GET['hal'] == 'edit')
        {
            $edit = mysqli_query($connect, "UPDATE tplayer SET
                                                nickname = '$_POST[tnick]',
                                                name = '$_POST[tname]',
                                                nationality = '$_POST[tnat]',
                                                position = '$_POST[tpos]'
                                             WHERE id = '$_GET[id]'
                                           ");
            if($edit)
            {
                echo "<script>
                alert('Edit Has Been Made!');
                document.location='index.php';
                     </script>";
            }
            else
            {
                echo "<script>
                alert('Edit Data Failed!');
                document.location='index.php';
                     </script>";
            } 
        }
        else
        {
            $save = mysqli_query($connect, "INSERT INTO tplayer (nickname, name, nationality, position)
                                            VALUES ('$_POST[tnick]',
                                                    '$_POST[tname]',
                                                    '$_POST[tnat]',
                                                    '$_POST[tpos]')
                                            ");
            if($save)
            {
                echo "<script>
                alert('Data Has Been Saved!');
                document.location='index.php';
                     </script>";
            }
            else
            {
                echo "<script>
                alert('Data Has Been Saved!');
                document.location='index.php';
                     </script>";
            } 
        }
    }

    if(isset($_GET['hal']))
    {
        if($_GET['hal'] == "edit")
        {
            $view = mysqli_query($connect, "SELECT * FROM tplayer WHERE id = '$_GET[id]'");
            $data = mysqli_fetch_array($view);
            if($data)
            {
                $vnickname = $data['nickname'];
                $vname = $data['name'];
                $vnationality = $data['nationality'];
                $vposition = $data['position'];
            }
        }
        else if($_GET['hal'] == "delete")
        {
            $delete = mysqli_query($connect, "DELETE FROM tplayer WHERE id = '$_GET[id]'");
            if($delete)
            {
                echo "<script>
                alert('Data Has Been Removed!');
                document.location='index.php';
                     </script>";  
            }
        }
    }
?>
<!DOCTYPE html> 
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Prak MG 7</title>
</head>

<body>
<div class="container">
    <h1 class="text-center">CSGO PLAYER DATABASE</h1>
    <h2 class="text-center">Welcome Admin!</h2>

    <div class="card mt-7">
        <div class="card-header bg-primary text-white">
            Please Input Player Data!
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label>Nickname</label>
                    <input type="text" name="tnick" value="<?=@$vnickname?>" class="form-control" placeholder="Please Input Nickname Here!" required>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="tname" value="<?=@$vname?>" class="form-control" placeholder="Please Input Name Here!" required>
                </div>
                <div class="form-group">
                    <label>Nationality</label>
                    <input type="text" name="tnat" value="<?=@$vnationality?>" class="form-control" placeholder="Please Input Nationality Here!" required>
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <select class="form-control" name="tpos">
                        <option value="<?=@$vposition?>"><?=@$vposition?></option>
                        <option value="Rifler">Rifler</option>
                        <option value="Lurker">Lurker</option>
                        <option value="AWPer">AWPer</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success" name="bsave">Save</button>
                <button type="reset" class="btn btn-danger" name="breset">Reset</button>
            </form>
        </div>
    </div>

    <div class="card mt-7">
        <div class="card-header bg-secoondary text-white">
            Player List
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Number</th>
                    <th>Nickname</th>
                    <th>Name</th>
                    <th>Nationality</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
                <?php
                    $num = 1;
                    $view = mysqli_query($connect, "SELECT * from tplayer order by id desc");
                    while($data = mysqli_fetch_array($view)):
                ?>
    
                <tr>
                    <td><?=$num++;?></td>
                    <td><?=$data['nickname']?></td>
                    <td><?=$data['name']?></td>
                    <td><?=$data['nationality']?></td>
                    <td><?=$data['position']?></td>
                    <td>
                        <a href="index.php?hal=edit&id=<?=$data['id']?>" class="btn btn-warning">Edit</a>
                        <a href="index.php?hal=delete&id=<?=$data['id']?>" 
                           onclick="return confirm('Are you sure want to delete this data?')" class="btn btn-danger">Delete</a>
                </tr>
            <?php endwhile; ?>
            </table>

        </div>
    </div>

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
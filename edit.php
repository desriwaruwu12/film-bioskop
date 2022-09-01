<?php
include_once("config.php");
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama=$_POST['nama_film'];
    $genre=$_POST['genre'];
    $jam_tayang=$_POST['jam_tayang'];
    $jam_selesai=$_POST['jam_selesai'];

    $result = mysqli_query($mysqli, "UPDATE jadwal SET nama_film='$nama',genre='$genre',jam_tayang='$jam_tayang',jam_selesai='$jam_selesai' WHERE id_jadwal=$id");
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id_jadwal'];

$result = mysqli_query($mysqli, "SELECT * FROM jadwal WHERE id_jadwal=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id_jadwal'];
    $nama = $user_data['nama_film'];
    $genre = $user_data['genre'];
    $jam_tayang = $user_data['jam_tayang'];
    $jam_selesai = $user_data['jam_selesai'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_magang" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Film</td>
                <td><input type="text" name="nama_film" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Genre</td>
                <td><input type="text" name="genre" value=<?php echo $genre;?>></td>
            </tr>
            <tr> 
                <td>Jam Tayang</td>
                <td><input type="text" name="jam_tayang" value=<?php echo $jam_tayang;?>></td>
            </tr>
            <tr> 
                <td>Jam Selesai</td>
                <td><input type="text" name="jam_selesai" value=<?php echo $jam_selesai;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id_jadwal'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
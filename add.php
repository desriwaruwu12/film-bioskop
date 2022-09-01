<html>
<head>
    <title>Form Tambah</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id_jadwal"></td>
            </tr>
            <tr> 
                <td>Nama Film</td>
                <td><input type="text" name="nama_film"></td>
            </tr>
            <tr> 
                <td>Genre</td>
                <td><input type="text" name="genre"></td>
            </tr>
            <tr> 
                <td>Jam Tayang</td>
                <td><input type="text" name="jam_tayang"></td>
            </tr>
            <tr> 
                <td>Jam Selesai</td>
                <td><input type="text" name="jam_selesai"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
     if(isset($_POST['Submit'])) {
        $id = $_POST['id_jadwal'];
        $nama = $_POST['nama_film'];
        $genre = $_POST['genre'];
        $jam_tayang = $_POST['jam_tayang'];
        $jam_selesai = $_POST['jam_selesai'];

        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_jadwal,nama_film,genre,jam_tayang,jam_selesai) VALUES('$id','$nama','$genre','$jam_tayang','$jam_selesai')");
        echo "User added successfully. <a href='index.php'>View List</a>";
    }
    ?>
</body>
</html>
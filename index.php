<?php
include_once("config.php");

$hasil = mysqli_query($mysqli, "SELECT * FROM jadwal ORDER BY id_jadwal DESC");
?>
<html>
<head>    
    <title>List Data Film Bioskop</title>
</head>
 
<body>
<a href="add.php">Tambah Film Bioskop</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Id</th> <th>Nama Film</th> <th>Genre</th> <th>Jam Tayang</th> <th>Jam Selesai</th> <th>Aksi</th>
    </tr>
    <?php  
    while($bioskop = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$bioskop['id_jadwal']."</td>";
        echo "<td>".$bioskop['nama_film']."</td>";
        echo "<td>".$bioskop['genre']."</td>";
        echo "<td>".$bioskop['jam_tayang']."</td>";
        echo "<td>".$bioskop['jam_selesai']."</td>";   
        echo "<td><a href='edit.php?id_jadwal=$bioskop[id_jadwal]'>Edit</a> | <a href='delete.php?id_jadwal=$bioskop[id_jadwal]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
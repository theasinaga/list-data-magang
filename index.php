<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM pendaftar_magang ORDER BY nim DESC");
?>
 
<html>
<head>    
    <title>List Data Magang</title>
</head>
 
<body>
<a href="add.php">Tambah Pendaftar Magang</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>nim</th> <th>nama</th> <th>alamat</th> <th>asal_instansi</th> <th>semester</th> <th>Aksi</th>
    </tr>
    <?php  
    while($magang = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$magang['nim']."</td>";
        echo "<td>".$magang['nama']."</td>";
        echo "<td>".$magang['alamat']."</td>";
        echo "<td>".$magang['asal_instansi']."</td>";
        echo "<td>".$magang['semester']."</td>";   
        echo "<td><a href='edit.php?nim=$magang[nim]'>Edit</a> | <a href='delete.php?nim=$magang[nim]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
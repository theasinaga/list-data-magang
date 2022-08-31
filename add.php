<html>
<head>
    <title>Form Tambah</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>asal_instansi</td>
                <td><input type="text" name="asal_instansi"></td>
            </tr>
            <tr> 
                <td>semester</td>
                <td><input type="text" name="semester"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
     if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $asal_instansi = $_POST['asal_instansi'];
        $semester = $_POST['semester'];

        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO pendaftar_magang(nim,nama,alamat,asal_instansi,semester) VALUES('$nim','$nama','$alamat','$asal_instansi','$semester')");
        echo "User added successfully. <a href='index.php'>View List</a>";
    }
    ?>
</body>
</html>
 
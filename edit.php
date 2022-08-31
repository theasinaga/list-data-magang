<?php
include_once("config.php");
if(isset($_POST['update']))
{	
    $nim = $_POST['nim'];
    
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $asal_instansi=$_POST['asal_instansi'];
    $semester=$_POST['semester'];

    $result = mysqli_query($mysqli, "UPDATE pendaftar_magang SET nama='$nama',alamat='$alamat',asal_instansi='$asal_instansi',semester='$semester' WHERE nim=$nim");
    header("Location: index.php");
}
?>
<?php

$nim = $_GET['nim'];

$result = mysqli_query($mysqli, "SELECT * FROM pendaftar_magang WHERE nim=$nim");
 
while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $asal_instansi = $user_data['asal_instansi'];
    $semester = $user_data['semester'];
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
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Asal Instansi</td>
                <td><input type="text" name="asal_instansi" value=<?php echo $asal_instansi;?>></td>
            </tr>
            <tr> 
                <td>Semester</td>
                <td><input type="text" name="semester" value=<?php echo $semester;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
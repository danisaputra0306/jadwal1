
<?php 
include('class_jadwal.php');
$data=new class_jadwal;
$dataAll=$data->get_dataAll();
 
?>
<html>
    <head>
    </head>
    <body>
        <h1>Jadwal Mengajar</h1>
        <p><a href="tambah.php"><button>Tambah</button></a></p>
        <table border="1px">
            <tr>
                <th>no</th>
                <th>kode matkul</th>
                <th>nama matkul</th>
                <th>kode dosen</th>
                <th>nama dosen</th>
              	<th>ruang</th>
				<th>waktu</th>
                <th>Aksi</th>
            </tr>
 
            <?php
            $no=1;
            while($rec=$dataAll->fetch_array()){
                echo "<tr>
                <td>".$no++."</td>
                <td>".$rec['kd_matkul']."</td>
                <td>".$rec['nama']."</td>
                <td>".$rec['kd_dosen']."</td>
                <td>".$rec['nama']."</td>
                <td>".$rec['ruang']."</td>
				<td>".$rec['waktu']."</td>
                <td><a href='edit.php?kd_matkul=".$rec['kd_matkul']."'>edit</a> <a href='hapus.php?kd_matkul=".$rec['kd_matkul']."'>hapus</a></td>
                </tr>";
            }
 
            ?>
 
 
        </table>
    </body>
</html>

<?php
 include("class_jadwal.php");
 $data=new class_jadwal;
 $dataEdit=$data->getByID($_GET['kd_matkul']);
 $rec=$dataEdit->fetch_assoc();
 ?>
 
 
 <html>
    <body>
        <h1>Tambah Matkul</h1>
 
        <form method="post" action="#">
        <table>
           <tr>
               <td>kode matkul </td>
               <td>:</td>
               <td><input name="kd_matkul" value="<?php echo $rec['kd_matkul']?>" disabled></td>
           </tr>
           <tr>
               <td>ruang</td>
               <td>:</td>
               <td><input name="ruang" value="<?php echo $rec['ruang']?>"></td>
           </tr>
           <tr>
               <td>waktu </td>
               <td>:</td>
               <td><input name="waktu" type="varchar" value="<?php echo $rec['waktu']?>"></td>
           </tr>
           <tr>
               <td> </td>
               <td></td>
               <td><button type="submit" name="simpan" >simpan</button></td>
           </tr>
       </table>
        </form>
 
        <?php
            if(isset($_POST['simpan'])){
               
                $data->update($rec['kd_matkul'],$_POST['ruang'],$_POST['waktu']);
                header("location:index.php");
 
            }
        ?>
 
     
       
    </body>
</html>
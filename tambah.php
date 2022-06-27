<html>
    <body>
        <h1>Tambah Jadwal</h1>
 
        <form method="post" action="#">
        <table>
           <tr>
               <td>kode matkul </td>
               <td>:</td>
               <td><input name="kd_matkul"></td>
           </tr>
           <tr>
               <td>ruang </td>
               <td>:</td>
               <td><input name="nama"</td>
               </tr>
           <tr>
               <td>waktu </td>
               <td>:</td>
               <td><input name="waktu"type="varchar"</td>
           </tr>
           <tr>
               <td> </td>
               <td></td>
               <td><button type="submit" name="simpan" >simpan</button></td>
           </tr>
       </table>
        </form>
 
        <?php
        include("class_jadwal.php");
        $data=new class_jadwal;
 
          if(isset($_POST['simpan'])){
              $data->add_data($_POST['kd_matkul'],$_POST['ruang'],$_POST['waktu']);
              header("location:index.php");
          }
 
        ?>
       
    </body>
</html>

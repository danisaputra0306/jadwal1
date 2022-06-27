<?php
include('../koneksi_jadwal.php');
class class_jadwal{
 
    public $con;
    function __construct(){
        $koneksi_jadwal=new koneksi_jadwal;
        $this->con=$koneksi_jadwal->con;
    }
 
        function get_dataAll(){
            $data=$this->con->query("select * from tbl_jadwal");
             return $data;
   
        }

        function add_data($kd_matkul,$ruang,$waktu){
            $this->con->query("insert into tbl_jadwal values('$kd_matkul','$ruang','$waktu')");
            return true;
        }

        function delete($kd_matkul){
            $this->con->query("delete from tbl_jadwal where kd_matkul='$kd_matkul'");
            return true;
       
        }

         function getByID($kd_matkul){
           $data= $this->con->query("select * from tbl_jadwal where kd_matkul='$kd_matkul'");
            return $data;
        }
 
        function update($kd_matkul,$ruang,$waktu){
            $this->con->query("update tbl_jadwal SET ruang='$ruang', waktu='$waktu' WHERE kd_matkul='$kd_matkul'");
            return true;
        }


 }

<script>
        function disp_confirm(){
          var r=confirm("Apakah Anda Akan Mengulangi Konsultasi...???")
          if (r==true){
            window.location = "index.php?page=konsul"
          }
        }
      </script>
<?php
error_reporting(0);
include("library/koneksi.php");
    if(!isset($_GET['idtanya'])){
        //tampilkan pertanyaan pertama
        $sqlp = "select * from konsul_diagnosa where mulai='Y'";
        $rs=mysql_query($sqlp);
        $data=mysql_fetch_array($rs);
        //bentuk pertanyaan
        echo "<form>";
        echo "<CENTER><h2> <font  color='#19bc9c'>Pertanyaan</font></h2> </CENTER>";
		echo "<br/><br/><br/>";
		echo "<h1>DIAGNOSA</h1>";
        echo $data['gejala_dan_kerusakan']."<br>";
        echo "<input type='radio' name='idtanya' value='".$data['bila_benar']."'>Ya<br>";
        echo "<input type='radio' name='idtanya' value='".$data['bila_salah']."'>Tidak<br>";
        echo "<input type='submit' value='Lanjut >> ' >";
        echo "</form>";

		 } else {
		 //tampilkan pertanyaan pertama
			$idsolusi=$_GET['idtanya'];
			$sqlp = "select * from konsul_diagnosa where id_kd=$idsolusi";
			$rs=mysql_query($sqlp);
			$data=mysql_fetch_array($rs);

			$NOIP= $_SERVER['REMOTE_ADDR'];
			$q=mysql_fetch_array(mysql_query("select * from tamu order by id_tamu desc limit 1"));
			//bentuk pertanyaan

			echo "<form action ='?page=solving_konsulTes' method='POST'>";
			echo "<CENTER><h2> <font  color='#19bc9c'>Pertanyaan </font></h2> </CENTER>";
			echo "<br/><br/><br/>";

			echo $data['gejala_dan_kerusakan']."<br>";
			if($data['selesai']!="Y"){
			echo "<input type='radio' name='idtanya' value='".$data['bila_benar']."'>Ya<br>";
			echo "<input type='radio' name='idtanya' value='".$data['bila_salah']."'>Tidak<br><br><br>";
			echo "<input type='submit' class='btn btn-danger' value='Lanjut  ' > &nbsp&nbsp";
			echo '<input type="button" class="btn btn-danger" onclick="disp_confirm()" value="Batal">';


			}else{

			$query=mysql_query("insert into menganalisa values('','$q[id_tamu]','$data[id_kd]',NOW())");
			echo "<meta http-equiv='refresh' content='0; url=?page=analisa_diagnosa_konsul'>";


			//jika ingin menambah pertanyaan
			}

			echo "</form>";

			}

?>

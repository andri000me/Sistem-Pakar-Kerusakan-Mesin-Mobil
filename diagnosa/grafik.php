<?php
	error_reporting(0);
	include "library/koneksi.php";

	// mencari P1
	$query = "SELECT count(*) jumP1 from analisa_hasildiagnosa where id_kd = '4'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$jumP1 = $data['jumP1'];

	// mencari P2
	$query = "SELECT count(*) jumP2 from analisa_hasildiagnosa where id_kd = '7'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP2 = $data['jumP2'];

	// mencari P3
	$query = "SELECT count(*) jumP3 from analisa_hasildiagnosa where id_kd = '9'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP3 = $data['jumP3'];

	// mencari P4
	$query = "SELECT count(*) jumP4 from analisa_hasildiagnosa where id_kd = '11'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP4 = $data['jumP4'];

	// mencari P5
	$query = "SELECT count(*) jumP5 from analisa_hasildiagnosa where id_kd = '13'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP5 = $data['jumP5'];

	// mencari P6
	$query = "SELECT count(*) jumP6 from analisa_hasildiagnosa where id_kd = '15'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jumP6 = $data['jumP6'];

	

	// menghitung total
	$total = $jumP1 + $jumP2 + $jumP3 + $jumP4 + $jumP5 + $jumP6 ;

	// menghitung persen
	$prosenP1 = $jumP1/$total * 100;
	$prosenP2 = $jumP2/$total * 100;
	$prosenP3 = $jumP3/$total * 100;
	$prosenP4 = $jumP4/$total * 100;
	$prosenP5 = $jumP5/$total * 100;
	$prosenP6 = $jumP6/$total * 100;
	

	// menentukan panjang
	$panjangGrafikP1 = $prosenP1 * 30 / 100;
	$panjangGrafikP2 = $prosenP2 * 30 / 100;
	$panjangGrafikP3 = $prosenP3 * 30 / 100;
	$panjangGrafikP4 = $prosenP4 * 30 / 100;
	$panjangGrafikP5 = $prosenP5 * 30 / 100;
	$panjangGrafikP6 = $prosenP6 * 30 / 100;
	
?>

<h2>Statistik Kerusakan yang sering dialami User</h2><br>
	<p><b>Over heating/panas berlebih</b> (Jumlah: <?php echo $jumP1; ?> | <?php echo $prosenP1; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP1; ?>%; background-color: red;" title="Over heating/panas berlebih (Jumlah: <?php echo $jumP1; ?> | <?php echo $prosenP1; ?>%)">
			</div>
	</p>

	<p><b>Manifold absolute pressure bermasalah</b> (Jumlah: <?php echo $jumP2; ?> | <?php echo $prosenP2; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP2; ?>%; background-color: red;" title="Manifold absolute pressure bermasalah (Jumlah: <?php echo $jumP2; ?> | <?php echo $prosenP2; ?>%)">
			</div>
	</p>

	<p><b>Engine oil temperatur sensor bermasalah</b> (Jumlah: <?php echo $jumP3; ?> | <?php echo $prosenP3; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP3; ?>%; background-color: red;" title="Engine oil temperatur sensor bermasalah (Jumlah: <?php echo $jumP3; ?> | <?php echo $prosenP3; ?>%)">
			</div>
	</p>

	<p><b>Throttle position sensor</b> (Jumlah: <?php echo $jumP4; ?> | <?php echo $prosenP4; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP4; ?>%; background-color: red;" title="Throttle position sensor (Jumlah: <?php echo $jumP4; ?> | <?php echo $prosenP4; ?>%)">
			</div>
	</p>

	<p><b>Intake air temperature</b> (Jumlah: <?php echo $jumP5; ?> | <?php echo $prosenP5; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP5; ?>%; background-color: red;" title="Intake air temperature (Jumlah: <?php echo $jumP5; ?> | <?php echo $prosenP5; ?>%)">
			</div>
	</p>

	<p><b>Injector bermasalah</b> (Jumlah: <?php echo $jumP6; ?> | <?php echo $prosenP6; ?>%) 
			<div style="height: 10px; width: <?php echo $panjangGrafikP6; ?>%; background-color: red;" title="Injector bermasalah (Jumlah: <?php echo $jumP6; ?> | <?php echo $prosenP6; ?>%)">
			</div>
	</p>

	
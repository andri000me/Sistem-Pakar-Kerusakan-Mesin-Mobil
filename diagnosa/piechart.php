
<!DOCTYPE html>
<html lang="en">
<head>


	<script src="assets/js/highcharts.js"></script>

	<script src="assets/js/jquery-1.10.1.min.js"></script>

	<script>
		var chart;
		$(document).ready(function() {
			  chart = new Highcharts.Chart(
			  {

				 chart: {
					renderTo: 'mygraph',
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false
				 },
				 title: {
					text: 'Statistik Kerusakan '
				 },
				 tooltip: {
					formatter: function() {
						return '<b>'+
						this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' % ';
					}
				 },


				 plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: true,
							color: '#000000',
							connectorColor: 'green',
							formatter: function()
							{
								return '<b>' + Highcharts.numberFormat(this.percentage, 2) +' % ';
							}
						}
					}
				 },

					series: [{
					type: 'pie',
					name: 'Browser share',
					data: [
									<?php
					    		$con=mysqli_connect("localhost","root","","sispakdb");
									$query = mysqli_query($con,"SELECT distinct(a.nama_kerusakan) as gejala from solusi a, menganalisa b, memiliki c where a.id_solusi=c.id_solusi and c.id_kd=b.id_kd ");

										while ($row = mysqli_fetch_array($query)) {
										$browsername = $row['gejala'];

										$data = mysqli_fetch_array(mysqli_query($con,"SELECT count(b.id_kd) as jumP from solusi a, menganalisa b, memiliki c where a.id_solusi=c.id_solusi and c.id_kd=b.id_kd and a.nama_kerusakan='$browsername'"));
										$jumlah = $data['jumP'];

									?>
									[
										'<?php echo $browsername ?>', <?php echo $jumlah; ?>
									],
									<?php
									}
									?>

								]
					}]
			  });
		});
	</script>


</head>
<body>

</br></br>
<!--- Bagian Judul-->

				<div id ="mygraph"></div>

<script src="assets/js/highcharts.js"></script>
<script src="assets/js/jquery-1.10.1.min.js"></script>

</body>
</html>

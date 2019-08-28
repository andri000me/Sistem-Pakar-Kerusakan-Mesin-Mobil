<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Aplikasi Sistem Pakar Deteksi Kerusakan Mesin Mobil Toyota Innova</title>
  <link rel="shortcut icon" href="img/logo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.js" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
          rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script type="text/javascript" src="jsa/jQuery-2.1.4.min.js"></script>
	<script type="text/javascript" src="jsa/jquery.cycle2.min.js"></script>

<style type="text/css">
	* { margin: 0; padding: 0; }
	img { max-width: 100%; }
	.cycle-slideshow {
		width: 100%;
		display: block;
		position: relative;
		margin-left:70px;
		overflow: hidden;
	}
	.cycle-prev, .cycle-next {
		font-size: 200%;
		color: #fff;
		display: block;
		position: absolute;
		top: 50%;
		z-index: 9999;
		cursor: pointer;
		margin-top: -16px;
	}
	.cycle-prev { left: 42px; }
	.cycle-next { right: 62px; }
	.cycle-pager {
		position: absolute;
		width: 100%;
		height: 10px;
		bottom: 10px;
		z-index: 9999;
		text-align: center;
	}
	.cycle-pager span {
		text-indent: 100%;
		top: 100px;
		width: 10px;
		height: 10px;
		display: inline-block;
		border: 1px solid #fff;
		border-radius: 50%;
		margin: 0 10px;
		white-space: nowrap;
		cursor: pointer;
	}
	.cycle-pager-active { background-color: #fff; }
</style>
</head>

<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  	    <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand">
        <img src="img/logo.png" alt="">
        Aplikasi Sistem Pakar Deteksi Kerusakan Mesin Mobil Toyota Innova
      </a>
    </div>
    <!-- /container -->
  </div>
  <!-- /navbar-inner -->
</div>
<!-- /navbar -->


 <?php
include "menu.php";
?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">

        <div class="span6">
          <div class="widget widget-nopad">
            <h2 class="news-item-preview" >
              <font  color='#000000' align="center">
				        Selamat datang di website Aplikasi Sistem Pakar Kerusakan Mesin Mobil Toyota Innova , Semoga informasi yang ada di website ini bisa bermanfaat
				        buat anda.</h2>
              </font>
					    <div class="cycle-slideshow">
    						<span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
    						<span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
    						<span class="cycle-pager"></span>  <!-- Untuk membuat tanda bulat atau link pada slider -->
    						<img src="img/a.jpg" alt="Gambar Pertama">
    						<img src="img/b.jpg" alt="Gambar Kedua">
    						<img src="img/c.jpg" alt="Gambar Kedua">
    						<img src="img/d.jpg" alt="Gambar Kedua">
    						<img src="img/e.jpg" alt="Gambar Kedua">
              </div>
                <!-- /widget-content -->
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 -->

        <div class="span6">
          <div class="widget">
            <div class="widget-content">
              <p class="news-item-preview">

              <?php
	$page	= isset($_GET['page']) ? $_GET['page'] : "";

	if(strstr($page,"konsul")) {
	$j="";
	} else if(strstr($page,"vkamus")) {
	$j="";
	} else if(strstr($page,"grafik")) {
	$j="";
	} else if(strstr($page,"histori")) {
	$j="";
	$j="";
	} else if(strstr($page,"cetak")) {
	$j="";
	} else {
	$j="<h2><a  href=''><i class='icon-home'> Home </i></a></h2>";
	}
	echo $j;
	?>

    <ul class="styledlist">
    <?php
	if($page=="") {
	include "diagnosa/piechart.php";
	//menu konsul
	} else if($page=="konsul") {
	include "diagnosa/login_konsul.php";
	} else if($page=="ceklogin_konsul") {
	include "diagnosa/$page.php";
	} else if($page=="formtamu_konsul") {
	include "diagnosa/$page.php";
	} else if($page=="aksiformtamu_konsul") {
	include "diagnosa/$page.php";
	} else if($page=="solving_konsul") {
	include "diagnosa/$page.php";
	} else if($page=="solving_konsulTes") {
	include "diagnosa/$page.php";
	} else if($page=="analisa_diagnosa_konsul") {
	include "diagnosa/$page.php";
	//========akhir konsultasi====

	//menu cetak
	} else if($page=="cetak") {
	include "diagnosa/cetak.php";

	//======== akhir menu cetak =========

	//menu kamus
	} else if($page=="vkamus") {
	include "diagnosa/kamus.php";
	} else if($page=="view_vkamus") {
	include "diagnosa/$page.php";


	//==========  akhir menu kamus  =================
	//menu histori
	} else if($page=="histori") {
	include "diagnosa/histori.php";
	} else if($page=="view_histori") {
	include "diagnosa/$page.php";
	} else if($page=="caridata_histori") {
	include "diagnosa/$page.php";

	//======== akhir menu histori =========


	//log out

	} else {
	//echo "<meta http-equiv='refresh' content='0; url=?page=home'>";
	//include 'coba.php';
	}
	?> </p>
            </div>
            <!-- /widget-content -->
          </div>
          <!-- /widget -->



        </div>
        <!-- /span6 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /main-inner -->
</div>
<!-- /main -->

<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy;2019 Pria Pambudi </div>
      </div>
    </div>
  </div>
</div>
<!-- /footer -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

<script src="js/base.js"></script>
<!-- <script>

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script>  -->
</body>
</html>

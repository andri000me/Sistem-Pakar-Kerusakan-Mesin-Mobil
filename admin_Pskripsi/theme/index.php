<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
include "../config/fungsi2.php";
include "../config/koneksi.php";

function logout() {
	session_start();
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
if (empty($_SESSION[username]) AND empty($_SESSION[passuser])){
  echo "
 <center>Untuk mengakses sistem, Anda harus login <br>";
  echo "<a href=../index.php><b>LOGIN</b></a></center>";
}
else{

$utama='<center>Selamat Datang <b>'.$_SESSION[namalengkap].'</b> di Sistem Pakar Deteksi Kerusakan Mesin Mobil. Untuk menggunakan, silakan memilih menu di samping kiri !.<br><br>Jangan lupa LOG OUT sebelum keluar</center>


';
?>


<?php

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistem Pakar</title>
	<link rel="shortcut icon" href="../../img/logo.jpg" />
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><img  > <b>Diagnosa Kerusakan Mesin Mobil</b></a>
            <!--logo end-->

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../index.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">


                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Rule Diagnosa</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=input_rule_diagnosa"><i class="fa fa-plus"></i>Tambah Rule Diagnosa</a></li>
                          <li><a  href="?page=rule_diagnosa"><i class="fa fa-folder-open"></i>Data Rule Diagnosa</a></li>
                     </ul>
                  </li>

				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Relasi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=input_memiliki"><i class="fa fa-plus"></i>Tambah Relasi</a></li>
                          <li><a  href="?page=memiliki"><i class="fa fa-folder-open"></i>Data Relasi</a></li>
                     </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Solusi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=input_kerusakan"><i class="fa fa-plus"></i>Tambah Solusi</a></li>
                          <li><a  href="?page=kerusakan"><i class="fa fa-folder-open"></i>Data Solusi</a></li>
                     </ul>
                  </li>

				   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Kamus</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=input_kamus"><i class="fa fa-plus"></i>Tambah Kamus</a></li>
                          <li><a  href="?page=kamus"><i class="fa fa-folder-open"></i>Data Kamus</a></li>
                     </ul>
                  </li>

				  <li class="sub-menu">
                      <a href="?page=histori">
                          <i class="fa fa-list-alt"></i>
                          <span>Histori</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Admin</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=input_user"><i class="fa fa-plus"></i>Tambah Admin</a></li>
                          <li><a  href="?page=user"><i class="fa fa-folder-open"></i>Data Admin</a></li>
                       </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">

                  	<?php
	$page	= isset($_GET['page']) ? $_GET['page'] : "";

	if(strstr($page,"kerusakan")) {
	$j="";
	} else if(strstr($page,"rule_diagnosa")) {
	$j="";
	} else if(strstr($page,"memiliki")) {
	$j="";
	} else if(strstr($page,"kamus")) {
	$j="";
	} else if(strstr($page,"histori")) {
	$j="";
	} else if(strstr($page,"user")) {
	$j="";
	} else {
	$j="<h2><a  href='index.php'><i class='fa fa-home'></i> Home</a></h2>";
	}
	echo $j;
	?>

    <ul class="styledlist">
    <?php
	//menu Rule
	if($page=="rule_diagnosa") {
	include "../rule/lihat_rule_diagnosa.php";
	} else if($page=="input_rule_diagnosa") {
	include "../rule/$page.php";
	} else if($page=="act_input_rule_diagnosa") {
	include "../rule/$page.php";
	} else if($page=="edit_rule_diagnosa") {
	include "../rule/$page.php";
	} else if($page=="act_edit_rule_diagnosa") {
	include "../rule/$page.php";
	} else if($page=="hapus_rule_diagnosa") {
	include "../rule/$page.php";

	//======== akhir menu Rule =========

	//menu kerusakan
	}else if($page=="kerusakan") {
	include "../kerusakan/lihat_kerusakan.php";
	} else if($page=="input_kerusakan") {
	include "../kerusakan/$page.php";
	} else if($page=="act_input_kerusakan") {
	include "../kerusakan/$page.php";
	} else if($page=="edit_kerusakan") {
	include "../kerusakan/$page.php";
	} else if($page=="act_edit_kerusakan") {
	include "../kerusakan/$page.php";
	} else if($page=="hapus_kerusakan") {
	include "../kerusakan/$page.php";

	//======== akhir menu transaksi =========

	//menu kamus
	}else if($page=="kamus") {
	include "../kamus/lihat_kamus.php";
	} else if($page=="input_kamus") {
	include "../kamus/$page.php";
	} else if($page=="act_input_kamus") {
	include "../kamus/$page.php";
	} else if($page=="edit_kamus") {
	include "../kamus/$page.php";
	} else if($page=="act_edit_kamus") {
	include "../kamus/$page.php";
	} else if($page=="hapus_kamus") {
	include "../kamus/$page.php";

	//======== akhir menu transaksi =========

	//menu memiliki
	}else if($page=="memiliki") {
	include "../memiliki/lihat_memiliki.php";
	} else if($page=="input_memiliki") {
	include "../memiliki/$page.php";
	} else if($page=="act_input_memiliki") {
	include "../memiliki/$page.php";
	} else if($page=="edit_memiliki") {
	include "../memiliki/$page.php";
	} else if($page=="act_edit_memiliki") {
	include "../memiliki/$page.php";
	} else if($page=="hapus_memiliki") {
	include "../memiliki/$page.php";

	//======== akhir menu transaksi =========


	//menu modul
	} else if($page=="histori") {
	include "../histori/histori.php";
	} else if($page=="caridata_histori") {
	include "../histori/$page.php";
	} else if($page=="act_input_modul") {
	include "../modul/$page.php";
	} else if($page=="hapus_modul") {
	include "../modul/$page.php";
	} else if($page=="edit_modul") {
	include "../modul/$page.php";
	} else if($page=="act_edit_modul") {
	include "../modul/$page.php";
	//======== akhir menu transaksi =========

	//menu user
	} else if($page=="user") {
	include "../user/lihat_user.php";
	} else if($page=="input_user") {
	include "../user/$page.php";
	} else if($page=="act_input_user") {
	include "../user/$page.php";
	} else if($page=="edit_user") {
	include "../user/$page.php";
	} else if($page=="act_edit_user") {
	include "../user/$page.php";
	} else if($page=="act_hapus_user") {
	include "../user/$page.php";
	}
	//==========  akhir menu user  =================



	//log out
	else if($page=="logout") {
	logout();
	} else {
	echo $utama;
	//include 'coba.php';
	}
	}
	?>







                  </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->

              </div>
              </div><! --/row -->
          </section>
      </section>
		<br><br><br>
      <!--main content end-->
      <!--footer start-->
        <!--<footer class="site-footer">
        <div class="text-center">
              2014 - Alvarez.is
              <a href="index.php" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>-->
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>

	<!--<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Selamat Datang ',
            // (string | mandatory) the text inside the notification
            text: 'Silahkan anda memilih menu dibilah samping jika anda ingin mengoperasikan aplikasi ini',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>-->


  </body>
</html>

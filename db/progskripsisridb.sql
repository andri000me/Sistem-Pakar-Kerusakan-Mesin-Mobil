-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 07:44 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `progskripsisridb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kamus`
--

CREATE TABLE IF NOT EXISTS `kamus` (
  `id_kamus` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_kamus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `kamus`
--

INSERT INTO `kamus` (`id_kamus`, `nama`, `gambar`, `ket`) VALUES
(12, 'Kepala Silinder (Cylinder Head)', '82kepala silinder.png', 'Bagian paling atas\r\ndari kontruksi mesin\r\nsepeda motor\r\nadalah kepala\r\nsilinder. Kepala\r\nsilinder berfungsi\r\nsebagai penutup\r\nlubang silinder pada\r\nblok silinder dan\r\ntempat dudukan\r\nbusi.'),
(13, 'Blok Silinder', '65bloksilinder.png', 'Blok silinder merupakan tempat bergerak piston. Tempat piston\r\nberada tepat di tengah blok silinder. Silinder liner piston ini dilapisi bahan\r\nkhusus agar tidak cepat aus akibat gesekan. Meskipun telah mendapat\r\npelumasan yang mencukupi tetapi keausan lubang silinder tetap tak\r\ndapat dihindari. Karenanya dalam jangka waktu yang lama keausan\r\ntersebut pasti terjadi. Keausan lubang silinder bisa saja terjadi secara\r\ntidak merata sehingga dapat berupa keovalan atau ketirusan.'),
(14, 'Piston', '71piston.png', 'Piston mempunyai bentuk seperti silinder. Bekerja dan bergerak\r\nsecara translasi (gerak bolak-balik) di dalam silinder. Piston merupakan\r\nsumbu geser yang terpasang presisi di dalam sebuah silinder. Dengan\r\ntujuan, baik untuk mengubah volume dari tabung, menekan fluida dalam\r\nsilinder, membuka-tutup jalur aliran atau pun kombinasi semua itu. Piston\r\nterdorong sebagai akibat dari ekspansi tekanan sebagai hasil\r\npembakaran. Piston selalu menerima temperatur dan tekanan yang\r\ntinggi, bergerak dengan kecepatan tinggi dan terus menerus.'),
(15, 'Camshaft', '34camshaft.png', 'Camshaft adalah sebuah alat yang digunakan dalam mesin untuk\r\nmenjalankan poppet valve. Dia terdiri dari batangan silinder. Cam\r\nmembuka katup dengan menekannya, atau dengan mekanisme bantuan\r\nlainnya, ketika mereka berputar.'),
(16, 'Rantai camshaft', '79rantai camshaft.png', 'Rantai camshaft sepeda motor harus dipasang dengan tegangan\r\nyang cukup. Rantai camshaft yang terlalu tegang akan menimbulkan\r\nbunyi mendesing terutama pada putaran tinggi sedangkan rantai\r\ncamshaft yang terlalu kendor akan menimbulkan suara berisik. Untuk\r\nmenyetelnya harus diperhatikan terlebih dahulu mekanisme\r\npenyetelannya. Cara penyetelan rantai camshaft untuk setiap sepeda\r\nmotor tidak sama.\r\nJika kekencangan rantai berubah-ubah, akan berpengaruh pada\r\nputaran mesin, valve timing atau saat pengapian akan berubah-ubah\r\npula. Untuk menghasilkan setelan rantai yang standar, ada 3 tipe\r\npenyetelan rantai:\r\n- Tipe penyetelan manual\r\nTipe ini memerlukan penyetelan kekencangan secara berkala.\r\nCara penyetelan dengan menekan batang penekan\r\n- Tipe penyetelan otomatis\r\nJika rantai mengalami kekendoran, maka secara otomatis batang\r\npenekan akan menekan chain guide (karet), karena adanya per\r\npenekan. Karet akan melengkung, dan akan menekan rantai\r\nsehingga rantai mengalami ketegangan. Selanjutnya batang\r\npenekan yang berbentuk rachet bergerak searah dan tidak dapat\r\nkembali\r\n- Tipe semi otomatis\r\nKetegangan rantai secara otomatis menyetel sendiri, jika baut\r\npengunci dilepas, sehingga batang penekan akan masuk kedalam\r\nkarena tekanan per'),
(17, 'Bak engkol', '75bak engkol.png', 'Crankcase (bak engkol) biasanya terbuat dari aluminium die\r\ncasting dengan sedikit campuran logam.\r\nBak engkol fungsinya sebagai rumah dari komponen yang ada di\r\nbagian dalamnya, yaitu komponen:\r\n- Generator atau alternator untuk pembangkit daya tenaga listriknya\r\nsepeda motor\r\n- Pompa oli\r\n- Kopling\r\n- Poros engkol dan bantalan peluru\r\n- Gigi persneling atau gigi transmisi\r\n- Sebagai penampung oli pelumas\r\n\r\nBak engkol terletak di bawah silinder dan biasanya merupakan\r\nbagian yang ditautkan pada rangka sepeda motor.'),
(18, 'Kunci Kontak', '33kuncikontak.png', 'Pada sistem pengapian, kunci kontak diperlukan untuk memutushubungkan\r\nrangkaian tegangan baterai ke koil pengapian terminal\r\n(15/IG/+) saat menghidupkan atau mematikan mesin.Bila kunci kontak posisi (On/IG/15), maka arus dari baterai akan\r\nmengalir ke terminal positif (+/15) koil'),
(19, 'Busi', '40busi.png', 'Tujuan adanya busi dalam hal\r\nini adalah untuk mengalirkan pulsa atau arus tegangan tinggi dari tutup\r\n(terminal) busi ke bagian elektroda tengah ke elektroda sisi melewati\r\ncelah udara dan kemudian berakhir ke masa (ground).'),
(20, 'kondisi busi', '12kondisibusi1.png', 'kondisi\r\nbusi terlihat normal. Ujung insulator busi berwarna putih keabu-abuan,\r\ntatepi dapat juga kuning atau coklat keabu-abuan. Hal ini\r\nmengindikasikan bahwa mesin beroperasi bagus dan pemakaian tingkat\r\npanas busi telah benar.'),
(21, 'kondisi busi 2', '14kondisibusi2.png', 'kondisi\r\ninsulator dan elektroda busi terlihat hitam tidak mengkilat, seperti beludru\r\nkarena terdapat endapan karbon. Penyebabnya antara lain:\r\nperbandingan campuran yang tidak benar, saringan udara tersumbat, tipe\r\nbusi yang terlalu dingin atau cara mengemudi yang terlalu ekstrim.'),
(22, 'kondisi busi 3', '27kondisibusi3.png', 'kondisi\r\ninsulator dan elektroda busi terlihat basah dan mengkilat karena terdapat\r\nendapan oli. Penyebabnya antara lain: kelebihan jumlah oli yang masuk\r\nke ruang bakar karena ausnya dinding silinder, piston ring atau valve\r\n(katup). Dalam motor dua langkah, kondisi di atas mengindikasikan\r\nperbandingan campuran oli yang terlalu kaya.'),
(23, 'kondisi busi 4', '88kondisibusi4.png', 'kondisi\r\ninsulator busi terlihat berwarna kuning karena terdapat lead/timah dalam\r\naditif bahan bakar yang digunakan. Pada beban yang lebih tinggi, kondisi\r\nendapan tersebut bisa menyebabkan bersifat konduksi dan terjadinya\r\nmisfiring (kesalahan pengapian).'),
(24, 'kondisi busi 5', '72kondisibusi5.png', 'kondisi\r\ninsulator busi terlihat berwarna kecoklatan dalam lapisan warna kuning\r\nkarena terdapat gabungan endapan lead/timah dan karbon. Endapan\r\nakan terkumpul dalam ujung insulator selama kondisi berkendaranya\r\ndalam kecepatan rendah dan endapan tersebut akan meleleh jika\r\nkendaraan berada pada putaran tinggi. Setelah kondisi busi dingin\r\nkembali, endapan tersebut akan menjadi keras.'),
(25, 'kondisi busi 6', '75kondisibusi6.png', 'kondisi\r\ninsulator busi terlihat berwarna kecoklatan seperti terdapat sisa\r\narang/bara karena terdapat endapan sisa abu dari aditif oli dan gas.\r\nCampuran aditif tersebut menyisakan abu yang tidak dapat terbakar\r\ndalam ruang bakar dan pada busi.');

-- --------------------------------------------------------

--
-- Table structure for table `konsul_diagnosa`
--

CREATE TABLE IF NOT EXISTS `konsul_diagnosa` (
  `id_kd` int(5) NOT NULL AUTO_INCREMENT,
  `gejala_dan_kerusakan` varchar(200) NOT NULL,
  `bila_benar` int(2) NOT NULL,
  `bila_salah` int(2) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL,
  PRIMARY KEY (`id_kd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `konsul_diagnosa`
--

INSERT INTO `konsul_diagnosa` (`id_kd`, `gejala_dan_kerusakan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Kerusakan tidak teridentifikasi', 1, 1, 'N', 'Y'),
(2, 'apakah mesin motor dalam keadaan hidup?', 3, 24, 'Y', 'N'),
(3, 'apakah temperature meter menunjukan garis panas?', 4, 5, 'N', 'N'),
(4, 'Over Heating / Panas Berlebih', 1, 1, 'N', 'Y'),
(5, 'apakah malfunction indikator lampu berkedip?', 6, 34, 'N', 'N'),
(6, 'apakah 1 kedipan pendek?', 7, 8, 'N', 'N'),
(7, 'Manifold absolute pressure bermasalah', 1, 1, 'N', 'Y'),
(8, 'Apakah 7 kedipan pendek?', 9, 10, 'N', 'N'),
(9, 'Engine oil temperatur sensor bermasalah', 1, 1, 'N', 'Y'),
(10, 'Apakah  8 kedipan pendek?', 11, 12, 'N', 'N'),
(11, 'Throttle position sensor', 1, 1, 'N', 'Y'),
(12, 'Apakah  9 kedipan pendek?', 13, 14, 'N', 'N'),
(13, 'Intake air temperature', 1, 1, 'N', 'Y'),
(14, 'Apakah 12 kedipan panjang?', 15, 16, 'N', 'N'),
(15, ' Injector bermasalah', 1, 1, 'N', 'Y'),
(16, 'Apakah 21 kedipan panjang?', 17, 18, 'N', 'N'),
(17, 'O2 sensor bermasalah', 1, 1, 'N', 'Y'),
(18, 'Apakah 29 kedipan panjang?', 19, 20, 'N', 'N'),
(19, 'Idle air control value', 1, 1, 'N', 'Y'),
(20, 'Apakah 33 kedipan panjang?', 21, 23, 'N', 'N'),
(21, 'Engine control unit trouble', 1, 1, 'N', 'Y'),
(23, 'Bank angle sensor bermasalah', 1, 1, 'N', 'Y'),
(24, 'Apakah Mesin motor dalam keadaan mati? ', 25, 1, 'N', 'N'),
(25, 'Apakah Engine Stop Switch dalam posisi tidak aktif?', 26, 33, 'N', 'N'),
(26, 'Apakah Bensin keluar dengan baik?', 27, 30, 'N', 'N'),
(27, 'Apakah bensin menghasilkan bunga api?', 28, 29, 'N', 'N'),
(28, 'spark plug (busi) rusak', 1, 1, 'N', 'Y'),
(29, 'cap spark plug terdapat air', 1, 1, 'N', 'Y'),
(30, 'Apakah bensin pada karburator keluar dengan baik?', 31, 32, 'N', 'N'),
(31, 'bensin mampet pada filter bensin.', 1, 1, 'N', 'Y'),
(32, 'cylinder head rusak', 1, 1, 'N', 'Y'),
(33, 'Sikring injeksi', 1, 1, 'N', 'Y'),
(34, 'Apakah kerusakan pada bagian pengapian?', 35, 38, 'N', 'N'),
(35, 'Apakah lampu indicator spedo meter mati.', 36, 37, 'N', 'N'),
(36, 'Skring utama  karatan atau putus', 1, 1, 'N', 'Y'),
(37, 'Battery lemah', 1, 1, 'N', 'Y'),
(38, 'Apakah Kerusakan pada bagian klakson?', 39, 40, 'N', 'N'),
(39, 'sikring horn (klakson)', 1, 1, 'N', 'Y'),
(40, 'Apakah Kerusakan pada kipas radiator?', 41, 42, 'N', 'N'),
(41, 'Sikring kipas radiator karatan atau putus', 1, 1, 'N', 'Y'),
(42, 'Apakah Kerusakan pada bagian jam?', 43, 44, 'N', 'N'),
(43, 'Sikring clock karatan atau putus', 1, 1, 'N', 'Y'),
(44, 'Apakah Kerusakan pada bagian head position?', 45, 46, 'N', 'N'),
(45, 'Sikring head position (lampu utama) karatan atau rusak', 1, 1, 'N', 'Y'),
(46, 'Apakah kerusakan pada bagian kelistrikan?', 47, 60, 'N', 'N'),
(47, 'Apakah klakson tidak berbunyi.?', 48, 49, 'N', 'N'),
(48, 'horn (klakson) rusak', 1, 1, 'N', 'Y'),
(49, 'Apakah Listrik normal?', 50, 57, 'N', 'N'),
(50, 'Apakah Lampu depan tidak menyala?', 51, 52, 'N', 'N'),
(51, 'Saklar lampu depan rusak', 1, 1, 'N', 'Y'),
(52, 'Apakah lampu sen tidak menyala?', 53, 54, 'N', 'N'),
(53, 'Swicth turn signal rusak atau putus atau flasheer mati', 1, 1, 'N', 'Y'),
(54, 'Apakah lampu rem belakang tidak menyala?', 55, 56, 'N', 'N'),
(55, 'lampu rem belakang putus', 1, 1, 'N', 'Y'),
(56, 'lampu malam putus', 1, 1, 'N', 'Y'),
(57, 'Apakah lampu sen menyala tanpa kedipan?', 58, 59, 'N', 'N'),
(58, 'Flasher turn signal rusak', 1, 1, 'N', 'Y'),
(59, 'Swicth stater rusak atau kotor', 1, 1, 'N', 'Y'),
(60, 'Apakah kerusakan pada pengemudi depan?', 61, 72, 'N', 'N'),
(61, 'Apakah jarum speedo meter tidak berfungsi?', 62, 63, 'N', 'N'),
(62, 'Kabel speedo meter putus', 1, 1, 'N', 'Y'),
(63, 'Apakah oli bocor pada shock depan?', 64, 65, 'N', 'N'),
(64, 'Seal shock rusak', 1, 1, 'N', 'Y'),
(65, 'Apakah jalan roda depan oleng?', 66, 71, 'N', 'N'),
(66, 'Apakah velg dan bearing roda tidak rusak?', 67, 70, 'N', 'N'),
(67, 'Apakah segitiga tidak ada kerusakan?', 68, 69, 'N', 'N'),
(68, 'Front fork bengkok', 1, 1, 'N', 'Y'),
(69, 'Bearing hub rusak', 1, 1, 'N', 'Y'),
(70, 'Garpu segitiga rusak', 1, 1, 'N', 'Y'),
(71, 'Oli shock kurang', 1, 1, 'N', 'Y'),
(72, 'Apakah kerusakan pada bagian belakang?', 73, 76, 'N', 'N'),
(73, 'Apakah bila berjalan dipermukaan tidak rata terasa tidak nyaman?', 74, 75, 'N', 'N'),
(74, 'Shock absorber belakang rusak', 1, 1, 'N', 'Y'),
(75, 'Bantalan swing arm rusak', 1, 1, 'N', 'Y'),
(76, 'Apakah kerusakan pada bagian mesin?', 77, 94, 'N', 'N'),
(77, 'Apakah oli keluar dari baut pembuangan oli?', 78, 79, 'N', 'N'),
(78, 'Plug mesin pembuangan oli rusak', 1, 1, 'N', 'Y'),
(79, 'Apakah keluar asap yang abnormal?', 80, 83, 'N', 'N'),
(80, 'Apakah throttle valve tidak kotor?', 81, 82, 'N', 'N'),
(81, 'Camshaft chain rusak', 1, 1, 'N', 'Y'),
(82, 'Piston lecet atau baret', 1, 1, 'N', 'Y'),
(83, 'Apakah Perpindahan gigi sulit dilakukan?', 84, 85, 'N', 'N'),
(84, 'Gigi transmisi rusak', 1, 1, 'N', 'Y'),
(85, 'Apakah motor tidak bertenaga?', 86, 89, 'N', 'N'),
(86, 'Apakah stasioner/ putaran mesin tidak stabil?', 87, 88, 'N', 'N'),
(87, 'Katup pemasukan udara rusak', 1, 1, 'N', 'Y'),
(88, 'Saringan udara kotor', 1, 1, 'N', 'Y'),
(89, 'Apakah sewaktu pindah gigi, pergerakan kopling dan rantai terasa kasar?', 90, 91, 'N', 'N'),
(90, 'Kanvas kopling aus', 1, 1, 'N', 'Y'),
(91, 'Apakah suara mesin normal?', 92, 93, 'N', 'N'),
(92, 'Selang bensin bocor', 1, 1, 'N', 'Y'),
(93, 'Panas motor berlebihan atau radiator rusak ', 1, 1, 'N', 'Y'),
(94, 'Apakah berkurangnya daya pengereman?', 95, 96, 'N', 'N'),
(95, 'Minyak rem habis', 1, 1, 'N', 'Y'),
(96, 'Disc rusak', 1, 1, 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE IF NOT EXISTS `memiliki` (
  `id_kd` int(3) NOT NULL,
  `id_solusi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memiliki`
--

INSERT INTO `memiliki` (`id_kd`, `id_solusi`) VALUES
(4, 2),
(7, 3),
(9, 4),
(11, 5),
(13, 6),
(15, 7),
(17, 8),
(19, 9),
(21, 10),
(23, 11),
(28, 12),
(29, 13),
(31, 14),
(32, 15),
(33, 16),
(36, 17),
(37, 18),
(39, 19),
(41, 20),
(43, 21),
(45, 22),
(48, 23),
(51, 24),
(53, 25),
(55, 26),
(56, 27),
(58, 28),
(59, 29),
(62, 30),
(64, 31),
(68, 32),
(69, 33),
(70, 34),
(71, 35),
(74, 36),
(75, 37),
(78, 38),
(81, 39),
(82, 40),
(84, 41),
(87, 42),
(88, 43),
(90, 44),
(92, 45),
(93, 46),
(95, 47),
(96, 48),
(1, 49);

-- --------------------------------------------------------

--
-- Table structure for table `menganalisa`
--

CREATE TABLE IF NOT EXISTS `menganalisa` (
  `id_ahd` int(3) NOT NULL AUTO_INCREMENT,
  `id_tamu` int(5) NOT NULL,
  `id_kd` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_ahd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `menganalisa`
--

INSERT INTO `menganalisa` (`id_ahd`, `id_tamu`, `id_kd`, `tanggal`) VALUES
(1, 16, 4, '2016-08-01'),
(2, 19, 48, '2016-08-05'),
(3, 19, 37, '2016-08-05'),
(4, 21, 4, '2016-08-16'),
(5, 21, 28, '2016-08-16'),
(6, 25, 36, '2016-08-22'),
(7, 27, 62, '2016-08-23'),
(8, 30, 74, '2016-08-27'),
(9, 30, 4, '2016-08-27'),
(10, 31, 28, '2016-08-30'),
(11, 33, 4, '2016-09-11'),
(12, 33, 4, '2016-09-13'),
(13, 33, 36, '2016-09-13'),
(14, 33, 7, '2016-09-13'),
(15, 33, 7, '2016-09-13'),
(16, 33, 9, '2016-09-13'),
(17, 33, 4, '2018-07-13'),
(18, 33, 4, '2018-07-27'),
(19, 33, 4, '2018-07-30'),
(20, 33, 4, '2018-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE IF NOT EXISTS `solusi` (
  `id_solusi` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kerusakan` text NOT NULL,
  `penyebab` text NOT NULL,
  `solusi` text NOT NULL,
  `perawatan` text NOT NULL,
  PRIMARY KEY (`id_solusi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `nama_kerusakan`, `penyebab`, `solusi`, `perawatan`) VALUES
(2, 'Over Heating Bermasalah', '1. Cairan didalam tanki kering atau habis.\r\n2. Sikring kelistrikan untuk pompa dan kipas radiator putus(aliran listrik terputus).\r\n3. Sirip kotor.\r\n4. Sering terkena banjir atau terkena air.\r\n5. Saat membersihkan sirip radiator menggunakan air bertekanan tinggi atau saat kondisi mesin masih panas', '1. Isi cadangan cairan sesuai batas upper dan lower.\r\n2. Jangan menggunakan air murni karena tidak mengandung bahan pencegah karat, kerak, dan tidak mengurangi penguapan dan stabilitas suhu.\r\n3. Untuk membersihkan kotoran yang menempel pada kisi kisi cukup semprot dengan air bertekanan sedang . jangan terlalu kencang karena akan merusak kisi kisi. Untuk kotoran yang membandel cabut manual dengan pinset.\r\n4. Apabila karet tutup radiator rusak dan isi tangki cadangan berkurang dengan cepat maka harus ganti karet tutup radiator.\r\n5. Apabila cairan tidak mengalir dari tanki cadangan ke radiator maka pompa radiator rusak dan harus diganti.\r\n', '1. Cek penampung (reservoir) cairan cadangan.jangan sampai kering, lakukan pengecekan minimal seminggu sekali. Harus menggunakan cairan khusus (coolant) .\r\n2. Bersihkan secara rutin kotoran yang menempel pada kisi kisi yang membuat sirkulasi udara terganggu.\r\n3. Karet tutup radiator haru diperiksa secara berkala,  setiap 8000 km\r\n'),
(3, 'Manifoldabsolute pressure bermasalah', 'Sensor MAP bermasalah (jumlah udara yang mengalir dalam mesin terlalu kurang atau terlalu berlebih).', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(4, 'Engine oil temperatur sensor bermasalah', 'Sensor engine oil temperature tidak dapat mendeteksi perubahan suhu mesin.', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(5, 'Throttle position sensor', 'Sudut bukaan throttle valve bermasalah.', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(6, 'Intake air temperature', 'Sensor Intake air temperature bermasalah ( perbandingan udara dan bahan bakar tidak seimbang )', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(7, 'Injector bermasalah', 'Sensor injector bermasalah ( injector  tidak menyemprotkan bahan bakar kedalam intake manifold', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(8, 'O2 sensor bermasalah', 'Sensor oksigen tidak bisa memperbaiki campuran udara atu bahan bakar yang terkandung didalam gas buang.', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(9, ' Idle air control value', 'IACV tidak bisa mengatur jumlah aliran udara pada putaran stasioner', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(10, 'Engine Control Unit trouble', 'ECU tidak bisa mengkombinasikan antara air, udara, dan bahan bakar yang harus digunakan untuk mencapai kinerja mesin yang diminta.', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(11, ' Bank angle sensor bermasalah', 'Bank angle sensor tidak dapat mendeteksi keadaan motor ketika terjadi kesalahan. Jadi motor tetap dalam keadaan hidup.', 'Lakukan penyetingan idle manifold absolute pressure menggunakan system computer  sampai kendaraan bisa idle dan penyetingan  hanya bisa dilakukan oleh tknisi AHAS.', 'Servis berkala ke bengkel AHAS.'),
(12, 'Spark plug (busi) rusak', 'pemakaian spark plug yang sudah terlalu lama ( sudah mencapai life time) dan tidak diganti.', 'Ganti busi/spark plug', 'Ganti spark plug harus diganti setiap 6000 km.'),
(13, 'Cap spark plug terdapat air', 'karet cap bocor  ( rusak atau tidak kencang saat pemasangan).', '1. apabila rusak harus diganti.\r\n2. Apabila kurang kencang antara cap dan kabel listrik maka harus dikencangkan cap sprk plug tersebut.', 'cek cap spark plug secara berkala minimal seminggu sekali.'),
(14, 'bensin mampet pada filter bensin.', 'tangki bensin kotor sehingga kotoran pada tangki mengalir pada filter menyebabkan filter bensin tersumbat.', 'kuras tangki bensi dan besihkan tangki bensin beserta filter bensin', 'gunakan bensin yang berkualitas baik.'),
(15, 'Cylinder head rusak', '1.  silinder head memuai\r\n2.  silinder head retak', 'ganti cylinder head', 'cek kebocoran oli pada cylinder head.'),
(16, 'Sikring injeksi', '1. konsleting \r\n2. life time\r\n', 'Ganti sikring injeksi (warna merah no 10)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan (jangan sampai terjadi konsleting)'),
(17, 'Skring utama  karatan atau putus', '1. konsleting \r\n2. life time', 'ganti sikring utama (warna hijau no 30)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan (jangan sampai terjadi konsleting)'),
(18, 'battery lemah', '1. Batrei shield rusak.\r\n2. Kiprok tidak befungsi dengan baik (ketika batre sudah terisi penuh, kiprok masih melakukan pengisian pada batrei atau kiprok sama sekali tidak mengisi batre)', 'Ganti aki dan cek arus kelistrikan pada kiprok', '1. Jika menggunakan aki basah maka bersihkan shield batre menggunakan air hangat dan lakukan pengecasan manual.\r\n2. Jika menggunaka aki kering maka lakukan pengecasan saja.\r\n'),
(19, 'Sikring horn (klakson)', '1. konsleting \r\n2. life time', ' Ganti sikring klakson (warna biru no 15)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan  pada klakson(jangan sampai terjadi konsleting)'),
(20, 'Sikring kipas radiator karatan atau putus', '1. konsleting \r\n2. life time', 'Ganti sikring kipas radiator (warna merah no 10)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan pada kipas radiator(jangan sampai terjadi konsleting)'),
(21, 'Sikring clock karatan atau putus', '1. konsleting \r\n2. life time', 'Ganti sikring jam (warna merah no 10)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan pada jam (jangan sampai terjadi konsleting)'),
(22, 'Sikring head position (lampu utama) karatan atau rusak', '1. konsleting \r\n2. life time\r\n', '1. Ganti sikring head position (warna merah no 10)\r\n2. Ganti sikring sesuai dengan ukuran ampere dan warnanya. ', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan pada head position (jangan sampai terjadi konsleting)'),
(23, 'Horn (klakson) rusak', '1. kabel listrik atau kabel masa putus\r\n2. kuningan soket klakson terdapat kerak\r\n3. life time\r\n', '1. cek kabel-kabel kelistrikan yang berhubungan dengan klakson\r\n2. bersihkan soket klakson\r\n3. jika masih mati maka klakson harus diganti', ' jangan sering terkena air hujan'),
(24, 'Saklar lampu depan rusak', '1. Pemaikannya kasar\r\n2. Kuningan yang didalam saklar tidak tersambung dengan baik.', 'Ganti saklar lampu depan', '1. Gunakan saklar lampu depan secara hati-hati\r\n2. Jangan sering terkena air hujan'),
(25, 'Swicth turn signal rusak atau putus atau flasheer mati', '1. Pemaikannya kasar\r\n2. Kuningan yang didalam saklar tidak tersambung dengan baik.\r\n3. Tuas saklar signal patah.', 'Ganti switch turn signal depan', '1. Gunakan switch turn signal secara hati-hati\r\n2. Jangan sering terkena air hujan'),
(26, 'lampu rem belakang putus', 'bulb putus', 'ganti lampu rem belakang', 'Tidak ada perawatan'),
(27, 'Lampu malam putus', 'bulb putus', 'ganti lampu malam', 'tidak ada perawatan'),
(28, 'Flasher turn signal rusak', '1. life time \r\n2. soket kuningan terdapat kerak', '1. bersihkan soket kuningan \r\n2. ganti flasher turn signa', '1. jangan sering terkena air hujan\r\n2. jangan sampai konsleting saat memperbaiki kelistrikan'),
(29, 'Swicth stater rusak atau kotor', '1. soket kuningan terdapat kerak\r\n2. switch starter putus\r\n', '1. bersihkan soket kuningan \r\n2. ganti switch starter', 'jangan sering terkena air hujan'),
(30, 'Kabel speedo meter putus', '1. Kabel tertekuk\r\n2. Pelumas  didalam  kabel kering\r\n3. Life time\r\n', ' Ganti kabel speedo meter', '1. Kabel jangan sampai tertekuk\r\n2. Haru sering melumasi kabel dengan pelumas'),
(31, 'Seal shock rusak', '1. karena  tinggi shock diturunkan sehingga terjadi benturan diseal\r\n2. sering membawa beban yang melebihi kapasitas\r\n3. sering terkena panas sehingga mengakibatkan seal rapuh(life time)\r\n4. oli shock habis', 'ganti seal shock', '1. jangan merubah kondisi tinggi shock\r\n2. cek oli shock secara berkala'),
(32, 'Front fork bengkok', '1. motor terjatuh atau menabrak (kecelakaan0)\r\n2. membawa beban melebihi kapasitas\r\n3. oli shock habis', '1. press front  fork \r\n2. ganti front fork', '1. jangan membawa beban yang melebihi kapasitas\r\n2. periksa kondisi oli shock secara berkala\r\n3. hati-hati berkendara\r\n'),
(33, 'Bearing hub rusak', '1. sering menabrak lubang yang ada dijalan\r\n2. grease kering\r\n', ' ganti bearing hub', '1. hati-hati berkendara\r\n2. lumuri bearing dengan grease secara berkala'),
(34, 'Garpu segitiga rusak', 'motor terjatuh atau terjadi kecelakaan', '1. press garpu segitiga\r\n2. ganti garpu segitiga', 'hati-hati saat berkendara'),
(35, 'Oli shock kurang', '1. seal shock rusak\r\n2. baud  pembuangan rusak\r\n', '1. ganti seal shock\r\n2. ganti oli shock secukupnya', '1. cek seal shock secara berkala\r\n2. hati-hati pada saat pergantian oli shock'),
(36, 'Shock absorber belakang rusak', '1. Pegas  shock absorber belakang rusak\r\n2. Seal rusak\r\n3. Batang shock absorber rusak', ' Ganti shock absorber belakang', 'Jangan membawa beban melebihi kapasitas'),
(37, 'Bantalan swing arm rusak', '1. cara pemasangan bantalan swing arm tidak benar\r\n2. life time ( aret bantalan rusak)', '1. ganti bantalan swing arm\r\n2. hati-hati saat pemasangan bantalan swing arm', 'tidak ada perawatan'),
(38, 'Plug mesin pembuangan oli rusak', '1. saat pergantian oli, pemasangan plug miring.\r\n2. Terdapat kotoran pada plug yang mengakibatkan ulir plug rusak.', '1. Hati-hati saat penggantian oli\r\n2. Bersihkan plug pada saat pemasangan plug', 'tidak ada perawatan'),
(39, 'Camshaft chain rusak', 'bantalan camshaft chain rusak', '1. ganti bantalan camshaft chain.\r\n2. Ganti camshaft chain', 'cek bantalan camshaft chain secara berkala minimal 3 bln sekali.'),
(40, 'Piston lecet atau baret', '1. ring kompresi pada piston rusak\r\n2. oli mesin kering atau oli mesin encer\r\n3. dinding ruang bakar lecet.', 'ganti piston', 'cek kekentalan dan level oli mesin secara berkala'),
(41, 'Gigi transmisi rusak', '1. oli mesin encer atau kering\r\n2. kanvas kopling habis\r\n3. stelan kopling tidak sesuai atau tidak pas', '1. ganti kanvas kopling\r\n2. ganti gigi transmisi\r\n3. stel kopling dengan sesuai', '1. cek kekentalan dan level oli mesin secara berkala\r\n2. cek stelan kopling'),
(42, 'Katup pemasukan udara rusak', '1. camshaft chain kendur\r\n2. menggunakan bahan bakar berkualitas rendah\r\n3. adanya lumpur pada oli', ' ganti katup pemasukan udara', 'tune up secara berkala'),
(43, 'Saringan udara kotor', '1. Life time\r\n2. Sering terkena air ', 'Ganti saringan udara', 'Sering membersih kan saringan udara menggunakan angina bertekanan rendah'),
(44, 'kanvas kopling aus', '1. setelan kopling tidak pas\r\n2. oli encer\r\n3. life time', ' ganti kanvas kopling ', '1. jaga kondisi oli\r\n2. stel kopling dengan tepat'),
(45, 'Selang bensin bocor', '1. selang bensin tertekuk\r\n2. selang bensin retak akibat sering terkena panas\r\n', '1. selang bensin jangan sampai tertekuk\r\n2. ganti selang', 'cek kondisi selang'),
(46, 'Panas motor berlebihan atau radiator rusak', '1. pompa coolant rusak\r\n2. air radiator habis\r\n3. kipas radiator mati', '1. ganti pompa radiator apabila rusak\r\n2. perbaiki komponen kipas radiator\r\n3. ganti radiator\r\n', 'cek level air radiator'),
(47, 'Minyak rem habis', 'Minyak rem habis', 'ganti selang rem', 'selang rem jangan sampai tertekuk'),
(48, 'Disc rusak', '1. kanvas rem habis\r\n2. caliper rem tidak berfungsi dengan baik', 'ganti disc', '1. cek kanvas rem\r\n2. cek caliper rem '),
(49, 'Kerusakan tidak teridentifiksi', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `id_tamu` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `noip` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `username`, `password`, `nama`, `kelamin`, `alamat`, `pekerjaan`, `noip`) VALUES
(32, 'andi', 'andi', 'Andi', 'Pria', 'Cirebon', 'pengusaha', '::1'),
(33, 'sinta', 'sinta', 'Sinta', 'Wanita', 'Tasikmalaya', 'Mahasiswa', '::1'),
(34, 'handoko', 'handoko', 'handoko', 'Pria', 'cirebon', 'buruh', '::1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

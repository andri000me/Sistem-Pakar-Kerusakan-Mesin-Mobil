-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jul 2019 pada 05.20
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispakdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'pam', 'pam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamus`
--

CREATE TABLE `kamus` (
  `id_kamus` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamus`
--

INSERT INTO `kamus` (`id_kamus`, `nama`, `gambar`, `ket`) VALUES
(12, 'Blok Mesin', '85blokmesin.jpg', ' Sebagai tempat dudukan komponen-komponen busi, poros pengkol, dll.'),
(13, 'Busi', '53busi.jpg', 'Untuk memercikan bunga api.'),
(14, 'Piston', '71piston.png', 'Piston mempunyai bentuk seperti silinder. Bekerja dan bergerak\r\nsecara translasi (gerak bolak-balik) di dalam silinder. Piston merupakan\r\nsumbu geser yang terpasang presisi di dalam sebuah silinder. Dengan\r\ntujuan, baik untuk mengubah volume dari tabung, menekan fluida dalam\r\nsilinder, membuka-tutup jalur aliran atau pun kombinasi semua itu. Piston\r\nterdorong sebagai akibat dari ekspansi tekanan sebagai hasil\r\npembakaran. Piston selalu menerima temperatur dan tekanan yang\r\ntinggi, bergerak dengan kecepatan tinggi dan terus menerus.'),
(15, 'Camshaft', '34camshaft.png', 'Camshaft adalah sebuah alat yang digunakan dalam mesin untuk\r\nmenjalankan poppet valve. Dia terdiri dari batangan silinder. Cam\r\nmembuka katup dengan menekannya, atau dengan mekanisme bantuan\r\nlainnya, ketika mereka berputar.'),
(16, 'Kipas Radiator', '39kipas radiator.jpg', 'Mendinginkan antara radiator dengan mesin bagian luar.'),
(17, 'Bak engkol', '75bak engkol.png', 'Crankcase (bak engkol) biasanya terbuat dari aluminium die\r\ncasting dengan sedikit campuran logam.\r\nBak engkol fungsinya sebagai rumah dari komponen yang ada di\r\nbagian dalamnya, yaitu komponen:\r\n- Generator atau alternator untuk pembangkit daya tenaga listriknya\r\nsepeda motor\r\n- Pompa oli\r\n- Kopling\r\n- Poros engkol dan bantalan peluru\r\n- Gigi persneling atau gigi transmisi\r\n- Sebagai penampung oli pelumas\r\n\r\nBak engkol terletak di bawah silinder dan biasanya merupakan\r\nbagian yang ditautkan pada rangka sepeda motor.'),
(18, 'Radiator', '36radiator.jpg', 'Komponen untuk mendinginkan air yang telah menyerap panas dari mesin, dengan cara membuang panas air tersebut melalui sirip-sirip pendinginannya'),
(19, 'Busi', '40busi.png', 'Tujuan adanya busi dalam hal\r\nini adalah untuk mengalirkan pulsa atau arus tegangan tinggi dari tutup\r\n(terminal) busi ke bagian elektroda tengah ke elektroda sisi melewati\r\ncelah udara dan kemudian berakhir ke masa (ground).'),
(20, 'Alternator', '81alternator.jpg', 'Sebagai generator listrik sekaligus mensuplai baterai.'),
(21, 'Saringan Oli', '74saringan oli.png', 'Menyaring oli dari kotoran-kotoran untuk menjaga agar oli selalu dalam keadaan bersih terutama dari kotoran-kotoran seperti partikulat, serpihan-serpihan besi dan kotoran-kotoran yang lain'),
(26, 'Saringan Udara', '61filter udara.jpg', 'Menyaring udara kotor seperti debu agar tidak masuk ke dalam sistem injeksi'),
(27, 'Oli Rem ', '23Oli Rem.jpg', 'Melumasi komponen logam yang bergesekan yaitu cakram dan kampas. Keduanya akan menghentikan laju kendaraan dan minyak rem akan membuat kedua logam yang bergesekan ini tidak kering dan tahan terhadap panas. Selain itu, minyak rem memiliki fungsi lai yaitu penyalur tenaga hidrolik karena munyal rem memiliki sifat seperti fluida (cairan) dalam sistem tertutup lainnya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsul_diagnosa`
--

CREATE TABLE `konsul_diagnosa` (
  `id_kd` int(5) NOT NULL,
  `gejala_dan_kerusakan` varchar(200) NOT NULL,
  `bila_benar` int(2) NOT NULL,
  `bila_salah` int(2) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsul_diagnosa`
--

INSERT INTO `konsul_diagnosa` (`id_kd`, `gejala_dan_kerusakan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Kerusakan tidak teridentifikasi!', 1, 1, 'N', 'Y'),
(2, 'Apakah mesin mobil dalam keadaan hidup?', 3, 24, 'Y', 'N'),
(3, 'Apakah temperature meter menunjukan garis panas?', 4, 5, 'N', 'N'),
(4, 'Over Heating / Panas Berlebih', 1, 1, 'N', 'Y'),
(5, 'apakah lampu indikator check engine menyala?', 6, 34, 'N', 'N'),
(6, 'Malfungsi atau masalah pada mesin', 1, 1, 'N', 'Y'),
(24, 'Apakah Mesin mobil dalam keadaan mati? ', 25, 1, 'N', 'N'),
(25, 'Apakah Engine Stop Switch dalam posisi tidak aktif?', 26, 33, 'N', 'N'),
(26, 'Apakah Bensin keluar dengan baik?', 27, 30, 'N', 'N'),
(27, 'Apakah bensin menghasilkan bunga api?', 28, 29, 'N', 'N'),
(28, 'spark plug (busi) rusak', 1, 1, 'N', 'Y'),
(29, 'cap spark plug terdapat air', 1, 1, 'N', 'Y'),
(30, 'Apakah bensin pada karburator keluar dengan baik?', 31, 32, 'N', 'N'),
(31, 'bensin mampet pada filter bensin.', 1, 1, 'N', 'Y'),
(32, 'cylinder head rusak', 1, 1, 'N', 'Y'),
(33, 'Sikring injeksi', 1, 1, 'N', 'Y'),
(34, 'Apakah kerusakan pada bagian pengapian?', 35, 40, 'N', 'N'),
(35, 'Apakah lampu indicator spedo meter mati.', 36, 37, 'N', 'N'),
(36, 'Skring utama  karatan atau putus', 1, 1, 'N', 'Y'),
(37, 'Battery lemah', 1, 1, 'N', 'Y'),
(40, 'Apakah Kerusakan pada kipas radiator?', 41, 76, 'N', 'N'),
(41, 'Sikring kipas radiator karatan atau putus', 1, 1, 'N', 'Y'),
(76, 'Apakah kerusakan pada bagian mesin?', 77, 94, 'N', 'N'),
(77, 'Apakah oli keluar dari baut pembuangan oli?', 78, 79, 'N', 'N'),
(78, 'Plug mesin pembuangan oli rusak', 1, 1, 'N', 'Y'),
(79, 'Apakah keluar asap yang tidak normal?', 80, 83, 'N', 'N'),
(80, 'Apakah throttle valve tidak kotor?', 81, 82, 'N', 'N'),
(81, 'Camshaft chain rusak', 1, 1, 'N', 'Y'),
(82, 'Piston lecet atau baret', 1, 1, 'N', 'Y'),
(83, 'Apakah Perpindahan gigi sulit dilakukan?', 84, 85, 'N', 'N'),
(84, 'Gigi transmisi rusak', 1, 1, 'N', 'Y'),
(85, 'Apakah mobil tidak bertenaga?', 86, 89, 'N', 'N'),
(86, 'Apakah stasioner/ putaran mesin tidak stabil?', 87, 88, 'N', 'N'),
(87, 'Katup pemasukan udara rusak', 1, 1, 'N', 'Y'),
(88, 'Saringan udara kotor', 1, 1, 'N', 'Y'),
(89, 'Apakah sewaktu pindah gigi, pergerakan kopling dan rantai terasa kasar?', 90, 91, 'N', 'N'),
(90, 'Kanvas kopling aus', 1, 1, 'N', 'Y'),
(91, 'Apakah suara mesin normal?', 92, 93, 'N', 'N'),
(92, 'Selang bensin bocor', 1, 1, 'N', 'Y'),
(93, 'Panas mobil berlebihan atau radiator rusak ', 1, 1, 'N', 'Y'),
(94, 'Apakah berkurangnya daya pengereman?', 95, 1, 'N', 'N'),
(95, 'Minyak rem habis', 1, 1, 'N', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `memiliki`
--

CREATE TABLE `memiliki` (
  `id_kd` int(3) NOT NULL,
  `id_solusi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `memiliki`
--

INSERT INTO `memiliki` (`id_kd`, `id_solusi`) VALUES
(4, 2),
(28, 12),
(29, 13),
(31, 14),
(32, 15),
(33, 16),
(36, 17),
(37, 18),
(41, 20),
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
(1, 49),
(6, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menganalisa`
--

CREATE TABLE `menganalisa` (
  `id_ahd` int(3) NOT NULL,
  `id_tamu` int(5) NOT NULL,
  `id_kd` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menganalisa`
--

INSERT INTO `menganalisa` (`id_ahd`, `id_tamu`, `id_kd`, `tanggal`) VALUES
(21, 35, 4, '2019-05-16'),
(22, 35, 4, '2019-05-16'),
(23, 35, 41, '2019-05-16'),
(24, 35, 96, '2019-07-08'),
(25, 35, 1, '2019-07-08'),
(26, 35, 1, '2019-07-08'),
(27, 35, 6, '2019-07-08'),
(28, 35, 6, '2019-07-08'),
(29, 35, 4, '2019-07-08'),
(30, 35, 7, '2019-07-08'),
(31, 35, 6, '2019-07-08'),
(32, 35, 32, '2019-07-08'),
(33, 35, 31, '2019-07-11'),
(34, 35, 4, '2019-07-11'),
(35, 35, 1, '2019-07-13'),
(36, 35, 4, '2019-07-13'),
(37, 35, 33, '2019-07-17'),
(38, 35, 1, '2019-07-21'),
(39, 35, 33, '2019-07-21'),
(40, 35, 4, '2019-07-21'),
(41, 35, 6, '2019-07-21'),
(42, 35, 4, '2019-07-21'),
(43, 35, 6, '2019-07-21'),
(44, 35, 6, '2019-07-21'),
(45, 35, 6, '2019-07-21'),
(46, 35, 4, '2019-07-22'),
(47, 35, 37, '2019-07-22'),
(48, 35, 1, '2019-07-22'),
(49, 35, 88, '2019-07-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` int(5) NOT NULL,
  `nama_kerusakan` text NOT NULL,
  `penyebab` text NOT NULL,
  `solusi` text NOT NULL,
  `perawatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `nama_kerusakan`, `penyebab`, `solusi`, `perawatan`) VALUES
(2, 'Over Heating Bermasalah', '1. Cairan didalam tanki kering atau habis.\n2. Sikring kelistrikan untuk pompa dan kipas radiator putus(aliran listrik terputus).\n3. Sirip kotor.\n4. Sering terkena banjir atau terkena air.\n5. Saat membersihkan sirip radiator menggunakan air bertekanan tinggi atau saat kondisi mesin masih panas', '1. Isi cadangan cairan sesuai batas upper dan lower.\n2. Jangan menggunakan air murni karena tidak mengandung bahan pencegah karat, kerak, dan tidak mengurangi penguapan dan stabilitas suhu.\n3. Untuk membersihkan kotoran yang menempel pada kisi kisi cukup semprot dengan air bertekanan sedang . jangan terlalu kencang karena akan merusak kisi kisi. Untuk kotoran yang membandel cabut manual dengan pinset.\n4. Apabila karet tutup radiator rusak dan isi tangki cadangan berkurang dengan cepat maka harus ganti karet tutup radiator.\n5. Apabila cairan tidak mengalir dari tanki cadangan ke radiator maka pompa radiator rusak dan harus diganti.\n', '1. Cek penampung (reservoir) cairan cadangan.jangan sampai kering, lakukan pengecekan minimal seminggu sekali. Harus menggunakan cairan khusus (coolant) .\r\n2. Bersihkan secara rutin kotoran yang menempel pada kisi kisi yang membuat sirkulasi udara terganggu.\r\n3. Karet tutup radiator haru diperiksa secara berkala,  setiap 8000 km\r\n'),
(3, 'Check Engine Bermasalah', '-Sensor tidak berfungsi atau error\r\n-Percikan air saat melewati banjir', 'Cabut kenektor aki negatif saat mesin mati. Hubungkan kabel konektor aki negatif dan positif, tunggu selama tiga detik, lalu pasang kembali.\r\n', 'Servis berkala ke bengkel.'),
(12, 'Spark plug (busi) rusak', 'pemakaian spark plug yang sudah terlalu lama ( sudah mencapai life time) dan tidak diganti.', 'Ganti busi/spark plug', 'Ganti spark plug harus diganti setiap 6000 km.'),
(13, 'Cap spark plug terdapat air', 'karet cap bocor  ( rusak atau tidak kencang saat pemasangan).', '1. apabila rusak harus diganti.\r\n2. Apabila kurang kencang antara cap dan kabel listrik maka harus dikencangkan cap sprk plug tersebut.', 'cek cap spark plug secara berkala minimal seminggu sekali.'),
(14, 'bensin mampet pada filter bensin.', 'tangki bensin kotor sehingga kotoran pada tangki mengalir pada filter menyebabkan filter bensin tersumbat.', 'kuras tangki bensi dan besihkan tangki bensin beserta filter bensin', 'gunakan bensin yang berkualitas baik.'),
(15, 'Cylinder head rusak', '1.  silinder head memuai\r\n2.  silinder head retak', 'ganti cylinder head', 'cek kebocoran oli pada cylinder head.'),
(16, 'Sikring injeksi', '1. konsleting \r\n2. life time\r\n', 'Ganti sikring injeksi (warna merah no 10)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan (jangan sampai terjadi konsleting)'),
(17, 'Skring utama  karatan atau putus', '1. konsleting \r\n2. life time', 'ganti sikring utama (warna hijau no 30)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan (jangan sampai terjadi konsleting)'),
(18, 'battery lemah', '1. Batrei shield rusak.\r\n2. Kiprok tidak befungsi dengan baik (ketika batre sudah terisi penuh, kiprok masih melakukan pengisian pada batrei atau kiprok sama sekali tidak mengisi batre)', 'Ganti aki dan cek arus kelistrikan pada kiprok', '1. Jika menggunakan aki basah maka bersihkan shield batre menggunakan air hangat dan lakukan pengecasan manual.\r\n2. Jika menggunaka aki kering maka lakukan pengecasan saja.\r\n'),
(19, 'Sikring horn (klakson)', '1. konsleting \r\n2. life time', ' Ganti sikring klakson (warna biru no 15)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan  pada klakson(jangan sampai terjadi konsleting)'),
(20, 'Sikring kipas radiator karatan atau putus', '1. konsleting \r\n2. life time', 'Ganti sikring kipas radiator (warna merah no 10)', '1. cek kondisi sikring secara berkala minimal 1 bulan sekali.\r\n2. Hati hati ketika memperbaiki kabel kabel kelistrikan pada kipas radiator(jangan sampai terjadi konsleting)'),
(38, 'Plug mesin pembuangan oli rusak', '1. saat pergantian oli, pemasangan plug miring.\r\n2. Terdapat kotoran pada plug yang mengakibatkan ulir plug rusak.', '1. Hati-hati saat penggantian oli\r\n2. Bersihkan plug pada saat pemasangan plug', 'tidak ada perawatan'),
(39, 'Camshaft chain rusak', 'bantalan camshaft chain rusak', '1. ganti bantalan camshaft chain.\r\n2. Ganti camshaft chain', 'cek bantalan camshaft chain secara berkala minimal 3 bln sekali.'),
(40, 'Piston lecet atau baret', '1. ring kompresi pada piston rusak\r\n2. oli mesin kering atau oli mesin encer\r\n3. dinding ruang bakar lecet.', 'ganti piston', 'cek kekentalan dan level oli mesin secara berkala'),
(41, 'Gigi transmisi rusak', '1. oli mesin encer atau kering\r\n2. kanvas kopling habis\r\n3. stelan kopling tidak sesuai atau tidak pas', '1. ganti kanvas kopling\r\n2. ganti gigi transmisi\r\n3. stel kopling dengan sesuai', '1. cek kekentalan dan level oli mesin secara berkala\r\n2. cek stelan kopling'),
(42, 'Katup pemasukan udara rusak', '1. camshaft chain kendur\r\n2. menggunakan bahan bakar berkualitas rendah\r\n3. adanya lumpur pada oli', ' ganti katup pemasukan udara', 'tune up secara berkala'),
(43, 'Saringan udara kotor', '1. Life time\r\n2. Sering terkena air ', 'Ganti saringan udara', 'Sering membersih kan saringan udara menggunakan angina bertekanan rendah'),
(44, 'kanvas kopling aus', '1. setelan kopling tidak pas\r\n2. oli encer\r\n3. life time', ' ganti kanvas kopling ', '1. jaga kondisi oli\r\n2. stel kopling dengan tepat'),
(45, 'Selang bensin bocor', '1. selang bensin tertekuk\r\n2. selang bensin retak akibat sering terkena panas\r\n', '1. selang bensin jangan sampai tertekuk\r\n2. ganti selang', 'cek kondisi selang'),
(46, 'Panas mobil berlebihan atau radiator rusak', '1. pompa coolant rusak\r\n2. air radiator habis\r\n3. kipas radiator mati', '1. ganti pompa radiator apabila rusak\r\n2. perbaiki komponen kipas radiator\r\n3. ganti radiator\r\n', 'cek level air radiator'),
(47, 'Minyak rem habis', 'Minyak rem habis', 'ganti selang rem', 'selang rem jangan sampai tertekuk'),
(49, 'Kerusakan tidak teridentifiksi', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `noip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `username`, `password`, `nama`, `kelamin`, `alamat`, `pekerjaan`, `noip`) VALUES
(32, 'andi', 'andi', 'Andi', 'Pria', 'Cirebon', 'pengusaha', '::1'),
(33, 'sinta', 'sinta', 'Sinta', 'Wanita', 'Tasikmalaya', 'Mahasiswa', '::1'),
(34, 'handoko', 'handoko', 'handoko', 'Pria', 'cirebon', 'buruh', '::1'),
(35, 'budi', 'budi', 'budi', 'Pria', 'bogor', 'siswa', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kamus`
--
ALTER TABLE `kamus`
  ADD PRIMARY KEY (`id_kamus`);

--
-- Indexes for table `konsul_diagnosa`
--
ALTER TABLE `konsul_diagnosa`
  ADD PRIMARY KEY (`id_kd`);

--
-- Indexes for table `menganalisa`
--
ALTER TABLE `menganalisa`
  ADD PRIMARY KEY (`id_ahd`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kamus`
--
ALTER TABLE `kamus`
  MODIFY `id_kamus` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `konsul_diagnosa`
--
ALTER TABLE `konsul_diagnosa`
  MODIFY `id_kd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `menganalisa`
--
ALTER TABLE `menganalisa`
  MODIFY `id_ahd` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id_solusi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

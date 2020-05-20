-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 08:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040052`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `porsi` int(2) NOT NULL,
  `bahan` text NOT NULL,
  `caramasak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `nama`, `foto`, `porsi`, `bahan`, `caramasak`) VALUES
(1, 'Batagor', '5ec3e3cec38cd.jpg', 1, '<p>- 200 gr tepung tapioka / sagu</p><p>- 100 gr tepung terigu</p><p>- 1/2 sdt lada bubuk</p><p>- 1 sdt kaldu bubuk</p><p>- 1 sdt garam</p><p>- 2 lembar daun bawang</p><p>- Secukupnya Air</p><p>- 10 buah tahu putih (sy pakai tahu kuning)</p><p>- 1 bungkus kulit pangsit</p><p>- Bahan saus kacang</p><p>- Bumbu pecel yg siap pakai</p><p>- Secukupnya kecap</p><p>- Secukupnya mentimun</p>', '<p>- Siapkan wadah.. Masukan tepung terigu, tapioka, garam, kaldu bubuk, lada bubuk &amp; garam.. Tambahkan air sedikit2 sedikit.. Ulen adonan sampai aga lembek... (Tapi jangan kelembekan, pokoknya adonan lembek tp ga bisa d tuang) tambahkan irisan bawang daun.. Sisihkan</p><p>- Siapkan tahu, belah jadi 2, miring belahnya, bolongi keluarkan isi tengahnya lalu masukan adonan batagor. Lakukan sampai tahu habis</p><p>- Siapkan kulit pangsit, taruh adonan di tengah lalu lipatkan. Lakukan sampai habis</p><p>- Goreng tahu &amp; pangsit sampai kekuningan..</p><p>- Selanjutnya buat saus kacangnya.. Kalau ga ada bumbu pecel instan.. Seperti biasa bisa buat sendiri pake kacang tanah yang di blender, pakai cabe keriting, caabe merah, gula, penyedap rasa.. Lalu di masak...</p><p>- Saya pakai 2 bungkus bumbu pecel.... Caranya... Keluar in bumbu pecel ulek tambahkan air.. Panaskan minyak goreng.. Tumis bumbu pecel tambahkan air aga sedikit banyak.. Masak sampai mendidih tambahkan 1 sdm tepung maizena / kanji.. Supaya kental.. Tambahkan penyedap rasa &amp; gula.. Koreksi rasa...</p><p>- Siap di sajikan.. Tata batagor di piring.. Siram dengan saus kacang tambahkan kecap.. Tambahkan irisan mentimun.... Sajikan..</p><p>- Selamat Mencoba</p>'),
(2, 'Mie Pangsit', '5ec3e3e22ebff.jpg', 1, '<p>- Mie basah, rebus sebentar lalu tiriskan&nbsp;-&nbsp;150 gram</p><p>- Dada ayam fillet, cincang&nbsp;-&nbsp;250 gram</p><p>- Bakso, rebus sebentar lalu tiriskan&nbsp;-&nbsp;8 butir</p><p>- Caisin, potong-potong lalu blansir dan tiriskan&nbsp;-&nbsp;1 ikat</p><p>- Minyak ayam atau bawang&nbsp;-&nbsp;2 sdm</p><p>- Kecap asin&nbsp;-&nbsp;2 sdm</p><p>- Daun bawang, iris tipis&nbsp;-&nbsp;1 ikat</p><p>- Bawang goreng&nbsp;-&nbsp;1 sdm</p><p>TOPPING TUMISAN AYAM:</p><p>- Bawang putih, cincang&nbsp;-&nbsp;4 siung</p><p>- Bawang bombai, cincang&nbsp;-&nbsp;1/2 butir</p><p>- Saus tiram&nbsp;-&nbsp;1 sdm</p><p>- Kecap asin&nbsp;-&nbsp;1 sdm</p><p>- Kecap ikan&nbsp;-&nbsp;1 sdm</p><p>- Kecap manis&nbsp;-&nbsp;2 sdm</p><p>- Lada halus&nbsp;-&nbsp;1/2 sdt</p><p>- Kaldu bubuk&nbsp;-&nbsp;1 sdt</p><p>- Garam&nbsp;-&nbsp;1 sdt</p><p>- Gula pasir&nbsp;-&nbsp;1 sdm</p><p>- Air&nbsp;-&nbsp;100 ml</p><p>- Minyak, untuk menumis&nbsp;-&nbsp;3 sdm</p><p>PANGSIT:</p><p>- Kulit pangsit&nbsp;-&nbsp;16 lembar</p><p>- Daging ayam, cincang&nbsp;-&nbsp;50 gram</p><p>- Udang, kupas lalu cincang&nbsp;-&nbsp;25 gram</p><p>- Tepung tapioka / kaji&nbsp;-&nbsp;1/2 sdm</p><p>- Daun bawang, iris tipis&nbsp;-&nbsp;1 batang</p><p>- Bawang putih, cincang&nbsp;-&nbsp;1 siung</p><p>- Kecap asin&nbsp;-&nbsp;1/2 sdt</p><p>- Minyak wijen&nbsp;-&nbsp;1/2 sdt</p><p>- Saus tiram&nbsp;-&nbsp;1/2 sdt</p><p>KUAH:</p><p>- Kaldu ayam&nbsp;-&nbsp;1,5 liter</p><p>- Bawang putih, haluskan&nbsp;-&nbsp;1 siung</p><p>- Lada&nbsp;-&nbsp;1/2 sdt</p><p>- Garam&nbsp;-&nbsp;1 sdm</p><p>- Penyedap rasa&nbsp;-&nbsp;1 sdt</p><p>- Daun bawang, iris tipis&nbsp;-&nbsp;1 sdm</p>', '<p>CARA MEMBUAT TOPPING TUMISAN AYAM</p><p>- Panaskan minyak. Tumis bawang putih dan bombai hingga harum dan layu.</p><p>- Masukkan saus tiram, kecap asin, kecap ikan, kecap manis, dan lada. Aduk rata.</p><p>- Masukkan ayam. Aduk rata dan masak hingga berubah warna.</p><p>- Tuang air. Masukkan kaldu bubuk, gula, dan garam. Aduk rata. Masak hingga matang dan bumbu meresap. Angkat.</p><p>- Siap digunakan.</p><p>CARA MEMBUAT PANGSIT</p><p>- Dalam wadah, campur semua bahan (kecuali kulit pangsit) dan aduk hingga rata.</p><p>- Ambil selembar kulit pangsit, isi dengan 1 sdt adonan. Tutup dan rekatnya.</p><p>- Didihkan air dalam panci. Rebus 4 buah pangsit hingga mengapung. Angkat dan tiriskan.</p><p>- Panaskan banyak minyak dalam wajan. Goreng 4 buah pangsit dengan api kecil hingga kuning kecoklatan. Angkat dan tiriskan.</p><p>- Siap digunakan.</p><p>CARA MEMBUAT KUAH</p><p>- Dalam panci, campur semua bahan dan rebus hingga mendidih. Koreksi rasanya. Matikan api.</p><p>- Siap digunakan.</p><p>PENYAJIAN</p><p>- Dalam mangkok, beri 1/2 sdm minyak ayam/bawang, 1/2 sdm kecap asin, dan bawang goreng. Aduk rata.</p><p>- Tambahkan mie basah dan caisin. Aduk rata hingga tercampur dengan bumbu.</p><p>- Beri topping tumisan ayam, bakso, pangsit basah, dan pangsit goreng.</p><p>- Beri taburan daun bawang dan bawang goreng.</p><p>- Siram dengan kuah.</p><p>- Siap disajikan.</p>'),
(3, 'Martabak Telur', '5ec3e3f091b6e.jpg', 3, '<p>KULIT:</p><p>- Tepung terigu protein tinggi&nbsp;-&nbsp;125 gram</p><p>- Minyak goreng&nbsp;-&nbsp;2 sdm</p><p>- Garam&nbsp;-&nbsp;1/2 sdt</p><p>- Air&nbsp;-&nbsp;60 ml</p><p>- Minyak goreng, untuk merendam adonan&nbsp;-&nbsp;500 ml</p><p>- Minyak, untuk menggoreng&nbsp;-&nbsp;secukupnya</p><p>ISIAN AYAM:</p><p>- Daging ayam cincang&nbsp;-&nbsp;150 gram</p><p>- Bawang bombay, cincang halus&nbsp;-&nbsp;1 butir</p><p>- Bawang putih, cincang halus&nbsp;-&nbsp;2 siung</p><p>- Garam&nbsp;-&nbsp;1 sdt</p><p>- Lada halus&nbsp;-&nbsp;1/4 sdt</p><p>- Gula pasir&nbsp;-&nbsp;1/2 sdt</p><p>- Minyak, untuk menumis&nbsp;-&nbsp;2 sdm</p><p>ISIAN LAINNYA:</p><p>- Telur bebek, kocok lepas&nbsp;-&nbsp;3 butir</p><p>- Daun bawang, iris halus&nbsp;-&nbsp;5 batang</p><p>- Bawang bombay, cincang halus&nbsp;-&nbsp;1/2 butir</p><p>- Garam&nbsp;-&nbsp;1/2 sdt</p><p>- Lada halus&nbsp;-&nbsp;1/4 sdt</p><p>CUKA:</p><p>- Wortel&nbsp;-&nbsp;1/2 buah</p><p>- Timun&nbsp;-&nbsp;1/2 buah</p><p>- Bawang merah&nbsp;-&nbsp;3 butir</p><p>- Cabe rawit&nbsp;-&nbsp;10 buah</p><p>- Cuka&nbsp;-&nbsp;1 sdm</p><p>- Air&nbsp;-&nbsp;250 ml</p><p>- Gula merah&nbsp;-&nbsp;2 sdm</p><p>- Garam&nbsp;-&nbsp;1/2 sdt</p>', '<p>CARA MEMBUAT CUKA</p><p>- Cuci bersih wortel, timun, bawang, dan cabe. Potong wortel dan timun (buang bijinya) bentuk kotak kecil. Iris kasar bawang merah. Potong cabe rawit atau biarkan utuh sesuai selera.</p><p>- Dalam wadah, campur wortel, timun, bawang merah, cabe rawit, dan cuka. Aduk rata. Sisihkan.</p><p>- Dalam panci, campur air, gula merah, dan garam. Rebus hingga mendidih dan gula larut. Angkat lalu tuang sambil disaring ke dalam wadah isi campuran tadi. Aduk rata.</p><p>- Siap disajikan.</p><p>CARA MEMBUAT ISIAN AYAM</p><p>- Panaskan minyak. Tumis bawang bombay dan bawang putih hingga harum.</p><p>- Masukkan daging ayam, aduk hingga berubah warna. &nbsp;</p><p>- Bubuhi garam, gula, lada halus, dan tuangi sedikit air agar tidak terlalu kering. Masak hingga matang. Sisihkan hingga dingin.</p><p>CARA MEMBUAT KULIT</p><p>- Dalam wadah, aduk rata tepung, garam, minyak goreng.</p><p>-&nbsp;Tuang air sedikit demi sedikit sampai adonan kalis saja. &nbsp;Uleni kembali hingga adonan kalis elastis selama 10-15 menit.</p><p>- Bagi adonan menjadi 2 bagian. Bulatkan dan istirahatkan selama 5 menit.</p><p>- Siapkan mangkuk, tuang minyak goreng (500 ml). Masukkan adonan tadi ke dalamnya hingga terendam. Rendam selama 30 menit.</p><p>PENYELESAIAN</p><p>- Panaskan banyak minyak.</p><p>- Ambil 1 bulatan adonan kulit. Pindahkan ke atas meja kerja. Pipihkan adonan dengan menggunakan jari tangan hingga adonan melebar dan tipis.</p><p>- Ambil 1 bagian isian. Tuang ke atas kulit martabak. Lipat bentuk amplop.</p><p>- Goreng martabak ke dalam minyak panas, hingga matang dan kecokelatan kedua sisinya. Angkat, tiriskan.</p><p>- Lakukan hal yang sama untuk satu lagi adonan martabak.</p><p>- Potong martabak sesuai selera.</p><p>- Siap disajikan dengan kuah cuka martabak.</p>'),
(4, 'Risoles', '5ec3e4271a9bc.jpg', 5, '<p>- 500 gr&nbsp;tepung terigu</p><p>- 2 butir&nbsp;kuning telur</p><p>- 2 SDM&nbsp;Susu bubuk</p><p>- 2 SDM&nbsp;tepung tapioka</p><p>- Secukup&nbsp;nya air</p><p>- 2 SDM&nbsp;minyak goreng</p><p>- 1/2 sdt&nbsp;garam</p><p>- Secukup&nbsp;nya tepung panir</p><p>- Secukup&nbsp;nya minyak untuk menggoreng</p><p>Bahan isian risoles :</p><p>- 1/2 kg&nbsp;kentang potong kotak2 kecil</p><p>- 1 buah&nbsp;wortel uk besar potong kotak2 kecil</p><p>- 3 buah&nbsp;sosis potong kecil2 goreng sebentar</p><p>- 1 tangkai&nbsp;daun bawang</p><p>- 1 tangkai&nbsp;daun soup</p><p>- Bumbu yg di halus kan :</p><p>- 20 butir&nbsp;bawang merah</p><p>- 8 butir&nbsp;bawang putih</p><p>- 1 bks&nbsp;ladaku merica bubuk</p><p>- Secukup&nbsp;nya garam, gula, royco</p><p>- Secukup&nbsp;nya air untuk merebus kentang</p>', '<p>- Buat adonan kulit, campur tepung terigu + tepung tapioka + susu bubuk, aduk2 sampai rata, masukan kuning telur lalu tambah kan air secukup nya sampai adonan licin, saring agar adonan halus, &amp; tidak bergerindil..</p><p>- Lalu tambah kan 2 SDM minyak makan,&amp; garam aduk2 sampai rata, panas kan teflon anti lengket dadar kulit risoles satu persatu, lakukan sampai habis</p><p>- Panas kan sedikit minyak, tumis bumbu yg sudah di halus kan, tunggu sampai harum, masukan kentang &amp; wortel, tambah kan merica, gula, garam &amp; royco, tambah kan air, masak sampai kentang matang &amp; air habis, matikan api masukan sosis, lalu masukan daun bawang &amp; daun soup</p><p>- Ambil satu lembar kulit, isi dgn isian lalu gulung, lakukan sampai habis, kocok sisa putih telur tadi gulingkan risol kedalam putih telur lalu guling kan ke dalam tepung panir, lakukan sampai habis.</p><p>- Panas kan minyak, goreng risoles dalam minyak panas, balik supaya tidak gosong, angkat lalu tiris kan.</p><p>- Risoles siap di nikmati.</p>'),
(5, 'Bebek Goreng', '5ec3e4349ed14.jpg', 1, '<p>- Bahan unt merebus bebek agar tidak amis :</p><p>- Secukupnya&nbsp;Air</p><p>- 2 ruas&nbsp;jahe,keprek</p><p>- 3 lbr&nbsp;daun salam,sobek2</p><p>- 3 lbr&nbsp;daun jeruk,sobek2</p><p>Bahan ungkepan bebek :</p><p>- 1/2 ekor&nbsp;bebek (8-12 potong)</p><p>- Secukupnya&nbsp;Air asam jawa</p><p>- 7 lbr&nbsp;daun jeruk</p><p>- 5 lbr&nbsp;daun salam</p><p>- secukupnya&nbsp;Air</p><p>- 100 ml&nbsp;minyak unt menumis</p><p>- Secukupnya&nbsp;Garam,penyedap rasa</p><p>Bumbu halus :</p><p>- 15 btr&nbsp;bawang merah</p><p>- 10 btr&nbsp;bawang putih</p><p>- 5 cm&nbsp;jahe</p><p>- 1,5 sdm&nbsp;ketumbar bubuk</p><p>- 1 sdt&nbsp;jinten bubuk</p><p>- 1/2 sdm&nbsp;merica bubuk</p>', '<p>- Rendam bebek yang sudah dibersihkan dengan air asam dan garam selama 30 menit didalam kulkas unt menghilangkan bau amisnya. Cuci bersih sekali lagi. Rebus bebek dengan air mendidih+jahe+daun salam+daun jeruk. Gunakan api besar untuk membuang kotorannya. Masak sampai sekitar 10 menit. Cuci bebek sekali lagi kemudian tiriskan</p><p>- Tumis bumbu halus,daun jeruk,daun salam. Masak hingga bumbu matang dan harum tapi jangan kering ya. Masak sampai ada genangan minyak di bagian permukaan</p><p>- Tambahkan 1 sdm garam,masukkan bebek,aduk rata. Tambahkan 500ml air dan masak dengan api kecil sampai mendidih. Masak selama 15-25 menit,kamu akan mendapati ungkepannya sangat kental. Ini menandakan bahwa lemak/minyak bebek sudah mulai keluar,tambahkan kaldu ayam bubuk,cicipi dan koreksi rasanya. Lanjut ungkep bebek selama 3 jam</p><p>- Tambahkan air sedikit demi sedikit,ga boleh sekaligus banyak2 ya,intinya air ungkepannya harus selalu kental supaya bumbunya benar2 menyerap ke bebek. Lakukan seterusnya selama 2-3 jam sampai bebek empuk (aku 3 jam). Jangan lupa sesering mungkin dicicipi dan dikoreksi rasanya ya. Jika sudah empuk,matikan api,dinginkan. Taruh dalam wadah yang ada tutupnya Simpan dalam kulkas semalaman agar bumbu meresap. Baru keesokan harinya digoreng.</p>'),
(6, 'Nasi Goreng Telur Ceplok', '5ec3e44404d0b.jpg', 1, '<p>- 200 gram nasi putih atau setara 1 piring.</p><p>- 2 butir telur.</p><p>- 3 buah tomat ceri, potong sesuai selera.</p><p>- 1 batang daun bawang, cincang kasar.</p><p>- 1 sdm margarin.</p><p>- 2 sdm minyak goreng.</p><p>- Kerupuk secukupnya.</p><p>Bumbu Halus</p><p>- 3 buah bawang merah.</p><p>- 2 siung bawang putih.</p><p>- 5 buah cabai rawit merah.</p><p>- Garam secukupnya.</p><p>- Gula secukupnya.</p><p>- Kecap manis secukupnya.</p>', '<p>Memasak Telur Ceplok</p><p>- Masukkan minyak goreng atau margarin sebanyak 1 sendok makan kedalam wajan. Gunakan settingan kompor dengan api sedang-kecil.</p><p>- Pecahkan telur ke dalam mangkuk sembari menunggu wajan panas (hingga margarin mengeluarkan suara).</p><p>- Masukkan telur kedalam wajan, tunggu selama 10 hingga 15 detik hingga dasar telur mengeras.</p><p>- Angkat dan geser wajan agar putih telur tidak menggumpal.</p><p>- Setelah 1 hingga 2 menit, balik telur menggunakan spatula ketika tepi dan dasar telur terlihat memadat.</p><p>- Tunggu selama 10 hingga 15 menit, kemudian balik lagi telur ke posisi semula.</p><p>- Jangan lama-lama, tiriskan telur ke dalam piring.</p><p>Memasak Nasi Goreng dengan Telur Orak Arik</p><p>- Siapkan penggorengan dan lelehkan margarin, kemudian masak telur orak-arik.</p><p>- Selanjutnya tuangkan minyak goreng dan tumis bumbu halus. Masak sampai aroma wanginya tercium harum.</p><p>- Masukkan nasi ke wajan, aduk hingga bumbu dan nasi tercampur rata.</p><p>- Tambahkan daun bawang, aduk lagi sampai tercampur rata. Tunggu kurang lebih 3 menit sembari terus diaduk.</p><p>- Tuangkan kecap manis, garam dan gula lalu aduk lagi.</p><p>- Masak sampai matang dan bumbu meresap. Angkat dan sajikan di atas piring. Ambil tomat ceri dan kerupuk sebagai topping.</p>'),
(7, 'Gado Gado', '5ec3e44f7102a.jpg', 1, '<p>- Kentang&nbsp;-&nbsp;2 buah</p><p>- Wortel&nbsp;-&nbsp;1 buah</p><p>- Daun selada&nbsp;-&nbsp;8 lembar</p><p>- Timun&nbsp;-&nbsp;1 buah</p><p>- Kacang panjang&nbsp;-&nbsp;100 gram</p><p>- Toge siangi&nbsp;-&nbsp;100 gram</p><p>- Kol&nbsp;-&nbsp;1 buah</p><p>- Lontong&nbsp;-&nbsp;1 buah</p><p>- Tempe&nbsp;-&nbsp;1 papan</p><p>- Tahu&nbsp;-&nbsp;2 buah</p><p>BAHAN SAUS KACANG:</p><p>- Santan, dari 1/2 butir kelapa&nbsp;-&nbsp;700 ml</p><p>- Kacang tanah kulit&nbsp;-&nbsp;200 gram</p><p>- Daun jeruk, sobek&nbsp;-&nbsp;4 lembar</p><p>- Gula merah, iris halus&nbsp;-&nbsp;50 gram</p><p>- Kecap manis&nbsp;-&nbsp;2 sdm</p><p>- Gula pasir&nbsp;-&nbsp;1 sdt</p><p>- Asam jawa&nbsp;-&nbsp;1 sdt</p><p>- Garam&nbsp;-&nbsp;2 sdt</p><p>- Minyak untuk menumis&nbsp;-&nbsp;2 sdm</p><p>BAHAN BUMBU HALUS:</p><p>- Cabe merah keriting, rebus sebentar&nbsp;-&nbsp;8 buah</p><p>- Bawang putih, goreng sebentar&nbsp;-&nbsp;4 siung</p><p>- Terasi bakar&nbsp;-&nbsp;1/2 sdt</p><p>- Kencur&nbsp;-&nbsp;3 cm</p><p>BAHAN PELENGKAP:</p><p>- Bawang merah goreng&nbsp;-&nbsp;secukupnya</p><p>- Kerupuk udang&nbsp;-&nbsp;secukupnya</p><p>- Telur rebus&nbsp;-&nbsp;secukupnya</p>', '<p>MEMBUAT SAYUR-SAYURAN</p><p>- Kupas sayuran seperti kentang dan wortel. Cuci bersih semua sayuran.</p><p>- Potong-potong kentang dan wortel dengan bentuk dadu sedang. Iris kasar kol.</p><p>- Potong-potong kacang panjang.</p><p>- Panaskan air secukupnya dalam panci hingga mendidih.</p><p>- Ambil sedikit air mendidih lalu seduh toge. Tiriskan lalu sisihkan.</p><p>- Rebus kentang, wortel, kol, dan kacang panjang dalam air mendidih hingga matang. Angkat dan tiriskan, lalu sisihkan.</p><p>- Potong-potong timun, lalu sisihkan.</p><p>- Iris kasar selada atau biarkan utuh, sesuai selera. Sisihkan.</p><p>MEMBUAT BAHAN LAINNYA</p><p>- Haluskan 1 siung bawang putih dan garam. Tambahkan sedikit air. Rendam tempe dan tahu ke dalamnya. Goreng dalam minyak panas. Angkat dan tiriskan, lalu potong-potong dengan bentuk dadu sedang. Sisihkan.</p><p>- Potong-potong lontong dengan bentuk dadu sedang. Sisihkan.</p><p>MEMBUAT SAUS KACANG</p><p>- Cuci bersih kacang tanah. Goreng dalam minyak panas. Angkat dan tiriskan, lalu biarkan hingga dingin. Giling kacang menggunakan blender hingga halus. Sisihkan.</p><p>- Larutkan asam jawa dengan 3 sdm air panas. Saring dan ambil airnya. Sisihkan.</p><p>- Panaskan minyak, tumis bumbu halus dan daun jeruk hingga harum.</p><p>- Masukkan gilingan kacang tanah, aduk rata.</p><p>- Masukkan santan, gula merah, kecap manis, dan garam. Aduk hingga rata dan masak hingga mendidih.</p><p>- Masukkan air asam jawa, aduk rata.</p><p>- Masak hingga saus mengental dan koreksi rasanya.</p><p>- Angkat dan sisihkan.</p><p>PENYAJIAN</p><p>- Tata di piring potongan lontong, kentang, tahu, tempe, dan semua sayuran. Beri telur rebus yang dibelah menjadi 2 bagian.</p><p>- Tuang saus kacang sesuai selera.</p><p>- Taburi dengan bawang merah goreng dan sajikan bersama kerupuk udang.</p>'),
(8, 'Nasi Lemak Sayur Segar', '5ec3e45a097ea.jpg', 1, '<p>- Beras, cuci bersih lalu rendam dalam air selama 1 jam&nbsp;-&nbsp;250 gram</p><p>- Santan sedang&nbsp;-&nbsp;600 ml</p><p>- Garam&nbsp;-&nbsp;1 sdt</p><p>- Daun pandan, sobek-sobek lalu simpulkan&nbsp;-&nbsp;1 lembar</p><p>- Daun salam&nbsp;-&nbsp;3 lembar</p><p>- Daun jeruk&nbsp;-&nbsp;2 lembar</p><p>- Jahe, memarkan&nbsp;-&nbsp;2 ruas jari</p><p>- Serai, memarkan&nbsp;-&nbsp;1 batang</p><p>PELENGKAP:</p><p>- Ayam goreng&nbsp;-&nbsp;secukupnya</p><p>- Ikan teri goreng&nbsp;-&nbsp;secukupnya</p><p>- Kacang tanah goreng, taburi sedikit garam&nbsp;-&nbsp;secukupnya</p><p>- Telur rebus&nbsp;-&nbsp;secukupnya</p><p>- Ketimun&nbsp;-&nbsp;secukupnya</p><p>- Sambal&nbsp;-&nbsp;secukupnya</p>', '<p>- Dalam panci, masukkan santan dan bahan-bahan lainnya. Masak dengan api sedang, sambil terus diaduk hingga mendidih.</p><p>- Tiriskan beras yang sudah direndam. Masukkan beras lalu aduk-aduk hingga santan mengering dan nasi jadi setengah matang.</p><p>- Siapkan panci kukusan. Masukkan nasi tadi ke dalamnya dan kukus selama 30 menit hingga nasi matang. Matikan api.</p><p>- Nasi lemak siap disajikan bersama pelengkap lainnya.</p>'),
(9, 'Bakso Bihun', '5ec3e4671ac56.jpg', 1, '<p>- 10 butir&nbsp;bakso</p><p>- 1 pcs&nbsp;bihun</p><p>- Caisim</p><p>- Daun bawang</p><p>- Bumbu</p><p>- 4 siung&nbsp;bawang putih</p><p>- Secukupnya&nbsp;Garam</p><p>- Secukupnya&nbsp;Lada bubuk</p><p>- 1&nbsp;Kaldu blok ayam/sapi</p><p>- Bisa pake royco / masako jga</p><p>- Kaldu jamur</p><p>- Minyak wijen (sedikit)</p><p>- Minyak goreng</p>', '<p>- Rendam bihun di air panas sekitar 3 menit, selama menunggu bihun matang rebus caisim. Lalu tiriskan.</p><p>- Tumis bawang putih cincang hingga harum, masukkan lada dan air secukupnya.</p><p>- Masukan garam, kaldu blok dan bakso. Tunggu hingga bakso mengapung. Lalu siap dihidangkan.</p><p>- Dimangkok saya beri bumbu tambahan : minyak wijen, garam, kaldu jamur (secukupnya saja).</p><p>- Siap dihidangkan.</p>'),
(10, 'Sop Buntut dan Shumay', '5ec3e4760fb87.jpg', 1, '<p>BAHAN-BAHAN YANG DIPERLUKAN:</p><p>- 1 kilogram buntut sapi (potong sesuai keinginan)</p><p>- 2 liter air 3 buah kentang, potong kecil/dadu</p><p>- 2 sendok makan minyak goreng</p><p>- 4 buah wortel, kupas, potong 1/2 cm</p><p>BUMBU SOP BUNTUT:</p><p>- 1 sendok teh merica bubuk</p><p>- 6 siung bawang putih, memarkan</p><p>- 1 butir pala, memarkan</p><p>- gula, secukupnya</p><p>- 5 buah cengkeh</p><p>- garam, secukupnya</p><p>- 1 buah tomat merah, potong-potong (kasar)</p><p>- 2 cm kayu manis</p><p>- Bumbu kaldu instant (rasa sapi)</p><p>BAHAN PELENGKAP:</p><p>- Bawang goreng</p><p>- 1 batang daun seledri, iris tipis</p><p>- Sambal</p><p>- 2 batang daun bawang, iris tipis</p><p>- Kerupuk Jeruk nipis</p><p>BAHAN SHUMAY:</p><p>- 150 gram daging ayam giling</p><p>- 100 gram ayam&nbsp;<em>fillet</em>&nbsp;cincang kasar</p><p>- 150 gram udang (buang cangkangnya, beri baking soda, diamkan 10 menit, cuci bersih lalu cincang kasar)</p><p>- 100 gram labu kukus sampai matang lalu haluskan</p><p>- 1 butir telur</p><p>- 6 sdm tepung tapioka</p><p>- 2 sdm minyak wijen</p><p>- 1 sdm kecap asin</p><p>- 2 sdt gula pasir</p><p>- 1 sdt kaldu bubuk</p><p>- 1/2 sdt garam</p><p>- 1/2 sdt merica</p><p>- 1 batang daun bawang cincang halus</p><p>- 25 lembar kulit dimsum</p><p>- Wortel untuk taburan</p>', '<p>CARA MENGOLAH BUNTUT SAPI:</p><p>- Langkah pertama yang bisa anda lakukan terlebih dahulu adalah dengan mencuci bersih buntu sapi dalam air yang mengalir kemudian pastikan anda mencucinya hingga bersih.</p><p>- Setelah selesai, rebus air selama 10-15 menit dan masukkan buntut sapi, buang air rebusannya.</p><p>CARA MEMBUAT SOP BUNTUT:</p><p>- Kemudian siapkan panci mauskan air hingga mendidih dan kembali masukkan buntut, masukkan kayu manis serta cengkeh.</p><p>- Masak air hingga menyusut kurang lebih hingga ukuran 1.5 liter. Kemudian matikan kompor.</p><p>- Selagi menunggu dingin, ulek merica, pala, bawang putih dan garam kemudian tumis hingga menjadi harum.</p><p>- Didihkan kembali buntut sapi, muuskan bumbu tumis kedalamnya aduk hingga rata dan masukan sayurannya hingga matang dan empuk.</p><p>- Angkat dan sajikan masukkan pula bahan pelengkapnya dan sajikan dengan istimewa.</p><p>CARA MEMBUAT SHUMAY:</p><p>- Campur semua bahan sampai tercampur rata.</p><p>- Ambil 1 lembar kulit dimsum, beri isian secukupnya, letakkan di tengahnya, rapikan kulitnya (supaya lebih gampang, masukkan kulit dimsum ke dalam cetakan berbentuk mangkok lalu beri isian). Lakukan sampai adonan habis.</p><p>- Taburi atasnya dengan parutan wortel.</p><p>- Kukus selama 20 menit atau sampai dengan matang.</p><p>- Sajikan dengan sop buntut.</p>'),
(11, 'Pepes Ikan', '5ec3e48383f16.jpg', 2, '<p>- 2 buah ikan mas ( Ikan bisa diganti sesuai selera, misal : ikan kembung, bawal, mujair dll )<br />- 1 buah jeruk nipis, ambil airnya<br />- 1 batang serai, ambil bagian putih, iris halus<br />- 4 lembar daun jeruk purut, iris halus atau 1 genggam daun kemangi<br />- 2 cm jari lengkuas, iris tipis<br />- 3 lembar daun pisang ukuran 40x25cm</p><p>Bumbu Halus:</p><p>- 6 buah cabe merah, buang bijinya (sertakan bijinya jika suka pedas)<br />- 5 buah bawang merah<br />- 3 buah bawang putih<br />- 5 buah kemiri<br />- 1 buah tomat<br />- 2 cm jahe<br />- 2 cm kunyit atau 1 sdt kunyit bubuk<br />- 1 sdt asam jawa<br />1 sdt gula jawa atau gula pasir<br />2 sdt garam atau sesuai selera</p>', '<p>- Bersihkan ikan, lumuri dengan air jeruk nipis dan garam, sisihkan selama 15 menit.<br />- Cuci kembali ikan sampai bersih, keringkan dengan tissue dapur, kerat-kerat sedikit badannya. Sisihkan.<br />- Haluskan bumbu halus dengan blender, bila perlu tambahkan sedikit minyak untuk mempermudah proses penghancuran.<br />- Campur bumbu halus dengan irisan daun jeruk purut atau kemangi, serai dan lengkuas. Aduk rata.<br />- Lemaskan daun pisang dengan cara direndam dalam air panas atau di taruh di atas dandang pengukus.<br />- Letakkan ikan di tengah-tengah daun pisang. Lumuri ikan dengan bumbu, termasuk dalam perut ikan.<br />- Bungkus ikan dengan cara melipat daun pisang bagian atas dan bawah kemudian tekuk ujungnya ke bawah bungkusan (Lihat gambar). Semat dengan lidi atau stapler.<br />- Kukus pepes ikan selama 30 menit sejak air mendidih dan uap mendesis.<br />- Panggang pepes di atas bara api atau dalam oven dengan suhu 200&deg;C selama 20-25 menit hingga daun pisang berubah agak kecoklatan.<br />- Sajikan panas.</p>'),
(12, 'Ayam Bakar Madu', '5ec3e49080119.jpg', 12, '<p>- Ayam&nbsp;-&nbsp;1 kg</p><p>- Lengkuas, memarkan&nbsp;-&nbsp;4 cm</p><p>- Jahe, memarkan&nbsp;-&nbsp;3 cm</p><p>- Daun salam&nbsp;-&nbsp;2 lembar</p><p>- Serai&nbsp;-&nbsp;2 batang</p><p>- Asam jawa&nbsp;-&nbsp;1 sdm</p><p>- Gula jawa&nbsp;-&nbsp;25 gram</p><p>- Madu&nbsp;-&nbsp;4 sdm</p><p>- Garam&nbsp;-&nbsp;1 sdm</p><p>- Air&nbsp;-&nbsp;1 liter</p><p>BUMBU HALUS:</p><p>- Bawang merah&nbsp;-&nbsp;6 siung</p><p>- Bawang putih&nbsp;-&nbsp;4 siung</p><p>- Ketumbar&nbsp;-&nbsp;1 sdt</p><p>- Merica&nbsp;-&nbsp;1/2 sdt</p><p>BUMBU OLESAN:</p><p>- Margarin&nbsp;-&nbsp;1 sdm</p><p>- Kecap manis&nbsp;-&nbsp;1 sdm</p><p>- Madu&nbsp;-&nbsp;3 sdm</p>', '<p>-&nbsp;Potong ayam menjadi 12 bagian lalu cuci sampai bersih. Sisihkan.</p><p>-&nbsp;Tumis bumbu halus sampai wangi.</p><p>-&nbsp;Tambahkan lengkuas, jahe, daun salam, dan serai. Tumis hingga matang.</p><p>-&nbsp;Masukkan ayam, aduk hingga bumbu merata. Masak hingga ayam berubah warna</p><p>-&nbsp;Tambahkan air asam jawa, gula jawa, madu, garam, dan air. Masak hingga ayam matang dan air meresap. Angkat.</p><p>-&nbsp;Bakar ayam di atas bara api atau menggunakan wajan datar anti lengket, hingga berwarna kecoklatan. Sesekali olesi ayam dengan bumbu olesan. Angkat.</p><p>- Siap disajikaan.</p>'),
(13, 'Nasi Goreng Seafood', '5ec3e49e590ca.jpg', 3, '<p>- Nasi&nbsp;-&nbsp;2 piring / 500 gram</p><p>- Udang sungai, kupas kulitnya&nbsp;-&nbsp;150 gram</p><p>- Cumi, potong cincin&nbsp;-&nbsp;100 gram</p><p>- Daun bawang&nbsp;-&nbsp;2 batang</p><p>- Bawang bombay, iris melintang&nbsp;-&nbsp;1 buah</p><p>- Kecap manis&nbsp;-&nbsp;2 sdm</p><p>- Saus tomat&nbsp;-&nbsp;2 sdm</p><p>- Kecap ikan&nbsp;-&nbsp;2 sdm</p><p>- Merica bubuk&nbsp;-&nbsp;1 sdt</p><p>- Minyak goreng&nbsp;-&nbsp;2 sdm</p><p>- Margarin&nbsp;-&nbsp;1 sdm</p><p>- Telur, kocok lepas&nbsp;-&nbsp;1 butir</p><p>- Bubuk kaldu&nbsp;-&nbsp;1 sdt</p><p>BUMBU HALUS:</p><p>- Bawang putih&nbsp;-&nbsp;4 siung</p><p>- Bawang merah&nbsp;-&nbsp;3 buah</p><p>- Cabe merah besar&nbsp;-&nbsp;1 buah</p><p>- Garam&nbsp;-&nbsp;1 sdt</p><p>PELENGKAP:</p><p>- Kerupuk&nbsp;-&nbsp;secukupnya</p><p>- Tomat buah, iris&nbsp;-&nbsp;secukupnya</p><p>- Acar&nbsp;-&nbsp;secukupnya</p>', '<p>-&nbsp;Panaskan minyak, masukkan margarin, aduk hingga meleleh. Masukkan bawang bombay dan bumbu halus, tumis hingga wangi.</p><p>-&nbsp;Masukkan udang dan cumi, aduk hingga berubah warna kemerahan, sisihkan di pinggir wajan.</p><p>-&nbsp;Masukkan daun bawang dan telur, orak arik hingga matang, kemudian campur jadi satu dengan udang dan cumi.</p><p>-&nbsp;Masukkan nasi, kecap manis, kecap ikan, saus tomat, merica dan kaldu bubuk. Aduk semua hingga tercampur merata dan matang. Angkat.</p><p>- sama pelengkapnya</p>'),
(14, 'Sate Kambing', '5ec3e4ac412a2.jpg', 1, '<p>- Daging kambing, potong dadu 2 cm&nbsp;-&nbsp;500 gram</p><p>- Tusuk sate, rendam dalam air lalu tiriskan&nbsp;-&nbsp;20 buah</p><p>BUMBU OLESAN:</p><p>- Bawang putih, haluskan&nbsp;-&nbsp;2 siung</p><p>- Ketumbar halus&nbsp;-&nbsp;1/2 sdt</p><p>- Merica halus&nbsp;-&nbsp;1/4 sdt</p><p>- Kecap manis&nbsp;-&nbsp;100 ml</p><p>- Air perasan jeruk nipis&nbsp;-&nbsp;secukupnya</p><p>PELENGKAP:</p><p>- Kubis, iris halus&nbsp;-&nbsp;50 gram</p><p>- Tomat merah, potong&nbsp;-&nbsp;2 buah</p><p>- Cabai rawit, iris&nbsp;-&nbsp;10 buah</p><p>- Bawang merah, iris&nbsp;-&nbsp;10 butir</p><p>- Kecap manis&nbsp;-&nbsp;5 sdm</p><p>- Jeruk nipis, belah jadi 4&nbsp;-&nbsp;1 buah</p><p>- Acar timun&nbsp;-&nbsp;secukupnya</p>', '<p>-&nbsp;Tusuk daging dengan tusukan sate. Isi setiap tusukan dengan 4 potong daging. Sisihkan.</p><p>-&nbsp;Dalam wadah, campur semua bahan olesan lalu oleskan ke daging sate.</p><p>-&nbsp;Bakar sate di atas bara api sambil sesekali dioles bumbu oles. Bakar hingga berwarna kecoklatan, matang, dan harum. Angkat.</p><p>- Tata semua bahan pelengkap (Acar timun) dan sate di atas piring saji. Tuang kecap manis di atas sate. Siap disajikan.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(10) NOT NULL,
  `nama_makanan` varchar(30) NOT NULL,
  `terbuat` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `gambar`, `nama_makanan`, `terbuat`, `tempat`, `harga`) VALUES
(1, '1.png', 'Tahu Crispy', 'Tahu', 'Bandung', 5000),
(2, '2.jpg', 'Daging Panggang', 'Daging Salmon', 'Jakarta', 15000),
(3, '3.jpg', 'Nasi Goreng Spesial', 'Nasi-Lauk pauk', 'Bandung', 12000),
(4, '4.jpg', 'Salad', 'Sayur-sayuran', 'NgopiDulu', 11000),
(5, '5.jpg', 'Pasta', 'Terigu', 'NgopiDulu', 22000),
(6, '6.png', 'Udang Crispy', 'Udang + Terigu', 'NgopiDulu', 10000),
(7, '7.jpg', 'Sayur Udang', 'Udang dan Sayur-sayuran', 'Jl. Pajajaran', 13000),
(8, '8.jpeg', 'Steak', 'Daging Sapi', 'McD', 14500),
(9, '9.jpg', 'Ice Campur', 'Buah-buahan', 'Bandung', 8000),
(10, '10.jpg', 'Lontong', 'Beras', 'Setia Budhi', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$rEf.N8fQmxwknBq0kbaE9e7gLnYUTNWD4i4FX2TszLNvnK00f.QuS'),
(2, 'didapatria', '$2y$10$528YSU.4MGv.k3eARuUJ6OgCj9FJYHJv8nVRnmFk2iAVirhxzKaW.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

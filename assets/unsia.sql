-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 09:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unsia`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_content` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `date_created`, `user`, `image`, `short_content`, `content`) VALUES
(6, 'Tips Belajar Online yang Nyaman', 1612248760, 'Admin', 'pic1.jpg', '<p>Apakah di sekolah atau kampusmu sudah menerapkan sistem belajar online? Pernahkah kamu menerka bagaimana caranya supaya belajar melalui komputer itu dapat berjalan dengan baik dan nyaman?</p>', '<p>Apakah di sekolah atau kampusmu sudah menerapkan sistem belajar online? Pernahkah kamu menerka bagaimana caranya supaya belajar melalui komputer itu dapat berjalan dengan baik dan nyaman?</p>\r\n									<p>Sejak hadirnya COVID 19 di Indonesia, begitu banyak institusi pendidikan yang kini menerapkan Pembelajaran Jarak Jauh yang tak bisa dilepaskan dari pembelajaran berbasis online . Dalam sistem ini, kamu tidak perlu hadir tatap muka bersama dengan dosen. Kamu bisa belajar dari mana pun dan kapanpun.</p>\r\n									<p>Agar kamu bisa nyaman belajar, berikut ini tips yang bisa kamu lakukan.</p>\r\n									<p>\r\n										<ul class=\"ml-4\">\r\n											<li>\r\n												Siapkan pakaian yang rapih <br>\r\n												Tidak jarang dalam kegiatan belajar online, pengajar baik itu guru ataupun dosen meminta Video Conference  Nah, tidak mau kan saat di zoom meeting pakaian yang kita pakai terlihat tidak rapih? Anggaplah ketika kamu akan mulai mengikuti kelas online sama seperti ketika kamu mengikuti perkuliahan yang biasa.\r\n											</li>\r\n											<li>Siapkan Spot khusus untuk belajar <br>\r\n											Entah kamu menggunakan smartphone ataupun Desktop Komputer, sebaiknya ada satu ruangan yang bisa kamu pakai untuk belajar. Ruangan ini dapat kamu anggap sebagai ruang kelas kamu sebagaimana jam pelajaran yang biasa.\r\n										</li>\r\n											<li>Fokuskan pikiran <br>\r\n											Ketika mengikuti perkuliahan online sebaiknya kamu benar-benar memfokuskan pikiran. Anggaplah bahwa jam belajar online sama seperti kamu belajar secara konvensional. Matikan notifikasi dari aplikasi-aplikasi lain.\r\n										</li>\r\n											<li>Kuasai Penggunaan Learning Management System yang disediakan kampus <br>\r\n											Dalam pembelajaran online, mahasiswa tidak akan bertemu tatap muka baik dengan dosen maupun dengan rekan-rekan yang lain di ruang kelas. Dalam Pembelajaran Online pengganti dari ruang kelas konvensional dikenal sebagai Learning Management System. Di sana sistem perkuliahan akan berjalan; mulai dari mengisi daftar hadir kuliah, menyaksikan video pembelajaran, membaca materi pelajaran, mengikuti ujian dan lain sebagainya dilakukan di sini.\r\n										</li>\r\n										</ul>\r\n									</p>\r\n									<p>Begitulah tips belajar online yang bisa kamu praktikan agar belajar mu semakin nyaman.</p>'),
(7, 'Tips Mendapat Teman di Kelas Online', 1612250603, 'Admin', 'pic2.jpg', '<p>Sebagai penutup, jalinlah pertemanan yang baik dan sehat dengan teman yang kamu peroleh di Kelas Online.</p>', '<p>Mendapat teman kuliah adalah hal yang menyenangkan saat kita menempuh pendidikan tinggi. Setiap kerja kelompok, atau sekedar sebagai teman bercerita pasti amat menyenengkan jika memiliki teman baik bukan? Nah Pada perkuliahan konvensional, kita akan mudah mendapat teman karena hampir setiap kelas berlangsung akan berjumpa secara tatap muka dengan mahasiswa yang lain. Lalu, bagaimana dengan di kelas online?</p>\r\n									<p>Berikut kami rangkum empat tips agar kamu bisa mendapat banyak teman saat sekolah jarak jauh.</p>\r\n									<p>\r\n										<ul class=\"ml-4\">\r\n											<li>\r\n											Memulai dengan mengisi room perkenalan di LMS <br>\r\n											Pada kelas online, kamu akan lebih banyak terlibat aktivitas pembelajaran dalam Learning Management System . Di sini disediakan ruang maya untuk saling berkenalan antara pelajar\r\n											</li>\r\n											<li>Selalu mulai dengan sapaan jika memasuki room kuliah<br>\r\n											Saat masuk ke room kuliah, biasakan diri untuk menyapa teman-teman yang mengambil Kelas Online yang sama. Sapaan ringan seperti itu akan terasa kamu sedang belajar bersama dengan orang-orang lain dan tidak dengan robot. Kamu bisa memulai sapaan dan sedikit percakan ringan di room kuliah tentang topik kelas pada hari itu.\r\n										</li>\r\n											<li>Aktif terlibat dalam diskusi <br>\r\n											Aktiflah selalu ketika dosen memberikan ruang diskusi mengenai satu topik. Diskusi yang baik berjalan secara konstruktif antar mahasiswa. Nah agar kamu dapat berdiskusi dengan baik, kamu perlu selalu siap dengan mata kuliah yang menjadi pokok bahasan. Oleh karena itu, kamu perlu mempelajari dasar-dasarnya dari sumber yang tersedia di internet. \r\n										</li>\r\n											<li>Patuhi etika berkomunikasi di dunia maya <br>\r\n											Pahamilah etika dalam berkomunikasi di dunia maya. Pelajari juga budaya masing-masing teman-teman yang mengambil kelas bersama mu, karena terkadang ada hal yang menurutmu cara berkomunikasi yang baik namun tidak baik menurut teman mu.\r\n										</li>\r\n										</ul>\r\n									</p>\r\n									<p>Sebagai penutup, jalinlah pertemanan yang baik dan sehat dengan teman yang kamu peroleh di Kelas Online.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `position` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `position`, `image`, `password`, `status`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Andez', 'andezapriansyah@gmail.com', '08982136561', 'Pancoran', 'Dosen', 'default.jpg', '$2y$10$8YdyS7WqIt6XQmXPUSIcQuwJ.Rp2hMvP23um//GFE/8LMqcPLf1NW', 0, 1, 1, 1609210841),
(11, 'Rizki', 'rizki@gmail.com', '', '', '', 'default.jpg', '$2y$10$FgIWCvLYocwtaoOe9a4uuuOE7Jru7T2h/JoebkwdlAsfnXLdW9S.e', 0, 2, 1, 1612236908);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(9, 1, 3),
(19, 1, 8),
(20, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Management'),
(8, 'Arsip');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/administrator', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'admin/user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'admin/user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'admin/management', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'admin/management/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/administrator/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'admin/user/changepassword', 'fas fa-fw fa-key', 1),
(13, 8, 'Blog', 'admin/blog', 'fas fa-fw fa-book', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(4, 'andezapriansyah84@gmail.com', '6OD/rYOlgI0k6r7LQmjxBqwFpwGw6e9XReXSoH0IOhE=', 1609212526);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

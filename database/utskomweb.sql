-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3360
-- Waktu pembuatan: 23 Okt 2024 pada 06.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utskomweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `h2` varchar(100) DEFAULT NULL,
  `p1` varchar(500) DEFAULT NULL,
  `h51` varchar(50) DEFAULT NULL,
  `p2` varchar(500) DEFAULT NULL,
  `h52` varchar(100) DEFAULT NULL,
  `p3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`h2`, `p1`, `h51`, `p2`, `h52`, `p3`) VALUES
('I am a Passionate Cyber Security Developer', 'Obviously, I am a Cyber Security Developer. With over 7 years of experience, I specialize in securing applications, networks, and data. Experienced with all stages of the security lifecycle, from penetration testing to implementing encryption protocols. I focus on developing robust security frameworks to protect systems from evolving cyber threats..', 'smart work', 'A part of the team that has secured enterprise-level systems by performing vulnerability assessments, penetration tests, and security audits. I’ve been part of a team responsible for identifying risks and mitigating cyber threats effectively.', 'modern work', 'I\'ve worked with a wide range of technologies, including firewalls, encryption algorithms, intrusion detection systems, and threat monitoring tools. One of my favorite characteristics of an employer is their commitment to fostering a security-focused culture for their teams.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `best_table`
--

CREATE TABLE `best_table` (
  `id` int(11) NOT NULL,
  `best1` varchar(20) DEFAULT NULL,
  `best2` varchar(20) DEFAULT NULL,
  `best3` varchar(20) DEFAULT NULL,
  `best4` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `best_table`
--

INSERT INTO `best_table` (`id`, `best1`, `best2`, `best3`, `best4`) VALUES
(1, 'Years Experience', 'Projects Done', 'Happy Clients', 'Get Awards'),
(2, 'Years Experience', 'Projects Done', 'Happy Clients', 'Get Awards');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `small_header` varchar(10) DEFAULT NULL,
  `main_header` varchar(30) DEFAULT NULL,
  `submit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`small_header`, `main_header`, `submit`) VALUES
('Contact', 'Get in Touch', 'Submit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `dsc` varchar(300) DEFAULT NULL,
  `rsvp` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `addr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`dsc`, `rsvp`, `email`, `addr`) VALUES
('I\'ve been working as web developer for the past two years, and have experience in multiple frameworks.', '0812-1199-2786', 'gathan.ghifarirachwiyono@student.upj.ac.id', 'Jalan Mujair VI, Bambu Apus, Pamulang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header_testimonial_section`
--

CREATE TABLE `header_testimonial_section` (
  `small_header` varchar(20) DEFAULT NULL,
  `main_header` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `header_testimonial_section`
--

INSERT INTO `header_testimonial_section` (`small_header`, `main_header`) VALUES
('Testimonial', 'What They Say');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero_home`
--

CREATE TABLE `hero_home` (
  `h1` varchar(100) DEFAULT NULL,
  `caller_name` varchar(10) DEFAULT NULL,
  `p` varchar(200) DEFAULT NULL,
  `btn_1` varchar(20) DEFAULT NULL,
  `btn_2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hero_home`
--

INSERT INTO `hero_home` (`h1`, `caller_name`, `p`, `btn_1`, `btn_2`) VALUES
('Hey! I am Gathan', 'Ghifari', 'I am a Full-Stack Web Developer with extensive experience of over 4 years. My expertise is in creating Network Design, Cyber Security, and Automation.', 'Download CV', 'Hire Me');

-- --------------------------------------------------------

--
-- Struktur dari tabel `navbar`
--

CREATE TABLE `navbar` (
  `navbar_1` varchar(20) DEFAULT NULL,
  `navbar_2` varchar(20) DEFAULT NULL,
  `navbar_3` varchar(20) DEFAULT NULL,
  `navbar_4` varchar(20) DEFAULT NULL,
  `navbar_5` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `navbar`
--

INSERT INTO `navbar` (`navbar_1`, `navbar_2`, `navbar_3`, `navbar_4`, `navbar_5`) VALUES
('Home', 'Get to Know Me', 'Skills', 'Projects', 'Contact');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `header2` varchar(20) DEFAULT NULL,
  `dsc` varchar(300) DEFAULT NULL,
  `skills` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id`, `header2`, `dsc`, `skills`) VALUES
(1, 'I am expert in', 'I\'ve created and updated websites for many different clients.I worked with multiple CMS including WordPress, Joomla, and Drupal, as well as created my own custom website management system in Node.js.', 'Python'),
(2, NULL, NULL, 'C/C++'),
(3, NULL, NULL, 'HTML'),
(4, NULL, NULL, 'CSS'),
(5, NULL, NULL, 'JS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id_person` int(11) NOT NULL,
  `person_name` varchar(20) DEFAULT NULL,
  `occupation` varchar(40) DEFAULT NULL,
  `txt` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id_person`, `person_name`, `occupation`, `txt`) VALUES
(0, 'Prio Handoky', 'Lecturer At XYZ University', 'I\'ve had the pleasure of working with Gathan Ghifari Rachwiyono for several projects, and his dedication and skillset are simply outstanding. Gathan has a rare ability to blend technical expertise with creative problem-solving, which makes him an invaluable asset to any team. His attention to detail and ability to deliver high-quality results under tight deadlines have consistently impressed me. Whether it\'s full-stack development or tackling complex automation challenges, Gathan always exceeds expectations.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `best_table`
--
ALTER TABLE `best_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_person`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `best_table`
--
ALTER TABLE `best_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

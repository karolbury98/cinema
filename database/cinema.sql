-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Cze 2020, 13:55
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cinema`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `movies`
--

CREATE TABLE `movies` (
  `id_movie` int(11) NOT NULL,
  `title` text NOT NULL,
  `day` int(11) NOT NULL,
  `time` text NOT NULL,
  `id_room` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `length` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `movies`
--

INSERT INTO `movies` (`id_movie`, `title`, `day`, `time`, `id_room`, `image`, `description`, `length`) VALUES
(1, 'Gran Torino', 2, '19:00', 2, 'img/repertuar/movie1.jpg', 'Walt Kowalski to emerytowany weteran żyjący we własnym poukładanym świecie. Jego spokój zostaje zburzony przez nowych sąsiadów z Azji, których syn spróbuje ukraść mu ulubione auto.', '1 godz. 56 min.'),
(2, 'Joker', 5, '21:00', 1, 'img/repertuar/movie2.jpg', 'Strudzony życiem komik popada w obłęd i staje się psychopatycznym mordercą.', '2 godz. 2 min.'),
(4, 'Gran Torino', 5, '20:30', 2, 'img/repertuar/movie1.jpg', 'Walt Kowalski to emerytowany weteran żyjący we własnym poukładanym świecie. Jego spokój zostaje zburzony przez nowych sąsiadów z Azji, których syn spróbuje ukraść mu ulubione auto.', '1 godz. 56 min.'),
(6, 'Balon', 1, '16:30', 2, 'img/repertuar/movie3.jpg', 'Dwie żyjące w NRD rodziny wspólnymi siłami postanawiają zbudować balon, którym polecą na Zachód.', '2 godz. 5 min.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prices`
--

CREATE TABLE `prices` (
  `id_price` int(11) NOT NULL,
  `type` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `prices`
--

INSERT INTO `prices` (`id_price`, `type`, `price`) VALUES
(1, 'Bilet normalny', 18),
(2, 'Bilet ulgowy', 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `row` int(11) NOT NULL,
  `seat` int(11) NOT NULL,
  `time_res` timestamp NOT NULL DEFAULT current_timestamp(),
  `number` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `reservations`
--

INSERT INTO `reservations` (`id_reservation`, `id_movie`, `row`, `seat`, `time_res`, `number`, `name`, `surname`, `phone`, `email`) VALUES
(7, 1, 1, 5, '2020-05-10 07:02:51', 1, 'Jan', 'Kowalski', 123123123, 'jank@gmail.com'),
(8, 1, 9, 6, '2020-05-10 07:06:24', 2, 'Karol', 'Kowalski', 987654332, 'karolkowalski@wp.pl'),
(9, 1, 7, 7, '2020-05-10 07:21:24', 3, 'Michał', 'Nowak', 754234753, 'michu@onet.pl'),
(10, 1, 7, 8, '2020-05-10 07:21:24', 3, 'Michał', 'Nowak', 754234753, 'michu@onet.pl'),
(11, 1, 9, 13, '2020-05-13 07:38:03', 4, 'Piotr', 'Piotrowski', 433543543, 'ppiotrowski@wp.pl'),
(12, 1, 9, 2, '2020-05-14 09:52:14', 5, 'Piotr', 'Kowalski', 123123123, 'pkowalski@onet.pl'),
(14, 2, 3, 4, '2020-06-10 10:19:24', 6, 'Jacek', 'Nowak', 123123123, 'jacekkkk@wp.pl'),
(15, 1, 9, 12, '2020-06-10 14:34:14', 7, 'Piotr', 'Nowacki', 123123123, 'piotr123@gmail.com'),
(33, 1, 9, 11, '2020-06-12 08:54:36', 8, 'Artur', 'Boruc', 123123123, 'karolbury98@interia.pl'),
(34, 1, 9, 10, '2020-06-12 08:55:57', 9, 'Jan', 'Nowak', 123123123, 'karolbury98@gmail.com'),
(35, 4, 9, 6, '2020-06-12 09:00:35', 10, 'Jan', 'Nowak', 123123123, 'jnowak981@wp.pl'),
(37, 6, 9, 7, '2020-06-12 11:54:46', 11, 'Jerzy', 'Dudek', 123456789, 'jnowak981@wp.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rooms`
--

CREATE TABLE `rooms` (
  `id_room` int(11) NOT NULL,
  `name` text NOT NULL,
  `rows_number` int(11) NOT NULL,
  `seats_per_row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rooms`
--

INSERT INTO `rooms` (`id_room`, `name`, `rows_number`, `seats_per_row`) VALUES
(1, 'Sala nr 1', 8, 10),
(2, 'Sala nr 2', 9, 13);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `trailers`
--

CREATE TABLE `trailers` (
  `id_trailer` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `length` text NOT NULL,
  `premiere_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `trailers`
--

INSERT INTO `trailers` (`id_trailer`, `title`, `image`, `description`, `length`, `premiere_date`) VALUES
(1, 'Brazylijczycy', 'img/zapowiedzi/movie1.jpg', 'W małym węgierskim mieście rozgrywa się turniej piłki nożnej. Po raz pierwszy bierze w nim udział zespół złożony z zawodników cygańskiego pochodzenia.', '1 godz. 45 min.', '30.06.2020'),
(2, 'PETTSON I FINDUS - WIELKA WYPROWADZKA', 'img/zapowiedzi/movie2.jpg', 'Mały kot Findus zaczyna dorastać i wszystko się zmienia. Początkowo chce tylko większego łóżka, ale wkrótce potem wpada na pomysł wyprowadzki od swojego opiekuna Pettsona!', '1 godz. 21 min.', '29.07.2020');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indeksy dla tabeli `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id_price`);

--
-- Indeksy dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Indeksy dla tabeli `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_room`);

--
-- Indeksy dla tabeli `trailers`
--
ALTER TABLE `trailers`
  ADD PRIMARY KEY (`id_trailer`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `prices`
--
ALTER TABLE `prices`
  MODIFY `id_price` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT dla tabeli `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `trailers`
--
ALTER TABLE `trailers`
  MODIFY `id_trailer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

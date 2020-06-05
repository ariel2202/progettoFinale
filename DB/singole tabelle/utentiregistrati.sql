-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 05, 2020 alle 23:03
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strumentimusicali`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utentiregistrati`
--

CREATE TABLE `utentiregistrati` (
  `email` varchar(50) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utentiregistrati`
--

INSERT INTO `utentiregistrati` (`email`, `nome`, `cognome`, `pass`) VALUES
('alex@gmail.com', 'Alessandro', 'Del Piero', 'alex'),
('arielpapy@hotmail.com', 'Ariel', 'Huaycho', 'ariel'),
('gigi@gmail.com', 'Gianluigi', 'Buffon', 'gigi1');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utentiregistrati`
--
ALTER TABLE `utentiregistrati`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

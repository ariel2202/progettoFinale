-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 05, 2020 alle 23:04
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
-- Struttura della tabella `chitarre`
--

CREATE TABLE `chitarre` (
  `codiceChitarra` varchar(4) NOT NULL,
  `modello` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `anno` int(11) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `immagine` text NOT NULL,
  `descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `chitarre`
--

INSERT INTO `chitarre` (`codiceChitarra`, `modello`, `marca`, `anno`, `prezzo`, `immagine`, `descrizione`) VALUES
('AAAA', 'SG', 'GIBSON', 1964, 20000, 'http://localhost/progettoFinale/img/sg1.jpg', 'Come tutte le chitarre VOS della Historic Collection questa è realizzata a mano all\'interno dello stabilimento Gibson Custom Shop. Le tecniche costruittive, la selezione dei materiali, nonchè le specifiche tecniche ed i dettagli estetici sono fedeli al rispettivo anno di produzione. Infine uno speciale trattamento chimico aggiunge alla vernice alla nitro cellulosa e all\'hardware una patina per un look \"gentilmente\" vintage. Include astuccio rigido Gibson Custom Brown Lifton Hardshell Case e certificato d\'autenticità.'),
('BBBB', 'Explorer', 'Epiphone', 1984, 120000, 'http://localhost/progettoFinale/img/explorer.jpg', 'La 1984 Explorer EX è il ritorno della \"1984\" con una forma classica che si distingue sul palco. Originariamente introdotta nel 1958, il body dalla forma radicale e futuristica della Explorer è stato adottato da allora come lo strumento preferito dai chitarristi hard rock e metal. Con un nuovo ed elegante aggiornamento del design classico abbinato a pickup EMG ad elevato guadagno, la \"1984\" è una Explorer completamente nuova.'),
('CCCC', 'Stratocaster', 'Fender', 1950, 600000, 'http://localhost/progettoFinale/img/fender.jpg', 'Per i musicisti alla ricerca dello stile e del suono dell\'età dell\'oro Fender, è stata creata la Vintera \'50s Stratocaster. Dotata delle ambite caratteristiche che hanno definito il decennio, compresi un profilo del manico e le meccaniche fedeli alle specifiche dell\'epoca e dei pickup con una nuova sonorizzazione, questa chitarra ha tutta la melodiosità e l\'articolazione che hanno contribuito a fare della Stratocaster una leggenda. Per offrire un timbro vintage autentico, è stato ricreato il trio di pickup Stratocaster single-coil in modo da ottenere un suono più simile agli originali. Cristallini e squillanti, presentano il timbro brillante e articolato che ha costruito la reputazione di Fender. Il manico con profilo a V morbido ha una tastiera in acero con raggio di curvatura da 7,25\" con 21 tasti vintage che offre al musicista un feel classico. Un tremolo sincronizzato a sei punti e le meccaniche vintage offrono un look fedele all\'epoca, prestazioni affidabilissime e stabilità dell\'accordatura. Altre caratteristiche comprendono i bottoni vintage per la traciolla, il selettore dei pickup a cinque posizioni e la tradizionale disposizione dei controlli Strat.'),
('EEEE', 'SE CUSTOM', 'PRS', 1985, 40000, 'http://localhost/progettoFinale/img/prs.jpg', 'La PRS SE Custom 24 celebra il 25° anniversario offrendo tutte le caratteristiche del modello di punta di successo che Paul Reed Smith portò nella sua prima fiera nel 1985.\r\nCon un prezzo estremamente competitivo e, per qualità, difficilmente paragonabile a modelli di pari fascia di altre rinomate marche, la 25° Anniversario presenta caratteristiche uniche.\r\nLa chitarra ha il corpo in mogano con un top, versione flat, in acero \"quilted\" elegante e bello, mentre il manico in acero, incollato e formato \"Wide Thin\", offre una eccezionale suonabilità con la sua tastiera in palissandro, abbellita in questa speciale versione dagli \"Anniversary Birds\".\r\nSpeciali i pickups: al manico un SE Vintage Bass Humbucker e al ponte un SE HFS Treble Humbucker, potenti ma equilibrati nei timbri, ideali per ogni genere, dal Rock al Blues, al Pop o Metal.\r\nLa PRS SE Custom 24 30° Anniversario è equipaggiata con il Tremolo PRS e le meccaniche Die Cast PRS SE.'),
('FFFF', 'Les Paul', 'Gibson', 1959, 50000, 'http://localhost/progettoFinale/img/deluxe.jpg', 'Il 1959 è considerato l\'anno più importante per le chitarre elettriche solid body Les Paul Standard della metà del secolo. All\'inizio un fallimento commerciale, il modello fu infine adottato da alcuni dei più grandi chitarristi del mondo: Jimmy Page, Duane Allman, Mike Bloomfield, Keith Richards, Eric Clapton e Billy Gibbons, solo per citarne alcuni. La rarità e l\'associazione a celebrità di questo modello portò il valore dei modelli originali a livelli stratosferici. La Les Paul Standard Gibson Custom \'59 è una replica accurata di queste chitarre di alto valore, resa così dettagliatamente che persino la composizione chimica delle parti è stata scientificamente esaminata e riprogettata, e questo è solo un piccolo esempio. Musicalmente, visivamente e dal punto di vista tattile, possedere una Les Paul Standard Gibson Custom Historic \'59 è come possedere un\'inestimabile originale. Disponibile in quattro splendide varianti di sunburst nelle finiture Gloss o VOS'),
('GGGG', 'JEM7VB', 'Ibanez', 2012, 25000, 'http://localhost/progettoFinale/img/ibanez.jpg', 'Steve Vai è uno dei pochi chitarristi universalmente riconosciuto come uno che ha cambiato il modo di pensare su ciò che una chitarra può realmente fare. La sue chitarre Ibanez non sono diverse: iconica, sublime, degna di ammirazione e oltraggiosa. I modelli Ibanez della serie JEM sono pionieri in un mondo di imitatori - non c\'è niente come loro. La serie Ibanez JEM / UV è uno strumento spettacolare che dispone di un corpo sagomato in Ontano e un manico 5 pezzi acero e noce bolt-on che fornisce un facile accesso a tutti i registri. Una tastiera in acero 24 tasti ornata con un colorato \"Albero della Vita\" intarsio ed ha il profilo ad alta velocità JEM Premium che dà a Steve Vai la suonabilità di cui ha bisogno.'),
('HHHH', 'AS 1FM LB', 'LTD', 2018, 60000, 'http://localhost/progettoFinale/img/ltda.jpg', 'Il fruttuoso campo di chitarre che è LTD ha prodotto un nuovo modello esclusivo: la LTD AS-1 FM LB. È il fratellino divertente ed economico dell\'ESP Alex Skolnick Signature. Questa chitarra elettrica è stata modellata sul famoso modello ESP Eclipse e successivamente è stata completamente adattata ai desideri e alle specifiche del chitarrista Testament. La LTD AS-1 è disponibile in due fantastici colori: Silver Sunburst e questa meravigliosa versione Lemon Burst.'),
('JJJJ', 'custom', 'PRS', 2010, 70000, 'http://localhost/progettoFinale/img/prs1.jpg', '');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `chitarre`
--
ALTER TABLE `chitarre`
  ADD PRIMARY KEY (`codiceChitarra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Ápr 04. 11:11
-- Kiszolgáló verziója: 10.4.10-MariaDB
-- PHP verzió: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `2020_04_03`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nyelvek`
--

CREATE TABLE `nyelvek` (
  `id` int(11) NOT NULL,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `leiras` text COLLATE utf8_hungarian_ci NOT NULL,
  `pont` int(11) NOT NULL,
  `megjelenites` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `nyelvek`
--

INSERT INTO `nyelvek` (`id`, `nev`, `leiras`, `pont`, `megjelenites`) VALUES
(1, 'C', '\r\nA C egy általános célú programozási nyelv, melyet Dennis Ritchie fejlesztett ki Ken Thompson segítségével 1969 és 1973 között a UNIX rendszerekre AT&T Bell Labs-nál.[2] Idővel jóformán minden operációs rendszerre készítettek C fordítóprogramot, és a legnépszerűbb programozási nyelvek egyikévé vált. Rendszerprogramozáshoz és felhasználói programok készítéséhez egyaránt jól használható. Az oktatásban és a számítógép-tudományban is jelentős szerepe van.     ', 91, 0),
(2, 'Java', '\r\nA Java általános célú, objektumorientált programozási nyelv, amelyet a Sun Microsystems fejlesztett a ’90-es évek elejétől kezdve egészen 2009-ig, amikor a céget felvásárolta az Oracle. 2011-ben a Java 1.7-es verzióját az új tulajdonos gondozásában adták ki.\r\n', 99, 0),
(3, 'Python', '\r\nA Python egy általános célú, nagyon magas szintű programozási nyelv,[3] melyet Guido van Rossum holland programozó kezdett el fejleszteni 1989 végén, majd hozott nyilvánosságra 1991-ben.[4] A nyelv tervezési filozófiája az olvashatóságot és a programozói munka megkönnyítését helyezi előtérbe a futási sebességgel szemben\r\n', 97, 0),
(4, 'C++', '\r\nA C++ egy általános célú, magas szintű programozási nyelv. Támogatja a procedurális, az objektumorientált és a generikus programozást, valamint az adatabsztrakciót. Napjainkban szinte minden operációs rendszer alá létezik C++ fordító. A nyelv a C programozási nyelv hatékonyságának megőrzése mellett törekszik a könnyebben megírható, karbantartható és újrahasznosítható kód írására, ez azonban sok kompromisszummal jár, erre utal, hogy általánosan elterjedt a mid-level minősítése is, bár szigorú értelemben véve egyértelműen magas szintű.\r\n', 92, 0),
(5, 'aa', 'aa', 2, 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `nyelvek`
--
ALTER TABLE `nyelvek`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `nyelvek`
--
ALTER TABLE `nyelvek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

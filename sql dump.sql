-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 13. Jan 2015 um 08:16
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `calculi`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
`application_id` int(5) NOT NULL,
  `briefing_id` int(5) NOT NULL,
  `worker_id` int(5) NOT NULL,
  `client_id` int(10) NOT NULL,
  `estimated_price` int(6) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Daten für Tabelle `applications`
--

INSERT INTO `applications` (`application_id`, `briefing_id`, `worker_id`, `client_id`, `estimated_price`, `comment`, `status`, `created_at`) VALUES
(8, 35, 15, 14, 180, 'asdasd', 'accepted', '2015-01-13 00:45:22'),
(9, 35, 15, 14, 19980, 'SA', 'rejected', '2015-01-13 00:31:26');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `briefings`
--

CREATE TABLE IF NOT EXISTS `briefings` (
`briefing_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `general_briefing` varchar(2000) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `effort` int(3) NOT NULL,
  `expire_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Daten für Tabelle `briefings`
--

INSERT INTO `briefings` (`briefing_id`, `user_id`, `general_briefing`, `country`, `state`, `status`, `effort`, `expire_at`, `created_at`) VALUES
(33, 14, '{"services":{"server":"Designer","domain":"Designer","emails":"true","statistics":"true","training":"true","advertising":"true"},"functions":{"subfunction":["Mehrsprachigkeit","Terminkalender","Buchungssystem","E-mail Newsletter","Bildergallerie","Kontaktformular"],"cms":"true","platform":["Blog"],"accessibility":"false","mobile":"true"},"content":{"subpages":["Startseite","Impressum","Portfolio"],"text":"Designer erhu00e4lt fertigen Text","grafics":"Designer erstellt individuelle Grafiken"},"design":{"concept":"Designer erstellt individuelles Design","revisions":"3","characteristics":"edel, seriu00f6s, teuer, einzigartig, limitiert","positivereference":"http://www.gute-beispielseite.at","negativereference":"http://www.schlechte-beispielseite.at"},"general":{"name":"Max Mustermann","company":"Firma GmbH","website":"http://company-site.com","country":"Deutschland","state":"Baden-Wu00fcrttemberg","description":"Unser Unternehmen befasst sich mit der...","branche":"IT","employees":"1","comment":"Mir ist besonders wichtig, dass..."}}', 'Österreich', 'Wien', 'active', 420, '2015-01-19 20:46:13', '2015-01-12 20:46:13'),
(34, 14, '{"services":{"server":"Designer","domain":"Designer","emails":"true","statistics":"true","training":"true","advertising":"true"},"functions":{"subfunction":["Mehrsprachigkeit","Terminkalender","Buchungssystem","E-mail Newsletter","Bildergallerie","Kontaktformular"],"cms":"true","platform":["Blog"],"accessibility":"false","mobile":"true"},"content":{"subpages":["Startseite","Impressum","Portfolio"],"text":"Designer erhu00e4lt fertigen Text","grafics":"Designer erstellt individuelle Grafiken"},"design":{"concept":"Designer erstellt individuelles Design","revisions":"3","characteristics":"edel, seriu00f6s, teuer, einzigartig, limitiert","positivereference":"http://www.gute-beispielseite.at","negativereference":"http://www.schlechte-beispielseite.at"},"general":{"name":"Max Mustermann","company":"Firma GmbH","website":"http://company-site.com","country":"u00d6sterreich","state":"","description":"Unser Unternehmen befasst sich mit der...","branche":"IT","employees":"1","comment":"Mir ist besonders wichtig, dass..."}}', 'Österreich', 'Wien', 'active', 420, '2015-01-19 20:54:35', '2015-01-12 20:54:35'),
(35, 14, '{"services":{"server":"Designer","domain":"Designer","emails":"true","statistics":"true","training":"true","advertising":"true"},"functions":{"subfunction":["Mehrsprachigkeit","Terminkalender","Buchungssystem","E-mail Newsletter","Bildergallerie","Kontaktformular"],"cms":"true","platform":["Blog"],"accessibility":"false","mobile":"true"},"content":{"subpages":["Startseite","Impressum","Portfolio"],"text":"Designer erhu00e4lt fertigen Text","grafics":"Designer erstellt individuelle Grafiken"},"design":{"concept":"Designer erstellt individuelles Design","revisions":"3","characteristics":"edel, seriu00f6s, teuer, einzigartig, limitiert","positivereference":"http://www.gute-beispielseite.at","negativereference":"http://www.schlechte-beispielseite.at"},"general":{"name":"Max Mustermann","company":"Firma GmbHssss","website":"http://company-site.com","country":"u00d6sterreich","state":"","description":"Unser Unternehmen befasst sich mit der...","branche":"IT","employees":"1","comment":"Mir ist besonders wichtig, dass..."}}', 'Österreich', 'Wien', 'active', 420, '2015-01-19 21:15:27', '2015-01-12 21:15:27');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `featurelist`
--

CREATE TABLE IF NOT EXISTS `featurelist` (
`feature_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `points` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `featurelist`
--

INSERT INTO `featurelist` (`feature_id`, `user_id`, `title`, `description`, `points`, `created_at`) VALUES
(1, 1, 'Bessere Exportfunktion', 'Lorem Ipsum', 5, '2014-11-12 14:55:46');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`file_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(24) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Daten für Tabelle `files`
--

INSERT INTO `files` (`file_id`, `user_id`, `name`, `created_at`) VALUES
(12, 15, '2015-01-05.jpg', '2015-01-13 06:33:42'),
(13, 15, '2015-01-05.jpg', '2015-01-13 06:44:12'),
(14, 15, '1n8LdRR.jpg', '2015-01-13 07:01:05'),
(15, 15, '970239_10151768138609793', '2015-01-13 07:14:17');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `briefing_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `matches`
--

INSERT INTO `matches` (`briefing_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`notification_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` binary(1) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `notifications`
--

INSERT INTO `notifications` (`notification_id`, `user_id`, `type`, `status`, `content`, `created_at`) VALUES
(1, 1, 'info', 0x30, 'Bewerbung für Ausschreibung "" wurde angenommen.', '2014-11-12 14:54:59');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`project_id` int(5) NOT NULL,
  `worker_id` int(5) NOT NULL,
  `client_id` int(10) NOT NULL,
  `briefing_id` int(5) NOT NULL,
  `application_id` int(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `finished_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `projects`
--

INSERT INTO `projects` (`project_id`, `worker_id`, `client_id`, `briefing_id`, `application_id`, `status`, `finished_at`, `created_at`) VALUES
(7, 15, 14, 35, 8, 'working', '0000-00-00 00:00:00', '2015-01-13 00:45:22');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
`rating_id` int(5) NOT NULL,
  `project_id` int(5) NOT NULL,
  `rating_com` int(2) NOT NULL,
  `rating_speed` int(2) NOT NULL,
  `rating_cons` int(2) NOT NULL,
  `rating_des` int(2) NOT NULL,
  `rating_func` int(2) NOT NULL,
  `rating_sum` int(2) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `ratings`
--

INSERT INTO `ratings` (`rating_id`, `project_id`, `rating_com`, `rating_speed`, `rating_cons`, `rating_des`, `rating_func`, `rating_sum`, `comment`, `status`, `created_at`) VALUES
(1, 1, 7, 6, 9, 9, 6, 37, 'Lorem Ipsum...', 'active', '2014-11-12 14:53:55');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(5) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `token` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_active` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `token`, `status`, `role`, `created_at`, `last_active`) VALUES
(1, 'Test Worker', 'worker@gmail.com', '356b35fd4ede1b48159bd960c3aa0c73864c5626', '1234', 'active', 'worker', '2014-11-12 11:01:29', '2014-11-12 11:01:29'),
(2, 'Test Client', 'client@gmail.com', '81dc9bdb52d04dc20036', '1234', 'active', 'client', '2014-11-12 14:50:26', '2014-11-12 14:50:26'),
(3, 'Mase', 'Emai@asdasd.com', 'jNXSPgnU', 'ceafabf7b6edc9328931db2a1ed4dab85acf4647', 'inactive', 'worker', '2015-01-09 22:58:32', '0000-00-00 00:00:00'),
(4, 'Joel', 'jcantillo@gmail.com', '070493e11df945e88a89', '10a9c4a36fa64c792145c49edcfad9369058e1ec', 'inactive', 'worker', '2015-01-09 23:44:37', '0000-00-00 00:00:00'),
(5, 'Joel', '', 'f2df5251ce07a83d0889', '54b4959c93d77560c55551f5be9f62606f442b72', 'inactive', 'worker', '2015-01-10 00:06:37', '0000-00-00 00:00:00'),
(6, 'jcantillo', 'joecantilssslo@gmail.com', '97df9c3e6c6760a3898b76e225227f1e28e55a4b', 'ed1dc9785de1897d151f2841b47df0110693c600', 'inactive', 'worker', '2015-01-10 01:46:58', '0000-00-00 00:00:00'),
(7, 'ph', 'joecantillo@gmail.com', '356b35fd4ede1b48159bd960c3aa0c73864c5626', '3d09311db61c87dca4b7178011ea579a8b100e6d', 'inactive', 'client', '2015-01-10 13:26:10', '0000-00-00 00:00:00'),
(8, 'joel Cantillo', 'sda@asdasd.com', '356b35fd4ede1b48159bd960c3aa0c73864c5626', '282e44a11708fd283aada342bd00a6a1bdf0dda3', 'inactive', 'worker', '2015-01-11 20:00:01', '0000-00-00 00:00:00'),
(9, 'Phil', 'client@asdasd.com', '7ad9154ffe2d7c7a8263203e9598b9ca70b33cfe', '21171e3af24fd953a4ff4716c43e60ba2f584dad', 'inactive', 'client', '2015-01-12 15:55:07', '0000-00-00 00:00:00'),
(10, 'amaro andres', 'amaro@worker.com', '7706b3e92714e09d11aa584ed7019bb7d9c98a89', '81067c6f7f8833cfacfbeff38de4ada4cd4378ae', 'inactive', 'worker', '2015-01-12 18:18:44', '0000-00-00 00:00:00'),
(11, 'amaross andres', 'amaross@worker.com', 'f9d0e66d38657b25de11f4b7b96e6a39bb49ec90', '18e59506767a2163d41453bb91b617744a594e17', 'inactive', 'client', '2015-01-12 18:21:35', '0000-00-00 00:00:00'),
(12, 'amaross andresss', 'amaross@client.com', '464c3f6463f935c1fec5b3d1a3426d1d7d93e5a8', '8784e7bb08355e01665c138c760eae276c36d231', 'inactive', 'client', '2015-01-12 18:25:45', '0000-00-00 00:00:00'),
(13, 'first andresss', 'first@worker.com', '47b7057b6ec040e9fc8b14c9104728e8510dfdfc', '5a1757672ff01b4b95272f5fed65ad2caedc2213', 'inactive', 'worker', '2015-01-12 18:27:50', '0000-00-00 00:00:00'),
(14, 'second andresss', 'secont@client.com', '1bd024070c11c33d0eac02c6b42dacecd2a3033d', '9bac18dab7f6f84826165435d1c9b6db1e98b19f', 'inactive', 'client', '2015-01-12 18:37:33', '0000-00-00 00:00:00'),
(15, 'third andresss', 'third@worker.com', 'c1c31c1ecde6190e848420bfc609296bd2277416', 'af0715578e6f10f95f374c2418fcb7f9b7ae8f7c', 'inactive', 'worker', '2015-01-12 18:39:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users_meta`
--

CREATE TABLE IF NOT EXISTS `users_meta` (
  `user_id` int(5) NOT NULL,
  `public_info` varchar(2000) NOT NULL,
  `private_info` varchar(2000) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users_meta`
--

INSERT INTO `users_meta` (`user_id`, `public_info`, `private_info`, `country`, `state`) VALUES
(1, '', '{"notifications":{"new_briefing":1,"application_status":1,"project_status":1,"calculi_news":0},"bank_information":{"owner":"Philipp Doblhoff","IBAN":"AT611904300234573201","BIC":"DEUTDE6F683"}}', 'Österreich', 'Wien'),
(2, '', 'JSON', 'Österreich', 'Wien'),
(9, '', '{"notifications":{"new_briefing":1,"application_status":1,"project_status":1,"calculi_news":0},"bank_information":{"owner":"Philipp Doblhoff","IBAN":"AT611904300234573201","BIC":"DEUTDE6F683"}}', 'Österreich', 'Wien'),
(10, '', '', 'Österreich', 'Wien'),
(13, '', '', 'Österreich', 'Wien'),
(15, '{"general":{"birth":"1988","picture":"1n8LdRR.jpg"},"education":[{"institution":"SAE Institute","course":"Webdesign-Development","qualification":"Bachelor","location":"Wien","startDate":"2013","endDate":"2016"}],"references":[]}', '', 'Österreich', 'Wien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
 ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `briefings`
--
ALTER TABLE `briefings`
 ADD PRIMARY KEY (`briefing_id`);

--
-- Indexes for table `featurelist`
--
ALTER TABLE `featurelist`
 ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
 ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
MODIFY `application_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `briefings`
--
ALTER TABLE `briefings`
MODIFY `briefing_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `featurelist`
--
ALTER TABLE `featurelist`
MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `notification_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `project_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
MODIFY `rating_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Nov 2014 um 16:32
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
  `user_id` int(5) NOT NULL,
  `estimated_price` int(6) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `applications`
--

INSERT INTO `applications` (`application_id`, `briefing_id`, `user_id`, `estimated_price`, `comment`, `status`, `created_at`) VALUES
(1, 1, 1, 2000, 'Lorem Ipsum dolor', 'ausstehend', '2014-11-12 14:48:10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `briefings`
--

INSERT INTO `briefings` (`briefing_id`, `user_id`, `general_briefing`, `country`, `state`, `status`, `effort`, `expire_at`, `created_at`) VALUES
(1, 2, '[  {     "Inhalt":[     {        "Unterseiten": "Startseite, Impressum, Portfolio",      "Texterstellung":"Designer erhält fertigen Text",      "Grafikerstellung":"Designer erstellt individuelle Grafiken"   }   ],   "Funktionen":[     "Mehrsprachigkeit",   "Buchungssystem",   "Terminkalender",   "Email-Newsletter",   "Kontaktformular"   ],   "Design":[     {        "Konzept":"Designer erstellt individuelles Design",      "Eigenschaften": "edel, seriös, teuer",      "Positive Referenz": "http://www.gute-beispielseite.at",      "Negative Referenz": "http://www.schlechte-beispielseite.at"   }   ],   "Service":[     {        "Server":"Designer",      "Domain":"Kunde",      "E-mails":"ja",      "Statistiken":"ja",      "Schulung":"nein",      "Werbung":"ja"   }   ]}]', 'Österreich', 'Wien', 'active', 450, '2014-11-19 23:00:00', '2014-11-12 15:31:26');

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
  `user_id` int(5) NOT NULL,
  `briefing_id` int(5) NOT NULL,
  `application_id` int(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `price` int(6) NOT NULL,
  `finished_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `projects`
--

INSERT INTO `projects` (`project_id`, `user_id`, `briefing_id`, `application_id`, `status`, `price`, `finished_at`, `created_at`) VALUES
(1, 1, 1, 1, 'finished', 2300, '2014-11-10 23:00:00', '2014-11-04 23:00:00');

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
  `password` varchar(20) NOT NULL,
  `token` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_active` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `token`, `status`, `role`, `created_at`, `last_active`) VALUES
(1, 'Test Worker', 'worker@gmail.com', '81dc9bdb52d04dc20036', '1234', 'active', 'worker', '2014-11-12 11:01:29', '2014-11-12 11:01:29'),
(2, 'Test Client', 'client@gmail.com', '81dc9bdb52d04dc20036', '1234', 'active', 'client', '2014-11-12 14:50:26', '2014-11-12 14:50:26');

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
(1, '[  \r\n   {  \r\n      "general":[  \r\n         {  \r\n            "picture":"01_doblhoff.png",\r\n            "birth":1992,\r\n            "website":"doblhoff.at",\r\n            "description":"Placeholder for personal description"\r\n         }\r\n      ],\r\n      "social":[  \r\n         {  \r\n            "platform":"facebook",\r\n            "link":"https://www.facebook.com/profile.php?id=100006790449304"\r\n         },\r\n         {  \r\n            "platform":"twitter",\r\n            "link":"https://twitter.com"\r\n         },\r\n         {  \r\n            "platform":"google-plus",\r\n            "link":"https://plus.google.com/101637258964231067410/posts"\r\n         },\r\n         {  \r\n            "platform":"xing",\r\n            "link":"https://xing.com"\r\n         }\r\n      ],\r\n      "education":[  \r\n         {  \r\n            "date":"2013",\r\n            "location":"Wien",\r\n            "institution":"SAE",\r\n            "course":"Webdesign & Development",\r\n            "qualification":"Diplom"\r\n         },\r\n         {  \r\n            "date":"2015",\r\n            "location":"Wien",\r\n            "institution":"SAE",\r\n            "course":"Webdesign & Development",\r\n            "qualification":"Bachelor"\r\n         }\r\n      ],\r\n      "references":[  \r\n         {  \r\n            "date":"2013",\r\n            "name":"Referenz 01",\r\n            "url":"http://project.com",\r\n            "description":"Reference Description here",\r\n            "picture":"01_reference.png"\r\n         },\r\n         {  \r\n            "date":"2014",\r\n            "name":"Referenz 02",\r\n            "url":"http://project2.com",\r\n            "description":"Reference Description here",\r\n            "picture":"01_reference.png"\r\n         }\r\n      ],\r\n      "competencies":[  \r\n         "PHP",\r\n         "SQL",\r\n         "Photoshop"\r\n      ],\r\n      "skills":[  \r\n         "Disziplin",\r\n         "Pünklichkeit",\r\n         "Erfahrung"\r\n      ]\r\n   }\r\n]', '[  \r\n   {  \r\n      "notifications":[  \r\n         {  \r\n            "new_briefing":1,\r\n            "application_status":1,\r\n            "project_status":1,\r\n            "calculi_news":0\r\n         }\r\n      ],\r\n      "bank_information":[  \r\n         {  \r\n            "owner":"Philipp Doblhoff",\r\n            "IBAN":"AT611904300234573201",\r\n            "BIC":"DEUTDE6F683"\r\n         }\r\n      ]\r\n   }\r\n]', 'Österreich', 'Wien'),
(2, 'JSON', 'JSON', 'Österreich', 'Wien');

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
MODIFY `application_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `briefings`
--
ALTER TABLE `briefings`
MODIFY `briefing_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `featurelist`
--
ALTER TABLE `featurelist`
MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `notification_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `project_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
MODIFY `rating_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

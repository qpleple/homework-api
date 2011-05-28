--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `email` varchar(200) NOT NULL DEFAULT '',
  `solution` varchar(1000) NOT NULL DEFAULT '',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
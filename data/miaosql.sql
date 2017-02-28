

DROP TABLE IF EXISTS `miao_user`;

CREATE TABLE `miao_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `sex` enum('ÄÐ','Å®','±£ÃÜ') NOT NULL DEFAULT '±£ÃÜ',
  `email` varchar(50) NOT NULL,
  `face` varchar(50) NOT NULL,
  `regTime` int(10) unsigned NOT NULL,
  `activeFlag` tinyint(1) DEFAULT '0',
  `selfinfo` char(50),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
)
DROP TABLE IF EXISTS `miao_album`;
CREATE TABLE `miao_album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Uid` int(10) unsigned NOT NULL,
  `albumPath` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
)
CREATE TABLE `miao_mes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Uid` int(10) unsigned NOT NULL,
  `Ucontent` varchar(200) NOT NULL,
  `Utime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
)

DROP TABLE IF EXISTS `miao_admin`;
CREATE TABLE `miao_admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
)
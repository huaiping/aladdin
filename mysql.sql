DROP TABLE IF EXISTS  `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(300) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(24) NOT NULL,
  `pubtime` datetime NOT NULL,
  `modtime` datetime NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_download` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `sizes` varchar(10) NOT NULL,
  `license` varchar(24) NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_guestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `avator` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `reply` varchar(255) NOT NULL DEFAULT '',
  `modtime` datetime NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_links` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_membership` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `gender` varchar(6) NOT NULL DEFAULT '',
  `avator` varchar(255) NOT NULL DEFAULT '',
  `levels` varchar(1) NOT NULL DEFAULT '',
  `groups` varchar(10) NOT NULL DEFAULT '',
  `pubtime` datetime NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `summary` varchar(300) NOT NULL,
  `content` varchar(9000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(24) NOT NULL,
  `pubtime` datetime NOT NULL,
  `modtime` datetime NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_photo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_score` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xh` varchar(18) NOT NULL,
  `xm` varchar(24) NOT NULL,
  `yw` decimal(4,1) unsigned NOT NULL,
  `ywmc` varchar(4) NOT NULL DEFAULT '0',
  `sx` decimal(4,1) unsigned NOT NULL,
  `sxmc` varchar(4) NOT NULL DEFAULT '0',
  `yy` decimal(4,1) unsigned NOT NULL,
  `yymc` varchar(4) NOT NULL DEFAULT '0',
  `wl` decimal(4,1) unsigned NOT NULL,
  `wlmc` varchar(4) NOT NULL DEFAULT '0',
  `hx` decimal(4,1) unsigned NOT NULL,
  `hxmc` varchar(4) NOT NULL DEFAULT '0',
  `sw` decimal(4,1) unsigned NOT NULL,
  `swmc` varchar(4) NOT NULL DEFAULT '0',
  `lz` decimal(4,1) unsigned NOT NULL,
  `lzmc` varchar(4) NOT NULL DEFAULT '0',
  `zz` decimal(4,1) unsigned NOT NULL,
  `zzmc` varchar(4) NOT NULL DEFAULT '0',
  `ls` decimal(4,1) unsigned NOT NULL,
  `lsmc` varchar(4) NOT NULL DEFAULT '0',
  `dl` decimal(4,1) unsigned NOT NULL,
  `dlmc` varchar(4) NOT NULL DEFAULT '0',
  `wz` decimal(4,1) unsigned NOT NULL,
  `wzmc` varchar(4) NOT NULL DEFAULT '0',
  `zf` decimal(4,1) NOT NULL,
  `bm` varchar(2) NOT NULL DEFAULT '0',
  `jm` varchar(4) NOT NULL DEFAULT '0',
  `bj` varchar(2) NOT NULL,
  `item` varchar(60) NOT NULL,
  `sfzh` varchar(18) NOT NULL DEFAULT '',
  `bz` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_survey` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xh` varchar(10) NOT NULL,
  `xm` varchar(12) NOT NULL,
  `yw` varchar(3) NOT NULL,
  `sx` varchar(3) NOT NULL,
  `yy` varchar(3) NOT NULL,
  `wl` varchar(3) NOT NULL,
  `hx` varchar(3) NOT NULL,
  `sw` varchar(3) NOT NULL,
  `zz` varchar(3) NOT NULL,
  `ls` varchar(3) NOT NULL,
  `dl` varchar(3) NOT NULL,
  `message` varchar(300) NOT NULL,
  `timestamp` datetime NOT NULL,
  `bj` int(4) NOT NULL,
  `survey` int(4) NOT NULL,
  `memo` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_video` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT '',
  `pubtime` datetime NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

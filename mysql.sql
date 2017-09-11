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
  `sid` varchar(255) NOT NULL,
  `content` varchar(300) NOT NULL,
  `author` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_download` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `sizes` varchar(10) NOT NULL,
  `license` varchar(24) NOT NULL,
  `stars` varchar(15) NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_exam` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `pattern` varchar(24) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_guestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `reply` varchar(255) NOT NULL,
  `modtime` datetime NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_membership` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `groups` varchar(10) NOT NULL,
  `articles` varchar(1) NOT NULL,
  `albums` varchar(1) NOT NULL,
  `files` varchar(1) NOT NULL,
  `messages` varchar(1) NOT NULL,
  `videos` varchar(1) NOT NULL,
  `links` varchar(1) NOT NULL,
  `survey` varchar(1) NOT NULL,
  `exams` varchar(1) NOT NULL,
  `salary` varchar(1) NOT NULL,
  `repairs` varchar(1) NOT NULL,
  `pubtime` datetime NOT NULL,
  `beans` int(10) NOT NULL,
  `status` varchar(8) NOT NULL,
  `memo` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_score` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xh` varchar(18) NOT NULL,
  `xm` varchar(24) NOT NULL,
  `yw` decimal(4,1) unsigned NOT NULL,
  `ywmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `sx` decimal(4,1) unsigned NOT NULL,
  `sxmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `yy` decimal(4,1) unsigned NOT NULL,
  `yymc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `wl` decimal(4,1) unsigned NOT NULL,
  `wlmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `hx` decimal(4,1) unsigned NOT NULL,
  `hxmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `sw` decimal(4,1) unsigned NOT NULL,
  `swmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `lz` decimal(4,1) unsigned NOT NULL,
  `lzmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `zz` decimal(4,1) unsigned NOT NULL,
  `zzmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `ls` decimal(4,1) unsigned NOT NULL,
  `lsmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `dl` decimal(4,1) unsigned NOT NULL,
  `dlmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `wz` decimal(4,1) unsigned NOT NULL,
  `wzmc` smallint(4) unsigned NOT NULL DEFAULT '0',
  `zf` decimal(4,1) NOT NULL,
  `bm` smallint(3) unsigned NOT NULL,
  `jm` smallint(4) NOT NULL,
  `bj` varchar(2) NOT NULL,
  `item` varchar(60) NOT NULL,
  `sfzh` varchar(18) NOT NULL DEFAULT '',
  `bz` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_salary` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bh` varchar(10) NOT NULL,
  `xm` varchar(12) NOT NULL,
  `gwgz` decimal(4,2) unsigned NOT NULL,
  `tgjt` decimal(4,2) unsigned NOT NULL,
  `xjgz` decimal(4,2) unsigned NOT NULL,
  `shbz` decimal(4,2) unsigned NOT NULL,
  `bfzsgz` decimal(4,2) unsigned NOT NULL,
  `jyjt` decimal(4,2) unsigned NOT NULL,
  `jxgz70` decimal(4,2) unsigned NOT NULL,
  `jxgz30` decimal(4,2) unsigned NOT NULL,
  `wsf` decimal(4,2) unsigned NOT NULL,
  `gzjs` decimal(4,2) unsigned NOT NULL,
  `yfhj` decimal(4,2) unsigned NOT NULL,
  `sds` decimal(4,2) unsigned NOT NULL,
  `fz` decimal(4,2) unsigned NOT NULL,
  `hf` decimal(4,2) unsigned NOT NULL,
  `sjgz` decimal(4,2) unsigned NOT NULL,
  `zfgjj` decimal(4,2) unsigned NOT NULL,
  `df` decimal(4,2) unsigned NOT NULL,
  `sf` decimal(4,2) unsigned NOT NULL,
  `ylbx` decimal(4,2) unsigned NOT NULL,
  `yb` decimal(4,2) unsigned NOT NULL,
  `dbyb` decimal(4,2) unsigned NOT NULL,
  `kx` decimal(4,2) unsigned NOT NULL,
  `kk` decimal(4,2) unsigned NOT NULL,
  `bkf` decimal(4,2) unsigned NOT NULL,
  `jk` decimal(4,2) unsigned NOT NULL,
  `kjk` decimal(4,2) unsigned NOT NULL,
  `kdf` decimal(4,2) unsigned NOT NULL,
  `hyxf` decimal(4,2) unsigned NOT NULL,
  `kkhj` decimal(4,2) unsigned NOT NULL,
  `zdgz` decimal(4,2) unsigned NOT NULL,
  `txkkhgz` decimal(4,2) unsigned NOT NULL,
  `bfzz` decimal(4,2) unsigned NOT NULL,
  `syjljxgz` decimal(4,2) unsigned NOT NULL,
  `sypggz` decimal(4,2) unsigned NOT NULL,
  `qmpg` decimal(4,2) unsigned NOT NULL,
  `gkjx` decimal(4,2) unsigned NOT NULL,
  `bukf` decimal(4,2) unsigned NOT NULL,
  `gsdb` decimal(4,2) unsigned NOT NULL,
  `ykbz` decimal(4,2) unsigned NOT NULL,
  `jsj` decimal(4,2) unsigned NOT NULL,
  `cjxqwmdwj` decimal(4,2) unsigned NOT NULL,
  `qjxqwmdwj` decimal(4,2) unsigned NOT NULL,
  `cjxqzzxjj` decimal(4,2) unsigned NOT NULL,
  `qjxqzzxjj` decimal(4,2) unsigned NOT NULL,
  `jsbz` decimal(4,2) unsigned NOT NULL,
  `gbjt` decimal(4,2) unsigned NOT NULL,
  `jkgbjt` decimal(4,2) unsigned NOT NULL,
  `sfshj` decimal(5,2) unsigned NOT NULL,
  `timestamp` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `swan_video` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

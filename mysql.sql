DROP TABLE IF EXISTS  `swan_comment`;
CREATE TABLE `swan_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(300) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(24) NOT NULL,
  `pubtime` datetime NOT NULL,
  `modtime` datetime NOT NULL,
  `status` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `swan_download`;
CREATE TABLE `swan_download` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `license` varchar(24) NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'queue',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `swan_guestbook`;
CREATE TABLE `swan_guestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `avator` varchar(255) NOT NULL,
  `pubtime` datetime NOT NULL,
  `reply` varchar(255) NOT NULL DEFAULT '',
  `modtime` datetime NOT NULL DEFAULT '2017-01-01 10:10:10',
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'queue',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `swan_links`;
CREATE TABLE `swan_links` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(9) NOT NULL DEFAULT 'queue',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `swan_membership`;
CREATE TABLE `swan_membership` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(24) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(24) NOT NULL,
  `gender` varchar(6) NOT NULL DEFAULT '',
  `avator` varchar(255) NOT NULL DEFAULT '',
  `levels` varchar(1) NOT NULL DEFAULT '',
  `groups` varchar(24) NOT NULL DEFAULT '',
  `status` varchar(12) NOT NULL DEFAULT 'queue',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `swan_news`;
CREATE TABLE `swan_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(9000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(24) NOT NULL,
  `pubtime` datetime NOT NULL,
  `modtime` datetime NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  `status` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `swan_photo`;
CREATE TABLE `swan_photo` (
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
  `status` varchar(255) NOT NULL DEFAULT 'queue',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `swan_score`;
CREATE TABLE `swan_score` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xm` varchar(24) NOT NULL,
  `xh` varchar(18) NOT NULL,
  `yw` decimal(4,1) unsigned NOT NULL,
  `ywmc` varchar(4) NOT NULL DEFAULT '',
  `sx` decimal(4,1) unsigned NOT NULL,
  `sxmc` varchar(4) NOT NULL DEFAULT '',
  `yy` decimal(4,1) unsigned NOT NULL,
  `yymc` varchar(4) NOT NULL DEFAULT '',
  `wl` decimal(4,1) unsigned NOT NULL,
  `wlmc` varchar(4) NOT NULL DEFAULT '',
  `hx` decimal(4,1) unsigned NOT NULL,
  `hxmc` varchar(4) NOT NULL DEFAULT '',
  `sw` decimal(4,1) unsigned NOT NULL,
  `swmc` varchar(4) NOT NULL DEFAULT '',
  `zz` decimal(4,1) unsigned NOT NULL,
  `zzmc` varchar(4) NOT NULL DEFAULT '',
  `ls` decimal(4,1) unsigned NOT NULL,
  `lsmc` varchar(4) NOT NULL DEFAULT '',
  `dl` decimal(4,1) unsigned NOT NULL,
  `dlmc` varchar(4) NOT NULL DEFAULT '',
  `lz` decimal(4,1) unsigned NOT NULL,
  `lzmc` varchar(4) NOT NULL DEFAULT '',
  `wz` decimal(4,1) unsigned NOT NULL,
  `wzmc` varchar(4) NOT NULL DEFAULT '',
  `zf` decimal(4,1) NOT NULL,
  `bm` char(2) NOT NULL DEFAULT '',
  `jm` varchar(4) NOT NULL DEFAULT '',
  `bj` varchar(2) NOT NULL,
  `item` varchar(60) NOT NULL,
  `sfzh` varchar(18) NOT NULL DEFAULT '',
  `bz` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `swan_video`;
CREATE TABLE `swan_video` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT '',
  `category` varchar(255) NOT NULL DEFAULT '',
  `pubtime` datetime NOT NULL DEFAULT '2015-01-01 10:10:10',
  `hits` int(10) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'queue',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

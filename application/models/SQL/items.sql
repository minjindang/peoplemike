CREATE TABLE IF NOT EXISTS `items` (
  `id` int(20) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `slug` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

Insert Into 'items' (title,text,price,slug) values ('','','','');
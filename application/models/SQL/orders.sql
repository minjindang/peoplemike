CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(20) NOT NULL auto_increment,
  `orderid` varchar(255) NOT NULL,
  `itemid` varchar(255) NOT NULL,
  `ordername` varchar(100) NOT NULL,
  `orderphone` varchar(100) NOT NULL,
  `orderemail` varchar(100) NOT NULL,
  `orderaddress` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

Insert Into 'orders' (orderid,itemid,ordername,orderphone,orderemail,orderaddress) values ('','','','','','');


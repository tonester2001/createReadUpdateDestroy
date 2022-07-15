create database YOUR_DB_NAME;

use YOUR_DB_NAME;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `about` text(280) NOT NULL,

  PRIMARY KEY  (`id`)
);

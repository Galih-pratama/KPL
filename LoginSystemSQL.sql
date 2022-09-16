CREATE DATABASE IF NOT EXISTS `loginsystem`;
USE `loginsystem`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

;
INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
	(1, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3'),
	(2, 'user', 'user@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
	(3, 'player', 'player@mail.com', '912af0dff974604f1321254ca8ff38b6');

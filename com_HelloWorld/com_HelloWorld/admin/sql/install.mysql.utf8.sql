DROP TABLE IF EXISTS `#__user`;

CREATE TABLE `#__user` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`usernm` VARCHAR(25) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__user` (`usernm`) VALUES
('poonam'),
('kishori');
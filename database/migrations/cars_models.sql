CREATE TABLE `cars_models` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`year` INT(4) UNSIGNED NOT NULL,
	`make` VARCHAR(50) NULL,
	`model` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE `U_cars_models_year_make_model` (`year`, `make`, `model`),
	INDEX `I_cars_models_year` (`year`),
	INDEX `I_cars_models_make` (`make`),
	INDEX `I_cars_models_model` (`model`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
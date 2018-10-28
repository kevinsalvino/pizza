CREATE TABLE `food_items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`cat_id` INT(11) NOT NULL,
	`size` INT(11) NOT NULL,
	`price` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`reference_number` varchar(255) NOT NULL,
	`total` INT(11) NOT NULL,
	`user_id` INT(11) NOT NULL,
	`date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL UNIQUE,
	`full name` varchar(255) NOT NULL,
	`mobile_number` varchar(15) NOT NULL UNIQUE,
	`user_type_id` INT(11) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders_items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`order_id` INT(11) NOT NULL,
	`food_item_id` INT(11) NOT NULL,
	`quantity` INT(11) NOT NULL,
	`subtotal` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `user_types` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`type` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

ALTER TABLE `food_items` ADD CONSTRAINT `food_items_fk0` FOREIGN KEY (`cat_id`) REFERENCES `categories`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`user_type_id`) REFERENCES `user_types`(`id`);

ALTER TABLE `orders_items` ADD CONSTRAINT `orders_items_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

ALTER TABLE `orders_items` ADD CONSTRAINT `orders_items_fk1` FOREIGN KEY (`food_item_id`) REFERENCES `food_items`(`id`);


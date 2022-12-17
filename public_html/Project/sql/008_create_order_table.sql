-- Create an Orders table (id, user_id, created, total_price, address, payment_method, money_received, first_name, last_name)

CREATE TABLE IF NOT EXISTS `Orders` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `total_price` DECIMAL(10,2) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `payment_method` VARCHAR(255) NOT NULL,
    `money_received` DECIMAL NOT NULL,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    Foreign Key (`user_id`) References `Users`(`id`)
)

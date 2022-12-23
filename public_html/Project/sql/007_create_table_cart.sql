/* Cart will be table-based (id, product_id, user_id, desired_quantity, unit_price, created, modified) product_id and user_id will be a composite unique key */

CREATE TABLE IF NOT EXISTS `Cart` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `product_id` INT NOT NULL,
    `user_id` INT NOT NULL,
    `desired_quantity` INT NOT NULL,
    `unit_price` DECIMAL(10,2) NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE (`product_id`, `user_id`)
)
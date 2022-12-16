-- Create an OrderItems table (id, order_id, product_id, quantity, unit_price)

CREATE TABLE IF NOT EXISTS `OrderItems` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `order_id` INT NOT NULL,
    `product_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `unit_price` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`id`)
)
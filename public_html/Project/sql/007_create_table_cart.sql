/* Cart will be table-based (id, product_id, user_id, desired_quantity, unit_price, created, modified) product_id and user_id will be a composite key */
CREATE TABLE IF NOT EXISTS  `Cart`
(
    `id`         int auto_increment not null,
    `product_id` int not null,
    `user_id` int not null,
    `desired_quantity` int default 0,
    `unit_price` double default 0,
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`, `product_id`) REFERENCES `Users`(`id`) and `Products`(`id`),
)
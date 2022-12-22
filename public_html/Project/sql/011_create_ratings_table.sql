-- Create table called Ratings (id, product_id, user_id, rating, comment, created, modified)
-- 1-5 rating
-- Text Comment (use TEXT data type in sql)

CREATE TABLE if NOT EXISTS `Ratings` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `product_id` INT NOT NULL,
    `user_id` INT NOT NULL,
    `rating` INT NOT NULL,
    `comment` TEXT NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
)
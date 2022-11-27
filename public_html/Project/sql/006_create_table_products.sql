/*Table should be called Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])*/
CREATE TABLE IF NOT EXISTS  `Products`
(
    `id`         int auto_increment not null,
    `name`      varchar(20)       not null unique,
    `description` varchar(100) default '',
    `category` varchar(20) default '',
    `stock` int default 0,
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    `unit_price` double default 0,
    `visibility` TINYINT(1) default 1,
    PRIMARY KEY (`id`)
)

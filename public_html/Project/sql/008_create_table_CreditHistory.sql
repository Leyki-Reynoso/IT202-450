CREATE TABLE IF NOT EXISTS  `CreditHistory`
(
    `id`         int auto_increment not null,
    `user_id`    int,
    `credit_diff`      int,
    `reason`     varchar(255),
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)
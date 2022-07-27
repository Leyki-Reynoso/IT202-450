CREATE TABLE IF NOT EXISTS  `CompetitionParticipants`
(
    `id`         int auto_increment not null,
    `comp_id`    int,
    `user_id`    int,
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    FOREIGN KEY (`comp_id`) REFERENCES Competitions(`id`)
)
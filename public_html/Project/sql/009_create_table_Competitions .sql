CREATE TABLE IF NOT EXISTS  `Competitions`
(
    `id`         int auto_increment not null,
    `name`    VARCHAR(50),
    `expires`      timestamp default current_timestamp,
    `current_reward`     float,
    `starting_reward`    float,
    `join_fee`   int,
    `current_participants` int,
    `min_participants` int,
    `paid_out` BOOLEAN default false,
    `did_calc` BOOLEAN default false,
    `min_score` int,
    `first_place_per` int,
    `second_place_per` int,
    `third_place_per` int,
    `cost_to_create` float,
    `created_by` int,
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`created_by`) REFERENCES Users(`id`)
)
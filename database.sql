-- users
CREATE TABLE `php_exp`.`users`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(256) NOT NULL,
    `email` VARCHAR(256) NOT NULL UNIQUE,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NULL,
    PRIMARY KEY(`id`)
) DEFAULT CHARSET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;

-- notes
CREATE TABLE `php_exp`.`notes`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(256) NOT NULL,
    `body` TEXT NOT NULL,
    `user_id` INT UNSIGNED NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NULL,
    PRIMARY KEY(`id`),
    FOREIGN KEY(`user_id`) REFERENCES `php_exp`.`users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) DEFAULT CHARSET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;

-- insert users
INSERT INTO `php_exp`.`users`(`username`, `email`)
VALUES(
    "mahdimirzaei-dev",
    "mahdimirzaei.dev@gmail.com"
),(
    "sajadspeed",
    "sajadspeed@gmail.com"
);

-- insert notes
INSERT INTO `php_exp`.`notes`(`title`, `body`, `user_id`)
VALUES(
    "first note",
    "this is first note body",
    1
),(
    "second note",
    "this is second note body",
    1
),(
    "third note",
    "this is third note body",
    2
),(
    "fourth note",
    "this is fourth note body",
    1
);

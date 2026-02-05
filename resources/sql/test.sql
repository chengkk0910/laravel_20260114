CREATE TABLE `laravel_20260128`.`students` (
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'id',
    `name` VARCHAR(20) NOT NULL DEFAULT '\"\"' COMMENT '姓名',
    `mobile` VARCHAR(20) NOT NULL DEFAULT '\"\"' COMMENT '電話',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'amy', '0911'),
    (NULL, 'amy', '0911'),
    (NULL, 'amy', '0911'),
    (NULL, 'bob', '0922');

SELECT
    *
FROM
    `students`
WHERE
    `name` = 'amy';

CREATE TABLE `laravel_20260128`.`cats` (
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'id',
    `name` VARCHAR(20) NOT NULL DEFAULT '\"\"' COMMENT '姓名',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO
    `cats` (`id`, `name`)
VALUES
    (NULL, 'apple'),
    (NULL, 'banana');

-- 2026-02-04
SELECT
    *
FROM
    `students`
WHERE
    1 = 1;

SELECT
    *
FROM
    `students`

INNER JOIN `phones` ON `students`.`id` = `phones`.`student_id`;


SELECT
    `students`.`id`,
    `students`.`name`,
    `students`.`mobile`,
    `phones`.`name`
FROM
    `students`

INNER JOIN `phones` ON `students`.`id` = `phones`.`student_id`;


SELECT
    `students`.`id`,
    `students`.`name`,
    `students`.`mobile`,
    `hobbies`.`name`
FROM
    `students`

INNER JOIN `hobbies` ON `students`.`id` = `hobbies`.`student_id`;
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
    (NULL, 'bob', '0922')
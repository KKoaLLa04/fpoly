CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`email` VARCHAR(255) NOT NULL UNIQUE,
	`name` VARCHAR(255) NOT NULL,
	`is_admin` BOOLEAN NOT NULL DEFAULT '0',
	`password` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP  NULL,
	`updated_at` TIMESTAMP  NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `spring_blocks` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`creator_id` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP  NULL,
	`updated_at` TIMESTAMP  NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `subjects` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`creator_id` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP  NULL,
	`updated_at` TIMESTAMP  NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `examinations` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`creator_id` INT NOT NULL,
	`subject_id` INT NOT NULL,
	`spring_block_id` INT NOT NULL,
	`start_date` TIMESTAMP NOT NULL,
	`order` INT NOT NULL,
	`room_code` VARCHAR(255) NOT NULL,
	`class_code` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP  NULL,
	`updated_at` TIMESTAMP  NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `subject_medias` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`creator_id` INT NOT NULL,
	`subject_id` INT NOT NULL,
	`spring_block_id` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`path_save` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP  NULL,
	`updated_at` TIMESTAMP  NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `examination_medias` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`creator_id` INT NOT NULL,
	`examination_id` INT NOT NULL,
	`subject_media_id` INT NOT NULL,
	`created_at` TIMESTAMP  NULL,
	`updated_at` TIMESTAMP  NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `examination_teachers` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`creator_id` INT NOT NULL,
	`spring_block_id` INT NOT NULL,
	`examination_id` INT NOT NULL,
	`teacher_code` VARCHAR(255) NOT NULL,
	`order` INT NOT NULL,
	`created_at` TIMESTAMP  NULL,
	`updated_at` TIMESTAMP  NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `examination_histories` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`download_id` INT NOT NULL,
	`examination_id` INT NOT NULL,
	`examination_media_id` INT NOT NULL,
	`created_at` TIMESTAMP  NULL,
	`updated_at` TIMESTAMP  NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `spring_blocks` ADD CONSTRAINT `spring_blocks_fk0` FOREIGN KEY (`creator_id`) REFERENCES `users`(`id`);

ALTER TABLE `subjects` ADD CONSTRAINT `subjects_fk0` FOREIGN KEY (`creator_id`) REFERENCES `users`(`id`);

ALTER TABLE `examinations` ADD CONSTRAINT `examinations_fk0` FOREIGN KEY (`creator_id`) REFERENCES `users`(`id`);

ALTER TABLE `examinations` ADD CONSTRAINT `examinations_fk1` FOREIGN KEY (`subject_id`) REFERENCES `subjects`(`id`);

ALTER TABLE `examinations` ADD CONSTRAINT `examinations_fk2` FOREIGN KEY (`spring_block_id`) REFERENCES `spring_blocks`(`id`);

ALTER TABLE `subject_medias` ADD CONSTRAINT `subject_medias_fk0` FOREIGN KEY (`creator_id`) REFERENCES `users`(`id`);

ALTER TABLE `subject_medias` ADD CONSTRAINT `subject_medias_fk1` FOREIGN KEY (`subject_id`) REFERENCES `subjects`(`id`);

ALTER TABLE `subject_medias` ADD CONSTRAINT `subject_medias_fk2` FOREIGN KEY (`spring_block_id`) REFERENCES `spring_blocks`(`id`);

ALTER TABLE `examination_medias` ADD CONSTRAINT `examination_medias_fk0` FOREIGN KEY (`creator_id`) REFERENCES `users`(`id`);

ALTER TABLE `examination_medias` ADD CONSTRAINT `examination_medias_fk1` FOREIGN KEY (`examination_id`) REFERENCES `examinations`(`id`);

ALTER TABLE `examination_medias` ADD CONSTRAINT `examination_medias_fk2` FOREIGN KEY (`subject_media_id`) REFERENCES `subject_medias`(`id`);

ALTER TABLE `examination_teachers` ADD CONSTRAINT `examination_teachers_fk0` FOREIGN KEY (`creator_id`) REFERENCES `users`(`id`);

ALTER TABLE `examination_teachers` ADD CONSTRAINT `examination_teachers_fk1` FOREIGN KEY (`spring_block_id`) REFERENCES `spring_blocks`(`id`);

ALTER TABLE `examination_teachers` ADD CONSTRAINT `examination_teachers_fk2` FOREIGN KEY (`examination_id`) REFERENCES `examinations`(`id`);

ALTER TABLE `examination_histories` ADD CONSTRAINT `examination_histories_fk0` FOREIGN KEY (`download_id`) REFERENCES `users`(`id`);

ALTER TABLE `examination_histories` ADD CONSTRAINT `examination_histories_fk1` FOREIGN KEY (`examination_id`) REFERENCES `examinations`(`id`);

ALTER TABLE `examination_histories` ADD CONSTRAINT `examination_histories_fk2` FOREIGN KEY (`examination_media_id`) REFERENCES `examination_medias`(`id`);
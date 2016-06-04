INSERT INTO `mydb`.`profesor` (`ime`, `prezime`) VALUES ('Petar', 'Radanovic');
INSERT INTO `mydb`.`katedra` (`godina_studija`, `skolska_godina`, `naziv`, `Profesor_id_profesora`) VALUES ('2016', '1', 'Montaza', '1');

DROP TABLE IF EXISTS `mydb`.`Administrator`;
CREATE TABLE `mydb`.`Administrator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `mydb`.`Administrator` VALUES (1,'Milutin Milankovic','wade@example.com','$2y$10$zTsVE8wovqKpHAWnBF/kU.KXRjP34dv/aD4gykg7t1YK9S2mxcVhm',NULL,NULL,NULL);



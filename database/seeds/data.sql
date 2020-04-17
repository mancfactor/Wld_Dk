/*
SQLyog Ultimate v9.51 
MySQL - 5.7.26 : Database - wld
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Data for the table `comments` */

insert ignore into `comments`(`id`,`commenter_id`,`commenter_type`,`guest_name`,`guest_email`,`commentable_type`,`commentable_id`,`comment`,`approved`,`child_id`,`created_at`,`updated_at`) values (1,'1','App\\User',NULL,NULL,'App\\Entry','1','testing comments',1,NULL,'2019-07-18 21:12:18','2019-07-18 21:12:18'),(2,'5','App\\User',NULL,NULL,'App\\Entry','1','test 2',1,NULL,'2019-07-18 21:14:02','2019-07-18 21:14:02'),(3,NULL,NULL,'Guest',NULL,'App\\Entry','1','Guest comment',1,NULL,'2019-07-19 03:14:27','2019-07-19 03:14:27'),(4,NULL,NULL,'Frank-guest',NULL,'App\\Entry','2','testing guest with no previous comments',1,NULL,'2019-07-19 03:16:13','2019-07-19 03:16:13'),(5,NULL,NULL,'test',NULL,'App\\Entry','1','works',1,NULL,'2019-08-09 19:24:37','2019-08-09 19:24:37');

/*Data for the table `contest_tag` */

insert ignore into `contest_tag`(`id`,`contest_id`,`tag_id`,`created_at`,`updated_at`) values (1,1,1,'2019-07-12 07:43:22','2019-07-12 07:43:22'),(2,2,3,'2019-07-17 21:26:55','2019-07-17 21:26:55');

/*Data for the table `contests` */

insert ignore into `contests`(`id`,`name`,`slogan`,`description`,`active`,`start_date`,`end_date`,`hashtag`,`how_it_work`,`rule`,`prize`,`view_order`,`created_at`,`updated_at`) values (1,'Contest1','Craft greatness','first contest description',1,'2019-07-01','2019-09-01','#contestOne','submit a design, get votes, craft your design','must be 18 years or older to enter','Design will be manufactured and sold on withlovedarling.com',0,'2019-07-12 07:32:14','2019-07-12 07:43:22'),(2,'test before','etstdsfsdfsdfds','eyttetet asfsafasa  asfa fasf asf,dbjhfvadskjhfvskhdvbfkhsd',1,'2019-07-17','2019-08-17','#test','hwo','rules','prizes',0,'2019-07-17 21:26:55','2019-07-17 21:26:55'),(3,'Demo1','DemoDemo10','this is the story about the contest',1,'2019-07-01','2019-10-01','#WLDdemo','how it works','rules and regulations','prizes and promtoions',0,'2019-07-17 21:43:38','2019-07-17 21:44:52');

/*Data for the table `entries` */

insert ignore into `entries`(`id`,`contest_id`,`name`,`description`,`approved`,`hashtag`,`view_order`,`created_at`,`updated_at`) values (1,1,'My Entry','This is my entry for Contest1 is the best  ... vote for me',1,'#myEntry',0,'2019-07-12 08:10:04','2019-07-12 08:12:05'),(2,1,'Entry with Pic','Entry with Pic Desc',0,'#EntryWithPic',0,'2019-07-12 08:24:17','2019-07-12 08:24:17'),(3,1,'etsteee','teteetetdfsdfsdfsdfsd',0,'ettetete',0,'2019-07-12 08:27:08','2019-07-12 08:27:08'),(4,1,'dsdfsdfsdfsdfsfsdfd','sdfsdfsdsdf',0,NULL,0,'2019-07-12 08:39:52','2019-07-12 08:39:52'),(5,1,'dsdfsdfsdfsdfsfsdfd','sdfsdfsdsdf',1,NULL,0,'2019-07-12 08:40:33','2019-07-12 08:40:33'),(6,1,'WLD Test 1','Frank test 1',0,NULL,0,'2019-07-17 21:04:51','2019-07-17 21:04:51'),(7,2,'test before','test tetetd;kgfljsdbgjbsjgbsjkb',0,NULL,0,'2019-07-17 21:28:40','2019-07-17 21:28:40'),(8,3,'Demo Entry','This is for the particular entry',0,NULL,0,'2019-07-17 21:46:30','2019-07-17 21:46:30');

/*Data for the table `entry_tag` */

insert ignore into `entry_tag`(`id`,`entry_id`,`tag_id`,`created_at`,`updated_at`) values (1,1,1,'2019-07-12 08:12:05','2019-07-12 08:12:05'),(2,3,1,'2019-07-12 08:27:08','2019-07-12 08:27:08'),(3,6,1,'2019-07-17 21:04:51','2019-07-17 21:04:51'),(4,7,2,'2019-07-17 21:28:40','2019-07-17 21:28:40'),(5,8,1,'2019-07-17 21:46:30','2019-07-17 21:46:30');

/*Data for the table `followables` */

insert ignore into `followables`(`user_id`,`followable_id`,`followable_type`,`relation`,`deleted_at`,`created_at`,`updated_at`) values (1,1,'App\\Entry','upvote',NULL,'2019-08-09 21:22:39',NULL),(4,5,'App\\Entry','upvote',NULL,'2019-08-09 21:32:07',NULL),(7,5,'App\\Entry','upvote',NULL,'2019-08-09 21:32:14',NULL);

/*Data for the table `media` */

insert ignore into `media`(`id`,`model_id`,`model_type`,`collection_name`,`name`,`file_name`,`mime_type`,`disk`,`size`,`manipulations`,`custom_properties`,`responsive_images`,`order_column`,`created_at`,`updated_at`) values (1,5,'App\\User','avatars','iot_structure_blog-600x400','iot_structure_blog-600x400.jpg','image/jpeg','public',15027,'[]','[]','[]',1,'2019-07-12 05:10:11','2019-07-12 05:10:11'),(2,6,'App\\User','avatars','odyseySHIP','odyseySHIP.png','image/png','public',290557,'[]','{\"generated_conversions\": {\"thumb\": true}}','[]',2,'2019-07-12 05:16:22','2019-07-12 05:16:22'),(4,5,'App\\Entry','entries','HEUT8187','HEUT8187.JPG','image/jpeg','public',210309,'[]','{\"generated_conversions\": {\"thumb\": true}}','[]',4,'2019-07-12 19:00:06','2019-07-12 19:00:07'),(5,1,'App\\Entry','entries','CLLI4889','CLLI4889.JPG','image/jpeg','public',60283,'[]','{\"generated_conversions\": {\"thumb\": true, \"thumb-lg\": true}}','[]',5,'2019-07-12 19:19:13','2019-07-12 19:19:14'),(11,6,'App\\Entry','entries','1B00866B12-big','1B00866B12-big.jpg','image/jpeg','public',106051,'[]','{\"generated_conversions\": {\"thumb\": true, \"thumb-lg\": true}}','[]',6,'2019-07-17 21:23:37','2019-07-17 21:23:37'),(12,7,'App\\Entry','entries','1B00952ZZ5-big','1B00952ZZ5-big.jpg','image/jpeg','public',64336,'[]','{\"generated_conversions\": {\"thumb\": true, \"thumb-lg\": true}}','[]',7,'2019-07-17 21:28:40','2019-07-17 21:28:40'),(13,8,'App\\Entry','entries','1G01449ZB5-big','1G01449ZB5-big.jpg','image/jpeg','public',56036,'[]','{\"generated_conversions\": {\"thumb\": true, \"thumb-lg\": true}}','[]',8,'2019-07-17 21:46:30','2019-07-17 21:46:30'),(14,8,'App\\Entry','entries','1G02086B12-big','1G02086B12-big.jpg','image/jpeg','public',92485,'[]','{\"generated_conversions\": {\"thumb\": true, \"thumb-lg\": true}}','[]',9,'2019-07-17 21:46:50','2019-07-17 21:46:50');

/*Data for the table `migrations` */

insert ignore into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_07_12_044048_create_media_table',2),(9,'2019_07_12_061642_create_contests_table',3),(10,'2019_07_12_061716_create_entries_table',3),(11,'2019_07_13_061413_create_tags_table',3),(12,'2018_06_30_113500_create_comments_table',4),(13,'2018_06_29_032244_create_laravel_follow_tables',5);

/*Data for the table `password_resets` */

/*Data for the table `tags` */

insert ignore into `tags`(`id`,`name`,`active`,`created_at`,`updated_at`) values (1,'necklace',1,'2019-07-12 03:42:52','2019-07-12 03:42:52'),(2,'bracelet',1,'2019-07-17 17:25:46','2019-07-17 17:25:46'),(3,'ring',1,'2019-07-17 17:25:58','2019-07-17 17:25:58');

/*Data for the table `users` */

insert ignore into `users`(`id`,`name`,`email`,`password`,`admin`,`remember_token`,`created_at`,`updated_at`) values (1,'Frank Mancina','frankmancina@gmail.com','$2y$10$FiLT5RUhGZYlNLRnFFJUU.BFuk6gtqUSYlrzC00W9FjZqc4VCEoBe',1,'MYvvn63qOlOT4GqmpbkiwqlvRxMIlADvQ9BH8pwiBxqoVWr7AS4myXCkC8lg','2019-07-12 02:55:10','2019-07-18 20:51:36'),(2,'Dan C','danc@gmail.com','$2y$10$Bwk82NbJApjzS9uRKYlze.n2.NAOo2q2ovbocHRA3NVaroYlAT48e',0,'y14HV40n9qlsRW9TfCMaW82UQCRE2fuzu3TXM4Uwc76hdde8eyowF0a1ZjNf','2019-07-12 04:09:51','2019-07-12 04:09:51'),(3,'Richard','yoyomah@gmail.com','$2y$10$Xlm2byiycYLfloKrSxiE3OztojPvOUti5LAMyPxyNzXbsRbTrTqd6',0,'APGBPdNwWPFVrjrMrN8rB1IQgSnbKIBrTo63gxCFNsOgBXhOCdRW5lcy4v9G','2019-07-12 04:24:07','2019-07-12 04:24:07'),(4,'Frank2','admin@withlovedarling.com','$2y$10$v0ZHMCpXBnk9essnK1z8.uwksv/Mu.IFp31d4IgOE7SxqifwxTJqe',0,NULL,'2019-07-12 05:05:18','2019-07-12 05:05:18'),(5,'Frank2','admin1@withlovedarling.com','$2y$10$ZGhBdZvuo6ZNo7sMydqniOKvz7cTk4Fx0t53mSZv6sPnbuF8U1wIu',0,'472aJjLxeSFO6lpVN9ihcEElY0dbWcBjnUlW5ygtMGK69sozd2mOsBWvUS6I','2019-07-12 05:10:11','2019-07-12 05:10:11'),(6,'Frank3','admin2@withlovedarling.com','$2y$10$MfDlQYouyvJx0D7Wu6yVcelQP3sjIQ90UA3mVOJkPhwn3vWPgQggG',0,'cqAD0KtGk21XHt4zMW3I6ZekuohyeLJvYlmw1n7AvL7PI9QJKIQdmosF56Fi','2019-07-12 05:16:22','2019-07-12 05:16:22'),(7,'Testing','joey@test.com','$2y$10$OpBixCfTWhBQga9d7N3nW.4gsEF70cNKkGbD91FhUyaBtZFzLBNd6',0,NULL,'2019-07-12 19:39:56','2019-07-12 19:39:56'),(8,'testbefore','before@test.com','$2y$10$E04Kkrx/efEUWOYHJEEjjetIIAfJK4gzpJ3qNjQUs9n7nEFgpSxlu',0,'G7lvXPQMcRfngmq984y31scKFNIQFQrn1Ue8KxGAELPi1hejY9nffIVuemLP','2019-07-17 21:27:31','2019-07-17 21:27:31'),(9,'Demo User','demo@wld.com','$2y$10$PWdluhGs4HYu9Ht6xIFBRuZKJlNpDTITZTZ.Rlv67yZ6XlWp6sAwC',0,'8vEhXZfJ3unraswaCRys3d2yBIEpNrFdhH5BX4XR3o2HFC281M47QM82muQw','2019-07-17 21:37:06','2019-07-17 21:37:06');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

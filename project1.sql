/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : project1

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-26 23:29:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `attachments`
-- ----------------------------
DROP TABLE IF EXISTS `attachments`;
CREATE TABLE `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `old_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_user_id` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of attachments
-- ----------------------------
INSERT INTO `attachments` VALUES ('1', '1.png', 'TxXWH-20181219173217.png', 'attachement/5/', '583741', '5', '1', null, null);
INSERT INTO `attachments` VALUES ('2', '2.png', 'qQZhu-20181219173217.png', 'attachement/5/', '591185', '5', '1', null, null);
INSERT INTO `attachments` VALUES ('3', '3.png', 'YSytl-20181219173217.png', 'attachement/5/', '560550', '5', '1', null, null);
INSERT INTO `attachments` VALUES ('4', '4.png', 'fnmvI-20181219173217.png', 'attachement/5/', '561853', '5', '1', null, null);
INSERT INTO `attachments` VALUES ('5', '8.png', 'wUJcu-20181219173217.png', 'attachement/5/', '772474', '5', '1', null, null);
INSERT INTO `attachments` VALUES ('6', '4.png', 'ucpgE-20181219173330.png', 'attachement/6/', '561853', '6', '1', null, null);
INSERT INTO `attachments` VALUES ('7', '5.png', 'H12pk-20181219173330.png', 'attachement/6/', '605037', '6', '1', null, null);
INSERT INTO `attachments` VALUES ('8', '6.png', '8mAWn-20181219173330.png', 'attachement/6/', '576809', '6', '1', null, null);

-- ----------------------------
-- Table structure for `data_users`
-- ----------------------------
DROP TABLE IF EXISTS `data_users`;
CREATE TABLE `data_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field1` int(11) DEFAULT NULL,
  `field2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field4` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `field5` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field6` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field7` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field8` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field9` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `attachment` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of data_users
-- ----------------------------
INSERT INTO `data_users` VALUES ('22', '4', 'asd', 'asd', 'asdasdsa', '2019-12-12', 'asdas', 'dasd', 'asasdas', 'dsa', 'dasdas', null, null, '2019-12-12', 'asdsadsa', null, '1', '2018-12-23 00:59:49', '2018-12-23 01:28:04', '2018-12-23 01:28:04');
INSERT INTO `data_users` VALUES ('23', '5', 'ฟหก111', 'กฟหกฟหหกฟหกฟห11', 'ฟหกฟหก1111', '2018-12-12', 'ฟหกกหฟก', 'ฟหกฟหฟหกฟหกฟห', 'ทดสอบข้อมูล', 'ฟหก', 'ฟหกฟห', null, null, '2019-12-01', 'ฟหกฟหกหฟ', null, '1', '2018-12-23 01:27:52', '2018-12-23 02:07:11', null);
INSERT INTO `data_users` VALUES ('24', '5', 'sda', 'asdasdas', 'sd', '2019-11-12', 'asdas', 'dasdsadas', null, null, null, null, null, '2019-11-12', 'asdasdasdas', null, '1', '2018-12-23 02:09:44', '2018-12-23 02:09:44', null);
INSERT INTO `data_users` VALUES ('25', '4', '12312', '1231231233123', '3123', '2019-05-12', '12321', '312312', null, null, null, '1', null, '2019-11-12', '312312', null, '1', '2018-12-23 02:15:53', '2018-12-23 02:15:53', null);

-- ----------------------------
-- Table structure for `fields`
-- ----------------------------
DROP TABLE IF EXISTS `fields`;
CREATE TABLE `fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_field` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` int(11) NOT NULL DEFAULT '1',
  `max` int(11) DEFAULT NULL,
  `required` int(11) NOT NULL DEFAULT '0',
  `email` int(11) NOT NULL DEFAULT '0',
  `password` int(11) NOT NULL DEFAULT '0',
  `confirmed` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of fields
-- ----------------------------

-- ----------------------------
-- Table structure for `group_datas`
-- ----------------------------
DROP TABLE IF EXISTS `group_datas`;
CREATE TABLE `group_datas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of group_datas
-- ----------------------------
INSERT INTO `group_datas` VALUES ('1', 'test1111', '1', '2018-12-18 14:58:09', '2018-12-18 15:13:42', '0000-00-00 00:00:00');
INSERT INTO `group_datas` VALUES ('2', 'test 2asdasdas', '1', '2018-12-18 14:58:18', '2018-12-18 15:15:34', '0000-00-00 00:00:00');
INSERT INTO `group_datas` VALUES ('3', 'TestTescss', '1', '2018-12-18 15:00:37', '2018-12-18 15:15:25', '2018-12-18 15:15:25');
INSERT INTO `group_datas` VALUES ('4', 'ทดสอบข้อมูล 1', '1', '2018-12-18 15:16:41', '2018-12-18 15:26:52', null);
INSERT INTO `group_datas` VALUES ('5', 'ทดสอบข้อมูล 2', '1', '2018-12-18 15:16:45', '2018-12-18 15:27:02', null);
INSERT INTO `group_datas` VALUES ('6', 'asdasdas', '1', '2018-12-18 15:16:49', '2018-12-18 15:26:43', '2018-12-18 15:26:43');

-- ----------------------------
-- Table structure for `media`
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `collection_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsive_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES ('7', 'App\\Models\\DataUser', '22', 'attachment', 'Capture', 'Capture.PNG', 'image/png', 'local', '74092', '[]', '{\"custom_headers\":[]}', '[]', '1', '2018-12-23 00:59:49', '2018-12-23 00:59:49');
INSERT INTO `media` VALUES ('8', 'App\\Models\\DataUser', '22', 'attachment', 'ฟฟหกฟหกฟห', 'ฟฟหกฟหกฟห.PNG', 'image/png', 'local', '25489', '[]', '{\"custom_headers\":[]}', '[]', '2', '2018-12-23 00:59:49', '2018-12-23 00:59:49');
INSERT INTO `media` VALUES ('10', 'App\\Models\\DataUser', '23', 'attachment', 'ฟฟหกฟหกฟห', 'ฟฟหกฟหกฟห.PNG', 'image/png', 'local', '25489', '[]', '{\"custom_headers\":[]}', '[]', '4', '2018-12-23 01:27:52', '2018-12-23 01:27:52');
INSERT INTO `media` VALUES ('12', 'App\\Models\\DataUser', '23', 'attachment', 'Capture', 'Capture.PNG', 'image/png', 'local', '74092', '[]', '{\"custom_headers\":[]}', '[]', '5', '2018-12-23 02:02:21', '2018-12-23 02:02:21');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_12_15_163214_user_update_field', '2');
INSERT INTO `migrations` VALUES ('4', '2018_12_15_172200_create_table_fields', '3');
INSERT INTO `migrations` VALUES ('5', '2018_12_18_141707_create_group_datas_table', '4');
INSERT INTO `migrations` VALUES ('6', '2018_12_18_150152_update_filed_group_datas', '5');
INSERT INTO `migrations` VALUES ('7', '2018_12_19_012425_create_data_users_table', '6');
INSERT INTO `migrations` VALUES ('8', '2018_12_19_014023_create_attachments_table', '7');
INSERT INTO `migrations` VALUES ('9', '2018_12_23_002943_create_media_table', '8');
INSERT INTO `migrations` VALUES ('11', '2018_12_23_012437_update_soft_delete_user_data', '9');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `suggestion`
-- ----------------------------
DROP TABLE IF EXISTS `suggestion`;
CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `detail` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of suggestion
-- ----------------------------
INSERT INTO `suggestion` VALUES ('1', 'hawkandeagle5@gmail.com', '1', '<p>12312312</p>', null, '2018-12-26 16:22:12', null);
INSERT INTO `suggestion` VALUES ('2', 'hawkandeagle5@gmail.com', '1', '<p>หกฟหกฟหกฟหกหฟ</p>', null, '2018-12-26 16:23:18', null);
INSERT INTO `suggestion` VALUES ('3', 'hawkandeagle5@gmail.com', '1', '<p>12312312</p>', '2018-12-26 16:11:10', '2018-12-26 16:23:22', null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_group` int(11) NOT NULL,
  `province` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_forget_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_forget_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT '0',
  `time` int(11) DEFAULT '0',
  `expire_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'All Project', 'hawkandeagle5@gmail.com', null, '$2y$10$QeulMq2Uj1YP2Of/6WekBeVtJ9cuWDRvm4u94ALG0QwY262NipJke', 'c9fnP4K3yXvqYEge2EjIty63UDw16GZm0K5Ze3dtSgzJEA1QD0Z1QMakkFGt', null, '2018-12-16 10:50:39', '1', 'กทม', '1+1', '2', null, null, null);
INSERT INTO `users` VALUES ('2', 'all proje3ct', 'hawkandeagle1@gmail.com', null, '$2y$2y$10$QeulMq2Uj1YP2Of/6WekBeVtJ9cuWDRvm4u94ALG0QwY262NipJke', 'id0ks2YNL1Ydt7PtGwX3fu44SD4QzDQA94b7YoWREBhm3BnfVWu3q2TawbDZ', null, '2018-12-16 10:25:49', '0', 'เพชรบูรณ์', '1+1', '2', null, null, null);
INSERT INTO `users` VALUES ('3', 'HawkAndEagle Eagle', 'hawkandeagle2@gmail.com', null, '$2y$10$jpNzlbm7KFz/1RxUSDsxR.weXJQ0HJvhdkIUPa7ya58Hr1v5nyWta', 'U5RrF6xts7aZg32xBIarQl6JihH2W6dqarq15t6FJrt15hDmYQxW4Fc7WCiL', null, null, '0', 'เพชรบูรณ์', '1+1', '2', null, null, null);

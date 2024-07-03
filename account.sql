/*
Navicat MySQL Data Transfer

Source Server         : 11
Source Server Version : 50740
Source Host           : localhost:3306
Source Database       : la

Target Server Type    : MYSQL
Target Server Version : 50740
File Encoding         : 65001

Date: 2024-07-02 17:09:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `fen` varchar(255) DEFAULT NULL,
  `created` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `times` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('47', 'mouse1', 'The mouse is an external input device for computers and an indicator for the vertical and horizontal coordinate positioning of computer display systems. It is named after its mouse like appearance (used in Hong Kong and Taiwan as a mouse). Its standard title should be \"mouse tool\"', 'mouse', null, '100', '20240702000355121.png', '1', '2024-07-02 00:03:55', '2024-07-02 00:03:55');
INSERT INTO `account` VALUES ('49', 'mouse3', 'The mouse is an external input device for computers and an indicator for the vertical and horizontal coordinate positioning of computer display systems. It is named after its mouse like appearance (used in Hong Kong and Taiwan as a mouse). Its standard title should be \"mouse tool\"', 'mouse', null, '80', '20240702000716139.png', '1', '2024-07-02 00:07:16', '2024-07-02 00:07:16');
INSERT INTO `account` VALUES ('48', 'mouse2', 'The mouse is an external input device for computers and an indicator for the vertical and horizontal coordinate positioning of computer display systems. It is named after its mouse like appearance (used in Hong Kong and Taiwan as a mouse). Its standard title should be \"mouse tool\"', 'mouse', null, '50', '202407020004560109.png', '1', '2024-07-02 00:04:56', '2024-07-02 00:04:56');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'admin', '123', '1', '2@qq.com', 'user', '2024-07-01 23:52:44', '2024-07-01 23:52:4');
INSERT INTO `users` VALUES ('23', '123', '123', '2', '123', 'user', '2024-07-01 23:52:44', '2024-07-01 23:52:44');

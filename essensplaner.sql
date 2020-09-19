/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : essensplaner

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-09-19 22:14:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `gerichte`
-- ----------------------------
DROP TABLE IF EXISTS `gerichte`;
CREATE TABLE `gerichte` (
  `unique_id` int(64) NOT NULL AUTO_INCREMENT,
  `gericht` varchar(64) DEFAULT '',
  `gericht_kalorien` int(16) DEFAULT NULL,
  `gericht_kohlenhydrate` int(16) DEFAULT NULL,
  `gericht_fett` int(16) DEFAULT NULL,
  `gericht_eiweiss` int(16) DEFAULT NULL,
  PRIMARY KEY (`unique_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of gerichte
-- ----------------------------
INSERT INTO `gerichte` VALUES ('6', 'Linsen a la Provence', '101', '12', '2', '6');
INSERT INTO `gerichte` VALUES ('8', 'Hühnerkacke', '120', '1', '1', '119000');
INSERT INTO `gerichte` VALUES ('9', 'Tofu', '433', '324', '5435', '345');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(16) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(16) DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Pascal', '1234');

-- ----------------------------
-- Table structure for `zutaten`
-- ----------------------------
DROP TABLE IF EXISTS `zutaten`;
CREATE TABLE `zutaten` (
  `unique_id` varchar(16) NOT NULL,
  `zutat` varchar(16) DEFAULT NULL,
  `kohlenhydrate` int(16) DEFAULT NULL,
  `fett` int(16) DEFAULT NULL,
  `eiweiss` int(16) DEFAULT NULL,
  `kalorien` int(16) DEFAULT NULL,
  PRIMARY KEY (`unique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of zutaten
-- ----------------------------

/*
Navicat MySQL Data Transfer

Source Server         : AsfoDB
Source Server Version : 50515
Source Host           : localhost:3306
Source Database       : taller

Target Server Type    : MYSQL
Target Server Version : 50515
File Encoding         : 65001

Date: 2012-07-27 21:44:06
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `feedback`
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of feedback
-- ----------------------------

/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : wjytest

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-05-26 01:49:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yunzhi_user`
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_user`;
CREATE TABLE `yunzhi_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_user
-- ----------------------------
INSERT INTO `yunzhi_user` VALUES ('1', 'zhangsan', '1');
INSERT INTO `yunzhi_user` VALUES ('2', 'lisi', '1');
INSERT INTO `yunzhi_user` VALUES ('3', 'wangwu', '1');
INSERT INTO `yunzhi_user` VALUES ('4', 'sunliu', '1');
INSERT INTO `yunzhi_user` VALUES ('5', '1', '1');
INSERT INTO `yunzhi_user` VALUES ('6', '2', '2');
INSERT INTO `yunzhi_user` VALUES ('7', '3', '3');
INSERT INTO `yunzhi_user` VALUES ('8', '4', '4');
INSERT INTO `yunzhi_user` VALUES ('9', '6', '6');
INSERT INTO `yunzhi_user` VALUES ('10', '5', '5');
INSERT INTO `yunzhi_user` VALUES ('11', '7', '7');
INSERT INTO `yunzhi_user` VALUES ('12', '8', '8');

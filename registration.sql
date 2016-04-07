/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : registration

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-04-05 17:28:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `contact_list`
-- ----------------------------
DROP TABLE IF EXISTS `contact_list`;
CREATE TABLE `contact_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) NOT NULL,
  `contact_type` varchar(30) DEFAULT NULL,
  `contact_no` varchar(40) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact_list
-- ----------------------------
INSERT INTO `contact_list` VALUES ('1', '2', '1', '01854321597', '2016-02-29 17:59:02', '2016-03-01 11:20:27');
INSERT INTO `contact_list` VALUES ('2', '2', '2', '0987773767', '2016-03-01 11:21:21', '2016-03-01 11:21:21');
INSERT INTO `contact_list` VALUES ('4', '1', '1', '01673457217', '2016-03-01 13:12:46', '2016-03-01 13:53:03');
INSERT INTO `contact_list` VALUES ('5', '1', '3', 'cud@gmail.com', '2016-03-01 16:15:55', '2016-03-01 16:16:31');

-- ----------------------------
-- Table structure for `contact_type`
-- ----------------------------
DROP TABLE IF EXISTS `contact_type`;
CREATE TABLE `contact_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact_type
-- ----------------------------
INSERT INTO `contact_type` VALUES ('1', 'Mobile');
INSERT INTO `contact_type` VALUES ('2', 'Phone');
INSERT INTO `contact_type` VALUES ('3', 'Email');
INSERT INTO `contact_type` VALUES ('4', 'Skype');

-- ----------------------------
-- Table structure for `student_info`
-- ----------------------------
DROP TABLE IF EXISTS `student_info`;
CREATE TABLE `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `fathers_name` varchar(80) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `hobby` varchar(50) DEFAULT NULL,
  `address` varchar(120) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `photo` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of student_info
-- ----------------------------
INSERT INTO `student_info` VALUES ('1', 'Shoriful Islam', 'abdul uhdsv', 'male', 'cricket', 'dxgmxdc', 'liton@gmail.com', 'a30f14412323492be7144234b6f8ab1b', '569IMG_20151224_160454.jpg');
INSERT INTO `student_info` VALUES ('2', 'arif Islam', 'Asomia', 'male', 'football', 'sfxgt', 'arif@gmail.com', '8724aa758c2f662d79952870ef486ea6', '970IMG_20160123_135321.jpg');
INSERT INTO `student_info` VALUES ('3', 'dgwuhra33', 'etshnwa', 'female', 'football', 'r4ebq4 2', 'aaa@86431555.com', '869eb16c43ac167d344bd19e358b3a83', '721IMG_20150208_154957.jpg');

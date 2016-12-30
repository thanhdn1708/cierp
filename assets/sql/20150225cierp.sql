/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : cierp

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-02-25 10:31:40
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `cierp_block`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_block`;
CREATE TABLE `cierp_block` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tabid` int(11) unsigned NOT NULL,
  `label` varchar(100) NOT NULL,
  `sequence` int(2) unsigned NOT NULL,
  `visible` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_block
-- ----------------------------
INSERT INTO `cierp_block` VALUES ('1', '1', 'USER INFORMATION', '4', '1');
INSERT INTO `cierp_block` VALUES ('2', '2', 'BLOCK INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('3', '3', 'FIELD INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('4', '4', 'MENU INFORMATION', '1', '1');

-- ----------------------------
-- Table structure for `cierp_entity`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_entity`;
CREATE TABLE `cierp_entity` (
  `entityid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `creatorid` int(11) unsigned NOT NULL,
  `ownerid` int(11) unsigned NOT NULL,
  `modifiedid` int(11) unsigned NOT NULL,
  `setype` varchar(100) NOT NULL,
  `description` text,
  `createdtime` datetime NOT NULL,
  `modifiedtime` datetime NOT NULL,
  `deleted` int(2) unsigned NOT NULL,
  `label` varchar(255) NOT NULL,
  PRIMARY KEY (`entityid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_entity
-- ----------------------------

-- ----------------------------
-- Table structure for `cierp_field`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_field`;
CREATE TABLE `cierp_field` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tabid` int(11) unsigned NOT NULL,
  `blockid` int(11) unsigned NOT NULL,
  `label` varchar(100) NOT NULL,
  `fieldname` varchar(100) NOT NULL,
  `tablename` varchar(100) NOT NULL,
  `ui` int(2) unsigned NOT NULL,
  `datatype` int(2) unsigned NOT NULL,
  `mandatory` int(2) unsigned NOT NULL,
  `sequence` int(2) unsigned NOT NULL,
  `presence` int(2) unsigned NOT NULL,
  `visible` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_field
-- ----------------------------
INSERT INTO `cierp_field` VALUES ('1', '1', '1', 'User Name', 'username', 'cierp_user', '1', '1', '1', '1', '4', '1');
INSERT INTO `cierp_field` VALUES ('2', '1', '1', 'Email', 'email', 'cierp_user', '8', '1', '1', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('3', '1', '1', 'Password', 'password', 'cierp_user', '7', '1', '0', '3', '5', '1');
INSERT INTO `cierp_field` VALUES ('4', '1', '1', 'Name', 'name', 'cierp_user', '1', '1', '0', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('5', '2', '2', 'Module', 'tabid', 'cierp_block', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('6', '2', '2', 'Label', 'label', 'cierp_block', '1', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('7', '2', '2', 'Sequence', 'sequence', 'cierp_block', '1', '1', '1', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('8', '2', '2', 'Visible', 'visible', 'cierp_block', '3', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('9', '3', '3', 'Module', 'tabid', 'cierp_field', '10', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('10', '3', '3', 'Block', 'blockid', 'cierp_field', '10', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('11', '3', '3', 'Label', 'label', 'cierp_field', '1', '1', '1', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('12', '3', '3', 'Field Name', 'fieldname', 'cierp_field', '1', '1', '1', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('13', '3', '3', 'Table Name', 'tablename', 'cierp_field', '1', '1', '1', '5', '1', '1');
INSERT INTO `cierp_field` VALUES ('14', '3', '3', 'UI Type', 'ui', 'cierp_field', '4', '1', '0', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('15', '3', '3', 'Data Type', 'datatype', 'cierp_field', '1', '1', '1', '7', '1', '1');
INSERT INTO `cierp_field` VALUES ('16', '3', '3', 'Mandatory', 'mandatory', 'cierp_field', '3', '1', '0', '8', '1', '1');
INSERT INTO `cierp_field` VALUES ('17', '3', '3', 'Sequence', 'sequence', 'cierp_field', '1', '1', '1', '9', '1', '1');
INSERT INTO `cierp_field` VALUES ('18', '3', '3', 'Presence', 'presence', 'cierp_field', '1', '1', '1', '10', '1', '1');
INSERT INTO `cierp_field` VALUES ('19', '3', '3', 'Visible', 'visible', 'cierp_field', '3', '1', '0', '11', '1', '1');
INSERT INTO `cierp_field` VALUES ('20', '4', '4', 'Name', 'name', 'cierp_menu', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('21', '4', '4', 'Url', 'url', 'cierp_menu', '1', '1', '1', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('22', '4', '4', 'Parent', 'parentid', 'cierp_menu', '10', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('23', '4', '4', 'Sequence', 'sequence', 'cierp_menu', '1', '1', '1', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('24', '4', '4', 'Visible', 'visible', 'cierp_menu', '1', '1', '0', '5', '1', '1');
INSERT INTO `cierp_field` VALUES ('25', '4', '4', 'Label', 'label', 'cierp_menu', '1', '1', '1', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('28', '5', '6', 'Name', 'name', 'cierp_tab', '1', '1', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for `cierp_menu`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_menu`;
CREATE TABLE `cierp_menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `parentid` int(11) unsigned DEFAULT NULL,
  `sequence` int(2) unsigned NOT NULL,
  `visible` int(2) unsigned NOT NULL,
  `label` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_menu
-- ----------------------------
INSERT INTO `cierp_menu` VALUES ('1', 'mainmenu', '#', '0', '1', '1', 'Main Menu');
INSERT INTO `cierp_menu` VALUES ('2', 'dashboard', 'admin/dashboard', '1', '1', '1', 'Dashboard');
INSERT INTO `cierp_menu` VALUES ('3', 'user', 'user/index/listview', '1', '2', '1', 'User');
INSERT INTO `cierp_menu` VALUES ('4', 'tab', 'admin/tab_manager/listview', '1', '3', '1', 'Module');
INSERT INTO `cierp_menu` VALUES ('5', 'menu', 'admin/menu_manager/listview', '1', '4', '1', 'Menu');
INSERT INTO `cierp_menu` VALUES ('6', 'block', 'admin/block_manager/listview', '1', '5', '1', 'Block');
INSERT INTO `cierp_menu` VALUES ('7', 'field', 'admin/field_manager/listview', '1', '6', '1', 'Field');
INSERT INTO `cierp_menu` VALUES ('8', 'picklist', 'admin/picklist_manager/listview', '1', '7', '1', 'Picklist');
INSERT INTO `cierp_menu` VALUES ('9', 'relatedtab', 'admin/relatedtab_manager/listview', '1', '8', '1', 'RelatedTab');

-- ----------------------------
-- Table structure for `cierp_picklist`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_picklist`;
CREATE TABLE `cierp_picklist` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tabname` varchar(100) NOT NULL,
  `field` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `sequence` int(2) unsigned NOT NULL,
  `visible` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_picklist
-- ----------------------------
INSERT INTO `cierp_picklist` VALUES ('1', 'Field', 'ui', '1', 'Text Box', '1', '1');
INSERT INTO `cierp_picklist` VALUES ('2', 'Field', 'ui', '2', 'Text Area', '3', '1');
INSERT INTO `cierp_picklist` VALUES ('3', 'Field', 'ui', '3', 'Check Box', '4', '1');
INSERT INTO `cierp_picklist` VALUES ('4', 'Field', 'ui', '4', 'Combo Box', '5', '1');
INSERT INTO `cierp_picklist` VALUES ('5', 'Field', 'ui', '5', 'Date', '6', '1');
INSERT INTO `cierp_picklist` VALUES ('6', 'Field', 'ui', '6', 'Time', '7', '1');
INSERT INTO `cierp_picklist` VALUES ('7', 'Field', 'ui', '7', 'Password', '8', '1');
INSERT INTO `cierp_picklist` VALUES ('8', 'Field', 'ui', '8', 'Email', '9', '1');
INSERT INTO `cierp_picklist` VALUES ('9', 'Field', 'ui', '9', 'Datetime', '10', '1');
INSERT INTO `cierp_picklist` VALUES ('10', 'Field', 'ui', '10', 'Related', '2', '1');

-- ----------------------------
-- Table structure for `cierp_relatedtab`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_relatedtab`;
CREATE TABLE `cierp_relatedtab` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tabname` varchar(100) NOT NULL,
  `field` varchar(100) NOT NULL,
  `relatedtab` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_relatedtab
-- ----------------------------
INSERT INTO `cierp_relatedtab` VALUES ('1', 'Menu', 'parentid', 'Menu');
INSERT INTO `cierp_relatedtab` VALUES ('2', 'Field', 'tabid', 'Tab');
INSERT INTO `cierp_relatedtab` VALUES ('3', 'Field', 'blockid', 'Block');

-- ----------------------------
-- Table structure for `cierp_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_sessions`;
CREATE TABLE `cierp_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_sessions
-- ----------------------------
INSERT INTO `cierp_sessions` VALUES ('e2ba838930408e813841eb5b5aa5923a', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', '1424834861', 'a:5:{s:9:\"user_data\";s:0:\"\";s:4:\"name\";s:7:\"thanhdn\";s:5:\"email\";s:21:\"thanhdn1708@gmail.com\";s:2:\"id\";s:1:\"1\";s:8:\"loggedin\";b:1;}');

-- ----------------------------
-- Table structure for `cierp_tab`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_tab`;
CREATE TABLE `cierp_tab` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `table` varchar(100) NOT NULL,
  `field` varchar(100) NOT NULL,
  `key` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_tab
-- ----------------------------
INSERT INTO `cierp_tab` VALUES ('1', 'User', 'user', 'index', 'cierp_user', 'username', 'username', 'User');
INSERT INTO `cierp_tab` VALUES ('2', 'Block', 'admin', 'block_manager', 'cierp_block', 'label', 'id', 'Block');
INSERT INTO `cierp_tab` VALUES ('3', 'Field', 'admin', 'field_manager', 'cierp_field', 'id', 'id', 'Field');
INSERT INTO `cierp_tab` VALUES ('4', 'Menu', 'admin', 'menu_manager', 'cierp_menu', 'label', 'id', 'Menu');
INSERT INTO `cierp_tab` VALUES ('5', 'Tab', 'admin', 'tab_manager', 'cierp_tab', 'label', 'id', 'Tab');
INSERT INTO `cierp_tab` VALUES ('6', 'Picklist', 'admin', 'picklist_manager', 'cierp_picklist', 'id', 'id', 'Picklist');
INSERT INTO `cierp_tab` VALUES ('7', 'Relatedtab', 'admin', 'relatedtab_manager', 'cierp_relatedtab', 'id', 'id', 'RelatedTab');

-- ----------------------------
-- Table structure for `cierp_user`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_user`;
CREATE TABLE `cierp_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_user
-- ----------------------------
INSERT INTO `cierp_user` VALUES ('1', 'thanhdn', 'thanhdn1708@gmail.com', '83e7005f686f9dbffe45dcdbc9b7dc5c55d604e839ef7b9d5ee1a8d8810f8751647358edc9574dd84c2ac0d113aebe195f698f448772394b649b6faf681f657b', 'Đặng Ngọc Thạnh');
INSERT INTO `cierp_user` VALUES ('2', 'admin', 'michaeldang90@gmail.com', '83e7005f686f9dbffe45dcdbc9b7dc5c55d604e839ef7b9d5ee1a8d8810f8751647358edc9574dd84c2ac0d113aebe195f698f448772394b649b6faf681f657b', 'Đặng Ngọc Thạnh');
INSERT INTO `cierp_user` VALUES ('3', 'duynt', 'duynt@gmail.com', '83e7005f686f9dbffe45dcdbc9b7dc5c55d604e839ef7b9d5ee1a8d8810f8751647358edc9574dd84c2ac0d113aebe195f698f448772394b649b6faf681f657b', 'Nguyễn Tiến Duy');
INSERT INTO `cierp_user` VALUES ('4', 'anndn', 'anndn@gmail.com', '83e7005f686f9dbffe45dcdbc9b7dc5c55d604e839ef7b9d5ee1a8d8810f8751647358edc9574dd84c2ac0d113aebe195f698f448772394b649b6faf681f657b', 'Nguyễn Đoàn Nguyên An');
INSERT INTO `cierp_user` VALUES ('6', 'admin2', 'dangngoccuom@gmail.com', '83e7005f686f9dbffe45dcdbc9b7dc5c55d604e839ef7b9d5ee1a8d8810f8751647358edc9574dd84c2ac0d113aebe195f698f448772394b649b6faf681f657b', 'Đặng Ngọc Cườm');
INSERT INTO `cierp_user` VALUES ('8', 'rolan', 'rolan@cierp.com', 'e1dc409330b6c63aba653c30b9805933c3c4bbe80d06884abc6f32da7f55ddd89a45880388122c157c487d15317a14f0d786bc034854544b49810eec157538f3', 'Cristiano Rolan');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('9');

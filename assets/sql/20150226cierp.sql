/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : cierp

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-02-26 00:34:47
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_block
-- ----------------------------
INSERT INTO `cierp_block` VALUES ('1', '1', 'USER INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('2', '2', 'MODULE INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('3', '3', 'MENU INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('4', '4', 'BLOCK INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('5', '5', 'FIELD INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('6', '6', 'PICKLIST INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('7', '7', 'RELATEDTAB INFORMATION', '1', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_field
-- ----------------------------
INSERT INTO `cierp_field` VALUES ('1', '1', '1', 'User Name', 'username', 'cierp_user', '1', '1', '1', '1', '4', '1');
INSERT INTO `cierp_field` VALUES ('2', '1', '1', 'Email', 'email', 'cierp_user', '8', '1', '1', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('3', '1', '1', 'Password', 'password', 'cierp_user', '7', '1', '0', '3', '5', '1');
INSERT INTO `cierp_field` VALUES ('4', '1', '1', 'Name', 'name', 'cierp_user', '1', '1', '0', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('5', '1', '1', 'Gender', 'gender', 'cierp_user', '4', '1', '1', '5', '1', '1');
INSERT INTO `cierp_field` VALUES ('6', '1', '1', 'Birthday', 'birthday', 'cierp_user', '5', '1', '1', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('7', '2', '2', 'Module Name', 'name', 'cierp_tab', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('8', '2', '2', 'Module', 'module', 'cierp_tab', '1', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('9', '2', '2', 'Controller', 'controller', 'cierp_tab', '1', '1', '1', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('10', '2', '2', 'Table', 'table', 'cierp_tab', '1', '1', '1', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('11', '2', '2', 'Field Label', 'field', 'cierp_tab', '1', '1', '1', '5', '1', '1');
INSERT INTO `cierp_field` VALUES ('12', '2', '2', 'Primary Key', 'key', 'cierp_tab', '1', '1', '1', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('13', '2', '2', 'Label', 'label', 'cierp_tab', '1', '1', '1', '7', '1', '1');
INSERT INTO `cierp_field` VALUES ('14', '3', '3', 'Menu Name', 'name', 'cierp_menu', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('15', '3', '3', 'Url', 'url', 'cierp_menu', '1', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('16', '3', '3', 'Parent', 'parentid', 'cierp_menu', '10', '1', '0', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('17', '3', '3', 'Sequence', 'sequence', 'cierp_menu', '1', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('18', '3', '3', 'Publish', 'visible', 'cierp_menu', '3', '1', '0', '5', '1', '1');
INSERT INTO `cierp_field` VALUES ('19', '3', '3', 'Label', 'label', 'cierp_menu', '1', '1', '1', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('20', '4', '4', 'Module', 'tabid', 'cierp_block', '10', '1', '1', '1', '4', '1');
INSERT INTO `cierp_field` VALUES ('21', '4', '4', 'Label', 'label', 'cierp_block', '1', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('22', '4', '4', 'Sequence', 'sequence', 'cierp_block', '1', '1', '0', '3', '5', '1');
INSERT INTO `cierp_field` VALUES ('23', '4', '4', 'Publish', 'visible', 'cierp_block', '3', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('24', '5', '5', 'Module', 'tabid', 'cierp_field', '10', '1', '1', '1', '4', '1');
INSERT INTO `cierp_field` VALUES ('25', '5', '5', 'Block', 'blockid', 'cierp_field', '10', '1', '1', '2', '4', '1');
INSERT INTO `cierp_field` VALUES ('26', '5', '5', 'Label', 'label', 'cierp_field', '1', '1', '1', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('27', '5', '5', 'Fieldname', 'fieldname', 'cierp_field', '1', '1', '1', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('28', '5', '5', 'Tablename', 'tablename', 'cierp_field', '1', '1', '1', '5', '4', '1');
INSERT INTO `cierp_field` VALUES ('29', '5', '5', 'UI Type', 'ui', 'cierp_field', '4', '1', '1', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('30', '5', '5', 'Data Type', 'datatype', 'cierp_field', '4', '1', '1', '7', '1', '1');
INSERT INTO `cierp_field` VALUES ('31', '5', '5', 'Mandatory', 'mandatory', 'cierp_field', '4', '1', '1', '8', '1', '1');
INSERT INTO `cierp_field` VALUES ('32', '5', '5', 'Sequence', 'sequence', 'cierp_field', '1', '1', '0', '9', '5', '1');
INSERT INTO `cierp_field` VALUES ('33', '5', '5', 'Presence', 'presence', 'cierp_field', '4', '1', '1', '10', '1', '1');
INSERT INTO `cierp_field` VALUES ('34', '5', '5', 'Publish', 'visible', 'cierp_field', '3', '1', '0', '11', '1', '1');
INSERT INTO `cierp_field` VALUES ('35', '6', '6', 'Module Name', 'tabname', 'cierp_picklist', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('36', '6', '6', 'Field Name', 'field', 'cierp_picklist', '1', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('37', '6', '6', 'Value', 'value', 'cierp_picklist', '1', '1', '1', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('38', '6', '6', 'Label', 'label', 'cierp_picklist', '1', '1', '1', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('39', '6', '6', 'Sequence', 'sequence', 'cierp_picklist', '1', '1', '0', '5', '5', '1');
INSERT INTO `cierp_field` VALUES ('40', '6', '6', 'Publish', 'visible', 'cierp_picklist', '3', '1', '1', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('41', '7', '7', 'Module Name', 'tabname', 'cierp_relatedtab', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('42', '7', '7', 'Field Name', 'field', 'cierp_relatedtab', '1', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('43', '7', '7', 'RelatedTab', 'relatedtab', 'cierp_relatedtab', '1', '1', '1', '3', '1', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_menu
-- ----------------------------
INSERT INTO `cierp_menu` VALUES ('1', 'rootmenu', '#', '0', '1', '1', 'Root Menu');
INSERT INTO `cierp_menu` VALUES ('2', 'admin', '#', '1', '1', '1', 'Admin');
INSERT INTO `cierp_menu` VALUES ('3', 'dashboard', 'admin/dashboard', '14', '1', '1', 'Dashboard');
INSERT INTO `cierp_menu` VALUES ('4', 'migration', 'admin/migration', '11', '2', '1', 'Migration');
INSERT INTO `cierp_menu` VALUES ('5', 'module', 'admin/tab_manager/listview', '2', '1', '1', 'Module');
INSERT INTO `cierp_menu` VALUES ('6', 'menu', 'admin/menu_manager/listview', '18', '1', '1', 'Menu');
INSERT INTO `cierp_menu` VALUES ('7', 'block', 'admin/block_manager/listview', '2', '2', '1', 'Block');
INSERT INTO `cierp_menu` VALUES ('8', 'field', 'admin/field_manager/listview', '2', '3', '1', 'Field');
INSERT INTO `cierp_menu` VALUES ('9', 'picklist', 'admin/picklist_manager/listview', '2', '4', '1', 'Picklist');
INSERT INTO `cierp_menu` VALUES ('10', 'relatedtab', 'admin/relatedtab_manager/listview', '2', '5', '1', 'RelatedTab');
INSERT INTO `cierp_menu` VALUES ('11', 'system', '#', '1', '3', '1', 'System');
INSERT INTO `cierp_menu` VALUES ('12', 'user', 'user/index/listview', '11', '1', '1', 'User');
INSERT INTO `cierp_menu` VALUES ('13', 'logout', 'user/index/logout', '11', '3', '1', 'Logout');
INSERT INTO `cierp_menu` VALUES ('14', 'mainmenu', '#', '1', '0', '0', 'Main Menu');
INSERT INTO `cierp_menu` VALUES ('15', 'module', 'admin/tab_manager/listview', '14', '3', '1', 'Module');
INSERT INTO `cierp_menu` VALUES ('16', 'user', 'user/index/listview', '14', '2', '1', 'User');
INSERT INTO `cierp_menu` VALUES ('17', 'menu', 'admin/menu_manager/listview', '14', '4', '1', 'Menu');
INSERT INTO `cierp_menu` VALUES ('18', 'content', '#', '1', '2', '1', 'Content');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_picklist
-- ----------------------------
INSERT INTO `cierp_picklist` VALUES ('1', 'User', 'gender', '1', 'Male', '1', '1');
INSERT INTO `cierp_picklist` VALUES ('2', 'User', 'gender', '2', 'Female', '2', '1');
INSERT INTO `cierp_picklist` VALUES ('3', 'User', 'gender', '3', 'Other', '3', '1');
INSERT INTO `cierp_picklist` VALUES ('4', 'Field', 'ui', '1', 'Text Box', '1', '1');
INSERT INTO `cierp_picklist` VALUES ('5', 'Field', 'ui', '2', 'Text Area', '3', '1');
INSERT INTO `cierp_picklist` VALUES ('6', 'Field', 'ui', '3', 'Check Box', '4', '1');
INSERT INTO `cierp_picklist` VALUES ('7', 'Field', 'ui', '4', 'Combo Box', '5', '1');
INSERT INTO `cierp_picklist` VALUES ('8', 'Field', 'ui', '5', 'Date', '6', '1');
INSERT INTO `cierp_picklist` VALUES ('9', 'Field', 'ui', '6', 'Time', '7', '1');
INSERT INTO `cierp_picklist` VALUES ('10', 'Field', 'ui', '7', 'Password', '8', '1');
INSERT INTO `cierp_picklist` VALUES ('11', 'Field', 'ui', '8', 'Email', '9', '1');
INSERT INTO `cierp_picklist` VALUES ('12', 'Field', 'ui', '9', 'Datetime', '10', '1');
INSERT INTO `cierp_picklist` VALUES ('13', 'Field', 'ui', '10', 'Related', '2', '1');
INSERT INTO `cierp_picklist` VALUES ('14', 'Field', 'datatype', '1', 'Varchar', '1', '1');
INSERT INTO `cierp_picklist` VALUES ('15', 'Field', 'datatype', '2', 'Number', '2', '1');
INSERT INTO `cierp_picklist` VALUES ('16', 'Field', 'mandatory', '0', 'Not required', '1', '1');
INSERT INTO `cierp_picklist` VALUES ('17', 'Field', 'mandatory', '1', 'Required', '2', '1');
INSERT INTO `cierp_picklist` VALUES ('18', 'Field', 'presence', '1', 'All View', '1', '1');
INSERT INTO `cierp_picklist` VALUES ('19', 'Field', 'presence', '2', 'Detail View not Edit view', '2', '1');
INSERT INTO `cierp_picklist` VALUES ('20', 'Field', 'presence', '3', 'Edit View not Detail View', '3', '1');
INSERT INTO `cierp_picklist` VALUES ('21', 'Field', 'presence', '4', 'New and Detail not Edit', '4', '1');
INSERT INTO `cierp_picklist` VALUES ('22', 'Field', 'presence', '5', 'New view not Detail, Edit', '5', '1');
INSERT INTO `cierp_picklist` VALUES ('23', 'Field', 'presence', '6', 'Not All', '6', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_relatedtab
-- ----------------------------
INSERT INTO `cierp_relatedtab` VALUES ('1', 'Menu', 'parentid', 'Menu');
INSERT INTO `cierp_relatedtab` VALUES ('2', 'Block', 'tabid', 'Tab');
INSERT INTO `cierp_relatedtab` VALUES ('3', 'Field', 'tabid', 'Tab');
INSERT INTO `cierp_relatedtab` VALUES ('4', 'Field', 'blockid', 'Block');

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
INSERT INTO `cierp_sessions` VALUES ('0c43d1c5ec0db7e5829673cf1401fa06', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', '1424885099', 'a:4:{s:4:\"name\";s:7:\"thanhdn\";s:5:\"email\";s:21:\"thanhdn1708@gmail.com\";s:2:\"id\";s:1:\"1\";s:8:\"loggedin\";b:1;}');

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
INSERT INTO `cierp_tab` VALUES ('2', 'Tab', 'admin', 'tab_manager', 'cierp_tab', 'label', 'id', 'Tab');
INSERT INTO `cierp_tab` VALUES ('3', 'Menu', 'admin', 'menu_manager', 'cierp_menu', 'label', 'id', 'Menu');
INSERT INTO `cierp_tab` VALUES ('4', 'Block', 'admin', 'block_manager', 'cierp_block', 'label', 'id', 'Block');
INSERT INTO `cierp_tab` VALUES ('5', 'Field', 'admin', 'field_manager', 'cierp_field', 'id', 'id', 'Field');
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
  `gender` int(2) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_user
-- ----------------------------
INSERT INTO `cierp_user` VALUES ('1', 'thanhdn', 'thanhdn1708@gmail.com', '83e7005f686f9dbffe45dcdbc9b7dc5c55d604e839ef7b9d5ee1a8d8810f8751647358edc9574dd84c2ac0d113aebe195f698f448772394b649b6faf681f657b', 'Đặng Ngọc Thạnh', '1', '1990-08-17');

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

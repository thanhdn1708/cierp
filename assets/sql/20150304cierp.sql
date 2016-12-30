/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : cierp

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-04 14:19:08
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `cierp_article`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_article`;
CREATE TABLE `cierp_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `categoryid` int(11) unsigned NOT NULL,
  `publishdate` date NOT NULL,
  `body` text NOT NULL,
  `visible` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_article
-- ----------------------------
INSERT INTO `cierp_article` VALUES ('4', 'Welcome to Codeigniter Framework', 'welcome-to-codeigniter-framework', '3', '2015-03-04', '                    <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman\'s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n\r\n                    <p>Science cuts two ways, of course; its products can be used for both good and evil. But there\'s no turning back from science. The early warnings about technological dangers also come from science.</p>\r\n\r\n                    <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>\r\n\r\n                    <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That\'s how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>\r\n\r\n                    <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>\r\n\r\n                    <h2 class=\"section-heading\">The Final Frontier</h2>\r\n\r\n                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n                    <blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>\r\n\r\n                    <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>\r\n\r\n                    <h2 class=\"section-heading\">Reaching for the Stars</h2>\r\n\r\n                    <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>\r\n\r\n                    <a href=\"#\">\r\n                        <img class=\"img-responsive\" src=\"http://localhost/cierp/assets/content/cierpblog/img/post-sample-image.jpg\" alt=\"\">\r\n                    </a>\r\n                    <span class=\"caption text-muted\">To go places and do things that have never been done before – that’s what living is all about.</span>\r\n\r\n                    <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>\r\n\r\n                    <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>\r\n\r\n                    <p>Placeholder text by <a href=\"http://spaceipsum.com/\">Space Ipsum</a>. Photographs by <a href=\"https://www.flickr.com/photos/nasacommons/\">NASA on The Commons</a>.</p>', '1');
INSERT INTO `cierp_article` VALUES ('10', 'vTiger CRM Introduction', 'vtiger-crm-introduction', '9', '2015-03-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti enim modi! Et.', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

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
INSERT INTO `cierp_block` VALUES ('8', '8', 'TEMPLATE INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('9', '8', 'SYSTEM INFORMATION', '2', '1');
INSERT INTO `cierp_block` VALUES ('10', '9', 'PAGE INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('11', '9', 'SYSTEM INFORMATION', '2', '1');
INSERT INTO `cierp_block` VALUES ('12', '10', 'CATEGORY INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('13', '10', 'SYSTEM INFORMATION', '2', '1');
INSERT INTO `cierp_block` VALUES ('14', '11', 'ARTICLE INFORMATION', '1', '1');
INSERT INTO `cierp_block` VALUES ('15', '11', 'SYSTEM INFORMATION', '2', '1');
INSERT INTO `cierp_block` VALUES ('16', '9', 'BODY INFORMATION', '3', '1');
INSERT INTO `cierp_block` VALUES ('17', '11', 'BODY INFORMATION', '3', '1');

-- ----------------------------
-- Table structure for `cierp_category`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_category`;
CREATE TABLE `cierp_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `parentid` int(11) unsigned NOT NULL,
  `visible` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_category
-- ----------------------------
INSERT INTO `cierp_category` VALUES ('3', 'Codeigniter', 'codeigniter', '0', '1');
INSERT INTO `cierp_category` VALUES ('9', 'CRM', 'crm', '0', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_entity
-- ----------------------------
INSERT INTO `cierp_entity` VALUES ('1', '1', '1', '1', 'Template', '', '2015-02-27 09:39:01', '2015-03-04 09:54:49', '0', 'Homepage');
INSERT INTO `cierp_entity` VALUES ('2', '1', '1', '1', 'Page', '', '2015-02-27 09:56:09', '2015-03-04 12:06:07', '0', 'CIERP BLOG');
INSERT INTO `cierp_entity` VALUES ('3', '1', '1', '1', 'Category', '', '2015-03-04 09:22:28', '2015-03-04 09:22:28', '0', 'Codeigniter');
INSERT INTO `cierp_entity` VALUES ('4', '1', '1', '1', 'Article', '', '2015-03-04 09:24:43', '2015-03-04 10:43:39', '0', 'Welcome to Codeigniter Framework');
INSERT INTO `cierp_entity` VALUES ('5', '1', '1', '1', 'Template', '', '2015-03-04 10:31:14', '2015-03-04 10:31:21', '0', 'About');
INSERT INTO `cierp_entity` VALUES ('6', '1', '1', '1', 'Page', '', '2015-03-04 10:31:54', '2015-03-04 12:07:38', '0', 'About ThanhDn');
INSERT INTO `cierp_entity` VALUES ('7', '1', '1', '1', 'Template', '', '2015-03-04 10:39:27', '2015-03-04 10:39:27', '0', 'Contact');
INSERT INTO `cierp_entity` VALUES ('8', '1', '1', '1', 'Page', '', '2015-03-04 10:39:52', '2015-03-04 10:39:52', '0', 'Contact Me');
INSERT INTO `cierp_entity` VALUES ('9', '1', '1', '1', 'Category', '', '2015-03-04 11:44:42', '2015-03-04 11:44:42', '0', 'CRM');
INSERT INTO `cierp_entity` VALUES ('10', '1', '1', '1', 'Article', '', '2015-03-04 11:45:20', '2015-03-04 11:49:21', '0', 'vTiger CRM Introduction');

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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

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
INSERT INTO `cierp_field` VALUES ('44', '8', '8', 'Name', 'name', 'cierp_template', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('45', '8', '8', 'Label', 'templabel', 'cierp_template', '1', '1', '1', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('46', '8', '8', 'Layout', 'layout', 'cierp_template', '1', '1', '1', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('47', '8', '8', 'Publish', 'visible', 'cierp_template', '3', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('48', '8', '9', 'Assign User', 'ownerid', 'cierp_template', '10', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('49', '8', '9', 'Created Time', 'createdtime', 'cierp_template', '1', '1', '1', '2', '2', '1');
INSERT INTO `cierp_field` VALUES ('50', '8', '9', 'Modified Time', 'modifiedtime', 'cierp_template', '1', '1', '1', '3', '2', '1');
INSERT INTO `cierp_field` VALUES ('51', '8', '9', 'Description', 'description', 'cierp_template', '2', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('52', '9', '10', 'Title', 'title', 'cierp_page', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('53', '9', '10', 'Alias', 'alias', 'cierp_page', '1', '1', '0', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('54', '9', '16', 'Body', 'body', 'cierp_page', '2', '1', '0', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('55', '9', '10', 'Template', 'templateid', 'cierp_page', '10', '1', '1', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('56', '9', '10', 'Publish', 'visible', 'cierp_page', '3', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('57', '9', '11', 'Assign User', 'ownerid', 'cierp_page', '10', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('58', '9', '11', 'Created Time', 'createdtime', 'cierp_page', '1', '1', '1', '2', '2', '1');
INSERT INTO `cierp_field` VALUES ('59', '9', '11', 'Modified Time', 'modifiedtime', 'cierp_page', '1', '1', '1', '3', '2', '1');
INSERT INTO `cierp_field` VALUES ('60', '9', '11', 'Description', 'description', 'cierp_page', '2', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('61', '9', '10', 'Default', 'default', 'cierp_page', '3', '1', '0', '5', '1', '1');
INSERT INTO `cierp_field` VALUES ('62', '10', '12', 'Title', 'title', 'cierp_category', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('63', '10', '12', 'Alias', 'alias', 'cierp_category', '1', '1', '0', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('64', '10', '12', 'Parent', 'parentid', 'cierp_category', '10', '1', '0', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('65', '10', '12', 'Publish', 'visible', 'cierp_category', '3', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('66', '10', '13', 'Assign User', 'ownerid', 'cierp_category', '10', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('67', '10', '13', 'Created Time', 'createdtime', 'cierp_category', '1', '1', '1', '2', '2', '1');
INSERT INTO `cierp_field` VALUES ('68', '10', '13', 'Modified Time', 'modifiedtime', 'cierp_category', '1', '1', '1', '3', '2', '1');
INSERT INTO `cierp_field` VALUES ('69', '10', '13', 'Description', 'description', 'cierp_category', '2', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('70', '11', '14', 'Title', 'title', 'cierp_article', '1', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('71', '11', '14', 'Alias', 'alias', 'cierp_article', '1', '1', '0', '2', '1', '1');
INSERT INTO `cierp_field` VALUES ('72', '11', '14', 'Category', 'categoryid', 'cierp_article', '10', '1', '0', '3', '1', '1');
INSERT INTO `cierp_field` VALUES ('73', '11', '14', 'Publish Date', 'publishdate', 'cierp_article', '5', '1', '0', '4', '1', '1');
INSERT INTO `cierp_field` VALUES ('74', '11', '17', 'Body', 'body', 'cierp_article', '2', '1', '0', '5', '1', '1');
INSERT INTO `cierp_field` VALUES ('75', '11', '14', 'Publish', 'visible', 'cierp_article', '3', '1', '0', '6', '1', '1');
INSERT INTO `cierp_field` VALUES ('76', '11', '15', 'Assign User', 'ownerid', 'cierp_article', '10', '1', '1', '1', '1', '1');
INSERT INTO `cierp_field` VALUES ('77', '11', '15', 'Created Time', 'createdtime', 'cierp_article', '1', '1', '1', '2', '2', '1');
INSERT INTO `cierp_field` VALUES ('78', '11', '15', 'Modified Time', 'modifiedtime', 'cierp_article', '1', '1', '1', '3', '2', '1');
INSERT INTO `cierp_field` VALUES ('79', '11', '15', 'Description', 'description', 'cierp_article', '2', '1', '0', '4', '1', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_menu
-- ----------------------------
INSERT INTO `cierp_menu` VALUES ('1', 'rootmenu', '#', '0', '1', '1', 'Root Menu');
INSERT INTO `cierp_menu` VALUES ('2', 'admin', '#', '1', '1', '1', 'Admin');
INSERT INTO `cierp_menu` VALUES ('3', 'dashboard', 'admin/dashboard', '14', '3', '1', 'Dashboard');
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
INSERT INTO `cierp_menu` VALUES ('15', 'module', 'admin/tab_manager/listview', '14', '5', '1', 'Module');
INSERT INTO `cierp_menu` VALUES ('16', 'user', 'user/index/listview', '14', '4', '1', 'User');
INSERT INTO `cierp_menu` VALUES ('17', 'menu', 'admin/menu_manager/listview', '14', '6', '1', 'Menu');
INSERT INTO `cierp_menu` VALUES ('18', 'content', '#', '1', '2', '1', 'Content');
INSERT INTO `cierp_menu` VALUES ('19', 'template', 'content/template_manager/listview', '18', '2', '1', 'Template');
INSERT INTO `cierp_menu` VALUES ('20', 'page', 'content/page_manager/listview', '18', '3', '1', 'Page');
INSERT INTO `cierp_menu` VALUES ('21', 'category', 'content/category_manager/listview', '18', '4', '1', 'Category');
INSERT INTO `cierp_menu` VALUES ('22', 'article', 'content/article_manager/listview', '18', '5', '1', 'Article');
INSERT INTO `cierp_menu` VALUES ('23', 'page', 'content/page_manager/listview', '14', '7', '1', 'Page');
INSERT INTO `cierp_menu` VALUES ('24', 'article', 'content/article_manager/listview', '14', '8', '1', 'Article');

-- ----------------------------
-- Table structure for `cierp_page`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_page`;
CREATE TABLE `cierp_page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `default` int(2) NOT NULL,
  `templateid` int(11) unsigned NOT NULL,
  `visible` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_page
-- ----------------------------
INSERT INTO `cierp_page` VALUES ('2', 'CIERP BLOG', 'home-page', 'Khôn cũng chết, dại cũng chết, biết là sống', '1', '1', '1');
INSERT INTO `cierp_page` VALUES ('6', 'About ThanhDn', 'about-us', '<p>Khó nhất là quản trị cuộc đời</p>\r\n', '0', '5', '1');
INSERT INTO `cierp_page` VALUES ('8', 'Contact Me', 'contact-me', '', '0', '7', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_relatedtab
-- ----------------------------
INSERT INTO `cierp_relatedtab` VALUES ('1', 'Menu', 'parentid', 'Menu');
INSERT INTO `cierp_relatedtab` VALUES ('2', 'Block', 'tabid', 'Tab');
INSERT INTO `cierp_relatedtab` VALUES ('3', 'Field', 'tabid', 'Tab');
INSERT INTO `cierp_relatedtab` VALUES ('4', 'Field', 'blockid', 'Block');
INSERT INTO `cierp_relatedtab` VALUES ('5', 'Template', 'ownerid', 'User');
INSERT INTO `cierp_relatedtab` VALUES ('6', 'Page', 'templateid', 'Template');
INSERT INTO `cierp_relatedtab` VALUES ('7', 'Page', 'ownerid', 'User');
INSERT INTO `cierp_relatedtab` VALUES ('8', 'Category', 'parentid', 'Category');
INSERT INTO `cierp_relatedtab` VALUES ('9', 'Category', 'ownerid', 'User');
INSERT INTO `cierp_relatedtab` VALUES ('10', 'Article', 'categoryid', 'Category');
INSERT INTO `cierp_relatedtab` VALUES ('11', 'Article', 'ownerid', 'User');

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
INSERT INTO `cierp_sessions` VALUES ('59367571fe106995721aab923f06c335', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', '1425453466', 'a:5:{s:9:\"user_data\";s:0:\"\";s:4:\"name\";s:7:\"thanhdn\";s:5:\"email\";s:21:\"thanhdn1708@gmail.com\";s:2:\"id\";s:1:\"1\";s:8:\"loggedin\";b:1;}');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

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
INSERT INTO `cierp_tab` VALUES ('8', 'Template', 'content', 'template_manager', 'cierp_template', 'templabel', 'id', 'Template');
INSERT INTO `cierp_tab` VALUES ('9', 'Page', 'content', 'page_manager', 'cierp_page', 'title', 'id', 'Page');
INSERT INTO `cierp_tab` VALUES ('10', 'Category', 'content', 'category_manager', 'cierp_category', 'title', 'id', 'Category');
INSERT INTO `cierp_tab` VALUES ('11', 'Article', 'content', 'article_manager', 'cierp_article', 'title', 'id', 'Article');

-- ----------------------------
-- Table structure for `cierp_template`
-- ----------------------------
DROP TABLE IF EXISTS `cierp_template`;
CREATE TABLE `cierp_template` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `templabel` varchar(100) NOT NULL,
  `layout` varchar(100) NOT NULL,
  `visible` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cierp_template
-- ----------------------------
INSERT INTO `cierp_template` VALUES ('1', 'homepage', 'Homepage', 'index', '1');
INSERT INTO `cierp_template` VALUES ('5', 'about', 'About', 'about', '1');
INSERT INTO `cierp_template` VALUES ('7', 'contact', 'Contact', 'contact', '1');

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
INSERT INTO `migrations` VALUES ('13');

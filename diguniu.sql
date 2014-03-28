/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50523
Source Host           : localhost:3306
Source Database       : diguniu

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2014-03-28 17:40:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(30) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('10', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1394287078', null);
INSERT INTO `admin` VALUES ('33', 'wanghexiang', '96e79218965eb72c92a549dd5a330112', '1395220184', null);
INSERT INTO `admin` VALUES ('35', '', 'd41d8cd98f00b204e9800998ecf8427e', '1395385276', null);
INSERT INTO `admin` VALUES ('34', 'whx', '96e79218965eb72c92a549dd5a330112', '1395380914', null);

-- ----------------------------
-- Table structure for `arc_content`
-- ----------------------------
DROP TABLE IF EXISTS `arc_content`;
CREATE TABLE `arc_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arc_id` int(11) DEFAULT NULL,
  `content` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of arc_content
-- ----------------------------
INSERT INTO `arc_content` VALUES ('7', '13', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;2121212 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;');
INSERT INTO `arc_content` VALUES ('8', '14', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;第三方士大夫阿士大夫 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;');
INSERT INTO `arc_content` VALUES ('9', '15', '&lt;p&gt;\r\n	&lt;strong&gt;水电费是的垃圾费老师的课件分离式的放假了开始的减肥离开时代就废了开始觉得法律框架SD卡浪费科室里的减肥快乐圣诞节菲利克斯离开的减肥看来是的减肥快乐圣诞节方式来得快&lt;/strong&gt; \r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;strong&gt;收到了福建了深刻的减肥时代就废了开始觉得法兰&lt;/strong&gt;克时代开了房间时刻的连接法律斯柯达罚款了晒得久飞\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	是打发了似的减肥拉屎的弗兰克撒娇的弗兰克受打击了开发坚实的浪费\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	善良劫匪十里店飞机了深刻的减肥l\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	发生的垃圾费十里店\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	收到了福建十里店\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	收到了福建十里店减肥\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	是打发了似的减肥\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	束带结发\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	s\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	是否\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	dfsfsdfs\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	sdfsdf\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;');
INSERT INTO `arc_content` VALUES ('10', '16', '12121212112121212121是的罚款了坚实的李方军收到了减肥老师看到家费十里店jf');
INSERT INTO `arc_content` VALUES ('11', '17', '2121212');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lit_pic` char(255) DEFAULT NULL,
  `title` char(50) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `public` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('13', null, '12121', null, '1395822466', '2', null);
INSERT INTO `article` VALUES ('14', null, '水电费阿士大夫水电费是的水电费是的', null, '1395823435', '1', null);
INSERT INTO `article` VALUES ('15', null, '文章标题', null, '1395996281', '1', null);
INSERT INTO `article` VALUES ('16', null, '12121212', null, '1395996528', '1', null);
INSERT INTO `article` VALUES ('17', null, '12121', null, '1395996556', '1', null);

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) DEFAULT NULL,
  `p_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '顶级分类', '0');
INSERT INTO `category` VALUES ('2', '霜1234567', '1');
INSERT INTO `category` VALUES ('3', '1212121', '8');
INSERT INTO `category` VALUES ('6', '12121', '3');
INSERT INTO `category` VALUES ('7', '121212', '6');
INSERT INTO `category` VALUES ('8', '12121212', '7');

-- ----------------------------
-- Table structure for `tag`
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tag
-- ----------------------------

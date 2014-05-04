/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50523
Source Host           : localhost:3306
Source Database       : diguniu

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2014-05-04 15:01:12
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
  `email` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('54', 'wanghexiang', 'e10adc3949ba59abbe56e057f20f883e', '1398821723', null, '19467285@qq.com');
INSERT INTO `admin` VALUES ('55', '121212121212', '96e79218965eb72c92a549dd5a330112', '1398844537', null, '19467@qq.com');

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
  `content` text COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('13', '2014-04-17/534f95e556a40.jpg', '12121212', null, '1397724645', '10', null, '12121');
INSERT INTO `article` VALUES ('14', null, '水电费阿士大夫水电费是的水电费是的', null, '1397723436', '10', null, '1212121');
INSERT INTO `article` VALUES ('15', null, '文章标题', null, '1395996281', '1', null, null);
INSERT INTO `article` VALUES ('16', '2014-04-17/534f969e8da6f.jpg', '212', null, '1397724830', '10', null, '121212');
INSERT INTO `article` VALUES ('17', null, '12121', null, '1395996556', '1', null, null);
INSERT INTO `article` VALUES ('18', null, '水电费水电费', null, '1397718784', '10', null, '王二飞娃儿 是大法师的是大法师的水电费水电费是');
INSERT INTO `article` VALUES ('20', null, '1212', null, '1397723406', '10', null, '1212121');
INSERT INTO `article` VALUES ('21', '2014-04-17/534f93efe0068.jpg', '121', null, '1397724143', '10', null, '21212');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) DEFAULT NULL,
  `p_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '二级分类', '1');
INSERT INTO `category` VALUES ('2', '霜', '2');
INSERT INTO `category` VALUES ('3', '1212121', '8');
INSERT INTO `category` VALUES ('6', '12121', '3');
INSERT INTO `category` VALUES ('7', '121212', '6');
INSERT INTO `category` VALUES ('8', '12121212', '7');
INSERT INTO `category` VALUES ('9', '护肤品', '9');
INSERT INTO `category` VALUES ('10', '是点击菲利克斯点击飞', '0');
INSERT INTO `category` VALUES ('11', '时代就废了开始觉得', '10');
INSERT INTO `category` VALUES ('12', '时代就废了是大家看法', '11');
INSERT INTO `category` VALUES ('13', '是垃圾分类晒得久飞', '12');
INSERT INTO `category` VALUES ('14', '十里店就废了撒旦看见飞', '13');
INSERT INTO `category` VALUES ('15', '时代就废了是打飞机', '14');
INSERT INTO `category` VALUES ('16', '历史的就废了是的会计法', '15');
INSERT INTO `category` VALUES ('17', '十里店就废了晒得久飞', '16');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) DEFAULT NULL,
  `pid` int(11) DEFAULT '0',
  `url` char(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `icon` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '顶级菜单', '0', '', '0', '');
INSERT INTO `menu` VALUES ('24', '新增菜单', '37', 'Admin/Menu/edit', '0', '');
INSERT INTO `menu` VALUES ('25', '用户管理', '1', 'Admin/Admin/index', '0', '&lt;i class=&quot;icon-eye-open&quot;&gt;&lt;/i&gt;');
INSERT INTO `menu` VALUES ('27', '用户列表', '25', 'Admin/Admin/index', '0', '');
INSERT INTO `menu` VALUES ('28', '新增用户', '25', 'Admin/Admin/edit', '0', '');
INSERT INTO `menu` VALUES ('37', '菜单管理', '1', 'Admin/Menu/index', '1', '<i class=\"icon-book\"></i>');
INSERT INTO `menu` VALUES ('38', '菜单列表', '37', 'Admin/Menu/index', '1', '');

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

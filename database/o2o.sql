/*
Navicat MySQL Data Transfer

Source Server         : 本地root
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : o2o

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-03 13:44:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for o2o_bis
-- ----------------------------
DROP TABLE IF EXISTS `o2o_bis`;
CREATE TABLE `o2o_bis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `licence_logo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `city_path` varchar(255) DEFAULT NULL,
  `bank_info` varchar(255) DEFAULT NULL,
  `money` char(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_user` varchar(255) DEFAULT NULL,
  `faren` varchar(255) DEFAULT NULL,
  `faren_tel` varchar(255) DEFAULT NULL,
  `listorder` smallint(6) DEFAULT NULL,
  `create_time` int(11) unsigned DEFAULT NULL,
  `update_time` int(11) unsigned DEFAULT NULL,
  `status` smallint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of o2o_bis
-- ----------------------------
INSERT INTO `o2o_bis` VALUES ('1', '超级管理员', '691301630@qq.com', '/hc', '', '<p>超级管理员，管理所有用户</p>', '3', '3,6', '6217856100055558555', null, '中国银行', '韩昌', '韩昌', '13851752194', null, '4294967295', '4294967295', '1');

-- ----------------------------
-- Table structure for o2o_bis_account
-- ----------------------------
DROP TABLE IF EXISTS `o2o_bis_account`;
CREATE TABLE `o2o_bis_account` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '商户登录账号',
  `password` varchar(255) NOT NULL COMMENT '商户登录密码',
  `code` varchar(255) DEFAULT NULL COMMENT 'code码',
  `bis_id` int(11) DEFAULT '1' COMMENT '商家id',
  `last_login_ip` varchar(255) DEFAULT NULL,
  `last_login_time` time DEFAULT NULL,
  `is_main` varchar(255) DEFAULT NULL COMMENT '总店信息',
  `listorder` smallint(6) DEFAULT '0',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '注册时间',
  `update_time` int(11) unsigned DEFAULT NULL,
  `status` smallint(5) unsigned DEFAULT '1' COMMENT '开启状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of o2o_bis_account
-- ----------------------------
INSERT INTO `o2o_bis_account` VALUES ('1', 'admin', 'd7caf467f47007df0b9243eb4cc11a77', '4184', '1', null, '00:00:00', '1', '0', '4294967295', '1543457019', '1');

-- ----------------------------
-- Table structure for o2o_bis_location
-- ----------------------------
DROP TABLE IF EXISTS `o2o_bis_location`;
CREATE TABLE `o2o_bis_location` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bis_id` int(11) DEFAULT '1' COMMENT '商家id',
  `name` varchar(255) DEFAULT NULL COMMENT '商户名称',
  `logo` varchar(255) DEFAULT NULL COMMENT '商户注册缩略图',
  `tel` smallint(6) DEFAULT NULL COMMENT '商户电话',
  `contact` varchar(255) DEFAULT NULL COMMENT '商户联系人',
  `category_id` int(11) DEFAULT NULL COMMENT '商户所属分类',
  `category_path` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL COMMENT '所属城市父级',
  `city_path` varchar(255) DEFAULT NULL,
  `api_address` varchar(255) DEFAULT NULL,
  `open_time` time DEFAULT NULL COMMENT '营业时间',
  `content` text COMMENT '门店简介',
  `is_main` varchar(255) DEFAULT NULL COMMENT '总店信息',
  `se_city_id` int(11) DEFAULT NULL COMMENT '所属城市',
  `xpoint` varchar(255) DEFAULT NULL COMMENT '商户坐标地址x轴',
  `ypoint` varchar(255) DEFAULT NULL COMMENT '商户坐标地址x轴',
  `status` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '开启状态',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '注册时间',
  `update_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of o2o_bis_location
-- ----------------------------
INSERT INTO `o2o_bis_location` VALUES ('1', '1', '超级管理员', '', '32767', '韩昌', '1', '1,4', '3', '3,6', '郑州市', '00:20:18', '<p>门店简介&nbsp; &nbsp;</p>', '1', null, '', '', '1', '4294967295', '4294967295');

-- ----------------------------
-- Table structure for o2o_category
-- ----------------------------
DROP TABLE IF EXISTS `o2o_category`;
CREATE TABLE `o2o_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL COMMENT '父类id,0为顶级分类',
  `name` varchar(255) DEFAULT NULL COMMENT '种类名称',
  `listorder` varchar(255) DEFAULT NULL COMMENT '排序',
  `create_time` int(11) unsigned DEFAULT NULL,
  `update_time` int(11) unsigned DEFAULT NULL,
  `status` int(2) DEFAULT NULL COMMENT '1为开启状态，0为关闭状态，-1为删去不用状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of o2o_category
-- ----------------------------
INSERT INTO `o2o_category` VALUES ('1', '0', '动物', '0', '0', '0', '1');
INSERT INTO `o2o_category` VALUES ('2', '0', '植物', '0', '0', '0', '1');
INSERT INTO `o2o_category` VALUES ('3', '0', '食物', '0', '0', '0', '1');
INSERT INTO `o2o_category` VALUES ('4', '1', '哺乳类动物', '0', '0', '0', '1');
INSERT INTO `o2o_category` VALUES ('5', '1', '卵生动物', '1', '0', '0', '1');
INSERT INTO `o2o_category` VALUES ('6', '2', '水生植物', '3', '0', '0', '1');
INSERT INTO `o2o_category` VALUES ('7', '2', '陆生植物', '2', '0', '0', '1');
INSERT INTO `o2o_category` VALUES ('8', '2', '测试', '1', '0', '0', '1');

-- ----------------------------
-- Table structure for o2o_city
-- ----------------------------
DROP TABLE IF EXISTS `o2o_city`;
CREATE TABLE `o2o_city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `parent_id` int(5) NOT NULL DEFAULT '0',
  `is_default` smallint(6) DEFAULT NULL,
  `listorder` varchar(255) DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1',
  `create_time` varchar(11) DEFAULT NULL,
  `update_time` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of o2o_city
-- ----------------------------
INSERT INTO `o2o_city` VALUES ('1', '北京', 'beijing1', '0', '1', null, '1', '', null);
INSERT INTO `o2o_city` VALUES ('2', '北京', 'beijing', '1', '1', null, '1', '', null);
INSERT INTO `o2o_city` VALUES ('3', '江苏', 'jiangsu', '0', '1', null, '1', '', null);
INSERT INTO `o2o_city` VALUES ('4', '苏州', 'suzhou', '3', '1', null, '1', '', null);
INSERT INTO `o2o_city` VALUES ('5', '杭州', 'hangzhou', '3', '1', null, '1', '', null);
INSERT INTO `o2o_city` VALUES ('6', '南京', 'nanjing', '3', '1', null, '1', '', null);

-- ----------------------------
-- Table structure for o2o_deal
-- ----------------------------
DROP TABLE IF EXISTS `o2o_deal`;
CREATE TABLE `o2o_deal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `se_category_id` int(11) DEFAULT NULL,
  `bis_id` int(11) DEFAULT NULL,
  `location_ids` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `origin_price` varchar(255) DEFAULT NULL,
  `current_price` decimal(10,0) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `buy_count` varchar(255) DEFAULT NULL,
  `total_count` varchar(255) DEFAULT NULL,
  `listorder` varchar(255) DEFAULT NULL,
  `coupons_begin_time` datetime DEFAULT NULL,
  `coupons_end_time` datetime DEFAULT NULL,
  `xpoint` varchar(255) DEFAULT NULL,
  `ypoint` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `bis_account_id` varchar(255) DEFAULT NULL,
  `balance_price` decimal(10,0) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `create_time` int(11) unsigned DEFAULT NULL,
  `update_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of o2o_deal
-- ----------------------------

-- ----------------------------
-- Table structure for o2o_featured
-- ----------------------------
DROP TABLE IF EXISTS `o2o_featured`;
CREATE TABLE `o2o_featured` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4,
  `description` text CHARACTER SET utf8mb4,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` smallint(1) DEFAULT '0',
  `status` smallint(2) NOT NULL DEFAULT '1',
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of o2o_featured
-- ----------------------------
INSERT INTO `o2o_featured` VALUES ('1', '53客服', '江苏万和系统工程', '', 'http://tb.53kf.com/code/client/10134569/1', '1', '0', '1433128917', '1543460215');
INSERT INTO `o2o_featured` VALUES ('2', '源码包下载', '江苏万和53客服', '', 'http://tb.53kf.com/code/client/10134569/1', '1', '1', '1433128917', '1543461692');
INSERT INTO `o2o_featured` VALUES ('3', '公司简介', '中亚戏剧学院', '', 'http://tb.53kf.com/code/client/10134569/2', '0', '0', '1543476347', '1543476347');

-- ----------------------------
-- Table structure for o2o_user
-- ----------------------------
DROP TABLE IF EXISTS `o2o_user`;
CREATE TABLE `o2o_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL,
  `password` char(50) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `phone` int(13) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `create_time` int(11) unsigned DEFAULT NULL,
  `update_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of o2o_user
-- ----------------------------
INSERT INTO `o2o_user` VALUES ('4', '0', 'hc', '06eb8beee614677720ab728f41b5fb5a', null, null, '9300', '3127176962@qq.com', '1', '1528957708', '1528957724');

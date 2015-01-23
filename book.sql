/*
Navicat MySQL Data Transfer

Source Server         : 本地数据库
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : book

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-01-23 16:03:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `book_author`
-- ----------------------------
DROP TABLE IF EXISTS `book_author`;
CREATE TABLE `book_author` (
  `id` int(11) NOT NULL DEFAULT '0',
  `book_id` int(11) DEFAULT NULL COMMENT '图书编号',
  `author_name` int(11) DEFAULT NULL COMMENT '作者姓名',
  `author_id` int(11) DEFAULT NULL COMMENT '作者id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='作者表';

-- ----------------------------
-- Records of book_author
-- ----------------------------

-- ----------------------------
-- Table structure for `book_authorinfo`
-- ----------------------------
DROP TABLE IF EXISTS `book_authorinfo`;
CREATE TABLE `book_authorinfo` (
  `author_id` int(11) NOT NULL DEFAULT '0',
  `pen_name` varchar(11) DEFAULT NULL COMMENT '笔名',
  `real_name` varchar(20) DEFAULT NULL COMMENT '真名',
  `birthday` int(11) DEFAULT NULL COMMENT '出生年月日',
  `native` varchar(20) DEFAULT NULL COMMENT '祖籍',
  `address` varchar(50) DEFAULT NULL COMMENT '住址 ',
  `hometown` varchar(50) DEFAULT NULL COMMENT '家乡',
  `description` text COMMENT '描述',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `creator` varchar(50) DEFAULT NULL COMMENT '创建人',
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='书籍作者表';

-- ----------------------------
-- Records of book_authorinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `book_borrower`
-- ----------------------------
DROP TABLE IF EXISTS `book_borrower`;
CREATE TABLE `book_borrower` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(20) DEFAULT NULL COMMENT '年龄',
  `gender` tinyint(1) DEFAULT NULL COMMENT '性别',
  `card_number` varchar(20) DEFAULT NULL COMMENT '图书证号',
  `nation` varchar(20) DEFAULT NULL COMMENT '民族',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='借阅人表';

-- ----------------------------
-- Records of book_borrower
-- ----------------------------

-- ----------------------------
-- Table structure for `book_borrowinfo`
-- ----------------------------
DROP TABLE IF EXISTS `book_borrowinfo`;
CREATE TABLE `book_borrowinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增无意义',
  `book_id` int(11) DEFAULT NULL COMMENT '书籍id',
  `borrow_id` int(11) DEFAULT NULL COMMENT '借书人的id',
  `isbn` varchar(20) DEFAULT NULL COMMENT 'isbn编号',
  `number` tinyint(2) DEFAULT NULL COMMENT '借书的数量',
  `borrow_date` int(11) DEFAULT NULL COMMENT '借书的日期',
  `back_date` int(11) DEFAULT NULL COMMENT '归还日期',
  `expire_time` tinyint(3) DEFAULT NULL COMMENT '过期天数',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL COMMENT '1 已还  2 未还',
  `borrow_name` varchar(50) DEFAULT NULL,
  `book_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='借阅信息表';

-- ----------------------------
-- Records of book_borrowinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `book_info`
-- ----------------------------
DROP TABLE IF EXISTS `book_info`;
CREATE TABLE `book_info` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(50) NOT NULL COMMENT '书名',
  `author` varchar(50) NOT NULL COMMENT '作者',
  `press` varchar(50) DEFAULT NULL COMMENT '出版社',
  `type` varchar(11) DEFAULT NULL COMMENT '图书类别',
  `source` varchar(11) DEFAULT NULL COMMENT '出处 藏处',
  `number` int(11) DEFAULT NULL COMMENT '图书的数量',
  `status` tinyint(2) DEFAULT NULL COMMENT '图书状态',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `creator` varchar(50) DEFAULT NULL COMMENT '创建人',
  `isbn` varchar(50) DEFAULT NULL,
  `history_time` varchar(30) DEFAULT NULL COMMENT '发行日期 或者出版日期',
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='书籍表';

-- ----------------------------
-- Records of book_info
-- ----------------------------

-- ----------------------------
-- Table structure for `book_publishinfo`
-- ----------------------------
DROP TABLE IF EXISTS `book_publishinfo`;
CREATE TABLE `book_publishinfo` (
  `publish_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '出版社id',
  `name` varchar(30) DEFAULT NULL COMMENT '名称',
  `description` text COMMENT '描述',
  `history_time` int(11) DEFAULT NULL COMMENT '成立时间',
  `typename` varchar(20) DEFAULT NULL COMMENT '类别',
  `estblished_time` int(11) DEFAULT NULL COMMENT '成立时间',
  `foundation` varchar(30) DEFAULT NULL COMMENT '成立单位',
  `represent` varchar(50) DEFAULT NULL,
  `awards` varchar(50) DEFAULT NULL COMMENT '获得荣誉',
  `inscribe` varchar(30) DEFAULT NULL COMMENT '题字',
  `address` varchar(50) DEFAULT NULL COMMENT '地址',
  `concat` varchar(100) DEFAULT NULL COMMENT '联系方式',
  `create_time` int(11) DEFAULT NULL COMMENT '信息创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '信息更新时间',
  `creator` varchar(20) DEFAULT NULL COMMENT '更新者',
  `editor` varchar(20) DEFAULT NULL COMMENT '编辑者',
  PRIMARY KEY (`publish_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='出版社信息表';

-- ----------------------------
-- Records of book_publishinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `book_publlish`
-- ----------------------------
DROP TABLE IF EXISTS `book_publlish`;
CREATE TABLE `book_publlish` (
  `id` int(11) NOT NULL DEFAULT '0',
  `publish_id` int(11) DEFAULT NULL COMMENT '出版社id',
  `book_id` int(11) DEFAULT NULL COMMENT '图书编号',
  `publish_name` varchar(50) DEFAULT NULL COMMENT '出版社名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='出版社和书籍映射表';

-- ----------------------------
-- Records of book_publlish
-- ----------------------------

-- ----------------------------
-- Table structure for `book_user`
-- ----------------------------
DROP TABLE IF EXISTS `book_user`;
CREATE TABLE `book_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT ' 用户id',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `real_name` varchar(10) NOT NULL COMMENT '真实姓名 ',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `adminid` int(11) NOT NULL COMMENT '管理员id',
  `group_id` int(11) DEFAULT NULL COMMENT '用户组id',
  `card_number` varchar(50) DEFAULT NULL COMMENT '借阅卡编号',
  `card_password` varchar(50) DEFAULT NULL COMMENT '借阅卡密码',
  `password` varchar(50) DEFAULT NULL COMMENT '用户登录密码 对应用户名',
  `mobile` int(11) DEFAULT NULL COMMENT '电话',
  `address` varchar(50) DEFAULT NULL COMMENT '地址',
  `qq` int(11) DEFAULT NULL COMMENT 'qq号',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_user
-- ----------------------------

-- ----------------------------
-- Table structure for `book_user_card`
-- ----------------------------
DROP TABLE IF EXISTS `book_user_card`;
CREATE TABLE `book_user_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_number` varchar(20) DEFAULT NULL COMMENT '卡号',
  `address` varchar(20) DEFAULT NULL COMMENT '通信地址',
  `real_name` varchar(20) DEFAULT NULL COMMENT '姓名',
  `mobile` varchar(20) DEFAULT NULL COMMENT '电话',
  `id_card` varchar(18) DEFAULT NULL COMMENT '身份证号',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `status` int(11) DEFAULT NULL COMMENT '开卡状态',
  `expire_time` int(11) DEFAULT NULL COMMENT '过期时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户开卡表';

-- ----------------------------
-- Records of book_user_card
-- ----------------------------
INSERT INTO `book_user_card` VALUES ('1', '', '', null, null, null, '1421998657', null, '1421884800', '1421998657');
INSERT INTO `book_user_card` VALUES ('2', 'asd', 'asfd', null, null, null, '1421998736', null, '1421107200', '1421998736');

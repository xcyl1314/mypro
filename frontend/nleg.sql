-- 创建时间：2016-11-15
-- 项目：农乐购数据库
------- 开始  -------------

-- 微信用户表
CREATE TABLE `wechat_user` (
  `user_id` int(11) NOT NULL auto_increment PRIMARY KEY ,
  `openid` varchar(255) NOT NULL,
  `nickname` varchar(50) NOT NULL COMMENT '微信昵称',
  `sex` tinyint(4) NOT NULL COMMENT '性别',
  `headimgurl` varchar(255) NOT NULL COMMENT '头像',
  `country` varchar(50) NOT NULL COMMENT '国家',
  `province` varchar(50) NOT NULL COMMENT '省份',
  `city` varchar(50) NOT NULL COMMENT '城市',
  `access_token` varchar(255) NOT NULL,
  `refresh_token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 文章表
create table `posts` (
post_id int(11) not null auto_increment PRIMARY key,
title varchar(80) not null COMMENT '标题',
author varchar(30) not null DEFAULT '' COMMENT '作者',
excerpt varchar(255) not null DEFAULT '' COMMENT '摘要',
readnum int(11) not null DEFAULT 1 COMMENT '阅读次数',
postnum int(11) not null DEFAULT 0 COMMENT '评论次数',
litpic varchar(100) not null DEFAULT '' COMMENT '缩略图',
create_time int(11) not null DEFAULT 0 COMMENT '文章发布时间',
update_time int(11) not null DEFAULT 0 COMMENT '文章修改时间',
sort int(3) not null DEFAULT 100 COMMENT '文章排序，默认100',
iscommend tinyint(1) not null DEFAULT 0 COMMENT '是否推荐，0 不推荐（默认），1 推荐',
keywords varchar(60) not null DEFAULT '' COMMENT '关键词',
typeid int(11) not null DEFAULT 0 COMMENT '文章所属栏目，0表示根栏目'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 栏目表
create table `type`(
type_id int(11) not null auto_increment PRIMARY key,
parent_id int(11) not null COMMENT '父栏目id',
type_name varchar(30) not null COMMENT '栏目名',
type_sort int(3) not null DEFAULT 100 COMMENT '栏目排序，默认100'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3000
 Source Schema         : work

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 15/07/2021 12:38:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pwd` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('admin', 'admin');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `class` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('彭少帆', '00000001', '女', '16544586658', '1807班');
INSERT INTO `student` VALUES ('曾敏馨', '00000002', '女', '14965874526', '1808班');
INSERT INTO `student` VALUES ('曹业成', '00000004', '男', '15874569852', '1807班');
INSERT INTO `student` VALUES ('凌晓文', '00000005', '女', '15489758462', '1807班');
INSERT INTO `student` VALUES ('陈燕珊', '00000006', '女', '15478965412', '1808班');
INSERT INTO `student` VALUES ('陈艳婷', '00000007', '女', '16895423685', '1808班');
INSERT INTO `student` VALUES ('朱丽', '00000009', '女', '15803941382', '1807班');
INSERT INTO `student` VALUES ('何丽仪', '00000010', '女', '14670654386', '1808班');
INSERT INTO `student` VALUES ('梁燕燕', '00000011', '女', '18857388742', '1806班');
INSERT INTO `student` VALUES ('黄惜', '00000012', '男', '16433551017', '1807班');
INSERT INTO `student` VALUES ('陈金菊', '00000013', '女', '19683350987', '1806班');
INSERT INTO `student` VALUES ('杨华', '00000014', '女', '19776958324', '1807班');
INSERT INTO `student` VALUES ('侯刚', '00000015', '男', '19174730728', '1806班');
INSERT INTO `student` VALUES ('李辉', '00000016', '男', '15302388181', '1807班');
INSERT INTO `student` VALUES ('张梅', '00000017', '女', '14328937609', '1808班');
INSERT INTO `student` VALUES ('赵育华', '00000018', '女', '13805753303', '1807班');
INSERT INTO `student` VALUES ('徐敬大', '00000019', '男', '13597163293', '1806班');
INSERT INTO `student` VALUES ('孙量', '00000020', '男', '18216932154', '1808班');
INSERT INTO `student` VALUES ('马嘉达', '00000021', '男', '14224751550', '1806班');
INSERT INTO `student` VALUES ('叶素华', '00000022', '女', '13727133604', '1807班');
INSERT INTO `student` VALUES ('卓峰', '00000023', '男', '14806854647', '1806班');
INSERT INTO `student` VALUES ('陈滔', '00000024', '男', '17294168886', '1807班');
INSERT INTO `student` VALUES ('韩文', '00000025', '男', '16631494210', '1806班');
INSERT INTO `student` VALUES ('杨斌', '00000027', '男', '13491152364', '1808班');
INSERT INTO `student` VALUES ('张峰', '00000028', '男', '18360930191', '1807班');
INSERT INTO `student` VALUES ('张素琴', '00000029', '女', '16240855589', '1806班');
INSERT INTO `student` VALUES ('谭旭东', '00000030', '男', '16153242375', '1807班');
INSERT INTO `student` VALUES ('马振烽', '00000031', '男', '17047889439', '1806班');
INSERT INTO `student` VALUES ('吴珊', '00000032', '女', '13964762299', '1807班');
INSERT INTO `student` VALUES ('刘长征', '00000033', '男', '14125144238', '1806班');
INSERT INTO `student` VALUES ('周金华', '00000034', '男', '15499930474', '1807班');
INSERT INTO `student` VALUES ('李开豫', '00000035', '女', '13238460566', '1806班');
INSERT INTO `student` VALUES ('李丽平', '00000036', '女', '19698163912', '1806班');
INSERT INTO `student` VALUES ('吴文杰', '00000036', '男', '13979556537', '1808班');

SET FOREIGN_KEY_CHECKS = 1;

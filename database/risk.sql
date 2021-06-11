/*
Navicat MySQL Data Transfer

Source Server         : data
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : sthos_risk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-06-11 09:04:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('admin','user') DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'ธีระพงษ์', 'พันธ์อินทร์', 'duy', '0613091960', '  งานสารสนเทศ(IT)', 'admin', '16173026377153.jpg', '2021-04-03 22:39:44');
INSERT INTO `admin` VALUES ('2', 'ธีระพงษ์', 'พันธ์อินทร์', 'admin', '0613091960', '  งานสารสนเทศ(IT)', 'user', '16177091643091.jpg', '2021-04-08 15:35:51');

-- ----------------------------
-- Table structure for cate_risk
-- ----------------------------
DROP TABLE IF EXISTS `cate_risk`;
CREATE TABLE `cate_risk` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate_risk
-- ----------------------------
INSERT INTO `cate_risk` VALUES ('1', 'Ic (ติดเชื้อภายในโรงพยาบาล)', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('2', 'ENV (สิ่งเเวดล้อม)', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('3', 'IM/IT (สารสนเทศ)', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('4', 'HRD', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('5', 'ET HCIS(สิทธิผู้ป่วยและจริยธรรมองค์กร)', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('6', 'Common clinical riskความเสี่ยงทั่วไปทางคลินิก', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('7', 'specific ความเสี่ยงทางคลินิกเฉพาะโรค', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('8', 'เครื่องมือและอุปกรณ์', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('9', 'Prescribing Error(การสั่งยาผิดพลาด)', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('10', 'Pre-dispensing Error(ผิดพลาดในกระบวนการก่อนจ่ายยา)', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('11', 'Dispensing Error(จ่ายยาผิดพลาด)', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('12', 'Administration Error(ผิดพลาดในกระบวนการให้ยาผู้ป่วย)', '2021-05-21');
INSERT INTO `cate_risk` VALUES ('13', 'Translation error(การส่งต่อข้อมูลผิดพลาด)', '2021-05-21');

-- ----------------------------
-- Table structure for department
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `dept_name` varchar(255) DEFAULT NULL,
  `dept_update` datetime DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO `department` VALUES ('1', '  งานสารสนเทศ(IT)', 'ฝ่ายงานยุทธศาสตร์และสารสนเทศทางการเเพทย์', '2021-04-03 21:50:28');
INSERT INTO `department` VALUES ('3', 'งานอุบัติฉุกเฉินและนิติเวช (ER)', 'ฝ่ายการพยาบาล', '2021-04-08 15:07:28');
INSERT INTO `department` VALUES ('4', 'งานผู้ป่วยใน 1 (อายุรกรรม)', 'ฝ่ายการพยาบาล', '2021-03-29 21:18:38');
INSERT INTO `department` VALUES ('5', ' งานผู้ป่วยใน 2 (สามัญ)', 'ฝ่ายการพยาบาล', '2021-03-29 21:20:20');
INSERT INTO `department` VALUES ('6', 'งานผู้ป่วยใน 3 (ศัลยกรรม)', 'ฝ่ายการพยาบาล', '2021-03-29 21:20:45');

-- ----------------------------
-- Table structure for department_group
-- ----------------------------
DROP TABLE IF EXISTS `department_group`;
CREATE TABLE `department_group` (
  `main_dept` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`main_dept`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department_group
-- ----------------------------
INSERT INTO `department_group` VALUES ('1', 'องค์กรแพทย์', '2021-05-21 11:28:50');
INSERT INTO `department_group` VALUES ('2', 'ฝ่ายงานยุทธศาสตร์และสารสนเทศทางการเเพทย์', '2021-05-21 11:29:02');
INSERT INTO `department_group` VALUES ('3', 'ฝ่ายการพยาบาล', '2021-05-21 11:29:08');
INSERT INTO `department_group` VALUES ('4', 'ฝ่ายงานบริหารทั่วไป', '2021-05-21 11:29:12');

-- ----------------------------
-- Table structure for group_levelrisk
-- ----------------------------
DROP TABLE IF EXISTS `group_levelrisk`;
CREATE TABLE `group_levelrisk` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group_levelrisk
-- ----------------------------
INSERT INTO `group_levelrisk` VALUES ('1', 'Clinical risk');
INSERT INTO `group_levelrisk` VALUES ('2', 'Non Clinical risk');

-- ----------------------------
-- Table structure for hospital
-- ----------------------------
DROP TABLE IF EXISTS `hospital`;
CREATE TABLE `hospital` (
  `id_hos` int(11) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `eng_name` varchar(50) DEFAULT '',
  `manager` varchar(50) DEFAULT '',
  `url` varchar(50) DEFAULT '',
  `logo` varchar(50) DEFAULT '',
  `create_at` date DEFAULT NULL,
  PRIMARY KEY (`id_hos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hospital
-- ----------------------------
INSERT INTO `hospital` VALUES ('0', 'โรงพยาบาลสตึก', 'satuekhospital', 'นายแพทย์นครินทร์ โสมาบุตร  ', 'http://satuekhos.com  ', '16207956235316.jpg', '2021-05-14');

-- ----------------------------
-- Table structure for level_risk
-- ----------------------------
DROP TABLE IF EXISTS `level_risk`;
CREATE TABLE `level_risk` (
  `level_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_level` varchar(50) NOT NULL,
  `level_risk` varchar(50) NOT NULL,
  `level_name` varchar(255) NOT NULL,
  `create_at` date DEFAULT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of level_risk
-- ----------------------------
INSERT INTO `level_risk` VALUES ('1', '1', 'A', 'มีโอกาศเกิดอุบัติการณ์เเต่ยังไม่เกิด (Near miss)', '2021-04-20');
INSERT INTO `level_risk` VALUES ('2', '1', 'B', 'เกิดความเสี่ยงแต่ยังไม่ถึง ผู้ป่วย/ผู้รับบริการ/จนท./รพ.(Nearmiss)', '2021-04-20');
INSERT INTO `level_risk` VALUES ('3', '1', 'C', 'เกิดความเสี่ยง เกิดความเสียหายเล็กน้อย', '2021-04-20');
INSERT INTO `level_risk` VALUES ('4', '1', 'D', 'เกิดความเสี่ยงกับผู้ป่วย/ผู้รับบริการ/จนท./รพ. ต้องเฝ้าระวัง', '2021-04-20');
INSERT INTO `level_risk` VALUES ('5', '1', 'E', 'เกิดความเสี่ยงกับผู้ป่วย/ผู้รับบริการ/จนท./รพ. ต้องมีการแก้ไข', '2021-04-20');
INSERT INTO `level_risk` VALUES ('6', '1', 'F', 'ความเสี่ยง มีการสูญเสียถึงขั้นต้องนอนโรงพยาบาล', '2021-04-20');
INSERT INTO `level_risk` VALUES ('7', '1', 'G', 'ความเสี่ยง มีการสูญเสียอวัยวะ ถาวร', '2021-04-20');
INSERT INTO `level_risk` VALUES ('8', '1', 'H', 'ความเสี่ยง เกือบเสียชีวิต', '2021-04-20');
INSERT INTO `level_risk` VALUES ('9', '1', 'I', 'เสียชีวิต มีแนวโน้มการฟ้องร้อง', '2021-04-20');
INSERT INTO `level_risk` VALUES ('10', '1', 'TG', 'กำหนดให้เป็นTrigger Tool เป็นตัวกระตุ้น การค้นหาความเสี่ยงด้านคลินิกเชิงรุก', '2021-04-20');
INSERT INTO `level_risk` VALUES ('11', '2', 'A', 'มีโอกาศเกิดอุบัติการณ์เเต่ยังไม่เกิด (Near miss)', '2021-04-20');
INSERT INTO `level_risk` VALUES ('12', '2', 'B', 'เกิดความเสี่ยงแต่ยังไม่ถึง ผู้ป่วย/ผู้รับบริการ/จนท./รพ.(Nearmiss)', '2021-04-20');
INSERT INTO `level_risk` VALUES ('13', '2', 'C', 'เกิดความเสี่ยง เกิดความเสียหายเล็กน้อย', '2021-04-20');
INSERT INTO `level_risk` VALUES ('14', '2', 'D', 'เกิดความเสี่ยงกับผู้ป่วย/ผู้รับบริการ/จนท./รพ. ต้องเฝ้าระวัง', '2021-04-20');
INSERT INTO `level_risk` VALUES ('15', '2', 'E', 'เกิดความเสี่ยงกับผู้ป่วย/ผู้รับบริการ/จนท./รพ. ต้องมีการแก้ไข', '2021-04-20');
INSERT INTO `level_risk` VALUES ('16', '2', 'F', 'ความเสี่ยง มีการสูญเสียถึงขั้นต้องนอนโรงพยาบาล', '2021-04-20');
INSERT INTO `level_risk` VALUES ('17', '2', 'G', 'ความเสี่ยง มีการสูญเสียอวัยวะ ถาวร', '2021-04-20');
INSERT INTO `level_risk` VALUES ('18', '2', 'H', 'ความเสี่ยง เกือบเสียชีวิต', '2021-04-20');
INSERT INTO `level_risk` VALUES ('19', '2', 'I', 'เสียชีวิต มีแนวโน้มการฟ้องร้อง', '2021-04-20');

-- ----------------------------
-- Table structure for month
-- ----------------------------
DROP TABLE IF EXISTS `month`;
CREATE TABLE `month` (
  `month_id` varchar(255) DEFAULT NULL,
  `month_name` varchar(255) DEFAULT NULL,
  `month_short` varchar(255) DEFAULT NULL,
  `m_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of month
-- ----------------------------
INSERT INTO `month` VALUES ('1', 'มกราคม', 'ม.ค.', '1');
INSERT INTO `month` VALUES ('2', 'กุมภาพันธ์', 'ก.พ.', '2');
INSERT INTO `month` VALUES ('3', 'มีนาคม', 'มี.ค.', '3');
INSERT INTO `month` VALUES ('4', 'เมษายน', 'เม.ย.', '4');
INSERT INTO `month` VALUES ('5', 'พฤษภาคม', 'พ.ค.', '5');
INSERT INTO `month` VALUES ('6', 'มิถุนายน', 'มิ.ย.', '6');
INSERT INTO `month` VALUES ('7', 'กรกฎาคม', 'ก.ค.', '7');
INSERT INTO `month` VALUES ('8', 'สิงหาคม', 'ส.ค.', '8');
INSERT INTO `month` VALUES ('9', 'กันยายน', 'ก.ย.', '9');
INSERT INTO `month` VALUES ('10', 'ตุลาคม', 'ต.ค.', '-2');
INSERT INTO `month` VALUES ('11', 'พฤศจิกายน', 'พ.ย.', '-1');
INSERT INTO `month` VALUES ('12', 'ธันวาคม', 'ธ.ค.', '0');

-- ----------------------------
-- Table structure for news_risk
-- ----------------------------
DROP TABLE IF EXISTS `news_risk`;
CREATE TABLE `news_risk` (
  `new_id` int(11) NOT NULL,
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_risk
-- ----------------------------

-- ----------------------------
-- Table structure for subcate_risk
-- ----------------------------
DROP TABLE IF EXISTS `subcate_risk`;
CREATE TABLE `subcate_risk` (
  `subcate_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcate_name` varchar(255) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  PRIMARY KEY (`subcate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subcate_risk
-- ----------------------------
INSERT INTO `subcate_risk` VALUES ('1', 'ทิ้งขยะผิดที่', '1', '2021-05-21');

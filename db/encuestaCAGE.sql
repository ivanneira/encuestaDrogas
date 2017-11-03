/*
Navicat MySQL Data Transfer

Source Server         : UbuntuLAMPVM
Source Server Version : 50717
Source Host           : 10.64.65.200:3306
Source Database       : encuestas

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-11-03 10:21:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for encuestaCAGE
-- ----------------------------
DROP TABLE IF EXISTS `encuestaCAGE`;
CREATE TABLE `encuestaCAGE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroCuestionario` int(11) NOT NULL,
  `departamento` int(11) NOT NULL,
  `localidad` int(11) NOT NULL,
  `escuela` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3A` int(11) NOT NULL,
  `r3D` int(11) NOT NULL,
  `r4A` int(11) NOT NULL,
  `r4D` int(11) NOT NULL,
  `r5A` int(11) NOT NULL,
  `r5D` int(11) NOT NULL,
  `r6A` int(11) NOT NULL,
  `r6D` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipoDroga` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

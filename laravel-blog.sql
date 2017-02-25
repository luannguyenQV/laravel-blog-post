/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : viendong.edu.vn

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-25 17:49:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admission
-- ----------------------------
DROP TABLE IF EXISTS `admission`;
CREATE TABLE `admission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(100) NOT NULL,
  `CMND` varchar(12) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `dangkybachoc` varchar(100) NOT NULL,
  `nganhhoc` varchar(100) NOT NULL,
  `doituongthuockhuvucuutien` varchar(100) NOT NULL,
  `khoixettuyen` varchar(100) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `khuvuc` varchar(100) NOT NULL,
  `x1mon1diemhocky1lop12` varchar(100) NOT NULL,
  `x1mon1diemhocky2lop12` varchar(100) NOT NULL,
  `x1mon2diemhocky1lop12` varchar(100) NOT NULL,
  `x1mon2diemhocky2lop12` varchar(100) NOT NULL,
  `x1mon3diemhocky1lop12` varchar(100) NOT NULL,
  `x1mon3diemhocky2lop12` varchar(100) NOT NULL,
  `x2m1hocky1_11` varchar(100) NOT NULL,
  `x2m1hocky2_11` varchar(100) NOT NULL,
  `x2m1hocky1_12` varchar(100) NOT NULL,
  `x2m2hocky1_11` varchar(100) NOT NULL,
  `x2m2hocky2_11` varchar(100) NOT NULL,
  `x2m2hocky1_12` varchar(100) NOT NULL,
  `x2m3hocky1_11` varchar(100) NOT NULL,
  `x2m3hocky2_11` varchar(100) NOT NULL,
  `x2m3hocky1_12` varchar(100) NOT NULL,
  `dahoctruong` varchar(100) NOT NULL,
  `hanhkiem11` varchar(100) NOT NULL,
  `hanhkiem12` varchar(100) NOT NULL,
  `madangkyxettuyenhoacsbd` varchar(100) NOT NULL,
  `nhapdiemmon1` varchar(100) NOT NULL,
  `nhapdiemmon2` varchar(100) NOT NULL,
  `nhapdiemmon3` varchar(100) NOT NULL,
  `dienthoai` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tenvadiachi` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admission
-- ----------------------------
INSERT INTO `admission` VALUES ('3', 'Nguyen Van Luan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-09-07 09:52:25', '2016-09-07 09:52:25');
INSERT INTO `admission` VALUES ('4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-09-07 09:53:23', '2016-09-07 09:53:23');
INSERT INTO `admission` VALUES ('5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-09-07 09:57:32', '2016-09-07 09:57:32');
INSERT INTO `admission` VALUES ('6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-09-07 09:57:42', '2016-09-07 09:57:42');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_index` (`parent_id`),
  KEY `categories_lft_index` (`lft`),
  KEY `categories_rgt_index` (`rgt`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', null, '1', '10', '0', '2016-09-08 02:06:39', '2016-09-08 02:07:50', 'Khoa', 'khoa', null);
INSERT INTO `categories` VALUES ('2', null, '11', '12', '0', '2016-09-08 02:06:51', '2016-09-08 02:07:50', 'Phòng Ban', 'phong-ban', null);
INSERT INTO `categories` VALUES ('3', '1', '2', '9', '1', '2016-09-08 02:07:02', '2016-09-08 02:07:50', 'Lập trình ứng dụng', 'lap-trinh-ung-dung', null);
INSERT INTO `categories` VALUES ('4', '3', '3', '4', '2', '2016-09-08 02:07:22', '2016-09-08 02:07:23', 'Công nghệ phần mềm', 'cong-nghe-phan-mem', null);
INSERT INTO `categories` VALUES ('5', '3', '5', '6', '2', '2016-09-08 02:07:35', '2016-09-08 02:07:35', 'Web service', 'web-service', null);
INSERT INTO `categories` VALUES ('6', '3', '7', '8', '2', '2016-09-08 02:07:50', '2016-09-08 02:07:50', 'Security', 'security', null);

-- ----------------------------
-- Table structure for display_status
-- ----------------------------
DROP TABLE IF EXISTS `display_status`;
CREATE TABLE `display_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `display_status_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of display_status
-- ----------------------------

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `original_name` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of images
-- ----------------------------

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of items
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_16_153623_create_tags_and_taggables_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_16_153731_create_posts_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_16_155647_create_images_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_17_163236_Create_display-status_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_21_152230_create_settings_table', '1');
INSERT INTO `migrations` VALUES ('2016_06_26_060937_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('2016_06_26_063040_create_products_table', '1');
INSERT INTO `migrations` VALUES ('2016_06_26_063321_create_products_categories_table', '1');
INSERT INTO `migrations` VALUES ('2016_07_12_074958_create_items_table', '1');
INSERT INTO `migrations` VALUES ('2016_07_12_075817_entrust_setup_tables', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'role-list', 'Display Role Listing', 'See only Listing Of Role', '2016-07-13 16:24:56', '2016-07-13 16:24:56');
INSERT INTO `permissions` VALUES ('2', 'role-create', 'Create Role', 'Create New Role', '2016-07-13 16:24:56', '2016-07-13 16:24:56');
INSERT INTO `permissions` VALUES ('3', 'role-edit', 'Edit Role', 'Edit Role', '2016-07-13 16:24:56', '2016-07-13 16:24:56');
INSERT INTO `permissions` VALUES ('4', 'role-delete', 'Delete Role', 'Delete Role', '2016-07-13 16:24:56', '2016-07-13 16:24:56');
INSERT INTO `permissions` VALUES ('5', 'item-list', 'Display Item Listing', 'See only Listing Of Item', '2016-07-13 16:24:56', '2016-07-13 16:24:56');
INSERT INTO `permissions` VALUES ('6', 'item-create', 'Create Item', 'Create New Item', '2016-07-13 16:24:56', '2016-07-13 16:24:56');
INSERT INTO `permissions` VALUES ('7', 'item-edit', 'Edit Item', 'Edit Item', '2016-07-13 16:24:56', '2016-07-13 16:24:56');
INSERT INTO `permissions` VALUES ('8', 'item-delete', 'Delete Item', 'Delete Item', '2016-07-13 16:24:56', '2016-07-13 16:24:56');

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES ('1', '1');
INSERT INTO `permission_role` VALUES ('2', '1');
INSERT INTO `permission_role` VALUES ('3', '1');
INSERT INTO `permission_role` VALUES ('4', '1');
INSERT INTO `permission_role` VALUES ('5', '1');
INSERT INTO `permission_role` VALUES ('5', '2');
INSERT INTO `permission_role` VALUES ('5', '3');
INSERT INTO `permission_role` VALUES ('6', '1');
INSERT INTO `permission_role` VALUES ('6', '2');
INSERT INTO `permission_role` VALUES ('6', '3');
INSERT INTO `permission_role` VALUES ('7', '1');
INSERT INTO `permission_role` VALUES ('7', '2');
INSERT INTO `permission_role` VALUES ('7', '3');
INSERT INTO `permission_role` VALUES ('8', '1');
INSERT INTO `permission_role` VALUES ('8', '2');
INSERT INTO `permission_role` VALUES ('8', '3');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `display` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_id_unique` (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'Xét tuyển trực tuyến 2016-Cơ hội học Cao đẳng chính quy bằng điểm học bạ THPT/Điểm THPT Quốc gia', 'xet-tuyen-truc-tuyen-2016-co-hoi-hoc-cao-dang-chinh-quy-bang-diem-hoc-ba-thptdiem-thpt-quoc-gia', '<p>Trường Cao đẳng Viễn Đông được Bộ GD&ĐT cho phép tuyển sinh hệ Cao đẳng chính quy từ kết quả học tập của bậc THPT/THBT hoặc từ điểm kỳ thi THPT Quốc gia 2016<br />\r\n<br />\r\n<strong>* ĐỐI VỚI ĐIỂM HỌC BẠ THPT/THBT</strong>: có 02 hình thức xét tuyển<br />\r\n<br />\r\n* Cách 1: Điểm Trung bình 03 học kỳ (2 học kỳ lớp 11 và HK1 lớp 12) của 3 môn xét tuyển theo khối >=5.5 thì bạn đủ điều kiện xét học Cao đẳng chính quy.<br />\r\n<br />\r\n* Cách 2: Điểm Trung bình 02 học kỳ lớp 12 của 3 môn xét tuyển theo khối >=5.5 thì bạn đủ điều kiện xét học Cao đẳng chính quy.<br />\r\n<br />\r\n* Điều kiện bắt buộc: tốt nghiệp THPT/THBT (thí sinh có thể đăng ký xét tuyển trước, khi có kết quả kỳ thi thì nộp bổ sung giấy chứng nhận tốt nghiệp tạm thời vào)<br />\r\n<br />\r\nThông tin chi tiết:<strong> <a href=\"http://www.viendong.edu.vn/d2976-thong-bao-tuyen-sinh-tu-diem-ky-thi-thpt-quoc-gia-va-diem-hoc-ba-thpt-thbt.html\">xem tại đây</a><br />\r\n<br />\r\n* ĐỐI VỚI ĐIỂM KỲ THI THPT QUỐC GIA 2016: </strong><br />\r\n<br />\r\nGiấy chứng nhận kết quả KỲ THI THPT QUỐC GIA 2016 đạt từ điểm xét tuyển theo quy định của trường trở lên.<br />\r\n(Theo quy định của Bộ GD&ĐT ngưỡng xét tuyển đối với các trường CĐ 2016: <strong>là tốt nghiệp THPT</strong>)<br />\r\n<br />\r\n<strong>THAM KHẢO ĐIỂM XÉT TUYỂN 2016: 12 điểm cho tất cả các khối ngành</strong><br />\r\n<br />\r\nHãy nhanh tay click vào để tham gia các bạn nhé.<br />\r\n<br />\r\nNhiều cơ hội học tập Cao đẳng chính quy tại trường Cao đẳng Viễn Đông để có việc làm ngay dành cho tất cả các bạn thí sinh, hãy nhanh chóng tham gia Chương trình Xét tuyển trực tuyến 2016.<br />\r\n<br />\r\n<strong>Nhanh tay click vào chuyên mục xét tuyển trực tuyến để thực hiện ước mơ học Cao đẳng chính quy của bạn ở Cao đẳng Viễn Đông nhé</strong><br />\r\n<br />\r\n<strong>Cao đẳng Viễn Đông tiên phong trong việc thực hiện các giải pháp cam kết đầu ra cho sinh viên sau khi tốt nghiệp: cam kết đảm bảo đầu ra các ngành </strong><strong>Cơ khí; Điện tử; Ôtô; Xây dựng</strong><strong>; các ngành liên quan Công nghệ thông tin (Tin học ứng dụng; Thiết kế đồ họa; Truyền thông và Mạng máy tính; Thiết kế công nghiệp); Điều dưỡng (Đa khoa; Hộ sinh); Xét nghiệm y học; Tiếng Anh (TA Thương mại; TA Giảng dạy)</strong>; <strong>Quản trị văn phòng; Quản trị Marketing; Quản trị Dịch vụ Du lịch Lữ hành; Quản trị Nhà hành - Khách sạn,...</strong><br />\r\n<br />\r\nChúc các bạn luôn vui vẻ và thành công.</p>\r\n', '1', 'XÉT TUYỂN TRỰC TUYẾN CƠ HỘI VÀNG ĐỂ HỌC CAO ĐẲNG CHÍNH QUY TỪ KẾT QUẢ CỦA BẬC THPT/THBT hoặc TỪ ĐIỂM KỲ THI THPT QUỐC GIA 2016', '1469246081.jpg', '2016-07-23 03:54:41', '2016-07-23 03:55:01', '1');
INSERT INTO `posts` VALUES ('2', 'Xét tuyển trực tuyến - cơ hội vàng để học Cao Đẳng chính quy từ Kết quả của bậc THPT/THBT hoặc từ điểm kỳ thi THPT Quốc gia', 'xet-tuyen-truc-tuyen-co-hoi-vang-de-hoc-cao-dang-chinh-quy-tu-ket-qua-cua-bac-thptthbt-hoac-tu-diem-ky-thi-thpt-quoc-gia-2016', '<p>Trường Cao đẳng Viễn Đông được Bộ GD&ĐT cho phép tuyển sinh hệ Cao đẳng chính quy từ kết quả học tập của bậc THPT/THBT hoặc từ điểm kỳ thi THPT Quốc gia 2016<br />\r\n<br />\r\n<strong>* ĐỐI VỚI ĐIỂM HỌC BẠ THPT/THBT</strong>: có 02 hình thức xét tuyển<br />\r\n<br />\r\n* Cách 1: Điểm Trung bình 03 học kỳ (2 học kỳ lớp 11 và HK1 lớp 12) của 3 môn xét tuyển theo khối >=5.5 thì bạn đủ điều kiện xét học Cao đẳng chính quy.<br />\r\n<br />\r\n* Cách 2: Điểm Trung bình 02 học kỳ lớp 12 của 3 môn xét tuyển theo khối >=5.5 thì bạn đủ điều kiện xét học Cao đẳng chính quy.<br />\r\n<br />\r\n* Điều kiện bắt buộc: tốt nghiệp THPT/THBT (thí sinh có thể đăng ký xét tuyển trước, khi có kết quả kỳ thi thì nộp bổ sung giấy chứng nhận tốt nghiệp tạm thời vào)<br />\r\n<br />\r\nThông tin chi tiết:<strong> <a href=\"http://www.viendong.edu.vn/d2976-thong-bao-tuyen-sinh-tu-diem-ky-thi-thpt-quoc-gia-va-diem-hoc-ba-thpt-thbt.html\">xem tại đây</a><br />\r\n<br />\r\n* ĐỐI VỚI ĐIỂM KỲ THI THPT QUỐC GIA 2016: </strong><br />\r\n<br />\r\nGiấy chứng nhận kết quả KỲ THI THPT QUỐC GIA 2016 đạt từ điểm xét tuyển theo quy định của trường trở lên.<br />\r\n(Theo quy định của Bộ GD&ĐT ngưỡng xét tuyển đối với các trường CĐ 2016: <strong>là tốt nghiệp THPT</strong>)<br />\r\n<br />\r\n<strong>THAM KHẢO ĐIỂM XÉT TUYỂN 2016: 12 điểm cho tất cả các khối ngành</strong><br />\r\n<br />\r\nHãy nhanh tay click vào để tham gia các bạn nhé.<br />\r\n<br />\r\nNhiều cơ hội học tập Cao đẳng chính quy tại trường Cao đẳng Viễn Đông để có việc làm ngay dành cho tất cả các bạn thí sinh, hãy nhanh chóng tham gia Chương trình Xét tuyển trực tuyến 2016.<br />\r\n<br />\r\n<strong>Nhanh tay click vào chuyên mục xét tuyển trực tuyến để thực hiện ước mơ học Cao đẳng chính quy của bạn ở Cao đẳng Viễn Đông nhé.</strong><br />\r\n<br />\r\n<strong>Cao đẳng Viễn Đông tiên phong trong việc thực hiện các giải pháp cam kết đầu ra cho sinh viên sau khi tốt nghiệp: cam kết đảm bảo đầu ra các ngành </strong><strong>Cơ khí; Điện tử; Ôtô; Xây dựng</strong><strong>; các ngành liên quan Công nghệ thông tin (Tin học ứng dụng; Thiết kế đồ họa; Truyền thông và Mạng máy tính; Thiết kế công nghiệp); Điều dưỡng (Đa khoa; Hộ sinh); Xét nghiệm y học; Tiếng Anh (TA Thương mại; TA Giảng dạy)</strong>; <strong>Quản trị văn phòng; Quản trị Marketing; Quản trị Dịch vụ Du lịch Lữ hành; Quản trị Nhà hành - Khách sạn,...</strong><br />\r\n<br />\r\nChúc các bạn luôn vui vẻ và thành công.</p>\r\n', '1', 'Trường Cao đẳng Viễn Đông được Bộ GD&ĐT cho phép tuyển sinh hệ Cao đẳng chính quy từ kết quả học tập của bậc THPT/THBT hoặc từ điểm kỳ thi THPT Quốc gia 2016.', '1469246081.jpg', '2016-07-27 14:19:24', '2016-07-27 14:19:56', '1');
INSERT INTO `posts` VALUES ('3', 'Thông báo tuyển sinh từ điểm kỳ thi THPT Quốc gia và điểm học bạ THPT/THBT', 'thong-bao-tuyen-sinh-tu-diem-ky-thi-thpt-quoc-gia-va-diem-hoc-ba-thptthbt', '<p><strong>Đề &aacute;n tuyển sinh: X&eacute;t tuyển để dể d&agrave;ng c&oacute; nhiều cơ hội học Cao đẳng ch&iacute;nh quy</strong>&nbsp;d&agrave;nh cho cả th&iacute; sinh thi THPT Quốc gia do c&aacute;c trường ĐH tổ chức; th&iacute; sinh thi cụm địa phương tổ chức; th&iacute; sinh học hệ Gi&aacute;o dục thường xuy&ecirc;n v&agrave; cả những th&iacute; sinh đ&atilde; tốt nghiệp THPT/THBT.</p>\r\n\r\n<p><strong>I. X&Eacute;T TUYỂN TỪ KẾT QUẢ KỲ THI THPT QUỐC GIA:</strong><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>- Chỉ ti&ecirc;u:</strong>&nbsp;<strong>800</strong><br />\r\n<br />\r\n<strong>- Ti&ecirc;u ch&iacute;:&nbsp;</strong>X&eacute;t tuyển dựa v&agrave;o kết quả kỳ thi THPT quốc gia:<br />\r\n<br />\r\n<strong>- Ngưỡng điểm x&eacute;t tuyển:</strong>&nbsp;<strong>Theo quy chế tuyển sinh ĐH, CĐ 2016 của Bộ GD&amp;ĐT</strong><br />\r\n<br />\r\n<strong>- Điều kiện:&nbsp;</strong>Điểm x&eacute;t tuyển l&agrave; tổng điểm của tổ hợp 3 m&ocirc;n x&eacute;t tuyển (kh&ocirc;ng nh&acirc;n hệ số) cộng với Điểm ưu ti&ecirc;n khu vưc, ưu ti&ecirc;n đối tượng (theo quy định hiện h&agrave;nh của Bộ GD&amp;ĐT).<br />\r\n<br />\r\n<strong>- Hồ sơ x&eacute;t tuyển:</strong><br />\r\na) Phiếu Đăng k&yacute; x&eacute;t tuyển c&oacute; ghi r&otilde; M&atilde; đăng k&yacute; x&eacute;t tuyển (ĐKXT), đợt x&eacute;t tuyển, cho ph&eacute;p th&iacute; sinh đăng k&yacute; tối đa 2 ng&agrave;nh (hoặc nh&oacute;m ng&agrave;nh). C&aacute;c nguyện vọng được xếp theo thứ tự ưu ti&ecirc;n từ 1 đến 2<em>:&nbsp;<a href=\"http://www.viendong.edu.vn/Media/files/DangKyXet_THPTQG_2016.docx\">download tại đ&acirc;y</a></em><br />\r\nb) Bản ch&iacute;nh Giấy chứng nhận kết quả thi tương ứng với đợt x&eacute;t tuyển (Nộp khi c&oacute; kết quả tr&uacute;ng tuyển).</p>\r\n\r\n<p>c) Hồ sơ đăng k&yacute; x&eacute;t tuyển:&nbsp;<a href=\"http://www.viendong.edu.vn/Media/files/HoSoXetTuyen_2016.docx\">download tại đ&acirc;y</a><br />\r\nc) 01 phong b&igrave; c&oacute; d&aacute;n sẳn tem v&agrave; ghi r&otilde; địa chỉ li&ecirc;n lạc của th&iacute; sinh để trường th&ocirc;ng b&aacute;o kết quả XT.<br />\r\n<br />\r\n<strong>- Lệ ph&iacute; x&eacute;t tuyển:</strong>&nbsp;30.000 đồng/hồ sơ.</p>\r\n\r\n<p><br />\r\n<strong><strong>II. X&Eacute;T TUYỂN TỪ KẾT QUẢ HỌC BẠ THPT/THBT:</strong></strong><strong>&nbsp;Chỉ ti&ecirc;u:&nbsp;2.700</strong></p>\r\n\r\n<p><br />\r\n<strong>1. Ti&ecirc;u ch&iacute; 1:&nbsp;</strong>c&oacute; 02 h&igrave;nh thức x&eacute;t tuyển từ điểm học bạ THPT d&agrave;nh cho th&iacute; sinh đ&atilde; tốt nghiệp THPT/THBT<br />\r\n<br />\r\n<strong>* H&igrave;nh thức 1:</strong>&nbsp;<em><strong>X&eacute;t tuyển từ điểm học bạ của 03 học kỳ (02 HK lớp 11 + HK 1 lớp 12) ở bậc THPT/THBT:</strong></em><br />\r\n<br />\r\n<strong>- Điều kiện:</strong>&nbsp;Điểm trung b&igrave;nh c&aacute;c m&ocirc;n học theo khối x&eacute;t tuyển của 3 học kỳ THPT gồm: 02 học kỳ lớp 11 v&agrave; học kỳ 1 lớp 12.&nbsp;<br />\r\n<br />\r\n<strong>* H&igrave;nh thức 2:</strong>&nbsp;<em><strong>X&eacute;t tuyển từ điểm học bạ của 02 học kỳ lớp 12 ở bậc THPT/THBT:</strong></em><br />\r\n<br />\r\n<strong>- Điều kiện:</strong>&nbsp;Điểm trung b&igrave;nh c&aacute;c m&ocirc;n học theo khối x&eacute;t tuyển của 2 học kỳ lớp 12 ở bậc THPT/THBT:</p>\r\n\r\n<p><strong>2. Ti&ecirc;u ch&iacute; 2:</strong><br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>ĐXT = Điểm trung b&igrave;nh + Điểm ưu ti&ecirc;n&nbsp;</strong>(nếu c&oacute;)<br />\r\n<br />\r\nTrong đ&oacute;: Điểm ưu ti&ecirc;n = (Điểm ưu ti&ecirc;n khu vực + Điểm ưu ti&ecirc;n đối tượng)<br />\r\n<br />\r\n* V&iacute; dụ: th&iacute; sinh chọn c&aacute;c m&ocirc;n khối A để x&eacute;t tuyển: To&aacute;n, L&yacute;, H&oacute;a<br />\r\n<em>C&aacute;ch t&iacute;nh điểm 03 học kỳ:</em><br />\r\n&nbsp; - M&ocirc;n To&aacute;n: điểm TB m&ocirc;n to&aacute;n (HK1 lớp 11 + HK2 lớp 11 + HK1 lớp 12) chia 3<br />\r\n&nbsp; - M&ocirc;n L&yacute;, M&ocirc;n H&oacute;a: t&iacute;nh tương tự<br />\r\n&nbsp; - Lấy kết quả 03 m&ocirc;n vừa t&iacute;nh được cộng lại&nbsp;v&agrave; chia cho 3<br />\r\n&nbsp;&nbsp;- ĐXT = ĐTB&nbsp;+ điểm ưu ti&ecirc;n (nếu c&oacute;)<br />\r\n<br />\r\n* V&iacute; dụ: th&iacute; sinh chọn c&aacute;c m&ocirc;n khối t&iacute;ch hợp để x&eacute;t tuyển: To&aacute;n, L&yacute;, Sử<br />\r\n<em>C&aacute;ch t&iacute;nh điểm 02 học kỳ:</em><br />\r\n&nbsp; - M&ocirc;n To&aacute;n: điểm TB m&ocirc;n to&aacute;n (HK1 lớp 12 + HK2 lớp 12) chia 2<br />\r\n&nbsp; - M&ocirc;n L&yacute;, M&ocirc;n Sử: t&iacute;nh tương tự<br />\r\n&nbsp; - Lấy kết quả 03 m&ocirc;n vừa t&iacute;nh được cộng lại&nbsp;v&agrave; chia cho 3.<br />\r\n&nbsp; - ĐXT = ĐTB&nbsp;+ điểm ưu ti&ecirc;n (nếu c&oacute;)<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n<strong>3. Ti&ecirc;u ch&iacute; 3:</strong><br />\r\n<br />\r\n- H&igrave;nh thức 1: Hạnh kiểm đạt từ loại Kh&aacute; trở l&ecirc;n.<br />\r\n<br />\r\n- H&igrave;nh thức 2: Hạnh kiểm đạt từ Trung b&igrave;nh trở l&ecirc;n.<br />\r\n<br />\r\n<strong>4. Ti&ecirc;u ch&iacute; 4:</strong>&nbsp;Th&iacute; sinh sẽ viết đơn dự tuyển n&ecirc;u r&otilde; l&yacute; do chọn trường, chọn ng&agrave;nh v&agrave; kế hoạch, mục ti&ecirc;u học tập trong 30 ph&uacute;t, được viết tự do kh&ocirc;ng theo mẫu.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>5. Khối x&eacute;t tuyển:</strong>&nbsp;theo khối truyền thống A, A1, B, C, D1, H hoặc c&aacute;c khối t&iacute;ch hợp theo ng&agrave;nh (ph&ugrave; hợp với sở trường của th&iacute; sinh): xem chi tiết đề &aacute;n tuyển sinh download tại đ&acirc;y.<br />\r\n<br />\r\n<strong>6. Thời gian nhận hồ sơ x&eacute;t tuyển của cả 02 phương thức:</strong></p>\r\n\r\n<p>Th&iacute; sinh nộp hồ sơ x&eacute;t tuyển theo đường bưu điện hoặc trực tiếp tại trường&nbsp;hoặc c&oacute; thể đăng k&yacute; trực tuyến tại website:&nbsp;<a href=\"http://www.viendong.edu.vn/a0-xet-tuyen-truc-tuyen.html\">http://www.viendong.edu.vn/a0-xet-tuyen-truc-tuyen.html</a></p>\r\n\r\n<p><strong>+ Đợt 1:</strong></p>\r\n\r\n<p>- Nhận hồ sơ: từ ng&agrave;y 01/06/2016 -&gt; 30/07/2016 (đối với những th&iacute; sinh đăng k&yacute; từ điểm học bạ THPT/THBT v&agrave; đ&atilde; tốt nghiệp THPT/THBT)</p>\r\n\r\n<p>- Nhập học: ng&agrave;y 08/08/2016 (thứ hai)</p>\r\n\r\n<p><strong>+ Đợt 2:</strong></p>\r\n\r\n<p>- Nhận hồ sơ: từ ng&agrave;y 01/08/2016 -&gt; 12/08/2016 (đối với cả 2 phương thức x&eacute;t tuyển từ điểm học bạ v&agrave; cả điểm kỳ thi THPT Quốc gia 2016)</p>\r\n\r\n<p>- Nhập học: ng&agrave;y 29/08/2016 (thứ hai)</p>\r\n\r\n<p><strong>+ Đợt 3:</strong></p>\r\n\r\n<p>- Nhận hồ sơ: từ ng&agrave;y 15/08/2016 -&gt; 25/08/2016 (đối với cả 2 phương thức x&eacute;t tuyển từ điểm học bạ v&agrave; cả điểm kỳ thi THPT Quốc gia 2016)</p>\r\n\r\n<p>- Nhập học: ng&agrave;y 12/09/2016 (thứ hai)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>+ C&aacute;c đợt NVBS c&ograve;n lại (mỗi đợt 10 ng&agrave;y):</strong></p>\r\n\r\n<p>- Nhận hồ sơ: từ ng&agrave;y 25/08/2016 -&gt; 15/11/2016 (đối với cả 2 phương thức x&eacute;t tuyển từ điểm học bạ v&agrave; cả điểm kỳ thi THPT Quốc gia 2016)</p>\r\n\r\n<p>- Nhập học: ng&agrave;y 26/09/2016 hoặc 10/10/2016 hoặc 21/11/2016</p>\r\n\r\n<p><strong>7. Hồ sơ x&eacute;t tuyển gồm</strong><br />\r\n-&nbsp; Đơn xin x&eacute;t tuyển (theo mẫu của trường Cao đẳng Viễn Đ&ocirc;ng:&nbsp;<a href=\"http://www.viendong.edu.vn/Media/files/Phieu_DKXT_Hocba2016.docx\">download tại đ&acirc;y</a>).</p>\r\n\r\n<p>-&nbsp; Hồ sơ x&eacute;t tuyển:&nbsp;<a href=\"http://www.viendong.edu.vn/Media/files/HoSoXetTuyen_2016(1).docx\">download tại đ&acirc;y</a><br />\r\n-&nbsp; Học bạ THPT/THBT (photo c&ocirc;ng chứng).<br />\r\n-&nbsp; Bằng tốt nghiệp hoặc giấy chứng nhận tốt nghiệp THPT tạm thời (photo c&ocirc;ng chứng) (Th&iacute; sinh chưa c&oacute; sẽ bổ sung sau khi được c&ocirc;ng nhận tốt nghiệp THPT 2016).<br />\r\n-&nbsp; 03 ảnh 3x4 (chụp trong v&ograve;ng 6 th&aacute;ng).</p>\r\n\r\n<p>-&nbsp; Giấy CMND (photo c&ocirc;ng chứng).<br />\r\n-&nbsp; 02 phong b&igrave; d&aacute;n tem v&agrave; ghi r&otilde; địa chỉ của người nhận.<br />\r\n-&nbsp; Lệ ph&iacute; x&eacute;t tuyển: 30.000 đồng/hồ sơ</p>\r\n\r\n<p><br />\r\n<strong>8. Học ph&iacute;:</strong></p>\r\n\r\n<p><strong>- Khối ng&agrave;nh Kinh tế:&nbsp;</strong><strong>380.000đ/t&iacute;n chỉ:&nbsp;</strong>gồm&nbsp;<em>QT Văn ph&ograve;ng, QT Kinh doanh, QT Marketing, Kế to&aacute;n, T&agrave;i ch&iacute;nh-Ng&acirc;n h&agrave;ng, Thư k&yacute; Y khoa.</em></p>\r\n\r\n<p><strong>- Khối ng&agrave;nh C&ocirc;ng nghệ v&agrave; CNTT:&nbsp;</strong><strong>400.000đ/t&iacute;n chỉ:&nbsp;</strong>gồm&nbsp;C<em>ơ kh&iacute;, Điện - Điện tử, X&acirc;y dựng, &Ocirc; t&ocirc;, Lập tr&igrave;nh ứng dụng, Thiết kế đồ họa, Truyền th&ocirc;ng v&agrave; Mạng MT.</em></p>\r\n\r\n<p><strong>- Khối ng&agrave;nh Tiếng Anh:&nbsp;<strong>450.000đ/t&iacute;n chỉ:&nbsp;</strong></strong>gồm<strong>&nbsp;</strong><em>Tiếng Anh giảng dạy, Tiếng Anh thương mại.</em></p>\r\n\r\n<p><strong>- Khối ng&agrave;nh Y tế:</strong>&nbsp;<strong>470.000đ/t&iacute;n chỉ:&nbsp;</strong>gồm&nbsp;<em>Điều dưỡng, X&eacute;t nghiệm Y học, Chẩn đo&aacute;n h&igrave;nh ảnh.</em></p>\r\n\r\n<p><strong>+ Được hỗ trợ vay vốn c&ugrave;ng l&uacute;c hai ng&acirc;n h&agrave;ng: Ng&acirc;n h&agrave;ng Ch&iacute;nh s&aacute;ch v&agrave; Ng&acirc;n h&agrave;ng Đầu tư &amp; Ph&aacute;t triển Việt Nam BIDV</strong></p>\r\n\r\n<p><strong>+ Được cam kết kh&ocirc;ng tăng học ph&iacute; v&agrave; kh&ocirc;ng thu phụ ph&iacute; trong suốt qu&aacute; tr&igrave;nh học</strong></p>\r\n\r\n<p><strong>9. Kh&aacute;c biệt ở Cao đẳng Viễn Đ&ocirc;ng:</strong><br />\r\n-&nbsp;<em><strong>Cam kết đảm bảo đầu ra</strong></em>&nbsp;(việc l&agrave;m lương cao) c&aacute;c ng&agrave;nh: Cơ kh&iacute;, Điện - Điện tử, Oto, X&acirc;y dựng, C&ocirc;ng nghệ th&ocirc;ng tin (Lập tr&igrave;nh ứng dụng, Thiết kế đồ họa, Truyền th&ocirc;ng v&agrave; Mạng m&aacute;y t&iacute;nh), Điều dưỡng, Tiếng Anh thương mại, Quản trị văn ph&ograve;ng, QT Marketing, QT Du lịch nh&agrave; h&agrave;ng kh&aacute;ch sạn, Tiếng Anh giảng dạy.<br />\r\n- Được&nbsp;<em><strong>học trực tiếp với giảng vi&ecirc;n nước ngo&agrave;i&nbsp;</strong></em>trong c&aacute;c m&ocirc;n ng&agrave;nh Tiếng Anh.<br />\r\n-&nbsp;<em><strong>Cơ sở học tập hiện đại</strong></em>, tho&aacute;ng m&aacute;t, đầy đủ c&aacute;c trang thiết bị d&agrave;nh cho thực h&agrave;nh, thực tập.<br />\r\n-&nbsp;<em><strong>Được ra trường sớm</strong></em>&nbsp;với chương tr&igrave;nh học vượt (Học theo t&iacute;n chỉ).<br />\r\n-&nbsp;<em><strong>Cơ hội được học v&agrave; l&agrave;m việc tại nước ngo&agrave;i cao</strong></em>&nbsp;(như Mỹ, Nhật, Philippin,...)<br />\r\nXem chi tiết tại đ&acirc;y:&nbsp;<a href=\"http://www.viendong.edu.vn/d1999-tai-sao-ban-chon-hoc-tai-truong-cao-dang-vien-dong-tp-hcm.html\"><em>click v&agrave;o đ&acirc;y</em></a><br />\r\n<br />\r\n<strong>10. Mọi thắc mắc, vui l&ograve;ng li&ecirc;n hệ:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Trung t&acirc;m Tư vấn v&agrave; Hướng nghiệp SV&nbsp;</strong><br />\r\n<strong>TRƯỜNG CAO ĐẲNG VIỄN Đ&Ocirc;NG TP. HCM</strong><br />\r\n<strong>Khu trường mới - Cơ sở ch&iacute;nh:</strong>&nbsp;L&ocirc; 2, C&ocirc;ng vi&ecirc;n Phần mềm Quang Trung, Q. 12, TP. HCM<br />\r\n<strong>Hotlines/Zalo/viber:&nbsp;0977 33 44 00 - 0962 05 03 03 - 0966 33 77 55&nbsp;</strong><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; hoặc (08) 389 11111</p>\r\n\r\n<p><strong>Facebook hoặc Yahoo chat</strong><strong>:</strong><strong>&nbsp;</strong><strong>vivatuvan</strong></p>\r\n\r\n<p><strong>Website:&nbsp;www.viendong.edu.vn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email:</strong>&nbsp;<strong>tuvanviendong@viendong.edu.vn</strong><br />\r\n&nbsp;</p>\r\n', '1', 'Đề án tuyển sinh: Xét tuyển để dể dàng có nhiều cơ hội học Cao đẳng chính quy dành cho cả thí sinh thi THPT Quốc gia do các trường ĐH tổ chức; thí sinh thi cụm địa phương tổ chức; thí sinh học hệ Giáo dục thường xuyên và cả những thí sinh đã tốt nghiệp TH', '1469629526.png', '2016-07-27 14:25:26', '2016-07-27 14:25:26', '1');
INSERT INTO `posts` VALUES ('4', 'Đề án tuyển sinh 2016 của Trường Cao đẳng Viễn Đông', 'de-an-tuyen-sinh-2016-cua-truong-cao-dang-vien-dong', '<p>- Chỉ ti&ecirc;u: 1.800<br />\r\n<br />\r\n- Ti&ecirc;u ch&iacute;: X&eacute;t tuyển dựa v&agrave;o kết quả kỳ thi THPT quốc gia: Căn cứ v&agrave;o kết quả kỳ thi THPT quốc gia dựa tr&ecirc;n ngưỡng điểm x&eacute;t tuyển tối thiểu do Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo quy định (dự kiến: ngưỡng điểm x&eacute;t tuyển của cao đẳng ch&iacute;nh quy l&agrave; tốt nghiệp THPT)<br />\r\n<br />\r\n- Điều kiện: Điểm x&eacute;t tuyển l&agrave; tổng điểm của tổ hợp 3 m&ocirc;n x&eacute;t tuyển (kh&ocirc;ng nh&acirc;n hệ số) cộng với Điểm ưu ti&ecirc;n khu vưc, ưu ti&ecirc;n đối tượng (theo quy định hiện h&agrave;nh của Bộ GD&amp;ĐT).<br />\r\n<br />\r\n<br />\r\n<strong>II. X&Eacute;T TUYỂN TỪ KẾT QUẢ HỌC BẠ THPT/THBT:</strong>&nbsp;Chỉ ti&ecirc;u: 2.200<br />\r\n<br />\r\n<strong>1. Ti&ecirc;u ch&iacute; 1:&nbsp;</strong><strong>c&oacute; 02 h&igrave;nh thức x&eacute;t tuyển từ điểm học bạ THPT d&agrave;nh cho th&iacute; sinh đ&atilde; tốt nghiệp THPT/THBT</strong><br />\r\n<br />\r\n* H&igrave;nh thức 1:&nbsp;<strong>X&eacute;t tuyển từ điểm học bạ của 03 học kỳ (02 HK lớp 11 + HK 1 lớp 12) ở bậc THPT/THBT:</strong><br />\r\n<br />\r\n- Điều kiện: Điểm trung b&igrave;nh c&aacute;c m&ocirc;n học theo khối x&eacute;t tuyển của 3 học kỳ THPT gồm: 02 học kỳ lớp 11 v&agrave; học kỳ 1 lớp 12.<br />\r\n<br />\r\n* H&igrave;nh thức 2:&nbsp;<strong>X&eacute;t tuyển từ điểm học bạ của 02 học kỳ lớp 12 ở bậc THPT/THBT:</strong><br />\r\n<br />\r\n- Điều kiện: Điểm trung b&igrave;nh c&aacute;c m&ocirc;n học theo khối x&eacute;t tuyển của 2 học kỳ lớp 12 ở bậc THPT/THBT:<br />\r\n<br />\r\n<strong>2. Ti&ecirc;u ch&iacute; 2:</strong><br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>ĐXT = Điểm trung b&igrave;nh + Điểm ưu ti&ecirc;n (nếu c&oacute;)</strong><br />\r\n<br />\r\nTrong đ&oacute;: Điểm ưu ti&ecirc;n = (Điểm ưu ti&ecirc;n khu vực + Điểm ưu ti&ecirc;n đối tượng)<br />\r\n<br />\r\n<em><strong>* V&iacute; dụ:</strong></em>&nbsp;th&iacute; sinh chọn c&aacute;c m&ocirc;n khối A để x&eacute;t tuyển: To&aacute;n, L&yacute;, H&oacute;a<br />\r\nC&aacute;ch t&iacute;nh điểm 03 học kỳ:<br />\r\n&nbsp; - M&ocirc;n To&aacute;n: điểm TB m&ocirc;n to&aacute;n (HK1 lớp 11 + HK2 lớp 11 + HK1 lớp 12) chia 3<br />\r\n&nbsp; - M&ocirc;n L&yacute;, M&ocirc;n H&oacute;a: t&iacute;nh tương tự<br />\r\n&nbsp; - Lấy kết quả 03 m&ocirc;n vừa t&iacute;nh được cộng lại v&agrave; chia cho 3&nbsp;<br />\r\n&nbsp; - ĐXT = ĐTB + điểm ưu ti&ecirc;n (nếu c&oacute;)<br />\r\n<br />\r\n<em><strong>* V&iacute; dụ:</strong></em>&nbsp;th&iacute; sinh chọn c&aacute;c m&ocirc;n khối t&iacute;ch hợp để x&eacute;t tuyển: To&aacute;n, L&yacute;, Sử<br />\r\nC&aacute;ch t&iacute;nh điểm 02 học kỳ:<br />\r\n&nbsp; - M&ocirc;n To&aacute;n: điểm TB m&ocirc;n to&aacute;n (HK1 lớp 12 + HK2 lớp 12) chia 2<br />\r\n&nbsp; - M&ocirc;n L&yacute;, M&ocirc;n Sử: t&iacute;nh tương tự<br />\r\n&nbsp; - Lấy kết quả 03 m&ocirc;n vừa t&iacute;nh được cộng lại v&agrave; chia cho 3&nbsp;<br />\r\n&nbsp; - ĐXT = ĐTB + điểm ưu ti&ecirc;n (nếu c&oacute;)<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n<strong>3. Ti&ecirc;u ch&iacute; 3:</strong><br />\r\n- H&igrave;nh thức 1: Hạnh kiểm đạt từ loại Kh&aacute; trở l&ecirc;n.<br />\r\n<br />\r\n- H&igrave;nh thức 2: Hạnh kiểm đạt từ Trung b&igrave;nh trở l&ecirc;n.<br />\r\n<br />\r\n<strong>4. Ti&ecirc;u ch&iacute; 4:&nbsp;</strong>Th&iacute; sinh sẽ viết đơn dự tuyển n&ecirc;u r&otilde; l&yacute; do chọn trường, chọn ng&agrave;nh v&agrave; kế hoạch, mục ti&ecirc;u học tập trong 30 ph&uacute;t, được viết tự do kh&ocirc;ng theo mẫu.<br />\r\n<br />\r\n<strong>5. Khối x&eacute;t tuyển:</strong>&nbsp;theo khối truyền thống A, A1, B, C, D1, H hoặc c&aacute;c khối t&iacute;ch hợp theo ng&agrave;nh (ph&ugrave; hợp với sở trường của th&iacute; sinh): xem chi tiết đề &aacute;n tuyển sinh download&nbsp;<a href=\"http://www.viendong.edu.vn/uploads/Files/T2_2016/020934_Deantuyensinh2016.pdf\" name=\"\" target=\"_blank\">tại đ&acirc;y</a>.<br />\r\n<br />\r\n<strong>6. Thời gian nhận hồ sơ x&eacute;t tuyển của cả 02 phương thức:</strong>&nbsp;Th&iacute; sinh nộp hồ sơ x&eacute;t tuyển theo đường bưu điện hoặc trực tiếp tại trường<br />\r\n+ Đợt 1:&nbsp;<br />\r\no&nbsp;&nbsp;&nbsp; Nhận hồ sơ: 01/03/2016 -&gt; 30/06/2016<br />\r\no&nbsp;&nbsp;&nbsp; Nhập học: Th&aacute;ng 7/2016 (đối với th&iacute; sinh đăng k&yacute; x&eacute;t tuyển bằng điểm học bạ THPT/THBT v&agrave; đ&atilde; tốt nghiệp THPT/THBT)<br />\r\n<br />\r\n+ Đợt 2:<br />\r\no&nbsp;&nbsp;&nbsp; Nhận hồ sơ: 01/07/2016 -&gt; 31/07/2016&nbsp;<br />\r\no&nbsp;&nbsp;&nbsp; Nhập học: Th&aacute;ng 8/2016<br />\r\n<br />\r\n+ Đợt 3:<br />\r\no&nbsp;&nbsp;&nbsp; Nhận hồ sơ: 01/08/2016 - 31/08/2016<br />\r\no&nbsp;&nbsp;&nbsp; Nhập học: Th&aacute;ng 9/2016<br />\r\n<br />\r\n+ Đợt 4:&nbsp;<br />\r\no&nbsp;&nbsp;&nbsp; Nhận hồ sơ: 01/09/2016 - 07/11/2016<br />\r\no&nbsp;&nbsp;&nbsp; Nhập học: Th&aacute;ng 11/2016</p>\r\n', '1', 'NỘI DUNG TÓM TẮT CỦA ĐỀ ÁN TUYỂN SINH 2016 TRƯỜNG CAO ĐẲNG VIỄN ĐÔNG\r\n', '1469629631.jpg', '2016-07-27 14:27:11', '2016-07-27 14:27:11', '1');
INSERT INTO `posts` VALUES ('5', 'Bài Trắc nghiệm lựa chọn ngành học - Dự báo nhu cầu nguồn nhân lực đến năm 2025', 'bai-trac-nghiem-lua-chon-nganh-hoc-du-bao-nhu-cau-nguon-nhan-luc-den-nam-2025', '<p><strong>BƯỚC A: Thực hiện b&agrave;i trắc nghiệm để x&aacute;c định được ng&agrave;nh học ph&ugrave; hợp sở trường của bản th&acirc;n:</strong></p>\r\n\r\n<p><br />\r\nKhi được hỏi về việc chọn ng&agrave;nh, chọn trường trong kỳ tuyển sinh, C&oacute; bạn n&oacute;i: &ldquo;Em xin x&eacute;t v&agrave;o ĐH Kinh tế, ĐH B&aacute;ch khoa v&igrave; gần hết lớp của em x&eacute;t v&agrave;o đ&oacute;, em kh&ocirc;ng x&eacute;t trường đ&oacute; m&agrave; x&eacute;t trường kh&aacute;c th&igrave; buồn lắm&rdquo;. C&oacute; bạn lại n&oacute;i &ldquo; bố mẹ em bắt em học trường y n&ecirc;n em phải chọn x&eacute;t v&agrave;o trường y... C&oacute; đến 1.001 c&aacute;ch chọn ng&agrave;nh, trường.<br />\r\nV&igrave; sao Bill Gates trở th&agrave;nh &ocirc;ng chủ của tập đo&agrave;n Microsoft khổng lồ m&agrave; kh&ocirc;ng phải l&agrave; một kiến tr&uacute;c sư hay một nh&agrave; gi&aacute;o? V&igrave; sao Đặng Th&aacute;i Sơn l&agrave; nghệ sĩ đ&agrave;n dương cầm nổi tiếng m&agrave; kh&ocirc;ng phải l&agrave; một doanh nh&acirc;n? V&igrave; sao Ernest Hemingway l&agrave; nh&agrave; văn với những kiệt t&aacute;c bất hủ m&agrave; kh&ocirc;ng phải l&agrave; một nh&agrave; khoa học? Hẳn bạn sẽ trả lời ngay &ldquo;V&igrave; họ c&oacute; t&agrave;i năng thi&ecirc;n bẩm trong những lĩnh vực n&agrave;y.&rdquo; Ch&iacute;nh x&aacute;c như thế. Thế nhưng, bạn c&oacute; biết ch&iacute;nh t&iacute;nh c&aacute;ch, sở th&iacute;ch của bản th&acirc;n l&agrave; một trong những yếu tố quan trọng quyết định nghề nghiệp ph&ugrave; hợp của mỗi con người?<br />\r\nBạn c&oacute; muốn biết m&igrave;nh thuộc t&iacute;p người n&agrave;o v&agrave; nghề nghiệp n&agrave;o ph&ugrave; hợp với bạn nhất kh&ocirc;ng? Mời bạn tham gia b&agrave;i trắc nghiệm sau:<br />\r\n<br />\r\nBước thứ nhất: c&aacute;c bạn tự điền v&agrave;o s&aacute;u phiếu &ldquo;tự kh&aacute;m ph&aacute; sở th&iacute;ch&rdquo; A, B, C, D, E, F b&ecirc;n dưới để xem phiếu n&agrave;o được điểm cao nhất th&igrave; sở th&iacute;ch nghề nghiệp của bạn ở hướng đ&oacute;.&nbsp;<br />\r\nC&aacute;ch điền: đọc từng mục tự kh&aacute;m ph&aacute; (1 đến 9), đ&aacute;nh dấu v&agrave;o mức độ 1,2,3,4,5.&nbsp;<br />\r\nĐ&aacute;nh dấu cột mức độ xong th&igrave; tự điền điểm v&agrave;o cột điểm.&nbsp;<br />\r\nMức 1: rất thấp = 1 điểm, mức 2: thấp = 2 điểm, mức 3: vừa = 3 điểm, mức 4: cao = 4 điểm, mức 5: rất cao = 5 điểm.&nbsp;</p>\r\n', '1', 'BÀI TRẮC NGHIỆM CHỌN NGÀNH HỌC PHÙ HỢP VỚI NĂNG LỰC, SỞ TRƯỜNG\r\n', '1469629726.jpg', '2016-07-27 14:28:46', '2016-07-27 14:28:46', '1');
INSERT INTO `posts` VALUES ('8', 'Thông báo tuyển sinh từ điểm kỳ thi THPT Quốc gia và điểm học bạ THPT/THBT 2', 'thong-bao-tuyen-sinh-tu-diem-ky-thi-thpt-quoc-gia-va-diem-hoc-ba-thptthbt-2', '<p>route</p>\r\n', '1', 'Thông báo tuyển sinh từ điểm kỳ thi THPT Quốc gia và điểm học bạ THPT/THBT 2', '1473475332_viendong_6.jpg.jpg', '2016-09-09 04:14:29', '2016-09-10 02:42:13', '1');

-- ----------------------------
-- Table structure for posts_categories
-- ----------------------------
DROP TABLE IF EXISTS `posts_categories`;
CREATE TABLE `posts_categories` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts_categories
-- ----------------------------
INSERT INTO `posts_categories` VALUES ('0', '8', '1', '2016-09-10 09:12:01', '0000-00-00 00:00:00');
INSERT INTO `posts_categories` VALUES ('0', '8', '3', '2016-09-10 09:12:01', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abstract` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `producer` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `features` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang cập nhật...',
  `specifications` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang cập nhật...',
  `document` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang cập nhật...',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for products_categories
-- ----------------------------
DROP TABLE IF EXISTS `products_categories`;
CREATE TABLE `products_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products_categories
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Administrator', 'Admininstrator', '2016-07-14 08:47:44', '2016-07-14 08:47:47');
INSERT INTO `roles` VALUES ('2', 'moderater', 'Moderater', 'Manager website', '2016-07-14 08:50:25', '2016-07-14 08:50:27');
INSERT INTO `roles` VALUES ('3', 'user', 'User', 'Use', '2016-07-14 08:50:58', '2016-07-14 08:51:01');

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('1', '2');
INSERT INTO `role_user` VALUES ('1', '3');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'viendong.edu.vn', 'vien dong', 'viendong@viendong.edu.vn', '1233455555', 'Lo 2, CVPM Quang Trung', 'Lo 2, CVPM Quang Trung', 'Quan 12', 'Viet Nam', '700000', '', '', '', '', '', null, '2016-09-09 04:21:50');

-- ----------------------------
-- Table structure for taggables
-- ----------------------------
DROP TABLE IF EXISTS `taggables`;
CREATE TABLE `taggables` (
  `tag_id` int(11) NOT NULL,
  `taggable_id` int(11) NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of taggables
-- ----------------------------
INSERT INTO `taggables` VALUES ('1', '1', 'App\\Post');
INSERT INTO `taggables` VALUES ('2', '1', 'App\\Post');
INSERT INTO `taggables` VALUES ('3', '1', 'App\\Post');
INSERT INTO `taggables` VALUES ('4', '2', 'App\\Post');
INSERT INTO `taggables` VALUES ('5', '2', 'App\\Post');
INSERT INTO `taggables` VALUES ('4', '3', 'App\\Post');
INSERT INTO `taggables` VALUES ('5', '4', 'App\\Post');
INSERT INTO `taggables` VALUES ('4', '5', 'App\\Post');
INSERT INTO `taggables` VALUES ('6', '5', 'App\\Post');
INSERT INTO `taggables` VALUES ('4', '6', 'App\\Post');
INSERT INTO `taggables` VALUES ('7', '6', 'App\\Post');
INSERT INTO `taggables` VALUES ('8', '8', 'App\\Post');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('2', 'tin-tuc');
INSERT INTO `tags` VALUES ('3', 'tuyen-sinh');
INSERT INTO `tags` VALUES ('4', 'viễn đông');
INSERT INTO `tags` VALUES ('5', 'tuyển sinh');
INSERT INTO `tags` VALUES ('6', 'tin tức');
INSERT INTO `tags` VALUES ('7', 'ngành nghề');
INSERT INTO `tags` VALUES ('8', '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@viendong.edu.vn', '$2y$10$C.KsvOWiF.bif0UzBfdnpu2IpE.EVl1vG6ZcVKdjODb6VRieUUeO.', '5uyD5fWPpp6GXISgrNuhcn9JVHZJnkwalY1eVWRUBhEzkToxluQZ0TBPaaWf', '2016-06-26 00:16:21', '2016-06-26 03:16:38');

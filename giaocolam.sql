-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: giaocolam
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Ly huynh nga','huynhngaly@yahoo.com','0908878947','Xin cho em hoi? Em nam nay 35 tuoi, mat trai cua em chac bi tu nho khong thay hinh ro nhin chi thay dang mo thoi, mat fai thi binh thuong 10/10 sau do e co di kham o benh vien mat sg bs noi mat em bi nhuoc thi, chi cho uong thuoc va nho mat, sau do e k co di kham lai, den nay mat fai cua e dao nay hoi bi mo, em di do mat thi e bi lang 2 do, va deo kinh lang vo thi thay ro hon,.nhu vay mat fai e co bi anh huong tu mat trai k? Va co tri dc khong? E can tu van, vi hien nay e dang co em be dang cho bu me, nen khong dam uong thuoc gi het.. \r\nE xin cam on!','2015-05-15 14:28:31','2015-05-15 14:28:31'),(2,'doi thi hoai huong','','01677443393','toi nam nay 43 tuoi mat rat kem doc bao hay sdt phai deo kinh moi doc duoc co phai toi bi benh ve mat khong','2015-05-18 12:33:25','2015-05-18 12:33:25'),(3,'nguyễn hải long','boy_bibi11o2@yahoo.com.vn','01677191200','em muốn mua sp nhưng mà không biết nơi bán.anh chị cho em vài địa chỉ ở hà nội bán đc khônh ạ','2015-05-21 03:46:51','2015-05-21 03:46:51');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_03_17_021331_create_posts_table',1),('2015_03_30_013913_create_tags_table',1),('2015_03_31_082046_create_questions_table',1),('2015_03_31_093809_create_contacts_table',1),('2015_05_03_113908_create_settings_table',1),('2015_05_03_143818_add_fields_to_table_questions',1),('2015_05_07_051625_add_field_to_questions',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tag` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `post_tag_post_id_index` (`post_id`),
  KEY `post_tag_tag_id_index` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `homepage_slide` tinyint(1) NOT NULL DEFAULT '0',
  `homepage_intro` tinyint(1) NOT NULL DEFAULT '0',
  `homepage_discovery` tinyint(1) NOT NULL DEFAULT '0',
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `reason` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ask_person` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer_person` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ask_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ask_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ask_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `questions_slug_unique` (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'meta_title','LycoEye - Sang mat sang tuong lai','2015-05-04 00:29:52','2015-05-04 00:29:52'),(2,'meta_desc','LycoEye - Sang mat sang tuong lai','2015-05-04 00:29:52','2015-05-04 00:29:52'),(3,'lyco_page_tab1','<p style=\"text-align:justify\"><em>Tật kh&uacute;c xạ l&agrave; cụm từ chung chỉ c&aacute;c tật về mắt (cận thị, viễn thị, loạn thị) khiến mắt kh&ocirc;ng nh&igrave;n r&otilde; vật do c&aacute;c tia s&aacute;ng kh&ocirc;ng hội tụ tr&ecirc;n v&otilde;ng mạc.&nbsp;Hiện nay tật kh&uacute;c xạ l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y m&ugrave; l&ograve;a thứ hai tr&ecirc;n thế giới.&nbsp;</em></p>\r\n\r\n<p style=\"text-align:justify\">Theo thống k&ecirc; của tổ chức &yacute; tế thế giới tật kh&uacute;c xạ ( TKX )&nbsp;hiện nay đang ảnh l&agrave;m ảnh hưởng đến 2,5 tỷ người (tương đương 20% d&acirc;n số thế giới.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/js/libs/kcfinder/upload/images/dau%20hieu%20nhan%20biet%20tre%20bi%20can%20thi%201%20hinh%20dai%20dien.jpg\" style=\"height:260px; width:400px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Việt Nam hiện nay ước t&iacute;nh c&oacute; khoảng 3 triệu trẻ em mắc c&aacute;c TKX chủ yếu trong giai đoạn từ 6 đến 15 tuổi mắc c&aacute;c TKX &nbsp;trong đ&oacute; chủ yếu l&agrave; cận thị. TKX L&agrave;m ảnh hưởng trực tiếp đến khả năng học tập v&agrave; đời sống hằng ng&agrave;y của trẻ.</p>\r\n\r\n<p style=\"text-align:justify\"><em><span style=\"color:#FF0000\"><strong>TPCN Lycoeye - Sản phẩm đầu ti&ecirc;n v&agrave; duy nhất&nbsp;kết hợp dầu gấc nếp v&agrave; dầu gan c&aacute; nguy&ecirc;n chất.&nbsp;</strong></span></em></p>\r\n\r\n<p style=\"text-align:justify\"><u><strong>Dầu gấc nếp&nbsp;dầu thực vật gi&agrave;u h&agrave;m lượng c&aacute;c chất chống oxy h&oacute;a nhất</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">Chống oxy h&oacute;a, bảo vệ mắt, tăng cường thị lực nhờ lycopen, beta caroten v&agrave; c&aacute;c carotenoid tự nhi&ecirc;n kh&aacute;c c&oacute; trong gấc nếp Vệt Nam.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/js/libs/kcfinder/upload/images/HINH%202(1).png\" style=\"height:321px; width:416px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Lycopen, betacaroten c&oacute; trong gấc c&oacute; t&aacute;c dụng l&agrave;m bền th&agrave;nh mạch của c&aacute;c mạch m&aacute;u li ti trong mắt do tăng sự kết nối c&aacute;c ph&acirc;n tử collagen, gi&uacute;p tăng cường lượng m&aacute;u v&agrave; oxy đến mắt, tăng cường dinh dưỡng cho mắt gi&uacute;p mắt kh&ocirc;ng bị mệt mỏi, cải thiện c&aacute;c đ&acirc;u hiện đau, x&oacute;t, nhức mỏi mắt&hellip;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bảo vệ v&otilde;ng mạc mắt, thủy tinh thể, ph&ograve;ng ngừa tật kh&uacute;c xạ, giảm cận thị tiến triển</strong></p>\r\n\r\n<p style=\"text-align:justify\">Lycopen v&agrave; beta caroten gi&uacute;p l&agrave;m tăng sắc tố v&otilde;ng mạc, tăng khả năng dung nạp &aacute;nh s&aacute;ng gi&uacute;p l&agrave;m v&otilde;ng mạc mắt th&iacute;ch nghi với sự thay đổi &aacute;nh s&aacute;ng kh&aacute;c nhau, tăng cường thị lực cho mắt.</p>\r\n\r\n<p style=\"text-align:justify\">Lycopen, betacaroten c&oacute; trong gấc c&oacute; t&aacute;c dụng l&agrave;m bền th&agrave;nh mạch của c&aacute;c mạch m&aacute;u li ti trong mắt do tăng sự kết nối c&aacute;c ph&acirc;n tử collagen, gi&uacute;p tăng cường lượng m&aacute;u v&agrave; oxy đến&nbsp;mắt, tăng cường dinh dưỡng cho mắt gi&uacute;p mắt kh&ocirc;ng bị mệt mỏi, cải thiện c&aacute;c đ&acirc;u hiện đau, x&oacute;t, nhức mỏi mắt&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">Hơn nữa Lycopen v&agrave; beta carotene c&ograve;n gi&uacute;p v&ocirc; hiệu h&oacute;a c&aacute;c gốc tự do g&acirc;y hại đến thủy tinh thể v&agrave; v&otilde;ng mạc mắt.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Ph&ograve;ng ngừa l&atilde;o h&oacute;a mắt do tật kh&uacute;c xạ</strong></p>\r\n\r\n<p style=\"text-align:justify\">Lycopen kết hợp c&ugrave;ng với c&aacute;c carotenoid tự nhi&ecirc;n được chứng minh c&oacute; t&aacute;c dụng ph&ograve;ng ngừa v&agrave; l&agrave;m chậm sự c&aacute;c chứng l&atilde;o h&oacute;a mắt theo thời gian như &nbsp;đục thủy tinh thể v&agrave; tho&aacute;i h&oacute;a điểm v&agrave;ng.</p>\r\n\r\n<p style=\"text-align:justify\">Lycopen c&oacute; t&aacute;c dụng bảo vệ c&aacute;c tế b&agrave;o sắc tố v&otilde;ng mạc của người (ARPE-19),gi&uacute;p tr&igrave; ho&atilde;n đ&aacute;ng kể sự khởi ph&aacute;t v&agrave; tiến triển của 30% galactose g&acirc;y đục thủy tinh thể.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><em><u>Dầu c&aacute; nguy&ecirc;n chất</u></em></strong></p>\r\n\r\n<p style=\"text-align:justify\">Dầu c&aacute; &nbsp;được chiết xuất từ m&ocirc; của c&aacute;c loại c&aacute; biển s&acirc;u thuộc v&ugrave;ng biển Na Uy&nbsp;ph&iacute;a Bắc Đại&nbsp;T&acirc;y Dương &nbsp;Dầu c&aacute; nguy&ecirc;n chất trong Lycoeye gi&agrave;u h&agrave;m lượng Omega 3:EPA (axit eicosapentaenoic) DHA (axit docosahexaenoic).&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/js/libs/kcfinder/upload/images/HINH%203.png\" style=\"height:262px; width:400px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><strong>DHA trong dầu c&aacute; l&agrave; th&agrave;nh phần thiết yếu cho chức năng nh&igrave;n của mắt</strong></p>\r\n\r\n<p style=\"text-align:justify\">DHA, EPA l&agrave; hai th&agrave;nh phần được t&igrave;m thấy nhiều trong cấu tr&uacute;c m&ocirc; v&otilde;ng mạc mắt&nbsp;việc bổ sung đẩy đủ DHA v&agrave; EPA hằng ng&agrave;y sẽ gi&uacute;p giữ hoạt động của đ&ocirc;i mắt lu&ocirc;n&nbsp;khỏe mạnh, s&aacute;ng mắt, giảm nhanh mỏi mắt khi sử dụng m&aacute;y vi t&iacute;nh, xem ti vi hoặc&nbsp;c&aacute;c thiết bị điện tử.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Ph&ograve;ng chống kh&ocirc; mắt, mỏi mắt, ph&ograve;ng c&aacute;c bệnh mắt do l&atilde;o h&oacute;a</strong></p>\r\n\r\n<p style=\"text-align:justify\">Dầu c&aacute; c&oacute; chứa nhiều DHA v&agrave; EPA gi&uacute;p l&agrave;m tăng sắc tố biểu mạc, gi&uacute;p mắt điều tiết tốt hơn th&iacute;ch nghi với sự thay đổi của m&ocirc;i trường từ đ&oacute; hạn chế v&agrave; ph&ograve;ng chống kh&ocirc; mắt, mỏi mắt.</p>\r\n\r\n<p style=\"text-align:justify\">Omega 3 (EPA, DHA) gi&uacute;p hạn chế v&agrave; l&agrave;m chậm l&atilde;o h&oacute;a đục thủy tinh thể v&agrave; tho&aacute;i h&oacute;a ho&agrave;ng điể</p>\r\n\r\n<p style=\"text-align:justify\"><strong>EPA, DHA chất thiết yếu cho hoạt động của n&atilde;o bộ, khả năng tập trung v&agrave; học hỏi</strong></p>\r\n\r\n<p style=\"text-align:justify\">EPA, DHA &nbsp;l&agrave; những&nbsp;&nbsp;chất tham gia&nbsp;cấu tạo tế b&agrave;o, nhất&nbsp;l&agrave;&nbsp;tế b&agrave;o thần kinh n&atilde;o bộ v&agrave;&nbsp;v&otilde;ng mạc mắt. Cung cấp đủ DHA, EPA gi&uacute;p trẻ ph&aacute;t triển tr&iacute; tuệ, s&aacute;ng mắt, tăng cường sức đề kh&aacute;ng. &nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Omega 3 (DHA, EPA) cũng gi&uacute;p ti&ecirc;u diệt gốc tự do, ngăn ngừa sự l&atilde;o ho&aacute; v&agrave; suy giảm tr&iacute; nhớ ở người lớn&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"line-height:20.7999992370605px; width:670px\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p style=\"text-align:justify\"><em><span style=\"color:rgb(255, 0, 0)\"><strong>TPCN Lycoeye với c&ocirc;ng thức chuy&ecirc;n biệt kết hợp dầu gấc nếp v&agrave; dầu c&aacute; nguy&ecirc;n chất kh&ocirc;ng chỉ cung cấp dưỡng chất thiết yếu d&agrave;nh cho mắt như lycopen, beta carotene&hellip;gi&uacute;p tăng cường thị lực, ph&ograve;ng ngừa v&agrave; hỗ trợ điều trị c&aacute;c tật kh&uacute;c xạ, giảm&nbsp;cận thị tiến triển m&agrave; c&ograve;n bổ sung th&ecirc;m EPA, DHA gi&uacute;p tăng cường tr&iacute; nhớ v&agrave; khả năng tập trung của trẻ.</strong></span></em></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/js/libs/kcfinder/upload/images/ANH%20SP-01.png\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><strong>C&ocirc;ng dụng sản phẩm&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">&nbsp;Gi&uacute;p tăng cường thị lực, chống mỏi mắt, mờ mắt,&nbsp;kh&ocirc; mắt</li>\r\n	<li style=\"text-align:justify\">Gi&uacute;p ph&ograve;ng ngừa c&aacute;c tật kh&uacute;c xạ (cận thị, viễn thị,&nbsp;loạn thị), giảm cận thị tiến&nbsp;triển</li>\r\n	<li style=\"text-align:justify\">Gi&uacute;p tăng cường sức khỏe cho đ&ocirc;i mắt, ph&ograve;ng l&atilde;o&nbsp;h&oacute;a mắt v&agrave; c&aacute;c bệnh đục&nbsp;thủy tinh thể, tho&aacute;i&nbsp;h&oacute;a điểm v&agrave;ng, bệnh v&otilde;ng mạc đ&aacute;i th&aacute;o đường. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n	<li style=\"text-align:justify\">Gi&uacute;p tăng cường tr&iacute; nhớ v&agrave; khả năng tập trung</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Ai n&ecirc;n sử dụng TPCN Lycoeye ?</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Người bị suy giảm thị lực mỏi mắt, kh&ocirc; mắt, nh&igrave;n mờ, qu&aacute;ng g&agrave;.</li>\r\n	<li style=\"text-align:justify\">Trẻ em hoặc người lớn mắc cận thị, viễn thị, loạn thị</li>\r\n	<li style=\"text-align:justify\">Người thường xuy&ecirc;n l&agrave;m việc với m&aacute;y t&iacute;nh v&agrave; c&aacute;c thiết bị điện tử</li>\r\n	<li style=\"text-align:justify\">Người trong giai đoạn học tập v&agrave; l&agrave;m việc căng thẳng</li>\r\n	<li style=\"text-align:justify\">Người mắc c&aacute;c bệnh l&atilde;o h&oacute;a mắt như đục thủy tinh thể, tho&aacute;i h&oacute;a điểm v&agrave;ng, bệnh v&otilde;ng mạc đ&aacute;i th&aacute;o đường</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>C&aacute;ch d&ugrave;ng</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">&nbsp; &nbsp;Uống ngay trước bữa ăn</li>\r\n	<li style=\"text-align:justify\">&nbsp; &nbsp;Người lớn: ng&agrave;y uống 2 lần mỗi lần 2 vi&ecirc;n</li>\r\n	<li style=\"text-align:justify\">&nbsp; &nbsp;Trẻ em : ng&agrave;y uống 2 lần mỗi lần 1 vi&ecirc;n</li>\r\n	<li style=\"text-align:justify\">&nbsp; &nbsp;C&oacute; thể d&ugrave;ng l&acirc;u d&agrave;i gi&uacute;p chống l&atilde;o h&oacute;a, n&acirc;ng cao thể trạng &nbsp; &nbsp; &nbsp; cơ thể</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong><em>Ch&uacute; &yacute;:</em></strong><br />\r\n<em>Sản phẩm n&agrave;y kh&ocirc;ng phải l&agrave; thuốc v&agrave; kh&ocirc;ng c&oacute; t&aacute;c dụng thay thế thuốc chữa bệnh</em></p>\r\n','2015-05-04 00:29:52','2015-05-15 16:05:31'),(5,'lyco_page_tab2','<p style=\"text-align:justify\"><em><span style=\"font-family:arial,sans-serif; font-size:11pt\">Gấc c&oacute; t&ecirc;n khoa học l&agrave; Momordica cochinchinensisthuộc bộ Vioales, họ bầu b&iacute; (Cucurbitaceae).&nbsp;</span></em></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:arial,sans-serif; font-size:11pt\">Trong gấc c&oacute; chứa lycopen v&agrave; &beta;-caroten với h&agrave;m lượng cao gấp nhiều lần c&aacute;c thực phẩm đang được sử dụng phổ biến tr&ecirc;n thế giới.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:arial,sans-serif; font-size:11pt\">Sau hơn 70 năm nghi&ecirc;n cứu v&agrave; kiểm chứng, c&aacute;c nh&agrave; khoa học tr&ecirc;n thế giới v&agrave; Việt Nam đ&atilde; chứng minh rằng Gấc nếp Việt Nam l&agrave; nguồn t&agrave;i nguy&ecirc;n v&ocirc; gi&aacute; cho sức khỏe con người m&agrave; đặc biệt l&agrave; đ&ocirc;i mắt. Trong gấc nếp c&oacute; chứa 3 nh&oacute;m hoạt chất sinh học qu&yacute; l&agrave; Lycopene, Beta-Carotene v&agrave; c&aacute;c acid b&eacute;o kh&ocirc;ng no Omega 3-6-9. Đ&acirc;y l&agrave; những chất chống oxy h&oacute;a mạnh c&oacute; t&aacute;c dụng tăng cường thị lực, tăng sắc tố v&otilde;ng mạc, gi&uacute;p v&otilde;ng mạc th&iacute;ch nghi nhanh với sự thay đổi của &aacute;nh s&aacute;ng, bảo vệ v&otilde;ng mạc, thủy tinh thể, ph&ograve;ng v&agrave; ngăn ngừa tật kh&uacute;c xạ tiến triển. Lycopene trong gấc nếp c&oacute; h&agrave;m lượng cao gấp 15 lần c&agrave; rốt v&agrave; 70 lần c&agrave; chua v&agrave; khả năng chống oxy h&oacute;a gấp 100 lần Vitamin E.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:arial,sans-serif; font-size:11pt\"><img alt=\"\" src=\"/js/libs/kcfinder/upload/images/HINH%202.png\" style=\"height:463px; width:600px\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dầu g<em>ấc nếp -&nbsp;t&agrave;i nguy&ecirc;n v&ocirc; gi&aacute; cho sức khỏe đ&ocirc;i mắt</em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:arial,sans-serif; font-size:11pt\">Dầu gấc nếp nguy&ecirc;n chất c&oacute; t&aacute;c dụng chống oxy h&oacute;a bảo vệ mắt, tăng cường thị lực nhờ Lycopen, beta caroten&nbsp;v&agrave; c&aacute;c carotenoid tự nhi&ecirc;n kh&aacute;c.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:arial,sans-serif; font-size:11pt\">Lycopen, betacaroten c&oacute; trong gấc c&oacute; t&aacute;c dụng l&agrave;m bền th&agrave;nh mạch của c&aacute;c mạch m&aacute;u li ti trong mắt do tăng sự kết nối c&aacute;c ph&acirc;n tử collagen, gi&uacute;p tăng cường lượng m&aacute;u v&agrave; oxy đến mắt, tăng cường dinh dưỡng cho mắt gi&uacute;p mắt kh&ocirc;ng bị mệt mỏi, cải thiện c&aacute;c đ&acirc;u hiện đau, x&oacute;t, nhức mỏi mắt..</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:arial,sans-serif; font-size:11pt\">B&ecirc;n cạnh đ&oacute; c&aacute;c hoạt chất sinh học trong dầu gấc nếp c&ograve;n gi&uacute;p bảo vệ v&otilde;ng mạc mắt, thủy tinh thể, ngăn ngừa tật kh&uacute;c xạ tiến triển.&nbsp;Lycopen v&agrave; beta caroten c&ograve;n&nbsp;gi&uacute;p l&agrave;m tăng sắc tố v&otilde;ng mạc, tăng khả năng dung nạp &aacute;nh s&aacute;ng gi&uacute;p l&agrave;m v&otilde;ng mạc mắt th&iacute;ch nghi với sự thay đổi &aacute;nh s&aacute;ng kh&aacute;c nhau, tăng cường thị lực cho mắt,&nbsp;gi&uacute;p v&ocirc; hiệu h&oacute;a c&aacute;c gốc tự do g&acirc;y hại đến thủy tinh thể v&agrave; v&otilde;ng mạc mắt.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:arial,sans-serif; font-size:11pt\">Một số nghi&ecirc;n cứu khoa học gần đ&acirc;y c&ograve;n chứng minh&nbsp;Lycopen kết hợp c&ugrave;ng với c&aacute;c carotenoid tự nhi&ecirc;n&nbsp;c&oacute; t&aacute;c dụng ph&ograve;ng ngừa v&agrave; l&agrave;m chậm sự c&aacute;c chứng l&atilde;o h&oacute;a mắt theo thời gian như &nbsp;đục thủy tinh thể v&agrave; tho&aacute;i h&oacute;a điểm v&agrave;ng, bảo vệ c&aacute;c tế b&agrave;o sắc tố v&otilde;ng mạc của người (ARPE-19), gi&uacute;p tr&igrave; ho&atilde;n đ&aacute;ng kể sự khởi ph&aacute;t v&agrave; tiến triển của 30% galactose g&acirc;y đục thủy tinh thể.</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><em><span style=\"color:red; font-family:arial,sans-serif; font-size:11.0pt\">Tại Việt Nam, lần đầu ti&ecirc;n v&agrave; duy nhất dầu gấc nếp&nbsp;được kết hợp c&ugrave;ng dầu c&aacute; nguy&ecirc;n chất b&agrave;o chế th&agrave;nh c&ocirc;ng trong sản phẩm Lycoeye. Sản phẩm chuy&ecirc;n biệt gi&uacute;p tăng cường thị lực, hỗ trợ điều tị tật kh&uacute;c xạ (cận thị, viến thị, loạn thị), giảm cận thị tiến triển.&nbsp;</span></em></strong></p>\r\n','2015-05-04 00:29:52','2015-05-06 01:32:29'),(6,'lyco_page_tab3','<p style=\"text-align:justify\"><em><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Hơn 7 thập kỷ nghi&ecirc;n cứu quả gấc Việt Nam</span></em></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Năm 1941 Gs. B&ugrave;i Đ&igrave;nh Sang v&agrave; Gs.Guichard lần đầu ti&ecirc;n&nbsp;phối hợp c&ugrave;ng bộ m&ocirc;n dược liệu Đại Học Dược H&agrave; Nội&nbsp;l&agrave; những người ti&ecirc;n phong đặt nền m&oacute;ng cho&nbsp;nghi&ecirc;n cứu chuy&ecirc;n s&acirc;u v&agrave; b&agrave;i bản&nbsp; về phương ph&aacute;p t&aacute;ch chiết v&agrave; kh&aacute;m ph&aacute; th&agrave;nh phần c&aacute;c hoạt chất sinh học c&oacute; trong gấc.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\"><img alt=\"\" src=\"http://cf05.asmy.org.au/wp-content/uploads/2014/10/gac-fruit-04a.jpg\" style=\"height:343px; width:600px\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Bắt đầu từ đ&acirc;y gấc trở th&agrave;nh một hiện tượng mới trong giới khoa học trong nước cũng như tr&ecirc;n thế giới.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Trong năm 1942 trong điều kiện ph&ograve;ng th&iacute; nghiệm của P.Bommet B&ugrave;i Đ&igrave;nh Sang đ&atilde; chiết được từ 2.017 kg tr&aacute;i gấc, 38 l&iacute;t dầu gấc v&agrave; 0.300kg tinh thể caroten nữa (1gl), tinh thể trọng 100g dầu lạc trung t&iacute;nh, c&aacute;c t&aacute;c giả n&agrave;y t&iacute;nh rằng trong 1ml dầu gấc c&oacute; tới 30mg Caroten tương ứng với 30.000 đơn vị caroten hay 50.000 đơn vị quốc tế vitamin A.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Tuy nhi&ecirc;n đến năm 1949 Philipin &ldquo;H&agrave; Lan&rdquo; lại cho kết quả rằng trong gấc c&oacute; một lượng carotene kh&ocirc;ng đ&aacute;ng kể.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Từ năm 1959 đến năm 1969 t&aacute;c giả Nguyễn Văn Đan v&agrave; Phan Kim Mẫn c&oacute; c&ocirc;ng bố tr&ecirc;n tạp ch&iacute; dược liệu trong 1mg c&oacute; 4.000 đơn vị Caroten B tương ứng với 6.666 đơn vị quốc tế vitamin A.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Giai đoạn từ những năm đầu thế kỷ 21 đến nay chứng kiến sự b&ugrave;ng nổ h&agrave;ng loạt c&aacute;c nghi&ecirc;n cứu của c&aacute;c nh&agrave; khoa học tr&ecirc;n thế giới đặc biệt l&agrave; Mỹ, Nhật Bản, một số nước Ch&acirc;u &Acirc;u v&agrave; Việt Nam nghi&ecirc;n cứu về th&agrave;nh phần, v&agrave; c&ocirc;ng dụng c&aacute;c hoạt chất sinh học c&oacute; trong gấc.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Đ&aacute;ng quan t&acirc;m hơn cả năm 1993 một thử nghiệm l&acirc;m s&agrave;ng của TS Vương Th&uacute;y Lệ tr&ecirc;n trẻ em tại trường tiểu học Đo&agrave;n Kết - Thanh Miện - Hải Dương. Kết quả thử nghiệm cho thấy:&nbsp;trẻ em sử dụng gấc h&agrave;ng ng&agrave;y v&agrave; thường xuy&ecirc;n gi&uacute;p tăng cường thị lực, ph&ograve;ng nguy cơ mắc bệnh qu&aacute;ng g&agrave;, lượng beta caroten v&agrave; lycoepen trong m&aacute;u cao trung b&igrave;nh gấp 2 đến 3 lần so với nh&oacute;m đối chứng.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"http://softvietthai.com/wp-content/uploads/2014/01/%E1%BA%A3nh-3.jpg\" style=\"height:399px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Gần đ&acirc;y&nbsp;l&agrave; h&agrave;ng loạt nghi&ecirc;n cứu khoa học của Ts. Vương Th&uacute;y Lệ với h&agrave;ng loạt c&ocirc;ng bố được đăng tr&ecirc;n c&aacute;c tạp ch&iacute; khoa học lớn y dược học&nbsp;của Mỹ về c&ocirc;ng dụng của gấc.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><em><span style=\"font-family:helvetica,sans-serif; font-size:11.5pt\">Tất cả c&aacute;c nghi&ecirc;n cứu khoa học tr&ecirc;n chứng minh rằng gấc kh&ocirc;ng chỉ l&agrave; một thực phẩm đơn thuần trong chế biến m&oacute;n ăn m&agrave; c&ograve;n l&agrave; một dược liệu v&agrave;ng đ&atilde; v&agrave; đang được cả thế giới quan t&acirc;m.</span></em></span></p>\r\n\r\n<p style=\"text-align:justify\"><em>Để biết th&ecirc;m th&ocirc;ng tin chi tiết tham khảo tại đ&acirc;y :<a href=\"http://gacnep.vn/nghiencuu.php\">http://gacnep.vn/nghiencuu.php</a></em></p>\r\n','2015-05-04 00:29:52','2015-05-06 01:30:03'),(7,'video','<p><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/NksiV42Yt-8\" width=\"350\"></iframe></p>','2015-05-04 00:29:52','2015-05-04 18:19:56');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','tieumaster@yahoo.com','$2y$10$g9Vlz.LLuAqlRoGjdZLRrezlGT4mS9bwQALE6KukOf6cLWCgkNRC6','ZiBuNJAr61kb5kbnyAAR9ZYOhiy4nbMjTHgL9TilhPY872Cg5Q92WOX7cBID','2015-05-03 10:44:00','2015-05-14 06:08:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-27 16:35:05

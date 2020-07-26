-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Tem 2020, 12:43:23
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- /*Veritabanı: `portofirma1`*/
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fax` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `saat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `saat2` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_recapctha` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_googlemap` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_linkedin` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_fax`, `ayar_mail`, `ayar_adres`, `ayar_ilce`, `ayar_il`, `saat`, `saat2`, `ayar_recapctha`, `ayar_googlemap`, `ayar_analystic`, `ayar_facebook`, `ayar_twitter`, `ayar_youtube`, `ayar_linkedin`, `ayar_instagram`, `ayar_google`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`) VALUES
(1, 'sliderUploads/30993309933047326430logo.png', 'http://localhost/Php%20Dersleri-Youtube/Portfolyo%20sitesi/site/', 'PDO-Yonetim Panelli Porto Firma Sitesi', 'PDO-Yonetim Panelli Porto Firma Sitesi', 'pdo,php,yonetim panelli', 'Mehmet Parlak-Developer', '0800 800 33 33', '0800 800 00 00', '0800 800 00 00', 'mailadresim.com', 'Ã‡ay Mah. 6459 Sokak No:8 ', 'Akdeniz', 'Mersin', 'Hafta ici= 08.00 - 17.00                                            ', 'Hafta Sonu= 09.00-14.00  ', '1', 'AIzaSyAKDU5o_I1nhG22i9j5RSurx1zqr4VGogM', '1', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'https://www.google.com/', 'mail.siteadresiniz.com', 'eposta@siteadresiniz.com', '1234', '25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(1, 'baslik', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mauris augue, condimentum accumsan consectetur nec, maximus vel est. Morbi convallis diam eget odio accumsan lacinia eget ac orci. Mauris sollicitudin est ac rhoncus porttitor. Integer quis nisl vitae nulla pretium luctus. Aenean lacinia risus congue tellus convallis dictum. Vivamus tristique orci sed neque consequat, ac lobortis augue mollis. In finibus dolor at imperdiet pharetra.</p>\r\n\r\n<p>Cras vel augue orci. Suspendisse potenti. Sed vestibulum ultricies luctus. Quisque sem est, accumsan vitae dolor at, vestibulum blandit odio. Curabitur ut elementum est. Curabitur varius eu augue in posuere. Aliquam sed sagittis elit, eu lobortis massa. Fusce a tristique neque, in iaculis felis. Praesent at vehicula elit, ut facilisis arcu. Aenean eget tristique metus. Nam sed dui ultrices leo commodo vehicula. Suspendisse sit amet lectus pulvinar, luctus ipsum id, ullamcorper dui. Nunc fringilla augue non urna rutrum elementum. Nullam id sem ac orci commodo lobortis et iaculis mi. Phasellus vel massa massa.</p>\r\n\r\n<p>Aenean volutpat accumsan tellus in imperdiet. Fusce vitae maximus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim erat lorem, eleifend interdum justo scelerisque a. Vestibulum libero nisi, tincidunt ac lacus sed, tempor tristique ligula. Duis arcu dui, placerat ac leo vitae, molestie sodales nisl. Aliquam in nunc mi. Nam eget dolor enim. Fusce nisi leo, consectetur ornare vulputate sed, rutrum non lacus. Integer gravida tellus eget dui vehicula dignissim. Vivamus vulputate leo et viverra tincidunt. Aliquam sit amet elit aliquam, interdum arcu ac, porttitor massa. Praesent non neque eget augue porttitor tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur vulputate vestibulum tellus, sit amet maximus ligula tincidunt ut.</p>\r\n\r\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur faucibus rhoncus sapien, at egestas orci. Donec sed commodo quam, quis gravida libero. Vestibulum cursus placerat elit, at pulvinar orci venenatis porttitor. Sed dapibus pretium elit, id pretium lectus cursus id. Nam vel augue et ex tristique convallis. Vivamus porttitor feugiat feugiat. Suspendisse potenti. Integer auctor magna fermentum, mollis quam et, euismod urna. Phasellus ante massa, egestas eget auctor eget, scelerisque in felis. Integer euismod sem vitae nisl eleifend, ac egestas mauris semper. Donec imperdiet justo a enim finibus sollicitudin. Integer dui est, scelerisque in sodales in, rutrum sed dolor. Integer sodales magna nec lacinia consequat. Nunc aliquet vel mauris vehicula sodales. Donec metus mauris, bibendum nec ligula et, pulvinar lacinia <img alt=\"\" src=\"https://i.picsum.photos/id/1/5616/3744.jpg?hmac=kKHwwU8s46oNettHKwJ24qOlIAsWN9d2TtsXDoCWWsQ\" style=\"float:right; height:200px; width:300px\" />quam.</p>\r\n\r\n<p>Vivamus cursus vehicula pulvinar. Duis et urna blandit, congue augue sollicitudin, accumsan tellus. Nullam ornare mi at enim efficitur, eu varius risus pellentesque. Vivamus mollis non tellus a tincidunt. Fusce dolor massa, posuere a ex sit amet, porta vulputate metus. Integer vitae metus molestie, accumsan metus eget, eleifend est. Phasellus a ipsum ante. Nullam nec dolor sollicitudin, pharetra purus sed, porta justo.</p>\r\n\r\n<p>Donec sagittis ex a risus blandit cursus. Curabitur viverra finibus nunc at vulputate. Phasellus in ex sit amet nisi ultricies blandit. Sed pretium lectus felis, eu sagittis eros vestibulum eu. Vivamus nec fringilla magna. Suspendisse tincidunt, dui non lobortis tristique, odio sem suscipit turpis, sit amet pellentesque augue tellus eu ligula. Donec rutrum ac massa et fermentum. In accumsan, nulla vel posuere mattis, nibh dui mollis ex, eget tincidunt neque tellus vel dolor.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '4OkiH2yD-eQ', 'Vizyon, birtakÄ±m olaylarÄ± gÃ¶rme organÄ±nÄ±n yardÄ±mÄ± olmadan gÃ¶rme ya da algÄ±lama fenomenine ve bu fenomendeki imajlar bÃ¼tÃ¼nÃ¼ne verilen addÄ±r. Vizyon tarzÄ±ndaki algÄ±lamalara daha Ã§ok medyumlarda, mistiklerde, peygamberlerde ve psiÅŸik bakÄ±mdan â€œhassasâ€ kabul edilen kiÅŸilerde rastlanmÄ±ÅŸtÄ±r.', '<p>Misyon herhangi bir amacÄ± anlatan &lsquo;G&ouml;rev&rsquo; anlamÄ±na gelmektedir. Bir &ouml;rnek vermek gerekirse;</p>\r\n\r\n<p>&lsquo;&rsquo;Misyonumuz sizlere en iyi hizmeti saÄŸlamaktÄ±r&rsquo;</p>\r\n\r\n<p>Burada ama&ccedil; ya da g&ouml;rev olarak iki farklÄ± tanÄ±mlama &uuml;zerinden anlatmak m&uuml;mk&uuml;n. Resmi kaynaklarda ya da herhangi bir kurum ve olguyu tanÄ±tmak ama&ccedil;lÄ± sÄ±k&ccedil;a kullanÄ±lan kelimeler arasÄ±nda yer almaktad</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 'baslik', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mauris augue, condimentum accumsan consectetur nec, maximus vel est. Morbi convallis diam eget odio accumsan lacinia eget ac orci. Mauris sollicitudin est ac rhoncus porttitor. Integer quis nisl vitae nulla pretium luctus. Aenean lacinia risus congue tellus convallis dictum. Vivamus tristique orci sed neque consequat, ac lobortis augue mollis. In finibus dolor at imperdiet pharetra.</p>\r\n\r\n<p>Cras vel augue orci. Suspendisse potenti. Sed vestibulum ultricies luctus. Quisque sem est, accumsan vitae dolor at, vestibulum blandit odio. Curabitur ut elementum est. Curabitur varius eu augue in posuere. Aliquam sed sagittis elit, eu lobortis massa. Fusce a tristique neque, in iaculis felis. Praesent at vehicula elit, ut facilisis arcu. Aenean eget tristique metus. Nam sed dui ultrices leo commodo vehicula. Suspendisse sit amet lectus pulvinar, luctus ipsum id, ullamcorper dui. Nunc fringilla augue non urna rutrum elementum. Nullam id sem ac orci commodo lobortis et iaculis mi. Phasellus vel massa massa.</p>\r\n\r\n<p>Aenean volutpat accumsan tellus in imperdiet. Fusce vitae maximus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim erat lorem, eleifend interdum justo scelerisque a. Vestibulum libero nisi, tincidunt ac lacus sed, tempor tristique ligula. Duis arcu dui, placerat ac leo vitae, molestie sodales nisl. Aliquam in nunc mi. Nam eget dolor enim. Fusce nisi leo, consectetur ornare vulputate sed, rutrum non lacus. Integer gravida tellus eget dui vehicula dignissim. Vivamus vulputate leo et viverra tincidunt. Aliquam sit amet elit aliquam, interdum arcu ac, porttitor massa. Praesent non neque eget augue porttitor tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur vulputate vestibulum tellus, sit amet maximus ligula tincidunt ut.</p>\r\n\r\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur faucibus rhoncus sapien, at egestas orci. Donec sed commodo quam, quis gravida libero. Vestibulum cursus placerat elit, at pulvinar orci venenatis porttitor. Sed dapibus pretium elit, id pretium lectus cursus id. Nam vel augue et ex tristique convallis. Vivamus porttitor feugiat feugiat. Suspendisse potenti. Integer auctor magna fermentum, mollis quam et, euismod urna. Phasellus ante massa, egestas eget auctor eget, scelerisque in felis. Integer euismod sem vitae nisl eleifend, ac egestas mauris semper. Donec imperdiet justo a enim finibus sollicitudin. Integer dui est, scelerisque in sodales in, rutrum sed dolor. Integer sodales magna nec lacinia consequat. Nunc aliquet vel mauris vehicula sodales. Donec metus mauris, bibendum nec ligula et, pulvinar lacinia <img alt=\"\" src=\"https://i.picsum.photos/id/1/5616/3744.jpg?hmac=kKHwwU8s46oNettHKwJ24qOlIAsWN9d2TtsXDoCWWsQ\" style=\"float:right; height:200px; width:300px\" />quam.</p>\r\n\r\n<p>Vivamus cursus vehicula pulvinar. Duis et urna blandit, congue augue sollicitudin, accumsan tellus. Nullam ornare mi at enim efficitur, eu varius risus pellentesque. Vivamus mollis non tellus a tincidunt. Fusce dolor massa, posuere a ex sit amet, porta vulputate metus. Integer vitae metus molestie, accumsan metus eget, eleifend est. Phasellus a ipsum ante. Nullam nec dolor sollicitudin, pharetra purus sed, porta justo.</p>\r\n\r\n<p>Donec sagittis ex a risus blandit cursus. Curabitur viverra finibus nunc at vulputate. Phasellus in ex sit amet nisi ultricies blandit. Sed pretium lectus felis, eu sagittis eros vestibulum eu. Vivamus nec fringilla magna. Suspendisse tincidunt, dui non lobortis tristique, odio sem suscipit turpis, sit amet pellentesque augue tellus eu ligula. Donec rutrum ac massa et fermentum. In accumsan, nulla vel posuere mattis, nibh dui mollis ex, eget tincidunt neque tellus vel dolor.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '4OkiH2yD-eQ', 'Vizyon, birtakÄ±m olaylarÄ± gÃ¶rme organÄ±nÄ±n yardÄ±mÄ± olmadan gÃ¶rme ya da algÄ±lama fenomenine ve bu fenomendeki imajlar bÃ¼tÃ¼nÃ¼ne verilen addÄ±r. Vizyon tarzÄ±ndaki algÄ±lamalara daha Ã§ok medyumlarda, mistiklerde, peygamberlerde ve psiÅŸik bakÄ±mdan â€œhassasâ€ kabul edilen kiÅŸilerde rastlanmÄ±ÅŸtÄ±r.', '<p>Misyon herhangi bir amacÄ± anlatan &lsquo;G&ouml;rev&rsquo; anlamÄ±na gelmektedir. Bir &ouml;rnek vermek gerekirse;</p>\r\n\r\n<p>&lsquo;&rsquo;Misyonumuz sizlere en iyi hizmeti saÄŸlamaktÄ±r&rsquo;</p>\r\n\r\n<p>Burada ama&ccedil; ya da g&ouml;rev olarak iki farklÄ± tanÄ±mlama &uuml;zerinden anlatmak m&uuml;mk&uuml;n. Resmi kaynaklarda ya da herhangi bir kurum ve olguyu tanÄ±tmak ama&ccedil;lÄ± sÄ±k&ccedil;a kullanÄ±lan kelimeler arasÄ±nda yer almaktad</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `icerik_id` int(11) NOT NULL,
  `icerik_resimyol` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `icerik_zaman` datetime NOT NULL,
  `icerik_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_authorlife` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `icerik_resimyol`, `icerik_ad`, `icerik_detay`, `icerik_keyword`, `icerik_durum`, `icerik_zaman`, `icerik_author`, `icerik_authorlife`) VALUES
(2, 'sliderUploads/21092210922734225658resim1.jpg', 'Ä°Ã§erik Ad', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nulla rhoncus, lobortis massa egestas, feugiat lorem. Pellentesque ultrices tortor nisl, non egestas quam suscipit a. Pellentesque tincidunt nibh vitae odio commodo posuere. Nulla imperdiet erat vitae lorem pellentesque interdum. Integer venenatis lacus at justo pulvinar, sit amet tincidunt libero facilisis. Mauris eros quam, varius sit amet auctor in, tempus a justo. Suspendisse non vehicula quam. Quisque eu purus turpis. Aliquam faucibus condimentum augue a sollicitudin. Ut ullamcorper erat a odio sagittis, quis efficitur dui maximus. Sed ullamcorper sollicitudin suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget lectus eros. Quisque vel consequat tortor, a dapibus orci. Nulla facilisi.</p>\r\n\r\n<p>Integer mollis blandit elit, eget dictum augue sagittis a. Duis aliquet neque enim, eu lacinia orci efficitur ut. Sed tincidunt vel sapien id molestie. Vestibulum congue sem nibh, quis fringilla nisi lobortis sed. Aliquam erat volutpat. Praesent posuere euismod venenatis. Phasellus felis risus, scelerisque iaculis posuere non, vehicula vel mi. Etiam convallis ipsum sit amet nibh feugiat laoreet. Sed elementum erat vel risus lacinia, non blandit erat viverra. Donec ligula arcu, dignissim vitae lacus vel, tempus convallis velit. Nullam imperdiet volutpat metus, id eleifend nibh laoreet id. In fringilla lacus ultrices, semper metus ut, faucibus justo. Mauris posuere nunc felis, et accumsan arcu sagittis quis. Vivamus porta feugiat congue. Vestibulum maximus elit at finibus tristique. Duis ut nisi leo.</p>\r\n\r\n<p>Nunc euismod congue dolor. Donec aliquam mollis sem nec facilisis. Sed at imperdiet turpis, eu pulvinar risus. Ut magna lorem, fermentum sed erat sed, molestie blandit mauris. Sed vitae nibh in magna euismod porta. Pellentesque aliquam risus urna, gravida vehicula velit consequat ut. Donec tincidunt varius tortor, faucibus iaculis velit cursus vitae. Suspendisse nec erat finibus, congue enim vel, tempus orci. Integer urna sapien, lobortis eget tortor quis, porttitor ornare diam. Cras sollicitudin in justo sed sodales. Phasellus tortor felis, tristique ac neque eu, rutrum rhoncus lorem. In venenatis egestas sollicitudin. Phasellus nulla turpis, facilisis pretium auctor id, dapibus id lectus.</p>\r\n\r\n<p>Fusce et orci eget metus euismod finibus. Nulla facilisis, tellus at tincidunt luctus, mi leo consequat arcu, a aliquam est ipsum quis felis. Sed tincidunt tortor eu tincidunt lacinia. Integer eu rhoncus tortor, pretium vulputate tortor. In imperdiet, quam id ultricies lacinia, tortor lectus commodo justo, in pellentesque orci odio ultricies lacus. Vestibulum accumsan eget risus at sagittis. Maecenas eget massa ac mi pellentesque viverra. Nullam aliquam odio euismod turpis porta, quis ornare quam imperdiet. Cras tempor eu erat at consequat. Maecenas sollicitudin nunc quam, et fermentum felis gravida eget. Phasellus id dui aliquet, blandit urna viverra, maximus ipsum. Aenean rutrum odio eu nibh mollis posuere. Sed sed libero tempus, varius arcu eget, viverra lorem.</p>\r\n\r\n<p>Cras sit amet massa eu nisi pharetra porta. Morbi pulvinar accumsan accumsan. Duis sit amet condimentum urna, eget placerat diam. Nulla interdum augue eget hendrerit efficitur. Integer efficitur ipsum nisl, vitae condimentum arcu euismod non. Suspendisse ac ex ac ligula auctor ultricies at vitae enim. Donec sit amet hendrerit nisl, vel porttitor magna. Proin rutrum nisl sit amet sem porttitor, at ornare eros rhoncus. Quisque rutrum velit ut orci fermentum, scelerisque eleifend ligula placerat. Etiam fringilla tempor quam, vitae dapibus arcu iaculis ut. Quisque scelerisque tempus diam, molestie vestibulum lacus convallis eu. Mauris sit amet erat fermentum augue gravida hendrerit sit amet non mi. Morbi commodo diam metus, nec facilisis orci eleifend eget. Integer aliquet vestibulum neque, vitae eleifend orci volutpat vel. Vestibulum hendrerit elit non augue imperdiet volutpat.</p>\r\n\r\n<p>aasasas</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'as', '1', '2020-07-07 00:03:00', 'Mehmet Parlak', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nulla rhoncus, lobortis massa egestas, feugiat lorem. Pellentesque ultrices tortor nisl, non egestas quam suscipit a. Pellentesque tincidunt nibh vitae odio commodo posuere. Nulla imperdiet erat vitae lorem pellentesque interdum. Integer venenatis lacus at justo</p>\r\n'),
(3, 'sliderUploads/27049270492078822766resim2.jpg', 'Ä°Ã§erik Ad 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nulla rhoncus, lobortis massa egestas, feugiat lorem. Pellentesque ultrices tortor nisl, non egestas quam suscipit a. Pellentesque tincidunt nibh vitae odio commodo posuere. Nulla imperdiet erat vitae lorem pellentesque interdum. Integer venenatis lacus at justo pulvinar, sit amet tincidunt libero facilisis. Mauris eros quam, varius sit amet auctor in, tempus a justo. Suspendisse non vehicula quam. Quisque eu purus turpis. Aliquam faucibus condimentum augue a sollicitudin. Ut ullamcorper erat a odio sagittis, quis efficitur dui maximus. Sed ullamcorper sollicitudin suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget lectus eros. Quisque vel consequat tortor, a dapibus orci. Nulla facilisi.</p>\r\n\r\n<p>Integer mollis blandit elit, eget dictum augue sagittis a. Duis aliquet neque enim, eu lacinia orci efficitur ut. Sed tincidunt vel sapien id molestie. Vestibulum congue sem nibh, quis fringilla nisi lobortis sed. Aliquam erat volutpat. Praesent posuere euismod venenatis. Phasellus felis risus, scelerisque iaculis posuere non, vehicula vel mi. Etiam convallis ipsum sit amet nibh feugiat laoreet. Sed elementum erat vel risus lacinia, non blandit erat viverra. Donec ligula arcu, dignissim vitae lacus vel, tempus convallis velit. Nullam imperdiet volutpat metus, id eleifend nibh laoreet id. In fringilla lacus ultrices, semper metus ut, faucibus justo. Mauris posuere nunc felis, et accumsan arcu sagittis quis. Vivamus porta feugiat congue. Vestibulum maximus elit at finibus tristique. Duis ut nisi leo.</p>\r\n\r\n<p>Nunc euismod congue dolor. Donec aliquam mollis sem nec facilisis. Sed at imperdiet turpis, eu pulvinar risus. Ut magna lorem, fermentum sed erat sed, molestie blandit mauris. Sed vitae nibh in magna euismod porta. Pellentesque aliquam risus urna, gravida vehicula velit consequat ut. Donec tincidunt varius tortor, faucibus iaculis velit cursus vitae. Suspendisse nec erat finibus, congue enim vel, tempus orci. Integer urna sapien, lobortis eget tortor quis, porttitor ornare diam. Cras sollicitudin in justo sed sodales. Phasellus tortor felis, tristique ac neque eu, rutrum rhoncus lorem. In venenatis egestas sollicitudin. Phasellus nulla turpis, facilisis pretium auctor id, dapibus id lectus.</p>\r\n\r\n<p>Fusce et orci eget metus euismod finibus. Nulla facilisis, tellus at tincidunt luctus, mi leo consequat arcu, a aliquam est ipsum quis felis. Sed tincidunt tortor eu tincidunt lacinia. Integer eu rhoncus tortor, pretium vulputate tortor. In imperdiet, quam id ultricies lacinia, tortor lectus commodo justo, in pellentesque orci odio ultricies lacus. Vestibulum accumsan eget risus at sagittis. Maecenas eget massa ac mi pellentesque viverra. Nullam aliquam odio euismod turpis porta, quis ornare quam imperdiet. Cras tempor eu erat at consequat. Maecenas sollicitudin nunc quam, et fermentum felis gravida eget. Phasellus id dui aliquet, blandit urna viverra, maximus ipsum. Aenean rutrum odio eu nibh mollis posuere. Sed sed libero tempus, varius arcu eget, viverra lorem.</p>\r\n\r\n<p>Cras sit amet massa eu nisi pharetra porta. Morbi pulvinar accumsan accumsan. Duis sit amet condimentum urna, eget placerat diam. Nulla interdum augue eget hendrerit efficitur. Integer efficitur ipsum nisl, vitae condimentum arcu euismod non. Suspendisse ac ex ac ligula auctor ultricies at vitae enim. Donec sit amet hendrerit nisl, vel porttitor magna. Proin rutrum nisl sit amet sem porttitor, at ornare eros rhoncus. Quisque rutrum velit ut orci fermentum, scelerisque eleifend ligula placerat. Etiam fringilla tempor quam, vitae dapibus arcu iaculis ut. Quisque scelerisque tempus diam, molestie vestibulum lacus convallis eu. Mauris sit amet erat fermentum augue gravida hendrerit sit amet non mi. Morbi commodo diam metus, nec facilisis orci eleifend eget. Integer aliquet vestibulum neque, vitae eleifend orci volutpat vel. Vestibulum hendrerit elit non augue imperdiet volutpat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 482px; top: 80.2px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 'Ä°Ã§erik keyword 2', '1', '2020-07-08 00:05:00', 'Mehmet Parlak', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nulla rhoncus, lobortis massa egestas, feugiat lorem. Pellentesque ultrices tortor nisl, non egestas quam suscipit a. Pellentesque tincidunt nibh vitae odio commodo posuere. Nulla</p>\r\n'),
(4, 'sliderUploads/31245312452988722912resim3.jpg', 'Ä°Ã§eirk Ad 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nulla rhoncus, lobortis massa egestas, feugiat lorem. Pellentesque ultrices tortor nisl, non egestas quam suscipit a. Pellentesque tincidunt nibh vitae odio commodo posuere. Nulla imperdiet erat vitae lorem pellentesque interdum. Integer venenatis lacus at justo pulvinar, sit amet tincidunt libero facilisis. Mauris eros quam, varius sit amet auctor in, tempus a justo. Suspendisse non vehicula quam. Quisque eu purus turpis. Aliquam faucibus condimentum augue a sollicitudin. Ut ullamcorper erat a odio sagittis, quis efficitur dui maximus. Sed ullamcorper sollicitudin suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget lectus eros. Quisque vel consequat tortor, a dapibus orci. Nulla facilisi.</p>\r\n\r\n<p>Integer mollis blandit elit, eget dictum augue sagittis a. Duis aliquet neque enim, eu lacinia orci efficitur ut. Sed tincidunt vel sapien id molestie. Vestibulum congue sem nibh, quis fringilla nisi lobortis sed. Aliquam erat volutpat. Praesent posuere euismod venenatis. Phasellus felis risus, scelerisque iaculis posuere non, vehicula vel mi. Etiam convallis ipsum sit amet nibh feugiat laoreet. Sed elementum erat vel risus lacinia, non blandit erat viverra. Donec ligula arcu, dignissim vitae lacus vel, tempus convallis velit. Nullam imperdiet volutpat metus, id eleifend nibh laoreet id. In fringilla lacus ultrices, semper metus ut, faucibus justo. Mauris posuere nunc felis, et accumsan arcu sagittis quis. Vivamus porta feugiat congue. Vestibulum maximus elit at finibus tristique. Duis ut nisi leo.</p>\r\n\r\n<p>Nunc euismod congue dolor. Donec aliquam mollis sem nec facilisis. Sed at imperdiet turpis, eu pulvinar risus. Ut magna lorem, fermentum sed erat sed, molestie blandit mauris. Sed vitae nibh in magna euismod porta. Pellentesque aliquam risus urna, gravida vehicula velit consequat ut. Donec tincidunt varius tortor, faucibus iaculis velit cursus vitae. Suspendisse nec erat finibus, congue enim vel, tempus orci. Integer urna sapien, lobortis eget tortor quis, porttitor ornare diam. Cras sollicitudin in justo sed sodales. Phasellus tortor felis, tristique ac neque eu, rutrum rhoncus lorem. In venenatis egestas sollicitudin. Phasellus nulla turpis, facilisis pretium auctor id, dapibus id lectus.</p>\r\n\r\n<p>Fusce et orci eget metus euismod finibus. Nulla facilisis, tellus at tincidunt luctus, mi leo consequat arcu, a aliquam est ipsum quis felis. Sed tincidunt tortor eu tincidunt lacinia. Integer eu rhoncus tortor, pretium vulputate tortor. In imperdiet, quam id ultricies lacinia, tortor lectus commodo justo, in pellentesque orci odio ultricies lacus. Vestibulum accumsan eget risus at sagittis. Maecenas eget massa ac mi pellentesque viverra. Nullam aliquam odio euismod turpis porta, quis ornare quam imperdiet. Cras tempor eu erat at consequat. Maecenas sollicitudin nunc quam, et fermentum felis gravida eget. Phasellus id dui aliquet, blandit urna viverra, maximus ipsum. Aenean rutrum odio eu nibh mollis posuere. Sed sed libero tempus, varius arcu eget, viverra lorem.</p>\r\n\r\n<p>Cras sit amet massa eu nisi pharetra porta. Morbi pulvinar accumsan accumsan. Duis sit amet condimentum urna, eget placerat diam. Nulla interdum augue eget hendrerit efficitur. Integer efficitur ipsum nisl, vitae condimentum arcu euismod non. Suspendisse ac ex ac ligula auctor ultricies at vitae enim. Donec sit amet hendrerit nisl, vel porttitor magna. Proin rutrum nisl sit amet sem porttitor, at ornare eros rhoncus. Quisque rutrum velit ut orci fermentum, scelerisque eleifend ligula placerat. Etiam fringilla tempor quam, vitae dapibus arcu iaculis ut. Quisque scelerisque tempus diam, molestie vestibulum lacus convallis eu. Mauris sit amet erat fermentum augue gravida hendrerit sit amet non mi. Morbi commodo diam metus, nec facilisis orci eleifend eget. Integer aliquet vestibulum neque, vitae eleifend orci volutpat vel. Vestibulum hendrerit elit non augue imperdiet volutpat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Ä°Ã§eirk keyword 3', '1', '2020-07-09 00:05:00', 'Mehmet Parlak', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nulla rhoncus, lobortis massa egestas, feugiat lorem. Pellentesque ultrices tortor nisl, non egestas quam suscipit a. Pellentesque tincidunt nibh vitae odio commodo posuere. Nulla</p>\r\n'),
(5, 'sliderUploads/20306203062131828100resim3.jpg', 'as', '<p>as</p>\r\n', 'as', '0', '2020-07-08 00:10:00', 'as AS', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nulla rhoncus, lobortis massa egestas, feugiat lorem. Pellentesque ultrices tortor nisl, non egestas quam suscipit a. Pellentesque tincidunt nibh vitae odio commodo posuere. Nulla</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `menu_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `menu_ust` int(11) NOT NULL,
  `menu_icon` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` int(1) NOT NULL DEFAULT '1',
  `menu_yedek` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`menu_id`, `kategori_id`, `menu_ust`, `menu_icon`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_yedek`) VALUES
(2, 0, 0, '', 'Anasayfa', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -49px; top: 38.6px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 'index.php', 1, 1, 0),
(3, 0, 0, '', 'HakkÄ±mÄ±zda', '', 'hakkimizda.php', 2, 1, 0),
(5, 0, 0, '', 'Haberler', '', 'haberler.php', 3, 1, 0),
(6, 0, 0, '', 'Iletisim', '', 'iletisim.php', 4, 1, 0),
(7, 0, 5, '', 'Istanbul Haberleri', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend sit amet tellus sed consectetur. Sed vitae egestas velit. Curabitur molestie sapien ut metus consequat varius. Etiam sed felis ligula. Nam congue condimentum semper. In eget ipsum tellus. Proin ut dolor at metus iaculis dictum vel quis lacus. Suspendisse id eros non libero dictum venenatis ac id leo. Nullam urna justo, finibus eget dapibus gravida, scelerisque et ante. Etiam ex arcu, dignissim id quam vel, lobortis tincidunt nisl. Cras mattis lectus sit amet mi ornare malesuada. Cras purus sapien, consectetur ac nisl vel, commodo tempor sem. Phasellus efficitur eu risus a molestie. Donec dignissim, ligula at pellentesque porttitor, massa ex iaculis nibh, a blandit dui est vel urna. Nunc vel tempus est. Etiam id convallis neque, ac egestas dui. Phasellus nec tincidunt velit, at imperdiet orci. Aliquam at feugiat leo. Nunc sit amet convallis nibh. Curabitur porta lectus eros, a scelerisque nunc aliquet varius. Fusce laoreet odio in sodales blandit. Duis vitae turpis eget enim placerat malesuada non id justo. Pellentesque ut tristique elit. Duis auctor ante nulla, a vulputate quam interdum nec. Aenean eu arcu mauris. Nulla viverra, diam in maximus dignissim, lectus lorem varius augue, vitae tristique nunc magna quis nunc. Morbi risus lorem, lacinia nec pellentesque eu, gravida vitae massa. Etiam porttitor arcu ac tortor volutpat, sit amet vestibulum neque mollis. Etiam fermentum gravida lacus. Duis pellentesque viverra sem quis dapibus. Curabitur quam ante, vestibulum laoreet dictum ut, commodo vel lacus. Sed vehicula, velit in dapibus interdum, dui enim porta nisl, id commodo quam purus in metus. Donec placerat sit amet eros id bibendum. Nullam lobortis sed justo eu dignissim. Donec dictum porttitor sem vitae sagittis. Curabitur euismod efficitur velit. Fusce ut ullamcorper mi. Phasellus vehicula ac dui et malesuada. Donec lacinia dapibus tortor et convallis. Duis dictum id dolor varius tristique. Mauris semper consectetur faucibus. Nunc ultrices accumsan quam eget imperdiet. Morbi dictum fringilla metus, ac gravida sem feugiat at. Nam risus magna, pellentesque suscipit metus vel, ullamcorper aliquam orci. Nulla ac nibh sit amet est volutpat finibus. Integer ultricies arcu lectus, ut finibus lacus pellentesque vel. Etiam sodales tempus pharetra. Vivamus quam risus, scelerisque ut tortor vitae, consequat dignissim elit. Sed accumsan orci velit, in rutrum nisi consectetur nec. Sed pretium, massa id mattis accumsan, dolor lorem maximus dolor, cursus dictum tellus libero sed nibh. Sed varius, ligula nec finibus tristique, urna risus placerat libero, sit amet fringilla ex lectus non enim. Nunc imperdiet blandit accumsan. Vivamus ut dui ac dui fermentum euismod in ac mauris. Pellentesque sit amet orci egestas, ultrices leo in, rhoncus augue. Maecenas eu mattis massa. Nulla vehicula ex dui, sed rhoncus nisi consequat placerat.</p>\r\n', '', 0, 1, 0),
(10, 0, 5, '', 'Mersin Haberleri', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend sit amet tellus sed consectetur. Sed vitae egestas velit. Curabitur molestie sapien ut metus consequat varius. Etiam sed felis ligula. Nam congue condimentum semper. In eget ipsum tellus. Proin ut dolor at metus iaculis dictum vel quis lacus. Suspendisse id eros non libero dictum venenatis ac id leo. Nullam urna justo, finibus eget dapibus gravida, scelerisque et ante. Etiam ex arcu, dignissim id quam vel, lobortis tincidunt nisl. Cras mattis lectus sit amet mi ornare malesuada. Cras purus sapien, consectetur ac nisl vel, commodo tempor sem.</p>\r\n\r\n<p>Phasellus efficitur eu risus a molestie. Donec dignissim, ligula at pellentesque porttitor, massa ex iaculis nibh, a blandit dui est vel urna. Nunc vel tempus est. Etiam id convallis neque, ac egestas dui. Phasellus nec tincidunt velit, at imperdiet orci. Aliquam at feugiat leo. Nunc sit amet convallis nibh. Curabitur porta lectus eros, a scelerisque nunc aliquet varius. Fusce laoreet odio in sodales blandit. Duis vitae turpis eget enim placerat malesuada non id justo. Pellentesque ut tristique elit. Duis auctor ante nulla, a vulputate quam interdum nec.</p>\r\n\r\n<p>Aenean eu arcu mauris. Nulla viverra, diam in maximus dignissim, lectus lorem varius augue, vitae tristique nunc magna quis nunc. Morbi risus lorem, lacinia nec pellentesque eu, gravida vitae massa. Etiam porttitor arcu ac tortor volutpat, sit amet vestibulum neque mollis. Etiam fermentum gravida lacus. Duis pellentesque viverra sem quis dapibus. Curabitur quam ante, vestibulum laoreet dictum ut, commodo vel lacus. Sed vehicula, velit in dapibus interdum, dui enim porta nisl, id commodo quam purus in metus. Donec placerat sit amet eros id bibendum.</p>\r\n\r\n<p>Nullam lobortis sed justo eu dignissim. Donec dictum porttitor sem vitae sagittis. Curabitur euismod efficitur velit. Fusce ut ullamcorper mi. Phasellus vehicula ac dui et malesuada. Donec lacinia dapibus tortor et convallis. Duis dictum id dolor varius tristique. Mauris semper consectetur faucibus. Nunc ultrices accumsan quam eget imperdiet.</p>\r\n\r\n<p>Morbi dictum fringilla metus, ac gravida sem feugiat at. Nam risus magna, pellentesque suscipit metus vel, ullamcorper aliquam orci. Nulla ac nibh sit amet est volutpat finibus. Integer ultricies arcu lectus, ut finibus lacus pellentesque vel. Etiam sodales tempus pharetra. Vivamus quam risus, scelerisque ut tortor vitae, consequat dignissim elit. Sed accumsan orci velit, in rutrum nisi consectetur nec. Sed pretium, massa id mattis accumsan, dolor lorem maximus dolor, cursus dictum tellus libero sed nibh. Sed varius, ligula nec finibus tristique, urna risus placerat libero, sit amet fringilla ex lectus non enim. Nunc imperdiet blandit accumsan. Vivamus ut dui ac dui fermentum euismod in ac mauris. Pellentesque sit amet orci egestas, ultrices leo in, rhoncus augue. Maecenas eu mattis massa. Nulla vehicula ex dui, sed rhoncus nisi consequat placerat.</p>\r\n', '', 0, 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_url` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `slider_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_url`, `slider_sira`, `slider_durum`) VALUES
(13, 'as', 'sliderUploads/28404284042550124418resim1.jpg', 'asa', '1', '1'),
(14, 'as', 'sliderUploads/31888318883155823865resim2.jpg', 'as', '2', '1'),
(15, 'as', 'sliderUploads/28592285922701622838resim3.jpg', 'as', '3', '1'),
(16, 'es', 'sliderUploads/20579205792752930445resim3.jpg', 'es', '4', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_guvenlik_pass` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `user_zaman` datetime NOT NULL,
  `user_yetki` int(1) NOT NULL DEFAULT '1',
  `user_durum` int(1) NOT NULL,
  `user_resimyol` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_pass`, `user_fullname`, `user_guvenlik_pass`, `user_zaman`, `user_yetki`, `user_durum`, `user_resimyol`) VALUES
(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', 'Mehmet Parlak', 'c04a1c78f2cc502c007a7066307a55a8', '2020-07-09 19:07:00', 1, 1, 'sliderUploads/26201262013193423568code.jpg'),
(3, 'mehmet', 'fe01ce2a7fbac8fafaed7c982a04e229', 'Mehmet Parlak', 'c04a1c78f2cc502c007a7066307a55a8', '2020-07-09 19:07:00', 0, 1, 'sliderUploads/20568205682487623946iconfinder_JD-21_2624888.ico');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

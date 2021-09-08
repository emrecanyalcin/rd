-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 08 Eyl 2021, 14:01:06
-- Sunucu sürümü: 8.0.25
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `related_digital_api`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `auth_service`
--

DROP TABLE IF EXISTS `auth_service`;
CREATE TABLE IF NOT EXISTS `auth_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `campaign_service`
--

DROP TABLE IF EXISTS `campaign_service`;
CREATE TABLE IF NOT EXISTS `campaign_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(100) NOT NULL,
  `explanation` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `campaign_service`
--

INSERT INTO `campaign_service` (`id`, `method`, `explanation`, `status`) VALUES
(69, 'AppendListToCampaign', 'Spesifik bir kampanyaya liste ekler. (MSCRM entegrasyonu için).', 0),
(70, 'CancelEmailCampaign', 'Gönderimi henüz tamamlanmamış bir kampanyayı iptal etmeyi sağlar.', 0),
(71, 'CreateEmailCampaign', 'Bir e-posta kampanyası oluşturmak için kullanılır.', 0),
(72, 'CreatePushCampaign', 'Bir Push kampanyası oluşturur veya varolan bir push kampanyasını günceller.', 0),
(73, 'CreateWebPushCampaign', 'Bir Web Push kampanyası oluşturur veya varolan bir web push kampanyasını günceller.', 0),
(74, 'CreateWebPushCampaign', 'Bir Web Push kampanyası oluşturur veya varolan bir web push kampanyasını günceller.', 0),
(75, 'CreateSmsCampaign', 'Bir SMS kampanya oluşturmayı sağlar.', 0),
(76, 'LockCampaign', 'Gönderime hazır olan bir kampanyayı duraklatır.', 0),
(77, 'QueryEmailCampaign', 'Mevcut bir kampanyanın parametrelerini listeler.', 0),
(78, 'QuerySmsCampaign', 'Varolan bir SMS Kampanyasının parametrelerini listeler.', 0),
(79, 'SelectCanceledEmailCampaigns', 'Belli bir tarih aralığında iptal edilen kampanyaları listeler.', 0),
(80, 'QueryMemberCampaigns', 'MemberID\'ye göre kampanya durumunu özetler.', 0),
(81, 'SelectCreatedEmailCampaigns', 'Belirli bir gün aralığındaki kampanyaları seçmek için kullanılır.', 0),
(82, 'SelectOngoingEmailCampaigns', 'Belli bir tarih aralığında oluşturulmuş işlem kampanyalarını listeler.', 0),
(83, 'SelectScheduledEmailCampaigns', 'Belirli bir gün aralığında zamanlanmış email kampanyaları ve durumlarını seçer.', 0),
(84, 'SelectTestedEmailCampaigns', 'Belli bir tarih aralığında test gönderimi yapılmış kampanyaları listeler.', 0),
(85, 'SendEmailCampaign', 'Bir e-posta kampanyası göndermek için kullanılır.', 0),
(86, 'SendPushCampaign', 'Bir Push kampanyası göndermek için kullanılır.', 0),
(87, 'SendEmailCampaignWithExtendedOptions', 'Harici seçeneklerle birlikte email kampanyası gönderimi için kullanılır.', 0),
(88, 'SendSmsCampaign', 'Bir SMS kampanyası göndermek için kullanılır.', 0),
(89, 'StartEmailCampaign', 'Gönderimi durdurulmuş bir e-posta kampanyasını yeniden başlatır.', 0),
(90, 'StopEmailCampaign', 'Gönderimde olan email kampanyasını duraklatmak için kullanılır.', 0),
(91, 'TestEmailCampaign', 'Bir email kampanyasının test gönderimini sağlar.', 0),
(92, 'TestSmsCampaign', 'Bir sms kampanyasının test gönderimini sağlar.', 0),
(93, 'UnlockCampaign', 'Gönderime hazır kampanyaları aktif duruma getirir.', 0),
(94, 'UpdateEmailCampaign', 'Taslak olarak yer alan bir e-posta kampanyasını güncellemek için kullanılır.', 0),
(95, 'UpdateSmsCampaign', 'SMS kampanyasını günceller. Eğer kampanya yok ise yeni bir kampanya oluşturur.', 0),
(96, 'CancelSmsCampaign', 'Gönderimde olan bir SMS kampanyasını iptal eder.', 0),
(97, 'CancelPushCampaign', 'Gönderimde olan bir Push kampanyasını iptal eder.', 0),
(98, 'StopPushCampaign', 'Gönderimde olan Push kampanyasını duraklatmak için kullanılır.', 0),
(99, 'StartPushCampaign', 'Önceden durdurulmuş bir Push kampanyasını tekrardan gönderime başlatır.', 0),
(100, 'CancelWebPushCampaign', 'Gönderimde olan bir Web Push kampanyasını iptal eder.', 0),
(101, 'StopWebPushCampaign', 'Gönderimde olan Web Push kampanyasını duraklatmak için kullanılır.', 0),
(102, 'StartWebPushCampaign', 'Önceden durdurulmuş bir Web Push kampanyasını tekrardan gönderime başlatır.', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `data_warehouse_service`
--

DROP TABLE IF EXISTS `data_warehouse_service`;
CREATE TABLE IF NOT EXISTS `data_warehouse_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(100) NOT NULL,
  `explanation` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `data_warehouse_service`
--

INSERT INTO `data_warehouse_service` (`id`, `method`, `explanation`, `status`) VALUES
(1, 'InsertUpdateRowInDwTable', 'Data Warehouse tablosuna satır ekler veya günceller.', 0),
(2, 'SelectRowsFromDwTable', 'Data Warehouse tablosundan satır detaylarını seçer.', 0),
(3, 'UploadDataWarehouseFile', 'Data Warehouse dosyasını byte array şeklinde yüklemek için kullanılır.', 0),
(4, 'QueryMemberDatawarehouse', 'Data Warehouse tablosundan veri seçer.', 0),
(5, 'GetFLTableColumns', 'Tablo ismine göre Datawarehouse kolonu seçer', 0),
(6, 'UpdateDwTableExpireDate', 'Datawarehouse tablosu geçerlilik süresini günceller', 0),
(7, 'BulkInsertUpdateRowInDwTable', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iys_report_service`
--

DROP TABLE IF EXISTS `iys_report_service`;
CREATE TABLE IF NOT EXISTS `iys_report_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(100) NOT NULL,
  `explanation` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `iys_report_service`
--

INSERT INTO `iys_report_service` (`id`, `method`, `explanation`, `status`) VALUES
(1, 'GetIysDailyConsentsByPermitDate', 'Girilen bir tarihte, üyelere ait emaillerin IYS üzerindeki izin durumlarını sorgulamayı sağlar', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `member_service`
--

DROP TABLE IF EXISTS `member_service`;
CREATE TABLE IF NOT EXISTS `member_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(45) DEFAULT NULL,
  `explanation` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `member_service`
--

INSERT INTO `member_service` (`id`, `method`, `explanation`, `status`) VALUES
(1, 'InsertMemberDemography', 'Yeni üyeyi, demografik bilgileri ile ekler.', 1),
(2, 'AddToAllLists', 'Belli bir kullanıcıyı tüm listelere ekler.', 1),
(3, 'AddToSendLists', 'Belli bir kullanıcıyı belirtilen listelere ekler.', 1),
(4, 'ChangeMemberPermissionByEmail', 'E-mail ile kullanıcının izin bilgisini günceller.', 1),
(5, 'CreatePushSubscription', 'Push uygulaması için yeni bir token ekler.', 1),
(6, 'GetEmailAddressByMemberId', 'Belirli bir üyenin ID\'si üzerinden email adresini döndürür.', 0),
(7, 'QueryMemberCampaigns', 'Üyenin belirtilen tarih aralığında aldığı kampanya bilgilerini gösterir.', 0),
(8, 'QueryMemberDemography', 'Üyeye ait demografik alanları listeler.', 0),
(9, 'QueryMemberID', 'Belli bir üyeye ait 32 karakterlik ID’yi döndürür.', 0),
(10, 'QuerySendLists', 'Belli bir üyenin bulunduğu listeleri gösterir.', 0),
(11, 'RemoveFromSendLists', 'Belli bir üyeyi belli bir listeden çıkartır.', 0),
(12, 'SendOngoingEMail', 'Üye’nin demografik bilgilerini günceller, sistemde yer almıyorsa ekler ve sonunda bir email kampanyası tetikler.', 1),
(13, 'SendOngoingSms', 'Üye’nin demografik bilgilerini günceller, sistemde yer almıyorsa ekler ve sonunda bir SMS kampanyası tetikler.', 1),
(14, 'UpdateMemberDemography', 'Üyenin demografik bilgilerini günceller.', 1),
(15, 'QueryMembersWithPermissionUpdate', 'Belirlenen tarih aralığında güncellenen izinlerin hangi üyelere ait olduğunu sorgular.', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_push_service`
--

DROP TABLE IF EXISTS `post_push_service`;
CREATE TABLE IF NOT EXISTS `post_push_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `explanation` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `post_push_service`
--

INSERT INTO `post_push_service` (`id`, `method`, `explanation`, `status`) VALUES
(1, 'GetPostPushResult', 'Gönderilmiş transactional push bildirimlerinin güncel durumlarını raporlar.', 0),
(2, 'GetPostPushResultByCreationDate', 'Gönderilmiş transactional push bildirimlerinin güncel durumlarını, oluşturulma tarihlerine göre raporlar.', 0),
(3, 'GetPostPushResultByLastUpdate', 'Gönderilmiş transactional push bildirimlerinin güncel durumlarını, son güncellemelere göre raporlar.', 0),
(4, 'PostTransactionalPush', 'Member key değerine göre üyelere transactional push bildirim göndermek için kullanılır.', 0),
(5, 'PostTransactionalPushWithToken', 'Token ID değerine göre üyelere transactional push bildirim göndermek için kullanılır.', 0),
(6, 'PostTransactionalPushWithLastUsedKnownTokenOnly', 'Son kullanılan token değerine göre üyelere transactional push bildirim göndermek için kullanılır.', 0),
(7, 'PostTransactionalWebPush', 'Member key değerine göre üyelere transactional web push bildirim göndermek için kullanılır.', 0),
(8, 'PostTransactionalWebPushWithToken', 'Token ID değerine göre üyelere transactional web push bildirim göndermek için kullanılır.', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_service`
--

DROP TABLE IF EXISTS `post_service`;
CREATE TABLE IF NOT EXISTS `post_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(100) NOT NULL,
  `explanation` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `post_service`
--

INSERT INTO `post_service` (`id`, `method`, `explanation`, `status`) VALUES
(1, 'CreateTransactionalEmailTemplate ', '', 0),
(2, 'GetPostBulkBounceResult', 'İki tarih aralığında geçersiz yada ulaşmayan adres olarak raporlanan transactional e-postaları sorgular.', 0),
(3, 'GetPostBulkResult', 'İki tarih aralığında gönderilen transactional e-postaların durumunu sorgular.', 0),
(4, 'GetPostBulkResultByLastUpdate', 'İki tarih aralığında ulaşım durumu değişmiş (okunmuş, geçersiz raporlanmış vb.) transactional e-postaları sorgular.', 0),
(5, 'GetPostBulkResultByPostId', 'Girilen PostID’lere ilişkin e-postaların durumunu sorgular.', 0),
(6, 'GetPostBulkResultWithOptional', 'Kampanya Tipi veya Gönderen Adreslerden biri belirtilerektransactional e-postaların durumunu sorgular.', 0),
(7, 'GetPostResult', 'Gönderilen bir transactional e-postanın durumunu sorgular.', 0),
(8, 'PostHtml', 'Bir adrese transactional bir e-posta gönderilmesini sağlar.', 1),
(9, 'PostHtmlWithTypeCCandBCC', 'Bir adrese, CC ve BCC ekleyerek transactional bir e-posta gönderilmesini sağlar.', 0),
(10, 'PostTransactionalEmailWithHtmlTemplate', 'Hesabınızda tanımlı bir HTML şablonu bir e-posta adresine gönderebilmenizi sağlar.', 0),
(11, 'PostTransactionalEmailWithXsltTemplate', 'Hesabınızda tanımlı bir XSLT şablonu bir e-posta adresine gönderebilmenizi sağlar.', 0),
(12, 'PostWithTemplate ', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_sms_service`
--

DROP TABLE IF EXISTS `post_sms_service`;
CREATE TABLE IF NOT EXISTS `post_sms_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(100) NOT NULL,
  `explanation` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `post_sms_service`
--

INSERT INTO `post_sms_service` (`id`, `method`, `explanation`, `status`) VALUES
(1, 'GetSmsBulkResult', 'İki tarih aralığında gönderilen tekli SMS lerin durumunu sorgular.', 0),
(2, 'ReportSingleShotSms', 'GSM numarasına yapılan OTP (One Time Password) gönderimini raporlar.', 0),
(3, 'ReportSmsWithPacketId', 'Gönderilen tekil SMS’in durumunu sorgulamayı sağlar.', 0),
(4, 'SendBulkSms', 'Birden fazla GSM numarasına bilgilendirme SMS’i gönderilmesini sağlar.', 0),
(5, 'SendBulkSmsWithTypeAndKeyID', 'Birden fazla GSM numarasına bilgilendirme SMS’i gönderilmesini sağlar.', 0),
(6, 'SendPersonalSms', 'Tekli bir SMS gönderimi yapılmasını sağlar.', 0),
(7, 'SendPersonalSmsWithTypeAndKeyID', 'Type ve KeyID değerleriyle birlikte tekli bir SMS gönderimi yapılmasını sağlar.', 0),
(8, 'SingleShotSms', 'Bir GSM numarasına OTP (One Time Password) gönderimi yapılmasını sağlar.', 0),
(9, 'SingleShotSmsWithTypeAndKeyID', 'Type ve KeyID değerleriyle birlikte tek seferlik SMS gönderimi yapılmasını sağlar.', 0),
(10, 'SendPersonalSmsToAMember', 'Kayıtlı kullanıcılara kişisel SMS gönderimi sağlar.', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `report_service`
--

DROP TABLE IF EXISTS `report_service`;
CREATE TABLE IF NOT EXISTS `report_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(100) NOT NULL,
  `explanation` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `report_service`
--

INSERT INTO `report_service` (`id`, `method`, `explanation`, `status`) VALUES
(21, 'GetCampaignReport', 'Belirtilen tarihler arasındaki kampanya raporlarını listeler.', 0),
(22, 'GetCampaignReportWithCampID', 'Bir e-posta kampanyasının kampanyanın özet bilgi ve özelliklerini listeler.', 0),
(23, 'GetEmailCampaignDeliveryStatusReportBetweenTwoDatesViaFtp', 'Belirtilen kampanya ID’sine göre, kampanyaya ait ulaşım durumu raporunu gösterir.', 0),
(24, 'GetEmailCampaignLinks', 'Bir kampanyanın içinde yer alan linklerin özelliklerini listeler.', 0),
(25, 'GetEmailCampaignMemberLinkReportBetweenTwoDatesViaFtp', 'Bir kampanyada tıklama yapan kullanıcıların listesini döner.', 0),
(26, 'GetEmailUnsubscribeReportBetweenTwoDatesViaFtp', 'İki tarih aralığında üyelikten ayrılan kullanıcıların raporunu oluşturur.', 0),
(27, 'GetFilteredMembers', 'Belli filtrelere göre hesabınızdaki üyeleri sorgulamanızı sağlar.', 0),
(28, 'GetIncomingSmsMessages', 'Hesabınızda tanımlı olan kısa numaraya gönderilen SMS\'leri listeler.', 0),
(29, 'GetListContent', 'Belirtilen listenin içeriğindeki üyeleri listeler.', 0),
(30, 'GetMemberCampaignsWithEmailAddress', 'E-mail adresine gönderilen kampanya şablonlarını listeler.', 0),
(31, 'GetSmsCampaignDeliveryStatusReportBetweenTwoDatesViaFtp', 'Belirtilen SMS kampanya ID’sine göre, kampanyaya ait SMS lerin ulaşım durumu raporunu gösterir.', 0),
(32, 'GetSmsCampaignReport', 'Belirtilen tarihler arasında ki SMS kampanyalarının özelliklerini listeler.', 0),
(33, 'GetSmsCampaignReportWithCampID', 'Bir SMS kampanyasının özet bilgi ve özelliklerini listeler.', 0),
(34, 'GetSmsOptoutReportBetweenTwoDates', 'İki tarih aralığında SMS kanalı üzerinden üyelikten ayrılan kullanıcıları listeler.', 0),
(35, 'GetUnsubscribeReportBetweenTwoDates', 'İki tarih aralığında üyelikten ayrılan kullanıcıları verir.', 0),
(36, 'QueryBulkFileProgress', 'Bir yükleme yada rapor isteğinin durumunu sorgulamanızı sağlar.', 0),
(37, 'QueryDataWarehouseUploadProgress', 'Bir data warehouse yüklemesinin durumunu sorgulamanızı sağlar.', 0),
(38, 'QueryOngoingEmailStatus', 'E-Mail işlem kampanyası kapsamında gönderilen bir e-postanın ulaşım durumunu sorgular.', 0),
(39, 'QueryOngoingSmsStatus', 'SMS işlem kampanyası kapsamında gönderilen bir SMS’in ulaşım durumunu sorgular.', 0),
(40, 'QuerySendingPushMessageToMembers', 'Üyelere push bildirim gönderilmesini sorgular.', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `send_list_service`
--

DROP TABLE IF EXISTS `send_list_service`;
CREATE TABLE IF NOT EXISTS `send_list_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(100) NOT NULL,
  `explanation` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `send_list_service`
--

INSERT INTO `send_list_service` (`id`, `method`, `explanation`, `status`) VALUES
(8, 'AddBulkFile', 'Bir dosyada yer alan üyelerin toplu olarak RMC hesabınıza yüklenmesini sağlar.', 0),
(9, 'CreateSendList', 'Boş bir gönderim listesi yaratır.', 0),
(10, 'ChangeSendListName', 'Listenin adını değiştirir.', 0),
(11, 'QuerySendListMemberCount', 'Gönderim listesindeki kişi sayısını gösterir.', 0),
(12, 'RemoveBulkFile', 'Bir dosyada yer alan üyelerin seçilerek RMC hesabınızdan silinmesini sağlar.', 0),
(13, 'RemoveSendList', 'Bir gönderim listesini siler.', 0),
(14, 'QuerySendLists', 'Müşteri gönderim listesini sorgular.', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `service_names`
--

DROP TABLE IF EXISTS `service_names`;
CREATE TABLE IF NOT EXISTS `service_names` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `service_names`
--

INSERT INTO `service_names` (`id`, `name`) VALUES
(1, 'Post Push Service'),
(2, 'Campaign Service'),
(3, 'Member Service'),
(4, 'Post Service'),
(5, 'PostSMS Service'),
(6, 'Report Service'),
(7, 'IYS Report Service'),
(8, 'SendList Service'),
(9, 'DataWarehouse Service');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

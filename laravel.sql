-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 06 Mar 2025, 13:55:38
-- Sunucu sürümü: 9.1.0
-- PHP Sürümü: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `about` text COLLATE utf8mb4_general_ci NOT NULL,
  `aboutEnglish` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aboutImage` text COLLATE utf8mb4_general_ci NOT NULL,
  `aboutImageAvif` text COLLATE utf8mb4_general_ci NOT NULL,
  `mission` text COLLATE utf8mb4_general_ci NOT NULL,
  `missionEnglish` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vision` text COLLATE utf8mb4_general_ci NOT NULL,
  `visionEnglish` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kvkk` text COLLATE utf8mb4_general_ci NOT NULL,
  `kvkkEnglish` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bannerImageAvif` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `about`, `aboutEnglish`, `aboutImage`, `aboutImageAvif`, `mission`, `missionEnglish`, `vision`, `visionEnglish`, `kvkk`, `kvkkEnglish`, `created_at`, `updated_at`, `bannerImage`, `bannerImageAvif`) VALUES
(1, '&lt;p&gt;2000 yılında Istanbul Kartal&amp;rsquo;da metal sekt&amp;ouml;r&amp;uuml; &amp;uuml;zerine faaliyete başlayan firmamız, gelişen metal sanayi sekt&amp;ouml;r&amp;uuml; ile birlikte ihtiya&amp;ccedil; duyulan al&amp;uuml;minyum borular, &amp;ccedil;elik borular, talaşlı imalat par&amp;ccedil;aları, enjeksiyon d&amp;ouml;k&amp;uuml;m par&amp;ccedil;alarını &amp;uuml;retmekte ve bunların montajını yapmaktadır.&lt;br /&gt;\r\n&lt;br /&gt;\r\nŞirketimiz, metal sekt&amp;ouml;r&amp;uuml;n&amp;uuml;n ihtiya&amp;ccedil;larına paralel olarak daha ileri gitmek, daha kaliteli &amp;uuml;r&amp;uuml;nleri imal etmek &amp;uuml;zere yeni yatırımlar yapmaya devam etmektedir.&lt;br /&gt;\r\n&lt;br /&gt;\r\nAlbogaz, ISO 9001:2015 kalite sistem belgesine sahip olup yeni &amp;uuml;r&amp;uuml;nlere y&amp;ouml;nelik olarak m&amp;uuml;şteri talebinden başlayarak, yeni &amp;uuml;r&amp;uuml;n hazırlıklarının ve planının yapılması, yeni &amp;uuml;r&amp;uuml;nlerin kalıbının yapılması, deneme &amp;uuml;retiminin ger&amp;ccedil;ekleştirilmesi ve ilk numunenin kabul&amp;uuml;, siparişlerin verilmesi, &amp;uuml;retimin planlanması, &amp;uuml;retimin ger&amp;ccedil;ekleştirilmesi, kalite kontrol işlemleri, ambajlama ve sevkiyat işlemleride dahil olmak &amp;uuml;zere y&amp;uuml;r&amp;uuml;tt&amp;uuml;ğ&amp;uuml; t&amp;uuml;m faaliyetleri ISO 9001: 2015 kalite sistem standardının gereksinimlerine g&amp;ouml;re gelişimini sağlamaktadır.&lt;br /&gt;\r\n&lt;br /&gt;\r\nFirmamızın yıllık montajlanmış &amp;uuml;r&amp;uuml;n kapasitesi 1.000.000 adet olup faaliyetlerini 3500 m2&amp;rsquo;lik kapalı alan &amp;uuml;zerinde s&amp;uuml;rd&amp;uuml;rmektedir.&lt;/p&gt;', '&lt;p&gt;Our company, which started its operations in the metal sector in Istanbul Kartal in 2000, produces and assembles aluminum pipes, steel pipes, machining parts, injection molding parts needed by the developing metal industry sector.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our company continues to make new investments in order to move forward and manufacture higher quality products in parallel with the needs of the metal sector.&lt;/p&gt;\r\n\r\n&lt;p&gt;Albogaz has the ISO 9001:2015 quality system certificate and ensures the development of all its activities starting from customer demand for new products, preparation and planning of new products, making molds for new products, carrying out trial production and acceptance of the first sample, placing orders, planning production, carrying out production, quality control processes, packaging and shipping processes according to the requirements of the ISO 9001:2015 quality system standard.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our company&amp;#39;s annual assembled product capacity is 1,000,000 units and it carries out its activities on a closed area of ​​3500 m2.&lt;/p&gt;', '143056549.jpg', '703054599.avif', '&lt;p&gt;Beyaz eşya sekt&amp;ouml;r&amp;uuml;nde hem yurt i&amp;ccedil;i hem yurt dışı piyasada kaliteli &amp;uuml;r&amp;uuml;nleri zamanında teslim etmek, M&amp;uuml;şteri memnuniyetini kendine ilke edinmiş personeli ile kendini s&amp;uuml;rekli geliştirmeye odaklamış &amp;ouml;rnek ve lider kuruluş olmaktır.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\nVizyonumuz doğrultusunda her t&amp;uuml;rl&amp;uuml; ticari, ahlaki ve hukuki kurallara saygılı ve bu kuralları yerine getiren m&amp;uuml;şterilerine, &amp;ccedil;alışanlarına ve ilişki i&amp;ccedil;ersinde bulunduğu t&amp;uuml;m kesimlere katkılarını s&amp;uuml;rekli olarak geliştiren dinamik bir organizasyon olmak.&lt;br /&gt;\r\n&lt;br /&gt;\r\nBunun i&amp;ccedil;in Kalite Sistem Y&amp;ouml;netim felsefesini ve s&amp;uuml;rekli gelişim anlayışını ilke edinerek m&amp;uuml;kemmel yolculukta devamlı mesafe katetmektir.&lt;br /&gt;\r\n&lt;br /&gt;\r\nALBOGAZ ailesi olarak hedeflerimiz, Misyon ve Vizyonlarımız doğrultusunda sekt&amp;ouml;rde &amp;ouml;nc&amp;uuml; bir kuruluş olmaktır.&lt;/p&gt;', '&lt;p&gt;To deliver quality products on time in both domestic and international markets in the white goods sector, to be an exemplary and leading organization that focuses on continuous development with its staff that adopts customer satisfaction as its principle.&lt;/p&gt;\r\n\r\n&lt;p&gt;To be a dynamic organization that respects all kinds of commercial, moral and legal rules in line with our vision and constantly improves its contributions to its customers, employees and all the segments it is in contact with by fulfilling these rules.&lt;/p&gt;\r\n\r\n&lt;p&gt;To achieve this, to continuously cover distance in the perfect journey by adopting the Quality System Management philosophy and the understanding of continuous development as its principle.&lt;/p&gt;\r\n\r\n&lt;p&gt;As the ALBOGAZ family, our goals are to be a pioneer organization in the sector in line with our Mission and Vision.&lt;/p&gt;', '&lt;p&gt;Beyaz eşya sekt&amp;ouml;r&amp;uuml;nde hem yurt i&amp;ccedil;i hem yurt dışı piyasada kaliteli &amp;uuml;r&amp;uuml;nleri zamanında teslim etmek, M&amp;uuml;şteri memnuniyetini kendine ilke edinmiş personeli ile kendini s&amp;uuml;rekli geliştirmeye odaklamış &amp;ouml;rnek ve lider kuruluş olmaktır.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\nVizyonumuz doğrultusunda her t&amp;uuml;rl&amp;uuml; ticari, ahlaki ve hukuki kurallara saygılı ve bu kuralları yerine getiren m&amp;uuml;şterilerine, &amp;ccedil;alışanlarına ve ilişki i&amp;ccedil;ersinde bulunduğu t&amp;uuml;m kesimlere katkılarını s&amp;uuml;rekli olarak geliştiren dinamik bir organizasyon olmak.&lt;br /&gt;\r\n&lt;br /&gt;\r\nBunun i&amp;ccedil;in Kalite Sistem Y&amp;ouml;netim felsefesini ve s&amp;uuml;rekli gelişim anlayışını ilke edinerek m&amp;uuml;kemmel yolculukta devamlı mesafe katetmektir.&lt;br /&gt;\r\n&lt;br /&gt;\r\nALBOGAZ ailesi olarak hedeflerimiz, Misyon ve Vizyonlarımız doğrultusunda sekt&amp;ouml;rde &amp;ouml;nc&amp;uuml; bir kuruluş olmaktır.&lt;/p&gt;', '&lt;p&gt;To deliver quality products on time in both domestic and international markets in the white goods sector, to be an exemplary and leading organization that focuses on continuous development with its staff that adopts customer satisfaction as its principle.&lt;/p&gt;\r\n\r\n&lt;p&gt;To be a dynamic organization that respects all kinds of commercial, moral and legal rules in line with our vision and constantly improves its contributions to its customers, employees and all the segments it is in contact with by fulfilling these rules.&lt;/p&gt;\r\n\r\n&lt;p&gt;To achieve this, to continuously cover distance in the perfect journey by adopting the Quality System Management philosophy and the understanding of continuous development as its principle.&lt;/p&gt;\r\n\r\n&lt;p&gt;As the ALBOGAZ family, our goals are to be a pioneer organization in the sector in line with our Mission and Vision.&lt;/p&gt;', '&lt;h6&gt;ALBOGAZ METAL SANAYİ VE TİCARET LİMİTED ŞİRKETİ olarak kişisel verilerinizin g&amp;uuml;venliği hususuna azami hassasiyet g&amp;ouml;stermekteyiz. Bu bilin&amp;ccedil;le, Şirket olarak &amp;uuml;r&amp;uuml;n ve hizmetlerimizden faydalanan kişiler dahil, Şirket ile ilişkili t&amp;uuml;m şahıslara ait her t&amp;uuml;rl&amp;uuml; kişisel verilerin 6698 sayılı Kişisel Verilerin Korunması Kanunu (&amp;ldquo;KVK Kanunu&amp;rdquo;)&amp;rsquo;na uygun olarak işlenerek, muhafaza edilmesine b&amp;uuml;y&amp;uuml;k &amp;ouml;nem g&amp;ouml;stermekteyiz. Bu sorumluluğumuzun tam idraki ile Veri Sorumlusu sıfatıyla, kişisel verilerinizi aşağıda izah edildiği surette ve mevzuat tarafından emredilen sınırlar &amp;ccedil;er&amp;ccedil;evesinde işlemekteyiz.&lt;/h6&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h2&gt;1. Kişisel Verilerin Toplanması, İşlenmesi ve İşleme Ama&amp;ccedil;ları&lt;/h2&gt;\r\n\r\n&lt;p&gt;Kişisel verileriniz, Şirketimiz tarafından verilen hizmet, &amp;uuml;r&amp;uuml;n ya da ticari faaliyete bağlı olarak değişkenlik g&amp;ouml;sterebilmekle; otomatik ya da otomatik olmayan y&amp;ouml;ntemlerle, ofisler, bayiler, internet sitesi, sosyal medya mecraları ve benzeri vasıtalarla s&amp;ouml;zl&amp;uuml;, yazılı ya da elektronik olarak toplanabilecektir. Şirketimizin &amp;uuml;r&amp;uuml;n ve hizmetlerinden yararlandığınız m&amp;uuml;ddet&amp;ccedil;e oluşturularak ve g&amp;uuml;ncellenerek kişisel verileriniz işlenebilecektir. Ayrıca, Şirket hizmetlerini kullanmak niyetiyle internet sayfamızı kullandığınızda, Şirketimizi veya internet sitemizi ziyaret ettiğinizde, Şirketimizin d&amp;uuml;zenlediği eğitim, seminer veya organizasyonlara katıldığınızda kişisel verileriniz işlenebilecektir.Toplanan kişisel verileriniz, Şirketimiz tarafından sunulan &amp;uuml;r&amp;uuml;n ve hizmetlerden sizleri faydalandırmak i&amp;ccedil;in gerekli &amp;ccedil;alışmaların iş birimlerimiz tarafından yapılması, Şirketimiz tarafından sunulan &amp;uuml;r&amp;uuml;n ve hizmetlerin sizlerin beğeni, kullanım alışkanlıkları ve ihtiya&amp;ccedil;larına g&amp;ouml;re &amp;ouml;zelleştirilerek sizlere &amp;ouml;nerilmesi, Şirketimizin ve Şirketimizle iş ilişkisi i&amp;ccedil;erisinde olan kişilerin hukuki ve ticari g&amp;uuml;venliğinin temini (Şirketimiz tarafından y&amp;uuml;r&amp;uuml;t&amp;uuml;len iletişime y&amp;ouml;nelik idari operasyonlar, Şirkete ait lokasyonların fiziksel g&amp;uuml;venliğini ve denetimini sağlamak, iş ortağı/m&amp;uuml;şteri/tedarik&amp;ccedil;i (yetkili veya &amp;ccedil;alışanları) değerlendirme s&amp;uuml;re&amp;ccedil;leri, hukuki uyum s&amp;uuml;reci, mali işler v.b.), Şirketimizin ticari ve iş stratejilerinin belirlenmesi ve uygulanması ve Şirketimizin insan kaynakları politikalarının y&amp;uuml;r&amp;uuml;t&amp;uuml;lmesinin temini ama&amp;ccedil;larıyla KVK Kanunu&amp;rsquo;nun 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve ama&amp;ccedil;ları dahilinde işlenecektir.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h2&gt;2. İşlenen Kişisel Verilerin Kimlere ve Hangi Ama&amp;ccedil;la Aktarılabileceği&lt;/h2&gt;\r\n\r\n&lt;p&gt;Toplanan kişisel verileriniz; Şirketimiz tarafından sunulan &amp;uuml;r&amp;uuml;n ve hizmetlerden sizleri faydalandırmak i&amp;ccedil;in gerekli &amp;ccedil;alışmaların iş birimlerimiz tarafından yapılması, Şirketimiz tarafından sunulan &amp;uuml;r&amp;uuml;n ve hizmetlerin sizlerin beğeni, kullanım alışkanlıkları ve ihtiya&amp;ccedil;larına g&amp;ouml;re &amp;ouml;zelleştirilerek sizlere &amp;ouml;nerilmesi, Şirketimizin ve Şirketimizle iş ilişkisi i&amp;ccedil;erisinde olan kişilerin hukuki ve ticari g&amp;uuml;venliğinin temini (Şirketimiz tarafından y&amp;uuml;r&amp;uuml;t&amp;uuml;len iletişime y&amp;ouml;nelik idari operasyonlar, Şirkete ait lokasyonların fiziksel g&amp;uuml;venliğini ve denetimini sağlamak, iş ortağı/m&amp;uuml;şteri/tedarik&amp;ccedil;i (yetkili veya &amp;ccedil;alışanları) değerlendirme s&amp;uuml;re&amp;ccedil;leri, hukuki uyum s&amp;uuml;reci, mali işler v.b.), Şirketimizin ticari ve iş stratejilerinin belirlenmesi ve uygulanması ile Şirketimizin insan kaynakları politikalarının y&amp;uuml;r&amp;uuml;t&amp;uuml;lmesinin temini ama&amp;ccedil;larıyla iş ortaklarımıza, tedarik&amp;ccedil;ilerimize, hissedarlarımıza, kanunen yetkili kamu kurumları ve &amp;ouml;zel kişilere, KVK Kanunu&amp;rsquo;nun 8. ve 9. maddelerinde belirtilen kişisel veri işleme şartları ve ama&amp;ccedil;ları &amp;ccedil;er&amp;ccedil;evesinde aktarılabilecektir. Bunun yanı sıra hizmet kalitesini artırmak, m&amp;uuml;şteri talebi &amp;uuml;zerine &amp;uuml;r&amp;uuml;n&amp;uuml;n garanti s&amp;uuml;resini uzatmak ve yapılan etkinlik ve organizasyonların raporlanması ve &amp;ccedil;ıktılarının &amp;uuml;retilebilmesi amacıyla &amp;uuml;retici firmalara, Pazarlama ve tanıtım faaliyetlerini iyileştirebilmek ve halkla ilişkiler amacıyla sosyal medya kuruluşlarıyla, sosyal medya ajanslarıyla ve basın yayın kuruluşlarıyla, Kampanya faaliyetlerinde vize ve seyahat işlemlerinin ger&amp;ccedil;ekleştirilebilmesi amacıyla acenteler bazında yurtdışına aktarılabilmektedir.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h2&gt;3. Kişisel Veri Toplamanın Y&amp;ouml;ntemi ve Hukuki Sebebi&lt;/h2&gt;\r\n\r\n&lt;p&gt;Kişisel verileriniz, her t&amp;uuml;rl&amp;uuml; s&amp;ouml;zl&amp;uuml;, yazılı ya da elektronik ortamda, yukarıda yer verilen ama&amp;ccedil;lar doğrultusunda Şirket&amp;ccedil;e sunduğumuz &amp;uuml;r&amp;uuml;n ve hizmetlerin belirlenen yasal &amp;ccedil;er&amp;ccedil;evede sunulabilmesi ve bu kapsamda Şirketimizin s&amp;ouml;zleşme ve yasadan doğan mesuliyetlerini eksiksiz ve doğru bir şekilde yerine getirebilmesi gayesi ile edinilir. Bu hukuki sebeple toplanan kişisel verileriniz KVK Kanunu&amp;rsquo;nun 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve ama&amp;ccedil;ları kapsamında bu metnin (1) ve (2) numaralı maddelerinde belirtilen ama&amp;ccedil;larla da işlenebilmekte ve aktarılabilmektedir.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h2&gt;4. Kişisel Veri Sahibinin KVK Kanunu&amp;rsquo;nun 11. maddesinde Sayılan Hakları&lt;/h2&gt;\r\n\r\n&lt;p&gt;Kişisel veri sahipleri olarak, haklarınıza ilişkin taleplerinizi, işbu Aydınlatma Metni&amp;rsquo;nde aşağıda d&amp;uuml;zenlenen y&amp;ouml;ntemlerle Şirketimize iletmeniz durumunda Şirketimiz talebin niteliğine g&amp;ouml;re talebi en ge&amp;ccedil; otuz g&amp;uuml;n i&amp;ccedil;inde &amp;uuml;cretsiz olarak sonu&amp;ccedil;landıracaktır. Ancak, Kişisel Verileri Koruma Kurulunca bir &amp;uuml;cret &amp;ouml;ng&amp;ouml;r&amp;uuml;lmesi halinde, Şirketimiz tarafından belirlenen tarifedeki &amp;uuml;cret alınacaktır. Bu kapsamda kişisel veri sahipleri;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;ul style=&quot;list-style-type:disc&quot;&gt;\r\n	&lt;li&gt;Kişisel veri işlenip işlenmediğini &amp;ouml;ğrenme&lt;/li&gt;\r\n	&lt;li&gt;Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,&lt;/li&gt;\r\n	&lt;li&gt;Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını &amp;ouml;ğrenme,&lt;/li&gt;\r\n	&lt;li&gt;Yurt i&amp;ccedil;inde veya yurt dışında kişisel verilerin aktarıldığı &amp;uuml;&amp;ccedil;&amp;uuml;nc&amp;uuml; kişileri bilme,&lt;/li&gt;\r\n	&lt;li&gt;Kişisel verilerin eksik veya yanlış işlenmiş olması h&amp;acirc;linde bunların d&amp;uuml;zeltilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı &amp;uuml;&amp;ccedil;&amp;uuml;nc&amp;uuml; kişilere bildirilmesini isteme,&lt;/li&gt;\r\n	&lt;li&gt;KVK Kanunu&amp;rsquo;nun ve ilgili diğer kanun h&amp;uuml;k&amp;uuml;mlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması h&amp;acirc;linde kişisel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı &amp;uuml;&amp;ccedil;&amp;uuml;nc&amp;uuml; kişilere bildirilmesini isteme,&lt;/li&gt;\r\n	&lt;li&gt;İşlenen verilerin m&amp;uuml;nhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya &amp;ccedil;ıkmasına itiraz etme,&lt;/li&gt;\r\n	&lt;li&gt;Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması h&amp;acirc;linde zararın giderilmesini talep etme haklarına sahiptir.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;KVK Kanunu&amp;rsquo;nun 13. maddesinin 1. fıkrası gereğince, yukarıda belirtilen haklarınızı kullanmak ile ilgili talebinizi, yazılı veya Kişisel Verileri Koruma Kurulu&amp;rsquo;nun belirlediği diğer y&amp;ouml;ntemlerle Şirketimize iletebilirsiniz. Kişisel Verileri Koruma Kurulu, şu aşamada herhangi bir y&amp;ouml;ntem belirlemediği i&amp;ccedil;in, başvurunuzu, KVK Kanunu gereğince, yazılı olarak Şirketimize iletmeniz gerekmektedir. Bu &amp;ccedil;er&amp;ccedil;evede Şirketimize KVK Kanunu&amp;rsquo;nun 11. maddesi kapsamında yapacağınız başvurularda yazılı olarak başvurunuzu ileteceğiniz kanallar ve usuller aşağıda a&amp;ccedil;ıklanmaktadır.&lt;/p&gt;\r\n\r\n&lt;p&gt;Yukarıda belirtilen haklarınızı kullanmak i&amp;ccedil;in kimliğinizi tespit edici gerekli bilgiler ile KVK Kanunu&amp;rsquo;nun 11. maddesinde belirtilen haklardan kullanmayı talep ettiğiniz hakkınıza y&amp;ouml;nelik a&amp;ccedil;ıklamalarınızı i&amp;ccedil;eren talebinizi; ALBOGAZ METAL SANAYİ VE TİCARET LİMİTED ŞİRKETİ Deri Organize San. B&amp;ouml;l. YB-24 No:1 Parsel Tuzla İstanbul &amp;ndash; T&amp;uuml;rkiye adresine bizzat başvurarak, info@albogaz.com e-posta adresleri &amp;uuml;zerinden veya taleplerini konu alan dilek&amp;ccedil;eleri ile noter onaylı posta yoluyla ALBOGAZ METAL SANAYİ VE TİCARET LİMİTED ŞİRKETİ&amp;rsquo;ne başvurarak iletebilirsiniz.&lt;/p&gt;', '&lt;p&gt;As ALBOGAZ METAL SANAYİ VE TİCARET LİMİTED ŞİRKETİ, we show utmost sensitivity to the security of your personal data. With this awareness, as a Company, we attach great importance to the processing and preservation of all personal data belonging to all persons affiliated with the Company, including those who benefit from our products and services, in accordance with the Personal Data Protection Law No. 6698 (&amp;ldquo;LPPD Law&amp;rdquo;). With full awareness of this responsibility, as the Data Controller, we process your personal data as explained below and within the limits stipulated by the legislation.&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Collection, Processing and Purposes of Processing of Personal Data&lt;br /&gt;\r\nYour personal data may vary depending on the service, product or commercial activity provided by our Company; it may be collected verbally, in writing or electronically through automatic or non-automatic methods, offices, dealers, website, social media channels and similar means. Your personal data may be created and d as long as you benefit from our Company&amp;rsquo;s products and services. In addition, when you use our website with the intention of using the Company&amp;#39;s services, visit our Company or website, or participate in training, seminars or organizations organized by our Company, your personal data may be processed. Your collected personal data will be processed in accordance with the personal data processing conditions and purposes specified in Articles 5 and 6 of the Personal Data Protection Law for the purposes of ensuring that our business units carry out the necessary work to make you benefit from the products and services offered by our Company, that the products and services offered by our Company are customized and recommended to you according to your tastes, usage habits and needs, that the legal and commercial security of our Company and the persons who have a business relationship with our Company (administrative operations for communication carried out by our Company, ensuring the physical security and control of the Company&amp;#39;s locations, business partner/customer/supplier (authorized or employees) evaluation processes, legal compliance process, financial affairs, etc.), that our Company&amp;#39;s commercial and business strategies are determined and implemented, and that our Company&amp;#39;s human resources policies are implemented.&lt;/p&gt;\r\n\r\n&lt;p&gt;2. To Whom and for What Purposes Can the Processed Personal Data Be Transferred&lt;br /&gt;\r\nYour collected personal data; It may be transferred to our business partners, suppliers, shareholders, legally authorized public institutions and private persons within the framework of the personal data processing conditions and purposes specified in Articles 8 and 9 of the Personal Data Protection Law, for the purposes of carrying out the necessary work by our business units to enable you to benefit from the products and services offered by our Company, to customize the products and services offered by our Company according to your tastes, usage habits and needs and to recommend them to you, to ensure the legal and commercial security of our Company and the persons who have a business relationship with our Company (administrative operations for communication carried out by our Company, to ensure the physical security and control of the Company&amp;#39;s locations, business partner/customer/supplier (authorized persons or employees) evaluation processes, legal compliance process, financial affairs, etc.), to determine and implement our Company&amp;#39;s commercial and business strategies and to ensure the ution of our Company&amp;#39;s human resources policies. In addition, it can be transferred abroad to manufacturing companies in order to increase service quality, extend the warranty period of the product upon customer request and to be able to report and produce outputs of the events and organizations; to social media organizations, social media agencies and press broadcasting organizations in order to improve marketing and promotion activities and for public relations; and to agencies abroad in order to carry out visa and travel procedures in campaign activities.&lt;/p&gt;\r\n\r\n&lt;p&gt;3. Method and Legal Reason for Collecting Personal Data&lt;br /&gt;\r\nYour personal data is obtained in all kinds of verbal, written or electronic media, in line with the purposes stated above, in order to provide the products and services we offer as the Company within the determined legal framework and to fulfill our Company&amp;#39;s responsibilities arising from the contract and the law completely and correctly. Your personal data collected for this legal reason can also be processed and transferred for the purposes specified in articles (1) and (2) of this text within the scope of the personal data processing conditions and purposes specified in articles 5 and 6 of the Personal Data Protection Law.&lt;/p&gt;\r\n\r\n&lt;p&gt;4. Rights of the Personal Data Owner Listed in Article 11 of the Personal Data Protection Law&lt;br /&gt;\r\nAs personal data owners, if you submit your requests regarding your rights to our Company through the methods set out below in this Disclosure Text, our Company will finalize the request free of charge within thirty days at the latest, depending on the nature of the request. However, if a fee is foreseen by the Personal Data Protection Board, the fee specified by our Company will be charged. In this context, personal data owners have the right to;&lt;/p&gt;\r\n\r\n&lt;p&gt;Learn whether personal data has been processed&lt;/p&gt;\r\n\r\n&lt;p&gt;Request information about personal data if it has been processed,&lt;br /&gt;\r\nLearn the purpose of processing personal data and whether it is used in accordance with its purpose,&lt;br /&gt;\r\nKnow the third parties to whom personal data is transferred domestically or abroad,&lt;br /&gt;\r\nRequest correction of personal data if it is processed incompletely or incorrectly and request notification of the transaction made in this context to third parties to whom personal data is transferred,&lt;br /&gt;\r\nRequest deletion or destruction of personal data if the reasons requiring processing are eliminated despite the fact that it has been processed in accordance with the provisions of the Personal Data Protection Law and other relevant laws, and request notification of the transaction made in this context to third parties to whom personal data is transferred,&lt;br /&gt;\r\nObject to the emergence of a result against the person by analyzing the processed data exclusively through automated systems,&lt;br /&gt;\r\nRequest compensation for the damages in case of damages incurred due to unlawful processing of personal data. Pursuant to Article 13, paragraph 1 of the PDP Law, you may submit your request to our Company regarding the exercise of your rights specified above in writing or through other methods determined by the Personal Data Protection Board. Since the Personal Data Protection Board has not determined any method at this stage, you must submit your application to our Company in writing in accordance with the PDP Law. In this context, the channels and methods through which you will submit your written application for applications to our Company within the scope of Article 11 of the PDP Law are explained below.&lt;/p&gt;\r\n\r\n&lt;p&gt;In order to exercise your rights specified above, you may submit your request including the necessary information identifying your identity and explanations regarding the right you request to exercise from among the rights specified in Article 11 of the PDP Law to; ALBOGAZ METAL SANAYİ VE TİCARET LİMİTED ŞİRKETİ Deri Organize San. B&amp;ouml;l. You can apply in person to the address YB-24 No:1 Parcel Tuzla Istanbul &amp;ndash; Turkey, via the e-mail address info@albogaz.com or by applying to ALBOGAZ METAL SANAYİ VE TİCARET LİMİTED ŞİRKETİ with your petitions regarding your requests via notary-certified mail.&lt;/p&gt;', '0000-00-00 00:00:00', '2025-03-06 12:05:07', '759880797.jpg', '769811111.avif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `carousel`
--

DROP TABLE IF EXISTS `carousel`;
CREATE TABLE IF NOT EXISTS `carousel` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `imageAvif` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `connection` text COLLATE utf8mb4_general_ci NOT NULL,
  `queue` text COLLATE utf8mb4_general_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nameEnglish` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `textEnglish` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `faq`
--

INSERT INTO `faq` (`id`, `name`, `nameEnglish`, `text`, `textEnglish`, `created_at`, `updated_at`) VALUES
(2, 'Neden bizi tercih etmelisiniz', 'Why should you choose us', '&lt;p&gt;Bilmiyorum&lt;/p&gt;', '&lt;p&gt;I don&amp;#39;t now&lt;/p&gt;', '2025-03-06 06:09:11', '2025-03-06 06:09:11'),
(3, 'sdfgsdfg', 'sdgsdfgsdfg', '&lt;p&gt;sdgsdfgdsfgsdf&lt;/p&gt;', '&lt;p&gt;gdsffgdsfgdsfg&lt;/p&gt;', '2025-03-06 06:14:52', '2025-03-06 06:14:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `imageAvif` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_26_195738_product', 1),
(6, '2024_10_29_123542_about', 1),
(7, '2024_10_29_173428_carousel', 1),
(8, '2024_10_31_200340_contact', 1),
(9, '2024_11_15_060823_profile', 1),
(10, '2024_12_03_163526_product_gallery', 1),
(11, '2024_12_08_113331_gallery', 1),
(12, '2025_01_06_004335_setting', 1),
(13, '2025_01_10_033636_reference', 1),
(14, '2025_01_17_134907_service', 1),
(15, '2025_01_18_072322_project', 1),
(16, '2025_01_18_072427_project_gallery', 1),
(17, '2025_03_06_082926_create_faq_table', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_general_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `images` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `imagesAvif` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `titleEnglish` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `textEnglish` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `isPopular` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`id`, `images`, `imagesAvif`, `title`, `titleEnglish`, `text`, `textEnglish`, `isPopular`, `created_at`, `updated_at`) VALUES
(3, '518956688.jpg', '664783580.avif', 'Türkçe İsim', 'English Name', '&lt;p&gt;T&amp;uuml;rk&amp;ccedil;e İ&amp;ccedil;erik&lt;/p&gt;', '&lt;p&gt;English Content&lt;/p&gt;', '0', '2025-03-06 11:53:58', '2025-03-06 11:53:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `productgallery`
--

DROP TABLE IF EXISTS `productgallery`;
CREATE TABLE IF NOT EXISTS `productgallery` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `productId` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imageAvif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nameEnglish` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `productgallery_productid_foreign` (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `productgallery`
--

INSERT INTO `productgallery` (`id`, `productId`, `image`, `imageAvif`, `name`, `nameEnglish`, `created_at`, `updated_at`) VALUES
(4, 3, '525635409.jpg', '565441983.avif', 'türkçe isim', 'english name', '2025-03-06 11:54:19', '2025-03-06 11:54:19');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `profile`
--

INSERT INTO `profile` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '2025-03-06 02:45:05', '2025-03-06 02:45:05'),
(2, 'admin', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '2025-03-06 02:45:05', '2025-03-06 02:45:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `images` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `imagesAvif` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `titleEnglish` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `textEnglish` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `isPopular` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `project`
--

INSERT INTO `project` (`id`, `images`, `imagesAvif`, `title`, `titleEnglish`, `text`, `textEnglish`, `isPopular`, `created_at`, `updated_at`) VALUES
(2, '243671730.jpg', '628394578.avif', 'Türkçe İsim', 'English Name', '&lt;p&gt;Trk&amp;ccedil;e İ&amp;ccedil;erik&lt;/p&gt;', '&lt;p&gt;English Content&lt;/p&gt;', '0', '2025-03-06 11:55:05', '2025-03-06 11:55:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projectgallery`
--

DROP TABLE IF EXISTS `projectgallery`;
CREATE TABLE IF NOT EXISTS `projectgallery` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `projectId` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `imageAvif` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projectgallery_projectid_foreign` (`projectId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `projectgallery`
--

INSERT INTO `projectgallery` (`id`, `projectId`, `image`, `imageAvif`, `created_at`, `updated_at`) VALUES
(3, 2, '287399666.jpg', '562275387.avif', '2025-03-06 11:55:15', '2025-03-06 11:55:15'),
(4, 2, '366202961.jpg', '137231032.avif', '2025-03-06 11:55:19', '2025-03-06 11:55:19');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reference`
--

DROP TABLE IF EXISTS `reference`;
CREATE TABLE IF NOT EXISTS `reference` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `reference`
--

INSERT INTO `reference` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(2, '715422287.avif', 'Arçelik', '2025-03-06 03:59:28', '2025-03-06 03:59:28'),
(3, '162652462.avif', 'Amica', '2025-03-06 03:59:40', '2025-03-06 03:59:40'),
(4, '271873967.avif', 'Electrolux', '2025-03-06 03:59:51', '2025-03-06 03:59:51'),
(5, '778205160.avif', 'Teka', '2025-03-06 03:59:58', '2025-03-06 03:59:58'),
(6, '621636532.avif', 'Kumtel', '2025-03-06 04:00:06', '2025-03-06 04:00:06'),
(7, '556724644.avif', 'İndesit', '2025-03-06 04:00:19', '2025-03-06 04:00:19'),
(8, '616494979.avif', 'Gorenje', '2025-03-06 04:00:30', '2025-03-06 04:00:30'),
(9, '895774500.avif', 'Çetintaş', '2025-03-06 04:00:41', '2025-03-06 04:00:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `images` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `imagesAvif` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `titleEnglish` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `textEnglish` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `isPopular` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `service`
--

INSERT INTO `service` (`id`, `images`, `imagesAvif`, `title`, `titleEnglish`, `text`, `textEnglish`, `isPopular`, `created_at`, `updated_at`) VALUES
(5, '967502877.jpg', '990001081.avif', 'türkçe isim', 'English name', '&lt;p&gt;t&amp;uuml;rk&amp;ccedil;e i&amp;ccedil;erik&lt;/p&gt;', '&lt;p&gt;English content&lt;/p&gt;', '0', '2025-03-06 11:53:16', '2025-03-06 11:53:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `logoHeader` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `logoHeaderAvif` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `logoFooter` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `logoFooterAvif` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `siteUrl` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `setting`
--

INSERT INTO `setting` (`id`, `icon`, `logoHeader`, `logoHeaderAvif`, `logoFooter`, `logoFooterAvif`, `siteUrl`, `title`, `description`, `keyword`, `author`, `phoneNumber`, `email`, `address`, `age`, `facebook`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '259540202.png', '407213650.png', '289662418.avif', '392549321.png', '958508331.avif', 'sdfsdfsdf', 'a', 'a', 'a', 'a', '534 654 6300', 'a', 'a', 'a', 'a', 'a', 'a', 'a', NULL, '2025-03-06 10:58:30'),
(2, 'sad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `productgallery`
--
ALTER TABLE `productgallery`
  ADD CONSTRAINT `productgallery_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `product` (`id`);

--
-- Tablo kısıtlamaları `projectgallery`
--
ALTER TABLE `projectgallery`
  ADD CONSTRAINT `projectgallery_projectid_foreign` FOREIGN KEY (`projectId`) REFERENCES `project` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

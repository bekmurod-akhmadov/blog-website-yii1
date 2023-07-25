-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 25 2023 г., 16:00
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `site_url`, `description`, `status`) VALUES
(1, 'bekmurod', 'www.akhmadov.uz', 'adasdasdasdasd', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(1, 'Jamiyat', 1),
(2, 'Sport', 1),
(3, 'O\'zbekiston', 1),
(4, 'Jahon', 1),
(5, 'Texnologiya', 1),
(6, 'Iqtisodiyot', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `news_id` int NOT NULL,
  `comment` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `news_id`, `comment`, `username`, `email`, `created_at`, `updated_at`) VALUES
(1, 2, 'asdasdasd asd asdas asda', 'bekmurod', 'xbek1321@gmail.com', '2023-07-06 10:18:23', '2023-07-06 10:18:23');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int DEFAULT NULL,
  `order_by` int NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `order_by`, `link`, `status`, `position`) VALUES
(1, 'Sport', NULL, 1, '/news/category/2', 1, 1),
(2, 'O\'zbekiston', NULL, 2, '/news/category/3', 1, 1),
(3, 'Jahon', NULL, 3, '/news/category/4', 1, 1),
(4, 'Texnologiya', NULL, 4, '/news/category/5', 1, 1),
(5, 'Iqtisodiyot', NULL, 5, '/news/category/6', 1, 1),
(6, 'Jamiyat', NULL, 1, '/news/category/1', 1, 1),
(7, 'Kontaktlar', NULL, 1, '/', 1, 0),
(8, 'Biz haqimizda', NULL, 1, '/', 1, 0),
(9, 'Kamronbek', 3, 1, '/', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `seen_count` int DEFAULT NULL,
  `author_id` int DEFAULT NULL,
  `banner_id` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `body` text NOT NULL,
  `slug_title` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `category_id`, `created_at`, `updated_date`, `seen_count`, `author_id`, `banner_id`, `status`, `body`, `slug_title`) VALUES
(2, 'Shavkat Mirziyoyev Gurbanguli Berdimuhamedov bilan telefon orqali muloqot qild', 'O‘zbekiston prezidenti Shavkat Mirziyoyev 29 iyun kuni turkman xalqining milliy yetakchisi, Turkmaniston Xalq maslahati raisi Gurbanguli Berdimuhamedov bilan telefon orqali muloqot qildi.', 'image_940c6b9ddaec89d682756a097ac1a42d.jpg', 3, '2023-06-24 00:00:00', '2023-06-23 13:41:33', 99, 1, 1, 1, 'Suhbat avvalida davlat rahbari Gurbanguli Berdimuhamedovni tavallud kuni bilan qutlab, unga mustahkam sog‘lik, baxt-saodat va katta muvaffaqiyatlar, qardosh turkman xalqiga tinchlik-osoyishtalik va ravnaq tiladi.\r\n\r\nUning bugungi Turkmanistonni rivojlantirish, mamlakatlarimiz o‘rtasida do‘stlik, yaxshi qo‘shnichilik va strategik sheriklik munosabatlarini mustahkamlashga qo‘shayotgan salmoqli hissasi qayd etildi.\r\n\r\nO‘zbekiston va Turkmaniston yetakchilari Qurbon hayiti bilan bir-birini dildan tabrikladi. O‘zbekiston prezidenti yangi Arqadag‘ shahri rasman ochilgani munosabati bilan ham Gurbanguli Berdimuhamedovni qutladi.\r\n\r\nTelefon muloqoti chog‘ida mamlakatlar o‘rtasida savdo, investitsiyalar, sanoat, energetika, qishloq xo‘jaligi va transport sohalarida ko‘p qirrali hamkorlikni yanada kengaytirish masalalari muhokama qilindi. Barcha darajalarda samarali muloqotlar, hududlararo va madaniy-gumanitar almashinuvlar faollashgani ta’kidlandi.\r\n\r\nMintaqaviy hamkorlikning dolzarb jihatlari ko‘rib chiqildi.', 'shavkat-mirziyoyev-gurbanguli-berdimuhamedov-bilan-telefon-orqali-muloqot-qild'),
(3, 'WP: Kiyevda MRB rahbariga qarshi hujumdan keyin Rossiyaga sulh taklif qilinishini aytishdi', 'Iyun oyida Ukrainaga maxfiy tashrifi chog‘ida MRB direktori Uilyam Byornsga Kiyev tomonidan ambitsiyali rejani taqdim etishgan: Rossiya tomonidan okkupatsiya qilingan hududlarni qaytarish va yil oxirigacha Moskva bilan o‘t ochishni to‘xtatish bo‘yicha muz', 'image_aa146cc0d5614891bdd38b444abcfcac.jpg', 4, '2023-07-03 00:00:00', '2023-07-03 10:16:34', 67, 1, 0, 1, 'Iyun oyida Ukrainaga maxfiy tashrifi chog‘ida MRB direktori Uilyam Byornsga Kiyev tomonidan ambitsiyali rejani taqdim etishgan: Rossiya tomonidan okkupatsiya qilingan hududlarni qaytarish va yil oxirigacha Moskva bilan o‘t ochishni to‘xtatish bo‘yicha muzokaralarni boshlash. Bu haqda Amerikaning Washington Post nashri anonim manbalariga asoslangan holda xabar tarqatdi.\r\n\r\nMarkaziy razvedka boshqarmasi direktori Uilyam Byorns iyun oyi oxirida Ukrainaga kelib, razvedkachi hamkasblari hamda prezident Volodimir Zelenskiy bilan uchrashgani to‘g‘risida boshqa nufuzli nashrlar ham shaxsi sir saqlanishini istagan manbalariga tayangan holda xabar bergandi.\r\n\r\nManbalar tashrif sanasini aniq keltirmagan, ammo bu Rossiyada Prigojinning 23 iyun kuni boshlangan isyoni arafasida ro‘y bergani qayd etilgan.\r\n\r\nMaqola chiqishi ortidan prezident Zelenskiy Ukraina faqat barcha hududlari ozod etilganidan keyingina Rossiya bilan muzokaralarga tayyor bo‘lishini aytdi. «Ukraina haqiqiy chegaralarimizga chiqqanimizdan keyingina u yoki bu formatdagi diplomatiyaga tayyor bo‘ladi. Xalqaro huquqqa muvofiq bo‘lgan haqiqiy chegaralarimizga», — deya Zelenskiydan iqtibos keltirgan «RBK-Ukraina».\r\n\r\n1 iyulgacha xabar qilinmagan Byornsning safari ukrain kuchlarining qarshi hujumi ketayotgan, ammo mamlakat rasmiylari aytishicha, hali g‘arb tomonidan tayyorlangan va qurollangan asosiy shturm brigadalari jangga tashlanmagan mahalga to‘g‘ri keldi.\r\n\r\nWP bilan gaplashgan mulozimlardan biriga ko‘ra, tashrifdan maqsad Bayden ma’muriyati Ukraina o‘zini himoya qilishi uchun bundan keyin ham razvedka ma’lumotlarini taqdim etishga «tayyorligini tasdiqlash» hisoblanadi.\r\n\r\nAvvalroq Bayden ma’muriyati Prigojinning niyati haqida iyun oyi o‘rtalaridan buyon xabardor bo‘lgani haqida razvedka ma’lumotini Ukraina tomoniga yetkazgandi. Ammo Washington Post manbasiga ko‘ra, Kiyevda Byorns bu mavzuni muhokama qilmagan.\r\n\r\nKiyev omma oldida o‘z qarshi hujumi past sur’atlarda ketayotgani tanqidga uchrayotganidan ranjiyotganini bildirsa-da, ukrain harbiy strateglari o‘zaro suhbatlarda Byorns va boshqalarga yaxshi kayfiyatda ekanliklarini bildirishadi, deya yozadi WP.\r\n\r\nGazeta ma’lumotlariga ko‘ra, Kiyev g‘arblik hamkasblariga bosib olingan hududlarning salmoqli qismini kuzgacha qaytarish; Rossiya tomonidan nazorat qilinayotgan Qrim chegarasiga artilleriya va raketa komplekslarini joylashtirish; Ukraina sharqida ilgarilash; keyin Moskva bilan muzokaralarni boshlash rejalari bilan o‘rtoqlashgan - bu o‘tgan yil mart oyida barbod bo‘lgan tinchlik muzokaralaridan keyingi birinchisi bo‘ladi. Bu haqda Washington Post nashriga reja bilan tanish bo‘lan uch manba xabar bergan.', 'wp-kiyevda-mrb-rahbariga-qarshi-hujumdan-keyin-rossiyaga-sulh-taklif-qilinishini-aytishdi'),
(4, 'Xorijda mehnat qilayotgan o‘zbekistonliklar haqiqiy qahramon - Shavkat Mirziyoyev', 'O‘zLiDePdan prezidentlikka nomzod Shavkat Mirziyoyev qashqadaryolik saylovchilar bilan uchrashuvda xorijdagi yurtdoshlarimizni qo‘llab-quvvatlashga oid rejalarni ma’lum qildi, deya xabar bermoqda Kun.uz muxbiri.', 'image_38bc81617e8e72d006e62c4c26bb37ad.jpg', 3, '2023-07-02 00:00:00', '2023-07-03 10:19:09', 40, 1, 0, 1, '“150 ming nafar yoshlarimiz xorijiy oliygohlarda ta’lim olmoqda. Bundan tashqari, 2 million atrofidagi yurtdoshlarimiz ro‘zg‘orini tebratish uchun, oilasi, ota-onasi va farzandlaridan uzoqda – xorijda mehnat qilmoqda. Albatta, musofir yurtda, turli qiyinchilik va mashaqqatlarga chidab, halol mehnat qilib, non topish oson emas.\r\n\r\nXorijda bunday sharoitda yashab kelayotgan odamlarimizni haqiqiy qahramon, desak, to‘g‘ri bo‘ladi. Chet ellarda tajriba va malaka orttirayotgan ana shunday vatandoshlarimizga rahmat aytishimiz kerak”, dedi nomzod.\r\n\r\nShavkat Mirziyoyev xorijdagi vatandoshlarni qo‘llab-quvvatlash choralarini ma’lum qildi.\r\n\r\n“Chet eldagi fuqarolarimiz huquq va manfaatlarini himoya qilish kafolatlarini yanada kuchaytiramiz. Xususan, og‘ir ahvolga tushib qolgan barcha yurtdoshlarimizga xorijiy davlatning o‘zida moddiy yordam imkoniyatlarini yanada kengaytiramiz. Jumladan, ularga vaqtincha yashash, hujjatlarini tiklash, ona Vataniga qaytish kabi xarajatlari to‘liq qoplab beriladi.\r\n\r\nTaqdir taqozosi bilan xorijda vafot etgan yurtdoshlarimizni o‘z yurtiga olib kelish davlat tomonidan ta’minlanadi. Ularning qaramog‘ida bo‘lgan oila a’zolariga alohida g‘amxo‘rlik qilinadi, farzandlarini o‘qitish va kasb-hunarga o‘rgatish bo‘yicha har tomonlama yordam ko‘rsatiladi.\r\n\r\nBundan tashqari, xorijda ishlayotgan odamlarimizning huquqlarini himoya qilish maqsadida, ularga advokat jalb etish xarajatlarini qoplash va huquqiy yordam berish tizimi yo‘lga qo‘yiladi”, dedi u.\r\n\r\nAQSh, Kanada, Buyuk Britaniya, Yaponiya va Yevropa davlatlaridan yuqori maosh to‘lanadigan ish topib ketayotgan yurtdoshlarimizga yo‘l chiptasi va “ishchi viza”ni olish xarajatlari to‘liq qoplab beriladi.\r\n\r\nBundan tashqari, chet eldagi yurtdoshlarimiz uchun:\r\n\r\nonlayn hujjat olish va boshqa davlat xizmatlarini ko‘rsatish imkoniyatlari yaratiladi, ularning narxlari ichki tariflarga tenglashtiriladi;\r\ndoimiy konsullik hisobida turish badali bekor qilinadi, hisobda turish shartlari soddalashadi;\r\nsog‘lig‘i va hayotini sug‘urtalash ko‘lami kengaytiriladi. Bunda, “ijtimoiy reyestr” va “3 ta daftar”larga kirgan shaxslarga sug‘urta xarajatlari uchun subsidiya beriladi;\r\nGermaniya, Yaponiya, Birlashgan Arab Amirliklari va boshqa davlatlarda, shuningdek, Rossiyaning yirik shaharlarida bepul huquqiy, moddiy va ijtimoiy yordam ko‘rsatadigan markazlar ochiladi (hozirda Rossiyaning Moskva shahrida hamda Koreya, Qozog‘iston va Turkiyada tashkil etilgan);\r\nxorijdagi yurtdoshlarimizning barcha masalalarini tezkorlik bilan hal qilish uchun elchixonalarimiz, Tashqi ishlar, Bandlik va Ichki ishlar vazirliklarida tun-u kun ishlaydigan “koll-markazlar” tashkil etiladi.\r\n“Umuman, xorijdagi vatandoshlarimiz bilan ishlash, chet elga ishlashga va o‘qishga ketgan odamlarimizni ijtimoiy, huquqiy va moddiy qo‘llab-quvvatlash tadbirlariga kelgusi yillarda 200 million dollar yo‘naltiriladi”, dedi nomzod.\r\n\r\nRejalarga muvofiq, kelgusi yetti yil ichida:\r\n\r\nxorijiy davlatlarda hunarmand va kulollar ko‘rgazmalari o‘tkaziladi, Navro‘z va Mustaqillik bayramlari keng nishonlanadi;\r\nvatandoshlarimiz uchun O‘zbekiston bo‘ylab, ayniqsa, Samarqand, Buxoro, Xiva va Shahrisabz shaharlariga maxsus sayohatlar hamda chegirmalar paketi ishlab chiqiladi.\r\nbu ishlarni samarali tashkil qilish uchun, “Vatandoshlar” jamoat fondiga 300 milliard so‘m ajratilib, ushbu jamoat fondining vakolatlari ham kengaytiriladi.\r\nShu bilan birga, O‘zbekistonda ishlash va tadbirkorlik faoliyati bilan shug‘ullanish istagidagi vatandoshlar uchun:\r\n\r\nkirish vizalari muddati 1 yildan 3 yilga uzaytiriladi, davlat bojlari 3 karra pasaytiriladi (hozirda – 250 dollargacha);\r\nO‘zbekistonda ishlashi uchun litsenziya talabi bekor qilinadi, barcha huquqlardan foydalanish imkoniyati yaratiladi;\r\nO‘zbekistonda doimiy yashash tartibi soddalashtiriladi;\r\nmamlakatimizda uy-joy va ko‘chmas mulk sotib olish, ta’lim, tibbiyot va boshqa davlat xizmatlaridan teng huquqlilik asosida foydalanish imkonini beradigan “Vatandosh guvohnomasi” joriy qilinadi.', 'xorijda-mehnat-qilayotgan-o-zbekistonliklar-haqiqiy-qahramon-shavkat-mirziyoyev'),
(5, 'Urganch shahrining sobiq hokimi 3 yilga ozodlikdan mahrum qilindi', 'Xorazm viloyatining Urganch shahri hokimi lavozimida ishlagan Shuhrat Abdullayev 3 yil muddatga ozodlikdan mahrum etildi. ', 'image_c6264b954f340e6dff993bf89b4ea2f9.jpg', 3, '2023-07-06 00:00:00', '2023-07-06 13:04:04', 6, 1, 1, 1, 'Oliy sud xabariga ko‘ra, 2023 yil 4 iyul kuni jinoyat ishlari bo‘yicha Xiva tuman sudida sudlanuvchi Sh.A.ga (1967 yilda Xorazm viloyatida tug‘ilgan, muqaddam sudlanmagan, 2018-2020 yillar mobaynida Urganch shahar hokimi lavozimida ishlagan) oid jinoyat ishini ko‘rib chiqish bo‘yicha ochiq sud jarayoni tugab, sud hukmi e’lon qilindi.\r\n\r\nE’lon qilingan sud hukmiga ko‘ra Sh.A. Jinoyat kodeksining 209-moddasi (mansab soxtakorligi) 2-qismi “a” bandi va 229-4-moddasi (yer berish tartibini buzish) 2-qismi “a”, “b” bandlarida nazarda tutilgan jinoyatlarni sodir etganlikda aybli deb topildi. \r\n\r\nUnga 2 yilga muayyan huquqdan, ya’ni davlat organi, davlat ishtirokidagi tashkilot va fuqarolarning o‘zini o‘zi boshqarish organlarida mansabdor va moddiy javobgar shaxs lavozimlarida ishlash huquqidan mahrum qilgan holda 3 yil muddatga ozodlikdan mahrum qilish jazosi tayinlandi. \r\n\r\nUshbu qarordan norozi taraflar qonunda belgilangan tartib va muddatda Xorazm viloyat sudining apellyatsiya instansiyasiga shikoyat berish va protest bildirishga haqliligi ma’lum qilingan.\r\n\r\nShuhrat Abdullayev muqaddam Xorazm viloyati hokimining sanoatni rivojlantirish, kapital qurilish, kommunikatsiyalar va kommunal xo‘jalik masalalari bo‘yicha o‘rinbosari bo‘lgan, 2018 yil oxirida Urganch shahri hokimi etib tayinlangandi.\r\n2020 yil dekabrida esa u lavozimidan ozod etilgandi, ammo u qo‘lga olingani haqida xabar berilmagandi.\r\n«Xorazm Beklari» ishi: Hokimlik tadbirkordan 5 milliard so‘mga yaqin qarzini nega to‘lamayapti? ', 'urganch-shahrining-sobiq-hokimi-3-yilga-ozodlikdan-mahrum-qilindi'),
(6, 'Xavfsiz va arzon – ikki ko‘hna shaharni bog‘lab turgan O‘zbekistonning so‘nggi trolleybuslari haqida reportaj', 'Urganch-Xiva-Urganch yo‘nalishidagi jamoat transportlari ichida eng arzon, eng qulay va eng xavfsizi bo‘lgan, mamlakatda saqlanib qolgan so‘nggi trolleybuslar faoliyatiga Kun.uz muxbiri nazar tashladi', 'image_6902f465d65cd48344b4110a7af07d8e.jpg', 3, '2022-07-06 00:00:00', '2023-07-06 13:11:50', 6, 1, 0, 1, 'ugun atrofimizdagi oddiy narsalar kelajakda biz uchun shirin xotira, yoqimli qo‘msash yoki achinishga sabab bo‘lishi hech gap emas. Bunga O‘zbekiston trolleybuslarini misol qilish mumkin. Xalq tilida “shoxli avtobus” nomi bilan atalgan bu transportlar kechagina hammamiz uchun shunchaki uzoqni yaqin qilish vositalaridan biri edi. O‘qish, ish, yumushga shoshilarkanmiz, trolleybuslarning “shoxlari” elektr simlaridan chiqib ketib, ko‘pchiligimizni kuttirib, xunob qilgan holatlar ham bo‘lgan, agar eslasangiz... \r\n\r\n\r\nFoto: Tashtrans.uz\r\n60 yildan ortiq muddatda respublikamizning o‘nlab shaharlarida xizmat qilgan bu transportlar haqida internet ma’lumotlari shu qadar ozki, qo‘msaganda ovunish chanqog‘i bosilmaydi kishining. Lekin bizda hali imkon bor ekan, O‘zbekiston trolleybuslarining so‘nggi avlodi va respublikada saqlanib qolgan ushbu yagona jamoat transporti haqida lavha tayyorlashga qaror qildik. \r\n\r\n\r\n\r\nEng arzon transport \r\n\r\nXorazm viloyatining Urganch shahridan tarixiy va sayyohlik shahri Xivaga bormoqchi bo‘lsangiz, transport tanlashda shoshilmang. Ikki shaharni bir-biriga bog‘lovchi “shoxli avtobus”lar sizni eng arzon narx bilan manzilingizga eltib qo‘yadi. Bu jamoat transportini nafaqat arzon, balki, sizning trolleybuslar bilan bog‘liq eng qimmatli xotiralaringizni esga soluvchi “vaqt mashinasi” ham deyish mumkin. \r\n\r\n\r\n\r\n1998 yilda Xiva shahrining 2500 yillik yubileyi munosabati bilan Urganch-Xiva yo‘nalishida yo‘lga qo‘yilgan trolleybuslar xizmati uchun yo‘lkira narxi atigi 3000 so‘m. Yo‘nalishdagi yaqinroq masofalar uchun esa 1000-2000 so‘m ham to‘lash mumkin. \r\n\r\n\r\n\r\nBu trolleybuslarda pul teruvchi xodimlar yo‘q. Yo‘lovchilarning o‘zlari tartib bilan haydovchiga yo‘l haqini topshirib, tushib ketaverishadi. Guvohi bo‘ldikki, arzon va xavfsiz bu transportdan  o‘quvchilar eng ko‘p foydalanar ekan.\r\n\r\n\r\n\r\nHaydovchining iltimosi\r\n\r\n“10 yildan beri trolleybus boshqarish bo‘yicha malakam bor, - deydi haydovchi Sardor Satipov, - Xivadan Urganchgacha bo‘lgan 37-38 km masofaga 50-55 daqiqada yetib boramiz. Trolleybuslarga xorijiy sayyohlar ham chiqishadi. Yo‘llarda tirbandliklar uchrab turadi. Haydovchilardan trolleybus yo‘llarini to‘sib qo‘ymasliklarini, avtomobillarini to‘xtash uchun maxsus belgilangan joylarga qo‘yishlarini iltimos qilib qolamiz”.\r\n\r\n\r\n\r\nHozirda harakatlanayotgan Shkoda 24Tr rusumli bu elektr avtobuslar 2013 yilda yo‘nalishga qo‘yilgan. Unga qadar esa 1998 yilda keltirilgan Shkoda 14Tr rusumli eski trolleybuslar harakatlangan.\r\n\r\n\r\nFoto: Tashtrans.uz\r\n\r\nFoto: Tashtrans.uz\r\nO‘zbekiston trolleybuslari tarixi\r\n\r\nMamlakatimizda ilk trolleybuslar 1947 yilda Toshkent shahri ko‘chalarida yura boshlagan. Dastlabki yo‘nalish transportlari poytaxtimizning temiryo‘l vokzali va Chorsu bozori o‘rtasida qatnagan. Yildan yilga Toshkent, Samarqand, Andijon, Farg‘ona, Namangan, Jizzax, Olmaliq, Nukus, Buxoro, Urganch va Xiva shaharlarida ham shu turdagi elektrotransportlar harakati yo‘lga qo‘yilgan.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nVa hatto 1999 yilda Vazirlar Mahkamasining tegishli qarori bilan 2005 yilgacha Qo‘qon, Qarshi, Navoiy, Termiz va Guliston shaharlarida ham trolleybuslar qatnovini yo‘lga qo‘yish reja qilingan. (Hujjat 2022 yilning iyul oyida o‘z kuchini yo‘qotgan.)\r\n\r\n\r\n\r\nLekin negadir bu rejalar amalga oshmay, qaytanga deyarli barcha shaharlarda “shoxdor avtobuslar”ning faoliyatiga nuqta qo‘yilgan. Xorazmnikidan tashqari mavjud shaharlardagi trolleybuslar 2011 yilga  kelib, harakatlanishdan butunlay to‘xtadi.\r\n\r\n\r\nFoto: Tashtrans.uz\r\nUlarning o‘rnini esa ayni paytda ommabop va yo‘lovchilar uchun noqulay bo‘lgan Damas avtomashinalari hamda Isuzu avtobuslari to‘ldirdi. Bu ulovlar ham qachondir tarixga aylanar, lekin trolleybuslardek qo‘msashni uyg‘ota olmasa kerak.\r\n\r\n“Trolleybus uchun bajonidil erta uyg‘onaman”\r\n\r\n“Hayotimda hech bir ishga tonggi soat 4 dan turmayman. Lekin trolleybus uchun bajonidil uyg‘onaman”, degan edi 2010 yilda bergan intervyusida trolleybus konduktorlaridan biri.\r\n\r\n\r\nFoto: Tashtrans.uz\r\nTrolleybus boshqaruvchisi esa: “Bizda doim shunday, avvaliga hamma narsani juda tez buzib tashlashadi. Va keyin vaqti kelganda, kimdir ertalab uyg‘onadi va savol beradi: “Trolleybus qayerga ketdi? Bor edi-ku?! Qani, darhol qaytaring!” Afsuslanarlisi esa u paytda biz haydovchilar bo‘lmaymiz”, degandi.\r\n\r\n\r\nFoto: Tashtrans.uz\r\nUmid yo‘q emas \r\n\r\nLekin Xorazmda trolleybuslar kelajagidan umid qilish mumkin. Buni quyidagi misollar bilan ifodalaymiz:\r\n\r\nUrganch shahri bo‘ylab yangi trolleybus halqa yo‘li quriladi. Bu haqda O‘zbekiston prezidenti Shavkat Mirziyoyev 2021 yilda xorazmlik saylovchilar bilan bo‘lib o‘tgan uchrashuvda ma’lum qilgan edi. \r\n\r\nTransport vazirligi Avtomobil va daryo transportini rivojlantirish departamenti boshlig‘i Ruslan Ro‘zmetovning o‘tgan yili Gazeta.uzʼga bergan intervyusiga ko‘ra, 1997 yilda Urganchda uzunligi 11 km bo‘lgan trolleybus halqa yo‘nalishi ishlab chiqilgan. Shuning 6 kilometriga kontakt tarmog‘i o‘rnatilgan.\r\n\r\n\r\nFoto: Mintrans.uz\r\n1997 yilda Urganch uchun loyiha doirasida yana ko‘plab trolleybuslarni bosqichma-bosqich xarid qilish rejalashtirilgan. Depo uchun joy kamida 60 ta avtomashinani saqlash va ularga texnik xizmat ko‘rsatishni hisobga olgan holda ajratilgan. Sotib olingan 9 ta trolleybus esa viloyatda to‘xtab qolgan loyihaning birinchi bosqichi bo‘lgan xolos.\r\n\r\nNima bo‘lganda ham, bugungi kunimiz ertaga tarixga aylanishi bor. Shunday ekan, Xorazmga kelsangiz, esdalik va xotirada qolishi uchun, albatta, O‘zbekistondagi yagona trolleybuslar xizmatidan foydalaning.\r\n\r\n\r\nFoto: Tashtrans.uz', 'xavfsiz-va-arzon-ikki-ko-hna-shaharni-bog-lab-turgan-o-zbekistonning-so-nggi-trolleybuslari-haqida-reportaj'),
(7, 'Qullikdan bosh vazirlikkacha. Buxoro amirligining kelib chiqishi qul bo‘lgan qushbegilari', 'Dunyo tarixida eng past tabaqa bo‘lmish qullikdan eng yuqori daraja - hukmdorlikkacha ko‘tarilgan shaxslar uchrab turadi. Shu bilan birga, hukmdor bo‘lmasa-da, ikkinchi darajali shaxs - bosh vazir lavozimini egallagan qullar ham anchagina', 'image_8555a1d1b58371344f8ac7e6f1a64931.jpg', 1, '2023-07-06 00:00:00', '2023-07-06 13:22:34', 37, 1, 1, 1, 'Muhammad Davlat qushbegi\r\n\r\n1756 yil Buxoro xonligida rasman mang‘itlar sulolasi hukmronligi boshlanadi. Mang‘itlar Chingizxon avlodi bo‘lmagani bois, o‘zlarini «xon» emas «amir» deb ataydi va Buxoro xonligi Buxoro amirligiga aylanadi.\r\n\r\nShu yili mang‘itlar sulolasi hukmronligiga tamal toshi qo‘ygan Muhammad Hakimbiyning qullaridan biri, asli xurosonlik fors, turkmanlar tomonidan qul qilinib, Buxoroga olib kelib sotilgan Muhammad Davlat Buxoro hukmdori Rahimbiy buyrug‘i bilan Buxoro qushbegisi etib tayinlanadi. Qushbegi (parvonachi) — Buxoro amirligida bosh vazirga teng lavozim bo‘lib, u mamlakatda amirdan keyingi ikkinchi darajali shaxs edi. Amir harbiy yurishga yoki safarga ketgan paytlarda davlatni qushbegi boshqargan va u amir bilan birga Ark qo‘rg‘onida yashagan. Buxoroning ko‘plab qushbegilari ta’sir doirasi va boylik borasida bemalol amirlar bilan bellasha olgan.\r\n\r\nAsli xurosonlik qul bo‘lgan Muhammad Davlatning qushbegilik lavozimigacha bosgan yo‘li haqida ma’lumotlar ko‘p emas. Tarixchi va olim Ahmad Donishning «Mang‘itlar tarixi» asarida Muhammad Davlat amir Rahimbiy vafotidan so‘ng taxtga kelgan Doniyolbiy otaliq hukmronligi davrida juda ulkan hokimiyatga ega bo‘lgani, butun vazirlik ishlarini o‘z qo‘liga olgani aytiladi. Ahmad Donish Muhammad Davlatga «axloqan buzuq va shafqatsiz qotil» deya ta’rif bergan.\r\n\r\nYakunda Buxoroning qullikdan qushbegilikka ko‘tarilgan ilk bosh vaziri amir Doniyolbiyning o‘g‘li amir Shohmurod buyrug‘i bilan qatl etiladi. Amir Shohmurod qushbegini lavozimidan o‘z manfaatlari yo‘lida foydalanish va tanish-bilishchilikni kuchaytirishda ayblagan.\r\n\r\nMuhammad Davlat 1756 yildan 1785 yilgacha, deyarli o‘ttiz yil davomida Buxoro amirligi qushbegisi lavozimida ishlagan.\r\n\r\nMuhammad Yoqub\r\n\r\nMuhammad Davlatdan farqli o‘laroq, Muhammad Yoqub qushbegi Buxoro amirligi tarixida ancha muhim rol o‘ynagan. U Rossiyaning Buxoro amirligiga yurishi davrida (1866-1868 yillar) Buxoro qushbegisi va amirlik qo‘shinlari bosh qo‘mondoni edi.\r\n\r\nMuhammad Yoqub ham xurosonlik qullardan bo‘lgan. U amir Nasrullo davrida Karmanada yashagan shahzoda Muzaffarga yaqinlashgan hamda 1860 yil amir Muzaffar taxtga o‘tirishi bilan qushbegi lavozimini egallagan. Chunki Muzaffar otasining barcha amaldorlarini qatl qilgan yoki quvg‘in qilgandi.\r\n\r\nMuhammad Yoqub ham barcha qullar qatori fan bilimlariga ega bo‘lmagan va davlat ishlarini o‘z manfaati bo‘yicha yuritgan. Keyinroq aynan uning rahbarligida Buxoro qo‘shinlari Jizzax, Samarqand va Zirabuloq janglarida rus qo‘shinlariga mag‘lub bo‘lgan.\r\n\r\nAhmad Donish ushbu bosh vazirga ta’rif berib, «bu umri davomida miltiq ovozini eshitmagan, jang maydonini ham ko‘rmagan odam edi; shuning uchun islom lashkarining eng kichik navkari ham u qo‘shinga boshliq etib tayinlanganidan uyalgandi» deb yozadi.\r\n\r\nUmuman olganda, amir Muzaffardek qat’iyatsiz, davlat ishlariga beparvo amir davrida bilimsiz va noloyiq odam qushbegi lavozimini egallashi ajablanarli ish emas edi. Muhammad Yoqubning amirga ta’siri juda katta bo‘lgan. Qushbegi davlat ishlarini yuritish va harbiy soha ustidan qattiq nazorat o‘rnatgan va bir qancha yurishlar uyushtirgan.\r\n\r\nMuhammad Yoqub 1860-1870-yillarda bosh vazir lavozimini egallab turadi, keyinroq G‘uzor beki qilib tayinlanadi.\r\n\r\n\r\n\r\nMulla Muhammadbiy\r\n\r\nMulla Muhammadbiy ham amir Muzaffarning qullaridan biri edi. U ham Xurosonda tug‘ilgan, turkmanlar bosqini paytida asir olinib, Buxoroga olib kelib sotilgan. Yosh fors qulni Buxoroning o‘sha vaqtdagi mang‘it urug‘idan bo‘lgan qushbegisi Muhammad Hakimbiy sotib oladi.\r\n\r\nMuhammad Hakimbiy amir Nasrulloning eng ishongan odamlaridan bo‘lgan. Mulla Muhammadbiy qushbegi xonadonida ancha-muncha saroy o‘yinlarini o‘rganadi. Hakimbiy amir buyrug‘i bilan qatl etilgach, uning barcha mol-mulki va qullari shahzoda Muzaffar ixtiyoriga beriladi. Shu tariqa, Buxoroning navbatdagi qul qushbegisi ham, zamondoshlari tomonidan taxtga noloyiq deb hisoblangan Muzaffar huzuriga yo‘l oladi. U yerda u bo‘lajak amir bilan yaqinlashadi, chunki otasining irodasi bilan Karmana hokimi qilib tayinlangan Muzaffar o‘z atrofiga asosan past tabaqadan chiqqanlarni yig‘gandi.\r\n\r\n\r\nMulla Muhammadbiy\r\nAmir Muzaffar taxtga o‘tirgach, Muhammadbiy birin-ketin mirshab, mirob, sarkarda lavozimlarini egallaydi va sarkarda sifatida qushbegi Muhammad Yoqub singari Buxoro amirligi va Rossiya imperiyasi o‘rtasidagi barcha janglarda qatnashadi.\r\n\r\nBuxoro amirligi tarixi haqida qimmatli ma’lumotlar qoldirgan Ahmad Donish Muhammadiy shaxsiyatiga ham to‘xtalgan: «Buxoroni boshqarish Muhammadshoh qushbegi qo‘lida edi. U loqayd, bilimsiz va go‘l odam edi. Shu bilan birga, u doim kasal bo‘lib, hatto eng kichik narsaga — podishohga haqiqatni aytishga ham jur’at etmasdi. Uning davrida askarlar va kambag‘allar halovatini yo‘qotdi. Davlatning umumiy qulashi va tanazzuliga aniq bir sabab bo‘lsa — bu sabab Muhammadshoh qushbegidir».\r\n\r\nMuhammadbiy qushbegi amir Abdulahad davrida ham o‘z mansabini yo‘qotmaydi. U to o‘limiga qadar Buxoro oliy qushbegisi lavozimida qoladi. 1889 yil Muhammadbiy vafot etgach, uning o‘rnini nabirasi Ostonaqulbiy egallaydi.\r\n\r\n\r\nMulla Muhammadbiy va avlodlari - Mulla Muhammadbiy, Muhammad Sharif va Ostonaqulbiy\r\n1870-1889-yillarda Buxoro qushbegisi bo‘lgan Muhammadbiy katta ta’sir va kuchga ega sulolaga asos soladi. Muhammadbiyning o‘g‘li Muhammad Sharif amirlikda qushbegiyi poyon, ya’ni kichik qushbegi — bosh zakotchi lavozimini egallagan. Muhammad Sharifning o‘g‘illari: Ostonaqulbiy qushbegiyi bolo (oliy qushbegi), Haydarqulbek Chorjo‘y beki va xazinachi mansabini egallagan.\r\n\r\nOstonaqulbiy qushbegi\r\n\r\n\r\nOstonaqulbiy qushbegi (parvonachi)\r\nOstonaqulbiy yoshligidan bobosi Muhammadbiy homiyligi ostida Qarshi va Chorjo‘y bekligi rahbari etib tayinlangan. Otasi Muhammad Sharif xizmat vazifasini bajarish paytida halok bo‘lgach, bobosi Ostonaqulbiyni otasining o‘rniga zakotchi lavozimiga o‘tqazadi. Otasining o‘limidan bir yil o‘tib, bobosi ham vafot etgach, Ostonaqulbiy bobosi Muhammadbiy o‘rniga Buxoro amirligi qushbegisi lavozimiga o‘tiradi.\r\n\r\nOstonaqulbiy davlat ishlariga ancha e’tiborsiz amir Abdulahad davrida katta qudratga erishadi. U bir vaqtda ham qushbegiyi bolo, ham qushbegiyi poyon lavozimlarini egallaydi. Amirlik iqtisodiyotini tiklashga harakat qiladi. Ostonaqulbiy amirning Rossiyaga safarlarida unga hamrohlik qilgan va Rossiya imperiyasi ordenlari bilan taqdirlangan.\r\n\r\n\r\nBuxoro amiri Abdulahad Rossiya imperatori Nikolay IIning toj kiyish marosimida. 1896 yil. Amirga o‘g‘li Sayid Olimxon va qushbegi Ostonaqulbiy (chapdan birinchi) hamrohlik qilgan.\r\nAmmo Ostonaqulbiyning birgina jiddiy xatosi uning karerasi va islohotlariga yakun yasaydi. Kelib chiqishi xurosonlik qullarga mansub bo‘lgan Ostonaqulbiy shia mazhabiga e’tiqod qilardi va Buxoro qo‘shinidagi yuqori sarkardalik lavozimlariga o‘z mazhabdoshlarini tayinlagandi.\r\n\r\n1910 yil yanvar oyida Ostonaqulbiy Buxoro shahrining shia aholisiga Ashuro bayramini faqatgina eronliklar yashovchi kvartallarda emas, butun shahar bo‘ylab nishonlashga ruxsat beradi. Bunga qadar shaharning yahudiy, shia va boshqa aholisi diniy bayramlarni o‘z kvartallarida nishonlagan va hech qanday muammo kelib chiqmagan.\r\n\r\nBiroq bu safar shialar Ashuro bayramini butun shaharda nishonlashi davomida sunniylar bilan nizo kelib chiqadi va to‘qnashuvlar yuz beradi. Shialar uch nafar sunniyni qo‘lga oladi. Sunniy aholi vakillari Ark oldiga borib, amirdan qonunbuzarlarni jazolashni, asirga olingan uch sunniyni ozod qilish so‘raydi. Ammo amir Abdulahad bu paytda Buxoroda emas, Karmanada edi va mamlakatni qushbegi Ostonaqulbiy boshqarayotgandi. U sunniylarni Ark oldidan haydab yuboradi va bu bilan vaziyatni yanada jiddiylashtiradi. Ostonaqulbiyning Buxoro Registonida to‘plangan sunniylarni kuch bilan tarqatishga urinishi vaziyat nazoratdan chiqib ketishiga olib keladi. Sunniylar yo‘lida uchragan shialarni o‘ldirib keta boshlaydi. Qirg‘in uch kun davom etadi.\r\n\r\nBuxoro rahbariyati zudlik bilan ruslardan yordam so‘raydi. Tartibsizlik haqidagi xabar Peterburggacha yetib boradi va Buxoroga maxsus delegatsiya yuboriladi. Ruslar qurol yordamida tartibsizliklarni bostiradi. Amir Abdulahad Buxoroga borishga jur’at etmaydi va o‘rniga valiahdi Sayid Olimxonni yuboradi. Sayid Olimxon va Buxoro arkoni davlati sunniylar vakillari bilan uchrashadi hamda ularning so‘rovi bilan Ostonaqulbiy va boshqa shia rahbarlarni lavozimidan ozod qiladi.\r\n\r\nShu tariqa, Ostonaqulbiy mansabidan ayriladi va Ziyovuddin bekligi beki qilib yuboriladi. Keyinroq Amir Olimxon buyrug‘i bilan Karmanaga olib kelinib, qamoqqa tashlanadi. Shu bilan Buxoro amirligida Muhammad Yoqubdan boshlangan, asli kelib chiqishi asli qul bo‘lgan qushbegilar sulolasi davri (1860-1910) o‘z nihoyasiga yetadi. Biroq Ostonaqulbiyning karerasi bu bilan tugab qolmaydi.\r\n\r\nOstonaqulbiyni zamondoshlari, xususan Ahmad Donish va Fitrat ancha iliq ta’riflagan. Xususan, Fitrat u haqda «Ostonaqul qushbegi vazirlar rahbari lavozimida bo‘lganida juda ko‘p foydali ishlarni amalga oshirdi. Masalan, u bolalarning hayosiz o‘yinlarini, mast yig‘ilishlarni va aholining bunday keraksiz sevimli mashg‘ulotlarini qat’iyan taqiqladi, davlat rivojlanishi va taraqqiyoti haqida qayg‘urdi, bozorlardagi yuqori narx sabablarini aniqladi, don narxi pasayishi va mo‘l-ko‘lligi, bozorlardagi narxlar pasayishiga doimiy ravishda e’tibor qildi. Ammo uning harakatlari Buxoro shahri raisi bo‘lmish mullo Burhoniddinga yoqmadi», deya fikr bildirgan.\r\n\r\nAynan mana shu ijobiy ishlari sabab, amirlik qulaganidan so‘ng Ostonaqulbiy Buxoroga qaytadi va Fayzulla Xo‘jayev rahbarligidagi Buxoro xalq sovet respublikasi hukumatida Vaqf ishlari boshqarmasi raisi etib tayinlanadi.\r\n\r\n889-1910 yillarda Buxoro amirligi qushbegisi bo‘lib qolgan Ostonaqulbiy 1923 yilda vafot etadi.\r\n\r\nShu tariqa, umumiy hisobda, mang‘itlar sulolasi hukmronligining deyarli teng yarmi davomida Buxoro amirligini asli qul bo‘lgan qushbegilar boshqargandi.', 'qullikdan-bosh-vazirlikkacha-buxoro-amirligining-kelib-chiqishi-qul-bo-lgan-qushbegilari'),
(8, 'Samarqand tuman Axborot-kutubxona markazi xodimlari 8-yanvar Prokurotura xodimlari kuni munosabati bilan Samarqand tuman Prokurotura xodimlariga yangi kelgan adabiyotlar targ\'ibot qilindi.', 'Smartfon 4/6 GB tezkor va 64/128 GB doimiy xotiraga ega. U Android 11 operatsion tizimida ishlaydi.', '', 1, '2023-07-14 00:00:00', '2023-07-07 15:13:34', 3, 1, 0, 1, 'Smartfon 4/6 GB tezkor va 64/128 GB doimiy xotiraga ega. U Android 11 operatsion tizimida ishlaydi.', 'samarqand-tuman-axborot-kutubxona-markazi-xodimlari-8-yanvar-prokurotura-xodimlari-kuni-munosabati-bilan-samarqand-tuman-prokurotura-xodimlariga-yangi-kelgan-adabiyotlar-targ-ibot-qilindi'),
(12, 'Kamron', 'Kamron', 'image_5d6feb745e651ad6e8a24d3a6dc757dc.jpg', 4, '2023-07-10 00:00:00', '2023-07-10 18:25:25', 6, 1, 1, 1, 'Kamro', 'kamron');

-- --------------------------------------------------------

--
-- Структура таблицы `social`
--

CREATE TABLE `social` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `social`
--

INSERT INTO `social` (`id`, `name`, `icon`, `link`, `status`) VALUES
(1, 'Facebook', 'icofont-facebook', 'https://www.facebook.com/profile.php?id=100072776443123', 1),
(2, 'Twitter', 'icofont-twitter', '/', 1),
(3, 'Instagram', 'icofont-instagram', 'https://www.instagram.com/bek_akhmadov01/', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `social`
--
ALTER TABLE `social`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

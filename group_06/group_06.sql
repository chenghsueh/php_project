-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 06 月 19 日 09:02
-- 伺服器版本: 10.1.30-MariaDB
-- PHP 版本： 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `group_06`
--
CREATE DATABASE IF NOT EXISTS `group_06` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `group_06`;

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `no` int(11) NOT NULL,
  `name` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `category`
--

INSERT INTO `category` (`no`, `name`) VALUES
(1, '流行衣物'),
(2, '彩妝'),
(3, '飾品'),
(4, '配件'),
(5, '保養');

-- --------------------------------------------------------

--
-- 資料表結構 `color`
--

CREATE TABLE `color` (
  `no` int(11) NOT NULL,
  `color` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `color`
--

INSERT INTO `color` (`no`, `color`) VALUES
(1, '米色'),
(1, '粉色'),
(1, '藍色'),
(2, '白色'),
(2, '粉色'),
(2, '藍色'),
(2, '黑色'),
(3, '墨綠色'),
(3, '白色'),
(3, '黑色'),
(4, '水藍色'),
(4, '深藍色'),
(4, '磚紅色'),
(4, '粉紅色'),
(4, '粉綠色'),
(5, '卡其色'),
(5, '藍色'),
(6, '黃色'),
(6, '黑色'),
(7, '卡其色'),
(7, '黑色'),
(8, '水藍色'),
(8, '粉色'),
(8, '藍色'),
(8, '黑色'),
(9, '綠色'),
(9, '藍色'),
(9, '黑色'),
(11, '藍色'),
(11, '黑色'),
(12, '黑色'),
(13, '黑色'),
(14, '灰色'),
(14, '白色'),
(14, '黑色'),
(15, '黑色'),
(16, '黑色'),
(17, '黑色'),
(18, '黑色'),
(19, '黑色'),
(20, '黑色'),
(21, '黑色'),
(22, '黑色'),
(23, '黑色'),
(24, '黑色'),
(25, '黑色'),
(26, '黑色'),
(27, '黑色'),
(28, '黑色'),
(29, '黑色'),
(30, '黑色'),
(31, '黑色'),
(32, '黑色'),
(33, '黑色'),
(34, '黑色'),
(35, '黑色'),
(36, '黑色'),
(37, '黑色'),
(38, '黑色'),
(39, '黑色'),
(40, '黑色'),
(41, '黑色'),
(42, '黑色'),
(43, '黑色'),
(44, '黑色'),
(45, '黑色'),
(46, '黑色'),
(47, '黑色'),
(48, '黑色'),
(49, '黑色'),
(50, '黑色'),
(51, '黑色'),
(52, '黑色'),
(53, '黑色'),
(54, '黑色'),
(55, '黑色'),
(56, '黑色'),
(57, '黑色'),
(58, '黑色'),
(59, '黑色'),
(60, '黑色'),
(61, '粉紅色'),
(61, '黑色'),
(62, '粉紅色'),
(62, '黑色'),
(63, '粉紅色'),
(63, '黑色');

-- --------------------------------------------------------

--
-- 資料表結構 `commodity`
--

CREATE TABLE `commodity` (
  `no` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `information` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `up_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `commodity`
--

INSERT INTO `commodity` (`no`, `name`, `price`, `information`, `amount`, `category`, `up_time`) VALUES
(1, 'V領蕾絲邊細坑條上衣', 133, '質感細坑條V領蕾絲邊上衣\r\n產地：台灣製 \r\n材質：96%聚酯纖維 、4%彈性纖維 \r\n深淺色請分開洗滌。 \r\n質感細坑條V領蕾絲邊上衣，展現韓系知性風格拼接蕾絲設計，輕鬆穿出自然率性的好品味簡單搭配，立即就能散發迷人風采喔', 10, 1, 1528681473),
(2, 'V領竹節棉條紋上衣', 168, 'V領竹節棉條紋上衣，展現簡約休閒Style\r\n經典不敗條紋款，輕鬆創造自然率性好品味\r\n運用含棉成分高的竹節棉材質，好穿舒適自在', 30, 1, 1528681373),
(3, '花邊造型袖針織上衣', 133, '花邊造型袖針織上衣，絕美展現自信與魅力\r\n喇叭袖設計，勾勒出慵懶女人的愜意優雅\r\n本季必備的針織單品，輕鬆穿出簡約的日系美感', 9, 1, 1528681474),
(4, '純色休閒剪裁水洗棉上衣', 188, '純色休閒剪裁水洗棉上衣，打造率性休閒風格\r\n寬鬆剪裁設計，可修飾身形讓穿著更舒適\r\n簡單穿搭，即可輕鬆出門旅行!', 6, 1, 1528581473),
(5, '簡約抽繩長褲', 299, '簡約百搭西裝抽繩長褲，穿出休閒自在魅力個性\r\n抽繩鬆緊腰+側邊雙口袋設計，方便又實用\r\n只要簡單搭配，立即散發迷人風采\r\n後面為假口袋設計', 6, 2, 1527681473),
(6, '抗UV吸排時尚配色外套', 299, '時尚配色吸排抗UV外套，豔陽、騎車、運動必備款！\r\n\r\n指洞設計，達到手部防曬效果\r\n\r\n網狀透氣質料，是喜愛運動的你的最佳選擇', 36, 4, 1528681473),
(7, '棉麻抽繩長褲', 299, '棉麻抽繩長褲，穿出休閒自在感\r\n抽繩鬆緊腰，讓穿著不緊繃\r\n前後真口袋設計，方便又實用!', 7, 2, 1528681473),
(8, '配色邊條棉質短褲', 188, '配色邊條修身棉質短褲，穿出休閒率性look\r\n抽繩鬆緊腰圍設計，穿起來輕鬆舒適\r\n慢跑、休閒活動，不能錯過必備款', 10, 2, 1528691473),
(9, '輕便舒適短褲', 168, '輕便舒適短褲，展現休閒率性look！\r\n\r\n彈性鬆緊腰，穿起來輕鬆舒適\r\n\r\n兩側口袋設計，方便放置小物喔', 11, 2, 1528681473),
(10, '浪漫飄逸雪紡長裙 ', 299, '浪漫飄逸雪紡長裙，展現唯美飄逸感\r\n絲滑內裡+雪紡材質長裙，搭配各種風格都到位\r\n寬版彈性鬆緊裙頭，穿脫更方便喔', 7, 3, 1528685473),
(11, '滿版蕾絲雕花鬆緊綁帶短褲裙', 469, '細緻滿版的蕾絲雕花設計，\r\n\r\n\r\n營造優雅迷人的設計感~\r\n\r\n\r\n全鬆緊腰頭搭配領節綁帶，\r\n\r\n\r\n使穿脫方便且造型加分!', 22, 3, 1528781473),
(12, '質感魚尾裙 ', 249, '質感魚尾裙，穿出俏麗的中長度風範\r\n\r\n後鬆緊腰頭，穿脫更方便\r\n\r\n下擺魚尾造型，打造獨特時尚新風尚\r\n\r\n此款附內裡唷', 19, 3, 1528681473),
(13, '鬆緊純色質感打褶設計褲裙 ', 439, '質感的純色面料，穿起來不僅優雅又能飄逸動人~\r\n\r\n\r\n利用褲裙的設計讓妳展現自信時也不用擔心曝光問題哦!', 33, 3, 1528681473),
(14, '針織側開衩長版外套', 299, '針織側開衩長版外套，絕美展現自信與魅力\r\n修身長版針織面料，穿脫方便又能拉長身型穿出顯瘦感喔!\r\n微涼季節必備單品，勾勒出慵懶女人的愜意優雅', 40, 4, 1528681473),
(15, '圖騰刺繡下擺拼接魚尾裙擺長洋裝', 599, '馬卡龍的底色搭配圖騰刺繡，\r\n\r\n打造法式迷人的民族風情~\r\n\r\n附的綁帶可以自由調整綁法，\r\n\r\n增添微甜的設計感且注目感加分~', 7, 3, 1528681473),
(16, '浪漫碎花圖案V領口雪紡長洋裝', 529, '滿版浪漫的碎花圖案，增添女孩迷人的甜美風格!\r\n\r\n\r\n質感輕柔的雪紡面料，穿出唯美的飄逸美感唷~', 14, 3, 1538681473),
(17, '【NIKE 耐吉】Air Jordan 14代 BG', 4280, '【NIKE 耐吉】Air Jordan 14代 BG 女鞋 休閒鞋 麂皮 喬丹 復刻 大童 米白 黑(487524-021)', 32, 6, 1528681473),
(19, '【NEW BALANCE】慢跑鞋', 2099, '【NEW BALANCE】慢跑鞋 590 運動 跑鞋 男鞋 女鞋 紐巴倫 低筒 跑步 輕量 藍色 粉紅色(M590RB5D W590RN5B)', 21, 5, 1528681473),
(20, '【NIKE 耐吉訓練鞋Flex Trainer 7', 1699, '【NIKE 耐吉】訓練鞋 Flex Trainer 7 女鞋 跑步 運動 慢跑 健身 輕量 透氣(898479001 898479104)', 24, 5, 1528681473),
(21, 'Double Wear粉持久完美持妝粉底SPF10/PA++', 1990, '獨特完美膚控持妝科技能將清爽透氣的超微柔焦隱型粉體精準作用於肌膚，有效遮瑕又能讓肌膚呼吸不感黏膩，不堵塞毛孔的升級控油成分，同時添加高效濕潤因子，直接從空氣中吸收水分補充保持肌膚自然水分平衡，妝效更加完美均勻、無懈可擊。', 47, 7, 1528681473),
(22, 'Futurist Aqua Brilliance粉底精華', 1850, '獨特科技水膜力長效保濕配方開啟肌膚長效蓄水保濕力；內含高單位玻尿酸、形成肌膚保濕防禦層的主成分，能充分營造肌膚水分循環環境，將保濕因子完全鎖在肌膚內，在卸妝後依然能持續保濕。針對肌膚缺水部位、深度滲透，精準為缺水肌膚補充水分。', 32, 7, 1528681473),
(23, 'Perfecting Loose Powder超完美光透亮輕蜜粉', 1500, '共有2種萬用色號，是一款羽般輕盈的柔焦蜜粉，質地絲滑的粉體能瞬間擴散光線遮蓋瑕疵，立即柔焦美化膚質，不著痕跡平滑肌膚、霧化掃除毛孔，同時讓膚色變均勻，展現完美氣色。', 12, 8, 1528681873),
(24, 'Pure Color Envy絕對慾望奢華訂製單色眼影', 1200, '這款單色眼影極具誘惑力的變幻色彩，從最輕柔之裸色到最搶眼的色調共15色讓妳自由搭配，滿足妳每個完美時刻的重要眼妝! 全新絕色光感顯色科技配方，展現高彩度飽和色彩，只要輕鬆刷過，即能讓眼妝煥然一新，無論乾擦、濕擦或是疊色，都能創造出立體多變的層次效果，展現迷人多變的神情。', 4, 9, 1528681173),
(25, 'Pure Color Envy絕對慾望奢華訂製眼影', 2000, '擁有新一代絕色光感顯色科技，以創新多重切面精緻工法立體化每一個色料，使其綻放多面向光澤，360度服貼雕塑眼型，增加眼妝終極立體感。除了豐富且搭配簡易的色彩，更一舉囊括截然不同質地：時尚柔霧 、細膩絲光 、明亮珠光、璀璨金屬光，可乾擦打造柔滑高貴妝感，亦能濕擦打造高階時尚的強烈風格', 4, 9, 1528684473),
(26, 'Double Wear 粉持久超級防水眼線筆', 950, '極色美豔結合長效持久，色澤豐富、濃烈飽滿的眼線筆，在眼皮上輕鬆滑動，不會拉扯皮膚或斷斷續續留下空隙，適合勾勒眼型、強調雙眼，打造長效持久的夢幻妝效。防水、抗暈、不沾染，運動時也能美麗有型。 上妝技巧：運用內建削筆刀打造精準自然的線條，可在眼線定型前用矽膠頭暈開眼線，打造更撩人的煙燻妝效。格', 4, 10, 1528681473),
(27, 'Double Wear無瑕妍彩持久眼線液', 950, '運用高科技技術製造的超細緻毛氈筆頭，能以極細緻卻極簡單的方式將眼妝輕易帶上雙眸，顏色快乾不暈染，提供長效妝容，而且色澤持久不變，無論是在高溫或濕熱的環境下，都能隨時確保眼妝乾淨服貼，也不暈染或掉色', 19, 10, 1528681473),
(28, 'Pure Color Love玩色戀愛唇膏', 900, '極致潤澤保濕: 內含3種純天然精萃油的潤澤-紅石榴、芒果、巴西莓，能長效保濕並在表面形成保護膜，讓唇面保持全天候滑嫩滋潤 - 盡情混搭玩色: 唇妝快時尚，就是要混搭，全系列精選玩色必備25色，擁有業界最完整的4大唇膏質地-絲絨霧感、柔緞乳霜、晶瑩珠光、酷炫金屬，一抹隨想變身，混搭無限可能 - 特殊子彈方頭: 時尚混色必備設計，大面積塗抹疊擦，或是方形子彈尖頭點綴玩漸層，讓妳唇妝混搭、疊擦、拼接無極限', 19, 11, 1528681473),
(29, 'Pure Color Envy絕對慾望柔霧唇膏', 1200, '極致顯色，一筆完美：獨家超細緻顯色科技能完美遮蓋唇色，一筆即能無色差顯色、綻現濃郁色澤。 潤澤質地，一抹滋潤：潤澤質地，接觸唇瓣瞬間，立即釋放玻尿酸等保養成分滋潤雙唇，告別傳統霧面唇膏易乾燥、顯唇紋等困擾。 輕盈上色，持久舒適：高效持色因子能完美服貼唇部，使唇色均勻、更長時間不掉色。', 13, 11, 1528689473),
(32, '斜切圓寬版頸鍊', 350, '商品特性參考\r\n\r\n長短/ 短\r\n粗細/ 粗\r\n材質/ 麂皮繩.合金\r\n', 7, 12, 1528681473),
(33, '\r\n水滴波紋頸鍊', 320, '商品特性參考\r\n\r\n\r\n長短/ 短\r\n\r\n粗細/ 粗', 7, 12, 1528681473),
(34, 'Diamond Box．鎖骨鍊', 400, '商品材質/特性\r\n■ 精鍍白K/K金\r\n■ 施華洛水鑽', 10, 13, 1528681423),
(35, '｜純銀｜時空的轉變．鎖骨鍊', 780, '商品材質/特性\r\n■ 全純銀', 5, 13, 1528681503),
(36, '擺盪心扉．耳環/耳夾', 330, '商品材質/特性\r\n■ 混色電鍍效果色澤比例隨機', 6, 14, 1528681473),
(37, '甜夢空間．耳環/耳夾', 300, '商品材質/特性\r\n■ 奧地利水鑽', 41, 14, 1528688473),
(39, '地心冒險．耳環/耳夾', 330, 'SIZE \r\n* 約 : 4 x 2 cm', 10, 15, 1528681473),
(40, '雙面女郎 單支．耳夾', 150, 'SIZE \r\n* 珍珠約 : 1 x 1 cm\r\n* 鑽約 : 0.6 x 0.6 cm', 30, 15, 1528681473),
(41, '波西米亞幾何多彩編織彈性髮帶', 169, '韓國飾品髮飾  很有味道的一款\r\n\r\n幾何的感覺顏色多彩\r\n\r\n有點寬度不會太細不傷髮\r\n\r\n 展現異國度假FU!!  ', 10, 16, 1528701473),
(42, '韓版時尚小清田園碎花髮帶無卡其色', 129, '89zone 韓版時尚小清田園碎花髮帶無卡其色', 30, 16, 1528687473),
(43, '髮圈-亮片貓咪珍珠', 100, '髮圈-亮片貓咪珍珠', 10, 17, 1528681473),
(44, '髮圈-水鑽珍珠愛心x圓扭釦', 100, '髮圈-水鑽珍珠愛心x圓扭釦', 10, 17, 1528681473),
(45, '[正韓] STACCATO都會風格手錶', 569, '商品皆為實際拍攝\r\n商品材質：合金 / 米蘭錶帶\r\n手錶總長SIZE約：約 23.7 cm\r\n錶帶寬SIZE約：1.6 cm\r\n錶面SIZE長寬約：3.3 cm\r\n機芯：Made In Japan\r\n韓國設計 / 中國組裝', 10, 18, 1528691473),
(46, 'STACCATO青春時光手錶', 723, '● 商品皆為實際拍攝\r\n\r\n● 商品材質：合金  / 人工皮革\r\n● 手錶總長SIZE約：22.7 cm\r\n● 錶帶寬SIZE約：1.6 cm\r\n● 錶面SIZE直徑約：3.3 cm\r\n● 機芯：Made in Japan\r\n● 韓國設計 / 中國組裝', 30, 18, 1528681473),
(47, '春日微光單鑽手鍊', 305, '\r\n1\r\n \r\n商品描述\r\n● 商品皆為實際拍攝\r\n● 商品材質：合金 / 棉線 / 鋯石\r\n● 手鍊SIZE長約：16.1 cm (不含延長鍊)\r\n● 延長鍊SIZE長約：2.2 cm\r\n● 單鑽SIZE直徑約：0.3 cm\r\n● Made In Korea\r\n● 提供10日退換貨服務，請詳閱「售後服務」\r\n\r\n\r\n雙色設計，就像甜滋滋冰涼涼的綜合霜淇淋🍦般\r\n一次擁有雙重享受!這個夏天，\r\nBR不僅讓妳眼睛冰淇淋，\r\n連雙手都能嘗到這甜膩滋味喔', 30, 19, 1528481473),
(48, '雙色流蘇手鍊', 192, '● 提供30日退換貨服務，請詳閱「售後服務」\r\n● 商品材質：合金 / 棉線\r\n● 手鍊SIZE長約：16.8 cm (不含延長鍊)\r\n● 延長鍊SIZE長約：3.5 cm\r\n● Made In Korea', 50, 19, 1528681473),
(49, '最初的承諾戒指', 183, '● 提供30日退換貨服務，請詳閱「售後服務」\r\n● 商品材質：合金 / 人工鑽 (可微調)\r\n● 內圍直徑SIZE約：1.7 cm / 國際戒圍：#12\r\n● Made In Korea', 25, 20, 1528681473),
(50, '愛情核心戒指', 169, '● 提供30日退換貨服務，請詳閱「售後服務」\r\n● 商品材質：合金 / 人工珍珠 / 人工鑽\r\n● 內圍直徑SIZE約：1.65 cm / 國際戒圍：#11\r\n● Made In Korea', 22, 20, 1528681473),
(51, '棉花糖糖圓弧迷你斜背包 奶油糖', 1512, '圓滾滾像彩色泡泡的包身，不僅甜得很可愛，收納設計還很實用 。\r\n\r\n獨立的前口袋夾層，包身也設計了零錢拉鍊袋和卡片層，\r\n\r\n預告了今年的圓弧包型流行趨勢！', 31, 21, 1528681473),
(52, '潮流語彙織帶真皮手提包', 2480, '數學式般的標準答案太過無趣\r\n拒絕遵守規則的叛逆個性\r\n永遠敢於嘗試、碰撞\r\n就是要用獨創的語彙表述自我風格\r\n \r\n質感真皮X潮流織帶碰撞出時尚新風貌！\r\n簡約俐落方正的包款可手提也能肩背，\r\n除了撞色寬織帶還另外附有細背帶，\r\n可依照穿搭風格任意變換。\r\n以拉鍊袋分隔包內空間，讓收納更加有條有理！', 8, 21, 1528681773),
(53, '硬派甜美學院風後背包', 1782, '築起一座堅固的小天地,在裏頭恣意展演著真實面貌\r\n再也無須忍受多餘的眼光,強硬宣示自己的甜美主權\r\n\r\n採用防刮的硬挺面料,設計出俏麗的後背包款\r\n堅硬與甜美看似衝突卻又和諧,具有挺度的包身溫柔包覆著隨身物品\r\n金屬開釦設計更是強調出復古味', 4, 22, 1528681773),
(54, '約會晴空塔小後背包', 1683, '風靡日本擄獲女孩心的硬框開口後背包款擁有大容量，\r\n\r\n尺寸卻只有一般包包的大小。\r\n\r\n硬框開口設計看來靈巧精緻，擁有讓人意外好拿取的大容量\r\n\r\n搭配恰到好處的軟革感，反而產生既硬挺亦柔軟的完美質感\r\n\r\n令人羨慕、絕不出錯的漂亮後背包單品', 6, 22, 1528681473),
(55, '棉質防曬遮陽嘻哈棒球帽老帽', 480, 'AnnaSofia 船錨標誌 棉質防曬遮陽嘻哈棒球帽老帽', 3, 23, 1528681473),
(56, '韓國簡單字母W藍色棒球帽仲基著用', 350, '梨花HaNA 韓國簡單字母W藍色棒球帽仲基著用', 2, 23, 1528681473),
(57, '報童帽貝蕾帽', 580, 'AnnaSofia 幻格短毛絨 報童帽貝蕾帽(黑白系)', 6, 24, 1528681473),
(58, '質感亮絲絨報童帽貝蕾帽', 580, 'AnnaSofia 質感亮絲絨 報童帽貝蕾帽(亮黑系)', 7, 24, 1528681473),
(59, '毛線帽雙層保暖護耳防風針織', 499, '幸福揚邑 棱紋小顏毛線帽雙層保暖護耳防風兔毛針織貝蕾帽-粉紫', 9, 25, 1528688473),
(60, '雙球造型保暖護耳針織毛線帽', 499, '幸福揚邑 雙吊球造型雙層保暖護耳小顏拚色毛球針織毛線帽', 11, 25, 1528689473),
(63, '阿甘的上衣', 999, '阿甘上衣 獨一無二', 0, 1, 1529388961);

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `no` int(10) NOT NULL,
  `image` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `image`
--

INSERT INTO `image` (`no`, `image`) VALUES
(1, 'd1.jpg'),
(1, 'd2.jpg'),
(1, 'd3.jpg'),
(2, 'b1.jpg'),
(2, 'b2.jpg'),
(2, 'b4.jpg'),
(2, 'b6.jpg'),
(3, 'a1.jpg'),
(3, 'a2.jpg'),
(3, 'a3.jpg'),
(3, 'a4.jpg'),
(4, 'c1.jpg'),
(4, 'c2.jpg'),
(4, 'c3.jpg'),
(4, 'c4.jpg'),
(4, 'c5.jpg'),
(5, 'c1.jpg'),
(5, 'c2.jpg'),
(6, 'b1.jpg'),
(6, 'b2.jpg'),
(6, 'b3.jpg'),
(7, 'd1.jpg'),
(7, 'd2.jpg'),
(7, 'd3.jpg'),
(8, 'a1.jpg'),
(8, 'a2.jpg'),
(8, 'a3.jpg'),
(8, 'a5.jpg'),
(9, 'b1.jpg'),
(9, 'b2.jpg'),
(9, 'b3.jpg'),
(9, 'b4.jpg'),
(10, 'c1.jpg'),
(10, 'c2.jpg'),
(10, 'c3.jpg'),
(11, 'a1.jpg'),
(11, 'a2.jpg'),
(12, 'd1.jpg'),
(12, 'd2.jpg'),
(12, 'd3.jpg'),
(13, 'b1.jpg'),
(13, 'b2.jpg'),
(13, 'b3.jpg'),
(14, 'a1.jpg'),
(14, 'a2.jpg'),
(15, 'e1.jpg'),
(15, 'e2.jpg'),
(16, 'f1.jpg'),
(16, 'f2.jpg'),
(17, 'b1.jpg'),
(17, 'b2.jpg'),
(19, 'c1.jpg'),
(19, 'c2.jpg'),
(20, 'a1.jpg'),
(20, 'a2.jpg'),
(21, 'a1.jpg'),
(22, 'b1.jpg'),
(23, 'a1.jpg'),
(24, 'a1.jpg'),
(25, 'b1.jpg'),
(26, 'a1.jpg'),
(27, 'b1.jpg'),
(28, 'a1.jpg'),
(29, 'b1.jpg'),
(32, 'a1.jpg'),
(32, 'a2.jpg'),
(33, 'b1.jpg'),
(33, 'b2.jpg'),
(34, 'a1.jpg'),
(34, 'a2.jpg'),
(35, 'b1.jpg'),
(35, 'b2.jpg'),
(36, 'a1.jpg'),
(36, 'a2.jpg'),
(37, 'b1.jpg'),
(37, 'b2.jpg'),
(39, 'a1.jpg'),
(39, 'a2.jpg'),
(40, 'b1.jpg'),
(40, 'b2.jpg'),
(41, 'a1.jpg'),
(41, 'a2.jpg'),
(42, 'b1.jpg'),
(42, 'b2.jpg'),
(43, 'a1.jpg'),
(43, 'a2.jpg'),
(44, 'b1.jpg'),
(44, 'b2.jpg'),
(45, 'a1.jpg'),
(45, 'a2.jpg'),
(46, 'b1.jpg'),
(46, 'b2.jpg'),
(47, 'a1.jpg'),
(47, 'a2.jpg'),
(48, 'b1.jpg'),
(48, 'b2.jpg'),
(49, 'a1.jpg'),
(49, 'a2.jpg'),
(50, 'b1.jpg'),
(50, 'b2.jpg'),
(51, 'a1.jpg'),
(51, 'a2.jpg'),
(52, 'b1.jpg'),
(52, 'b2.jpg'),
(53, 'a1.jpg'),
(53, 'a2.jpg'),
(54, 'b1.jpg'),
(54, 'b2.jpg'),
(55, 'a1.jpg'),
(55, 'a2.jpg'),
(56, 'b1.jpg'),
(56, 'b2.jpg'),
(57, 'a1.jpg'),
(57, 'a2.jpg'),
(58, 'b1.jpg'),
(58, 'b2.jpg'),
(59, 'a1.jpg'),
(59, 'a2.jpg'),
(60, 'b1.jpg'),
(60, 'b2.jpg'),
(61, 'aaa.jpg'),
(61, 'agan.jpg'),
(62, 'aaa.jpg'),
(63, 'photo.PNG');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `no` int(10) NOT NULL,
  `commodity` int(10) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reply` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `con_time` datetime NOT NULL,
  `re_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`no`, `commodity`, `name`, `content`, `reply`, `con_time`, `re_time`) VALUES
(4, 1, '林承學', '我想送給我女朋友，請問哪個顏色好', '藍色', '2018-06-13 01:09:56', '2018-06-18 00:33:24'),
(5, 1, '鄭伊捷', '這個我好喜歡喔! 請問有現貨嗎?', '沒有', '2018-06-13 01:09:56', '2018-06-14 01:55:00'),
(6, 1, 'Claire', '嗨 ~!', '你好', '2018-06-18 14:00:46', '2018-06-19 14:26:45');

-- --------------------------------------------------------

--
-- 資料表結構 `order_gd`
--

CREATE TABLE `order_gd` (
  `no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gd_no` int(11) NOT NULL,
  `gd_amount` int(11) NOT NULL,
  `gd_color` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `gd_size` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `order_gd`
--

INSERT INTO `order_gd` (`no`, `gd_no`, `gd_amount`, `gd_color`, `gd_size`) VALUES
('180616245', 4, 2, '水藍色', 'F'),
('180616245', 5, 1, '卡其色', 'L'),
('180616274', 4, 1, '水藍色', 'XL'),
('180616274', 5, 1, '卡其色', 'L'),
('180616582', 4, 1, '水藍色', 'F'),
('180616582', 5, 1, '卡其色', 'L'),
('180618883', 4, 1, '水藍色', 'F'),
('180618883', 5, 1, '卡其色', 'L'),
('180618883', 6, 1, '黃色', 'F'),
('180619563', 4, 2, '水藍色', 'F'),
('180619668', 1, 3, '米色', 'S'),
('180619668', 16, 2, '黑色', 'F'),
('180619823', 4, 3, '水藍色', 'F');

-- --------------------------------------------------------

--
-- 資料表結構 `order_user`
--

CREATE TABLE `order_user` (
  `no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `addr` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sent` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `order_user`
--

INSERT INTO `order_user` (`no`, `username`, `addr`, `sent`) VALUES
('180616245', 'root', 'asdasd', 0),
('180616274', 'root', 'asdasd', 0),
('180616582', 'root', 'asdasd', 0),
('180618883', 'root', '彰化縣彰化市寶山路126巷2弄3號', 0),
('180619563', 'root', 'asdasdasd', 0),
('180619668', 'member', 'asdasd', 0),
('180619823', 'root', 'asdasd', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `shop_list`
--

CREATE TABLE `shop_list` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gd_no` int(11) NOT NULL,
  `gd_amount` int(11) NOT NULL,
  `gd_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gd_size` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `shop_list`
--

INSERT INTO `shop_list` (`username`, `gd_no`, `gd_amount`, `gd_color`, `gd_size`) VALUES
('member', 16, 1, 'blue', 'XL'),
('root', 5, 1, 'blue', 'XL'),
('root', 6, 1, 'blue', 'XL');

-- --------------------------------------------------------

--
-- 資料表結構 `size`
--

CREATE TABLE `size` (
  `no` int(10) NOT NULL,
  `size` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `size`
--

INSERT INTO `size` (`no`, `size`) VALUES
(1, 'L'),
(1, 'M'),
(1, 'S'),
(1, 'XL'),
(2, 'L'),
(2, 'M'),
(2, 'S'),
(3, 'L'),
(3, 'M'),
(3, 'S'),
(4, 'F'),
(5, 'L'),
(5, 'M'),
(6, 'F'),
(7, 'F'),
(8, 'L'),
(8, 'M'),
(8, 'XL'),
(9, 'L'),
(9, 'M'),
(9, 'S'),
(10, 'F'),
(11, 'F'),
(12, 'F'),
(13, 'F'),
(14, 'F'),
(15, 'F'),
(16, 'F'),
(17, 'F'),
(18, 'F'),
(19, 'F'),
(20, 'F'),
(21, 'F'),
(22, 'F'),
(23, 'F'),
(24, 'F'),
(25, 'F'),
(26, 'F'),
(27, 'F'),
(28, 'F'),
(29, 'F'),
(30, 'F'),
(31, 'F'),
(32, 'F'),
(33, 'F'),
(34, 'F'),
(35, 'F'),
(36, 'F'),
(37, 'F'),
(38, 'F'),
(39, 'F'),
(40, 'F'),
(41, 'F'),
(42, 'F'),
(43, 'F'),
(44, 'F'),
(45, 'F'),
(46, 'F'),
(47, 'F'),
(48, 'F'),
(49, 'F'),
(50, 'F'),
(51, 'F'),
(52, 'F'),
(53, 'F'),
(54, 'F'),
(55, 'F'),
(56, 'F'),
(57, 'F'),
(58, 'F'),
(59, 'F'),
(60, 'F'),
(61, 'L'),
(61, 'XL'),
(62, 'L'),
(62, 'XL'),
(63, 'L'),
(63, 'XL');

-- --------------------------------------------------------

--
-- 資料表結構 `s_category`
--

CREATE TABLE `s_category` (
  `no` int(11) NOT NULL,
  `name` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `s_category`
--

INSERT INTO `s_category` (`no`, `name`) VALUES
(1, '上衣'),
(2, '褲子'),
(3, '裙子'),
(4, '外套'),
(5, '運動鞋'),
(6, '休閒鞋'),
(7, '粉底'),
(8, '蜜粉'),
(9, '眼影'),
(10, '眼線'),
(11, '唇膏'),
(12, '頸鍊'),
(13, '鎖骨鍊'),
(14, '耳針'),
(15, '耳夾'),
(16, '髮帶'),
(17, '髮圈'),
(18, '手錶'),
(19, '手鍊'),
(20, '戒指'),
(21, '皮包'),
(22, '後背包'),
(23, '棒球帽'),
(24, '鴨舌帽'),
(25, '毛帽'),
(26, '圍巾');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`username`, `password`, `telephone`, `email`, `auth`) VALUES
('admin', 'admin123456', '', '', 1),
('member', 'member123456', '0956258977', 'bang@bang', 0),
('root', 'root123456', '0956258979', 'prince870226@gmail.com', 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`no`,`name`);

--
-- 資料表索引 `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`no`,`color`);

--
-- 資料表索引 `commodity`
--
ALTER TABLE `commodity`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`no`,`image`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `order_gd`
--
ALTER TABLE `order_gd`
  ADD PRIMARY KEY (`no`,`gd_no`);

--
-- 資料表索引 `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `shop_list`
--
ALTER TABLE `shop_list`
  ADD PRIMARY KEY (`username`,`gd_no`);

--
-- 資料表索引 `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`no`,`size`);

--
-- 資料表索引 `s_category`
--
ALTER TABLE `s_category`
  ADD PRIMARY KEY (`no`,`name`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `commodity`
--
ALTER TABLE `commodity`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

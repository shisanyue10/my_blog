-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-29 07:01:44
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wearebolg`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_article`
--

CREATE TABLE `tb_article` (
  `id` int(10) NOT NULL,
  `content` mediumtext CHARACTER SET gb2312 NOT NULL,
  `author` varchar(20) CHARACTER SET gb2312 NOT NULL DEFAULT '',
  `now` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(200) CHARACTER SET gb2312 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tb_article`
--

INSERT INTO `tb_article` (`id`, `content`, `author`, `now`, `title`) VALUES
(40, '人人心中都有一汪清泉，洗濯你地灵魂，滋润着你地生命。只是因为日常地琐碎生活地纷杂，才掩蔽了她地环佩妙音，朦胧了她地清碧透明。夜阑人静，天籁无声。每逢这个时刻，你才能卸下沉重地面具，拆去心园地栅栏，真实地审视自己，在生命地深处，你终于倾听到－丝悠然地脆鸣。这是－首真善美地诗。像甘霖，像春风，柔慢而隽永。月隐星现，露重风轻。每逢这个时候，你才能正视裸露地良知，走出世俗地樊箱，在灵魂地高处，你终于感念到－波必然地律动。这是－支真善美地歌啊！像皓月，像秋阳，淡泊而宁静。', 'Y.', '2017-06-15 09:49:55', '人人心中都有一汪清泉'),
(39, '雨慢慢停了，萧瑟地秋风吹过，吹散了满地金黄地枫叶，点点成泪，飘去远方，化作－片云。心丢掉，随萧然秋风去追却无处可寻！落地，成尘。谁，直到何时，抬头看天才可见彩虹，回头望风而不见砂尘；也许水长向东，物是人非；也许缘本擦肩，回首已逝！也许是我太过幻想而忘记我非神灵；也许是我太过痴迷而忘记成事在天。我非神灵但我愿众神感动，成事在天但我信上天有知。找片净土种支玫瑰，画幅蓝图代替天空。我但愿四季随心，花开艳丽；我但愿秋风如歌！', 'Y.', '2017-06-15 09:49:55', '我愿'),
(38, '信念地力量在于即使身处逆境，亦能帮助你鼓起前进地船帆；信念地魅力在于即使遇到险运，亦能召唤你鼓起生活地勇气；信念地伟大在于即使遇到不幸，亦能促使你保持崇高地心灵耐力，是－种不显山露水地执着；是－种不惧风不畏雨地坚忍；是－种不图名不图利地忠诚。 大厦巍然屹立，是因为有坚强地支柱，理想和信念就是人生大厦地支柱；船舱破浪前行，是因为有指示方向地罗盘，理想和信仰就是人生航船地罗盘；列车奔驰千里，是因为有引导它地铁轨，理想和信念就是人生列车上地铁轨。', 'Y.', '2017-06-15 09:49:55', '信念与理想'),
(37, ' 雨水轻轻地、柔柔地洒在大地上，冲洗掉人间地面上－切脏乱地灰尘，给人们带来清洁干净地感觉，然而冰冷地雨水却不能冲洗掉我身上灰色地心情！我从喧闹地街心走出来，那灯光地世界距我是那样地遥远。我走到那条林荫道中央，站在那里，前后只有雨声，人们不知藏到哪儿去了。这样真好！撑着－把伞，心中有－种柔软而又温馨地几乎不敢呼吸地感觉。曾经有过地－幕－幕，－个又－个镜头仿佛早就商量好，慢慢地从我雨中地眼前走过，慢慢地走过......', '花开一季变成熟', '2017-06-15 09:49:55', '回忆 雨中'),
(33, '做好自己分内的事，剩下的就交给老天吧，其实人生也就这样而已，何必把自己弄得那么累？你改变不了这个世界，你要做的，就是去适应生活', '月三星', '2017-06-15 09:49:55', '生活'),
(41, '轻轻晃动手中地茶杯，看淡绿色地茶或针或片，忽上忽下，簇拥着，沉沉浮浮，变换着不同地位置，试图寻找－个属于自己地最佳平衡点。心急地我常常等不得茶泡好，就轻吹杯口，带动－漾－漾地茶涡，看茶叶聚聚散散，无奈分离。呷－小口茶，任清清浅浅地苦涩在舌间荡漾开来，充溢齿喉。之后，深吸－口气，余香满唇，在肺腑间蔓延开来，涤尽了－切地疲惫冷漠。人仿佛也醉了，朦胧中，久久不愿醒来。是夜，茶香满室，杯中茶由淡变浓，浮浮沉沉，聚聚散散，苦涩清香中慢慢感悟：人生亦如茶。', 'Y.', '2017-06-15 09:49:55', '人生如茶'),
(44, '当一种美，美得让人无所适从，也只好手之舞之，足之蹈之；当一种平淡，淡得让人无从品味，也只好叹之惜之，赞之赏之。你甘于淡泊，乐于平淡，自得于平淡，只愿在梦中化蝶而逍遥，只愿随那盘旋而上的鹏者浮游于天地，不愿累于国事，不愿牵绊于尘世，你就如同那甘之如饴的淡淡而香的矿泉之水，给人以绝境逢生，给人以平静致远，给人以超脱外物，我想要触及你的衣襟，却在指尖碰触了清而澈，凉而柔的泉水，原是这般滋味。无奈我摆脱不了那甜的诱惑，忘却不了那或苦或甜的香醇，只好在无路可走之时，望见你那平静如水的双眸，澄澈至极，悠悠远远，望断天涯路。', 'Y.', '2017-06-15 09:49:55', '美得意义'),
(45, '念往昔，繁华竞逐。你依旧逍遥游于世外，参透大自然的无穷。世界不过是你的主观产物，甚至你了解了河鱼之乐，蝶舞之愉，螳螂之负，摇曳而去，穿梭于泥潭之中，何去在乎那权势之争，谁言非要承受那生命不能承受之重。氤氲之间，明月可掇，你在清风夜唳之中独自守望那明月，以至于在人们高枕无忧之时那皓白之月不会迷失??? 只因你这颗平淡的心相追逐。世人笑你疯癫，你淡漠的眼神却摄人无语，恍然大悟你淡淡的泉水般的哲理如此深邃，你却早已悠然飘远。对你唯有惊鸿一瞥，却窥见了一种平淡致远的处世态度，淡罢，淡罢，绝不为万物所主宰，我独逍遥于濯浊之外，蝉蜕去拖累，只愿抱明月而长终。江边一蓑烟草，一片缟素。', 'Y.', '2017-06-15 09:49:55', '平淡的心'),
(46, '缤纷成就和谐，试看暮春三月，鹅柳淡烟的嫩黄，映阶碧草的翠绿，出墙红杏的艳红，卷云时舒的碧空，它们的颜色各不相同，但这又有何妨？“万紫千红总是春”，本来万物都欣然生长的春日就不是由一种色彩来主宰的。不同的是表象，和谐的是本质，缤纷成就的是多彩的丰富，是真正意义的和谐。轻叩红楼之门，寻那桩百年来曼远悠长的梦，你说 《红楼梦》里众相纷芸，钟灵秀丽的女儿如此之多，谁是读者的最爱？从来是众口难调，然而亦从来是雅俗共赏，轻抚着略微卷起的书页，我们仿佛听到，那“我来迟了，不曾迎接远客”的张扬，那“花落人亡两不知”的忧伤，那“这个妹妹，好像哪里见过”的惊喜，那“爱哥哥，爱哥哥”的叫唤，汇成了一曲和谐的乐章，不绝于耳，味之不尽……', '月三星', '2017-06-15 09:49:55', '每个人心中都有一份美'),
(47, '徘徊在生与死间，踌躇于明与暗间，有人选择生，也有人选择死，有人选择明，也有人选择暗……真正源于人类内心深处的一缕精神血脉，却选择永恒。站在历史的海岸漫溯那一道道历史沟渠：楚大夫沉吟泽畔，九死不悔；魏武帝扬鞭东指壮心不已；陶渊明悠然南山，饮酒采菊……他们选择了永恒--纵然谄媚污蔑蒙蔽视听，也不随其流扬其波是执着的选择，纵然马革裹尸魂归关西，也要扬声边塞尽扫狼烟，这是豪壮的选择；纵然一身清苦终日难饱，也愿怡然自乐、躬耕陇亩，这是高雅的选择……在一番番选择中，帝王将相成其盖世伟业，贤士迁客成其千古文章。', '月三星', '2017-06-15 09:49:55', '人生选择'),
(48, '篱茅舍边，我见到了颜斤蜀，那个齐宣王说他宁愿“安步以当车，晚食以当肉”的人。我问他为什么要选择隐逸，他眯起眼睛一笑，说：“归真返璞，则终身不辱。”“怎么还是那两句话”，我嘟嚷着想离开，身后却又响起了那个静如止水的声音：“''不辱’的是心灵，心灵是不能有一点尘滓和愧怍的。” 爱琴海的烽烟弥漫在苍凉空寂的天幕上，我找到了阿喀琉斯，我想知道他为什么宁愿让帕里斯卑鄙阴险的箭射进他的脚后而至死也不肯从暗处给人致命一击。“帕里斯要的是海伦和我的生命，而我要的是一颗高贵纯洁的心灵，我无愧无悔。”他刚毅冷酷的脸或许正是因为这样才注定了要被铸成青铜塑像，英雄的名义千年不朽', '月三星', '2017-06-15 09:49:55', '英雄千年不朽'),
(49, '乐声缓缓而起，几声古筝似山中的几阵清风，拂过树叶，带来几声鸟鸣，引起一阵灵动，我心一悸：这好像在哪听过，可当时又实在想不起来。 然而筝声渐密渐稠，似天上的几处白云互相追逐打趣，引得鸟儿也性子一乐，叽叽喳喳地叫了起来。不经意间，略显凝重的二胡插入其中，用沙哑来表现几分随意、几分思索。这思索如天马行空，无牵无羁，自在飘扬。古筝的灵动与二胡的悠扬恰到好处地揉和，把一种内心无所羁绊的欢愉演绎得淋漓尽致。待最后一个音符弹出一缕升天的轻烟，我回到了现实。长者用慈祥的笑容看了我一眼：“这就是《松山风曲》，你听过的，再听一下，还好吧？”我愕然。他又继续，“道家的超脱对的是繁芜的世俗，道家也热爱自然，他们所爱的是纯真无尘的自然。道家的音乐实际上是很爱生活的……”', '月三星', '2017-06-15 09:49:55', '跟着心声走'),
(50, '我们变得自大，我们变得骄纵。大宋宫廷，白衣秀士，文臣儒士们忙着作诗写赋，用程朱理学教化子民时，北方的铁骑席卷了中华；康乾盛世，书生们忙着去作八股，去作经注考证时，大洋的另一端，开始了科技革命，改写了历史……我们有四大发明，我们有地动仪，我们有早他国一千多年的圆周率。可是，我们的土地上蕴育的是以农为本、固步自守的黄色文明，我们有郑和去炫耀国威，可是我们没有发现新大陆的哥伦布；我们有李白杜甫，却没有哥白尼牛顿；我们知道天朝上国，却看不到外面的文明……我们陶醉于自己，我们不断地用《天工开物》、《农政全书》去总结辉煌，却忘了重视审视自己的文化……我们落后了。  历史在悄然逝去，心中的热情并没有冷却，但我们多了一分理智，在仔细地审视……', '月三星', '2017-06-15 09:49:55', '理智的看历史'),
(51, '文学作品中的转折多半是虚构的，人生中的转折却是真实的。虽然，有的令人痛不欲生，但其最终却成为铸造生命奇迹的一块块基石。司马迁在《史记》中写道：“文王拘而演《周易》仲尼厄而作《春秋》；孙子膑脚，兵法修列，左丘失明，厥有《国语》；韩非囚秦，《说难》；《孤愤》……”许多先贤都是在经历了如许苦痛的转折之后，更深刻地体味了人生的大义所在，依靠惊人的生命力延续了生的意志，写下了一篇篇传世经典，造就了一番番奇功伟业。就是在这些转折中，先哲们的坚韧和坦荡，使他们的人格和思想在历史长河上空凝聚成了一瓣瓣恒久的心香，也正是这些转折，激发了更多人更多的感喟……', '月三星', '2017-06-15 09:49:55', '文学作品'),
(52, '我仿佛面对夜空，那几亿万光年之遥的星云，发出的竟是千百年前的光芒??我仿佛看见被贬的苏轼，看到他面对转折的从容与气魄，“……归去，也无风雨也无晴”的旷达激起了千百万人内心深沉的回响；我也仿佛看见卢比孔河畔的凯撒大帝，看到他面对转折的果敢与坚毅，那一响亮的决定，成就了古罗马的辉煌，也成就了人类历史中值得永远纪念的亮点；我还仿佛看见文革时期的沈从文，看到他面对转折的高雅与昂扬，这位文学巨匠的心底荷花地依旧芬芳，人生路也仿佛充满了荷花的高洁芬芳……\r\n', 'sir', '2017-06-15 09:49:55', '在文学中翱翔'),
(53, '抓不住的岁月的鸟翼，被火光映在手掌；每一次转折，都形成一道深深的掌纹，比羽毛还要清晰。我多希望，在我们走到长路尽头的时候，那每一道掌纹还能让我们感受到不息的生命力；我多希望，在每一个转折的路口，都留下我们顽强的身影和从容不迫的笑容。记得席慕容的一句话：“每一条走过来的路都有不得不这样跋涉的理由，每一条要走下去的路都有不得不这样选择的方向。”而在这“走过”与“走下去”的转折路口，待我以最充溢的信心和活力，去感受灵魂舞蹈如花之绰约；待我用最坚实的心灵和意念，去创造人生烂漫如霞之辉煌。', 'sir', '2017-06-15 09:49:55', '坚强的心灵信念创造人生'),
(55, '那些唱着“不在乎天长地久，只在乎曾经拥有”的浮躁的人们，或许忘记了婚姻是一份幸福的契约，更是心灵的契约，只有用心守护、才能获得幸福的果实。那些想着“有权不用，过期作废”的贪婪的人们，或许忘记了当初在党旗下旦旦的誓言，那是行为的约束，更是信仰的直白，一个连自己的信仰都可以抛弃的人，社会也会最终将他抛弃。一颗缺乏约束的心灵是空虚的，游离的，就如同失去了家园的灵魂，失去了根的大树，失去源头的大江，只能堕落，只能枯萎，只能干涸……一种来自灵魂的声音在呼喊：守住吧???心灵的契约：诚信！', 'sir', '2017-06-15 09:49:55', '一颗诚信的心'),
(59, '选择诚信。因为它比美貌来得可靠。没有美貌的人生或许是没有足够亮点的人生；但若没有诚信的人生则足以是没有一丝光明的人生。你可以不是潘安，你也可以不是西施，但 你不可以失去别人对你基本的信任。“人，以诚为本，以信为天。”没有诚信，生存世间的你可要作一粒悬浮其中的尘粒？ 选择诚信。因为它比荣誉更具时效性。没有一蹴而就的业绩，没有一成不变的江山。没有人可以顶着荣誉的光环过一辈子。荣誉是短暂的，它只是人生旅途上一小片美丽的风景，它再美丽，也只是一小段的人生；但诚信是培植人生靓丽风景的种子，你一直耕耘，就会一直美丽，你将诚信的种子撒满大地，你的人生将会美丽到天长地久。', 'sir', '2017-06-15 09:49:55', '让生活充满诚信'),
(60, '感情如水，理性如冰，八分之一的冰块浮动在水上显现着庄重和威严，一任冰下蓝色的水漂荡，不减半点高雅，这是理性的美。 人非草木，孰能无情？但情感如佳期如迷梦，如朦胧的目光一样虚幻地笼罩在你的思绪中，虽然美，但是纵使你有洞明一切的雪亮智慧的双眼也难在情感的月光下一任目光驰骋鸟瞰。而理性，则是明艳的阳光，它慷慨地洒向宇宙空间，哪怕是枝叶繁生的丛林，哪怕是污浊游荡的大海，哪怕是遥远的孤独的星球，都可以让你一睹宇宙的本色。阳光下的美是真实的。', 'sir', '2017-06-15 09:49:55', '人的感情'),
(61, '大地有高山和峡谷，人间有高尚和卑下。人世中充满着七情六欲的烟和雾，一切亲情、友情、爱情……犹如四面八方的风笼罩着这个烟雾交错的世界。立于天地间，谁能够脱离红尘的牵绊，谁能抛开一切俗念？古今中外又有几人能够穿越感情的烟雾？像庄子的豁达与放逸吗？像屈原的忠诚爱国吗？虽然庄子能与鲲鹏为友，能穿透世间有为的境界，但他却悠游而无法脱离尘世的纷纷扰扰。屈原放弃一切而忠诚于国，却赴清流而为保全自己的清白。庄子和屈原都把自己放在广阔无垠的宇宙外层，却不知在他诞生之日，地球上的灰尘已把他们都打上了人间的烙印。于是，无论怎样去俯视这宇宙，都是带着感情的牵绊，仿佛地面有无数的线牵连着各处器官，你又如何能够把这层烟雾拨开？', '大家好我是标标', '2017-06-15 09:49:55', '情感的羁绊'),
(62, '你会因喜爱北国的皑皑白雪而对南国的椰林海风不屑一顾吗？你会因沉迷于江南的小桥流水、青瓦白墙而否定西北“大漠孤烟直、长河落日圆”的美吗？你会因介意林黛玉″使性子″而不看经典名著《红楼梦》吗？你会因钟情流行音乐而厌烦″沉闷乏味″的古典音乐吗？        ??古希腊哲人曾说，人是感情的动物。因此，面对大千世界，感情上的亲疏远近、喜好憎恶往往会影响到对人、对事的看法。相信每个人的心中都会有架天平，有个自己的标准，用来衡量周遭的一切。感情如同天平一端的重物，选择什么作为量度显得尤为重要。在我看来，道德、理智、责任、信仰等都很重要，关键在于，你选择的量度是否能既有利于自己又不损害别人的利益。', '大家好我是标标', '2017-06-15 09:49:55', '选择的意义'),
(63, '人生活在世上，是在无数的感情里度过。有人说一个人的生命是从笑声中开始又在哭声中结束，这一笑一哭，莫不饱含着浓浓的人情，浸透了感情的一生，使生命有了支柱、目标、希望，使生命真正饱满、充实，使人性有了耀眼的光华。  人们重感情，人类也许永远也无法理解在一头饥饿的雄狮面前，它的孩子与猎物没有区别的那种无情兽性。然而深深浅浅的感情织成的云却又常常成为一种遮蔽，让人们原本智慧的眼眸无法看到青天。而事实上，每个人在感情占了上风的时候只要能再有一刻的冷静，就能摆脱情感的纠葛，不论是偏向亲近的人还是故意“杀熟”，都不再会成为人心中对错的评判。人是有感情的，但更是有理智的。当我们注视感情时也切记：莫把情云遮慧眼。', '大家好我是标标', '2017-06-15 09:49:55', '一笑一哭'),
(64, '有人说，中国人缔造了月。这话其实并未夸大。在科学上，月只是一块毫无生命和感情的矿石，但由于中国无数诗人无数美丽的诗篇却赋予了月亮以不朽的生命。在王维的诗中有云：“明月松间照，清泉石上流。”张继诗云：“月落乌啼霜满天，江枫渔火对愁眠”。李白的诗：“人生得意须尽欢，莫使金樽空对月”。苏轼的词：“明月几时有，把酒问青天？”这些优美的诗句，至今细细体味，仍给人口有余香，不绝于耳的感觉。但我们同时也会发现诗人的感情却不尽相同：王维的安适，张继的失意，李白的狂放不羁，苏轼的人世旷远。也正是如此，对于同一事物月的认识也不尽相同。同样，对于其它事物，诗人们也同样有不同的认识，有人喜春，有人悲春；有人伤时，更有人感时。感情却是对事物认识的一个基点，一个发散源。', '大家好我是标标', '2017-06-15 09:49:55', '诗中月'),
(65, ' 我们澄清的眼睛里无法写满沧桑与事变，不经一事，不长一智，为了后师之鉴，我们从古典，实录，现实中，可以有所感悟，寻求方向。从司汤达的《红与黑》，托尔斯泰的《安娜?卡列妮娜》，我鲜活的心灵触及到了主人公在感情上和伦理上，理性的矛盾和揪心的苦恼。从中可以折射出现实生活的影子，贪污犯不是一上任就徇私枉法的，杀人放火者也许是执著于对某个亲人的不平或保护，同样的一句话，儿子说出来就是聪明，邻居说就是布下暗室。人就是这么一种奇怪的动物，但是我们应该看准方向，学着成熟，试着长大，流年似水，不应该只将泪光镌刻；风雨如晦，总应该把羽翼淬火。', '大家好我是标标', '2017-06-15 09:49:55', '在风雨中成长'),
(66, '眼里，除了怜爱还是怜爱。就像雨巷里的那位带着丁香般幽怨的少女，在梦里，挥也不去散也不去。除了她的身影还是它的身影，除了她的俏丽还是她的俏丽。牡丹？玫瑰？百合？菊花？面对这些后宫佳丽，我却像一位挑剔的美食家，一位追求完美的艺术家，总觉得它们少了点什么，不能给我完全喜悦的感觉。也许这正是偏爱莲的原因吧！情人眼里出西施。莲，让我觉得它就是花中之王，无人可比。朋友说我过于喜爱它，忽略了其它花的美丽，也许是吧！暮春三月，白花争努，牡丹芍药，妍丽妩媚，使人为只震惊；夏季炎炎，紫罗兰、玉兰散发淡淡幽香，祛除夏意，让人心旷神怡；秋高气爽，菊独傲枝头，正直傲洁油然而生；隆隆寒冬，梅独自争妍，不畏严寒，吐放清香，赞美之词不可胜数。但是，我仍固执地认为莲才是完美。', 'loser', '2017-06-15 09:49:55', '莲花之美'),
(67, '偏见之于看风景，是大有差异的。风景没变，但倘若看风景的人戴上有色眼镜，景致也就大不相同了。有偏见的人当然全是有心的，并且大抵以唐朝名僧慧能为榜样，主张“心外无物”，看东西想问题时不免给自己的心加装一副有色眼镜，然后再将头缩于腹内，如同刑天之民，视听蒙蔽，如此一来，偏见就形成了。        我们怕偏见，更怕偏见多了，“众口铄金，积毁销骨”。于是无端地怀疑自己，但更多的却是怀疑别人，又常常摸着良心，看看是否戴了有色眼镜，常常按住心灵的缝隙，以防“偏爱”乘虚而入，“偏见”乘虚而出。', 'loser', '2017-06-15 09:49:55', '偏见'),
(68, ' 我清楚地记得康德曾经说过“有两样东西我越是思考就越感到无上敬畏之情：我们头上的灿烂星空，我们心中的道德法则”。这句镌刻在人类思想史上的话语也许很精当地为人类摆脱尴尬境地提供了柳暗花明的一角???坚持自然真理与思想的道德法则。也许这样，人类才可以真正做一棵生长在自然之基上的能思考的苇草。        我相信人类在判断认知事物的时候一定都会烙上思想感情的印迹，更何况是那样一种与生俱来挥之不去的神圣感情。中国历史长河中清风明月般的人物当然有，但是完全割裂亲情毫无私念的例子又实在不算多。而我也许真的不太主张做一个冷血无情的人，否则世界没有了感情，也没有了色彩。', 'loser', '2017-06-15 09:49:55', '没有感情的世界太空旷'),
(69, ' 一本书因转折而精彩。《飘》中的女主角思嘉丽由一位娇弱的千金小姐因时代的变动以及身体内自尊的血液而转变成了坚韧而真正美丽的铿锵玫瑰，这样的蜕变真实而精彩，这样的转折使《飘》成为一部掩卷难忘的经典之作。《呼啸山庄》中，男主角希剌克利夫，由一个单纯、爱意绵绵的少年转变成了一个因爱而泯灭了人性的复仇恶魔，这场因爱而起的悲剧摄人心魄，因为这转折突然而精彩，这样骤变的人性更是突出了爱在他心底炮烙的深刻印记，更多的如希区柯克、欧?亨利那种出人意料的结尾处决定性的转折更是蕴藏着无穷的魅力。这些作品的转折，我想无论是美好或惊艳，都会令我们最大限度地体会到作者的用意，从而获得思考，它们无疑是精彩的。', 'loser', '2017-06-15 09:49:55', '转折的魅力'),
(70, '  我们用友谊写－本书，－本厚厚地书。在书里：友谊如珍珠，我们共同穿缀，联成－串串璀璨地项链；友谊如彩绸，我们共同剪裁缝制成－件件绚丽地衣衫；友谊如花种，我们共同播撒，培育出－个个五彩地花坛；友谊如油彩，我们共同调色，描绘出－幅幅美丽地图画。 友谊要用真诚去播种，要用理解去护理，要用热情去浇灌。 友谊之火温暖了朋友受伤地心，照亮了迷途者前进地方向，驱散了孤独者心中地阴云，点燃了失败者新地希望。\r\n', 'loser', '2017-06-15 11:36:55', '用书武装自己'),
(71, '当欢笑淡成沉默，当信心变成失落，我走近梦想的脚步，是否依旧坚定执着；当笑颜流失在心的沙漠，当霜雪冰封了亲情承诺，我无奈的心中，是否依然碧绿鲜活。有谁不渴望收获，有谁没有过苦涩，有谁不希望生命的枝头挂满丰硕，有谁愿意让希望变成梦中的花朵。现实和理想之间，不变的是跋涉，暗淡与辉煌之间，不变的是开拓。甩掉世俗的羁绊，没谁愿意，让一生在碌碌无为中度过。', 'sir', '2017-06-15 09:49:55', '生活'),
(72, '我爱雨，爱着雨，爱听雨，爱想雨，也爱思雨。雨，像希望，像企盼，也像信念；雨，像誓言，像承诺，也像等待。等待再一次下雨，等待再一次失败，等待再一次重生，也等待再一次思雨。冷风拂起了颓废的柳枝，无力的在风雨中挣扎，像求生一样，它也在等待，等待新生，等待枯黄，等待生命的轮回。', '张浩牛', '2017-06-15 09:49:55', '雨'),
(73, '有人不择手段地沽名钓誉，结果名声扫地；雷锋做好事从不留名，却享誉神州；有人要写长留世上的文字，结果速被遗忘；鲁迅惟愿文章速朽，却光耀千古。问天下文章几篇能留住?繁星满天，只取一勾新月。有人千方百计地追求长命，结果一生平庸。王勃英年早逝，却留下千古绝唱。问世上几人声名传天下?恒河沙数，惟有钻石闪光。问古往今来几人垂青史?大浪淘沙，只剩些许真金。', '张浩牛', '2017-06-15 09:49:55', '声名传天下'),
(74, '树正在长成新叶，好像某事呼之欲出，初绽的嫩芽悄然绽放，点点新绿恰似某种幽怨。是否它们再获新生，()我们却颓然老去。不，它们也会死亡，它们簇然一新，年年如是的把戏，正被刻写在树的年轮上。永不静歇的树丛依然摇曳，在成熟稠密的年年五月，去年已死，它们似乎在诉说，开始重生，重生，重生。', '张浩牛', '2017-06-15 09:49:55', '生命'),
(75, '你的命运，一半在自己手中，另一半在上帝手中。你一生的全部就在于:运用你手里所拥有的，去获取上帝手中缩掌握的。你的努力越超常，你手里掌握的那一半就越庞大，你获得的久越丰硕。在你彻底绝望时，别忘了自己拥有一半的命运，在你得意忘形时，别忘了上帝手里还有一半的命运。你一生的努力就在于:用你自己的一半去获取上帝手中的一半。这就是命运的一生，这就是一生的命运。\r\n\r\n', 'Y.', '2017-06-15 09:49:55', '命运'),
(76, '奔着幸福，我们苦苦寻觅。可是，幸福在哪儿?幸福该是沙漠中一片清凉的绿洲吧?我们跋山涉川，望眼欲穿，最终却只见到几丛沙棘；幸福该是大海中的一颗闪亮的珍珠吧?我们涉江探海，寻踪觅迹，末了却只捡到几只贝壳；幸福该是旅途中的一座舒适的城堡吧?我们饥餐渴饮，夜往晓行，最后却只找到一处陋室；幸福该是山那边的一处桃红杏黄的花果园吧?我们千辛万苦，气喘吁吁，终了却只见到几弯垂柳、几丛小草。其实我们不要把幸福太理想化了，世上本没有完整无缺的幸福。', '大家好我是标标', '2017-06-15 09:49:55', '寻找幸福'),
(77, '简言之，幸福就是没有痛苦的时刻。他出现的频率并不比我们想象的少，人们常常只是在幸福的金马车驶过去很远时，捡起地上的金鬃毛说，原来我见过它。人们喜欢会为幸福的标本，却忽略了幸福披着露水散发清香的时刻。那时候我们往往步履匆匆，瞻前顾后，不知在忙些什么。世上有人预报台风，有人预报蝗虫，有人预报瘟疫，有人预报地震，却没有人预报幸福。', 'loser', '2017-06-15 09:49:55', '提醒幸福'),
(78, '翻开古代诗词，你可以一一品味诗人们深切的思想感情，继而有所思，有所悟。读王维、孟浩然，你懂得了什么是钟情山水；读杜甫、白居易，你懂得了什么是忧民情结；读辛弃疾、陆游，你懂得了什么是爱国情怀。读着、品着，你已经和诗人们融为一体了，潜移默化中提高了自己的品德修养和审美情趣。', '花开一季变成熟', '2017-06-15 09:49:55', '古代文学之美'),
(79, '庄子是一棵孤独的树，是一棵孤独的在深夜看守心灵月亮的树。当我们大都在黑夜里昧昧欲睡时，月亮为什么没有丢失?就是因为有了这样一两棵在清风夜唳中独自看守心灵月亮的树。庄子眼极冷，心肠极热。眼冷，故是非不管；心肠热，故悲慨万千，虽知无用而未能忘情，到底热肠挂住，虽不能忘情，而终不下手，到底冷眼看穿。', '月三星', '2017-06-15 11:49:55', '庄子');

-- --------------------------------------------------------

--
-- 表的结构 `tb_filecomment`
--

CREATE TABLE `tb_filecomment` (
  `id` int(4) NOT NULL,
  `fileid` int(4) NOT NULL DEFAULT '0',
  `username` varchar(20) CHARACTER SET gb2312 NOT NULL DEFAULT '',
  `content` text CHARACTER SET gb2312 NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tb_filecomment`
--

INSERT INTO `tb_filecomment` (`id`, `fileid`, `username`, `content`, `datetime`) VALUES
(70, 78, '好儿郎', '哈哈哈', '2016-07-17 16:55:23'),
(29, 66, '好儿郎', '666666666', '2016-07-17 12:11:11'),
(52, 66, '匿名', '又在这煽情', '2016-07-17 12:22:11'),
(74, 78, '好儿郎', '哈哈', '2016-09-09 16:53:39'),
(54, 79, 'loser', '虽然听不懂在说什么，但是看起来好厉害的样子', '2016-07-17 20:11:11'),
(55, 79, '大家好我是标标', '提到庄子，大鱼海棠去看了没？', '2016-07-17 17:55:11'),
(56, 79, '花开一次变成熟', '极力推荐大鱼海棠，真的很好看', '2016-07-17 19:11:11'),
(57, 79, '张浩牛', '北冥有鱼，其名为鲲', '2016-07-17 18:41:11'),
(60, 78, 'Y.', '有同样的想法', '2016-07-17 12:11:11'),
(61, 77, '好儿郎', '说得好，不管怎样，要做自己', '2016-07-17 12:11:19'),
(69, 52, '匿名', '你好', '2016-07-17 15:11:48'),
(77, 78, '好儿郎', '哈哈', '2017-03-09 15:53:41'),
(76, 46, '匿名', '哈哈\r\n', '2017-03-09 15:52:51'),
(78, 75, '月三星', '我来凑字数', '2017-06-21 11:23:04'),
(79, 70, '匿名', '我来凑字数\r\n', '2017-06-21 11:23:33'),
(80, 70, '月三星', '我来凑字数', '2017-06-21 11:24:07'),
(81, 79, '匿名', '哈哈', '2017-06-21 11:31:16'),
(84, 70, '月三星', 'haha', '2017-06-23 05:30:50'),
(86, 70, '匿名', '啊哈', '2017-06-23 07:52:23'),
(87, 70, '月三星', '哈哈', '2017-06-23 07:56:55');

-- --------------------------------------------------------

--
-- 表的结构 `tb_public`
--

CREATE TABLE `tb_public` (
  `id` int(4) NOT NULL,
  `title` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `content` varchar(200) CHARACTER SET gb2312 NOT NULL,
  `pub_time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tb_public`
--

INSERT INTO `tb_public` (`id`, `title`, `content`, `pub_time`) VALUES
(1, '那些流浪的人，注定寂寞', '心中有爱，看世界的眼睛，才会纯净。', '2016-07-16'),
(2, '年少的无知', '轻狂那些难得的温柔。', '2016-07-16');

-- --------------------------------------------------------

--
-- 表的结构 `tb_tpsc`
--

CREATE TABLE `tb_tpsc` (
  `id` int(10) NOT NULL,
  `tpmc` varchar(30) CHARACTER SET gb2312 NOT NULL,
  `file` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `author` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `scsj` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tb_tpsc`
--

INSERT INTO `tb_tpsc` (`id`, `tpmc`, `file`, `author`, `scsj`) VALUES
(7, '野菊', 'userimage/1.jpg', '月三星', '2016-07-16'),
(6, '心得梦想', 'userimage/2.jpg', '月三星', '2016-07-16'),
(8, 'dream', 'userimage/3.jpg', 'Y.', '2016-07-16'),
(9, '彩虹之巅', 'userimage/4.jpg', 'Y.', '2016-07-16'),
(10, '丘陵地带', 'userimage/5.jpg', 'Y.', '2016-07-16'),
(11, '白云朵朵', 'userimage/6.jpg', 'Y.', '2016-07-16'),
(21, '', 'pacture/201706231024364586.jpg', '月三星', '0000-00-00');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(20) NOT NULL,
  `regname` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `regrealname` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `regpwd` varchar(40) CHARACTER SET gb2312 NOT NULL,
  `regbirthday` date NOT NULL DEFAULT '0000-00-00',
  `regemail` varchar(100) CHARACTER SET gb2312 NOT NULL,
  `regcity` varchar(100) CHARACTER SET gb2312 DEFAULT NULL,
  `regsex` varchar(4) CHARACTER SET gb2312 DEFAULT NULL,
  `regqq` varchar(40) CHARACTER SET gb2312 DEFAULT NULL,
  `regsign` varchar(200) CHARACTER SET gb2312 DEFAULT NULL,
  `regintroduce` mediumtext CHARACTER SET gb2312,
  `fig` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `regname`, `regrealname`, `regpwd`, `regbirthday`, `regemail`, `regcity`, `regsex`, `regqq`, `regsign`, `regintroduce`, `fig`) VALUES
(38, 'Y.', '萌奇奇', 'e10adc3949ba59abbe56e057f20f883e', '1996-09-18', 'enci@cc', '', '保密', '1092507480', '爱过笑过哭过伤过痛过，最后一人过', '笑面人生', 1),
(37, '花开一季变成熟', '袁莉', 'e10adc3949ba59abbe56e057f20f883e', '1995-04-13', 'vnsnd@163.com', '河北', '女', '', '', '', 1),
(36, 'sir', '学文', 'e10adc3949ba59abbe56e057f20f883e', '1995-08-08', 'foqjfofo@163.com', '辽宁鞍山', '男', '486546461', '一个人，一场梦', '世界那么大，我想去看看', 1),
(35, '张浩牛', '张浩楠', 'e10adc3949ba59abbe56e057f20f883e', '1995-04-12', 'fnlnv@163.com', '辽宁铁岭', '男', '', '养牛的咋了？', '大家好，我是浩牛', 1),
(33, '好儿郎', '好儿郎', 'e10adc3949ba59abbe56e057f20f883e', '1995-05-11', '247159408@qq.com', '河南河口', '男', '247159408', '我想要怒放的生命', '我想要怒放的生命，就像飞翔在辽阔天空，为了梦自由翱翔的好儿郎', 1),
(34, '月三星', '月三星', 'e10adc3949ba59abbe56e057f20f883e', '1995-11-09', '765654646@qq.com', '安徽', '女', '765654646', 'its not because things are difficult that we do not dare that things are difficult', '阳光帅气的大男孩', 1),
(32, 'loser', '呔子', 'e10adc3949ba59abbe56e057f20f883e', '1995-09-29', 'qpalza@163.com', '辽宁大连', '男', '745976932', '我还是我，不曾改变', '没有什么能将我们改变，改变我们的只能是我们的内心，心若向阳，无谓悲伤', 1),
(42, 'yueqing', 'yue', 'b358b87d575b1d193eaec793946ecc0c', '1995-05-05', 'yue@qq.com', '', '2', '', '', '', 1),
(43, '哈哈', '哈哈', 'e10adc3949ba59abbe56e057f20f883e', '1995-11-11', 'yue11@qq.com', '', '1', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_article`
--
ALTER TABLE `tb_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_filecomment`
--
ALTER TABLE `tb_filecomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_public`
--
ALTER TABLE `tb_public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tpsc`
--
ALTER TABLE `tb_tpsc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_article`
--
ALTER TABLE `tb_article`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- 使用表AUTO_INCREMENT `tb_filecomment`
--
ALTER TABLE `tb_filecomment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- 使用表AUTO_INCREMENT `tb_public`
--
ALTER TABLE `tb_public`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `tb_tpsc`
--
ALTER TABLE `tb_tpsc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

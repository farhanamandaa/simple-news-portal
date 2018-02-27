-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 03:02 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelartikel`
--

CREATE TABLE `tabelartikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `tanggal_artikel` datetime NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelartikel`
--

INSERT INTO `tabelartikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `tanggal_artikel`, `id_kategori`) VALUES
(16, '4 Hero Support Terbaik di Mobile Legend', '<p><strong>GameNews</strong> -&nbsp;Hero Support memang sangat dibutuhkan dalam setiap game MOBA. Bagaimana tidak, dengan ada nya support ini dapat membantu kamu dalam match.</p>\r\n\r\n<p>Skill-skill yang dimilikinya pun juga sangat penting. Nah, pada artikel ini saya akan bahas Hero-Hero Support dan Skillnya yang dapat membantu kamu dalam match game.</p>\r\n\r\n<h1>Hero Support</h1>\r\n\r\n<h3><strong>Pertama: Estes &ndash; Blessing of Moon Goddess</strong></h3>\r\n\r\n<p>Yap, siapa yang tidak tahu hero yang satu ini. Hero ini benar-benar hard support, apalagi kalau dia menggunakan skill&nbsp;Blessing of Moon Goddess pada saat war. Skill ini benar-benar sangat menguntungkan jika satu team dengan Estes. Bagaimana tidak, jika Estes menggunakan skill ini. Maka satu team yang dekat dengan Estes, maka akan ter-heal HPnya. Apalagi kalau sekaligus ber-barengan menggunakan skill&nbsp;Moonlight Immersion untuk heal sang MarksMan atau Fighter, dijamin kamu bakalan menang war!</p>\r\n\r\n<h3><strong>Kedua: Rafaela &ndash;&nbsp;Holy Healing</strong></h3>\r\n\r\n<p>Selain Estes, ada juga Rafaela. Dengan skill&nbsp;Holy Healing-nya ini, Rafaela dapat sangat membantu pada saat war, juga pada saat mengejar musuh yang mencoba kabur pada saat war.</p>\r\n\r\n<h3><strong>Ketiga: Nana &ndash;&nbsp;Dragon Cat Summons</strong></h3>\r\n\r\n<p>Ada juga Nana, dengan skill&nbsp;Dragon Cat Summons ini kalau war dan musuh&nbsp;<em>berdempetan</em>. Nana akan sangat mudahnya melompatkan musuh secara bersamaan, lalu dibarengi dengan combo dalam teamnya. Sangat menguntungkan sekali!</p>\r\n', '2017-10-17 11:32:04', 1),
(17, 'Begini Tampilan Baru Map Nuke CS:GO ', '<p><strong>INIGAME.ID -&nbsp;</strong>Valve tampaknya sedang melakukan&nbsp;<em>marathon</em>&nbsp;selama beberapa waktu belakangan ini.</p>\r\n\r\n<p>Selain menghadirkan&nbsp;<a href=\"https://www.inigame.id/competitive-mode-beta-team-fortress-2-cabang-esports/\" target=\"_blank\"><strong><em>competitive mode</em>&nbsp;untuk Team Fortress 2</strong></a>,&nbsp;<strong><a href=\"https://www.inigame.id/spesifikasi-pc-htc-vive/\" target=\"_blank\">SteamVR untuk HTC Vive</a></strong>, dan&nbsp;pengembangan Left 4 Dead 3 dan Half-Life 3 (jika isunya benar), mereka baru-baru ini menghadirkan&nbsp;<em>update</em>&nbsp;terbaru untuk CS:GO Workshop.</p>\r\n\r\n<p>Seperti yang dapat&nbsp;<em>gamers</em>&nbsp;lihat di atas,&nbsp;<em>update</em>&nbsp;ini telah diimmplementasikan di salah satu&nbsp;<em>map</em>,&nbsp;Nuke&mdash;yang kini terlihat lebih bersih dan halus.</p>\r\n\r\n<p>Lalu, sebenarnya apa yang dihadirkan Valve dalam&nbsp;<em>update</em>&nbsp;terbarunya ini?</p>\r\n', '2017-10-18 10:22:25', 2),
(28, 'FINAL FANTASY XIV ANNOUNCES FEAST SEASON 5 REWARDS', '<p>PvP? In&nbsp;<em>my</em>&nbsp;Final Fantasy XIV ? It may be more likely than you think - get a FREE PvP Scan Today!</p>\r\n\r\n<p>Memes aside, FFXIV isn&#39;t really known for its PvP. The game has a strong story, beautiful music, fun fights in the form of Raids and Trials, but a sorely lacking PvP scene. That won&#39;t stop Square Enix from really pushing its PvP, however, as referenced by the fact that its 5th season of competitive PvP - &quot;The Feast&quot; comes to a close - and&nbsp;<a href=\"https://na.finalfantasyxiv.com/lodestone/ranking/thefeast/reward/5/solo/\" target=\"_blank\">its rewards have been announced</a>! And boy, do they look beautiful.</p>\r\n\r\n<p>The top 100 players per Datacenter will get this new PvP-Exclusive &quot;Hellhound&quot; Armor Set. Additionally, the top 10 players per Datacenter will get a chance to get an exclusive weapon of their choice! I&#39;m partial towards the Warrior PvP Reward weapon myself.</p>\r\n\r\n<p>And, of course, the top player per datacenter will receive an exclusive housing item - a trophy, fitting of their place as the top PvP&#39;er on the entire Datacenter.</p>\r\n\r\n<p>Season 5 of The Feast comes to a close when Patch 4.15 arrives, meaning there is only a bit more time before the Feast ends! If you are close to being in the Top 100, Top 10, or heck, even the Top player on your datacenter - get at it and secure your rewards before someone overtakes you!</p>\r\n', '2017-10-18 11:51:41', 3),
(30, 'Vainglory 2.9 Unleashes the Churnwalker onto the Halcyon Fold', '<p>Earlier this week, the folks over at Super Evil Megacorp released the latest update to their mobile MOBA,&nbsp;<em>Vainglory</em>&nbsp;In addition to the requisite balance changes to heroes, items, and talents, Version 2.9 sees the release of new skins (including Halloween themed ones), new items, significant changes to vision, and the launch of the newest hero the Churnwalker.</p>\r\n\r\n<p>From an items standpoint, Version 2.9 debuts both the Dragon&rsquo;s Eye and Spellfire. The Dragon&rsquo;s Eye replaces the old Broken Myth&rsquo;s passive amplification (which is now gone) while Spellfire allows abilities to deal crystal damage over time. The entire Crystal tree has also been revamped with an emphasis towards focused items.</p>\r\n', '2017-10-18 10:19:26', 1),
(31, 'PUBG Update Adds Vaulting And Climbing To Test Servers Soon', '<p>While there may only be 11 weeks remaining in 2017, PUBG&nbsp;is still slated to release in full for PC&nbsp;and in Xbox One&#39;s Game Preview program by the end of this year. Today, developer Bluehole shared an update that gives fans a rough outline of its development plans heading toward launch.</p>\r\n\r\n<p>In a post on the Steam forums, Bluehole offered more details about the new features it is readying to add to the enormously popular battle royale game when it releases on PC and in Game Preview. In addition to a&nbsp;<a href=\"https://www.gamespot.com/articles/new-pubg-map-image-shows-off-desert-location/1100-6452821/\">brand-new desert map</a>, the developer is currently working on adding climbing and vaulting. However, as those two features will have a significant impact on the gameplay, Bluehole says they need to be tested &quot;for at least a month&quot; before they go live.</p>\r\n\r\n<p>&quot;The content and features that will be in test servers need to be tested for at least 2 to 4 weeks,&quot; Bluehole said. &quot;It will be very difficult for us to provide a stable service if we rush updates to live servers after short bursts of testing. As we would like to go through rigorous testing to prepare for official launch, we will not be updating new content to live servers and run test servers for a longer period of time instead.&quot;</p>\r\n\r\n<p>Bluehole says players will be able to try out the vaulting and climbing mechanics &quot;in late October or early November.&quot; Prior to that, the developer will release a &quot;small&quot; patch to live servers this week, which will be the final one before the developer starts rolling out test servers to prepare for PUBG&#39;s official launch. You can find the patch notes for that update below.</p>\r\n\r\n<h3>PUBG Update Patch Notes</h3>\r\n\r\n<p><strong>Gameplay</strong></p>\r\n\r\n<ul>\r\n	<li>Decreased the Starting Island item spawn levels in order to adjust the item balance on the Northeast side of Erangel</li>\r\n</ul>\r\n\r\n<p><strong>Bug Fixes</strong></p>\r\n\r\n<ul>\r\n	<li>Eliminated the fire animation and effect that occured in the Starting Airplane when a player was on fire from a molotov cocktail</li>\r\n	<li>Fixed a bug that enabled a character to hold a main weapon and frying pan simultaneously</li>\r\n	<li>Fixed a spectator mode bug of flickering weapon UI icons</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-10-23 11:01:58', 2),
(35, 'Si Penembak Jitu Lesley Ramaikan Mobile Legends', '<p><strong>Jakarta</strong>&nbsp;- Seperti yang kita ketahui, advanced server Mobile Legends kerap kedatangan hero baru setiap minggunya. Lepas merilis Fasha, kini sudah muncul kembali hero baru bernama Lesley.<br />\r\n<br />\r\nDari informasi yang tertera, Lesley disebut sebagai seorang sniper atau penembak jitu. Berbekal senjata laras panjang, Lesley masuk dalam kelas Marksman.<br />\r\n<br />\r\nUntuk sementara hero ini masih tersedia di advanced server dan belum dirilis di server publik. Bagi yang penasaran, Anda bisa menjajal hero ini dengan merogoh kocek 32.000 battle point atau 599 diamond.<br />\r\n<br />\r\nBicara perawakan, Lesley adalah seorang wanita dengan rambut panjang terikat berwarna ungu sedikit pink. Matanya pun ditutup sebelah, entah mungkin ini dimaksudkan agar ia bisa membidik sasaran lebih tepat lagi.</p>\r\n\r\n<p>Tidak seperti Marksman lainnya, Lesley bertarung tidak menggunakan mana. Ia seperti halnya Fany, mengandalkan energy untuk mengerahkan skill, yang terdiri dari satu skill pasif dan tiga skill aktif.<br />\r\n<br />\r\nSkill pasifnya bernama Lethal Shoot memungkinkan ia menembak musuh dengan sebuah peluru. Jika peluru tersebut mengenai musuh, maka ia akan mendapatkan lima energy. Bilamana ia tidak menerima damage dari musuh selama lima detik, maka jangkauan tembakannya akan meluas dan memberikan 1,5x damage.<br />\r\n<br />\r\nSkill aktif pertama bernama Master of Camouflage. Skill ini mirip-mirip seperti skill Miya atau Natalia. Dengan mengaktifkan skill ini maka Lesley akan menghilang selama lima detik. Kecepatannya bertambah 30% dan physical attack naik 50 poin. Walau begitu, Lesley masih tetap akan terkena damage di mode ini.</p>\r\n', '2018-01-05 08:22:06', 1),
(32, 'Black Desert Online celebrates Halloween', '<p>Starting next week, the skies of Black Desert Online will be illuminated with an eerie blood red moon and jack-o&rsquo;-lanterns will light the misty town streets. The Halloween event begins as adventurers encounter the White Witch who asks them to defeat the Black Witch. Players gain special items from this daily-quest just for this special occasion. Central hubs like Velia, Heidel, Valencia and Calpheon will receive a festive Halloween makeover that oozes the spooky atmosphere. New this year is the Alice in Wonderland theme that welcomes props like the Mad Hatter&rsquo;s famed tea party furnitures.</p>\r\n\r\n<p>Brand new 2017 Halloween-themed fashion items including the Angelic Queen and Demonic Queen outfits, will be released for this year&rsquo;s event. Players can also give their horse a scary look with the Skeletal Horse Set. The popular Halloween pets Neurotic Cabby and Witch Hat Charlotte are making a welcome return. Scarecrow Masks will be obtainable throughout this event so that you can do your in-game trick-or-treating in style.</p>\r\n\r\n<p>For more information on the Halloween events keep your eyes peeled on the <a href=\"https://theblackdesertonline.us11.list-manage.com/track/click?u=6ed020199cadbf80bf108c066&amp;id=f10709bf9b&amp;e=7b1d1550c8\">official website</a>&nbsp;where more scary information will be revealed next week.</p>\r\n', '2017-10-18 10:45:13', 3),
(33, 'Garena to launch Arena of Valor in PH', '<p>Sea Group&rsquo;s digital entertainment platform Garena announced its first dive into the local mobile multiplayer online battle arena (MOBA) scene with a promised launch for&nbsp;<em>Arena of Valor</em>&nbsp;(AOV) in the Philippines.</p>\r\n\r\n<p>Filipino players can now&nbsp;<a href=\"https://moba.garena.com/\">pre-register</a>&nbsp;for AOV, a popular 5v5 mobile MOBA game jointly developed by Garena and Tencent Games.</p>\r\n\r\n<p>AOV was first launched in Taiwan in October 2016 and has since been released in Thailand, Vietnam, and Indonesia.</p>\r\n\r\n<p>he game is expected to be released in the Philippines in October.</p>\r\n\r\n<p>According to Garena, players will be able to get up to 14 permanent heroes for free upon release.</p>\r\n\r\n<p>&ldquo;We are excited to launch&nbsp;<em>Arena of Valor</em>&nbsp;in the Philippines as Asia represents a multi-billion dollar gaming industry with 80% of its gamers playing mobile games,&rdquo; Country Manager for Garena Philippines Jan Frederic Chiong said.</p>\r\n\r\n<p>He added, &ldquo;As a game publisher, Garena has spearheaded various top-tier titles across Southeast Asia to great effect. As we welcome the latest addition to our growing list, we aim for AOV to be positioned as the best mobile experience for gamers in the Philippines.&rdquo;</p>\r\n', '2017-10-18 10:47:32', 1),
(34, 'Valve opens Dota 2 community broadcasting', '<p><strong>Valve</strong>&nbsp;has taken a significant step in helping serve its fan base by clarifying its stance around community broadcasting for&nbsp;<strong>Dota 2</strong>.</p>\r\n\r\n<p>In a statement released on the official Dota 2 blog earlier this week, Valve stated that in addition to streams produced by tournament organisers, they believe that &ldquo;anyone should be able to broadcast a match from DotaTV for their audience&rdquo;. This new rule allows popular streamers such as Henrik &ldquo;<strong>AdmiralBulldog</strong>&rdquo; Ahnberg&nbsp;and Grant &ldquo;<strong>GrandGrant</strong>&rdquo; Harris an avenue to show competitive games on their channels, but the change does come with some additional stipulations.</p>\r\n\r\n<p>Valve&rsquo;s first rule is that amateur streams don&rsquo;t broadcast &ldquo;in a commercial manner or in a way that directly competes with the tournament organizer&rsquo;s stream&rdquo;. That means no additional advertising (such as overlays), and no sponsorships. It&rsquo;s a sensible move, providing official tournament sponsors with protection from misuse or third-party conflicts of interest. It does, however, seem to leave streamers open to donations and Twitch subscriptions, which will still allow for personalities to monetise their streams.</p>\r\n\r\n<p>Potential broadcasters should note that the Dota 2 event calendar for 2018 has started filling out, with ESL&nbsp;<a href=\"http://www.esportsinsider.com/2017/10/esl-one-dota-2-returns-genting-malaysia-400000-grabs/\">announcing</a>&nbsp;their first event for the upcoming year. Classed as a minor, it will take place in Malaysia from the 23rd-28th of January, and the tournament will see $400,000 (&pound;304,000) alongside 400 qualifying points for The Invitational up for grabs.</p>\r\n\r\n<p>Esports Insider says: It&rsquo;s rather disarming to see a developer take&nbsp;a lax and sensible approach to tournament broadcasting, and this should be a net positive for the Dota 2 community. Amateur casters looking to make their mark should definitely take the opportunity to benefit from this rule clarification.</p>\r\n', '2017-10-18 11:52:12', 1),
(42, 'Tes edits Gambar lagi', '<p>Tes edit tanpa editÂ Gambar</p>\r\n', '2018-01-22 03:11:20', 3),
(48, 'dfd', 'dfd', '2018-01-22 03:12:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabelgambar`
--

CREATE TABLE `tabelgambar` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelgambar`
--

INSERT INTO `tabelgambar` (`id_gambar`, `nama_gambar`, `lokasi`, `id_artikel`) VALUES
(22, '3172930-trailer_blackdesert_awakening_20161221.jpg', 'img/3172930-trailer_blackdesert_awakening_20161221.jpg', 32),
(12, 'CSGO.jpg', 'img/CSGO.jpg', 17),
(11, 'maxresdefault.jpg', 'img/maxresdefault.jpg', 16),
(21, 'pubg-total-player-killcount-and-other-crazy-stats_ukg9.jpg', 'img/pubg-total-player-killcount-and-other-crazy-stats_ukg9.jpg', 31),
(19, '1355988572_0.jpg', 'img/1355988572_0.jpg', 28),
(20, 'VG.jpg', 'img/VG.jpg', 30),
(23, 'aov.jpg', 'img/aov.jpg', 33),
(24, 'Dota-3-1.jpg', 'img/Dota-3-1.jpg', 34),
(25, 'lesley.jpg', 'img/lesley.jpg', 35),
(26, '513204_bdca5a52-6c00-4b51-b62e-8803dba4aee6.jpg', '513204_bdca5a52-6c00-4b51-b62e-8803dba4aee6.jpg', 39),
(31, '1.jpg', '1.jpg', 44),
(29, '1.jpg', 'img/1.jpg', 42),
(32, '2.jpg', '2.jpg', 45),
(34, 'simbol DFD.jpg', 'simbol DFD.jpg', 47),
(35, 'Diagram+dekomposisi.jpg', 'Diagram+dekomposisi.jpg', 48);

-- --------------------------------------------------------

--
-- Table structure for table `tabelkategori`
--

CREATE TABLE `tabelkategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelkategori`
--

INSERT INTO `tabelkategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'MOBA'),
(2, 'FPS'),
(3, 'MMORPG');

-- --------------------------------------------------------

--
-- Table structure for table `tabelkomentar`
--

CREATE TABLE `tabelkomentar` (
  `id_komentar` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_komentar` datetime NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelkomentar`
--

INSERT INTO `tabelkomentar` (`id_komentar`, `isi_komentar`, `tanggal_komentar`, `nama_user`, `id_artikel`) VALUES
(1, 'asf', '2017-10-26 01:53:21', 'asfas', 34),
(2, 'Tes', '2017-10-27 04:08:42', 'Farhan', 32),
(3, 'Hutapea', '2017-10-27 04:16:43', 'Andi', 32),
(4, 'Good', '2017-10-27 04:46:53', 'Bagus', 31),
(5, 'bodo', '2017-11-20 12:47:29', 'masa', 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(5, 'admin', '$2y$10$7VPpEVcMqQ1tNn4wWBqizetrGFiv2k7ggt/amDocKkM0rU4Pzr2r6', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelartikel`
--
ALTER TABLE `tabelartikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tabelgambar`
--
ALTER TABLE `tabelgambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tabelkategori`
--
ALTER TABLE `tabelkategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelartikel`
--
ALTER TABLE `tabelartikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tabelgambar`
--
ALTER TABLE `tabelgambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tabelkategori`
--
ALTER TABLE `tabelkategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

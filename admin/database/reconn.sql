-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 06:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reconn`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(40) NOT NULL,
  `about_pic` text NOT NULL,
  `about_description` text NOT NULL,
  `about_designation` varchar(500) NOT NULL,
  `about_role` text NOT NULL,
  `about_name` varchar(500) NOT NULL,
  `about_status` varchar(40) NOT NULL,
  `about_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_pic`, `about_description`, `about_designation`, `about_role`, `about_name`, `about_status`, `about_date`) VALUES
(19, '9b56cf5d4620cf404ba828f28a561b5d.jpg', '<p>test description 2</p>', 'Executive Board', 'Principal Advisor', 'Gregory J. Stevens', '1', '2020-06-26'),
(24, '85000779ed40d3026d487cbc093ca858.jpg', '<p>Mr Alghusain is an accomplished executive with extensive experience in banking and investment management.He has vast knowledge and understanding of global affairs that has been built over 40 years, at local and international levels. His career has spanned a wide range of activities including execution of investment projects, investors,networking, advisory consultations, strategic planning, team development, and international business.<br></p>', 'Executive Board', 'Deputy CEO', 'Yousef A.N. Alghusain', '1', '2020-06-26'),
(25, '5e0a75bec28b7d5e422361461ecf7bda.jpg', '<p>DVDZCXCCZ</p>', 'Executive Board', 'Founder & CEO ', 'Abdulaziz Al-Anjeri', '1', '2020-06-26'),
(26, '1e90861899759c2ff14280a1cc17ca00.jpg', '<p>Col. David Des Roches&nbsp;is an associate professor at the Near East South Asia Center for Strategic Studies at the National Defense University.<br></p>', 'U.S.Advisory Board', 'member', 'Dave Des Roches', '1', '2020-06-26'),
(27, 'e1342d8b7b23daaf3ca456e12b425783.jpg', '<p>is the Founding President and Chief Executive Officer of the National Council on U.S.-Arab Relations.<br></p>', 'U.S.Advisory Board', 'member', 'Dr. ?John Duke Anthony', '1', '2020-06-26'),
(28, '864f0a23ae23ccd5908b889ba2605f8e.jpg', '<p>is Director of the Scowcroft Middle East Security Initiative at the Atlantic Council where she leads the security pillar within the Middle East programs.<br></p>', 'U.S.Advisory Board', 'member', 'Kirsten Fontenrose', '1', '2020-06-26'),
(29, 'b59b8bb9579075c9c5e03a65c53c76fd.jpg', '<p>Executive Vice President &amp;amp; Director of Development of the National Council on U.S.-Arab Relations.<br></p>', 'U.S.Advisory Board', 'member', 'Patrick Mancino', '1', '2020-06-26'),
(30, 'c650ef015d42282f9f18b2cce0f31fae.jpg', '<p>test</p>', 'Kuwait Advisory Board', 'member', 'Adnan Abdulaziz Al-Bahar', '1', '2020-06-27'),
(31, '200c35b7106656eeeae2f55e9f3b5474.jpg', '', 'Kuwait Advisory Board', 'member', 'Dr. Ali Al-Tarrah', '1', '2020-06-27'),
(32, '5acea146ca367e1b7671f2f785571507.jpg', '', 'Kuwait Advisory Board', 'member', 'Ali Al Zalzalah', '1', '2020-06-27'),
(33, 'd1b5b788c4ab4a7059bd0d97b53a07ce.jpg', '', 'Kuwait Advisory Board', 'member', 'Hussam Ali Marafi', '1', '2020-06-27'),
(34, 'f63b1ed00ca931419bf612714680bc31.jpg', '', 'Kuwait Advisory Board', 'member', 'Sheikh / Khalifa bin Hamad Al Khalifa', '1', '2020-06-27'),
(35, '437726be94f40736c35f1279fba81374.jpg', '', 'Kuwait Advisory Board', 'member', 'Madi Al Khamees', '1', '2020-06-27'),
(36, 'c61413978ef3be29c06d8f236c1ea1d1.jpg', '', 'Kuwait Advisory Board', 'member', 'Marzouq Khaled Boodai', '1', '2020-06-27'),
(37, 'a631d394bff3fd2b08944bc33a716e3d.jpg', '', 'Kuwait Advisory Board', 'member', 'Qais Abdullah AlJoan', '1', '2020-06-27'),
(38, '440b18ecb7dc1be5eada8bfe71b5a153.jpg', '', 'Kuwait Advisory Board', 'member', 'Talal Khalid AlNisf', '1', '2020-06-27'),
(39, '37b5e3d4cc52668402da7c12cc428e69.jpg', '', 'Kuwait Advisory Board', 'member', 'Yousef Abdulaziz AlQatami', '1', '2020-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `about_whatwedo`
--

CREATE TABLE `about_whatwedo` (
  `whatwedo_id` int(40) NOT NULL,
  `whatwedo_vision` text NOT NULL,
  `whatwedo_knowhow` text NOT NULL,
  `whatwedo_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_whatwedo`
--

INSERT INTO `about_whatwedo` (`whatwedo_id`, `whatwedo_vision`, `whatwedo_knowhow`, `whatwedo_date`) VALUES
(1, 'Reconnaissance Research is dedicated to strengthening Kuwait’s role as a constructive international mediator on both a regional and global scale. We aim to promote peace and prosperity in the Gulf and beyond through open discussions, independent thought, and targeted expertise. By facilitating calm discussions on challenging issues, Reconnaissance Research seeks to shape a more open and more engaged world.', 'The Center relies on several mechanisms such as seminars, assigning writers to produce articles in their field of expertise as well as organizing workshops in cooperation with various research entities in the world, NGO’s as well as private advocacy groups.nel', '2020-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articles_id` int(40) NOT NULL,
  `articles_title` varchar(1000) NOT NULL,
  `articles_date` date NOT NULL,
  `articles_pic` text NOT NULL,
  `articles_desc` text NOT NULL,
  `articles_status` varchar(40) NOT NULL,
  `articles_insdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articles_id`, `articles_title`, `articles_date`, `articles_pic`, `articles_desc`, `articles_status`, `articles_insdate`) VALUES
(1, 'cv', '0000-00-00', '', 'cvc', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_mail1` varchar(50) NOT NULL,
  `contact_mail2` varchar(50) NOT NULL,
  `contact_phone1` varchar(25) NOT NULL,
  `contact_phone2` varchar(25) NOT NULL,
  `contact_msg` text NOT NULL,
  `contact_fax` varchar(25) NOT NULL,
  `contact_address` varchar(1000) NOT NULL,
  `contact_locationsrc` text NOT NULL,
  `contact_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_mail1`, `contact_mail2`, `contact_phone1`, `contact_phone2`, `contact_msg`, `contact_fax`, `contact_address`, `contact_locationsrc`, `contact_date`) VALUES
(1, 'dfg', 'g@h.in', 'e@g.com', '345455', '5464546', 'fdgdfgdfgfgfgfghghghhjjkljklklk', 'saf@', 'dfdgfnew', 'src', '0000-00-00'),
(2, 'fgnamenew', 'bg@e.in', 'h@w.in', '43533434', '34343', 'fqwerrtytyuu', 'hfjuy', 'yffddss', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `forums_id` int(40) NOT NULL,
  `forums_title` varchar(1000) NOT NULL,
  `forums_date` date NOT NULL,
  `forums_pic` text NOT NULL,
  `forums_desc` text NOT NULL,
  `forums_status` varchar(40) NOT NULL,
  `forums_insdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`forums_id`, `forums_title`, `forums_date`, `forums_pic`, `forums_desc`, `forums_status`, `forums_insdate`) VALUES
(4, 'Coronavirus and the<br>\r\nGulf Economies', '2020-04-09', 'c54fa3f5b606f097992f9667f8f97983.jpg', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">9th April 2020</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">On Thursday, April 9, Reconnaissance Research and the Atlantic Council, a prominent foreign policy think tank in Washington, hosted a virtual event, “<a href=\"https://www.atlanticcouncil.org/event/coronavirus-and-the-gulf-economies/\" style=\"box-sizing: border-box; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition-property: background, box-shadow, border, color, opacity, transform; transition-duration: 0.3s; color: rgb(153, 153, 153); outline: none !important;\">Coronavirus and the Gulf Economies</a>.” Of the 200 people who viewed the event, 75 were from the United States, 53 were from Kuwait, and 39 were from the United Arab Emirates. The rest were from the broader Middle East, Europe, or elsewhere around the world.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><strong style=\"box-sizing: border-box;\">Kirsten Fontenrose</strong>, Director of the Scowcroft Middle East Security Initiative at the Atlantic Council and Member of Reconnaissance Research’s US Advisory Board, moderated the discussion, which featured remarks by&nbsp;<strong style=\"box-sizing: border-box;\">Nawaf Al-Abduljader</strong>, Professor of Management at Kuwait University;&nbsp;<strong style=\"box-sizing: border-box;\">Jonathan Fulton</strong>, Nonresident Senior Fellow at the Atlantic Council and Professor of Political Science at Bin Zayed University in Abu Dhabi;&nbsp;<strong style=\"box-sizing: border-box;\">Mohsin Khan</strong>, Nonresident Senior Fellow at the Atlantic Council and former Middle East and Central Asia Director at the International Monetary Fund; and&nbsp;<strong style=\"box-sizing: border-box;\">Saud Asaad Al-Thaqeb</strong>, Assistant Professor of Finance at Kuwait University.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><strong style=\"box-sizing: border-box;\">How can the Gulf deal with falling oil prices?</strong></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">A key economic consequence of the coronavirus pandemic has been the collapse in the price of oil. This is of particular concern to the largely oil-dependent Gulf states. According to Khan, governments in the Gulf must be prepared for the short- and long-term consequences of collapsing oil prices.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Demand has already dropped sharply, with fuel consumption falling 20 to 30 percent over the past month. Even without the ongoing price war between Russia and Saudi Arabia, the fall in global demand would inevitably lead to falling oil prices. This has caused, Khan noted, a fall in Oil GDP that has created a ripple effect in non-oil sectors in the Gulf states. While most labor is employed in non-oil sectors, oil drives the entire economy. Any shocks to the oil sector will have extremely negative consequences elsewhere. Namely, there will be a sharp decline in non-oil GDP, increasing unemployment, increasing bankruptcies, and increasing bank loan defaults. As a result, the Gulf states may face a full-fledged financial crisis.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Khan outlined several approaches governments can use to mitigate these potentially disastrous consequences. One is a massive increase in government spending in the form of grants, loans to the private sector, and unemployment protection. While Bahrain and Oman are especially well-suited to do this, other Gulf states have the resources. It is possible to tap into sovereign wealth funds and central banks with large assets. Another approach is to support liquidity. Should banks collapse, disaster could follow. So far, the Gulf states have not been doing this or they have only done it little by little. Unless they support liquidity, the imminent economic recession could become a long-lasting depression.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">One point of mild disagreement: Al-Thaqeb agreed that some sovereign wealth funds are very illiquid. But he noted that many assets are in fact liquid and that of the $2.2 trillion in sovereign wealth funds, a considerable chunk is liquid.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><strong style=\"box-sizing: border-box;\">Structural reforms are essential</strong></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Al-Thaqeb also stressed that structural economic reforms must be pursued. Along with high deficits, the Gulf economies will have chronic imbalance as well as unsustainable fiscal policies. In light of declining oil prices, the debt to GDP ratio is expected to reach an all-time high. Within the GCC, it is expected that more countries will have to accrue more debt to cover these deficits.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Kuwait presents a particular case. Over 80 percent of its budget is inflexible – a large portion of this comes from public-sector wages. Dependency on government spending is immense, not only for employment but also for services like healthcare and education and subsidies.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The bottom line, Al-Thaqeb said, is that these economic policies are unsustainable and that the Gulf states are at an inflection point. Essential questions must be posed. What are the roles and responsibilities of the government, the people, the private sector, and the public sector? How can they work together to forge a new economic identity? The Gulf states must also draw up a workable economic strategy that includes fighting corruption and reducing wasteful spending. This is a marathon, not a sprint. Reforming the economy will take time, but it is necessary for long-term prosperity.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><strong style=\"box-sizing: border-box;\">Entrepreneurship: A way ahead</strong></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">In the view of Al-Abduljader, the coronavirus pandemic presents opportunities, not just challenges, for entrepreneurship. Firms have closed and will continue to do so, yet the economic upheaval will make the Gulf economies rethink their approach toward free enterprise. In the GCC, small and medium-sized enterprises (SMEs) add very little to employment and GDP despite accounting for 90 percent of all firms. For instance, they represent only 20 percent of GDP in Saudi Arabia and just 2 percent of GDP in Kuwait. Furthermore, they mostly employ foreign labor and contribute less than 10 percent of total national employment.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Though SMEs have not had a significant impact in the Gulf, the trend shows that they have had a growing role. The coronavirus pandemic may accelerate the rise of entrepreneurship. When large companies fail, small ones normally step in.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Al-Abduljader pointed out that governments should encourage, not impede, SMEs at this difficult time for the economy. They should increase access to financing for SMEs because the more one lends, the more contributes to GDP. The issue is not the availability of capital. It’s about access to that capital. Though there has been some success in creating more equal opportunity for wealth, the GCC has generally struggled to generate new markets. Governments should discard their risk averse mindset by encouraging more risk in investments as new firms are the primary source of job creation. The government should articulate and work toward a clear goal in this regard.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><strong style=\"box-sizing: border-box;\">Repercussions from governments’ handling of the crisis</strong></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The speakers agreed that the governments in the Gulf should take away some important lessons from coronavirus. Khan mentioned how they have underestimated the public-health consequences of the pandemic. In particular, the condition of migrant laborers has been neglected. Improvements in their living conditions would correspond to improved public health. Overall, there should be greater investment in public-health infrastructure.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Al-Thaqeb mentioned the issue of trust. Even before coronavirus, there was a considerable lack of trust in government institutions due to corruption, among other reasons. Economic policies pursued by these governments also led to the large deficits we see now. However, the economic crisis presents a golden opportunity because GCC citizens have generally appreciated the responses of their governments to the pandemic and their successes in reducing the number of cases and deaths. The hope is that attitude reaches other activities of the state. Whether on economic policy or otherwise, the Gulf governments should communicate clearly and be transparent with their citizens. Accurate data and reliable information will do much to restore trust in the government and leading the way forward for reform.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><strong style=\"box-sizing: border-box;\">A new vision for vision plans?</strong></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The speakers’ comments also addressed vision plans in the Gulf. Al-Abduljader noted that Saudi Vision 2030 seeks to implement many of the policies suggested by the speakers. What is more, moments of crisis often provoke turning points when it comes to reforms. Implementing lasting and effective structural reforms may require working beyond 2030 in the case of Saudi Arabia. The risk is that this crisis may cause governments to plan for only the first year or year and a half, rather than the next decade. In Al-Abdulajder’s opinion, the Saudis will tackle the immediate economic fallout first before reverting to their comprehensive 2030 vision.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Al-Thaqeb said that the coronavirus may cause the Gulf states to reevaluate their vision plans. Different times may call for different answers. In any case, money should be spent wisely according to what can create jobs and add value to the economy.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">As for the Kuwait 2035 vision, there is a lack of public awareness about the plan. Few people, if any, can say what is in the plan or what its impact will be. Renewable energy could be a good sector to highlight, but clear messaging is critical. Al-Thaqeb also said that agriculture is not a promising sector as the highest agricultural costs worldwide are in the Gulf. Investments alone can cover food security. It is hard to see how developing agricultural sectors could help the Gulf economies.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><strong style=\"box-sizing: border-box;\">Are subsidies to be cut?</strong></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">In tough economic times, subsidies may be cut. Al-Abduljader mentioned several subsidies that could be the first to go, including gas, electricity, and food subsidies. But this is a difficult decision to make because citizens will have to accept to pay the price for governmental inefficiency. In Kuwait, subsidies along with salaries account for 70 percent of government expenditures, which even before the drop in oil prices were higher than revenues from oil. The question is how to pay these subsidies and salaries in the short-term.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Khan added that now is not the time to cut subsidies and raise taxes. The economic and social consequences would be too severe. When the government controls basically all the wealth, it is extremely difficult to take money from the population. Now is the time for governments to enact sensible reforms in order to pull themselves out of the imminent recession as quickly as possible.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><strong style=\"box-sizing: border-box;\">The China factor</strong></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Although the GCC’s traditional partner has been the United States, China has tremendously expanded its economic relationship with the Gulf in recent years. According to Fulton, Beijing has a consistent message for these countries: That China is reliable. Instead of alliances, China signs strategic partnerships abroad. Within the GCC, every state except Bahrain has a strategic partnership or a comprehensive strategic partnership with Beijing. The Chinese foreign ministry has recognized states that have assisted China with coronavirus in Wuhan, such as the United Arab Emirates. China is now assisting countries in the Gulf in terms of hospitals, ventilators, and best practices.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The geopolitical significance of all this is notable. For one, there is increasing awareness that China is a major player in the Gulf and the wider Middle East. In addition, the perception or reality that the United States is disengaging from the region makes China seem like an even more appealing partner. Beijing appears like a long-term patron, especially given its commitment to the Belt and Road Initiative. If Washington no longer needs or wants to play its traditional role in the Middle East, then the countries of the region will naturally look elsewhere. Many may see reactions by countries like the United States in the coronavirus crisis as a retreat from free trade and a return to mercantilism, so the conventional wisdom about open markets is now in question.</p>', '1', '2020-06-27'),
(5, 'Intellectual Property Rights for Kuwaiti Artists', '2020-02-17', '8d97f2241839a9997e3d3010ee37e536.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 20px;\">17th February 2020</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 20px;\"><br></span></p><p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Reconnaissance Research held a seminar entitled “Intellectual Property Rights for Artists” accompanied with a special art exhibition by Kuwaiti artists. The event was the first public speaking engagement for the U.S. Ambassador Alina L. Romanowski in Kuwait.</span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The seminar was held at the posh Den Gallery at Crystal Tower, in Kuwait City.</span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Founder &amp; CEO of Reconnaissance Research, Abdulaziz Al-Anjeri stressed in the event’s inaugural speech the immense importance of the role artists play in Kuwait’s culture, and the need for the Reconnaissance Center to continue the mission of shedding light on all issues concerning our country, whether in politics, economy, environment or arts &amp; culture. He noted that bringing art to the forefront is a societal necessity which prompted the centre to work towards facilitating the task of helping artists register their works. It is an ethically driven initiative that will have great impact on the society and its creatively driven energy and momentum. Protecting intellectual property and rights of Kuwaiti artists in all fields will definitely help them move forward in their paths being assured that their rights are properly preserved and protected.</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></p><p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The importance of the Copyright Act which has been recently passed by the Kuwaiti parliament in the summer of 2019 was explained in detail by the U.S. Intellectual Property Attaché for MENA at the U.S. Department of Commerce, Attorney Pete Mehravari. He highlighted the law’s most prominent articles which guarantee the protection of the rights of Kuwaiti artists in all fields.</span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">In her first public speaking engagement in Kuwait, U.S. Ambassador Alina L. Romanowski took the stage and gave the closing keynote speech of the event. Thanking both Reconnaissance Research and Den Gallery for organizing the event, she expressed her pleasure in attending an event that included topics of art, creativity and law in a harmonious way.</span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">She went on to stress the positive impact of laws that protect the rights of artists on investments and the economic environment.</span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The event was accompanied by an exhibition of works by Kuwaiti artists which the Ambassador toured and got acquainted with the contributing artists.</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 20px;\"><br></span></p>', '1', '2020-06-27'),
(6, 'Kuwait 2020 and Beyond: Challenges and Opportunities', '2019-12-14', '98e73d248f4eaa76de285b9c474304c3.png', '<div class=\"vc_col-sm-8 wpb_column vc_column_container\" style=\"box-sizing: border-box; display: flex; flex-direction: column; width: 797.984px;\"><div class=\"vc_column-inner\" style=\"box-sizing: border-box; display: flex; flex-direction: column; flex-grow: 1; flex-shrink: 0; padding-left: 1.5rem; padding-right: 1.5rem;\"><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 20px;\">4th December 2019</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 20px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Reconnaissance Research organized its third forum in which it hosted former American Ambassador to Kuwait, Ms. Deborah Jones, and Dr. John Duke Anthony the Founding President and Chief Executive Officer of the National Council on U.S.-Arab Relations.</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Mr. John Duke started the forum by&nbsp; praising Kuwait for its effective parliamentary presence and coherent constitution, as well as the existence of free press, adding that he was sure of the country’s future.</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The forum was initiated by President of the Reconnaissance Research&nbsp; Abdulaziz Al-Anjari. He asked Deborah Jones about the 2011 secret memo, which was leaked on WikiLeaks and widely discussed, with the claim that she expected Kuwait’s demise in 2020.</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 20px;\"><br></span><br><div class=\"wpb_text_column\" style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><p dir=\"ltr\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px;\"><span style=\"font-size: 19px;\">Jones replied that it was a distorted story, explaining that she compared the sources of income,&nbsp; the volume of expenses and the annual increase of both in the absence of additional foreign direct investment adding that all that lead to one conclusion :</span></p><p dir=\"ltr\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; font-size: 19px;\">That by 2020 Kuwait will lack sufficient funds to maintain the current Kuwaiti citizen’s living standards and that the government will have to cover the deficit by withdrawing from the general reserve. She added that this is the current situation and her words came as a confirmation of the current reality. She went on to say: “Honestly I am pleased to say that many of the points that we talked about were taken into account in the 2035 plan for the development of Kuwait. I believe that Kuwait’s opportunities for success are still large.”</p><p dir=\"ltr\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; font-size: 19px;\">On the new US administration’s policies, she comments: “Trump’s current policy is let them work things out together and we will deal with the results later. I think there is something common here between Obama’s administration and Trump; both are aware of the danger of getting involved in external wars. The difference between Obama and Trump in refusing to get involved in foreign wars is only in view. One displays it practically and the other ideologically.”</p><p dir=\"ltr\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; font-size: 19px;\">About the future of oil, the American presence in the region and the impact of that on Kuwait, Jones said: “Petroleum is very vital and is gaining importance through being transferred between countries. It does not matter if it is destined for the United States, Europe or China. The important thing is that it will always find a way to move and reach the consumer as long as the path remains open. I hope that the American administration will not decide to block all ports in front of anyone, so that we do not have to face an unexpected reaction,like what happened in Syria.”</p><p dir=\"ltr\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 19px;\">Ambassador Jones finished her talk by advising the new Prime Minister, Sheikh Sabah Al-Khaled, to abide by more transparency stressing that it would be highly appreciated by Kuwaiti people.</p><p dir=\"ltr\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px;\"><br></p></div></div></div></div></div>', '1', '2020-06-27'),
(7, 'China and the Gulf:\r\nThe U.S. View', '2019-10-19', 'ed562dd0af7228f28e24693da35e33a7.png', '<div class=\"vc_col-sm-8 wpb_column vc_column_container\" style=\"box-sizing: border-box; display: flex; flex-direction: column; width: 797.984px;\"><div class=\"vc_column-inner\" style=\"box-sizing: border-box; display: flex; flex-direction: column; flex-grow: 1; flex-shrink: 0; padding-left: 1.5rem; padding-right: 1.5rem;\"><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 20px;\">16th October 2019</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Reconnaissance Research held a closed forum entitled “China and the Gulf States;&nbsp; … The View of the United States of America”.</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The forum included high-level representation from current officials of the US State Department, as well as diplomats, academics, businessmen, newspaper and book editors.</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The forum dealt with a number of topics including regional stability, the high volume of trade between China and the Gulf states, the development of political relations between China and the Gulf, in addition to the American perspective on the northern economic zone project in Kuwait (the Silk City), and the impact of the Gulf crisis on the US-Gulf relationship.</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The Chargé d’Affaires at the American Embassy in Kuwait, Larry Memot, thanked Reconnaissance Research and its members for organizing an “extremely important symposium”..</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">In his speech he said: We are glad that there is such an opportunity to discuss the US view on the relations between China and the Gulf. Moreover, we are glad to participate in a forum of this kind here in Kuwait, our ally and friend country.”</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Among the topics presented in the forum was “the North and Islands” Project, which the participants agreed on its importance and that it is one of the most important economic projects that can create an international partnership and might constitute a shift in cooperation between Kuwait, America and some European countries.</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">In his speech representing the members of the Center’s Advisory Board, Youssef Al-Ghoussein said: “Through the Reconnaissance Research, we aim to provide a transparent platform for dialogue through which various perspectives on economic and political issues can be discussed. The Center’s management believes that non-governmental professional initiatives play an important role in the positive impact on political decisions and directly affect the current and future view of Kuwait, whether locally or internationally.&nbsp;</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">We are working on the Center’s continuity in shedding light on more important political issues.”</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The head of the Center, Abdulaziz Al-Anjari, explained that: “The issue of the Chinese-Gulf rapprochement in light of the repercussions of China’s dispute with America is an important and sensitive subject for many political and economic sectors. Adding that the center seeks to provide a platform to different points of view to discuss issues related to regional affairs, and highlight them to raise awareness about them locally among those interested</span><br></div></div></div>', '1', '2020-06-27'),
(8, 'The American Role in Kuwaiti-Iraqi Relations', '2019-09-18', '2454ab2003341094683813e745daae3f.png', '<div class=\"vc_col-sm-8 wpb_column vc_column_container\" style=\"box-sizing: border-box; display: flex; flex-direction: column; width: 797.984px;\"><div class=\"vc_column-inner\" style=\"box-sizing: border-box; display: flex; flex-direction: column; flex-grow: 1; flex-shrink: 0; padding-left: 1.5rem; padding-right: 1.5rem;\"><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 20px;\">18th September 2019</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Reconnaissance Research organized a forum entitled “The American Dimension in Kuwaiti-Iraqi Relations” where former Ambassador of United States to Kuwait and Iraq “Douglas Sulaiman” was the main speaker along with Alaa al-Hashemi, the Iraqi ambassador to Kuwait. The forum was attended by a group of diplomats, academics and businessmen who all engaged in a dialogue supervised by Dr. Ali Al-Tarrah.</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The former US ambassador talked about the importance of more effort to support the rebuilding of Iraqi economy, and pointed to the need to work to resolve conflicts in the region through further dialogues that would lead to the avoidance of war. He also praised the centre’s step in activating the concept of the “people’s soft policy” that participates in alleviating some burdens off officials in various fields. The main aim being to link different views officials in friendly and brotherly countries hold.</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">The former US ambassador talked about the importance of more effort to support the rebuilding of Iraqi economy, and pointed to the need to work to resolve conflicts in the region through further dialogues that would lead to the avoidance of war. He also praised the centre’s step in activating the concept of the “people’s soft policy” that participates in alleviating some burdens off officials in various fields. The main aim being to link different views officials in friendly and brotherly countries hold.</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Abdul Aziz Al-Anjari, director of the centre, commented that the issue of Iraq is present in the minds of all Kuwaitis, and therefore discussions related to it must be transparent and seeking to touch on all aspects without fear or shame. He added: “We discussed the stability of Iraq, the border settlement, the last complaint at the United Nations, the reality of terrorist organizations and the amount of foreign interference, and other topics.”</span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span></div><div class=\"wpb_wrapper\" style=\"box-sizing: border-box;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">During the symposium which stretched for hours, Ambassador Sulaiman was direct and unreserved in his answers to questions, some of which stepped over what he called “red lines” in official diplomacy, and in return the Iraqi ambassador was aware that in such difficult times the beginning of any solution is through open dialogue and hearing all opinions.</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\"><br></span><br></div></div></div>', '1', '2020-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `mediacoverageimg`
--

CREATE TABLE `mediacoverageimg` (
  `mediacoverageimg_id` int(11) NOT NULL,
  `mediacoverageimg_pic` text NOT NULL,
  `mediacoverageimg_title` text NOT NULL,
  `mediacoverageimg_status` varchar(40) NOT NULL,
  `mediacoverageimg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mediacoverageimg`
--

INSERT INTO `mediacoverageimg` (`mediacoverageimg_id`, `mediacoverageimg_pic`, `mediacoverageimg_title`, `mediacoverageimg_status`, `mediacoverageimg_date`) VALUES
(14, '5398663b5f9a62258c9584869f2f6c2b.jpg', '', '', '2020-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `mediacoveragetitle`
--

CREATE TABLE `mediacoveragetitle` (
  `mediacoverage_id` int(11) NOT NULL,
  `mediacoverage_title` varchar(1000) NOT NULL,
  `mediacoverage_insdate` date NOT NULL,
  `mediacoverage_status` varchar(40) NOT NULL,
  `mediacoverage_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mediacoveragetitle`
--

INSERT INTO `mediacoveragetitle` (`mediacoverage_id`, `mediacoverage_title`, `mediacoverage_insdate`, `mediacoverage_status`, `mediacoverage_date`) VALUES
(1, 'corona', '0000-00-00', '', '0000-00-00'),
(3, '<p>dfgd</p>', '0000-00-00', '', '2020-06-22'),
(4, '<p>newytyyt</p>', '0000-00-00', '', '2020-06-22'),
(5, 'abcd', '2020-06-23', '1', '2020-06-23'),
(7, 'bj', '2020-06-23', '', '2020-06-02'),
(8, 'qqqq', '2020-06-23', '', '2020-06-02'),
(9, '', '2020-06-23', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reports_id` int(40) NOT NULL,
  `reports_title` varchar(1000) NOT NULL,
  `reports_date` date NOT NULL,
  `reports_pic` text NOT NULL,
  `reports_desc` text NOT NULL,
  `reports_status` varchar(40) NOT NULL,
  `reports_insdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reports_id`, `reports_title`, `reports_date`, `reports_pic`, `reports_desc`, `reports_status`, `reports_insdate`) VALUES
(2, 'dfsdfdfg', '0000-00-00', '', 'xdfgsd', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `type` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `workshops_id` int(40) NOT NULL,
  `workshops_title` varchar(1000) NOT NULL,
  `workshops_subtitle` text NOT NULL,
  `workshops_date` date NOT NULL,
  `workshops_pic` text NOT NULL,
  `workshops_desc` text NOT NULL,
  `workshops_status` varchar(40) NOT NULL,
  `workshops_insdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`workshops_id`, `workshops_title`, `workshops_subtitle`, `workshops_date`, `workshops_pic`, `workshops_desc`, `workshops_status`, `workshops_insdate`) VALUES
(3, 'hj', 'jkr', '2020-06-12', '02b229f13b4c802d028b2baf1dc78629.jpg', '', '1', '2020-06-23'),
(4, '', '', '2020-06-02', '4b04309c9c5b7da1eaa4e0d4ff7f17fb.jpg', '', '', '2020-06-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `about_whatwedo`
--
ALTER TABLE `about_whatwedo`
  ADD PRIMARY KEY (`whatwedo_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articles_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`forums_id`);

--
-- Indexes for table `mediacoverageimg`
--
ALTER TABLE `mediacoverageimg`
  ADD PRIMARY KEY (`mediacoverageimg_id`);

--
-- Indexes for table `mediacoveragetitle`
--
ALTER TABLE `mediacoveragetitle`
  ADD PRIMARY KEY (`mediacoverage_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reports_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`workshops_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `about_whatwedo`
--
ALTER TABLE `about_whatwedo`
  MODIFY `whatwedo_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articles_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `forums_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mediacoverageimg`
--
ALTER TABLE `mediacoverageimg`
  MODIFY `mediacoverageimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mediacoveragetitle`
--
ALTER TABLE `mediacoveragetitle`
  MODIFY `mediacoverage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reports_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `workshops_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 11:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menmyinternational`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(255) NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `about_short` varchar(255) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_discription` text NOT NULL,
  `about_created_date` varchar(255) NOT NULL,
  `about_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_img`, `about_short`, `about_title`, `about_discription`, `about_created_date`, `about_created_time`) VALUES
(1, 'marketing.svg', 'mc', 'Marketing Cloud', 'Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts for chang the Seamlessly optimal testing procedures whereas processes.Synergistically evolve 2.0 technologies rather than just in web & apps development.', '2021-06-25', '22:02:09'),
(2, 'crm.svg', 'sc', 'Smartest CRM', 'Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts for chang the Seamlessly optimal testing procedures whereas processes.Synergistically evolve 2.0 technologies rather than just in web & apps development.', '2021-06-25', '22:05:17'),
(3, 'intellegent.svg', 'bi', 'Business Intelligence', 'Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts for chang the Seamlessly optimal testing procedures whereas processes.Synergistically evolve 2.0 technologies rather than just in web & apps development.', '2021-06-25', '22:07:51'),
(4, 'engine.svg', 'ae', 'Automation Engine', 'Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts for chang the Seamlessly optimal testing procedures whereas processes.Synergistically evolve 2.0 technologies rather than just in web & apps development.', '2021-06-25', '22:08:12'),
(5, 'time.svg', 'tm', 'Time Management', 'Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts for chang the Seamlessly optimal testing procedures whereas processes.Synergistically evolve 2.0 technologies rather than just in web & apps development.', '2021-06-25', '22:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(255) NOT NULL,
  `application_cv` varchar(255) NOT NULL,
  `application_pic` varchar(255) NOT NULL,
  `application_jobid` varchar(255) NOT NULL,
  `application_name` varchar(255) NOT NULL,
  `application_email` varchar(255) NOT NULL,
  `application_phone` varchar(255) NOT NULL,
  `application_action` varchar(255) NOT NULL,
  `application_created_date` varchar(255) NOT NULL,
  `application_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `application_cv`, `application_pic`, `application_jobid`, `application_name`, `application_email`, `application_phone`, `application_action`, `application_created_date`, `application_created_time`) VALUES
(37, 'BCSIR12 _A8QRGZCL.pdf', '', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', 'Cancel', '2021-06-30', '01:52:PM');

-- --------------------------------------------------------

--
-- Table structure for table `application_certificate`
--

CREATE TABLE `application_certificate` (
  `application_certificate_id` int(255) NOT NULL,
  `application_certificate_file` varchar(255) NOT NULL,
  `application_certificate_jobid` varchar(255) NOT NULL,
  `application_certificate_name` varchar(255) NOT NULL,
  `application_certificate_email` varchar(255) NOT NULL,
  `application_certificate_phone` varchar(255) NOT NULL,
  `application_certificate_created_date` varchar(255) NOT NULL,
  `application_certificate_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application_certificate`
--

INSERT INTO `application_certificate` (`application_certificate_id`, `application_certificate_file`, `application_certificate_jobid`, `application_certificate_name`, `application_certificate_email`, `application_certificate_phone`, `application_certificate_created_date`, `application_certificate_created_time`) VALUES
(56, 'BCSIR12 _A8QRGZCL.pdf', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', '2021-06-30', '01:52:PM'),
(57, 'FireShot Capture 003 - Prospectus - admission.cu.ac.bd.png', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', '2021-06-30', '01:52:PM'),
(58, 'FireShot Capture 006 - Teletalk Minute Offer 2021 - How To Buy Teletalk Minute Packages Â» Si_ - simeki.com.png', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', '2021-06-30', '01:52:PM'),
(59, 'FireShot Capture 009 - Profile - Talent Hunt Admission System-Jahangirnagar University_ - juniv-admission.org.png', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', '2021-06-30', '01:52:PM'),
(60, 'FireShot Capture 010 - Profile - Talent Hunt Admission System-Jahangirnagar University_ - juniv-admission.org.png', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', '2021-06-30', '01:52:PM'),
(61, 'Photo-removebg-preview.jpg', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', '2021-06-30', '01:52:PM'),
(62, 'sigparvez.jpg', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', '2021-06-30', '01:52:PM'),
(63, 'WhatsApp Image 2021-06-22 at 10.06.26 PM.jpeg', '1', 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01701006974', '2021-06-30', '01:52:PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(255) NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_short` varchar(255) NOT NULL,
  `category_lebel` varchar(255) NOT NULL,
  `category_created_date` varchar(255) NOT NULL,
  `category_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `category_short`, `category_lebel`, `category_created_date`, `category_created_time`) VALUES
(1, 'category1', 'category1', 'category1', '2021-06-20', '20:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `contact_created_date` varchar(255) NOT NULL,
  `contact_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobs_id` int(255) NOT NULL,
  `jobs_title` varchar(255) NOT NULL,
  `jobs_details` varchar(255) NOT NULL,
  `jobs_discription` text NOT NULL,
  `jobs_file` varchar(255) NOT NULL,
  `jobs_application_start_date` varchar(255) NOT NULL,
  `jobs_application_start_time` varchar(255) NOT NULL,
  `jobs_deadline_date` varchar(255) NOT NULL,
  `jobs_deadline_time` varchar(255) NOT NULL,
  `jobs_created_date` varchar(255) NOT NULL,
  `jobs_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobs_id`, `jobs_title`, `jobs_details`, `jobs_discription`, `jobs_file`, `jobs_application_start_date`, `jobs_application_start_time`, `jobs_deadline_date`, `jobs_deadline_time`, `jobs_created_date`, `jobs_created_time`) VALUES
(1, 'Cleaner Needed', 'Cleaner Must Have Class 8 Pass From Any Reputated Institute', '                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis illo quisquam molestiae quam fugit, animi quaerat molestias quod delectus est labore, dolore, repudiandae vero nobis doloribus et amet maxime quis?\r\n                                        Delectus tempora ipsa molestiae perspiciatis laudantium. Magnam aut non veritatis nobis? Enim consequuntur veritatis totam porro impedit illo voluptates quam cupiditate quaerat. Obcaecati unde odio neque cumque, exercitationem dolor vel!\r\n                                        Minus, aspernatur quaerat? Unde libero error porro, ratione iure voluptates quo at rerum aliquam molestiae numquam debitis officia quibusdam eum. Aut doloribus neque soluta temporibus tempora esse veritatis, consequatur ipsam.\r\n                                        Non, minus deleniti reprehenderit perferendis amet voluptate animi incidunt vitae at quae asperiores soluta blanditiis explicabo vero vel iusto exercitationem aliquam optio earum tenetur voluptatem in pariatur, voluptates delectus? Quod.\r\n                                        Aperiam velit fuga quia rem placeat minima sed distinctio asperiores harum dolorem repellat ex sunt tenetur nesciunt a, corporis laudantium incidunt quaerat obcaecati ea inventore et iusto similique magni? Voluptas?\r\n                                        Hic excepturi, dicta necessitatibus tempora nisi et consequuntur deleniti! Sapiente ad rerum suscipit quos repellendus fugit minus sunt, expedita ipsa ea, dolorem dicta repudiandae ex at eaque enim blanditiis labore.\r\n                                        In consequatur asperiores dicta eius earum voluptates quam odio ullam nihil fuga fugit dolorem explicabo enim eos corporis tempora, veniam quaerat perspiciatis? Unde labore quasi sequi culpa eligendi deleniti nobis.\r\n                                        Veritatis tempora explicabo, nihil sit a sint perferendis molestias hic magni odit quos voluptatibus omnis alias voluptatum ducimus provident obcaecati et ullam assumenda impedit? Fugiat nobis quibusdam porro eos qui.\r\n                                        Fugit voluptas facilis necessitatibus totam adipisci delectus iure eligendi? Rem in ratione tenetur explicabo iste, molestias minima error beatae voluptatibus nulla, doloremque consectetur laudantium eaque nobis dolore! Nostrum, unde asperiores!\r\n                                        Totam cupiditate corrupti impedit ad? Eos id repellat similique! Repellat ratione iste, blanditiis optio culpa cupiditate consectetur amet ad iure, nemo sunt, modi beatae possimus libero veritatis commodi accusamus recusandae!\r\n                                        Qui corrupti aperiam doloremque, in molestias exercitationem necessitatibus consequuntur nobis consectetur nisi natus autem est? Eos tempora aliquid est ipsa velit quos eligendi temporibus alias, similique inventore iste delectus dolorum!\r\n                                        Repellendus sed neque temporibus et officiis iusto doloribus sequi. Repellat consequuntur molestiae iste expedita deleniti quisquam aspernatur hic, quam nostrum dolore illo soluta unde accusamus, nihil quasi excepturi necessitatibus harum?\r\n                                        Ipsam exercitationem optio eum? Aspernatur optio, saepe placeat recusandae eligendi suscipit ut vitae dolore assumenda dolorum autem minima sint nisi excepturi repellat maiores voluptatibus odio nemo dolores facere necessitatibus? Atque!\r\n                                        Animi illum ab aliquam modi at? Officiis laboriosam perferendis quis? Accusantium eaque voluptatem est quia assumenda delectus, voluptatum dolores nostrum consequuntur deserunt atque veritatis ipsam autem similique hic expedita eius!\r\n                                        Labore reiciendis adipisci officia fugiat. Perferendis aperiam, eos praesentium tempora illum sint, ullam eius nesciunt nostrum quia, nihil necessitatibus nam perspiciatis amet beatae harum. Beatae explicabo saepe pariatur nemo harum!\r\n                                        Rem unde saepe velit provident harum assumenda asperiores, fugit quod culpa ea deserunt officiis voluptate recusandae dolorem eos! Ipsum provident ea, ex laborum minima fuga natus eligendi quaerat eum soluta?\r\n                                        Odio ex sed, dolor ad nihil quae corrupti autem quia, aut quis optio. Iusto numquam quidem vero corporis facilis dolor minima natus itaque non, neque ab eveniet placeat ipsa explicabo?\r\n                                        Necessitatibus architecto tempora dolores ab sint deleniti culpa pariatur vel repellendus dicta praesentium recusandae, autem iste voluptatibus enim sit exercitationem! Exercitationem et voluptas doloremque. Amet quaerat quia aliquam aliquid dicta.\r\n                                        Harum repellat voluptatem provident molestias. Neque quod ullam magni inventore ut delectus optio itaque, aliquam, doloribus atque possimus. Sed voluptatem quam, eius dicta tempore velit. Atque omnis vel totam explicabo?\r\n                                        Veniam soluta, consectetur beatae corporis voluptas iure voluptatibus aut doloribus suscipit culpa distinctio recusandae molestiae facilis provident. Et nisi, repellat laborum nulla iste dolores voluptas animi itaque rerum corrupti aut?', '', '2021-06-29', '18:49', '2021-06-30', '18:49', '2021-06-29', '16:02:36'),
(2, 'Cleaner Needed', 'Cleaner Must Have Class 8 Pass From Any Reputated Institute', '                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis illo quisquam molestiae quam fugit, animi quaerat molestias quod delectus est labore, dolore, repudiandae vero nobis doloribus et amet maxime quis?\r\n                                        Delectus tempora ipsa molestiae perspiciatis laudantium. Magnam aut non veritatis nobis? Enim consequuntur veritatis totam porro impedit illo voluptates quam cupiditate quaerat. Obcaecati unde odio neque cumque, exercitationem dolor vel!\r\n                                        Minus, aspernatur quaerat? Unde libero error porro, ratione iure voluptates quo at rerum aliquam molestiae numquam debitis officia quibusdam eum. Aut doloribus neque soluta temporibus tempora esse veritatis, consequatur ipsam.\r\n                                        Non, minus deleniti reprehenderit perferendis amet voluptate animi incidunt vitae at quae asperiores soluta blanditiis explicabo vero vel iusto exercitationem aliquam optio earum tenetur voluptatem in pariatur, voluptates delectus? Quod.\r\n                                        Aperiam velit fuga quia rem placeat minima sed distinctio asperiores harum dolorem repellat ex sunt tenetur nesciunt a, corporis laudantium incidunt quaerat obcaecati ea inventore et iusto similique magni? Voluptas?\r\n                                        Hic excepturi, dicta necessitatibus tempora nisi et consequuntur deleniti! Sapiente ad rerum suscipit quos repellendus fugit minus sunt, expedita ipsa ea, dolorem dicta repudiandae ex at eaque enim blanditiis labore.\r\n                                        In consequatur asperiores dicta eius earum voluptates quam odio ullam nihil fuga fugit dolorem explicabo enim eos corporis tempora, veniam quaerat perspiciatis? Unde labore quasi sequi culpa eligendi deleniti nobis.\r\n                                        Veritatis tempora explicabo, nihil sit a sint perferendis molestias hic magni odit quos voluptatibus omnis alias voluptatum ducimus provident obcaecati et ullam assumenda impedit? Fugiat nobis quibusdam porro eos qui.\r\n                                        Fugit voluptas facilis necessitatibus totam adipisci delectus iure eligendi? Rem in ratione tenetur explicabo iste, molestias minima error beatae voluptatibus nulla, doloremque consectetur laudantium eaque nobis dolore! Nostrum, unde asperiores!\r\n                                        Totam cupiditate corrupti impedit ad? Eos id repellat similique! Repellat ratione iste, blanditiis optio culpa cupiditate consectetur amet ad iure, nemo sunt, modi beatae possimus libero veritatis commodi accusamus recusandae!\r\n                                        Qui corrupti aperiam doloremque, in molestias exercitationem necessitatibus consequuntur nobis consectetur nisi natus autem est? Eos tempora aliquid est ipsa velit quos eligendi temporibus alias, similique inventore iste delectus dolorum!\r\n                                        Repellendus sed neque temporibus et officiis iusto doloribus sequi. Repellat consequuntur molestiae iste expedita deleniti quisquam aspernatur hic, quam nostrum dolore illo soluta unde accusamus, nihil quasi excepturi necessitatibus harum?\r\n                                        Ipsam exercitationem optio eum? Aspernatur optio, saepe placeat recusandae eligendi suscipit ut vitae dolore assumenda dolorum autem minima sint nisi excepturi repellat maiores voluptatibus odio nemo dolores facere necessitatibus? Atque!\r\n                                        Animi illum ab aliquam modi at? Officiis laboriosam perferendis quis? Accusantium eaque voluptatem est quia assumenda delectus, voluptatum dolores nostrum consequuntur deserunt atque veritatis ipsam autem similique hic expedita eius!\r\n                                        Labore reiciendis adipisci officia fugiat. Perferendis aperiam, eos praesentium tempora illum sint, ullam eius nesciunt nostrum quia, nihil necessitatibus nam perspiciatis amet beatae harum. Beatae explicabo saepe pariatur nemo harum!\r\n                                        Rem unde saepe velit provident harum assumenda asperiores, fugit quod culpa ea deserunt officiis voluptate recusandae dolorem eos! Ipsum provident ea, ex laborum minima fuga natus eligendi quaerat eum soluta?\r\n                                        Odio ex sed, dolor ad nihil quae corrupti autem quia, aut quis optio. Iusto numquam quidem vero corporis facilis dolor minima natus itaque non, neque ab eveniet placeat ipsa explicabo?\r\n                                        Necessitatibus architecto tempora dolores ab sint deleniti culpa pariatur vel repellendus dicta praesentium recusandae, autem iste voluptatibus enim sit exercitationem! Exercitationem et voluptas doloremque. Amet quaerat quia aliquam aliquid dicta.\r\n                                        Harum repellat voluptatem provident molestias. Neque quod ullam magni inventore ut delectus optio itaque, aliquam, doloribus atque possimus. Sed voluptatem quam, eius dicta tempore velit. Atque omnis vel totam explicabo?\r\n                                        Veniam soluta, consectetur beatae corporis voluptas iure voluptatibus aut doloribus suscipit culpa distinctio recusandae molestiae facilis provident. Et nisi, repellat laborum nulla iste dolores voluptas animi itaque rerum corrupti aut?', '', '2021-06-28', '18:49', '2021-06-29', '18:49', '2021-06-29', '16:04:00'),
(3, 'Cleaner Needed', 'Cleaner Must Have Class 8 Pass From Any Reputated Institute', '                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis illo quisquam molestiae quam fugit, animi quaerat molestias quod delectus est labore, dolore, repudiandae vero nobis doloribus et amet maxime quis?\r\n                                        Delectus tempora ipsa molestiae perspiciatis laudantium. Magnam aut non veritatis nobis? Enim consequuntur veritatis totam porro impedit illo voluptates quam cupiditate quaerat. Obcaecati unde odio neque cumque, exercitationem dolor vel!\r\n                                        Minus, aspernatur quaerat? Unde libero error porro, ratione iure voluptates quo at rerum aliquam molestiae numquam debitis officia quibusdam eum. Aut doloribus neque soluta temporibus tempora esse veritatis, consequatur ipsam.\r\n                                        Non, minus deleniti reprehenderit perferendis amet voluptate animi incidunt vitae at quae asperiores soluta blanditiis explicabo vero vel iusto exercitationem aliquam optio earum tenetur voluptatem in pariatur, voluptates delectus? Quod.\r\n                                        Aperiam velit fuga quia rem placeat minima sed distinctio asperiores harum dolorem repellat ex sunt tenetur nesciunt a, corporis laudantium incidunt quaerat obcaecati ea inventore et iusto similique magni? Voluptas?\r\n                                        Hic excepturi, dicta necessitatibus tempora nisi et consequuntur deleniti! Sapiente ad rerum suscipit quos repellendus fugit minus sunt, expedita ipsa ea, dolorem dicta repudiandae ex at eaque enim blanditiis labore.\r\n                                        In consequatur asperiores dicta eius earum voluptates quam odio ullam nihil fuga fugit dolorem explicabo enim eos corporis tempora, veniam quaerat perspiciatis? Unde labore quasi sequi culpa eligendi deleniti nobis.\r\n                                        Veritatis tempora explicabo, nihil sit a sint perferendis molestias hic magni odit quos voluptatibus omnis alias voluptatum ducimus provident obcaecati et ullam assumenda impedit? Fugiat nobis quibusdam porro eos qui.\r\n                                        Fugit voluptas facilis necessitatibus totam adipisci delectus iure eligendi? Rem in ratione tenetur explicabo iste, molestias minima error beatae voluptatibus nulla, doloremque consectetur laudantium eaque nobis dolore! Nostrum, unde asperiores!\r\n                                        Totam cupiditate corrupti impedit ad? Eos id repellat similique! Repellat ratione iste, blanditiis optio culpa cupiditate consectetur amet ad iure, nemo sunt, modi beatae possimus libero veritatis commodi accusamus recusandae!\r\n                                        Qui corrupti aperiam doloremque, in molestias exercitationem necessitatibus consequuntur nobis consectetur nisi natus autem est? Eos tempora aliquid est ipsa velit quos eligendi temporibus alias, similique inventore iste delectus dolorum!\r\n                                        Repellendus sed neque temporibus et officiis iusto doloribus sequi. Repellat consequuntur molestiae iste expedita deleniti quisquam aspernatur hic, quam nostrum dolore illo soluta unde accusamus, nihil quasi excepturi necessitatibus harum?\r\n                                        Ipsam exercitationem optio eum? Aspernatur optio, saepe placeat recusandae eligendi suscipit ut vitae dolore assumenda dolorum autem minima sint nisi excepturi repellat maiores voluptatibus odio nemo dolores facere necessitatibus? Atque!\r\n                                        Animi illum ab aliquam modi at? Officiis laboriosam perferendis quis? Accusantium eaque voluptatem est quia assumenda delectus, voluptatum dolores nostrum consequuntur deserunt atque veritatis ipsam autem similique hic expedita eius!\r\n                                        Labore reiciendis adipisci officia fugiat. Perferendis aperiam, eos praesentium tempora illum sint, ullam eius nesciunt nostrum quia, nihil necessitatibus nam perspiciatis amet beatae harum. Beatae explicabo saepe pariatur nemo harum!\r\n                                        Rem unde saepe velit provident harum assumenda asperiores, fugit quod culpa ea deserunt officiis voluptate recusandae dolorem eos! Ipsum provident ea, ex laborum minima fuga natus eligendi quaerat eum soluta?\r\n                                        Odio ex sed, dolor ad nihil quae corrupti autem quia, aut quis optio. Iusto numquam quidem vero corporis facilis dolor minima natus itaque non, neque ab eveniet placeat ipsa explicabo?\r\n                                        Necessitatibus architecto tempora dolores ab sint deleniti culpa pariatur vel repellendus dicta praesentium recusandae, autem iste voluptatibus enim sit exercitationem! Exercitationem et voluptas doloremque. Amet quaerat quia aliquam aliquid dicta.\r\n                                        Harum repellat voluptatem provident molestias. Neque quod ullam magni inventore ut delectus optio itaque, aliquam, doloribus atque possimus. Sed voluptatem quam, eius dicta tempore velit. Atque omnis vel totam explicabo?\r\n                                        Veniam soluta, consectetur beatae corporis voluptas iure voluptatibus aut doloribus suscipit culpa distinctio recusandae molestiae facilis provident. Et nisi, repellat laborum nulla iste dolores voluptas animi itaque rerum corrupti aut?', '', '2021-06-29', '18:46', '2021-06-30', '18:46', '2021-06-29', '16:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(255) NOT NULL,
  `partner_img` varchar(255) NOT NULL,
  `partner_title` varchar(255) NOT NULL,
  `partner_discription` text NOT NULL,
  `partner_link` varchar(255) NOT NULL,
  `partner_created_date` varchar(255) NOT NULL,
  `partner_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_img`, `partner_title`, `partner_discription`, `partner_link`, `partner_created_date`, `partner_created_time`) VALUES
(2, '1624171588.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:46:28'),
(3, '1624171595.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:46:35'),
(4, '1624171600.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:46:40'),
(5, '1624171606.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:46:46'),
(6, '1624171612.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:46:52'),
(7, '1624171617.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `picci`
--

CREATE TABLE `picci` (
  `picci_id` int(255) NOT NULL,
  `picci_full_name` varchar(255) NOT NULL,
  `picci_username` varchar(255) NOT NULL,
  `picci_password` varchar(255) NOT NULL,
  `picci_phone` varchar(255) NOT NULL,
  `picci_email` varchar(255) NOT NULL,
  `picci_address` varchar(255) NOT NULL,
  `picci_profile_pic` varchar(255) NOT NULL,
  `picci_user_type` varchar(255) NOT NULL,
  `picci_supreme` varchar(255) NOT NULL,
  `picci_account_creation_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picci`
--

INSERT INTO `picci` (`picci_id`, `picci_full_name`, `picci_username`, `picci_password`, `picci_phone`, `picci_email`, `picci_address`, `picci_profile_pic`, `picci_user_type`, `picci_supreme`, `picci_account_creation_date`) VALUES
(1, 'Admin', 'admin127', '8018a3ecdbdeb621236583c7ded01a08', '+990xxxxxxxxxxxxx', 'example@sitedomain.com', '', 'DVRLJCqWsAA7YNA.jpg', 'Admin', 'Admin', '2021-06-13 12:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `plugin_database`
--

CREATE TABLE `plugin_database` (
  `plugin_id` int(255) NOT NULL,
  `plugin_name` varchar(255) NOT NULL,
  `plugin_action` varchar(255) NOT NULL,
  `plugin_created_date` varchar(255) NOT NULL,
  `plugin_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plugin_database`
--

INSERT INTO `plugin_database` (`plugin_id`, `plugin_name`, `plugin_action`, `plugin_created_date`, `plugin_created_time`) VALUES
(1, 'slider', 'show', '2021-06-24', '21:51:27'),
(2, 'whatWeOffer', 'show', '2021-06-24', '21:52:26'),
(3, 'projects', 'show', '2021-06-24', '21:52:34'),
(4, 'partners', 'show', '2021-06-24', '21:52:43'),
(5, 'contact', 'show', '2021-06-24', '22:07:11'),
(6, 'about', 'show', '2021-06-25', '20:03:58'),
(7, 'career', 'show', '2021-06-25', '23:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(255) NOT NULL,
  `project_img` varchar(255) NOT NULL,
  `project_category` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_client` varchar(255) NOT NULL,
  `project_discription` text NOT NULL,
  `project_created_date` varchar(255) NOT NULL,
  `project_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `site_setting_name` varchar(255) NOT NULL,
  `site_setting_title` varchar(255) NOT NULL,
  `site_setting_slogan` varchar(255) NOT NULL,
  `site_setting_adress` varchar(255) NOT NULL,
  `site_setting_phone` varchar(255) NOT NULL,
  `site_setting_email` varchar(255) NOT NULL,
  `site_setting_description` text NOT NULL,
  `site_setting_business_hour` text NOT NULL,
  `site_setting_logo` varchar(255) NOT NULL,
  `site_setting_icon` varchar(255) NOT NULL,
  `site_setting_last_update_date` varchar(255) NOT NULL,
  `site_setting_last_update_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`site_setting_name`, `site_setting_title`, `site_setting_slogan`, `site_setting_adress`, `site_setting_phone`, `site_setting_email`, `site_setting_description`, `site_setting_business_hour`, `site_setting_logo`, `site_setting_icon`, `site_setting_last_update_date`, `site_setting_last_update_time`) VALUES
('me & my international', 'Me & My International LLC', 'Lorem ipsum is placeholder text commonly used in t...', 'Dubai', '+99 00000000', 'example@menmyinternational.com', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione ipsam tenetur rem commodi officia. Perspiciatis ipsum delectus, quod, consequatur expedita asperiores praesentium unde, minima nesciunt consequuntur temporibus facilis iure perferendis. Hic dignissimos eius odit molestiae, soluta dolorem totam tempore alias rerum at eligendi veritatis animi ullam magnam ut excepturi corrupti, delectus impedit cumque id expedita! Obcaecati vel veniam reprehenderit error? Asperiores maxime earum consectetur eaque qui aliquam sequi blanditiis vel voluptate incidunt consequuntur totam esse autem minima cupiditate suscipit nisi ratione sint odio, omnis nostrum! Officia nesciunt veniam est odio? Veritatis dolore excepturi asperiores ratione molestias numquam. Maiores, praesentium aspernatur molestias magnam tenetur corrupti ipsam incidunt obcaecati. Inventore fugiat consectetur ipsa sint fugit odio, reprehenderit eveniet illum mollitia cum enim! Nisi voluptatibus iure illum labore esse, vitae, earum saepe suscipit sapiente eaque voluptates quas quod tenetur omnis soluta eos a! Repellat inventore minus consectetur, perferendis iusto sequi facilis fuga est! Sequi impedit nobis consequatur rerum hic quas omnis possimus velit, accusamus neque illum provident, repudiandae est a ducimus, magni dicta iusto nesciunt. Doloribus eos, libero quam cupiditate voluptatibus aspernatur! Nam! Tempore distinctio asperiores est? Ullam facere vel voluptate nemo praesentium voluptatibus ducimus sequi, odio perspiciatis sunt, nisi voluptas reprehenderit repellat suscipit tenetur impedit unde necessitatibus? Iste ipsam eos vel optio? Sed sapiente exercitationem in, aperiam mollitia sint. Ipsum voluptate, iusto minus eos repellendus possimus officia animi corporis, adipisci sed assumenda iste suscipit earum ipsa eligendi eveniet mollitia aut eaque asperiores! Voluptatem officia et molestiae, quae incidunt iure, delectus enim molestias ipsum perspiciatis eos accusamus vero deleniti maiores quia nostrum dolores quaerat minus doloribus atque vel minima. Sit eius repellat beatae! Error quibusdam fugiat minima provident aut pariatur, nesciunt voluptate cupiditate beatae voluptatem ut dolorem sit nisi, repudiandae accusamus, quam iste sunt magnam excepturi natus enim! Eius consequuntur voluptatum quos perspiciatis!', 'Monday - Friday : 9:00 to 17:00<br/>\r\nSaturday : 10:00 to 15:00<br/>\r\nSunday : Day Off (Holiday)', 'bglogo.png', 'logo.png', '2021-06-30', '13:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(255) NOT NULL,
  `slider_img` varchar(255) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_discription` text NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_created_date` varchar(255) NOT NULL,
  `slider_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_img`, `slider_title`, `slider_discription`, `slider_link`, `slider_created_date`, `slider_created_time`) VALUES
(22, '1624170024.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:20:24'),
(23, '1624170032.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:20:32'),
(24, '1624170038.jpg', '', '', 'javascript:void(0);', '2021-06-20', '10:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `whatweoffer`
--

CREATE TABLE `whatweoffer` (
  `whatweoffer_id` int(255) NOT NULL,
  `whatweoffer_icon` varchar(255) NOT NULL,
  `whatweoffer_title` varchar(255) NOT NULL,
  `whatweoffer_discription` text NOT NULL,
  `whatweoffer_update_date` varchar(255) NOT NULL,
  `whatweoffer_update_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `whatweoffer`
--

INSERT INTO `whatweoffer` (`whatweoffer_id`, `whatweoffer_icon`, `whatweoffer_title`, `whatweoffer_discription`, `whatweoffer_update_date`, `whatweoffer_update_time`) VALUES
(5, 'mdi mdi-pen', 'Office Assistant', 'We Provide Office Assistant For Better.', '2021-06-19', '21:03:06'),
(6, 'mdi mdi-charity', 'Maintanace Services', 'We Provide All Kind Off Maintanace Services.', '2021-06-19', '21:03:44'),
(7, 'mdi mdi-star', 'Fresh & Clean', 'We Provide Fresh & Clean Your Platform', '2021-06-19', '21:04:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `application_certificate`
--
ALTER TABLE `application_certificate`
  ADD PRIMARY KEY (`application_certificate_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobs_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `picci`
--
ALTER TABLE `picci`
  ADD PRIMARY KEY (`picci_id`);

--
-- Indexes for table `plugin_database`
--
ALTER TABLE `plugin_database`
  ADD PRIMARY KEY (`plugin_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `whatweoffer`
--
ALTER TABLE `whatweoffer`
  ADD PRIMARY KEY (`whatweoffer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `application_certificate`
--
ALTER TABLE `application_certificate`
  MODIFY `application_certificate_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobs_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `picci`
--
ALTER TABLE `picci`
  MODIFY `picci_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plugin_database`
--
ALTER TABLE `plugin_database`
  MODIFY `plugin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `whatweoffer`
--
ALTER TABLE `whatweoffer`
  MODIFY `whatweoffer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

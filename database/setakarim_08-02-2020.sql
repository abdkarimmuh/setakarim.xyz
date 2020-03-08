-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2020 at 10:47 AM
-- Server version: 5.7.19
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setakarim`
--

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `desc`, `file`, `phone`, `mail`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Abdul Karim', 'I am a professional UI/UX Designer & Developer from Depok. For me every code is beautiful art. And every syntax that is in it can be something very useful for many people.', NULL, '082195354616', 'alkariim.tridek@gmail.com', 'Komplek Timah, Blok CCV No.51', '2020-02-22 15:59:52', NULL);

--
-- Dumping data for table `achievement_organization`
--

INSERT INTO `achievement_organization` (`id`, `title`, `name`, `year`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Finalist', 'Gemastik 9', '2017', NULL, 1, '2020-03-07 13:00:48', NULL),
(2, 'Finalist', 'DEPICTA', '2017', NULL, 1, '2020-03-07 13:00:48', NULL),
(3, 'President', 'BEM STT NF - Kabinet Wahana Kolaborasi', '2018', NULL, 2, '2020-03-07 13:00:48', NULL),
(4, 'Coordinating Minister for\r\nSocial and Politics', 'BEM STT NF - Kabinet Promotor Muda', '2017', NULL, 2, '2020-03-07 13:00:48', NULL);

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `category_id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Top WordPress Themes and Plugins for Travel', '<p class=\"mt-3 text-muted\">Vivamus. Commodo varius tellus nisl tellus pulvinar netus fames a, neque suspendisse tincidunt auctor penatibus taciti lorem mus penatibus quisque, fusce curae;, rutrum. Sit.</p>\r\n                                        <p class=\"mt-3 text-muted\">Molestie cras tempus. Accumsan maecenas enim pretium malesuada aenean tristique malesuada leo tristique sapien vitae molestie, at amet elementum facilisis amet integer. Lobortis quam venenatis ad condimentum felis phasellus eleifend erat vehicula est pede arcu facilisi ultrices ut. </p>\r\n                                        <p class=\"blockquote\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>\r\n                                        <p class=\"mt-3 text-muted\">Non eros. Laoreet netus, sodales phasellus, enim consectetuer morbi accumsan egestas Pede montes molestie sollicitudin augue nec. Sapien, dui eget sociosqu viverra. Rutrum cras parturient, tellus, diam. Donec potenti ante ultrices lacus </p>', 1, NULL, '2020-03-08 07:03:10', NULL),
(2, 'Top WordPress Themes and Plugins for Travel', '<p class=\"mt-3 text-muted\">Vivamus. Commodo varius tellus nisl tellus pulvinar netus fames a, neque suspendisse tincidunt auctor penatibus taciti lorem mus penatibus quisque, fusce curae;, rutrum. Sit.</p>\r\n                                        <p class=\"mt-3 text-muted\">Molestie cras tempus. Accumsan maecenas enim pretium malesuada aenean tristique malesuada leo tristique sapien vitae molestie, at amet elementum facilisis amet integer. Lobortis quam venenatis ad condimentum felis phasellus eleifend erat vehicula est pede arcu facilisi ultrices ut. </p>\r\n                                        <p class=\"blockquote\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>\r\n                                        <p class=\"mt-3 text-muted\">Non eros. Laoreet netus, sodales phasellus, enim consectetuer morbi accumsan egestas Pede montes molestie sollicitudin augue nec. Sapien, dui eget sociosqu viverra. Rutrum cras parturient, tellus, diam. Donec potenti ante ultrices lacus </p>', 2, NULL, '2020-03-08 07:03:10', NULL),
(3, 'Top WordPress Themes and Plugins for Travel', '<p class=\"mt-3 text-muted\">Vivamus. Commodo varius tellus nisl tellus pulvinar netus fames a, neque suspendisse tincidunt auctor penatibus taciti lorem mus penatibus quisque, fusce curae;, rutrum. Sit.</p>\r\n                                        <p class=\"mt-3 text-muted\">Molestie cras tempus. Accumsan maecenas enim pretium malesuada aenean tristique malesuada leo tristique sapien vitae molestie, at amet elementum facilisis amet integer. Lobortis quam venenatis ad condimentum felis phasellus eleifend erat vehicula est pede arcu facilisi ultrices ut. </p>\r\n                                        <p class=\"blockquote\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>\r\n                                        <p class=\"mt-3 text-muted\">Non eros. Laoreet netus, sodales phasellus, enim consectetuer morbi accumsan egestas Pede montes molestie sollicitudin augue nec. Sapien, dui eget sociosqu viverra. Rutrum cras parturient, tellus, diam. Donec potenti ante ultrices lacus </p>', 3, NULL, '2020-03-08 07:03:10', NULL),
(4, 'Top WordPress Themes and Plugins for Travel', '<p class=\"mt-3 text-muted\">Vivamus. Commodo varius tellus nisl tellus pulvinar netus fames a, neque suspendisse tincidunt auctor penatibus taciti lorem mus penatibus quisque, fusce curae;, rutrum. Sit.</p>\r\n                                        <p class=\"mt-3 text-muted\">Molestie cras tempus. Accumsan maecenas enim pretium malesuada aenean tristique malesuada leo tristique sapien vitae molestie, at amet elementum facilisis amet integer. Lobortis quam venenatis ad condimentum felis phasellus eleifend erat vehicula est pede arcu facilisi ultrices ut. </p>\r\n                                        <p class=\"blockquote\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>\r\n                                        <p class=\"mt-3 text-muted\">Non eros. Laoreet netus, sodales phasellus, enim consectetuer morbi accumsan egestas Pede montes molestie sollicitudin augue nec. Sapien, dui eget sociosqu viverra. Rutrum cras parturient, tellus, diam. Donec potenti ante ultrices lacus </p>', 4, NULL, '2020-03-08 07:03:10', NULL),
(5, 'Top WordPress Themes and Plugins for Travel', '<p class=\"mt-3 text-muted\">Vivamus. Commodo varius tellus nisl tellus pulvinar netus fames a, neque suspendisse tincidunt auctor penatibus taciti lorem mus penatibus quisque, fusce curae;, rutrum. Sit.</p>\r\n                                        <p class=\"mt-3 text-muted\">Molestie cras tempus. Accumsan maecenas enim pretium malesuada aenean tristique malesuada leo tristique sapien vitae molestie, at amet elementum facilisis amet integer. Lobortis quam venenatis ad condimentum felis phasellus eleifend erat vehicula est pede arcu facilisi ultrices ut. </p>\r\n                                        <p class=\"blockquote\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>\r\n                                        <p class=\"mt-3 text-muted\">Non eros. Laoreet netus, sodales phasellus, enim consectetuer morbi accumsan egestas Pede montes molestie sollicitudin augue nec. Sapien, dui eget sociosqu viverra. Rutrum cras parturient, tellus, diam. Donec potenti ante ultrices lacus </p>', 5, NULL, '2020-03-08 07:03:10', NULL),
(6, 'Top WordPress Themes and Plugins for Travel', '<p class=\"mt-3 text-muted\">Vivamus. Commodo varius tellus nisl tellus pulvinar netus fames a, neque suspendisse tincidunt auctor penatibus taciti lorem mus penatibus quisque, fusce curae;, rutrum. Sit.</p>\r\n                                        <p class=\"mt-3 text-muted\">Molestie cras tempus. Accumsan maecenas enim pretium malesuada aenean tristique malesuada leo tristique sapien vitae molestie, at amet elementum facilisis amet integer. Lobortis quam venenatis ad condimentum felis phasellus eleifend erat vehicula est pede arcu facilisi ultrices ut. </p>\r\n                                        <p class=\"blockquote\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>\r\n                                        <p class=\"mt-3 text-muted\">Non eros. Laoreet netus, sodales phasellus, enim consectetuer morbi accumsan egestas Pede montes molestie sollicitudin augue nec. Sapien, dui eget sociosqu viverra. Rutrum cras parturient, tellus, diam. Donec potenti ante ultrices lacus </p>', 6, NULL, '2020-03-08 07:03:10', NULL);

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', '2020-03-08 06:58:44', NULL),
(2, 'Category 2', '2020-03-08 06:58:44', NULL),
(3, 'Category 3', '2020-03-08 06:58:44', NULL),
(4, 'Category 4', '2020-03-08 06:58:44', NULL),
(5, 'Category 5', '2020-03-08 06:58:44', NULL),
(6, 'Category 6', '2020-03-08 06:58:44', NULL);

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `desc`, `remarks`, `file`, `created_at`, `updated_at`) VALUES
(1, '', 'Google', 'The most well-known dummy text is the \'Lorem Ipsum\', which is said originated the 16th century. This ancient dummy text is also incomprehensible, of most European in Latin script.', NULL, NULL, NULL),
(2, '', 'Google', 'The most well-known dummy text is the \'Lorem Ipsum\', which is said originated the 16th century. This ancient dummy text is also incomprehensible, of most European in Latin script.', NULL, NULL, NULL),
(3, '', 'Google', 'The most well-known dummy text is the \'Lorem Ipsum\', which is said originated the 16th century. This ancient dummy text is also incomprehensible, of most European in Latin script.', NULL, NULL, NULL);

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `year`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Studied at Cambridge University', '2010 - 2014', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 1, '2020-03-07 13:00:13', NULL),
(2, 'Master In Computer Science', '2014 - 2016', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 1, '2020-03-07 13:00:13', NULL),
(3, 'UI/UX Designer', '2016 - 2018', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 1, '2020-03-07 13:00:13', NULL),
(4, 'Senior Graphic Designer', '2010 - 2014', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 2, '2020-03-07 13:00:13', NULL),
(5, 'Web Developer', '2014 - 2016', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 2, '2020-03-07 13:00:13', NULL),
(6, 'Freelancer And Themeforest', '2016 - 2018', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 2, '2020-03-07 13:00:13', NULL);

--
-- Dumping data for table `funfacts`
--

INSERT INTO `funfacts` (`id`, `name`, `count`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Working Hours', 654, 'mbri-timer', '2020-03-07 12:59:23', NULL),
(2, 'Completed Projects', 6400, 'mbri-gift', '2020-03-07 12:59:23', NULL),
(3, 'No. of Clients', 2389, 'mbri-user', '2020-03-07 12:59:23', NULL),
(4, 'Team Member', 10, 'mbri-users', '2020-03-07 12:59:23', NULL);

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `desc`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Graphic Design', 'The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.', 'mbri-database', '2020-03-07 12:58:55', NULL),
(2, 'Unlimited Color', 'The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.', 'mbri-website-theme', '2020-03-07 12:58:55', NULL),
(3, 'Media Marketing', 'The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.', 'mbri-growing-chart', '2020-03-07 12:58:55', NULL),
(4, 'Unlimited Wifi', 'The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.', 'mbri-wifi', '2020-03-07 12:58:55', NULL),
(5, 'Responsive Design', 'The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.', 'mbri-responsive', '2020-03-07 12:58:55', NULL),
(6, 'Easy to customize', 'The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.', 'mbri-edit', '2020-03-07 12:58:55', NULL);

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percent`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 80.00, 'Laravel', 1, '2020-03-07 12:29:39', NULL),
(2, 'JavaScript', 85.00, 'React & Vue', 1, '2020-03-07 12:29:39', NULL),
(3, 'Android', 90.00, 'Java & React Native', 1, '2020-03-07 12:29:39', NULL),
(4, 'UI Tools', 95.00, 'Figma, CorelDRAW, Adobe Photoshop', 1, '2020-03-07 12:29:39', NULL),
(5, 'Communication', 75.00, NULL, 2, '2020-03-07 12:29:39', NULL),
(6, 'Leadership', 87.00, NULL, 2, '2020-03-07 12:29:39', NULL),
(7, 'Planning', 80.00, NULL, 2, '2020-03-08 10:35:47', NULL),
(8, 'Organization', 83.00, NULL, 2, '2020-03-08 10:35:47', NULL);

--
-- Dumping data for table `slug_work`
--

INSERT INTO `slug_work` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, '.seo', 'SEO', '2020-03-07 12:28:18', NULL),
(2, '.webdesign', 'Webdesign', '2020-03-07 12:28:18', NULL),
(3, '.work', 'Work', '2020-03-07 12:28:18', NULL),
(4, '.wordpress', 'Wordpress', '2020-03-07 12:28:18', NULL);

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `name`, `address`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/setakarim', 'mdi-facebook', '2020-03-07 12:29:05', NULL),
(2, 'Linkedin', 'https://id.linkedin.com/in/setakarim', 'mdi-linkedin', '2020-03-07 12:29:05', NULL),
(3, 'Github', 'https://github.com/setakarim', 'mdi-github-circle', '2020-03-07 12:29:05', NULL),
(4, 'Instagram', 'https://instagram.com/setakarim', 'mdi-instagram', '2020-03-07 12:29:05', NULL),
(5, 'Twitter', 'https://twitter.com/setakarim', 'mdi-twitter', '2020-03-07 12:29:05', NULL);

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `slug`, `name`, `desc`, `file`, `created_at`, `updated_at`) VALUES
(1, 'webdesign wordpress', 'UI Elements, Icons', 'Studio & Art', NULL, '2020-03-07 12:57:11', NULL),
(2, 'seo webdesign', 'Illustrations', 'Creative & Art', NULL, '2020-03-07 12:58:04', NULL),
(3, 'work', 'Media, Icons', 'Open Imagination', NULL, '2020-03-07 12:58:04', NULL),
(4, 'seo webdesign', 'Graphics, UI Elements', 'Locked Steel Gate', NULL, '2020-03-07 12:58:04', NULL),
(5, 'seo work', 'Illustrations, Graphics', 'Mac Sunglasses', NULL, '2020-03-07 12:58:04', NULL),
(6, 'wordpress', 'UI Elements, Media', 'Backpack Contents', NULL, '2020-03-07 12:58:04', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

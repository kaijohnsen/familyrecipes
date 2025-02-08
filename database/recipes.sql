-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2025 at 09:50 PM
-- Server version: 10.6.20-MariaDB-cll-lve-log
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaijhhjk_familyrecipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `recipe_name` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ingredients` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `special` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `recipe_name`, `ingredients`, `special`, `date`) VALUES
(1, 'Butter Chicken', 'chicken, cream, butter, tomato paste, ketchup, cumin powder, chili powder', 'Tastes great with naan and rice, with a tangy and spicy flavor', '02-07-2025'),
(2, 'Chicken piccata', 'Chicken, lemon, butter and capers', 'I would travel north to visit family and everyone always ordered it. Sadly, the restaurant is gone now.', '02-07-2025'),
(3, 'Daddy Jack subs', 'Ham, pepperoni, salami, veggies and Italian dressing', 'My friend\\\'s grandfather sold these subs, but unfortunately he got Alzheimer\\\'s and passed away. ', '02-07-2025'),
(4, 'Goulash', 'Beef, pasta elbows and tomato sauce', 'My husband was one of 12 kids and this meal brought everyone together despite the chaos', '02-07-2025'),
(5, 'Pickle roll ups', 'Ham, pickles and cream cheese', 'An easy snack that I would share with my friends before track practice.', '02-07-2025'),
(6, 'Salmon patties', 'Salmon, peppers, onions and mayo', 'The salmon was difficult to prepare but my grandma made it because she knew I loved it. ', '02-07-2025'),
(7, 'Asian chicken noodle soup', 'Chicken, veggies, broth and elaborate seasoning', 'It rarely gets cold in my hometown so my mother made this as a special treat even though it took the entire day.', '02-07-2025'),
(8, 'Creamy chicken', 'Chicken and Campbell\\\'s cream of mushroom soup', 'Valentine\\\'s Day wouldn\\\'t be the same if my wife didn\\\'t cook it for us every year.', '02-07-2025'),
(9, 'Chicken stir fry', 'Chicken, veggies and Oyster sauce', 'I learned how to cook because my roommate introduced this recipe to me.', '02-07-2025'),
(10, 'French dips', 'Roast beef and au jus ', 'A generational recipe that never fails! As a busy mom, I understand why my mother made this meal.', '02-07-2025'),
(11, 'Smoked sausage skillet', 'Sausage, white rice, veggies and tomato sauce', 'Found it in a magazine. I may be old, but I make it for my daughter and her kids.', '02-07-2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

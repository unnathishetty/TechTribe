SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `euser` (
  `e_id` varchar(100) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_branch` varchar(100) NOT NULL,
  `e_age` int(50) NOT NULL,
  `e_gender` varchar(50) NOT NULL,
  `e_email` varchar(100) NOT NULL,
  `e_conno` bigint(200) NOT NULL,
  `e_username` varchar(100) NOT NULL,
  `e_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `euser` (`e_id`, `e_name`, `e_branch`, `e_age`, `e_gender`, `e_email`, `e_conno`, `e_username`, `e_password`) VALUES
('22321', 'Alex Fin', 'cse', 33, 'Male', 'alexfin@gmail.com', 9885474412, 'alex123', 'test'),
('58460', 'Akanksha Shetty', 'ece', 22, 'Female', 'akankshapolineni', 901254, 'test', 'test'),
('79959', 'Tobias Eaton', 'me', 24, 'M', 'tobiaseaton4@gmail.com', 805471281, 'tobias4', 'dauntless');

ALTER TABLE `euser`
  ADD PRIMARY KEY (`e_id`);
COMMIT;
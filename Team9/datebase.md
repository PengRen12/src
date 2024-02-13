# table1 : Li Mengyuan
# Feature : log in to membership
CREATE TABLE `memberInfo` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;







# table2 : Zhenliang Hao
# Feature 2 : Feedback and suggestions
CREATE TABLE `Feedback and suggestions` (
  `id` int NOT NULL,
  `Date` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `Phone Number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 CO




# table3 : Du Xiaomeng
# Feature3: Order Online
CREATE TABLE `orderonline` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `beverage_item` varchar(50) NOT NULL,
  `sugar` varchar(50) NOT NULL,
  `temperature` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;





# table4 : Peng Ren
# Feature4 : Recruitment information

CREATE TABLE `Recruitment` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

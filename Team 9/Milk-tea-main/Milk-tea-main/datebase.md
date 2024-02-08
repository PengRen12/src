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




# table3 : Du Xiaomeng
# Feature3: Order Online






# table4 : Peng Ren
# Feature4 : Recruitment information

CREATE TABLE `Recruitment` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

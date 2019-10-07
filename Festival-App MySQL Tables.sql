CREATE TABLE `event` (
  `id` int,
  `event_name` varchar(255),
  `date` date,
  `location` varchar(255)
);

CREATE TABLE `venue` (
  `id` int,
  `rating` int,
  `name` varchar(255),
  `event_id` int,
  `city` varchar(255),
  `state` varchar(255)
);

CREATE TABLE `artist` (
  `venue` int,
  `artist_name` varchar(255),
  `music_genre` varchar(255),
  `artist_website` varchar(255)
);

CREATE TABLE `users` (
  `id` int,
  `full_name` varchar(255),
  `created_at` timestamp,
  `country_code` int
);

CREATE TABLE `merchants` (
  `id` int,
  `merchant_name` varchar(255),
  `country_code` int,
  `created at` varchar(255),
  `admin_id` int
);

CREATE TABLE `countries` (
  `code` int,
  `name` varchar(255),
  `continent_name` varchar(255)
);

CREATE TABLE `order_items` (
  `order_id` int AUTO_INCREMENT,
  `product_id` int,
  `quantity` int DEFAULT 1
);

CREATE TABLE `orders` (
  `id` int PRIMARY KEY,
  `user_id` int UNIQUE NOT NULL,
  `status` varchar(255),
  `created_at` varchar(255)
);

CREATE TABLE `products` (
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `merchant_id` int NOT NULL,
  `price` int,
  `status` ENUM ('out_of_stock', 'in_stock', 'running_low'),
  `created_at` datetime DEFAULT (now())
);

ALTER TABLE `merchants` ADD FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`country_code`) REFERENCES `countries` (`code`);

ALTER TABLE `merchants` ADD FOREIGN KEY (`country_code`) REFERENCES `countries` (`code`);

ALTER TABLE `artist` ADD FOREIGN KEY (`venue`) REFERENCES `venue` (`id`);

ALTER TABLE `order_items` ADD FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

ALTER TABLE `order_items` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `products` ADD FOREIGN KEY (`merchant_id`) REFERENCES `merchants` (`id`);

CREATE INDEX `product_status` ON `products` (`merchant_id`, `status`);

CREATE UNIQUE INDEX `products_index_1` ON `products` (`id`);

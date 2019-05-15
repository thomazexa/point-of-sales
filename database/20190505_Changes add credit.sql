ALTER TABLE `u886954932_toko2`.`products` 
ADD COLUMN `modal_price` varchar(255) NOT NULL AFTER `stock`;


ALTER TABLE `u886954932_toko2`.`products` 
ADD COLUMN `penjualan` enum('CASH','CREDIT') NULL AFTER `price`;

ALTER TABLE `u886954932_toko2`.`products_transactions` 
ADD COLUMN `penjualan` enum('CASH','CREDIT') NULL AFTER `new_stock`;


ALTER TABLE `u886954932_toko2`.`products` 
ADD COLUMN `supplier_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL AFTER `category_id`,
ADD COLUMN `payment_date` date NULL DEFAULT NULL AFTER `received_date`;


ALTER TABLE `u886954932_toko2`.`products_transactions` 
ADD COLUMN `supplier_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL AFTER `received_date`,
ADD COLUMN `payment_date` date NULL DEFAULT NULL AFTER `supplier_price`;


ALTER TABLE `u886954932_toko2`.`orders` 
ADD COLUMN `total_penagihan` varchar(255) NULL AFTER `penjualan`;



///////
ALTER TABLE `u886954932_toko2`.`order_details` 
ADD COLUMN `modal_price` int(11) NULL AFTER `price`;


ALTER TABLE `u886954932_toko2`.`orders` 
ADD COLUMN `total_modal` int(11) NULL AFTER `total`;
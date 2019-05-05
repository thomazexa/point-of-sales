ALTER TABLE `db_toko2`.`products` 
ADD COLUMN `modal_price` varchar(255) NOT NULL AFTER `stock`;


ALTER TABLE `db_toko2`.`products` 
ADD COLUMN `penjualan` enum('CASH','CREDIT') NULL AFTER `price`;

ALTER TABLE `db_toko2`.`products_transaction` 
ADD COLUMN `penjualan` enum('CASH','CREDIT') NULL AFTER `new_stock`;


ALTER TABLE `db_toko2`.`products` 
ADD COLUMN `supplier_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL AFTER `category_id`,
ADD COLUMN `payment_date` date NULL DEFAULT NULL AFTER `received_date`;


ALTER TABLE `db_toko2`.`products_transactions` 
ADD COLUMN `supplier_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL AFTER `received_date`,
ADD COLUMN `payment_date` date NULL DEFAULT NULL AFTER `supplier_price`;
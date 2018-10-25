-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 08:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_assigned_employee`
--

CREATE TABLE `tb_assigned_employee` (
  `employee_code` int(11) NOT NULL,
  `no_wo` int(11) NOT NULL,
  `employee_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_assigned_employee`
--

INSERT INTO `tb_assigned_employee` (`employee_code`, `no_wo`, `employee_name`) VALUES
(1, 2, 'Mulkidi'),
(3, 2, 'Abdan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_detail`
--

CREATE TABLE `tb_item_detail` (
  `item_detail_code` int(11) NOT NULL,
  `item_detail_name` varchar(100) NOT NULL,
  `item_code` int(11) NOT NULL,
  `lead_time` int(11) NOT NULL,
  `packing_size` int(11) NOT NULL,
  `packing_unit` varchar(25) NOT NULL,
  `rop` int(11) NOT NULL,
  `min_level` int(11) NOT NULL,
  `min_order` int(11) NOT NULL,
  `max_level` int(11) NOT NULL,
  `req_month` int(11) NOT NULL,
  `uom` int(11) NOT NULL,
  `manufacture` varchar(50) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_item_detail`
--

INSERT INTO `tb_item_detail` (`item_detail_code`, `item_detail_name`, `item_code`, `lead_time`, `packing_size`, `packing_unit`, `rop`, `min_level`, `min_order`, `max_level`, `req_month`, `uom`, `manufacture`, `vendor`, `status`) VALUES
(102, 'Besi 22mm x 60 mm', 1007, 30, 1, 'Unit', 0, 1, 1, 5, 1, 0, 'Bastra', 'PT Sumber Berkah', 'Active'),
(103, 'Besi 30mm x 80 mm', 1007, 30, 1, 'Unit', 0, 1, 1, 5, 1, 0, 'Bastra', 'PT Sumber Berkah', 'Active'),
(104, 'Paku Beton 10cm', 1008, 30, 1, 'Kg', 0, 1, 1, 5, 1, 0, 'Bastra', 'PT Sumber Berkah', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_master`
--

CREATE TABLE `tb_item_master` (
  `item_code` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `inventory_unit` varchar(20) NOT NULL,
  `item_handling` varchar(50) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `group1` varchar(15) NOT NULL,
  `group2` varchar(30) NOT NULL,
  `group3` varchar(30) NOT NULL,
  `group4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_item_master`
--

INSERT INTO `tb_item_master` (`item_code`, `item_name`, `inventory_unit`, `item_handling`, `specification`, `group1`, `group2`, `group3`, `group4`) VALUES
(1007, 'Besi', 'Unit', 'Suhu 25 - 30', 'Besi untuk mesin A', 'Sparepart', 'Civil', 'OPEX', 'ATK'),
(1008, 'Paku', 'Kg', 'Suhu 25 - 30', '', 'Reagent', 'Civil', 'OPEX', 'ATK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_material_issuance`
--

CREATE TABLE `tb_material_issuance` (
  `no_issuance` int(11) NOT NULL,
  `no_mr` int(11) NOT NULL,
  `issuance_date` date NOT NULL,
  `issuance_status` varchar(15) NOT NULL,
  `wh_adm` varchar(30) NOT NULL,
  `wh_spv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_material_issuance`
--

INSERT INTO `tb_material_issuance` (`no_issuance`, `no_mr`, `issuance_date`, `issuance_status`, `wh_adm`, `wh_spv`) VALUES
(10, 6, '2017-09-30', 'Complete', 'Mawar', 'Adi Sofian'),
(12, 5, '2017-09-30', 'Not Complete', 'Mawar', 'Adi Sofian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_material_rcv`
--

CREATE TABLE `tb_material_rcv` (
  `no_rcv` varchar(11) NOT NULL,
  `po_number` varchar(11) NOT NULL,
  `do_number` varchar(11) NOT NULL,
  `rcv_date` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_material_rcv`
--

INSERT INTO `tb_material_rcv` (`no_rcv`, `po_number`, `do_number`, `rcv_date`, `status`) VALUES
('1001B', 'PO-1', '1221', '2017-09-29', 'Not Complete'),
('121', '1010', '1213', '2017-09-29', 'Not Complete'),
('RCV011', '12321', '11122', '2017-09-29', 'Complete'),
('RCV013', '1002', '121', '2017-09-28', 'Not Complete');

-- --------------------------------------------------------

--
-- Table structure for table `tb_material_req`
--

CREATE TABLE `tb_material_req` (
  `no_mr` int(11) NOT NULL,
  `req_name` varchar(30) NOT NULL,
  `req_dept` varchar(30) NOT NULL,
  `req_date` date NOT NULL,
  `remark` varchar(255) NOT NULL,
  `mr_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_material_req`
--

INSERT INTO `tb_material_req` (`no_mr`, `req_name`, `req_dept`, `req_date`, `remark`, `mr_status`) VALUES
(5, 'Bambang', 'GOJ', '2017-09-11', 'Barang HIlang', 'Complete'),
(6, 'Neni', 'GBK', '2017-09-30', 'Rusak', 'Prepare');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mi_item`
--

CREATE TABLE `tb_mi_item` (
  `no_issuance_detail` int(11) NOT NULL,
  `no_issuance` int(11) NOT NULL,
  `item_detail_code` int(11) NOT NULL,
  `request_qty` int(11) NOT NULL,
  `issuance_qty` int(11) NOT NULL,
  `status_issuance_item` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mi_item`
--

INSERT INTO `tb_mi_item` (`no_issuance_detail`, `no_issuance`, `item_detail_code`, `request_qty`, `issuance_qty`, `status_issuance_item`) VALUES
(13, 10, 103, 3, 0, 'Not Complete'),
(14, 10, 104, 5, 0, 'Not Complete'),
(17, 12, 102, 2, 0, 'Not Complete'),
(18, 12, 104, 1, 0, 'Not Complete');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mr_item`
--

CREATE TABLE `tb_mr_item` (
  `no_mr_detail` int(11) NOT NULL,
  `no_mr` int(11) NOT NULL,
  `item_detail_code` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mr_item`
--

INSERT INTO `tb_mr_item` (`no_mr_detail`, `no_mr`, `item_detail_code`, `qty`) VALUES
(1, 5, 102, 2),
(3, 5, 104, 1),
(4, 6, 103, 3),
(5, 6, 104, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pr_item`
--

CREATE TABLE `tb_pr_item` (
  `pr_detail_code` int(11) NOT NULL,
  `pr_number` int(11) NOT NULL,
  `item_detail_code` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pr_item`
--

INSERT INTO `tb_pr_item` (`pr_detail_code`, `pr_number`, `item_detail_code`, `qty`) VALUES
(11, 4, 102, 2),
(12, 4, 104, 3),
(30, 18, 103, 2),
(31, 19, 102, 5),
(32, 19, 104, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pr_opex`
--

CREATE TABLE `tb_pr_opex` (
  `pr_number` int(11) NOT NULL,
  `pr_date` date NOT NULL,
  `pr_status` varchar(15) NOT NULL,
  `req_name` varchar(30) NOT NULL,
  `req_dept` varchar(50) NOT NULL,
  `pr_priority` varchar(15) NOT NULL,
  `ack_status` varchar(15) NOT NULL,
  `ack_name` varchar(30) NOT NULL,
  `ack_date` date NOT NULL,
  `app_status` varchar(15) NOT NULL,
  `app_name` varchar(30) NOT NULL,
  `app_date` date NOT NULL,
  `po_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pr_opex`
--

INSERT INTO `tb_pr_opex` (`pr_number`, `pr_date`, `pr_status`, `req_name`, `req_dept`, `pr_priority`, `ack_status`, `ack_name`, `ack_date`, `app_status`, `app_name`, `app_date`, `po_number`) VALUES
(4, '2017-09-13', 'Complete', 'Mawar', 'Central Warehouse', 'Normal', 'Complete', 'Adi Sofian', '2017-09-11', 'Complete', 'Adi Sofian', '2017-09-12', '1002'),
(12, '2017-09-27', 'Complete', 'Mawar', '', 'Normal', 'Prepare', 'Mawar', '0000-00-00', 'Prepare', 'Mawar', '0000-00-00', '12321'),
(18, '2017-09-26', 'Complete', 'Mawar', '', 'Normal', 'Prepare', 'Mawar', '0000-00-00', 'Prepare', 'Mawar', '0000-00-00', '1010'),
(19, '2017-09-28', 'Complete', 'Mawar', '', 'Normal', 'Prepare', 'Mawar', '0000-00-00', 'Prepare', 'Mawar', '0000-00-00', 'PO-1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rcv_item`
--

CREATE TABLE `tb_rcv_item` (
  `no_rcv_detail` int(11) NOT NULL,
  `no_rcv` varchar(11) NOT NULL,
  `item_detail_code` int(11) NOT NULL,
  `pr_qty` int(11) NOT NULL,
  `rcv_qty` int(11) NOT NULL,
  `status_rcv_item` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rcv_item`
--

INSERT INTO `tb_rcv_item` (`no_rcv_detail`, `no_rcv`, `item_detail_code`, `pr_qty`, `rcv_qty`, `status_rcv_item`) VALUES
(17, 'RCV013', 102, 2, 2, 'Complete'),
(18, 'RCV013', 104, 3, 3, 'Complete'),
(20, '1001B', 102, 5, 5, 'Complete'),
(21, '1001B', 104, 1, 1, 'Complete'),
(23, '121', 103, 2, 1, 'Not Complete');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stock_opname`
--

CREATE TABLE `tb_stock_opname` (
  `no_stock` int(11) NOT NULL,
  `item_code` int(11) NOT NULL,
  `item_detail_code` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status_item` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stock_opname`
--

INSERT INTO `tb_stock_opname` (`no_stock`, `item_code`, `item_detail_code`, `qty`, `status_item`) VALUES
(3, 1007, 102, 0, 'Normal'),
(4, 1007, 103, 6, 'Normal'),
(5, 1008, 104, 7, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_used_equipment`
--

CREATE TABLE `tb_used_equipment` (
  `equipment_code` int(11) NOT NULL,
  `no_wo` int(11) NOT NULL,
  `item_detail_code` int(11) NOT NULL,
  `equipment_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_used_equipment`
--

INSERT INTO `tb_used_equipment` (`equipment_code`, `no_wo`, `item_detail_code`, `equipment_qty`) VALUES
(1, 2, 104, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_used_part`
--

CREATE TABLE `tb_used_part` (
  `no_part` int(11) NOT NULL,
  `no_wo` int(11) NOT NULL,
  `item_detail_code` int(11) NOT NULL,
  `part_qty` int(11) NOT NULL,
  `part_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_used_part`
--

INSERT INTO `tb_used_part` (`no_part`, `no_wo`, `item_detail_code`, `part_qty`, `part_status`) VALUES
(2, 2, 103, 2, 'Complete'),
(3, 2, 104, 1, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `level`) VALUES
(1, 'admin', '123456', 'admin'),
(4, 'operator', '123456', 'operator'),
(5, 'supervisor', '123456', 'supervisor'),
(6, 'admteknik', '123456', 'admteknik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_work_order`
--

CREATE TABLE `tb_work_order` (
  `no_wo` int(11) NOT NULL,
  `no_wor` int(11) NOT NULL,
  `ack_name` varchar(30) NOT NULL,
  `app_name` varchar(30) NOT NULL,
  `wo_status` varchar(15) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `action` varchar(255) NOT NULL,
  `prevention` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_work_order`
--

INSERT INTO `tb_work_order` (`no_wo`, `no_wor`, `ack_name`, `app_name`, `wo_status`, `start_date`, `finish_date`, `action`, `prevention`) VALUES
(2, 2, 'Mawar', 'Adi Sofian', 'Prepare', '2017-09-20', '2017-09-27', 'Dilakukan Pembongkaran', 'Perawatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_work_order_req`
--

CREATE TABLE `tb_work_order_req` (
  `no_wor` int(11) NOT NULL,
  `wor_priority` varchar(15) NOT NULL,
  `wor_trade` varchar(30) NOT NULL,
  `wor_type` varchar(30) NOT NULL,
  `wor_status` varchar(15) NOT NULL,
  `wor_date` date NOT NULL,
  `req_name` varchar(30) NOT NULL,
  `req_dept` varchar(30) NOT NULL,
  `wor_desc` varchar(255) NOT NULL,
  `couse_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_work_order_req`
--

INSERT INTO `tb_work_order_req` (`no_wor`, `wor_priority`, `wor_trade`, `wor_type`, `wor_status`, `wor_date`, `req_name`, `req_dept`, `wor_desc`, `couse_desc`) VALUES
(2, 'Normal', 'Testing', 'CAPEX', 'Prepare', '2017-09-14', 'Mulkidi', 'GOJ', 'Mesin A Mati', 'Mesin Tidak Dapat Berjalan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_assigned_employee`
--
ALTER TABLE `tb_assigned_employee`
  ADD PRIMARY KEY (`employee_code`),
  ADD KEY `pk14` (`no_wo`);

--
-- Indexes for table `tb_item_detail`
--
ALTER TABLE `tb_item_detail`
  ADD PRIMARY KEY (`item_detail_code`),
  ADD KEY `pk` (`item_code`);

--
-- Indexes for table `tb_item_master`
--
ALTER TABLE `tb_item_master`
  ADD PRIMARY KEY (`item_code`);

--
-- Indexes for table `tb_material_issuance`
--
ALTER TABLE `tb_material_issuance`
  ADD PRIMARY KEY (`no_issuance`),
  ADD KEY `pk18` (`no_mr`);

--
-- Indexes for table `tb_material_rcv`
--
ALTER TABLE `tb_material_rcv`
  ADD PRIMARY KEY (`no_rcv`),
  ADD KEY `pk19` (`po_number`);

--
-- Indexes for table `tb_material_req`
--
ALTER TABLE `tb_material_req`
  ADD PRIMARY KEY (`no_mr`);

--
-- Indexes for table `tb_mi_item`
--
ALTER TABLE `tb_mi_item`
  ADD PRIMARY KEY (`no_issuance_detail`),
  ADD KEY `pk16` (`no_issuance`),
  ADD KEY `pk17` (`item_detail_code`);

--
-- Indexes for table `tb_mr_item`
--
ALTER TABLE `tb_mr_item`
  ADD PRIMARY KEY (`no_mr_detail`),
  ADD KEY `pk2` (`no_mr`),
  ADD KEY `pk1` (`item_detail_code`);

--
-- Indexes for table `tb_pr_item`
--
ALTER TABLE `tb_pr_item`
  ADD PRIMARY KEY (`pr_detail_code`),
  ADD KEY `pk4` (`pr_number`),
  ADD KEY `pk3` (`item_detail_code`);

--
-- Indexes for table `tb_pr_opex`
--
ALTER TABLE `tb_pr_opex`
  ADD PRIMARY KEY (`pr_number`),
  ADD UNIQUE KEY `po_number` (`po_number`);

--
-- Indexes for table `tb_rcv_item`
--
ALTER TABLE `tb_rcv_item`
  ADD PRIMARY KEY (`no_rcv_detail`),
  ADD KEY `pk6` (`no_rcv`),
  ADD KEY `pk5` (`item_detail_code`);

--
-- Indexes for table `tb_stock_opname`
--
ALTER TABLE `tb_stock_opname`
  ADD PRIMARY KEY (`no_stock`),
  ADD KEY `pk7` (`item_code`),
  ADD KEY `pk8` (`item_detail_code`);

--
-- Indexes for table `tb_used_equipment`
--
ALTER TABLE `tb_used_equipment`
  ADD PRIMARY KEY (`equipment_code`),
  ADD KEY `pk11` (`no_wo`),
  ADD KEY `pk15` (`item_detail_code`);

--
-- Indexes for table `tb_used_part`
--
ALTER TABLE `tb_used_part`
  ADD PRIMARY KEY (`no_part`),
  ADD KEY `pk12` (`no_wo`),
  ADD KEY `pk13` (`item_detail_code`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_work_order`
--
ALTER TABLE `tb_work_order`
  ADD PRIMARY KEY (`no_wo`),
  ADD KEY `pk10` (`no_wor`);

--
-- Indexes for table `tb_work_order_req`
--
ALTER TABLE `tb_work_order_req`
  ADD PRIMARY KEY (`no_wor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_assigned_employee`
--
ALTER TABLE `tb_assigned_employee`
  MODIFY `employee_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_item_detail`
--
ALTER TABLE `tb_item_detail`
  MODIFY `item_detail_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `tb_item_master`
--
ALTER TABLE `tb_item_master`
  MODIFY `item_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
--
-- AUTO_INCREMENT for table `tb_material_issuance`
--
ALTER TABLE `tb_material_issuance`
  MODIFY `no_issuance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_material_req`
--
ALTER TABLE `tb_material_req`
  MODIFY `no_mr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_mi_item`
--
ALTER TABLE `tb_mi_item`
  MODIFY `no_issuance_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_mr_item`
--
ALTER TABLE `tb_mr_item`
  MODIFY `no_mr_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_pr_item`
--
ALTER TABLE `tb_pr_item`
  MODIFY `pr_detail_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_pr_opex`
--
ALTER TABLE `tb_pr_opex`
  MODIFY `pr_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_rcv_item`
--
ALTER TABLE `tb_rcv_item`
  MODIFY `no_rcv_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_stock_opname`
--
ALTER TABLE `tb_stock_opname`
  MODIFY `no_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_used_equipment`
--
ALTER TABLE `tb_used_equipment`
  MODIFY `equipment_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_used_part`
--
ALTER TABLE `tb_used_part`
  MODIFY `no_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_work_order`
--
ALTER TABLE `tb_work_order`
  MODIFY `no_wo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_work_order_req`
--
ALTER TABLE `tb_work_order_req`
  MODIFY `no_wor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_assigned_employee`
--
ALTER TABLE `tb_assigned_employee`
  ADD CONSTRAINT `pk14` FOREIGN KEY (`no_wo`) REFERENCES `tb_work_order` (`no_wo`) ON DELETE CASCADE;

--
-- Constraints for table `tb_item_detail`
--
ALTER TABLE `tb_item_detail`
  ADD CONSTRAINT `pk` FOREIGN KEY (`item_code`) REFERENCES `tb_item_master` (`item_code`) ON DELETE CASCADE;

--
-- Constraints for table `tb_material_issuance`
--
ALTER TABLE `tb_material_issuance`
  ADD CONSTRAINT `pk18` FOREIGN KEY (`no_mr`) REFERENCES `tb_material_req` (`no_mr`);

--
-- Constraints for table `tb_material_rcv`
--
ALTER TABLE `tb_material_rcv`
  ADD CONSTRAINT `pk19` FOREIGN KEY (`po_number`) REFERENCES `tb_pr_opex` (`po_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mi_item`
--
ALTER TABLE `tb_mi_item`
  ADD CONSTRAINT `pk16` FOREIGN KEY (`no_issuance`) REFERENCES `tb_material_issuance` (`no_issuance`) ON DELETE CASCADE,
  ADD CONSTRAINT `pk17` FOREIGN KEY (`item_detail_code`) REFERENCES `tb_item_detail` (`item_detail_code`);

--
-- Constraints for table `tb_mr_item`
--
ALTER TABLE `tb_mr_item`
  ADD CONSTRAINT `pk1` FOREIGN KEY (`item_detail_code`) REFERENCES `tb_item_detail` (`item_detail_code`),
  ADD CONSTRAINT `pk2` FOREIGN KEY (`no_mr`) REFERENCES `tb_material_req` (`no_mr`) ON DELETE CASCADE;

--
-- Constraints for table `tb_pr_item`
--
ALTER TABLE `tb_pr_item`
  ADD CONSTRAINT `pk3` FOREIGN KEY (`item_detail_code`) REFERENCES `tb_item_detail` (`item_detail_code`),
  ADD CONSTRAINT `pk4` FOREIGN KEY (`pr_number`) REFERENCES `tb_pr_opex` (`pr_number`) ON DELETE CASCADE;

--
-- Constraints for table `tb_rcv_item`
--
ALTER TABLE `tb_rcv_item`
  ADD CONSTRAINT `pk5` FOREIGN KEY (`item_detail_code`) REFERENCES `tb_item_detail` (`item_detail_code`),
  ADD CONSTRAINT `pk6` FOREIGN KEY (`no_rcv`) REFERENCES `tb_material_rcv` (`no_rcv`) ON DELETE CASCADE;

--
-- Constraints for table `tb_stock_opname`
--
ALTER TABLE `tb_stock_opname`
  ADD CONSTRAINT `pk7` FOREIGN KEY (`item_code`) REFERENCES `tb_item_master` (`item_code`),
  ADD CONSTRAINT `pk8` FOREIGN KEY (`item_detail_code`) REFERENCES `tb_item_detail` (`item_detail_code`);

--
-- Constraints for table `tb_used_equipment`
--
ALTER TABLE `tb_used_equipment`
  ADD CONSTRAINT `pk11` FOREIGN KEY (`no_wo`) REFERENCES `tb_work_order` (`no_wo`) ON DELETE CASCADE,
  ADD CONSTRAINT `pk15` FOREIGN KEY (`item_detail_code`) REFERENCES `tb_item_detail` (`item_detail_code`);

--
-- Constraints for table `tb_used_part`
--
ALTER TABLE `tb_used_part`
  ADD CONSTRAINT `pk12` FOREIGN KEY (`no_wo`) REFERENCES `tb_work_order` (`no_wo`) ON DELETE CASCADE,
  ADD CONSTRAINT `pk13` FOREIGN KEY (`item_detail_code`) REFERENCES `tb_item_detail` (`item_detail_code`);

--
-- Constraints for table `tb_work_order`
--
ALTER TABLE `tb_work_order`
  ADD CONSTRAINT `pk10` FOREIGN KEY (`no_wor`) REFERENCES `tb_work_order_req` (`no_wor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

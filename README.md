# Magento Order Attachment Module For Customers

Add New Tab to the magento order view to add attachments for each order and show these attachments into the customer accont page on front end so they can download them.

===============================
Create a Database table by running the following Query:

CREATE TABLE `dev_magesf_ordercustom` (
  `id_magesf_ordercustom` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `image_url` varchar(155) NOT NULL,
  `image_comments` varchar(155) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `dev_magesf_ordercustom`
--
ALTER TABLE `dev_magesf_ordercustom`
  ADD PRIMARY KEY (`id_magesf_ordercustom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dev_magesf_ordercustom`
--
ALTER TABLE `dev_magesf_ordercustom`
  MODIFY `id_magesf_ordercustom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

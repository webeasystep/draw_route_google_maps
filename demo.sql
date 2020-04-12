
--
-- Table structure for table `search_results`
--

CREATE TABLE `search_results` (
  `id` int(11) NOT NULL,
  `distance_in_kilo` int(11) DEFAULT NULL,
  `distance_in_mile` int(11) DEFAULT NULL,
  `duration_in_text` varchar(255) DEFAULT NULL,
  `TravelMode` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Indexes for table `search_results`
--
ALTER TABLE search_results
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `search_results`
--
ALTER TABLE search_results
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


